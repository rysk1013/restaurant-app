<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Constants\ContactConstant;
use App\Http\Requests\contact\ContactRequest;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index')
            ->with('pref', ContactConstant::PREF);
    }

    public function confirm(ContactRequest $request)
    {
        $request->session()->regenerateToken();

        return view('contact.confirm')
            ->with([
                'pref' => ContactConstant::PREF,
                'posts' => $request,
            ]);
    }

    public function done(Request $request)
    {
        if (isset($request['modify'])) {
            return redirect()->route('contact.index')
                ->withInput();
        }

        Mail::send(new ContactMail($request));

        $request->session()->regenerateToken();

        return view('contact.done');
    }
}
