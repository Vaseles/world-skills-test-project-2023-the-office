<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // show main page
    public function index($id) {
        if (User::find($id)) {
            return view('index', [
                'user' => User::find($id)
            ]);
        } else {
            return response('login', [
                'message' => 'Login failed!'
            ]);
        }
    }
}
