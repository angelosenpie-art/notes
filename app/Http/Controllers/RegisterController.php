<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __contruct() // THIS FUNCTION (PAGE) IS CAN BE SEEN BY GUEST USER ONLY
    {
        $this->middleware(['guest']);
    }
    public function index () {
        return view('register');
    }

    public function store(Request $request) {


        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('profile');
    }
}
