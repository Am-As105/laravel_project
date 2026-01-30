<?php

namespace App\Http\Controllers;
use App\Models\Group;


use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function page()
    {
         return view('groups.index');
    }

    public function create(Request $request)

    {
        Group::create([
            'name' => $request->name,
            'description' =>$request->description,
        ]);
         
        return back();

        
    }
    public function read()
     {
       $groups = Group::all();
        return view('groups.index', compact('groups'));
     }
}
