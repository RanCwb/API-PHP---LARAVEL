<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\UserService;
use App\Models\UserModel;

class UserController extends Controller
{


 public function handleRegister(Request $request, UserService $userService)
{   
    
    $userData = $request->only(["email","password","name"]);

        if (UserModel::where('email', $userData['email'])->exists() || UserModel::where('name', $userData['name'])->exists()) {

            return response()->json([
                'message' => 'Email or name already exists.',
                'status' => 'error'
            ], 400);
        }
        
    try {
        $response = $userService->registerUser($userData);

        if (isset($response['error'])) {
            return response()->json([
                'message' => $response['error'],
                'status' => 'error'
            ], 400);
        }

        return response()->json([
            'message' => 'User created successfully.',
            'status' => 'success',
            'data' => $response
        ], 201);
        
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Something went wrong. '.$e->getMessage(),
            'status' => 'error'
        ], 400);
    }
}


}