<?php

namespace App\Repository;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactRepository
{
    public function show($id) {
        $contact = Contact::find($id);
        if(!$contact) return response()->json(['error' => 'Contact not found!'], 404);
        return response()->json(['Contact' => $contact], 200);
    }

    public function index($request) {
        $contacts = Contact::where('user_id', auth()->user()->id)->get();
        return response()->json(['Contacts' => $contacts], 200);
    }

}
