<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'name' => 'Claudio',
        'lastname' => 'Andriani',
        'info' => [
            'email' => 'claudioandriani1994@gmail.com',
            'username' => 'luckyjean',
            'anni' => '27'
        ],
    ];
    return view('home',$data);
})-> name('home');
Route::get('/contacts', function () {
    return view('contacts');
})-> name('contacts');
Route::get('/info', function () {
    return view('info');
})-> name('info');
