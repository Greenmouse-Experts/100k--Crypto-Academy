<?php

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

Route::get('/test', [App\Http\Controllers\HomePageController::class, 'test']);

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about'])->name('about');
Route::get('/affiliate', [App\Http\Controllers\HomePageController::class, 'affiliate'])->name('affiliate');
Route::get('/faq', [App\Http\Controllers\HomePageController::class, 'faq'])->name('faq');
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\HomePageController::class, 'blog'])->name('blog');
Route::get('/terms', [App\Http\Controllers\HomePageController::class, 'terms'])->name('terms');
Route::get('/policy', [App\Http\Controllers\HomePageController::class, 'policy'])->name('policy');

// Authentications
Route::get('/signIn', [App\Http\Controllers\HomePageController::class, 'sign'])->name('signIn');
Route::get('/login', [App\Http\Controllers\HomePageController::class, 'sign'])->name('login');
Route::get('/signUp', [App\Http\Controllers\HomePageController::class, 'signUp'])->name('signUp');
Route::get('/forgot', [App\Http\Controllers\HomePageController::class, 'forgot'])->name('forgot');
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login'])->name('admin.login-view');


Route::post('admin/login', [App\Http\Controllers\AdminController::class, 'post_admin_login'])->name('admin.login.post');

//User Authentications
Route::prefix('auth')->group(function () {
    Route::post('/register', [App\Http\Controllers\HomePageController::class, 'register'])->name('register');
    Route::get('/verify/account/{email}', [App\Http\Controllers\HomePageController::class, 'verify_account'])->name('verify.account');
    Route::post('/email/verify/resend/{email}', [App\Http\Controllers\HomePageController::class, 'email_verify_resend'])->name('email.verify.resend');
    Route::post('/email/confirm/{token}', [App\Http\Controllers\HomePageController::class, 'registerConfirm'])->name('email.confirmation');
    Route::post('/user/login', [App\Http\Controllers\HomePageController::class, 'user_login'])->name('user.login');
    Route::post('/password/forget', [App\Http\Controllers\HomePageController::class, 'forget_password'])->name('user.forget.password');
    Route::get('/reset/password/email/{email}', [App\Http\Controllers\HomePageController::class, 'password_reset_email'])->name('user.reset.password');
    Route::post('update/password/reset/', [App\Http\Controllers\HomePageController::class, 'reset_password'])->name('user.update.password');
});

Route::get('/logout', [App\Http\Controllers\HomePageController::class, 'logout'])->name('logout');

Route::get('/ref/{id}', [App\Http\Controllers\Controller::class, 'ref'])->name('ref');

// User Dashboard
Route::prefix('dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/guide', [App\Http\Controllers\DashboardController::class, 'guide'])->name('user.guide');
    Route::get('/wallet', [App\Http\Controllers\DashboardController::class, 'wallet'])->name('user.wallet');
    Route::get('/deposit', [App\Http\Controllers\DashboardController::class, 'deposit'])->name('user.deposit');
    Route::post('/deposit', [App\Http\Controllers\DashboardController::class, 'deposit_post'])->name('user.deposit.post');
    Route::get('/withdraw', [App\Http\Controllers\DashboardController::class, 'withdraw'])->name('user.withdraw');
    Route::get('/read-notice/{id}', [App\Http\Controllers\DashboardController::class, 'read_notice'])->name('read.notice');
    Route::post('/withdraw', [App\Http\Controllers\DashboardController::class, 'withdraw_post'])->name('user.withdraw.post');
    Route::get('/subscribe', [App\Http\Controllers\DashboardController::class, 'subscribe'])->name('user.subscribe');
    Route::post('/subscribe', [App\Http\Controllers\DashboardController::class, 'subscribe_now'])->name('user.subscribe.post');
    Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('user.profile');
    Route::get('/signal-room', [App\Http\Controllers\DashboardController::class, 'signal'])->name('signal.room');
    Route::post('/profile/upload/picture', [App\Http\Controllers\DashboardController::class, 'profile_upload_picture'])->name('user.profile.upload.picture');
    Route::post('/profile/update', [App\Http\Controllers\DashboardController::class, 'profile_update'])->name('user.profile.update');
    Route::post('/password/update', [App\Http\Controllers\DashboardController::class, 'password_update'])->name('user.password.update');
    Route::get('/affiliate', [App\Http\Controllers\DashboardController::class, 'affiliate'])->name('user.affiliate');
});


// Admin Dashboard
Route::prefix('adminwelcome')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'welcome'])->name('admin.welcome');
    Route::get('/members', [App\Http\Controllers\AdminController::class, 'members'])->name('admin.members');
    Route::get('/trainings', [App\Http\Controllers\AdminController::class, 'trainings'])->name('admin.trainings');
    Route::get('/subscribers', [App\Http\Controllers\AdminController::class, 'subscribers'])->name('admin.subscribers');
    Route::get('/unsubscribers', [App\Http\Controllers\AdminController::class, 'unsubscribers'])->name('admin.unsubscribers');
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/affiliate', [App\Http\Controllers\AdminController::class, 'affiliate'])->name('admin.affiliate');
    Route::get('/transaction', [App\Http\Controllers\AdminController::class, 'transaction'])->name('admin.transaction');
    Route::get('/viewdetails', [App\Http\Controllers\AdminController::class, 'viewdetails'])->name('admin.viewdetails');
    Route::get('/signal', [App\Http\Controllers\AdminController::class, 'signal'])->name('admin.signal');
    Route::get('/role', [App\Http\Controllers\AdminController::class, 'role'])->name('admin.role');
    Route::get('/admin-read-notice/{id}', [App\Http\Controllers\AdminController::class, 'read_notice'])->name('read.notice');
    Route::get('/transaction-details/{id}', [App\Http\Controllers\AdminController::class, 'transaction_details'])->name('transaction.details');
    Route::get('/viewmember/{id}', [App\Http\Controllers\AdminController::class, 'viewmembers'])->name('admin.viewmembers');
    Route::post('users/change_type/{id}', [App\Http\Controllers\AdminController::class, 'change_type'])->name('users.change_type');
    Route::post('admin/change_type/{id}', [App\Http\Controllers\AdminController::class, 'admin_change_type'])->name('admin.change_type');
    //deposit trans
    Route::post('approvetrans/{id}', [App\Http\Controllers\AdminController::class, 'approve_deposit'])->name('transaction.deposit.approve');
    Route::post('declinetrans/{id}', [App\Http\Controllers\AdminController::class, 'decline_deposit'])->name('transaction.deposit.decline');
    //Withdrawal trans
    Route::post('approvewithtrans/{id}', [App\Http\Controllers\AdminController::class, 'approve_withdraw'])->name('transaction.withdraw.approve');
    Route::post('declinewithtrans/{id}', [App\Http\Controllers\AdminController::class, 'decline_withdraw'])->name('transaction.withdraw.decline');

    Route::get('/logout-admin', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
    Route::post('/profile/update', [App\Http\Controllers\AdminController::class, 'profile_update'])->name('admin.profile.update');
    Route::post('/admin/create', [App\Http\Controllers\AdminController::class, 'create_admin'])->name('admin.create');
    Route::post('/subscriber-search', [App\Http\Controllers\AdminController::class, 'search_subscriber'])->name('subscriber.search');
    Route::post('/password/update', [App\Http\Controllers\AdminController::class, 'password_update'])->name('admin.password.update');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
