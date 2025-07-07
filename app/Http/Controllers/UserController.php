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
}
