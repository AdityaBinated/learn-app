<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;
use App\Models\Job;



/* class Job{
    public static function all():array {
        return [
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
            ];   //data passing
    }
} */


/* @ $jobs =[
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
    ];   //data passing */


Route::get('/', function () {
    return view('home');        
     //prints on localhost from home view | added ['greetings'=>'Welcome Home'] attribute and printed $greetings in blade file
    });




// {{Learn- for just info}} 
Route::get('/jobs', function ()  { //@ use($jobs)
    // @ return view('jobs',['jobs'=> $jobs]); //This is used to pass above $jobs    //show array in jobs.blade.php
    return view('jobs',['jobs'=> Job::all()]);
});


Route::get('/job/{id}', function ($id)  {  //for.eg /job/1
 //   dd($id);  dump and die function
 
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);  //in jobs.blade.php view by clicking on list, this job.blade.php is view| Arr is a method in laravel, ::first is used to pass first array| id-wise view will be shown
    // dd($job);
    //  return view('job',['jobs' => $job]); //This is used to pass above $jobs   //passes $job  
    
    $job = Job::find($id);
     return view('job',['jobs' => $job]);
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





