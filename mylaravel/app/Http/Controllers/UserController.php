<?php
namespace App\Http\Controller;

Use Illuminate\Http\Request;

Use App\Models\User;

Class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('user', ['users' => $users]);
    }
}