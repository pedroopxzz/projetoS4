<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view("sitecadastro");
    }

    function listagem()
    {
        $users = [
            [
                'name' => 'Maria Aparecida',
                'email' => 'maria.aparecida@gmail.com',
                'birthday' => '17/08/1980',

            ],
            [
                'name' => 'joão Paulo',
                'email' => 'joão.paulo2gmail.com',
                'birthday' => '05/05/1998',
            ]
        ];
        return view('list_users',compact('users'));
    }
}
