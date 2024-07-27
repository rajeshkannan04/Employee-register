<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;


Route::get('/', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/worker', function () {
    return view('workers');
});
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/addemployee', [EmployeeController::class, 'index']);
Route::get('/employee', [EmployeeController::class, 'show']);
Route::post('/employeesave', [EmployeeController::class, 'store']);
Route::get('/deletemployee/{id}', [EmployeeController::class, 'destroy']);
Route::get('/updatemployee/{id}', [EmployeeController::class, 'edit']);
Route::post('/editemployee/{id}', [EmployeeController::class, 'update']);


Route::get('/adddepartment', function () {
    return view('department');
});
Route::post('/submit_form', [DepartmentController::class, 'store']);
Route::get('/department', [DepartmentController::class, 'index']);


Route::get('/adddesignation', [DesignationController::class, 'index']);
Route::post('/subdesignation', [DesignationController::class, 'store']);
Route::get('/designation', [DesignationController::class, 'create']);


