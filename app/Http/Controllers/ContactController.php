<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contacts', [
            "title" => "Contacts"
        ]);
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $contact = Contact::Create($request->all());
        $contact->save();

        return redirect('contacts');
    }
}
