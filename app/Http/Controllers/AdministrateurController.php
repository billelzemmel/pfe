<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        try {
            //Validated
            $validateUser = Validator::make($request->all(), 
            [
                'nom' => 'required',
                'prenom' => 'required',
                'login' => 'required|unique:users',
                'password' => 'required',
                'email' => 'required|email',
                'autoecole_id'=>''
                
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = Administrateur::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'prenom' => $request->prenom,
                'login' => $request->login,
                'password' => Hash::make($request->password),
                'autoecole_id' => $request->autoecole_id,

            ]);
            $token = $user->createToken("API TOKEN")->plainTextToken;

            $user->api_token = $token;
            $user->save();

        return response()->json(['message' => 'Signup successful', 'sadmin' => $user], 201);
    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage()
        ], 500);
    }
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
    public function login(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
    
            $user = Administrateur::where('email', $request->email)->first();
    
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid email or password.'
                ], 401);
            }
    
            $token = $user->createToken('API Token')->plainTextToken;
    
            $user->api_token = $token;
            $user->save();
    
        return response()->json(['message' => 'Sadmin logged in successfully', 'admin'=> $user ,'token' => $user->api_token]);
    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage()
        ], 500);
    }
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
