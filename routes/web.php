<?php

use App\Http\Controllers\HomeController;
use GuzzleHttp\Psr7\Request;
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

Route::get('/', function () {
    return view('Index');
});

Route::get('/Index', function () {
    return view('Index');
});

Route::get('/Support', function () {
    return view('Support');
});

Route::get('/EnvEngineer', function () {
    return view('EnvEngineer');
});

Route::get('/EnvService', function () {
    return view('EnvService');
});

Route::get('/OtherService', function () {
    return view('OtherService');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/company-organization', function () {
    return view('company-organization');
});


Route::get('/AboutMe', function () {
    return view('AboutMe');
});

Route::get('/License', function () {
    return view('License');
});

Route::get('/HR', function () {
    return view('HR');
});

Route::get('/Philosophy', function () {
    return view('Philosophy');
});

Route::get('/Sell', function () {
    return view('Sell');
});

Route::get('/Atmosphere', function () {
    return view('Atmosphere');
});

Route::get('/Boon', function () {
    return view('Boon');
});

Route::get('/TravPic',function(){
    return view('TravPic');
});

Route::get('/TravPic_1',function(){
    return view('PicPage/TravPic_1');
});

Route::get('/TravPic_2',function(){
    return view('PicPage/TravPic_2');
});

Route::get('/TravPic_3',function(){
    return view('PicPage/TravPic_3');
});

Route::get('/TravPic_4',function(){
    return view('PicPage/TravPic_4');
});

Route::get('/Contact_us', function () {
    return view('Contact_us');
});







//專業營照工程實績
Route::get('/Incinerator', function () {
    return view('/Achieve/Incinerator');
});

Route::get('/AirPollution',function(){
    return view('/Achieve/AirPollution');
});

Route::get('/Sewage',function(){
    return view('/Achieve/Sewage');
});

Route::get('/EnvEngineering',function(){
    return view('/Achieve/EnvEngineering');
});

Route::get('/WREOther',function(){
    return view('/Achieve/WREOther');
});

Route::get('/Landfill',function(){
    return view('/Achieve/Landfill');
});

Route::get('/WasteDisposal',function(){
    return view('/Achieve/WasteDisposal');
});

Route::get('/WasteRemoval',function(){
    return view('/Achieve/WasteRemoval');
});

Route::get('/Reuse',function(){
    return view('/Achieve/Reuse');
});

Route::get('/EnvDocument',function(){
    return view('/Achieve/EnvDocument');
});


Route::get('/EnvAssessment',function(){
    return view('/Achieve/EnvAssessment');
});

Route::get('/PromoteCase',function(){
    return view('/Achieve/PromoteCase');
});

Route::get('/LandDevCase',function(){
    return view('/Achieve/LandDevCase');
});

Route::get('/ECDP',function(){
    return view('/Achieve/ECDP');
});

Route::post('/ContactUs_form',[HomeController::class,'sendMail']);

