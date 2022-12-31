<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $active = 'contact';
        return view('contactus', compact('active'));
    }
}