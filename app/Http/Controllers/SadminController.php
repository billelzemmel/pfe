<?php
namespace App\Http\Controllers;

use App\Models\Sadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Str;

class SadminController extends Controller
{
    public function signup(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'login' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email',
        ]);
    
        $existingUser = Sadmin::where('email', $data['email'])
            ->orWhere('login', $data['login'])
            ->first();
    
        if ($existingUser) {
            return response()->json(['message' => 'User already exists'], 422);
        }
    
        $data['token'] = $this->generateToken();
        $data['password'] = bcrypt($data['password']);
    
        $sadmin = Sadmin::create($data);
    
        return response()->json(['message' => 'Signup successful', 'sadmin' => $sadmin], 201);
    }
    
    private function generateToken()
    {
        return bin2hex(random_bytes(32));
    }
    public function login(Request $request)
{
    $data = $request->validate([
        'email' => 'required',
        'password' => 'required|min:8',
    ]);

    $sadmin = Sadmin::where('email', $data['email'])->first();

    if (!$sadmin || !password_verify($data['password'], $sadmin->password)) {
        return response()->json(['error' => 'Invalid login credentials'], 401);
    }

    $sadmin->update(['token' => $this->generateToken()]);

    return response()->json(['message' => 'Sadmin logged in successfully', 'token' => $sadmin->token]);
}

}