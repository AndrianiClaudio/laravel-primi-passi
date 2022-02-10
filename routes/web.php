<?php

use Illuminate\Support\Facades\Route;

//home
Route::get('/', function () {
    $data = [
        'name' => 'Claudio',
        'lastname' => 'Andriani',
    ];
    return view('home',$data);
})-> name('home');

//contacts
Route::get('/contacts', function () {
    $data = [
        'contacts' => [
            'Chiara Passaro','Elisabetta Daho','Thomas De Luca',
        ],
    ];
    return view('contacts',$data);
})-> name('contacts');

//info
Route::get('/info', function () {
    $data = [
        'info' => [
                'email' => 'claudioandriani1994@gmail.com',
                'username' => 'luckyjean',
                'anni' => '27'
            ],
        ];
    return view('info', $data);
})-> name('info');
