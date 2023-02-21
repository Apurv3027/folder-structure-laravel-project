<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/demo/{name}/{id?}',function($name,$id=null){
    // echo "Hello ".$name."!<br>";
    // echo "Your Id is: ".$id;
    $data = compact('name','id');
    return view('demo')->with($data);
});

Route::any('/test',function(){
    echo "Testing the route";
});

Route::get('/home/{name?}',function($name = null){
    $data = compact('name');
    return view('home')->with($data);
});