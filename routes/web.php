<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['greetings'=>'Welcome Home']);         //prints on localhost from home view
});

// {{Learn- for just info}} 
Route::get('/about-direct', function () {
    return 'About Page';                //directly prints on localhost/about view
});

Route::get('/about-api', function () {
    return ['foo'=>'ok'];                //prints on localhost/about-us json format for api
});
// /{{Learn- for just info}}/ 

Route::get('/about', function () {
    return view('about');         //prints on localhost from about view
});

Route::get('/contact', function () {
    return view('contact');         //prints on localhost from contact view
});





