<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/jobs', function () {
    return view('Jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$65,000'
            ],
            [
                'id'=> 2,
                'title' => 'Programmer',
                'salary' => '$60,000'
            ],
            [
                'id'=> 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$65,000'
        ],
        [
            'id'=> 2,
            'title' => 'Programmer',
            'salary' => '$60,000'
        ],
        [
            'id'=> 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]
    ];


    $job = Arr::first($jobs, fn($job) => $job['id'] === (int)$id);

    dd($job);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('Contact');
});
