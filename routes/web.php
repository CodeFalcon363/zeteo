<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
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


Route::middleware(['auth:sanctum', 'verified', 'profile_complete'])->get('/overview', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth', 'profile_complete', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect('/overview');
    });

    Route::get('/dashboard', function () {
        return redirect('/overview');
    });

    Route::get('/user/profile', function (Request $request) {
        $input = $request->all();
        if (isset($input['advance'])) {
            return view('profile.advanced.show');
        }else{
            return view('profile.show');
        }
    })->name('profile');


    Route::get('/user/welcome', function () {
        return view('profile.welcome');
    })->name('welcome');
 
    
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('checkpoint/block/profile/steps/{step}', function ($step) {
        //User profile completion
        return view('profile.complete-steps', ['user' => Auth::user()]);
    })->where('id', '[0-9]+');
    Route::post('/account/profile/complete', [UserController::class, 'finish']);
 
    
});


