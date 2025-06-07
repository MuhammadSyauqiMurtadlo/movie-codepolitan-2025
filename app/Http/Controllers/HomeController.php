<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return response(request()->all());
        // return response('login success', 200);
        // return view('welcome');
    }
}
