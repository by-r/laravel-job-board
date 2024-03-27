<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

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
    ]
];

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => '50000'
        ],
        [
            'id' => 2,
            'title' => 'Site Realibility Engineer',
            'salary' => '44000'
        ],
        [
            'id' => 3,
            'title' => 'Quality Assurance',
            'salary' => '31000'
        ],
    ];
    
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id );

    return view('job', [ 'job' => $job]);
});

Route::get('/profile', function () use ($profiles) {
    return view('profile', [
        'profiles' => $profiles
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

    return view('profiles', ['profile' => $profile]);
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::redirect('/', '/home', 301);
