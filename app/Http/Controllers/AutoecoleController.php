<?php

namespace App\Http\Controllers;

use App\Models\autoecole;
use Illuminate\Http\Request;

class AutoecoleController extends Controller
{
    public function all_auto_ecoles()
    {
        $autoecoles = autoecole::orderBy('id', 'DESC')->get();
        return response()->json([
            'autoecoles' => $autoecoles
        ], 200);
    }

    public function create_auto_ecole(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'description' => 'required',
        ]);

        $autoecole = autoecole::create($request->all());

        return response()->json([
            'autoecole' => $autoecole,
            'message' => 'Autoecole created successfully.',
        ], 201);
    }

    public function update_auto_ecole(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'description' => 'required',
        ]);

        $autoecole = autoecole::find($id);

        if (!$autoecole) {
            return response()->json(['message' => 'Autoecole not found.'], 404);
        }

        $autoecole->update($request->all());

        return response()->json([
            'autoecole' => $autoecole,
            'message' => 'Autoecole updated successfully.',
        ], 200);
    }

    public function delete_auto_ecole($id)
    {
        $autoecole = autoecole::find($id);

        if (!$autoecole) {
            return response()->json(['message' => 'Autoecole not found.'], 404);
        }

        $autoecole->delete();

        return response()->json(['message' => 'Autoecole deleted successfully.'], 200);
    }
    public function find_ecole($id)
    {
        $autoecole = autoecole::find($id); 
    
        if (!$autoecole) {
            return response()->json(['message' => 'Admin not found.'], 404);
        }
    
        return response()->json([
            'autoecole' => $autoecole
        ], 200);
    }
}
