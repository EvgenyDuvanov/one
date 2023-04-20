<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {

        // return response('Test', 200, []);

        // dd(response());

        // return ['foo' => 'bar'];

        return response()->json(['foo' => 'bar']);

        // return response('Test', 200, []);

     
    }
}
