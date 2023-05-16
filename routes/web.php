<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\postController;
use App\Http\Controllers\manageController;
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

Route::get('/', [homeController::class,'index'])->name('index');
Route::get('/post/show', [postController::class,'show'])->name('post.show');

//--------------------------------login----------------------
Route::middleware('guest')->group(function (){
    Route::get('/login',[loginController::class,'create'])->name('login.create');
});
Route::post('/login/store',[loginController::class,'store'])->name('login.store');
Route::get('/login/destroy',[loginController::class,'destroy'])->name('login.destroy');
//----------------------------------------------------------------
Route::middleware('auth')->prefix('manage')->name('manage.')->group(function (){
    Route::get('/', [manageController::class,'index'])->name('index');
    Route::get('/posts', [postController::class,'index'])->name('posts');
    Route::get('/posts/create', [postController::class,'create'])->name('posts.create');
    Route::post('/posts/store', [postController::class,'store'])->name('posts.store');
    Route::get('/posts/show', [postController::class,'show'])->name('posts.show');
    Route::get('/posts/edit/{post}', [postController::class,'edit'])->name('posts.edit');
    Route::patch('/posts/update/{post}', [postController::class,'update'])->name('posts.update');
    Route::delete('/posts/delete/{post}', [postController::class,'delete'])->name('posts.delete');
});
