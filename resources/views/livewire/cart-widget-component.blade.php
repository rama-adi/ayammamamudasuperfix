<div class="hamburger-icon">
    {{--
        Injeksi variabel cartCount ke CSS
    --}}
    <style>
        .donation::before {
            content: '{{$cartCount}}';
        }
    </style>
    <div class="donation">
        <a href="JavaScript:void(0)" class="pr-cart">
            <svg id="Shoping-bags" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                 xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path>
                </g>
            </svg>
        </a>

        <div class="cart-popup">

            @if(empty($orders))
                <p>Belum memesan apapun</p>
            @else
                <ul>
                    @foreach($orders as $order)
                        <li class="d-flex align-items-center position-relative">

                            <div class="p-img light-bg">

                                <img src="{{asset($order->menu->photo)}}" alt="Product Image">

                            </div>

                            <div class="p-data">

                                <h3 class="font-semi-bold">
                                    {{$order->menu->name}}
                                </h3>

                                <p class="theme-clr font-semi-bold">
                                    {{$order->quantity}} x {{$order->menu->formatted_price}}
                                </p>

                            </div>

                            <a href="JavaScript:void(0)" id="cross"></a>

                        </li>
                    @endforeach

                </ul>

                <div class="cart-total d-flex align-items-center justify-content-between">
                    <span class="font-semi-bold">Total:</span>
                    <span class="font-semi-bold">{{$total}}</span>
                </div>

                <div class="cart-btns d-flex align-items-center justify-content-between">

                    <a wire:click.prevent="cancelOrder" class="font-bold" href="#">Cancel</a>

                    <a class="font-bold theme-bg-clr text-white checkout" href="{{route('checkout')}}">Checkout</a>

                </div>
            @endif

        </div>
    </div>
</div>