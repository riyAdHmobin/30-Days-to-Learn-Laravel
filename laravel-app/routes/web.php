<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});




Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$5000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$1000'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'salary' => '$2000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$5000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$1000'
        ],
        [
            'id' => 3,
            'title' => 'Project Manager',
            'salary' => '$2000'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
