<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)

    {
        // $data = $request->all();
        // $data = $request->only(['name','email']);
        // $data = $request->except(['name','email']);

        // $name = $request->input(['name']);
        // $email = $request->input(['email']);
        // $password = $request->input(['password']);
        // $agreement = $request->boolean(['agreement']);

        // // $remember = $request->boolean(['remember']);
        // // $remember = $request->file(['remember']);

        // // $email = $request->email;

        // // dd($request->has('name')); //на определения параметра в форме
        // // dd($request->filled('name')); //проверяет наличие параметра в запросе независимо от значения

        // dd($name, $email, $password, $agreement);
        if (true) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('user');
    }
}
