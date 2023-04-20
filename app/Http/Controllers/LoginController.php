<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if ($test = session('test')) {
            action($test);
        }
    //  dd(session()->has('foo')); // - проверка наличия сессии
        
    //  dd(session()->all()); // - наличие каких либо сессий


    //  $foo = session('foo');
    //  dd($foo);

        return view('login.index');
    }

    public function store(Request $request)
    
    {
        // session()->put('foo', 'bar');

        // session([
        //     'foo' => 'Bar',
        //     'name' => 'Max',
    // ]);

        // $ip = $request->ip();
        // $path = $request->path();
        // $url = $request->url();
        // dd($ip, $path, $url);

        // $email = $request->input(['email']);
        // $password = $request->input(['password']);
        // $remember = $request->boolean(['remember']);

        // dd($email, $password, $remember);

        // session()->forget('foo'); // - удаление сессии
        // session()->flush();

    // authenticate user
    session(['alert' => __('Добро пожаловать!')]);

        // alert(__('Добро пожаловать!'));

        // if (true) {
        //     return redirect()->back()->withInput();
        // }

        return redirect()->route('user');
    }
}
