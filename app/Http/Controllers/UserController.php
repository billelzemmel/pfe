<?php

namespace App\Http\Controllers;

use App\Models\Candidats;
use App\Models\User;
use App\Models\Moniteur;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreated;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function all_users()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return response()->json([
            'users' => $users
        ], 200);
    }

    public function create_user(Request $request)
    {
        try {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'login' => 'required|unique:users',
                'password' => 'required',
                'email' => 'required|email',
                'type' => 'required|in:moniteur,condidat',
                'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation rules as needed
            ]);
    
            $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    
            $user = User::create(array_merge(
                $request->except('image'),
                ['image_url' => $uploadedFileUrl]
            ));
    
    
            if ($request->input('type') === 'moniteur') {
                Moniteur::create([
                    'role' => 'moniteur',
                    'user_id' => $user->id,
                ]);
            }  
            if ($request->input('type') === 'condidat'){
                Candidats::create([
                    'role' => 'condidat',
                    'user_id' => $user->id,
                ]);
            } 
    
            return response()->json([
                'user' => $uploadedFileUrl,
                'message' => 'User created successfully. Email sent.',
            ], 201);
        } 
        
        catch (\Exception $e) {
            Log::error('Error creating user and sending email: ' . $e->getMessage());
        
            return response()->json([
                'error' => 'An error occurred while creating the user and sending the email.',
                'details' => $e->getMessage(),
            ], 500);
        }
        
    }
    public function update_user(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'login' => 'required|unique:users,login,' . $id,
            'password' => 'required',
            'email' => 'required|email',
            'type' => 'required|in:moniteur,candidat',
        ]);

        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }

        $user->update($request->all());

        $relatedModel = $request->input('type') === 'moniteur' ? Moniteur::class : Candidats::class;
        $relatedRecord = $relatedModel::where('user_id', $user->id)->first();

        if ($relatedRecord) {
            $relatedRecord->update([
                'role' => $request->input('type'),
                'user_id' => $user->id,
            ]);
        }

        return response()->json([
            'user' => $user,
            'message' => 'User updated successfully.',
        ], 200);
    }

    public function delete_user($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }

        
        $relatedModel = Moniteur::class;
        if ($relatedModel::where('user_id', $user->id)->exists()) {
            $relatedModel::where('user_id', $user->id)->delete();
        } else {
           
            $relatedModel = Candidats::class;
            if ($relatedModel::where('user_id', $user->id)->exists()) {
                $relatedModel::where('user_id', $user->id)->delete();
            }
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully.'], 200);
    }
}
