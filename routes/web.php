<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminForgotPasswordController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Dashboard\CategorypostController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\TagController;
use App\Http\Controllers\FrontendPagesController;
use Illuminate\Support\Facades\Artisan;

// Storage Link
Route::get('/storage-link', function(){
    Artisan::call('storage:link');
});

Route::get('/queue-jobs', function(){
    Artisan::call('queue:work');
});


//  Admin Pages
Route::group([ 'middleware' => 'admin.redirect' ], function(){
    Route::get('/admin-login', [ AdminPagesController::class, 'ShowLoginPage' ]) ->name('login.page');
    Route::post('/admin-login', [ AdminAuthController::class, 'Login' ]) ->name('admin.login');
    Route::post('/admin-otp', [ AdminAuthController::class, 'otp' ]) ->name('admin.otp');
    // Admin Forgot Password
    Route::get('/forgot-password', [ AdminForgotPasswordController::class, 'ShowForgotPassword' ] ) -> name('forgot.password.page');
    Route::post('/forgot-password', [ AdminForgotPasswordController::class, 'ForgotPassword' ] ) -> name('forgot.password');
    Route::get('/reset-password/{token?}/{email?}', [ AdminForgotPasswordController::class, 'ResetPasswordLink' ] ) -> name('reset.password');
    Route::post('/reset-password', [ AdminForgotPasswordController::class, 'ResetPassword' ] ) -> name('reset.password');

    

});

// OTP
Route::get('/admin-otp', [ AdminPagesController::class, 'ShowOtpPage' ]) ->name('otp.page');

//  Admin Auth
Route::group([ 'middleware' => 'admin' ], function(){
    Route::get('/dashboard', [ AdminPagesController::class, 'ShowDashboard' ]) ->name('admin.dashboard');
    Route::get('/admin-profile', [ AdminProfileController::class, 'ShowAdminProfile' ]) ->name('admin.profile');
    Route::post('/admin-profile', [ AdminProfileController::class, 'AdminProfileChange' ]) ->name('admin.profile.change');
    Route::post('/admin-password', [ AdminProfileController::class, 'AdminPasswordChange' ]) ->name('admin.password.change');
    Route::get('/admin-logout', [ AdminAuthController::class, 'logout' ]) ->name('admin.logout');
    // Permission  Routes
    Route::resource('/permission', PermissionController::class );    
    //  Roll Routes
    Route::resource('/role', RoleController::class );
    //  Admin Routes
    Route::resource('/admin-user', AdminController::class );
    // Status & Trash Route
    Route::get('/admin-status/{id}', [ AdminController::class, 'StatusUpdate' ] ) -> name('admin.status');
    Route::get('/admin-trash', [ AdminController::class, 'TrashUsers' ] ) -> name('admin.trash');
    Route::get('/admin-trash-update/{id}', [ AdminController::class, 'TrashUpdate' ] ) -> name('admin.trash.update');
    //  Slider Routes
    Route::resource('/slider', SliderController::class );
    //  Product Tags Routes
    Route::resource('/post-tag', TagController::class );
    //  Product Category Routes
    Route::resource('/post-category', CategorypostController::class );
    //  Product Tags Routes
    Route::resource('/post', PostController::class );
    Route::get('/user-order', [ OrderController::class, 'UserOrder' ] ) -> name('user.order');
    Route::get('/user-delivered/{id}', [ OrderController::class, 'UserDelivered' ] ) -> name('user.delivered');
    Route::get('/user-invoice/{id}', [ OrderController::class, 'UserPrintPdf' ] ) -> name('user.print');
    Route::get('/user-delete/{id}', [ OrderController::class, 'UserDelete' ] ) -> name('user.delete');
    Route::get('/send-email/{id}', [ OrderController::class, 'SendEmail' ] ) -> name('send.email');
    Route::post('/user-email/{id}', [ OrderController::class, 'SendUserEmail' ] ) -> name('send.user.email');
    // Order count show in Sidebar
    Route::get('/load-order-data', [ OrderController::class, 'OrderCount' ]) ;
    Route::resource('/subscribe',  SubscribeController::class ) ;


    
});


// Frontend Routes
Route::get('/', [ FrontendPagesController::class, 'ShowHomePage' ]) -> name('home.page');
Route::get('/blog', [ FrontendPagesController::class, 'ShowBlogPage' ]) -> name('blog.page');
Route::get('/single-post/{slug}', [FrontendPagesController::class, 'showSinglepostPage'])->name('post.single.page');
Route::get('/user-login', [ FrontendPagesController::class, 'ShowUserLoginPage' ]) -> name('user.login.page');
Route::post('/customer-login', [ CustomerController::class, 'CustomerLogin' ]) ->name('customer.login');
Route::post('/customer-store', [ CustomerController::class, 'CustomerStore' ]) ->name('customer.store');
Route::get('/user-logout', [ FrontendPagesController::class, 'UserLogout' ]) -> name('user.logout');
Route::get('/user-account', [ FrontendPagesController::class, 'UserAccount' ]) -> name('user.account');
Route::post('/add-cart/{id}', [ FrontendPagesController::class, 'AddCart' ]) -> name('add.cart');
Route::get('/show-cart', [ FrontendPagesController::class, 'ShowCart' ]) -> name('show.cart');
Route::get('/remove-cart/{id}', [ FrontendPagesController::class, 'RemoveCart' ]) -> name('remove.cart');
Route::get('/checkout', [ FrontendPagesController::class, 'ShowCheckOutPage' ]) -> name('checkout.page');
Route::post('/user-profile', [ FrontendPagesController::class, 'UserAccountProfile' ]) -> name('user.account.profile');
Route::post('/cash-order', [ FrontendPagesController::class, 'UserCashOrder' ]) -> name('user.cash.order');
Route::get('/product-show/{id}', [ FrontendPagesController::class, 'ShowOrderProduct' ]) -> name('product.show');
Route::get('/load-cart-data', [ FrontendPagesController::class, 'CartCount' ]) ;
Route::get('/shop-page', [ FrontendPagesController::class, 'ShopPageView' ]) -> name('shop.page.view');
Route::get('/post_category/{slug}', [ FrontendPagesController::class, 'ShowBlogPostByCategory' ] ) -> name('blog.post.category');
Route::get('/post_tag/{slug}', [ FrontendPagesController::class, 'ShowBlogPostByTag' ] ) -> name('blog.post.tag');


Route::get('/customer-forgot-password', [ FrontendPagesController::class, 'ShowCustomerForgotPassword' ] ) -> name('customer.forgot.password.page');
Route::post('/customer-forgot-password', [ FrontendPagesController::class, 'CustomerForgotPassword' ] ) -> name('customer.forgot.password');
Route::get('/customer-reset-password/{token?}/{email?}', [ FrontendPagesController::class, 'CustomerResetPasswordLink' ] ) -> name('customer.reset.password.link');
Route::post('/customer-reset-password', [ FrontendPagesController::class, 'CustomerResetPassword' ] ) -> name('customer.reset.password');


Route::get('/{id}', [ FrontendPagesController::class, 'QuickView' ]) -> name('quick.view');








