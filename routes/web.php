<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {

    return view('Home');
});
Route::get('/jobs', function ()  {
    return view('Jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs =


   $job = Job::find($id);

    dd($job);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('Contact');
});