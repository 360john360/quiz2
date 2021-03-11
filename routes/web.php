<?php

use App\Http\Controllers\TestsController;
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
    return view('index');
})->name('homepage');

Route::get('/tests',[TestsController::class, "ReturningTestQuestions"])->name('ReturningTestQuestions');


Route::middleware([  'auth:sanctum', 'verified'  ])->get('/dashboard', function () {
    //This will gather relevant information from the created database.
    $data = "Gathered data";
    return view('dashboard',['data'=>$data]); //the key is data, which passes the value of "Gathered data"
})->name('dashboard');
