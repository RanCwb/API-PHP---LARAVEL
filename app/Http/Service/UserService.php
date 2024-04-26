<?php

namespace App\Http\Service;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function registerUser($user)
    {
        if (empty($user['name']) || empty($user['email']) || empty($user['password'])) {

            return ['error' => 'All fields are required.'];
        }

        $hashedPassword = Hash::make($user['password']);

        $newUser = UserModel::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => $hashedPassword,
        ]);

        if ($newUser) {
            return $newUser; // return the newly created user
        } else {
            return ['error' => 'Failed to create user.'];
        }
    }


    public function getDetailUser($id)
    {
        $user = UserModel::select('name', 'email')->where('id', $id)->firstOrFail();

        return $user;
    }
}
