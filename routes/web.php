<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;


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
//.............hero................
Route::get('/', function () {
    return view('hero');
});


//==========================auth===============
Auth::routes();





//=======================user log and display appointment form=============
Route::get('home', [AppointmentController::class, 'index'])->name('home');



//====================appointment handle======================
Route::post('apstore', [App\Http\Controllers\AppointmentController::class, 'store'])->name('store');
Route::post('home', [App\Http\Controllers\AppointmentController::class, 'index'])->name('index');
Route::get('list', [App\Http\Controllers\AppointmentController::class, 'listview'])->name('list');


Route::get('indexadmindoc', [AppointmentController::class, 'indexadmindoc']);


Route::get('search_data', [App\Http\Controllers\AppointmentController::class, 'search_data']);

Route::get('search', [App\Http\Controllers\AppointmentController::class, 'search']);

//indexdoctordoc
Route::get('indexdoctordoc', [AppointmentController::class, 'indexdoctordoc']);


Route::get('/show', [App\Http\Controllers\AppointmentController::class, 'show'])->name('show');

Route::get('list/{id}/e', [App\Http\Controllers\AppointmentController::class, 'edit']);
Route::put('list/{id}/e', [App\Http\Controllers\AppointmentController::class, 'update']);
//url('list/'.$appointment->id.'/e')
Route::get('list/{id}/delete', [App\Http\Controllers\AppointmentController::class, 'destroy']);

Route::get('show/{id}/delete', [App\Http\Controllers\AppointmentController::class, 'deletedisplay']);






//==================== ============admin and doctor middleware============================

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('user_type_admin');
Route::get('/doctordash', [App\Http\Controllers\HomeController::class, 'doctorHome'])->name('doc')->middleware('user_type_doctor');






//Route::get('/home', [AppointmentController::class, 'create'])->name('appointments.create');
//Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
//   Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');

//Route::get('/detail', [App\Http\Controllers\DocDashController::class, 'detailview'])->name('detail');
//Route::get('search_da', [App\Http\Controllers\DocDashController::class, 'search']);




//indexadmindoc
//Route::get('search_data', [App\Http\Controllers\AppointmentController::class, 'indexadmindoc']);

//======================== =========doctor crud============================

Route::get('home', [App\Http\Controllers\DoctorController::class, 'indexdoc'])->name('home');

Route::get('doctor', [App\Http\Controllers\DoctorController::class, 'index'])->name('doctor');
Route::get('doctor/c', [App\Http\Controllers\DoctorController::class, 'create']);
Route::post('doctor/c', [App\Http\Controllers\DoctorController::class, 'store'])->name('doctor/c');
//Route::get('/show', [App\Http\Controllers\DoctorController::class, 'show']);


//======================show data and doctor profile==================

Route::get('/profile', [App\Http\Controllers\DoctorController::class, 'show'])->name('profile');

Route::get('/', [App\Http\Controllers\DoctorController::class, 'heroshow'])->name('heroshow');
//heroshow



Route::get('doctor/{id}/e', [App\Http\Controllers\DoctorController::class, 'edit']);
Route::put('doctor/{id}/e', [App\Http\Controllers\DoctorController::class, 'update']);
Route::get('doctor/{id}/delete', [App\Http\Controllers\DoctorController::class, 'destroy']);

Route::get('search_doctor', [App\Http\Controllers\DoctorController::class, 'search_doctor']);





//user view
Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('user/{id}/delete', [App\Http\Controllers\UserController::class, 'destroy']);
