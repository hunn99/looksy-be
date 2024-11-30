<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HairTips; // Pastikan model HairTip sudah dibuat
use App\Utils\WebResponseUtils; // Gunakan utilitas untuk response standar
use Exception;

class TipsController extends Controller
{
    /**
     * Get all hair tips.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getHairTips()
    {
        try {
            // Ambil data dari tabel hair_tips
            $hairTips = HairTips::select('hair_type', 'characteristic_hair', 'description', 'photo')->get();

            // Jika tidak ada data, kembalikan pesan bahwa data kosong
            if ($hairTips->isEmpty()) {
                return WebResponseUtils::base([], 'No hair tips found', 200);
            }

            // Kembalikan data dalam response
            return WebResponseUtils::base($hairTips, 'Hair tips retrieved successfully', 200);
        } catch (Exception $exception) {
            // Jika ada error, log error dan kembalikan pesan gagal
            return WebResponseUtils::base(null, 'Failed to retrieve hair tips', 500);
        }
    }
}
