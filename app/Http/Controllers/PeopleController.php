<?php

namespace App\Http\Controllers;

use App\Models\Person; 
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index()
    {
        $people = Person::all();
        return response()->json($people);
    }

    public function show($id)
    {
        $person = Person::find($id);
        return response()->json($person);
    }

    public function store(Request $request)
    {
        $person = Person::create($request->all());
        return response()->json($person, 201);
    }

    public function update(Request $request, $id)
    {
        $person = Person::find($id);
        $person->update($request->all());
        return response()->json($person, 200);
    }

    public function destroy($id)
    {
        Person::destroy($id);
        return response()->json(null, 204);
    }

    public function getAll()
    {
        $people = Person::all();
        return response()->json($people);
    }
}
