<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Service\DetailUserService;
use Illuminate\Http\Request;

class DetailUserController extends Controller
{
    public function handleGetUser( DetailUserService $detailUserService, $id)
    {
        try {
            $user = $detailUserService->getDetailUser($id);
            if (isset($user)) {
                return response()->json([
                    'message' => 'User retrieved successfully.',
                    'status' => 'success',
                    'data' => $user
                ], 200);
            } else {
                return response()->json([
                    'message' => 'User not found.',
                    'status' => 'error'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong. '.$e->getMessage(),
                'status' => 'error'
            ], 400);
        }

    }
}