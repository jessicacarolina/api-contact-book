<?php

namespace App\Service;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactService
{
    public function create($request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'surname' => 'min:3',
            'email' => 'email|unique:contacts',
            'phone' => 'required|min:8|max:11',
        ]);
        if ($validator->fails()) return response()->json(['error' => 'Invalid data'], 400);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->user_id = auth()->user()->id;
        $contact->save();
        return response()->json(['Contact' => $contact, 'message' => 'Contact created successfully!'], 200);
    }

    public function update($request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'min:3',
            'surname' => 'min:3',
            'email' => 'email|unique:contacts',
            'phone' => 'min:8|max:11',
        ]);
        if ($validator->fails()) return response()->json(['error' => 'Invalid data'], 400);
        $contact = Contact::where('id', $id)->where('user_id', auth()->user()->id)->first();
        if(!$contact) return response()->json(['error' => 'Contact not found!'], 404);
        $contact->fill($request->only(['name', 'surname', 'email', 'phone']));
        $contact->save();
        return response()->json(['Contact' => $contact, 'message' => 'Contact updated successfully!'], 200);
    }

    public function destroy($id) {
        $contact = Contact::where('id', $id)->where('user_id', auth()->user()->id)->first();
        if(!$contact) return response()->json(['error' => 'Contact not found!'], 404);
        $contact->delete();
        return response()->json(['message' => 'Contact deleted successfully!'], 200);
    }
}
