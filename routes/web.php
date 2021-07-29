<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::get('/', function () {
    return view('welcome');
});
// 
// INNER LINE PASS
// 
// 
// 
Route::get("/homepage",function () {
  return view('homepage');
});
///////////////////////////////
///////  KYA BOLTI PUBLIC!!!!!!!!!!!
Route::get('check','publicController@find');
/////////////////////////////////

  // 
  // CSC
  // 

Route::get('/csc', function () {
  return view('csc');
});
/////////// storing in database
Route::get('/ApplicationForm', 'ApplicationFormController@index');
Route::post('/store_form','ApplicationFormController@store');
//////////// searching from database for acknowledgement and certificate
Route::get('/retrieve', 'ApplicationFormController@retrieve');
Route::get('/autofill','ApplicationFormController@autofill');
//////////////////////// renewal process
Route::get('/ListOfApplications','CscController@index');
Route::get('/cscApplicationForm/{id}','CscController@show');
////////////// getting back the data for data base










//////////////

Route::post('/forwardToForwarder','CscController@forwardToForwarder');
Route::get('/gettingback/{id}','CscController@gettingback');
Route::post('/gettingback/retrieve/{id}','CscController@retrieve');
// 
// 
// 
// for forward
// 
Route::get('/forwarder','forwarderController@index');
Route::get('/info/{id}', 'forwarderController@show');
// Route::post('store/{id}', 'forwarderController@store');
Route::get('/download1/{id}', 'forwarderController@download1');
Route::get('/download2/{id}', 'forwarderController@download2');
Route::post('/remarksByForwarder/{id}', 'forwarderController@remarksByForwarder');
Route::post('/reject/{id}', 'forwarderController@remarks');
// 
// officer
// 
//
Route::get('/officer', 'officerController@index');
Route::post('/officer', 'officerController@index');
// Route::post('/store', 'officerController@store');
Route::get('/officerDetails/{id}', 'officerController@show');
Route::post('/remarkOff/{id}', 'officerController@update');
Route::post('/rejectOff/{id}', 'officerController@remarks');



// 
// 
// 
// 


// Route::get('/showme', 'ApplicationFormController@showme');

Route::get('/ack/{id}','CscController@Acknowledgement');
Route::get('/ceti/{id}','CscController@certificate');


Route::get('/home', 'HomeController@index') -> name ('home');
Auth::routes(


  // ['register'=>false]     // use this for disabling the registration in future


);


////// extras

Route::get('/search','ApplicationFormController@search');





















//// testing
Route::get("/doubt",function () {
  return view('doubts_solving');
});
Route::get("/news",function () {
  return view('news');
});


Route::get('/final', function () {
  return view('index');
});






















// Route::get('/register', function () {
//   return view('/register');
// });






// 
// LEARNING
// 
// 
//   Route::get('/pizza_welcome',function(){
//       return view('pizza.welcome');

//   });
//   Route::get('/pizza','pizzaController@index');
//   Route::post('/pizza_welcome','pizzaController@store');
//   Route::delete('/pizza/{id}','pizzaController@destroy');
 
//  Route::get('/pizza/{id}','pizzaController@show');
// Route::get('/create','pizzaController@create');



















// 
// learm mvc
// 
// Route::get('/form','AshuController@index');
// Route::post('/welcome','AshuController@store');
// Route::get('/display','AshuController@show');



// 
// dummies
// 


// Route::get('/dummy', 'DummyController@index');  
// Route::post('/dummy', 'DummyController@store'); 
// Route::get('/dummy', 'DummyController@show'); 
// /
// bio
// 
// 
// Route::get('/prac', function(){
//   return view('prac');
// });

