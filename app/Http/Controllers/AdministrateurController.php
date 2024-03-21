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
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'login' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email',
            'autoecole_id' =>'required'
        ]);
    
        $existingUser = Administrateur::where('email', $data['email'])
            ->orWhere('login', $data['login'])
            ->first();
    
        if ($existingUser) {
            return response()->json(['message' => 'User already exists'], 422);
        }
    
        $data['token'] = $this->generateToken();
        $data['password'] = bcrypt($data['password']);
    
        $sadmin = Administrateur::create($data);
    
        return response()->json(['message' => 'Signup successful', 'sadmin' => $sadmin], 201);
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
    private function generateToken()
    {
        return bin2hex(random_bytes(32));
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
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
    
        $sadmin = Administrateur::where('email', $data['email'])->first();
    
        if (!$sadmin || !password_verify($data['password'], $sadmin->password)) {
            return response()->json(['error' => 'Invalid login credentials'], 401);
        }
    
        $sadmin->update(['token' => $this->generateToken()]);
    
        return response()->json(['message' => 'Sadmin logged in successfully', 'admin'=> $sadmin ,'token' => $sadmin->token]);
    }
    public function find_admin($id)
    {
        $admin = Administrateur::with('autoecole')->find($id); 
    
        if (!$admin) {
            return response()->json(['message' => 'Admin not found.'], 404);
        }
    
        return response()->json([
            'admin' => $admin
        ], 200);
    }
    
}
