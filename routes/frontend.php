<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Authcontroller;
use App\Http\Controllers\frontend\Userscontroller;
use App\Http\Controllers\frontend\BattleController;

/* Web Route Start */
Route::middleware(['GuestFront'])->group(function () {

    /* Home Route Start */
    Route::controller(Authcontroller::class)->group(function() {  
        Route::get('/', 'index');
    });

    Route::controller(Userscontroller::class)->name('users.')->group(function() {  
        Route::get('signup', 'signup')->name('signup');
        Route::post('signup-request', 'signupRequest')->name('signupRequest');
        Route::any('user-verify/{token}', 'userVerify')->name('userVerify');
        Route::get('resend-Otp/{token}', 'resendOtp')->name('resendOtp');
        Route::any('login', 'login')->name('login');
    });

    

    Route::middleware(['UsersFront'])->group(function () {
        Route::controller(BattleController::class)->name('battle.')->group(function() {  
            Route::get('game/{game_type}','gamesListing')->name('gamesListing');
            Route::get('battle-view','battleViews')->name('battleViews');
        });

        Route::controller(Authcontroller::class)->name('auth.')->group(function() {  
            Route::get('profile','profile')->name('profile');
            Route::post('user-profile-update','userProfileUpdate')->name('userProfileUpdate');
            Route::post('user-profile-image','profileImageRequests')->name('profileImageRequests');
            Route::get('wallet','wallet')->name('wallet');
            Route::get('history','history')->name('history');
            Route::get('refer-earn','referEarn')->name('referEarn');
            Route::get('support','support')->name('support');
            Route::get('lagal-terms','lagalTerms')->name('lagalTerms');
        });    
    });
});

