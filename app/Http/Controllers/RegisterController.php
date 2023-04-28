<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)

    {

    //    dd(User::query());

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:4', 'max:15', 'confirmed'],
            'agreement' => ['accepted'],
        ]);
        
        $user = User::query()->create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
        ]);

   // $user = new User;
        // $user->name = $validated['name'];
        // $user->email = $validated['email'];
        // $user->password = bcrypt($validated['password']);
        // $user->save();

        session(['alert' => __('Добро пожаловать!')]);

        return redirect()->route('user');
    }
}
