<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
                    [
                        'nama' => 'Syawal Aprian',
                        'phone' => '082187755540',
                        'email' => 'syawalaprian02@gmail.com',
                    ],
                    [
                        'nama' => 'jon doe',
                        'phone' => '082187755541',
                        'email' => 'jondoe@gmail.com',
                    ],
                    [
                        'nama' => 'Agus',
                        'phone' => '082187755543',
                        'email' => 'agus@gmail.com',
                    ],
                ];

                return view('users.index', [
                    'users' => $users,
                ]);
    }
}
