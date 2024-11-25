<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Utils\WebResponseUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;


class ServiceController extends Controller
{
    public function getServices(Request $request)
    {
        try {
            $services = Service::select('id', 'name', 'price')->get(); // Ambil semua data dari tabel services
            
            if ($services->isEmpty()) {
                return WebResponseUtils::base([], 'No services found', 200);
            }
            
            return WebResponseUtils::base($services, 'Services retrieved successfully', 200);
        } catch (Exception $exception) {
            return WebResponseUtils::base(null, 'Failed to get services', 500);
        }
    }
}
