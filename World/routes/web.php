<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CoursesController;
use  App\Http\Controllers\user\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Route::get('/courses', function () {

//     return view('courses');
// })->name('courses');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/members', function () {
    return view('members');
})->name('members');

Route::get('/about', function () {
    return view('about');
})->name('about');



 Route::get('/courses',[CoursesController::class,'show'])->name('courses');

 Route::get('allreg',[CoursesController::class,'showallreg']);

 Route::get('/addCourse',[CoursesController::class,'create'])->name('addCourse');
 Route::post('/addCourse',[CoursesController::class,'store'])->name('addCourse');

// Route::view('/addCourse','addCourse');



//submit the  register part



Route::middleware('verified')->group( function (){
    Route::get('/courseCheckout/{id}',[CoursesController::class,'checkout'])->name('courseCheckout');
    Route::get('user/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::get('/courseCheckout',[CoursesController::class,'createReg']);
   Route::post('/courseCheckout',[CoursesController::class,'storeReg']);
   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});



// authentication part
Auth::routes(['verify'=> true]);




