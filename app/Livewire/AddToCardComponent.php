<?php

namespace App\Livewire;

use App\Models\Menu;
use App\Models\Order;
use App\Models\Payment;
use Livewire\Component;

class AddToCardComponent extends Component
{
    public Menu $menu;
    public $quantity = 1;

    public function render()
    {
        return view('livewire.add-to-card-component');
    }

    public function addToCart(): void
    {
        // Ambil order yang statusnya unpaid
        $previousCart = Order::whereUserId(auth()->id())
            ->whereStatus('unpaid')
            ->first();

        // Jika ada order yang statusnya unpaid
        if ($previousCart) {

            // Cek apakah menu sudah ada di order
            $menuOrder = $previousCart->menuOrders()
                ->whereMenuId($this->menu->id)
                ->first();

            // Jika sudah ada, maka tambahkan quantity
            if ($menuOrder) {
                $menuOrder->increment('quantity', $this->quantity);
            } else {

                // Jika belum ada, maka tambahkan menu ke order
                $previousCart->menuOrders()->create([
                    'menu_id' => $this->menu->id,
                    'quantity' => $this->quantity,
                ]);
            }

            $total = 0;

            foreach ($previousCart->menuOrders as $menuOrder) {
                $total += $menuOrder->menu->price * $menuOrder->quantity;
            }

            $previousCart->payment()->update([
                'amount' => $total,
                'status' => 'not_added',
            ]);

        } else {

            // Jika tidak ada order yang statusnya unpaid
            // Maka buat order baru
            $order = Order::create([
                'user_id' => auth()->id(),
                'status' => 'unpaid',
            ]);

            // Buat payment untuk order
            $order->payment()->create([
                'amount' => $this->menu->price * $this->quantity,
                'status' => 'not_added',
            ]);

            // Tambahkan menu ke order
            $order->menuOrders()->create([
                'menu_id' => $this->menu->id,
                'quantity' => $this->quantity,
            ]);
        }

        $this->js('alert("Berhasil ditambahkan ke keranjang")');

        // refresh cart widget
        $this->dispatch('refreshCartWidget');
    }
}
