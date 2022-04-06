<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\DashboardsController;
use App\Http\Controllers\Admin\LeavesTypeController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Admin\DesignationsController;

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
    return redirect()->route('admin.dashboard');
    // return view('login');
});

//Dashboard
Route::get('admin/dashboards',[DashboardsController::class,'dashboard'])->name('admin.dashboard');

//Employee Departments
Route::get('admin/departments/list',[DepartmentsController::class,'departmentsList'])->name('admin.departments.list');
Route::get('admin/departments/add',[DepartmentsController::class,'add'])->name('admin.departments.add');
Route::post('admin/departments/store',[DepartmentsController::class,'store'])->name('admin.departments.store');

//Employee Designations
Route::get('admin/designations/list',[DesignationsController::class,'designationsList'])->name('admin.designations.list');
Route::get('admin/designations/add',[DesignationsController::class,'add'])->name('admin.designations.add');
Route::post('admin/designations/store',[DesignationsController::class,'store'])->name('admin.designations.store');

//Employees
Route::get('admin/employees/list',[EmployeesController::class,'employeesList'])->name('admin.employees.list');


//Leaves type list
Route::get('admin/leaves-type/list',[LeavesTypeController::class,'LeavesTypeList'])->name('admin.leaves-type.list');