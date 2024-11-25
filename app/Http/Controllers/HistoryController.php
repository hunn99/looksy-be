<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function getHistory()
    {
        try {
            $user = Auth::user();

            $orders = Order::with(['orderDetails.service'])
                ->where('user_id', $user->id)
                ->get()
                ->map(function ($order) {
                    return [
                        'id' => $order->id,
                        'services' => $order->orderDetails->map(fn ($detail) => $detail->service->name)->join(', '),
                        'date' => $order->order_date,
                        'time' => $order->order_time,
                        'price' => 'Rp. ' . number_format($order->total_price, 0, ',', '.'),
                        'status' => ucfirst($order->status),
                        'cancelable' => $order->status === 'on process',
                    ];
                });

            if ($orders->isEmpty()) {
                return response()->json(['message' => 'No orders found', 'data' => []], 200);
            }

            return response()->json(['message' => 'Orders retrieved successfully', 'data' => $orders], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function cancelOrder(Request $request, $orderId)
    {
        try {
            $user = Auth::user();

            // Cari pesanan berdasarkan ID dan user ID
            $order = Order::where('id', $orderId)->where('user_id', $user->id)->first();

            if (!$order) {
                return response()->json(['message' => 'Order not found'], 404);
            }

            if ($order->status !== 'on process') {
                return response()->json(['message' => 'Order cannot be canceled'], 400);
            }

            // Perbarui status menjadi 'canceled'
            $order->status = 'canceled';
            $order->save();

            return response()->json(['message' => 'Order canceled successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

}
