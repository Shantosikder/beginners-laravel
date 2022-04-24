<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\ThardControlle;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;



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

Route::get('/about',[FirstController::class,'about'])->name('about');

Route::get('/contact',[FirstController::class,'contact'])->name('contact');

Route::get('/mypage',[SecondController::class,'myparsonal'])->name('mypage');


//Route::post('/student/store',[SecondController::class,'studentstore'])->name('student.store');
Route::post('/about',[SecondController::class,'aboutstore'])->name('about.store');

//form validation///

Route::post('/store',[SecondController::class,'valildstore']);




Route::get('test',[ThardControlle::class,'test']);

Route::get('/about', function () {
    return view('about', ['name' => 'shanto']);
});

//session //

// Route::get('/show', function ( Request $request) {
//  $request->session()->put('shanto', 'Task was successful!');
// });

Route::get('/all', function(Request $request){
    //$request->session(['name'=>'shanto']);
     return $request->session()->all();
    //dd($request);
});

// Route::get('/all', function(Request $request){
//       log::info('my name is shanto sikder '.rand(1,5));
//         return redirect()->to('/');
// });





