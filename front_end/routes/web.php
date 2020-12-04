<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('blade-scafolding.home');
});
/*Route::post('/ajax',[FrontendController::class,'ajax']);*/

Route::get('/login',[FrontendController::class,'loginpage']);
Route::get('/regi',[FrontendController::class,'Registrationpage']);
Route::get('/channel',[FrontendController::class,'channelDetails']);
Route::get('/patpage',[FrontendController::class,'afterLoginPatientPage']);
Route::get('/patRecord',[FrontendController::class,'patientRecordPage']);
 
  /*  Doctor Page*/
Route::get('/docpage',[FrontendController::class,'afterLoginDoctoPage']);
Route::get('/docdetail',[FrontendController::class,'docDetailPage']); 
Route::get('/addPrscptn',[FrontendController::class,'addPrescriptionPage']);
/* End Doctor Page*/

  /*  receptionist Page*/
Route::get('/recPage',[FrontendController::class,'receptPage']); 
  /*End receptionist Page*/

/*  Pharmacy Page*/
Route::get('/pharmPage',[FrontendController::class,'pharmasistPage']);
/* End Pharmacy Page*/