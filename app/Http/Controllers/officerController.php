<?php

namespace App\Http\Controllers;
use App\ApplicationForm;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;

class officerController extends Controller  
{

    public function index(){
        $application_forms=ApplicationForm::where([
            ['Remarks_from_Forwarder','=','Accepted'],
            ['Remarks_from_adc','=','Null'],
        ])->get();
        
        //$application_forms=DB::select('select * from application_forms where  Remarks_from_Forworder= ?', ['Accepted']);
        return view('officer',['application_forms'=>$application_forms]);
    }
   
 public function show($id){
        $application_forms= ApplicationForm::find($id);
        return view('officerDetails')->with('application_forms', $application_forms);

    }
    public function download1($id){
        $application_forms= ApplicationForm::find($id);
        $filename = $application_forms->doc1;
        //dd($filename);
        $file_path =public_path()."/storage/documents_1/".$filename;
        //for download
        //dd($file_path);
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }
    public function download2($id){
        $application_forms= ApplicationForm::find($id);
        $filename = $application_forms->doc2;
        //dd($filename);
        $file_path =public_path()."/storage/documents_2/".$filename;
        //for download
        //dd($file_path);
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }

    public function update(Request $request , $id){
        //dd($request->myButton);
        $status = $request->status;

        $data= ApplicationForm::find($id);
        // dd($data->Email);

        if($status=="accept"){
           
            $data->Remarks_from_adc="Accepted";
            $data->save();
            $applicantName = $data->Applicant_Name;
            $passNo = $data->Pass_No;
            $receiverMail = $data->Email;
           $msg="Hello $applicantName, your application form bearing INNER LINE PASS NUMBER $passNo has been approved for the renewal of inner line pass  by officer";
           $abs=$data->Email;
           $receiverMail = $abs;
        //   dd($receiverMail);
            $data = array("body"=>$msg);
     
            Mail::send('email',$data,function($message) use ($receiverMail,$applicantName)
            {    $message->to($receiverMail,$applicantName)
                ->subject("$applicantName YOUR APPLICATION FOR THE RENEWAL OF INNER LINE PASS  HAS BEEN APPROVED BY OFFICER ");
                $message->from("abc@mail.com","INNER LINE PASS");
                $message->replyTo("aktricks999@gmail.com");
    
            });

            // $applicant->Certificate="abc";
            // $applicant->save();
          
            return redirect("/officer");
            
        }
        elseif($status=="reject")
        {
            return view ('reasonOfRejectionByOfficer',['application_forms'=>$data]);

            }
        
 }

      
    

    public function remarks(Request $request , $id){
        $data= ApplicationForm::find($id);
        //dd($status);
        //$test = request('Remarks_from_Forworder');
        //dd($test);
        $data->Remarks_from_adc =request('Remarks_from_adc');
        $data->Remarks_from_forwarder="NULL";
        $data->save();

       
    //     $applicantName = $data->Applicant_Name;
    //     $passNo = $data->Pass_No;
    //     $msg="Hello $applicantName, your application form bearing INNER LINE PASS NUMBER $passNo has been REJECTED for the renewal of inner line pass  by officer .";
    //     $abs=$data->Email;
    //     $receiverMail = $abs;
    //  //   dd($receiverMail);
    //      $data = array("body"=>$msg);
  
    //      Mail::send('email',$data,function($message) use ($receiverMail,$applicantName)
    //      {    $message->to($receiverMail,$applicantName)
    //          ->subject("$applicantName YOUR APPLICATION FOR THE RENEWAL OF INNER LINE PASS  HAS BEEN REJECTED BY OFFICER ");
    //          $message->from("abc@mail.com","INNER LINE PASS");
    //          $message->replyTo("aktricks999@gmail.com");
 
    //      });


        return redirect('/officer');
    }
    
//     public function store(Request $request)
// {
    
//     $application_forms= new ApplicationForm();
//     $application_forms->Note_sheet=request('Note_sheet');
//     $application_forms->Note_sheet_file_number= "NS".time();
//     $application_forms->Due_date_for_decision_of_application_o=request('Due_date_for_decision_of_application_o');
//     $application_forms->Target_date_o=request('Target_date_o');
   
//     $application_forms->save();


// }

  
}










