<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home() {
        return view('welcome');
    }

    public function one() {
        return view('php-basic-one');
    }

    public function two() {
        return view('php-basic-two');
    }

    public function laravelBasic() {
        return view('laravel-basic');
    }
}
