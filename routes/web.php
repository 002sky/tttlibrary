<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    if (auth::user()){
        if (auth::user()->status == 'is_admin') {
            return redirect('/adminDashboard');
        }else{
            return redirect('/banner');
        }
    } else {
        return view('login');
    }
});

Route::get('/admin', function () {
    if (auth::user()->status == 'is_admin') {
        return redirect('/adminDashboard');
    } else {
        return redirect('/banner');
    }
});

Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::group(['middleware'=>'isAdmin'],function(){
    Route::get('/addBook', [App\Http\Controllers\BookController::class, 'view'])->name('adminBook');
    Route::get('/addAuthor', [App\Http\Controllers\AuthorController::class, 'view'])->name('adminAuthor');
    Route::get('/addCategory', [App\Http\Controllers\CategoryController::class, 'view'])->name('adminCategory');
    Route::get('/addBanner', [App\Http\Controllers\BannerController::class, 'view'])->name('adminBanner');
    Route::get('/adminDashboard', [App\Http\Controllers\AdminController::class, 'show'])->name('adminDashboard');


    Route::Post('/editBook', [App\Http\Controllers\BookController::class, 'editBook'])->name('editBook');
    Route::Post('/editCategory', [App\Http\Controllers\CategoryController::class, 'EditCategory'])->name('EditCategory');
    Route::Post('/editAuthor', [App\Http\Controllers\AuthorController::class, 'EditAuthor'])->name('EditAuthor');
    Route::Post('/editBanner', [App\Http\Controllers\BannerController::class, 'editBanner'])->name('editBanner');
    Route::get('/deleteBanner/{id}', [App\Http\Controllers\BannerController::class, 'DeleteBanner'])->name('DeleteBanner');
    Route::get('/adminReturnBook/{id}', [App\Http\Controllers\StatusController::class, 'adminReturnBook'])->name('adminReturnBook');

    Route::post('/addBook/store', [App\Http\Controllers\BookController::class, 'add'])->name('addBook');
    Route::post('/addAuthor/store', [App\Http\Controllers\AuthorController::class, 'add'])->name('addAuthor');
    Route::post('/addCategory/store', [App\Http\Controllers\CategoryController::class, 'add'])->name('addCategory');
    Route::post('/addBanner/store', [App\Http\Controllers\BannerController::class, 'add'])->name('addBanner');
});

Route::group(['middleware'=>'isStudent'],function(){

    Route::Post('/updatePassword', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('passwordUpdate');
    
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'userProfile'])->name('profile');
    Route::Post('/editProfile', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');

    Route::get('/categoryBook/{id}', [App\Http\Controllers\CategoryController::class, 'categoryView'])->name('categoryBook');

    Route::get('/returnBook/{id}', [App\Http\Controllers\StatusController::class, 'returnBook'])->name('returnBook');

    Route::get('/extendTimes/{id}', [App\Http\Controllers\StatusController::class, 'extendTimes'])->name('extendTimes');

    Route::get('/bag', [App\Http\Controllers\StatusController::class, 'show'])->name('bag');

    Route::get('/categoryBook', [App\Http\Controllers\BookController::class, 'searchBook'])->name('search');


    Route::get('/borrow/{id}', [App\Http\Controllers\StatusController::class, 'borrow'])->name('borrow');


    Route::get('/banner', [App\Http\Controllers\BannerController::class, 'bannerShow'])->name('banner');
});

Auth::routes();
