<?php

namespace App\Http\Controllers;
use App\Models\Group;


use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function store(Request $request)
    {
        Group::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return back();
    }

    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $group->update(
            [
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/groups');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect('/groups');
    }
}
