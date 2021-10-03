<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // create user
        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:25'
        ]);

        $user = User::create($attributes);

//        session()->flash('success', 'Your account has been created');

        // log the user in
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }
}
