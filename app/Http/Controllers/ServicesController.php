<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $active = 'services';
        return view('services', compact('active'));
    }
}