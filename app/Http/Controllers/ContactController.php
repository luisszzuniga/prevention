<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{

    /**
     * Display the contact view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        return view('contact');
    }
}
