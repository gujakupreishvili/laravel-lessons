<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;
use App\Http\Controllers\RegistereUserController;
use App\Http\Controllers\SessionController;





Route::get('/', function () {
    return view('welcome');
});
// Route::controller(JobController::class)->group(function(){
//     Route::get('/jobs', [ 'index']) ;
//     Route::get("/jobs/create" , [ 'create'] );
//     Route::get('/jobs/{job}', [ 'show']);
//     Route::post('/jobs', ['store'] );
//     Route::get('/jobs/{job}/edit', [ 'edit']);
//     Route::patch('/jobs/{job}', [ 'update']); 
//     Route::delete('/jobs/{job}',[ 'destrov']);  
// });
Route::resource('jobs', JobController::class,[
    // 'exept' =>['edit']
]);
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', [RegistereUserController::class, 'create']);
Route::post('/register', [RegistereUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);






