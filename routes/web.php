<?php

use App\Http\Controllers\admin\AccountController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AlluserController;
use App\Http\Controllers\admin\AllvendorController;
use App\Http\Controllers\admin\AuthenticationController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\vendor\dashboardController;
use App\Http\Controllers\vendor\ProductController;
use App\Http\Controllers\vendor\RegistrationController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('register');
// });
Route::get('/' , [HomeController::class,'index']);
Route::get('registerpage', [UserController::class, 'indexRegister'])->name('registerpage');
Route::post('register', [UserController::class, 'register'])->name('register');

Route::post('login', [UserController::class, 'login'])->name('login');

Route::get('about' , [IndexController::class,'About'])->name('about');
Route::get('home-02' , [IndexController::class,'Home_02'])->name('home-02');
// Route::get('home-03' , [IndexController::class,'Home_03']);
Route::get('contact' , [IndexController::class,'Contact'])->name('contact');
Route::get('product' , [IndexController::class,'Product'])->name('product');
Route::get('blog' , [IndexController::class,'Blog'])->name('blog');
Route::get('blog-detail' , [IndexController::class,'Blog_detail'])->name('blog-detail');
Route::get('product-details' , [IndexController::class,'Product_details'])->name('product-detials');
Route::get('shoping-cart' , [IndexController::class,'Shoping_cart'])->name('shoping-cart');




//    ============================= ADMIN ROUTES ============================

Route::get('admin',[AuthenticationController::class,'loginIndex'])->name('admin');
Route::post('login_admin',[AuthenticationController::class,'signin'])->name('login_admin');

Route::get('signup',[AuthenticationController::class,'signupIndex'])->name('signup');
Route::post('sign_up',[AuthenticationController::class,'signup'])->name('sign_up');

Route::get('admin_dashboard',[AdminController::class,'AdminDashboard'])->name('admin_dashboard');
Route::get('users',[AlluserController::class,'Index'])->name('users');
// Route::get('viewuser',[AlluserController::class,'View'])->name('viewuser');
Route::get('viewuser/{id}',[AlluserController::class,'View'])->name('viewuser');
Route::get('deleteuser/{id}',[AlluserController::class,'Delete'])->name('deleteuser');

Route::get('edituser/{id}',[AlluserController::class,'Edit'])->name('edituser');
Route::post('edituserr/{id}',[AlluserController::class,'EditUser'])->name('edituserr');

Route::get('editProfile/{id}', [AccountController::class,'edit'])->name('editProfile');
Route::post('editUserProfile/{id}', [AccountController::class,'editProfile'])->name('editUserProfile');

Route::get('resetPassword' , [AuthenticationController::class,'resetPasswordIndex'])->name('resetPassword');
// ===============================ADMIN VENDORS =================
Route::get('vendors' , [AllvendorController::class , 'Index'])->name('vendors');
Route::get('viewvendor/{id}',[AllvendorController::class,'View'])->name('viewvendor');
Route::get('deletevendor/{id}',[AllvendorController::class,'Delete'])->name('deletevendor');
Route::get('editvendor/{id}',[AllvendorController::class,'Edit'])->name('editvendor');
Route::post('editvendor/{id}',[AllvendorController::class,'EditUser'])->name('editvendor');
// --------------------------------------------------------------

Route::get('page404' , [AdminController::class,'page404'])->name('page404');
Route::get('account', [AccountController::class,'Index'])->name('account');



//    ============================= VENDOR ROUTES ============================


Route::get('vendor-dashboard' , [dashboardController::class , 'Index'])->name('vendorDashboard');
Route::get('vendorRegister',[RegistrationController::class,'registerIndex'])->name('vendorRegister');
Route::post('vendorRegistration' , [RegistrationController::class , 'vendorRegistration'])->name('vendorRegistration');

Route::get('add-product' , [ProductController::class , 'index'])->name('add-product');





