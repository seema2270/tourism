<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'about']);
Route::get('/packages', [FrontendController::class, 'package']);
Route::get('/package-details/{id}', [FrontendController::class, 'packageDetails']);
Route::get('/blogs', [FrontendController::class, 'blog']);
Route::get('/blog-details/{id}', [FrontendController::class, 'blogDetails']);
Route::get('/gallery', [FrontendController::class, 'gallery']);
Route::get('/contact', [FrontendController::class, 'contact']);

Route::post('/user/store-contact', [ContactController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// admin routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/users', [AdminController::class, 'users']);
    Route::get('/admin/delete-user/{id}', [AdminController::class, 'deleteUser']);

    Route::get('/admin/create-guide', [AdminController::class, 'createGuides']);
    Route::post('/admin/store-guide', [AdminController::class, 'storeGuide']);

    Route::get('/admin/guides', [AdminController::class, 'guides']);

    Route::get('/admin/create-package', [AdminController::class, 'createPackage']);
    Route::post('/admin/store-package', [PackageController::class, 'store']);

    Route::get('/admin/view-package/{id}', [PackageController::class, 'show']);

    Route::get('/admin/package', [AdminController::class, 'package']);
    Route::get('/admin/delete-package/{id}', [PackageController::class, 'destroy']);

    
    Route::get('/admin/booking', [AdminController::class, 'bookings']);
    Route::get('/admin/contact', [AdminController::class, 'contact']);
    Route::get('/admin/delete-contact/{id}', [ContactController::class, 'destroy']);

    Route::get('/admin/profile', [AdminController::class, 'profile']);

    Route::get('/admin/create-blog', [AdminController::class, 'createblog']);
    Route::post('/admin/store-blog', [BlogController::class, 'store']);
    Route::get('/admin/blog', [AdminController::class, 'blog']);
    Route::get('/admin/delete-blog/{id}', [BlogController::class, 'destroy']);

    Route::post('/admin/store-gallery', [GalleryController::class, 'store']);
    Route::get('/admin/gallery', [AdminController::class, 'gallery']);
    Route::get('/admin/delete-gallery/{id}', [GalleryController::class, 'destroy']);

    Route::get('/admin/reviews', [AdminController::class, 'reviews']);
    Route::get('/admin/delete-review/{id}', [ReviewController::class, 'destroy']);


    Route::get('/admin/booking/paid/{id}', [BookingController::class, 'markAsPaid']);
    Route::get('/admin/booking/delete/{id}', [BookingController::class, 'destroy']);
    Route::post('/admin/booking/change-status/{id}', [BookingController::class, 'changeStatus']);

    Route::get('/admin/create-itinerary/{id}', [ItineraryController::class, 'create']);
    Route::post('/admin/store-itinerary', [ItineraryController::class, 'store']);

    Route::get('/admin/delete-itinerary/{id}', [ItineraryController::class, 'destroy']);
    Route::get('/admin/edit-itinerary/{id}', [ItineraryController::class, 'edit']);
    
    Route::post('/admin/update-itinerary/{id}', [ItineraryController::class, 'update']);

    Route::get('/admin/payment-logs',[AdminController::class,'paymentLogs']);

});

// user routes
Route::group(['middleware' => ['auth']], function () {
    Route::post('/user/submit-review/{id}', [ReviewController::class, 'store']);

    Route::post('/user/book-package', [BookingController::class, 'store']);

    Route::get('/booking/pay-with-khalti/{price}/{id}', [BookingController::class, 'payWithKhalti']);

    Route::get('/verify-booking-purchase-status/{id}', [BookingController::class, 'verifybookignPurchaseStatus']);

    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/edit-profile', [UserController::class, 'editProfile']);

    Route::post('/profile/update', [UserController::class, 'updateProfile']);

    Route::get('/my-booking', [UserController::class, 'booking']);
});
