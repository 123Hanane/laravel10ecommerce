<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('index');
    }
    public function test_view(){
        return view('mail\contact_mail');
    }
}
