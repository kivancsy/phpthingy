<?php

use App\Http\Controllers\EmployeesController;
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
    return view('welcome');
});

Route::group(['prefix'=>'employees', 'as'=>'employees.', ], function (){
    Route::get('/',[EmployeesController::class,'getAllEmployees'])->name('all');
    Route::get('/save',[EmployeesController::class,'add'])->name('add');
    Route::post('/save',[EmployeesController::class,'save'])->name('save');
    Route::get('/detay/{employee_id}', [EmployeesController::class,'getEmployeesDetail'])->name('detail');
    Route::post('edit',[EmployeesController::class,'edit'])->name('edit');
    Route::get('/delete/{employee_id}',[EmployeesController::class,'delete'])->name('delete');
});

