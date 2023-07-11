<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

use App\Models\Post;

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


Route::get('/',[HomeController::class,'index'])->name('home');

Route::view('about','pages.about')->name('about');
Route::get('posts',[App\Http\Controllers\PostController::class,'index'])->name('posts.index');
Route::get('posts/{id}',[App\Http\Controllers\PostController::class,'show'])->name('posts.show');


Route::group(['middleware'=>'auth','prefix'=>'admin','as'=>'admin.'],function (){
    Route::resources(
        [
            'posts'=> PostController::class,
            'categories'=> CategoryController::class,
            'tags'=> TagController::class,

        ]
    );
});

Auth::routes();
