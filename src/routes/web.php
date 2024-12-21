<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdministratorController;

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

// Route::get('/', function () {
    // return view('welcome');
// });

// 問い合わせ画面
Route::get('/',[ContactController::class,'index']);

// 確認画面
Route::post('/confirm',[ContactController::class,'confirm']);

// 完了画面
Route::post('/thanks',[ContactController::class,'store']);



// 登録画面
Route::get('/register',[AdministratorController::class,'userRegister']);

// ログイン画面
Route::post('/login',[AdministratorController::class,'userCreate']);
// Route::get('/login',[AdministratorController::class,'userLogin']);

// 管理画面
Route::group(['prefix' => '/admin'], function(){
    Route::get('',[AdministratorController::class,'adminIndex']);   
    Route::post('',[AdministratorController::class,'adminLogin']);
    Route::get('/search',[AdministratorController::class,'search']);
});



