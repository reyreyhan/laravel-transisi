<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function one() {
        return view('php-basic-one');
    }

    public function two() {
        return view('php-basic-two');
    }
}
