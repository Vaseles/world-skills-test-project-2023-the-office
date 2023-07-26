<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // login
    public function login() {
        return view('login', [
            'message' => ''
        ]);
    }

    // auth
    public function auth(Request $request) {
        if ($request->ava !== '') {
            // create a new user
            $user = User::create([
                'name' => $request->name,
                'ava' => $request->ava,
                'place_id' => 1
            ]);

            // check if the user
            if ($user) {
                // redirect to the home page
                return redirect('/'.$user->id);
            }
        } else {
            return view('login', [
                'message' => 'You need to choose avatar'
            ]);
        }
    }

    // logout
    public function logout(Request $request, $id) {
        // get the user
        $user = User::find($id);

        // check if the user
        if ($user) {
            // delete the user
            $user->delete();
            // redirect to the sign-in page
            return redirect('/');
        }
    }
}
