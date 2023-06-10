<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CoursesController;
use  App\Http\Controllers\user\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

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


//admin
Route::middleware(['auth','isAdmin'])->group(function(){

    Route::get('/addCourse',[CoursesController::class,'create'])->name('addCourse');
    Route::post('/addCourse',[CoursesController::class,'store'])->name('addCourse');
    Route::get('allreg',[CoursesController::class,'showallreg']);
});




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





//submit the  register part



Route::middleware('verified')->group( function (){
    Route::get('/courseCheckout/{id}',[CoursesController::class,'checkout'])->name('courseCheckout');
    Route::get('user/profile', [ProfileController::class, 'index'])->name('user.profile');
   Route::post('/courseCheckout',[CoursesController::class,'storeReg']);
//mail route
    //Route::post('/courseCheckout',[CoursesController::class,'sentmail']);

    // return new   TestMail();



   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});



// authentication part
Auth::routes(['verify'=> true]);



// //mail route
// Route::get('/email',function(){
// Mail::to('imoon.gamedev@gmail.com')->send(new TestMail());
// return redirect ('/');

// // return new   TestMail();
// });
