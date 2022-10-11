<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Constants\ContactConstants;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index')
            ->with('pref', ContactConstants::PREF);
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
