<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->contact = $request->contact;
        $contact->message = $request->message;
        $contact->save();
        return back();
    }


    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return back();
    }
}
