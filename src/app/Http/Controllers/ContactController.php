<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index() {
        return view('contacts.index');
    }
    public function confirm(ContactRequest $request) {
        $contact = $request->only(['first_name','last_name','gender','email','tell','address','building','inquiry','detail']);
        return view('contacts.confirm', compact('contact'));
    }
    public function store(ContactRequest $request) {
        $contact = $request->only(['first_name','last_name','gender','email','tell','address','building','inquiry','detail']);
        Contact::create($contact);
        return view('contacts.thanks');
    }
}