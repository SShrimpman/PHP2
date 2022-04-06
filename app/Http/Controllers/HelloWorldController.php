<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        $helloWorld = 'Hello World Shrimp';
        $second = 'Batatas com arroz';
        return view('hello_world.index', [
            'helloWorld' => $helloWorld,
            'second' => $second
        ]);
    }
}
