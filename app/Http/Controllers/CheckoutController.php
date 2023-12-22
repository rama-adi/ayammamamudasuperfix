<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function show(Request $request)
    {
        $order = Order::whereUserId(auth()->id())
            ->whereStatus('unpaid')
            ->get();


        if ($order->isEmpty()) {
            return redirect()->route('homepage');
        }

        $order = $order->first();

        return view('checkout', [
            'orders' => $order->menuOrders,
        ]);
    }

    public function submit(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image',
        ]);

        $order = Order::whereUserId(auth()->id())
            ->whereStatus('unpaid')
            ->first();

        // Simpan foto bukti pembayaran

        $image = $request->file('photo')->storePublicly('public/payment-proof');

        //remove /public
        $image = substr($image, 7);

        $order->payment()->update([
            'image' => $image,
            'status' => 'unverified',
            'notes' => $request->input('order_comments', ''),
        ]);

        $order->update([
            'status' => 'pending',
        ]);

        return redirect()->route('homepage');
    }
}
