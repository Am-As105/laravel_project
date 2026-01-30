<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Group;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //  public function contact()

    //  {
    //     return view('contacts.index');
    //  }
    public function index()
    {
        $groups = Group::all();
        $contacts = Contact::with('group')->get();

        return view('contacts.index', compact('groups', 'contacts'));
    }

    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'group_id' => $request->group_id,
        ]);

        return back()->with('success', 'Contact ajouté');
    }

    public function destroy( Contact $contact)
    {
        $contact->delete();
        return back();
    }
}
