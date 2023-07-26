<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Models\Message;
use App\Models\Place;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function all_messages($place_id) {
        $messages = Message::where('place_id', $place_id)->get();
        
        if ($messages->count() > 0) {
            return response(MessageResource::collection($messages));
        } else {
            return response()->json([]);
        }
    }
    public function create_message(Request $request,$place_id) {
        $place = Place::find($place_id);

        if ($place) {
            $message = Message::create([
                'user_id' => $request->user_id,
                'place_id' => $place_id,
                'message' => $request->message,
            ]);

            return response([
                'status' => 'success',
                'message' => $message
            ]);
        }

    }
}
