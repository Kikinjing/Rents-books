<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\MessageCatalogue;

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
     return view('landing.welcome');
 });
//Route FE
Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/books', function () {
    return view('dashboard.books');
});
// Route::get('/user', function () {
//     return view('dashboard.user');
// });


Route::get('/category', function () {
    return view('dashboard.category');
});
Route::get('/rent-log', function () {
    return view('dashboard.rent-log');
});

// Route dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth')->middleware('admin');
Route::get('/index-Register', [AuthController::class, 'indexRegister'])->name('indexRegister');
Route::post('/storeRegister', [AuthController::class, 'storeRegister'])->name('storeRegister');
Route::get('/indexLogin', [AuthController::class, 'indexLogin'])->name('indexLogin');
Route::post('/storeLogin', [AuthController::class, 'storeLogin'])->name('storeLogin');
Route::post('/', [MessageController::class, 'storeMessage'])->name('storeMessage');

// Route CRUD
Route::get('/users', [AdminController::class, 'indexUser'])->middleware('auth')->middleware('admin');
Route::post('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser')->middleware('auth')->middleware('admin');
Route::post('update/{id}',[AdminController::class,'updateUser'])->name('update');

//Route Book
Route::get('/books', [BookController::class, 'books'])->name('books')->middleware('auth')->middleware('admin');
Route::get('/addbook', [BookController::class, 'addbook'])->name('addbook');
Route::post('/create-book', [BookController::class, 'createBook'])->name('createbook');
Route::post('/deletebook/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
