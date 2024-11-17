<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Utils\WebResponseUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        try {
            DB::beginTransaction();
            // Validate input data
            $validated = $request->validate([
                'date' => 'required|date',
                'time' => 'required|string',
                'total_payment' => 'required|numeric',
            ]);

            // Save data to the 'orders' table
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'order_date' => $validated['date'],
                'order_time' => $validated['time'],
                'total_price' => $validated['total_payment'],
                'status' => 'on process', // Default status
                'barbershop_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($request['services'] as $service) {
                DB::table('order_details')->insert([
                    'order_id' => $order->id,
                    'service_id' => $service,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            return WebResponseUtils::base($order, 'Order created successfully', 201);
        } catch (Exception $exception) {
            DB::rollBack();
            return WebResponseUtils::base(null, $exception->getMessage(), 500);
        }
    }
}
