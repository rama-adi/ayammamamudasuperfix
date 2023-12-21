<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class CartWidgetComponent extends Component
{

    public $cartCount = 0;
    public $orders;
    public $total;


    // Fungsi ini akan dijalankan ketika event refreshCartWidget dipanggil
    // (Biasanya dipanggil dari add to cart component)
    #[On('refreshCartWidget')]
    public function updateOrders()
    {
        $order = Order::where('user_id', auth()->id())
            ->where('status', 'unpaid')
            ->first();

        if ($order) {
            $this->total = $order->payment->formatted_amount;
            $this->orders = $order->menuOrders()->with('menu')->get();
            $this->cartCount = $order->menuOrders->count();
        }
    }

    public function cancelOrder()
    {
        $order = Order::where('user_id', auth()->id())
            ->where('status', 'unpaid')
            ->first();

        if ($order) {

            // Hapus semua menu order
            $order->delete();

            $this->cartCount = 0;
            $this->total = 0;
            $this->orders = null;
        }
    }

    public function mount()
    {
        // Load data ketika component pertama kali dibuat
        $this->updateOrders();
    }

    public function render()
    {
        return view('livewire.cart-widget-component');
    }
}
