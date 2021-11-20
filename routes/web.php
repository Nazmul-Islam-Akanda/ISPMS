<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
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
    Route::get('/customers',[CustomersController::class,'customersList']);

    //User Departments
    route::get('/user-departments-list',[UserDepartmentsController::class,'userDepartmentsList'])->name('admin.user-departments.list');
    route::get('/add/user-departments',[UserDepartmentsController::class,'add'])->name('admin.user-departments.add');
    route::post('/user-departments/store',[UserDepartmentsController::class,'store'])->name('admin.user-departments.store');

    //Users
    route::get('/users-list',[UsersController::class,'usersList'])->name('admin.users.list');
    route::get('/add/users',[UsersController::class,'add'])->name('admin.users.add');
    route::post('/users/store',[UsersController::class,'store'])->name('admin.users.store');

});