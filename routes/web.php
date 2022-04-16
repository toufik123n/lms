<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LeavesController;
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
Route::get('admin/employees/add',[EmployeesController::class,'add'])->name('admin.employees.add');
Route::post('admin/employees/store',[EmployeesController::class,'store'])->name('admin.employees.store');


//Leaves type list
Route::get('admin/leaves-type/list',[LeavesTypeController::class,'leavesTypeList'])->name('admin.leaves-type.list');
Route::get('admin/leaves-type/add',[LeavesTypeController::class,'add'])->name('admin.leaves-type.add');
Route::post('admin/leaves-type/store',[LeavesTypeController::class,'store'])->name('admin.leaves-type.store');


//Leaves  list
Route::get('admin/leaves/list',[LeavesController::class,'leavesList'])->name('admin.leaves.list');
Route::get('admin/leaves/apply',[LeavesController::class,'apply'])->name('admin.leaves.apply');
Route::post('admin/leaves/store',[LeavesController::class,'store'])->name('admin.leaves.store');
Route::get('admin/leaves/approve',[LeavesController::class,'leavesApprove'])->name('admin.leaves.approve');
Route::get('admin/leaves/approve/give/{leave_id}',[LeavesController::class,'leavesApproveGive'])->name('admin.leaves.aprrove.give');
Route::put('admin/leaves/approve/store/{leave_id}',[LeavesController::class,'leavesApproveStore'])->name('admin.leaves.approve.store');
Route::get('admin/leaves/report',[LeavesController::class,'leavesReport'])->name('admin.leaves.report');
Route::get('admin/leaves/details/{leave_id}',[LeavesController::class,'leavesDetails'])->name('admin.leaves.details');
Route::get('admin/leaves/edit/{leave_id}',[LeavesController::class,'leavesEdit'])->name('admin.leaves.edit');
Route::put('admin/leaves/update/{leave_id}',[LeavesController::class,'leavesUpdate'])->name('admin.leaves.update');
Route::get('admin/leaves/delete/{leave_id}',[LeavesController::class,'leavesDelete'])->name('admin.leaves.delete');
