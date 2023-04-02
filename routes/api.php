<?php

use App\Http\Controllers\Api\HyperPayController;
use App\Http\Controllers\MyFatoorahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//contact api that accept data from user by contact form and send emails
Route::post('contact','\App\Http\Controllers\Api\ContactController@store')->name('contact');
Route::get('payForAskingService',[MyFatoorahController::class,'payment'])->name('payment.fatoorah');
Route::post('apiTest',[\App\Http\Controllers\AskServiceController::class,'test'])->name('apiTest');
Route::post('hyperPay',[HyperPayController::class,'hyperPay'])->name('hyperpay');


Route::get('getStatus/',[HyperPayController::class,'getStatus'])->name('getStatus');
//location api
Route::controller(\App\Http\Controllers\Api\Location\LocationController::class)->group(function ()
{
  // code...
  Route::get('/regions','getRegions');
  Route::get('/cities/{region_id}','getCitiesByRegion');
  Route::get('/districts/{city_id}','getDistrictByCity');
});
Route::controller(\App\Http\Controllers\Api\Services\getServicesController::class)->group(function ()
{
  // code...
  Route::get('/services','getServices');
  Route::get('/subservices/{service_id}','getSubServicesByService_id');

});
