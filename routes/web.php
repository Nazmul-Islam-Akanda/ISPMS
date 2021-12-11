<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AssetsController;
use App\Http\Controllers\Admin\BlocksController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\PaymentsController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\MobileBankingController;
use App\Http\Controllers\Website\WebsiteHomeController;
use App\Http\Controllers\Admin\AssetsCategoryController;
use App\Http\Controllers\Admin\EmployeesSalaryController;
use App\Http\Controllers\Admin\UserDepartmentsController;
use App\Http\Controllers\Admin\Customers_IP_MAC_Controller;
use App\Http\Controllers\Customer\CustomersPanelController;

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
    // return redirect()->route('dashboard');
     return redirect()->route('website.home');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashboards',[HomeController::class,'dashboard'])->name('dashboard');

    //Customers
    Route::get('/customers-list',[CustomersController::class,'customersList']);
    Route::get('/add/customers',[CustomersController::class,'add']);

    //Customers IP-MAC Addresses
    Route::get('/customers-IP-MAC-address-list',[Customers_IP_MAC_Controller::class,'ipMAClist'])->name('admin.customers-IP-MAC.list');
    route::get('add/customers-IP-MAC-address',[Customers_IP_MAC_Controller::class,'add'])->name('admin.add-customers-IP-MAC');

    //Payments
    Route::get('/payments-list',[PaymentsController::class,'paymentsList'])->name('admin.payments.list');
    Route::get('/make/payments',[PaymentsController::class,'add'])->name('admin.payments.add');

    //Employees Salary
    route::get('/employees-salary-record',[EmployeesSalaryController::class,'salaryRecord'])->name('admin.empolyees-salary.list');
    route::get('/add/employees-salary',[EmployeesSalaryController::class,'add'])->name('admin.employees-salary.add');

    //Assets Category
    route::get('/assets-category-list',[AssetsCategoryController::class,'assetsCategory'])->name('admin.assets-category.list');
    route::get('add/assets-category',[AssetsCategoryController::class,'add'])->name('admin.assets-category.add');
    route::post('/assets-catesory/store',[AssetsCategoryController::class,'store'])->name('admin.assets-category.store');

    //Assets
    route::get('/assets-list',[AssetsController::class,'assetsList'])->name('admin.assets.list');
    route::get('add/assets-list',[AssetsController::class,'add'])->name('admin.assets.add');

    //User Departments
    route::get('/user-departments-list',[UserDepartmentsController::class,'userDepartmentsList'])->name('admin.user-departments.list');
    route::get('/add/user-departments',[UserDepartmentsController::class,'add'])->name('admin.user-departments.add');
    route::post('/user-departments/store',[UserDepartmentsController::class,'store'])->name('admin.user-departments.store');

    //Users
    route::get('/users-list',[UsersController::class,'usersList'])->name('admin.users.list');
    route::get('/add/users',[UsersController::class,'add'])->name('admin.users.add');
    route::post('/users/store',[UsersController::class,'store'])->name('admin.users.store');

    //Mobile Banking
    route::get('/mobile-banking-list',[MobileBankingController::class,'mobileBankingList'])->name('admin.mobile-banking.list');
    route::get('/add/mobile-banking',[MobileBankingController::class,'add'])->name('admin.mobile-banking.add');
    route::post('/mobile-banking/store',[MobileBankingController::class,'store'])->name('admin.mobile-banking.store');

    //Blocks
    route::get('/blocks-list',[BlocksController::class,'blocksList'])->name('admin.blocks.list');
    route::get('/add/blocks',[BlocksController::class,'add'])->name('admin.blocks.add');
    route::post('/blocks/store',[BlocksController::class,'store'])->name('admin.blocks.store');

    //Packages
    route::get('/packages-list',[PackagesController::class,'packagesList'])->name('admin.packages.list');
    route::get('/add/packages',[PackagesController::class,'add'])->name('admin.packages.add');
    route::post('packages/store',[PackagesController::class,'store'])->name('admin.packages.store');

    //site-info
    route::get('/site-info',[SiteInfoController::class,'siteInfo'])->name('admin.site.info');
    route::get('/add/site-info',[SiteInfoController::class,'add'])->name('admin.site-info.add');
    route::post('/site-info/store',[SiteInfoController::class,'store'])->name('admin.site-info.store');

});


Route::group(['prefix'=>'website'],function(){

    //Website Home
    route::get('/home',[WebsiteHomeController::class,'home'])->name('website.home');
    route::get('/user-login',[WebsiteHomeController::class,'user'])->name('website.user');
    route::get('/customer-login',[WebsiteHomeController::class,'customer'])->name('website.customer');

});

Route::group(['prefix'=>'customer'],function(){
    //Customer complain
    route::get('/complains',[CustomersPanelController::class,'complain'])->name('customer.complains');
});