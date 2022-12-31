<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $active = 'about';
        return view('about', compact('active'));
    }
}