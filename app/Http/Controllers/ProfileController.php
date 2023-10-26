<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function password_change(Request $request,User $item){

        // $request()->validate([
        //     'password' => ['required', 'confirmed', 'min:8'],
        //     'password_confirmation' => ['required'],
        // ]);

        $utilisateur = User::find($item->id);
        $utilisateur->password = bcrypt(request('password'));
        $utilisateur->save();

        auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);
        // flash("Votre mot de passe a bien été mis à jour.")->success();

        return redirect()->back();

    }

}
