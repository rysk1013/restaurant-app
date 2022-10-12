<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Constants\ContactConstant;
use App\Http\Requests\contact\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index')
            ->with('pref', ContactConstant::PREF);
    }

    public function confirm(ContactRequest $request)
    {
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

        return view('contact.done');
    }
}
