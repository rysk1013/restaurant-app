<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm()
    {
        return view('contact.confirm');
    }

    public function done()
    {
        return view('contact.done');
    }
}
