<?php

namespace App\Http\Controllers;

use App\Models\Types;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    //
    public function create_type(Request $request)
    {
        $request->validate([
            'type' => 'required|unique:types',
        ]);

        $type = Types::create($request->all());

        return response()->json([
            'type' => $type,
            'message' => 'Type created successfully.',
        ], 201);
    }
    public function all_types(){
        $types = Types::orderBy('id', 'DESC')->get();
        return response()->json([
            'types' => $types
        ], 200);
    }

}
