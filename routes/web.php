<?php
// ------------------------------------
// Web Routes
// ------------------------------------
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\adminlogincontroller;
use App\Http\Controllers\frontend\WhyController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\WhatsappChatbotController;
use App\Http\Controllers\frontend\BusinessAutomationController;
use App\Http\Controllers\frontend\Logincontroller;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerAppointmentController;
use App\Http\Controllers\Admin\AdminAppointmentController;
use App\Http\Controllers\Admin\WhySectionController;
use App\Http\Controllers\Admin\TeamController as AdminTeamController;
use App\Http\Controllers\Admin\ClientController;



// ------------------------------------
// Optimize Clear Route (for Development)
// ------------------------------------
Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return response()->json(['message' => 'Optimization cache cleared successfully.']);
});
// ------------------------------------
// frontend Routes
// ------------------------------------
// Route for clearing cache
Route::get('/clear-cache', [HomeController::class, 'clearCache'])->name('home.clearCache');
Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/login', [Logincontroller::class, 'login'])->name('account.login');
        Route::post('/login', [Logincontroller::class, 'authenticate'])->name('account.authenticate');
        Route::get('/register', [Logincontroller::class, 'register'])->name('account.register');
        Route::post('/process-register', [Logincontroller::class, 'processRegister'])->name('account.processRegister');
    });
});

Route::prefix('admin')->group(function() {
    Route::get('company-profile', [CompanyProfileController::class, 'index'])->name('admin.company-profile.index');
    Route::post('company-profile', [CompanyProfileController::class, 'update'])->name('admin.company-profile.update');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('clients', ClientController::class);
});
    //Route for displaying the Why section
Route::get('/why',[WhyController::class,'index']);
Route::prefix('admin')->group(function () {
    Route::get('/why', [WhySectionController::class, 'index'])->name('admin.why.index');
    Route::get('/why/create', [WhySectionController::class, 'create'])->name('admin.why.create');
    Route::post('/why/store', [WhySectionController::class, 'store'])->name('admin.why.store');
});
Route::get('/admin/why/edit/{id}', [WhySectionController::class, 'edit'])->name('admin.why.edit');
Route::put('/admin/why/update/{id}', [WhySectionController::class, 'update'])->name('admin.why.update');
Route::delete('/admin/why/destroy/{id}', [WhySectionController::class, 'destroy'])->name('admin.why.destroy');

Route::get('/team',[TeamController::class,'index']);
// Admin routes to manage team members
Route::get('/admin/teams', [AdminTeamController::class, 'index'])->name('admin.team.index');
Route::get('/admin/teams/create', [AdminTeamController::class, 'create'])->name('admin.team.create');
Route::post('/admin/teams', [AdminTeamController::class, 'store'])->name('admin.team.store');
Route::get('/admin/teams/{id}/edit', [AdminTeamController::class, 'edit'])->name('admin.team.edit');
Route::put('/admin/teams/{id}', [AdminTeamController::class, 'update'])->name('admin.team.update');
Route::delete('/admin/teams/{id}', [AdminTeamController::class, 'destroy'])->name('admin.team.destroy');


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index']);

Route::prefix('admin')->group(function() {
    // Admin routes for managing services
    Route::get('services', [ServiceController::class, 'adminIndex'])->name('admin.services.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');
});

Route::prefix('customer')->group(function () {
    Route::get('appointment', [CustomerAppointmentController::class, 'create'])->name('customer.appointment.create');
    Route::post('appointment', [CustomerAppointmentController::class, 'store'])->name('customer.appointment.store');
});

// frontend route for displaying services
Route::get('services', [ServiceController::class, 'index'])->name('frontend.services.index');

Route::get('/team',[TeamController::class,'index']);

Route::get('/why',[WhyController::class,'index']);
Route::get('/business-automation',[BusinessAutomationController::class,'index']);
Route::get('/whatsapp-chatbot',[WhatsappChatbotController::class,'index']);
// Route::get('frontend/login', [Logincontroller::class, 'login'])->name('account.login');
// Route::post('frontend/login', [Logincontroller::class, 'authenticate'])->name('account.authenticate');
// Route::get('frontend/register', [Logincontroller::class, 'register'])->name('account.register');
Route::get('frontend/profile', [Logincontroller::class, 'profile'])->name('account.profile');
Route::get('frontend/logout', [Logincontroller::class, 'logout'])->name('account.logout');
// Route::post('/process-register', [Logincontroller::class, 'processRegister'])->name('account.processRegister');
Route::get('/change-password', [Logincontroller::class, 'showChangePasswordForm'])->name('account.changePassword');
Route::post('/process-change-password', [AuthController::class, 'changePassword'])->name('account.processChangePassword');
Route::post('/update-profile', [AuthController::class, 'updateProfile'])->name('account.updateProfile');
Route::post('/update-address', [AuthController::class, 'updateAddress'])->name('account.updateAddress');



//Route::get('/blog', [BlogController::class, 'index']);
//Route::get('/blog/{id}', [BlogController::class, 'show']);



// ------------------------------------
// Create - Footer Management Routes
// ------------------------------------

// frontend route
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
// Route::prefix('admin')->group(function() {
//     // Admin routes for managing services
//     Route::get('services', [ServiceController::class, 'adminIndex'])->name('admin.services.index');
//     Route::get('services/create', [ServiceController::class, 'create'])->name('admin.services.create');
//     Route::post('services', [ServiceController::class, 'store'])->name('admin.services.store');
//     Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
//     Route::put('services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
//     Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');
// });


Route::prefix('admin')->group(function () {

    // ------------------------------------
    // Admin Guest Routes (For Login/Registration)
    // ------------------------------------
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/Registration', [AdminLoginController::class, 'registration'])->name('admin.registration');
        Route::post('/register-users',[AdminLoginController::class, 'registerUsers'])->name('admin.registerUsers');
        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });
    // ------------------------------------
    // Admin routes for About Section
    // ------------------------------------
    Route::get('about', [AdminAboutController::class, 'index'])->name('admin.about.index');
    Route::get('about/create', [AdminAboutController::class, 'create'])->name('admin.about.create');
    Route::post('about/store', [AdminAboutController::class, 'store'])->name('admin.about.store');
    Route::get('about/edit/{id}', [AdminAboutController::class, 'edit'])->name('admin.about.edit');
    Route::put('about/update/{id}', [AdminAboutController::class, 'update'])->name('admin.about.update');
    Route::delete('about/destroy/{id}', [AdminAboutController::class, 'destroy'])->name('admin.about.destroy');
    // ------------------------------------
    

    Route::get('appointments', [AdminAppointmentController::class, 'index'])->name('admin.appointments.index');
     // Admin routes for managing services
    //  Route::get('services', [ServiceController::class, 'adminIndex'])->name('admin.services.index');
    //  Route::get('services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    //  Route::post('services', [ServiceController::class, 'store'])->name('admin.services.store');
    //  Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    //  Route::put('services/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
    //  Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

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
