<?php

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
    return view('welcome');
});
Route::get('/disCal', function () {
    return view('disCal');
});
Route::post('/disCal', function (Illuminate\Http\Request $request) {
    if (isset($_REQUEST['submit'])) {
        return view('disCalResult');
    }
    return 'nothing here';
});
Route::get('/simpleDict', function () {
        return view('simpleDict');
});
Route::post('/simpleDict',function (){
    if (isset($_REQUEST['submit']))
        return view('simpleDict');
});
