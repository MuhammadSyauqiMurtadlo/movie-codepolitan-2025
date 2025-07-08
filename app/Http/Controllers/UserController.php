<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function createProfile()
    {
        $user = User::find(1);

        $user->profile()->create([
            'phone' => '1234567890',
            'address' => '123 Main St, Anytown, USA',
        ]);

        return response()->json(['message' => 'Profile created successfully']);
    }

    public function userProfile()
    {
        $user = User::all();

        //? lazy loading (n+1 problem)
        // $profile = $user->profile;

        //? eager loading
        // return $user->load('profile');

        return $user;
    }

    public function updateProfile()
    {
        $user = User::find(1);

        $user->profile()->update([
            'phone' => '0987654321',
            'address' => '456 Elm St, Othertown, USA',
        ]);

        return response()->json(['message' => 'Profile updated successfully']);
    }

    public function deleteProfile()
    {
        $user = User::find(1);

        $user->profile()->delete();

        return response()->json(['message' => 'Profile deleted successfully']);
    }
}
