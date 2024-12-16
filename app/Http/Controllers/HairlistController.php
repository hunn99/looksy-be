<?php

namespace App\Http\Controllers;

use App\Models\Hairlist;
use App\Models\HairStyle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HairlistController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'hairstyle_id' => 'required',           // Assuming you have a "users" table
        ]);

        // Create a new Hairlist entry
        $hairlist = Hairlist::create([
            'hairstyle_id' => $request->hairstyle_id,
            'user_id' => Auth::user()->id,
        ]);

        $hairlist->save();

        $response = HairStyle::find($request->hairstyle_id);
        $response->photo = env('APP_URL') . $response->photo;

        // Return a response (you can return a success message or the created model)
        return response()->json([
            'message' => 'Hairstyle saved successfully!',
            'data' => [
                'id' => $response->id,
                'hair_style' => $response->hairstyle,
                'face_shape' => $response->face_shape,
                'photo' =>  $response->photo,
                'characteristics' => $response->characteristics,
                'face_suitability' => $response->faceSuitability,
                'maintenance' => $response->maintenance,
                'impression' => $response->impression,
            ],
        ], 201);
    }

    public function getListSaved()
    {
        $userId = Auth::user()->id; // Get the current authenticated user's ID
        $hairlist = Hairlist::where('user_id', $userId)
            ->orderBy('id', 'desc')
            ->with('hairstyle')  // To include related hairstyle information
            ->get();

        // Prepare an array to hold the hairstyle names
        $hairstyles = $hairlist->map(function ($item) {
            return [
                'id' => $item->hairstyle->id,
                'hair_style' => $item->hairstyle->hairstyle,
                'face_shape' => $item->hairstyle->face_shape,
                'photo' =>  env('APP_URL') . $item->hairstyle->photo,
                'characteristics' => $item->hairstyle->characteristics,
                'face_suitability' => $item->hairstyle->faceSuitability,
                'maintenance' => $item->hairstyle->maintenance,
                'impression' => $item->hairstyle->impression,
            ];
        });

        // Return the response with the list of saved hairstyles
        return response()->json([
            'message' => 'Get hairstyle successfully!',
            'data' => $hairstyles,
        ], 200);
    }
}
