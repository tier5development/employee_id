<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('employees', 'EmployeeController');
Route::resource('api/nerds', 'NerdController');

Route::any('/android', function () {
	 $name = 'download';
     $localFileName  = '../storage/uploads/'.$name.'.jpg';
     $fileData = file_get_contents($localFileName);
     $ImgfileEncode = base64_encode($fileData);

    echo $ImgfileEncode;
    exit;
});