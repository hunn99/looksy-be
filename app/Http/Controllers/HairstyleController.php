<?php

namespace App\Http\Controllers;

use App\Models\HairStyle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HairstyleController extends Controller
{
    public function hairstyleRecommendation(Request $request)
    {
        $credentials = $request->only('face_shape');

        // Validasi input
        $validateData = Validator::make($credentials, [
            'face_shape' => 'required|string',
        ]);

        if ($validateData->fails()) {
            return response()->json(['error' => 'Validation failed', 'messages' => $validateData->errors()], 422);
        }

        $hairstyles = HairStyle::where('face_shape', '=', $credentials['face_shape'])
            ->get()
            ->map(function ($hairstyles) {
                return [
                    'id' => $hairstyles->id,
                    'hair_style' => $hairstyles->hairstyle,
                    'face_shape' => $hairstyles->face_shape,
                    'photo' =>  env('APP_URL') . $hairstyles->photo,
                    'characteristics' => $hairstyles->characteristics,
                    'face_suitability' => $hairstyles->faceSuitability,
                    'maintenance' => $hairstyles->maintenance,
                    'impression' => $hairstyles->impression,
                ];
            });

        return response()->json(['message' => 'Recommendation retrieved successfully', 'data' => $hairstyles], 200);
    }
}
