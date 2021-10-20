<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;





// ----------------- working Area ------------------




Route::resource('questions', QuestionController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




// ------------- prodcution area ---------------------

Route::get('/', function () {
    return view('home');
});
Route::get('/questionList', function () {
    return view('questionList');
});

Route::get('/about', function () {
    return view('about');
});


