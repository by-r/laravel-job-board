<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'SWE',
                'salary' => '50000'
            ],
            [
                'id' => 2,
                'title' => 'SRE',
                'salary' => '44000'
            ],
            [
                'id' => 3,
                'title' => 'QA',
                'salary' => '31000'
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'SWE',
            'salary' => '50000'
        ],
        [
            'id' => 2,
            'title' => 'SRE',
            'salary' => '44000'
        ],
        [
            'id' => 3,
            'title' => 'QA',
            'salary' => '31000'
        ],
    ];
    
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id );

    return view('job', [ 'job' => '$job']);
});

Route::get('/profile', function () {
    return view('profiles', [
        'profiles' => [
            [
            'id' => 1,
            'name' => 'John Doe',
            'currentJob' => 'unemployed',
            'lookingforJob' => True
        ],
        [
            'id' => 2,
            'name' => 'Mack Doe',
            'currentJob' => 'SWE',
            'lookingforJob' => True
        ],
        ]
    ]);
});

Route::get('/profile/{id}', function ($id) {
    $profiles = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'currentJob' => 'unemployed',
            'lookingforJob' => True
        ],
        [
            'id' => 2,
            'name' => 'Mack Doe',
            'currentJob' => 'SWE',
            'lookingforJob' => True
        ],
    ];

    $profile = Arr::first($profiles, fn($profile) => $profile['id'] == $id );

    return view('profile', ['profile' => $profile]);
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::redirect('/', '/home', 301);
