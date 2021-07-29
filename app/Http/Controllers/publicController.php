<?php

namespace App\Http\Controllers;
use App\ApplicationForm;
use Illuminate\Http\Request;

class publicController extends Controller
{
   
    public function find(Request $request)
    {
           
       
        $app=$_GET['ApplicationNo'];
        $application_forms=ApplicationForm::where([
            ['Application_No','=',$app]
            ])->first();
           
        if($application_forms){

            if($application_forms->A=="waiting")
        {
            if($application_forms->B=="waiting"){
                return redirect("/homepage")->with("msg"," THE APPLICATION NUMBER IS NOT APPLIED FOR  ANY RENEWAL PROCESS");
            }
        }


          if($application_forms->Remarks_from_forwarder=="NULL")
        {
            if($application_forms->Remarks_from_adc=="NULL"){
                return redirect("/homepage")->with("pending","Application status:  pending. Waiting for the forwarder and officer to approve your application");
            }
        }
        elseif($application_forms->Remarks_from_forwarder=="Accepted")
        {
            if($application_forms->Remarks_from_adc=="Accepted"){
                return redirect("/homepage")->with("message","Application status:accepted
                .YOU MAKE COLLECT YOUR CERTIFICATE FROM ANY CSC");
            }
        }
         
        elseif($application_forms->UPDATION_FROM_CSC=="Rejected")
        {
            
        
            return redirect("/homepage")->with("msg","Application status:rejected.    Remarks from forwarder is -$application_forms->Remarks_from_forwarder");
        
        }
       

        // elseif(!$application_forms->Remarks_from_adc=="NULL" )
        // {
        //     if($application_forms->Remarks_from_forwarder=="NULL"){
              
        //         if($application_forms->UPDATION_FROM_CSC==""){
              
        //             return redirect("/homepage")->with("msg","Application status:VERIFY");
                
        //         }
                
        //     }
        // }
         

        }




        else if(!$application_forms)
            return redirect('/homepage')->with('msg', 'Please enter the valid Application No');
    }



    
    

} 