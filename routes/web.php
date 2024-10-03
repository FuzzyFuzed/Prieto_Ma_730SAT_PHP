<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('Home');
});

Route::get('/jobs', function () {
        $jobs = Job::with('employer')->simplePaginate(3);

    return view('Jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);


    if (! $job) {
        abort(404);
    }


    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('Contact');
});
