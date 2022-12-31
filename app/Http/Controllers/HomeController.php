<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $active = 'home';
        return view('index', compact('active'));
    }
}