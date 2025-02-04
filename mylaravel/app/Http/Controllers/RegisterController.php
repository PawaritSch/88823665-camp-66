<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function index()
    {
        return view('register');
    }
    function create(Request $req){
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password
        ]);
    }
}
