<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        // validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // attempt to authenticate and log in the user
        // based on the provided crefentials
        if(! auth()->attempt($attributes))
        {
//            // method 1
//            return back()
//                ->withInput()
//                ->withErrors(['email' => 'Yout provided credentials could not be verfied.']);

            // method 2
            throw ValidationException::withMessages(['email' => 'Yout provided credentials could not be verfied.']);
        }

        // prevent session fixation, so we need to regenerate the session id
        session()->regenerate();

        // redirect with message
        return redirect('/')->with('success', 'Welcome Back!');

    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye!');
    }
}
