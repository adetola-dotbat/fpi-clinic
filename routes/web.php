<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\ReportController;
use App\Http\Livewire\Appointment;

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
    return view('customer.index');
});


// Login and Registration
Route::group(['middleware'=>'alreadyLoggedIn'],function(){
    Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
    Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register');
    Route::get('/theadmin', [CustomAuthController::class, 'registrationAdmin']);
});

Route::group(['middleware'=>'guest'],function(){
    Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
    Route::post('/register-admin', [CustomAuthController::class, 'registerAdmin'])->name('register-admin');
    Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
    Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');
});



Route::group(['middleware'=>'isLoggedIn'],function(){
    Route::get('/nichinto', [CustomAuthController::class, 'dashboard'])->name('nichinto');
    Route::get('/admin', [CustomAuthController::class, 'admin'])->name('admin');

    Route::get('appointment', Appointment::class);

    Route::get('/', function () {
        return view('customer.index');
    });
    
    Route::controller(AppointmentController::class)->group(function(){
        Route::get('appointment', 'index')->name('appointment');
        Route::post('appointment/create', 'create')->name('appointment.create');
        Route::get('appointment/view/{id}', 'show')->name('appointment.show');
        Route::get('appointment/view', 'view_appointment')->name('appointment.view');
        Route::get('appointment/pend/{id}', 'pendAppoint')->name('appointment.pend');
        Route::get('appointment/approve/{id}', 'approveAppoint')->name('appointment.approve');
        Route::get('appointment/delete/{id}', 'destroy')->name('appointment.delete');
    });
    Route::controller(DepartmentController::class)->group(function(){
        Route::get('department', 'index')->name('department');
        Route::post('department', 'store')->name('department.add');
        Route::get('department/{id}', 'destroy')->name('department.delete');
    });
    
    Route::controller(DoctorController::class)->group(function(){
        Route::get('doctor', 'index')->name('doctor');
        Route::post('doctor', 'store')->name('doctor.add');
        Route::get('doctor/{id}', 'destroy')->name('doctor.delete');
        Route::get('doctor/edit/{id}', 'edit')->name('doctor.edit');
        Route::post('doctor/update/{id}', 'update')->name('doctor.update');
    });

    Route::controller(ReportController::class)->group(function(){
        Route::get('reports', 'index')->name('report');
        Route::post('reports', 'create')->name('report.create');
       
    });

    // botmancontroller
    Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
    
    // flutterwavecontroller
    Route::get('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
    // The callback url after a payment
    Route::get('/rave/callback/{id}', [FlutterwaveController::class, 'callback'])->name('callback');


});