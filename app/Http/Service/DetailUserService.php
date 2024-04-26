<?php
namespace App\Http\Service;
use App\Models\UserModel;

class DetailUserService
{
  public function getDetailUser($id)
  {
    $user = UserModel::select('name', 'email')->where('id', $id)->first();

    return $user;
  }
}