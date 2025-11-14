<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FeedbackClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

// Rute Public
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/toocare', [PageController::class, 'toocare'])->name('toocare');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/articles', [PageController::class, 'articles'])->name('articles');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/dashboarad', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('admin/feedback', [FeedbackController::class, 'index'])->name('admin.feedback.index');
    Route::post('admin/feedback/{id}/read', [FeedbackController::class, 'markAsRead'])->name('admin.feedback.read');
    Route::delete('admin/feedback/{id}', [FeedbackController::class, 'destroy'])->name('admin.feedback.destroy');
    
    Route::resource('admin/products', ProductController::class);
    Route::resource('admin/articles', ArticleController::class);
    Route::resource('admin/categories', CategoryController::class);
    Route::resource('admin/feedbackclient', FeedbackClientController::class);
});

require __DIR__.'/auth.php';
