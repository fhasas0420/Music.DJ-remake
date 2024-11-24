<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function store(Request $request)
    {
        $validatedData  = $request->validate([
            'room_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'accessLevel' => 'required|string',
            'password' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);


        $roomData = [
            'room_name' => $validatedData['room_name'],
            'access_level' => $validatedData['accessLevel'],
            'description' => $validatedData['description'],
            'user_id' => auth()->id(),
            //'icon' => $iconPath,
            //'thumbnail' => $thumbnailPath,
        ];

        Room::create($roomData);

        return response()->json([
            'message' => 'Room created successfully!',
            'room' => $roomData
        ]);
    }
}
