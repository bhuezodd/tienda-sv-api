<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //
    public function getUsers(){
        $users = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($users);
    }

    
}
