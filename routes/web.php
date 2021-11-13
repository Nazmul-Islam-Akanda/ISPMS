<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\UserDepartmentsController;

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
    return redirect()->route('dashboard');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashboards',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/customers',[CustomersController::CLass,'customersList']);
    route::get('/user-departments',[UserDepartmentsController::class,'userDepartmentsList'])->name('admin.user-departments.list');
    route::get('/add/user-departments',[UserDepartmentsController::class,'add'])->name('user-departments.add');
});