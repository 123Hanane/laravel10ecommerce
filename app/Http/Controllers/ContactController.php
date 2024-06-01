<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // public function index()
    // {
    //     return view('contact');
    // }
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'comment' => 'required|string',
        ]);

        Contact::create([
            'first_name' => $request-> first_name,
            'last_name' => $request-> last_name,
            'email' => $request-> email,
            'phone' => $request-> phone,
            'comment' => $request-> comment,

        ]);

        return redirect()->route('thank.index')->with('success', 'Your message has been sent successfully!');
        
    }
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.show', compact('contact'));
    }
}
