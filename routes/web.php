<?php

Route::middleware(['twitter'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login/twitter', function () {
    return Socialite::driver('twitter')->redirect();
});

Route::get('/login/twitter/callback', function () {
    $user = Socialite::driver('twitter')->user();
    session([
      'twitter-user' => $user
    ]);
    return redirect('/');
});

Route::get('/logout', function () {
    session([
      'twitter-user' => null
    ]);

    return redirect('/login');
});
