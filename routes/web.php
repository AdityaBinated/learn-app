<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');        
     //prints on localhost from home view | added ['greetings'=>'Welcome Home'] attribute and printed $greetings in blade file
    });

// {{Learn- for just info}} 
Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' =>[
        [
        'id'=>1,
        'title'=>'CEO ',
        'salary'=>' $50,000 '
        ],
    
        [
        'id'=>2,
        'title'=>'CTO ',
        'salary'=>' $40,000 '
        ]
    ]
    ]);                //show array in jobs.blade.php
});


Route::get('/job/{id}', function ($id) {  //for.eg /job/1
 //   dd($id);  dump and die function
 $jobs =[
    [
    'id'=>1,
    'title'=>'CEO ',
    'salary'=>' $50,000 '
    ],

    [
    'id'=>2,
    'title'=>'CTO ',
    'salary'=>' $40,000 '
    ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);  //in jobs.blade.php view by clicking on list, this job.blade.php is view| Arr is a method in laravel, ::first is used to pass first array
    // dd($job);

    return view('job',['jobs' => $job]);   //passes $job     
});

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





