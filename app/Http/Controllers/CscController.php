<?php

namespace App\Http\Controllers;
use App\ApplicationForm;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;
use PDF;
use Illuminate\Http\Request;

class CscController extends Controller
{
    //
 public function index()
 {
        $application_forms=ApplicationForm::latest()->get();
        return view('ListOfApplications',compact('application_forms'));
 }
 public function show($id)
{
    $application_forms=ApplicationForm::find($id);
        return view('detailedAppForm', compact('application_forms'));
}
public function forwardToForwarder()
{
       
    $application_forms= new ApplicationForm();
    // $application_forms->Pass_No="ILP00".time();
    $application_forms->Application_No=request('Application_No');
    $application_forms->Application_date=request('Application_date');
    $application_forms->Applicant_Name=request('Applicant_Name');
    $application_forms->Appellation=request('Appellation');
    $application_forms->Suffix=request('Suffix');
    
    $application_forms->EPIC_UID_No=request('EPIC_UID_No');
    $application_forms->DOB=request('DOB');
    $application_forms->gender=request('gender');
    $application_forms->Age=request('Age');
    $application_forms->Religion=request('Religion');
    $application_forms->Occupation=request('Occupation');
    $application_forms->Education=request('Education');
    $application_forms->IdentificationMark=request('IdentificationMark');
    $application_forms->Email=request('Email');
    $application_forms->Contact_No=request('Contact_No');
    $application_forms->Fathers_Name=request('Fathers_Name');
    $application_forms->Appellation_F=request('Appellation_F');
    $application_forms->Suffix_F=request('Suffix_F');
    

    $application_forms->Present_Address_Hno=request('Present_Address_Hno');
    $application_forms->Present_Address_Sub_locality1=request('Present_Address_Sub_locality1');
    $application_forms->Present_Address_Sub_locality2=request('Present_Address_Sub_locality2');
    $application_forms->Present_Address_Location=request('Present_Address_Location');
    $application_forms->Present_Address_Sub_District=request('Present_Address_Sub_District');
    $application_forms->Present_Address_District=request('Present_Address_District');
    $application_forms->Present_Address_State=request('Present_Address_State');
    $application_forms->Present_Address_pin_code=request('Present_Address_pin_code');
    $application_forms->present_Address_Country=request('Present_Address_Country');
    $application_forms->Present_Address_Police_Station=request('Present_Address_Police_Station');
    $application_forms->Present_Address_Post_office=request('Present_Address_Post_office');
    $application_forms->Permanent_Address_Hno=request('Permanent_Address_Hno');
    $application_forms->Permanent_Address_Sub_locality1=request('Permanent_Address_Sub_locality1');
    $application_forms->Permanent_Address_Sub_locality2=request('Permanent_Address_Sub_locality2');
    $application_forms->Permanent_Address_Location=request('Permanent_Address_Location');
    $application_forms->Permanent_Address_Sub_District=request('Permanent_Address_Sub_District');
    $application_forms->Permanent_Address_District=request('Permanent_Address_District');
    $application_forms->Permanent_Address_State=request('Permanent_Address_State');
    $application_forms->Permanent_Address_pin_code=request('Permanent_Address_pin_code');
    $application_forms->Permanent_Address_Country=request('Permanent_Address_Country');
    $application_forms->Permanent_Address_Police_Station=request('Permanent_Address_Police_Station');
    $application_forms->Permanent_Address_Post_office=request('Permanent_Address_Post_office');
    
    $application_forms->E_Roll_SlNo=request('E_Roll_SlNo');
    $application_forms->Part_No=request('Part_No');
    $application_forms->Constituency=request('Constituency');
    $application_forms->Sponsor_Name=request('Sponsor_Name');
    $application_forms->Sponsors_Father_name=request('Sponsors_Father_name');
    $application_forms->Sponsors_EPIC_UID_No=request('Sponsors_EPIC_UID_No');
    $application_forms->No_of_Non_Mizos_Presently_Sponsored=request('No_of_Non_Mizos_Presently_Sponsored');
    $application_forms->Provisional_Pass_No=request('Provisional_Pass_No');
    $application_forms->sponsor_address_Hno=request('sponsor_address_Hno');
    $application_forms->sponsor_address_Sub_locality1=request('sponsor_address_Sub_locality1');
    $application_forms->sponsor_address_Sub_locality2=request('sponsor_address_Sub_locality2');
    $application_forms->sponsor_address_Location=request('sponsor_address_Location');
    $application_forms->sponsor_address_Sub_District=request('sponsor_address_Sub_District');
    $application_forms->sponsor_address_District=request('sponsor_address_District');
    $application_forms->sponsor_address_State=request('sponsor_address_State');
    $application_forms->sponsor_address_pin_code=request('sponsor_address_pin_code');
    $application_forms->sponsor_address_Police_Station=request('sponsor_address_Police_Station');
    $application_forms->sponsor_address_Post_office=request('sponsor_address_Post_office');
    
    $application_forms->VC=request('VC');
    $application_forms->H_No=request('H_No');
    $application_forms->Purpose_of_stay=request('Purpose_of_stay');
    $application_forms->Need_for_labour=request('Need_for_labour');
    $application_forms->Regd_No=request('Regd_No');
    $application_forms->LSC_No=request('LSC_No');
    $application_forms->Skilled_SemiSkilled_Unskilled=request('Skilled_SemiSkilled_Unskilled');
    $application_forms->Validaty_Period=request('Validaty_Period');
    $application_forms->Remark=request('Remark');
    $application_forms->Reason_For_Extension=request('Reason_For_Extension');
    //
    //FOR DOC 1
    //
    //handle file upload
    // if($request->hasfile('doc1')){
    //     //get filename with extention
    //     $filenameWIthExt=$request->file('doc1')->getClientOriginalName();
    //     //get just filename
    //     $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
    //     //get just extention
    //     $ext = $request->file('doc1')->getClientOriginalExtension();
    //     //filename to store
    //     $filenametostore = $filename.'_'.time().'.'.$ext;
    //     //upload the img
    //     $path= $request->file('doc1')->storeAs('public/documents_1', $filenametostore);
    // }
    // else{
    //     $path = 'noimage.jpg';
    // }
    // // dd($filenametostore);

    // // $file = new ApplicationForm;
    // $application_forms->doc1 =$filenametostore;
    // //
    // //FOR DOC 2
    // //
    // //handle file upload
    // if($request->hasfile('doc2')){
    //     //get filename with extention
    //     $filenameWIthExt=$request->file('doc2')->getClientOriginalName();
    //     //get just filename
    //     $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
    //     //get just extention
    //     $ext = $request->file('doc2')->getClientOriginalExtension();
    //     //filename to store
    //     $filenametostore = $filename.'_'.time().'.'.$ext;
    //     //upload the img
    //     $path= $request->file('doc2')->storeAs('public/documents_2', $filenametostore);
    // }
    // else{
    //     $path = 'noimage.jpg';
    // }
    // // $file = new ApplicationForm;
    // $application_forms->doc2 =$filenametostore;
    
    

    $application_forms->save();
    // dd($application_forms);
    return redirect('/home')->with('mssg','Form Filled Succesfully'); 

}
public function gettingback($id)
{
    $application_forms = ApplicationForm::where('id', $id)->first();
    return view('gettingback', compact('application_forms'));
}
 public function retrieve(Request $request, $id)
 {
     //here update code should be written
    $application_forms = ApplicationForm ::where('id',$id)->first();
    $application_forms->Application_No=request('Application_No');
    $application_forms->Application_date=request('Application_date');
    $application_forms->Applicant_Name=request('Applicant_Name');
    $application_forms->Appellation=request('Appellation');
    $application_forms->Suffix=request('Suffix');
    
    
    $application_forms->EPIC_UID_No=request('EPIC_UID_No');
    $application_forms->DOB=request('DOB');
    $application_forms->gender=request('gender');
    $application_forms->Age=request('Age');
    $application_forms->Religion=request('Religion');
    $application_forms->Occupation=request('Occupation');
    $application_forms->Education=request('Education');
    $application_forms->IdentificationMark=request('IdentificationMark');
    $application_forms->Email=request('Email');
    $application_forms->Contact_No=request('Contact_No');
    $application_forms->Fathers_Name=request('Fathers_Name');
    $application_forms->Appellation_F=request('Appellation_F');
    $application_forms->Suffix_F=request('Suffix_F');
    

    

    $application_forms->Present_Address_Hno=request('Present_Address_Hno');
    $application_forms->Present_Address_Sub_locality1=request('Present_Address_Sub_locality1');
    $application_forms->Present_Address_Sub_locality2=request('Present_Address_Sub_locality2');
    $application_forms->Present_Address_Location=request('Present_Address_Location');
    $application_forms->Present_Address_Sub_District=request('Present_Address_Sub_District');
    $application_forms->Present_Address_District=request('Present_Address_District');
    $application_forms->Present_Address_State=request('Present_Address_State');
    $application_forms->Present_Address_pin_code=request('Present_Address_pin_code');
    $application_forms->present_Address_Country=request('Present_Address_Country');
    $application_forms->Present_Address_Police_Station=request('Present_Address_Police_Station');
    $application_forms->Present_Address_Post_office=request('Present_Address_Post_office');
    $application_forms->Permanent_Address_Hno=request('Permanent_Address_Hno');
    $application_forms->Permanent_Address_Sub_locality1=request('Permanent_Address_Sub_locality1');
    $application_forms->Permanent_Address_Sub_locality2=request('Permanent_Address_Sub_locality2');
    $application_forms->Permanent_Address_Location=request('Permanent_Address_Location');
    $application_forms->Permanent_Address_Sub_District=request('Permanent_Address_Sub_District');
    $application_forms->Permanent_Address_District=request('Permanent_Address_District');
    $application_forms->Permanent_Address_State=request('Permanent_Address_State');
    $application_forms->Permanent_Address_pin_code=request('Permanent_Address_pin_code');
    $application_forms->Permanent_Address_Country=request('Permanent_Address_Country');
    $application_forms->Permanent_Address_Police_Station=request('Permanent_Address_Police_Station');
    $application_forms->Permanent_Address_Post_office=request('Permanent_Address_Post_office');
    
    $application_forms->E_Roll_SlNo=request('E_Roll_SlNo');
    $application_forms->Part_No=request('Part_No');
    $application_forms->Constituency=request('Constituency');
    $application_forms->Sponsor_Name=request('Sponsor_Name');
    $application_forms->Sponsors_Father_name=request('Sponsors_Father_name');
    $application_forms->Sponsors_EPIC_UID_No=request('Sponsors_EPIC_UID_No');
    $application_forms->No_of_Non_Mizos_Presently_Sponsored=request('No_of_Non_Mizos_Presently_Sponsored');
    $application_forms->Provisional_Pass_No=request('Provisional_Pass_No');
    $application_forms->sponsor_address_Hno=request('sponsor_address_Hno');
    $application_forms->sponsor_address_Sub_locality1=request('sponsor_address_Sub_locality1');
    $application_forms->sponsor_address_Sub_locality2=request('sponsor_address_Sub_locality2');
    $application_forms->sponsor_address_Location=request('sponsor_address_Location');
    $application_forms->sponsor_address_Sub_District=request('sponsor_address_Sub_District');
    $application_forms->sponsor_address_District=request('sponsor_address_District');
    $application_forms->sponsor_address_State=request('sponsor_address_State');
    $application_forms->sponsor_address_pin_code=request('sponsor_address_pin_code');
    $application_forms->sponsor_address_Police_Station=request('sponsor_address_Police_Station');
    $application_forms->sponsor_address_Post_office=request('sponsor_address_Post_office');
    
    $application_forms->VC=request('VC');
    $application_forms->H_No=request('H_No');

    $application_forms->Purpose_of_stay=request('Purpose_of_stay');
    $application_forms->Need_for_labour=request('Need_for_labour');
    $application_forms->Regd_No=request('Regd_No');
    $application_forms->LSC_No=request('LSC_No');
    $application_forms->Skilled_SemiSkilled_Unskilled=request('Skilled_SemiSkilled_Unskilled');
    $application_forms->Validaty_Period=request('Validaty_Period');
    $application_forms->Remark=request('Remark');
    $application_forms->Reason_For_Extension=request('Reason_For_Extension');
    
    // FOR DOC 1
    
    // // handle file upload
    // if($request->hasfile('doc1')){
    //     //get filename with extention
    //     $filenameWIthExt=$request->file('doc1')->getClientOriginalName();
    //     //get just filename
    //     $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
    //     //get just extention
    //     $ext = $request->file('doc1')->getClientOriginalExtension();
    //     //filename to store
    //     $filenametostore = $filename.'_'.time().'.'.$ext;
    //     //upload the img
    //     $path= $request->file('doc1')->storeAs('public/documents_1', $filenametostore);
    // }
    // else{
    //     $path = 'noimage.jpg';
    // }
    // // dd($filenametostore);

    // // $file = new ApplicationForm;
    // $application_forms->doc1 =$filenametostore;
    // //
    // //FOR DOC 2
    // //
    // //handle file upload
    // if($request->hasfile('doc2')){
    //     //get filename with extention
    //     $filenameWIthExt=$request->file('doc2')->getClientOriginalName();
    //     //get just filename
    //     $filename = pathinfo($filenameWIthExt, PATHINFO_FILENAME);
    //     //get just extention
    //     $ext = $request->file('doc2')->getClientOriginalExtension();
    //     //filename to store
    //     $filenametostore = $filename.'_'.time().'.'.$ext;
    //     //upload the img
    //     $path= $request->file('doc2')->storeAs('public/documents_2', $filenametostore);
    // }
    // else{
    //     $path = 'noimage.jpg';
    // }
    // // $file = new ApplicationForm;
    // $application_forms->doc2 =$filenametostore;
    
   $application_forms->Remarks_from_forwarder='NULL';
    $application_forms->Remarks_from_adc='NULL';
   
    
    $application_forms->A='bgf';
    $application_forms->B='jhg';
    
    $application_forms->Certificate='abc';
    $application_forms->Acknowledgement='NULL';

    $application_forms->save();

    
    $data= ApplicationForm::find($id);
    $applicantName = $data->Applicant_Name;
    $passNo = $data->Pass_No;
    $receiverMail = $data->Email;
   $msg="Hello $applicantName, your application form bearing INNER LINE PASS NUMBER $passNo for the renewal of inner line pass has been forwarder by  the kiosk operator";
   $abs=$data->Email;
   $receiverMail = $abs;
//   dd($receiverMail);
    $data = array("body"=>$msg);

    Mail::send('email',$data,function($message) use ($receiverMail,$applicantName)
    
    {    $message->to($receiverMail,$applicantName)
        ->subject("$applicantName YOUR APPLICATION FOR THE RENEWAL OF INNER LINE PASS  HAS BEEN FORWARDER BY KIOSK OPERATOR ");
        $message->from("abc@mail.com","INNER LINE PASS");
        $message->replyTo("aktricks999@gmail.com");

    }); 
//     // dd($receiverMail);





    return view("home");
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

public function Acknowledgement($id){
    $applicant = ApplicationForm:: find($id);
   
  
    // dd($applicant);
    $pdf = PDF::loadView('Acknowledgement',compact('applicant'));
    $fileName ="";
    try{
        $fileName = $applicant->Application_No;
    }
    catch(Exception $e)
    {
        $fileName = 'myInfo';
    }
   
    $applicant->Acknowledgement="Downloaded";
    $applicant->save();
   
    //return $pdf->stream();
    return $pdf->download($fileName.'.pdf');

}

public function certificate($id){
    $status = ApplicationForm:: find($id);
    $passno='CERTI'.$status->Pass_No."FICATE";
    //dd ($passno);
    $pdf = PDF::loadView('certificate',compact('status','passno'));
    $fileName ="CERTI_";
    try{
        $fileName = $status->Application_No;
    }
    catch(Exception $e)
    {
        $fileName = 'myInfo';
    }
   
  
    // return $pdf->stream();
    // $applicant->Certificate="Downloaded";
    // $applicant->save();
     return $pdf->download($fileName.'.pdf');
}
}

//ashwani


