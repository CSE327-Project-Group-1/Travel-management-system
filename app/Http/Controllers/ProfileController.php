<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
 public function profile()
    {
       $profile = User::all();
       return view('profile', ['profile' => $profile]);
    }
}
