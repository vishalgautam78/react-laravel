<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class APIController extends Controller
{
    public function getUser()
    {
      $getUsers = User::get();
      // return $getUsers;
      return response()->json([
        'users' => $getUsers,
        'status' => 200
      ]);
    }
}
