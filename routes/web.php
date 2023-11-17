<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StudentController;
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

Route::controller(StudentController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/create-student','create')->name('create');
    Route::post('/store-student-data','store')->name('store');
    Route::get('/edit-student-data/{id}','edit')->name('edit');
    Route::put('/update-student-data/{student_data}','update')->name('update');
    Route::delete('/delete-student-data/{student_data}', 'destroy')->name('destroy');

});

Route::controller(AttendanceController::class)->group(function(){
    Route::get('/Attendance/{id}','index')->name('attendance');
    Route::post('/store-student-attendance','store')->name('attendance.store');
});
