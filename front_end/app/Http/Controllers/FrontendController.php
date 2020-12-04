<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     /*public function ajax(Request $request){
    	return response()->json(['success'=>'This was saved',]);
    }
*/

    public function loginpage(){
    	return view('blade-scafolding.login');
    }
    public function Registrationpage(){
    	return view('blade-scafolding.register');
    }
    public function channelDetails(){
    	return view('blade-scafolding.channelDet');
    }
    public function afterLoginPatientPage(){
    	return view('blade-scafolding.patientpage');
    }
    public function patientRecordPage(){
        return view('blade-scafolding.patientRecord');
    }
    

    /*  Doctor Page*/
    public function afterLoginDoctoPage(){
        return view('blade-scafolding.doctorPage');
    }
    public function addPrescriptionPage(){
        return view('blade-scafolding.addPrescription');
    }
    /* End Doctor Page*/
    

    /*  receptionist Page*/
    public function receptPage(){
        return view('blade-scafolding.receptionistPage');
    }
    /*End receptionist Page*/
     

    /*  Pharmacy Page*/
    public function pharmasistPage(){
        return view('blade-scafolding.pharmasist');
    }
    /* End Pharmacy Page*/
   
}
