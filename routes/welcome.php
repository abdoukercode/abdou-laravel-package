<?php


    Route::get('hello', function(){
        echo "Hi from welcome package";
    });
Route::get('welcome/{name}', 'Abdou\Welcome\Http\WelcomeController@welcome');

