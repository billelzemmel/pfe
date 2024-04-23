<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Candidats;
use App\Models\User;
use App\Models\Moniteur;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreated;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function all_users()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return response()->json([
            'users' => $users
        ], 200);
    }

    public function createUser(Request $request)
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
                'type' => 'required|in:moniteur,condidat',
                'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();

            $user = User::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'prenom' => $request->prenom,
                'type' => $request->type,
                'login' => $request->login,
                'image_url' => $uploadedFileUrl,
                'password' => Hash::make($request->password)
            ]);
            $token = $user->createToken("API TOKEN")->plainTextToken;

            $user->api_token = $token;
            $user->save();

            if ($request->input('type') === 'moniteur') {
                Moniteur::create([
                    'role' => 'moniteur',
                    'user_id' => $user->id,
                ]);
            }
            if ($request->input('type') === 'condidat') {
                Candidats::create([
                    'role' => 'condidat',
                    'user_id' => $user->id,
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'user' => $user,

                'token' => $user->api_token
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }



   /*  public function create_user(UserRequest $request)
    {
       try {


           $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
           // $request['api_token'] = $user->createToken("API TOKEN")->plainTextToken
           $user = User::create(array_merge(
               $request->except('image'),
               [
                   'image_url' => $uploadedFileUrl,
                   'api_token' => $user->createToken("API TOKEN")->plainTextToken
               ]

           ));


           return response()->json([
               'user' => $user,
               'message' => 'User created successfully. Email sent.',
           ], 201);
       } catch (\Exception $e) {
           Log::error('Error creating user and sending email: ' . $e->getMessage());

           return response()->json([
               'error' => 'An error occurred while creating the user and sending the email.',
               'details' => $e->getMessage(),
           ], 500);
       }
    } */


    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function loginUser(Request $request)
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

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid email or password.'
            ], 401);
        }

        $token = $user->createToken('API Token')->plainTextToken;

        $user->api_token = $token;
        $user->save();

        $relatedModel = Moniteur::class;
        $ids = null;
        $role = "";
        if ($relatedModel::where('user_id', $user->id)->exists()) {
            $ids = $relatedModel::where('user_id', $user->id)->first()->id;
            $role = "moniteur";
        } else {
            $relatedModel = Candidats::class;
            if ($relatedModel::where('user_id', $user->id)->exists()) {
                $ids = $relatedModel::where('user_id', $user->id)->first()->id;
                $role = "candidat";
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'User Logged In Successfully',
            'token' => $token,
            'user' => $user,
            'role' => $role,
            'typeid' => $ids
        ], 200);
    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage()
        ], 500);
    }
}

    /*  public function all_users()
{
    $users = User::orderBy('id', 'DESC')->get();

    $formattedUsers = $users->map(function ($user) {
        return [
            'ServerId'  => $user->id,
            'FirstName' => $user->prenom, 
            'LastName'  => $user->nom,    
            'Email'     => $user->email,
            'login'     => $user->login,            
            'image'     => $user->image_url,            
        ];
    });

    $jsonResponse = json_encode($formattedUsers, JSON_PRETTY_PRINT);

    $filePath = storage_path('app/users_response.txt');

    file_put_contents($filePath, $jsonResponse);

    return response()->json($formattedUsers, 200);
} */


    
    private function generateToken()
    {
        return bin2hex(random_bytes(32));
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

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $data['email'])->first();
        $relatedModel = Moniteur::class;
        $ids = null;
        $role = "";
        if ($relatedModel::where('user_id', $user->id)->exists()) {
            $ids = $relatedModel::where('user_id', $user->id)->first()->id;
            $role = "moniteur";
        } else {
            $relatedModel = Candidats::class;
            if ($relatedModel::where('user_id', $user->id)->exists()) {
                $ids = $relatedModel::where('user_id', $user->id)->first()->id;
                $role = "candidat";
            }
        }

        if (!$user || !password_verify($data['password'], $user->password)) {
            return response()->json(['error' => 'Invalid login credentials'], 401);
        }

        $user->update(['api_token' => $this->generateToken()]);

        return response()->json([
            'message' => 'User logged in successfully', 'user' => $user,
            'token' => $user->api_token, 'typeid' => $ids, 'role' => $role
        ]);
    }
    public function get_user($id)
    {
        // dd('ok');

        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        $relatedModel = Moniteur::class;
        if ($relatedModel::where('user_id', $user->id)->exists()) {
            $role = 'moniteur';
        } else {
            $relatedModel = Candidats::class;
            if ($relatedModel::where('user_id', $user->id)->exists()) {
                $role = 'candidat';
            }
        }

        return response()->json([
            'user' => [
                'id' => $user->id,
                'nom' => $user->nom,
                'prenom' => $user->prenom,
                'login' => $user->login,
                'email' => $user->email,
                'type' => $role ?? null,
                'image_url' => $user->image_url,
            ]
        ], 200);
    }
}
