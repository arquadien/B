<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users= User::all();

        return view('admin.utilisateur',compact('users'));
    }

    public function delete(User $user)
    {
        $user->delete();
        return back();
    }
}
