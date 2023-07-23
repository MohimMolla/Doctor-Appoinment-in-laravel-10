<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// test dashboard
// Route::get('/home', function () {
//     return view('admin.home');
// });


//defoult route start
// Route::get('/dashboard', function () {
//     return view('admin.home');
// })->middleware(['auth', 'verified'])->name('dashboard');

// user route start
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/doctor', [HomeController::class, 'doctor']);
// Route::get('/deleted/{id}', [HomeController::class,'Doctordeleted']);


Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappoinment', [HomeController::class, 'myappoinment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

// user route end

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//defoult route end

//User route start
// Route::get('/', function () {
//     return view('layouts.templete');
// });
// Route::get('/', function () {
//     return view('user.home');
// });
Route::get('/about', function () {
    return view('user.about');
});
// Route::get('/doctor', function () {
//     return view('user.doctor');
// });
Route::get('/news', function () {
    return view('user.news');
});
Route::get('/contact', function () {
    return view('user.contact');
});
//User route end

//Admin route start
Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/store_doctor', [AdminController::class, 'adddoctor']);
Route::get('/alldoctor', [AdminController::class, 'alldoctor']);
Route::get('/editdoctor/{id}', [AdminController::class, 'Editdoctor']);
Route::post('/updatedoctor/{id}', [AdminController::class, 'Updatedoctor']);
Route::get('/deleted/{id}', [AdminController::class, 'Doctordeleted']);

Route::get('/showappoinment', [AdminController::class, 'showappoinment']);
Route::get('/approved/{id}', [AdminController::class, 'Approved']);
Route::get('/canceled/{id}', [AdminController::class, 'Canceled']);

//Admin route end

require __DIR__ . '/auth.php';
