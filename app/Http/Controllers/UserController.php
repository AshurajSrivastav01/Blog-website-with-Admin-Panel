<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        try {
            //code...
            $users = new User();
            $users->firstname = $request->input('firstname');
            $users->lastname = $request->input('lastname');
            $users->username = $request->input('username');
            $users->email = $request->input('email');
            $users->password = $request->input('password');
            $users->bio = $request->input('bio');
            $users->profile_image = $request->input('profile_image');
            $users->role = $request->input('role');
            $users->website = $request->input('website');
            $users->status = $request->input('status');
            $users->save();

            return response()->json([
                'message' => 'User created successfully',
                'user' => $users
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => 'Error creating user',
                'error' => $th->getMessage()
            ], 500);
        }
    }
}
