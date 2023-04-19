<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\dashbordController;
use App\Http\Controllers\Frontend\departmentController;
use App\Http\Controllers\Frontend\employeeController;
use App\Http\Controllers\Frontend\leaveController;
use App\Http\Controllers\Frontend\salaryController;

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

Route::get('/',[dashbordController::class,'index']);
Route::get('/department/add',[departmentController::class,'add']);
Route::get('/department/mange',[departmentController::class,'mange']);
Route::get('/leave/add',[leaveController::class,'add']);
Route::get('/leave/type',[leaveController::class,'type']);
Route::get('/leave/mange',[leaveController::class,'mange']);
Route::get('/employee/add',[employeeController::class,'add']);
Route::get('/employee/mange',[employeeController::class,'mange']);
Route::get('/salary/add',[salaryController::class,'add']);




