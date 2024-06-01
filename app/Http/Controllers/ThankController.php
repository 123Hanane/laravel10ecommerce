<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThankController extends Controller
{
    /**
     * Show the thank you page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('thank'); // Assurez-vous que la vue thank existe
    }
}
