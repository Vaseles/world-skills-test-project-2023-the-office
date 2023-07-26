<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // show user info
    public function user($id) {
        // get user
        $user = User::find($id);

        // return information
        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'ava' => $user->ava,
            'place' => $user->place,
            'created_at' => $user->created_at
        ], 200);
    }
    // update avatar
    public function updateAvatar(Request $request, $id) {
        // get user
        $user = User::find($id);

        // check avatar
        if ($request->ava !== '') {
            $user->ava = $request->ava;
            $user->save();
            return response()->json([
                'status' => 'success',
            ], 200);
        }
    }

    // update place
    public function updatePlace(Request $request, $id) {
        // get user
        $user = User::find($id);

        // change place id
        $user->place_id = $request->place_id;
        $user->save();
        return response()->json([
            'status' => 'success',
        ], 200);
    }
}
