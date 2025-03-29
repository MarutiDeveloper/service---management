<?php

use App\Http\Controllers\Admin\FooterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\adminlogincontroller;
use App\Http\Controllers\Frontend\WhyController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\WhatsappChatbotController;
use App\Http\Controllers\Frontend\BusinessAutomationController;



// ------------------------------------
// Frontend Routes
// ------------------------------------
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);

Route::get('/service',[ServiceController::class,'index']);

Route::get('/team',[TeamController::class,'index']);

Route::get('/why',[WhyController::class,'index']);
Route::get('/business-automation',[BusinessAutomationController::class,'index']);
Route::get('/whatsapp-chatbot',[WhatsappChatbotController::class,'index']);


//Route::get('/blog', [BlogController::class, 'index']);
//Route::get('/blog/{id}', [BlogController::class, 'show']);



// ------------------------------------
// Create - Footer Management Routes
// ------------------------------------
// Route to list Footer information
Route::get('/admin/create_footer', [FooterController::class, 'index'])->name('admin.create_footer.index');
// Route to Create Footer information
Route::get('/admin/create_footer/create', [FooterController::class, 'create'])->name('admin.create_footer.create'); // Show form for creating

// Route to Store Footer information
Route::post('/admin/create_footer', [FooterController::class, 'store'])->name('admin.create_footer.store');        // Store new entry

// Route to edit Footer information
Route::get('/admin/create_footer/edit/{id}', [FooterController::class, 'edit'])->name('admin.create_footer.edit');

// Route to update Footer information
Route::put('/admin/create_footer/update/{id}', [FooterController::class, 'update'])->name('admin.create_footer.update');

// Route to delete Footer information
Route::delete('/admin/create_footer/destroy/{id}', [FooterController::class, 'destroy'])->name('admin.create_footer.destroy');

// Frontend route
// ------------------------------------
// Clear Cache Route (for Development)
// ------------------------------------
Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return response()->json(['message' => 'Optimization cache cleared successfully.']);
});

// ------------------------------------
// Admin Panel Routes
// ------------------------------------

Route::prefix('admin')->group(function () {

    // ------------------------------------
    // Admin Guest Routes (For Login/Registration)
    // ------------------------------------
    Route::middleware(['admin.guest'])->group(function () {
        Route::get('/registration', [AdminLoginController::class, 'registration'])->name('admin.registration');
        Route::post('/register-users', [AdminLoginController::class, 'registerUsers'])->name('admin.registerUsers');
        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    // ------------------------------------
    // Admin Authenticated Routes (After Login)
    // ------------------------------------
    Route::middleware(['admin.auth'])->group(function () {

        // Admin Dashboard & Logout
        Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [AdminHomeController::class, 'logout'])->name('admin.logout');

        // Clear Cache
        Route::get('/clear-cache', [AdminHomeController::class, 'clearCache'])->name('admin.clearCache');

        // ------------------------------------
        // User Management Routes
        // ------------------------------------
        Route::resource('users', UserController::class)->except(['show']);

        // ------------------------------------
        // Pages Management Routes
        // ------------------------------------
        //Route::resource('pages', PageController::class)->except(['show']);
        // Pages Route
        

        // ------------------------------------
        // Authentication & Password Reset Routes
        // ------------------------------------
        Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('front.forgotPassword');
        Route::post('/process-forgot-password', [AuthController::class, 'processForgotPassword'])->name('front.processForgotPassword');
        Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('front.resetPassword');
        Route::post('/process-reset-password', [AuthController::class, 'processResetPassword'])->name('front.processResetPassword');

        // ------------------------------------
        // Settings Routes
        // ------------------------------------
       
        // ------------------------------------
        // Slug Generator Route (For SEO)
        // ------------------------------------
       
        // ------------------------------------
        // Temporary Image Upload Route
        // ------------------------------------
       

        // ------------------------------------
        // Profile Management Routes
        // ------------------------------------
    });

   
});
