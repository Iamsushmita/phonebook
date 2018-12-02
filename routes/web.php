<?php
Route::get('/', function () {
    return view('phonebook');
});

Route::get('/{name}', function(){
    return redirect('/');
})->where('name', '[A-Za-z]+'); //to fix the router of vue for laravel, to reload the page..
