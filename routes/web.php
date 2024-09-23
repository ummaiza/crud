<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});

// Route::get('users', function(){
//     $users = [
//         // [
//         //     'nama' => 'Syawal Aprian',
//         //     'phone' => '082187755540',
//         //     'email' => 'syawalaprian02@gmail.com',
//         // ],
//         // [
//         //     'nama' => 'jon doe',
//         //     'phone' => '082187755541',
//         //     'email' => 'jondoe@gmail.com',
//         // ],
//         // [
//         //     'nama' => 'Agus',
//         //     'phone' => '082187755543',
//         //     'email' => 'agus@gmail.com',
//         // ],
//     ];

//     return view('users.index', [
//         'users' => $users,
//     ]);
// });

Route::get('users', [UserController::class, 'index']);

