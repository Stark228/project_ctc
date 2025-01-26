<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/dealers', [PageController::class, 'dealers'])->name('dealers');
Route::get('/dealers/dealer_detail', [PageController::class, 'dealer_detail'])->name('dealer_detail');

Route::get('/cars', [PageController::class, 'cars'])->name('cars');
Route::get('/cars/{id}', [PageController::class, 'cardetail'])->name('cardetail');
Route::get('/cars/{id}/showroom', [PageController::class, 'showroom'])->name('showroom');

Route::get('/compare', [PageController::class, 'compare'])->name('compare');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/appointment/{id}', [PageController::class, 'appointment'])->name('appointment');

Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback');




# Create






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
