<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\AuthsController;
use App\Http\Controllers\Admin\PostController as AdminPostController;


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


Route::get('/lang/{code}', [AppController::class, "switchLang"]);

Route::middleware('locale')->group(function(){
    
    Route::get('/', [HomeController::class, "index"]);
    Route::get('/home', [HomeController::class, "index"]);
    Route::get('/about', [HomeController::class, "about"]);
    Route::get('/developer', [HomeController::class, "developer"]);
    Route::get('/contact', [HomeController::class, "contact"]);
    ROute::get('/video', [HomeController::class, "video"]);
    Route::get('/pastor', [HomeController::class, "responsive"]);
    Route::get('/shopping', [HomeController::class, "shopping"]);
    Route::get('/personal', [HomeController::class, "more"]);
    Route::get('/listing', [PostController::class, "index"]);
    Route::get('/listing/{id}', [PostController::class, "show"]);



    Route::middleware('auth')->group(function(){

        Route::get('/create-post', [PostController::class, "create"]);
        Route::post('/store-post', [PostController::class, "store"]);
        //Edit Post
        Route::get('/listing/edit/{id}', [PostController::class, "edit"]);
        Route::patch('/store/update/{id}', [PostController::class, "update"]);
        Route::get('/my-post', [PostController::class, "myPost"]);
        Route::get('/listing/delete/{id}', [PostController::class, "Delete"]);
        Route::get('/listing/restore/{id}', [PostController::class, "restore"]);
        Route::get('/listing/empty/{id}', [PostController::class, "empty"]);



    });

    Route::get('/register', [AuthController::class, "registerForm"]);
    Route::post('/register', [AuthController::class, "register"]);
    Route::get('/logout', [AuthController::class, "logout"]);
    Route::get('/login', [AuthController::class, "loginForm"])->name('login');
    Route::post('/login', [AuthController::class, "login"]);
    Route::post('/help', [HelpController::class, 'index'])->name('help');

});

Route::prefix('admin')->group(function(){


    Route::get('/login', [AdminController::class, "loginForm"])->name('admin_login');
    Route::post('/login', [AdminController::class, "login"]);

    Route::middleware('auth:admin')->group(function(){

        Route::get('/logout', [AdminController::class, "logout"]);
        Route::get('/create', [AdminController::class, 'create']);
        Route::get('/admin', [AdminController::class, 'admin']);
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/listing', [AdminController::class, 'index']);
        Route::get('/listing/delete/{id}', [AdminController::class, "delete"]);
        Route::get('/post/edit/{id}', [AdminController::class, "edit"]);
        Route::patch('/post/update/{id}', [AdminController::class, "update"]);
        //Admin-Category
        Route::get('/category', [CategoryController::class, 'index']);
        Route::get('/category/{id}', [CategoryController::class, "show"]);
        //User Login
        Route::get('/login1', [AuthsController::class, "loginForm"])->name('login');
        Route::post('/login1', [AuthsController::class, "login"]);
        Route::get('/logout', [AuthsController::class, "logout"]);
        Route::get('/register', [AuthsController::class, "registerForm"]);
        Route::post('/register', [AuthsController::class, "register"]);

        //Route for user and admin
        Route::prefix('user')->group(function() {
            Route::get('/', [UserController::class, 'index']);
            Route::post('/store/create', [UserController::class, 'store']);
            Route::get('/{id}/edit', [UserController::class, 'edit']);
            Route::get('/{id}/delete', [UserController::class, 'destroy']);
        });

        Route::prefix('admin')->group(function() {
            Route::get('/', [AdminsController::class, 'index']);
            Route::get('/create', [AdminsController::class, 'create']);
            Route::post('/store/create', [AdminsController::class, 'store']);
            Route::get('/{id}/edit', [AdminsController::class, 'edit']);
            Route::patch('/{id}/update', [AdminsController::class, 'update']);
            Route::get('/{id}/delete', [AdminsController::class, 'destroy']);
        });
        
    });

});