<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // index page
    public function index(Request $request, $id) {
        $user = User::find($id);

        if ($user) {
            return view('index', [
                'user' => $user,
            ]);
        } else {
            return view('login', [
                'message' => ''
            ]);
        }
    }

    public function user(Request $request, $id) {
        $user = User::find($id);

        if ($user) {
            return response($user);
        }
    }

    // login page
    public function login(Request $request) {
        // just template
        return view('login', [
            'message' => ''
        ]);
    }

    // auth page
    public function auth(Request $request) {
        if ($request->name == '' or $request->avatar == '') {
            return view('login', [
                'message' => 'Choose avatar and write your name, please.'
            ]);
        }
        // create a new user
        $user = User::create([
            'name' => $request->name,
            'avatar' => $request->avatar,
            'place_id' => 1
        ]);
        return redirect('/'.$user->id);
    }

    // logout page
    public function logout(Request $request, $id) {
        // get user
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect('/');
        }
    }
}
