<?php

use GuzzleHttp\Middleware;
use JetBrains\PhpStorm\Language;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AssetsController;
use App\Http\Controllers\Admin\BlocksController;
use App\Http\Controllers\Website\OrderController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\PaymentsController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\ComplainsController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\MobileBankingController;
use App\Http\Controllers\Website\WebsiteHomeController;
use App\Http\Controllers\Website\WebsiteUserController;
use App\Http\Controllers\Admin\AssetsCategoryController;
use App\Http\Controllers\Admin\EmployeesSalaryController;
use App\Http\Controllers\Admin\UserDepartmentsController;
use App\Http\Controllers\Admin\Customers_IP_MAC_Controller;
use App\Http\Controllers\Customer\CustomersPanelController;
use App\Http\Controllers\Website\WebsiteCustomerController;
use App\Http\Controllers\Admin\Customers_IP_MAC_Approval_Controller;

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

Route::group(['prefix'=>'admin','middleware'=>['auth','Admin']],function(){


    //Localization
    Route::get('/language/{local}',[LanguageController::class,'changeLanguage'])->name('language');

    //Dashboard
    Route::get('/dashboards',[HomeController::class,'dashboard'])->name('dashboard');

    //Customers
    Route::get('/customers-list',[CustomersController::class,'customersList']);
    Route::get('/add/customers',[CustomersController::class,'add']);
    Route::post('/customers/store',[CustomersController::class,'store']);
    Route::get('/customers/details/{customer_id}',[CustomersController::class,'details']);
    Route::get('/customers/edit/{customer_id}',[CustomersController::class,'edit']);
    Route::put('/customers/update/{customer_id}',[CustomersController::class,'update']);
    Route::get('/customers/delete/{customer_id}',[CustomersController::class,'delete']);


    //Customers IP-MAC Addresses
    Route::get('/customers-IP-MAC-address-list',[Customers_IP_MAC_Controller::class,'ipMAClist'])->name('admin.customers-IP-MAC.list');
    route::get('add/customers-IP-MAC-address',[Customers_IP_MAC_Controller::class,'add'])->name('admin.add-customers-IP-MAC');
    route::post('/customers-IP-MAC-address/store',[Customers_IP_MAC_Controller::class,'store'])->name('admin.customers-IP-MAC.store');
    Route::get('/customers-IP-MAC-address/edit/{customers_ip_mac_id}',[Customers_IP_MAC_Controller::class,'edit'])->name('admin.customers-IP-MAC.edit');
    Route::put('/customers-IP-MAC-address/update/{customers_ip_mac_id}',[Customers_IP_MAC_Controller::class,'update'])->name('admin.customers-IP-MAC.update');
    Route::get('/customers-IP-MAC-address/delete/{customers_ip_mac_id}',[Customers_IP_MAC_Controller::class,'delete'])->name('admin.customers-IP-MAC.delete');

    //Payments
    Route::get('/payments-list',[PaymentsController::class,'paymentsList'])->name('admin.payments.list');
    Route::get('/make/payments',[PaymentsController::class,'add'])->name('admin.payments.add');
    Route::post('/payments/store',[PaymentsController::class,'store'])->name('admin.payments.store');
    Route::get('/payments/details/{payment_id}',[PaymentsController::class,'details'])->name('admin.payments.details');
    Route::get('/payments/edit/{payment_id}',[PaymentsController::class,'edit'])->name('admin.payments.edit');
    Route::put('/payments/update/{payment_id}',[PaymentsController::class,'update'])->name('admin.payments.update');
    Route::get('/payments/delete/{payment_id}',[PaymentsController::class,'delete'])->name('admin.payments.delete');

    //Approvals
    Route::get('/customers-IP-MAC-address-Approvals-list',[Customers_IP_MAC_Approval_Controller::class,'ipMACapprovalList'])->name('admin.IP&MAC.approvals.list');
    Route::get('/customers-IP-MAC-address/approve/{id}',[Customers_IP_MAC_Approval_Controller::class,'ipMACapprove'])->name('admin.IP&MAC.approve');

    //Complains
    Route::get('/complains-list',[ComplainsController::class,'complainsList'])->name('admin.complains.list');
    Route::get('/complains-status/{id}',[ComplainsController::class,'complainsStatus'])->name('admin.complains.status');
    Route::get('/complains-delete/{id}',[ComplainsController::class,'delete'])->name('admin.complains.delete');

    //Employees Salary
    route::get('/employees-salary-record',[EmployeesSalaryController::class,'salaryRecord'])->name('admin.empolyees-salary.list');
    route::get('/add/employees-salary',[EmployeesSalaryController::class,'add'])->name('admin.employees-salary.add');
    route::post('/employees-salary/store',[EmployeesSalaryController::class,'store'])->name('admin.employees-salary.store');
    Route::get('/employees-salary/details/{salary_id}',[EmployeesSalaryController::class,'details'])->name('admin.employees-salary.details');
    Route::get('/employees-salary/edit/{salary_id}',[EmployeesSalaryController::class,'edit'])->name('admin.employees-salary.edit');
    Route::put('/employees-salary/update/{salary_id}',[EmployeesSalaryController::class,'update'])->name('admin.employees-salary.update');
    Route::get('/employees-salary/delete/{salary_id}',[EmployeesSalaryController::class,'delete'])->name('admin.employees-salary.delete');

    //Assets Category
    route::get('/assets-category-list',[AssetsCategoryController::class,'assetsCategory'])->name('admin.assets-category.list');
    route::get('/add/assets-category',[AssetsCategoryController::class,'add'])->name('admin.assets-category.add');
    route::post('/assets-catesory/store',[AssetsCategoryController::class,'store'])->name('admin.assets-category.store');
    route::get('/assets-category/edit/{category_id}',[AssetsCategoryController::class,'edit'])->name('admin.assets-category.edit');
    Route::put('/assets-category/update/{category_id}',[AssetsCategoryController::class,'update'])->name('admin.assets-category.update');
    Route::get('/assets-category/delete/{category_id}',[AssetsCategoryController::class,'delete'])->name('admin.assets-category.delete');

    //Assets
    route::get('/assets-list',[AssetsController::class,'assetsList'])->name('admin.assets.list');
    route::get('add/assets-list',[AssetsController::class,'add'])->name('admin.assets.add');
    route::post('/assets/store',[AssetsController::class,'store'])->name('admin.assets.store');
    route::get('/assets/edit/{asset_id}',[AssetsController::class,'edit'])->name('admin.assets.edit');
    Route::put('/assets/update/{asset_id}',[AssetsController::class,'update'])->name('admin.assets.update');
    Route::get('/assets/delete/{asset_id}',[AssetsController::class,'delete'])->name('admin.assets.delete');

    //User Departments
    route::get('/user-departments-list',[UserDepartmentsController::class,'userDepartmentsList'])->name('admin.user-departments.list');
    route::get('/add/user-departments',[UserDepartmentsController::class,'add'])->name('admin.user-departments.add');
    route::post('/user-departments/store',[UserDepartmentsController::class,'store'])->name('admin.user-departments.store');
    route::get('/user-departments/edit/{department_id}',[UserDepartmentsController::class,'edit'])->name('admin.user-departments.edit');
    Route::put('/user-department/update/{department_id}',[UserDepartmentsController::class,'update'])->name('admin.user-departments.update');
    Route::get('/user-department/delete/{department_id}',[UserDepartmentsController::class,'delete'])->name('admin.user-departments.delete');

    //Users
    route::get('/users-list',[UsersController::class,'usersList'])->name('admin.users.list');
    route::get('/add/users',[UsersController::class,'add'])->name('admin.users.add');
    route::post('/users/store',[UsersController::class,'store'])->name('admin.users.store');
    Route::get('/users/edit/{user_id}',[UsersController::class,'edit'])->name('admin.users.edit');
    Route::put('/users/update/{user_id}',[UsersController::class,'update'])->name('admin.users.update');
    Route::get('/users/delete/{user_id}',[UsersController::class,'delete'])->name('admin.users.delete');
    //Users Profile
    Route::get('/user/profile/{user_id}',[UsersController::class,'profile'])->name('admin.user.profile');
    Route::put('/user/profile/update/{user_id}',[UsersController::class,'profileUpdate'])->name('admin.user.profile-update');

    //Mobile Banking
    route::get('/mobile-banking-list',[MobileBankingController::class,'mobileBankingList'])->name('admin.mobile-banking.list');
    route::get('/add/mobile-banking',[MobileBankingController::class,'add'])->name('admin.mobile-banking.add');
    route::post('/mobile-banking/store',[MobileBankingController::class,'store'])->name('admin.mobile-banking.store');
    route::get('/mobile-banking/edit/{mobile_banking_id}',[MobileBankingController::class,'edit'])->name('admin.mobile-banking.edit');
    Route::put('/mobile-banking/update/{mobile_banking_id}',[MobileBankingController::class,'update'])->name('admin.mobile-banking.update');
    Route::get('/mobile-banking/delete/{mobile_banking_id}',[MobileBankingController::class,'delete'])->name('admin.mobile-banking.delete');

    //Blocks
    route::get('/blocks-list',[BlocksController::class,'blocksList'])->name('admin.blocks.list');
    route::get('/add/blocks',[BlocksController::class,'add'])->name('admin.blocks.add');
    route::post('/blocks/store',[BlocksController::class,'store'])->name('admin.blocks.store');
    route::get('/blocks/edit/{block_id}',[BlocksController::class,'edit'])->name('admin.blocks.edit');
    Route::put('/blocks/update/{block_id}',[BlocksController::class,'update'])->name('admin.blocks.update');
    Route::get('/blocks/delete/{block_id}',[BlocksController::class,'delete'])->name('admin.blocks.delete');

    //Packages
    route::get('/packages-list',[PackagesController::class,'packagesList'])->name('admin.packages.list');
    route::get('/add/packages',[PackagesController::class,'add'])->name('admin.packages.add');
    route::post('/packages/store',[PackagesController::class,'store'])->name('admin.packages.store');
    route::get('/packages/edit/{package_id}',[PackagesController::class,'edit'])->name('admin.packages.edit');
    Route::put('/packages/update/{package_id}',[PackagesController::class,'update'])->name('admin.packages.update');
    Route::get('/packages/delete/{package_id}',[PackagesController::class,'delete'])->name('admin.packages.delete');

    //site-info
    route::get('/site-info',[SiteInfoController::class,'siteInfo'])->name('admin.site.info');
    route::get('/add/site-info',[SiteInfoController::class,'add'])->name('admin.site-info.add');
    route::post('/site-info/store',[SiteInfoController::class,'store'])->name('admin.site-info.store');
    route::get('/site-info/edit/{site_info_id}',[SiteInfoController::class,'edit'])->name('admin.site-info.edit');
    Route::put('/site-info/update/{site_info_id}',[SiteInfoController::class,'update'])->name('admin.site-info.update');
    Route::get('/site-info/delete/{site_info_id}',[SiteInfoController::class,'delete'])->name('admin.site-info.delete');

});


Route::group(['prefix'=>'website'],function(){

    //Website Home
    route::get('/home',[WebsiteHomeController::class,'home'])->name('website.home');
    route::get('/user-login',[WebsiteHomeController::class,'user'])->name('website.user');//every route of admin panel goes here
    route::get('/customer-login',[WebsiteHomeController::class,'customer'])->name('website.customer');


   Route::group(['middleware'=>'web_auth'],function(){
    Route::get('/add-to-cart/{id}',[OrderController::class,'addToCart'])->name('cart.add');
    Route::get('/get-cart',[OrderController::class,'getCart'])->name('cart.get');
    Route::get('/clear-cart',[OrderController::class,'clearCart'])->name('cart.clear');
    Route::get('/checkout',[OrderController::class,'checkout'])->name('cart.checkout');
    Route::get('remove/cart/{id}', [OrderController::class, 'removeFromCart'])->name('remove');
});


    //User Or Admin Login and logout
    Route::post('/user/login',[WebsiteUserController::class,'userLogin'])->name('website.users.login');
    Route::get('user/logout',[WebsiteUserController::class,'userLogout'])->name('website.users.logout');
    // Route::post('/user/login',[WebsiteUserController::class,'userLogin'])->name('website.users.login');
    // Route::get('user/logout',[WebsiteUserController::class,'userLogout'])->name('website.users.logout');

    //Customer Login and logout
    Route::post('/customer/login',[WebsiteCustomerController::class,'customerLogin'])->name('website.customers.login');
    Route::get('/customer/logout',[WebsiteCustomerController::class,'customerLogout'])->name('website.customers.logout');

    //Customer Forget Password
    Route::get('/customer/forget-password', [WebsiteCustomerController::class, 'forgetPassword'])->name('website.customers.forget.password');
    Route::post('/customer/forget-password',[WebsiteCustomerController::class,'forgetPasswordEmailPost'])->name('website.customers.forget.password.post');
    Route::get('/customer/reset-password/{token}',[WebsiteCustomerController::class,'resetPassword'])->name('website.customers.reset.password');
    Route::post('/customer/reset-password/',[WebsiteCustomerController::class,'resetPasswordPost'])->name('website.customers.reset.password.post');
});
//Customer Login With Facebook
    Route::get('auth/facebook',[WebsiteCustomerController::class,'facebookRedirect'])->name('login.facebook');
    Route::get('auth/facebook/callback',[WebsiteCustomerController::class,'loginWithFacebook']);



Route::group(['prefix'=>'customer','middleware'=>['auth','Customer']],function(){
    //Customer complain
    route::get('/complains',[CustomersPanelController::class,'complain'])->name('customer.complains');
    route::post('/complains/store',[CustomersPanelController::class,'complainStore'])->name('website.complain.store');

    //Customer Payment
    route::get('/payments',[CustomersPanelController::class,'payment'])->name('customer.payments');
    route::post('/payments/store',[CustomersPanelController::class,'paymentStore'])->name('website.payment.store');
});