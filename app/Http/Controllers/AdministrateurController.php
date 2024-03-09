<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    public function all_administrateurs()
    {
        $admins = Administrateur::orderBy('id', 'DESC')->get();
        return response()->json([
            'admins' => $admins
        ], 200);
    }

    public function adminsByAutoEcole($autoecoleId)
    {
        $admins = Administrateur::where('autoecole_id', $autoecoleId)->orderBy('id', 'DESC')->get();

        return response()->json([
            'admins' => $admins
        ], 200);
    }

    public function create_administrateur(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'login' => 'required|unique:administrateurs',
            'password' => 'required',
            'email' => 'required|email',
            'autoecole_id' => 'required|exists:autoecoles,id',
        ]);

        $admin = Administrateur::create($request->all());

        return response()->json([
            'admin' => $admin,
            'message' => 'Administrator created successfully.',
        ], 201);
    }

    public function update_administrateur(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'login' => 'required|unique:administrateurs,login,' . $id,
            'password' => 'required',
            'email' => 'required|email',
            'autoecole_id' => 'required|exists:autoecoles,id',
        ]);

        $admin = Administrateur::find($id);

        if (!$admin) {
            return response()->json(['message' => 'Administrator not found.'], 404);
        }

        $admin->update($request->all());

        return response()->json([
            'admin' => $admin,
            'message' => 'Administrator updated successfully.',
        ], 200);
    }

    public function delete_administrateur($id)
    {
        $admin = Administrateur::find($id);

        if (!$admin) {
            return response()->json(['message' => 'Administrator not found.'], 404);
        }

        $admin->delete();

        return response()->json(['message' => 'Administrator deleted successfully.'], 200);
    }
}
