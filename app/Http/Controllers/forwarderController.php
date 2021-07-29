<?php

namespace App\Http\Controllers;
use App\ApplicationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;


class forwarderController extends Controller
{
    public function index(){
    $application_forms=ApplicationForm::where([
        ['Remarks_from_forwarder','=','NULL']
    ])->get();
    // dd ($application_forms);
    return view('forwarder',['application_forms'=>$application_forms]);

    }

    public function show($id){
        $application_forms=ApplicationForm::find($id);
        return view('show_forwarder', compact('application_forms'));
            
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
    public function remarksByForwarder(request $request, $id)
    {
        $data= ApplicationForm::find($id);
        // echo ($data);
        if($request->has('Accept')){
             $data->Remarks_from_forwarder="Accepted";
             $data->save();
//                  MAIL

// $data= ApplicationForm::find($id);

//              $applicantName = $data->Applicant_Name;
//              $passNo = $data->Pass_No;
//              $receiverMail = $data->Email;
//             $msg="Hello $applicantName, your application form bearing INNER LINE PASS NUMBER $passNo has been approved for the renewal of inner line pass  by FORWARDER";
//             $abs=$data->Email;
//             $receiverMail = $abs;
//          //   dd($receiverMail);
//              $data = array("body"=>$msg);
      
//              Mail::send('email',$data,function($message) use ($receiverMail,$applicantName)
//              {    $message->to($receiverMail,$applicantName)
//                  ->subject("$applicantName YOUR APPLICATION FOR THE RENEWAL OF INNER LINE PASS  HAS BEEN APPROVED ");
//                  $message->from("abc@mail.com","INNER LINE PASS");
//                  $message->replyTo("aktricks999@gmail.com");
     
//              });






              return view('home');
        }
        else{
            $data->UPDATION_FROM_CSC="Rejected";
            $data->save();
            return view('rejectionByForwarder',compact('data'));
            //  return view('home');
        }
       
    }
    public function remarks($id)
    {
        $data= ApplicationForm::find($id);
        $data->Remarks_from_forwarder=request('remarks');
        $data->save();
//          MAIL
$data= ApplicationForm::find($id);
$remarksByAdc=$data->Remarks_from_adc;
$applicantName = $data->Applicant_Name;
$passNo = $data->Pass_No;
$msg="Hello $applicantName, your application form bearing INNER LINE PASS NUMBER $passNo has been REJECTED for the renewal of inner line pass  by FORWARDER .";
$abs=$data->Email;
$receiverMail = $abs;
//   dd($receiverMail);
 $data = array("body"=>$msg);

 Mail::send('email',$data,function($message) use ($receiverMail,$applicantName)
 {    $message->to($receiverMail,$applicantName)
     ->subject("$applicantName YOUR APPLICATION FOR THE RENEWAL OF INNER LINE PASS  HAS BEEN REJECTED BY FORWARDER ");
     $message->from("abc@mail.com","INNER LINE PASS");
     $message->replyTo("aktricks999@gmail.com");

 });



        return view('home');
    }


//     public function store($id)
// {
    
//     $application_forms= ApplicationForm::where('id',$id)->first();
//     $application_forms->Note_sheet=request('Note_sheet');
//     $application_forms->Due_date_for_decision_of_application_o=request('Due_date_for_decision_of_application_o');
//     $application_forms->Target_date=request('Target_date');
   
//     $application_forms->save();


// }

}
