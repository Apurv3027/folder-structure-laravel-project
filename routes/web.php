<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestingOneController;
use App\Http\Controllers\DemoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/{name}/{id?}',function($name,$id=null){
    $data = compact('name','id');
    return view('demo')->with($data);
});

Route::any('/test',function(){
    echo "Testing the route";
});

Route::get('/greeting', function () {
    return 'This is the features of The Basic(Basic Routing)';
});

// Route::get('/user/{id}', function (Request $request, $id) {
//     return 'User '.$id;
// });

// Route::get('/user/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');
 
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'User Name:'.$name.' User Name:'.$id;
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

Route::get('testing/{id}/{name}',[TestingController::class,'index']);

// Route::permanentRedirect('/test', '/greeting');

// Route::get('/guest/{name}', [UserController::class,'show']);

Route::get('testingone', [TestingOneController::class, 'index']);
Route::get('testingone/create', [TestingOneController::class, 'create']);
Route::post('testingone/store', [TestingOneController::class, 'store']);
Route::get('testingone/edit/{id}', [TestingOneController::class, 'edit']);
Route::post('testingone/update/{id}', [TestingOneController::class, 'update']);
Route::delete('testingone/delete/{id}', [TestingOneController::class, 'destroy']);

Route::get('democontroller', DemoController::class);
