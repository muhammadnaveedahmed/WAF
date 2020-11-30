<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'firewall.all'],
function () {
    Route::get('/', [HomeController::class,'index']);
});
Route::group(['middleware' => 'firewall.whitelist'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.url'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.agent'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.bot'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.geo'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.ip'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.lfi'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.php'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.referrer'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.rfi'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.session'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.sqli'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.swear'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.url'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.whitelist'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});
Route::group(['middleware' => 'firewall.xss'],
function () {
    Route::get('/admin', [AdminController::class,'index']);
});

