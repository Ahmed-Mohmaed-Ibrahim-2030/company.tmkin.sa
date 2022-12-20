<?php

use App\Http\Controllers\MyFatoorahController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[\App\Http\Controllers\Client\HomeController::class,'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\Client\AboutController::class,'index'])->name('about');
Route::get('/services',[\App\Http\Controllers\Client\ServicesController::class,'index'])->name('services');
Route::get('/portfolio',[\App\Http\Controllers\Client\ProjectsController::class,'index'])->name('portfolio');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/test-mail',[\App\Http\Controllers\Api\ContactController::class,'index']);
//Route::post('/contact',[\App\Http\Controllers\Api\ContactController::class,'store'])->name('contact');
Route::view('/test','layouts.askService')->name('service_request');
Route::get('success',[\App\Http\Controllers\MyFatoorahController::class,'callBack']);
Route::post('pay',[MyFatoorahController::class,'payForm'])->name('payform');
Route::get('paytest',[MyFatoorahController::class,'paymentTest'])->name('payTest');
Route::view('part','client.new-partner')->name('add-new-partner');
//Route::post('apiTest',[\App\Http\Controllers\AskServiceController::class,'test'])->name('apiTest');
Route::get('payment/{id}',function ($id){
    return view('ajax.form',['id'=>$id]);
})->name('payment');
// Route::get('cities',[\App\Http\Controllers\CityController::class,'index']);
Route::get('cities',[\App\Http\Controllers\RegionController::class,'index']);
