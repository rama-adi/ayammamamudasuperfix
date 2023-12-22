<x-homepage-layout title="Checkout">
    <section class="gap">
        <div class="container">
            <div class="row">
                @foreach ($orders as $order)
                    <div class="col-xl-4 col-md-6">
                        <div class="featured-dishes">
                            <div class="featured-dishes-img">
                                <img alt="featured-dishes" src="{{ asset($order->menu->photo) }}">
                            </div>
                            <a href="#"><h5>{{ $order->menu->name }}</h5></a>
                            <p><span>{{$order->quantity}}x {{$order->menu->formatted_price}}</span></p>
                        </div>
                    </div>
                @endforeach
            </div>

            <form enctype="multipart/form-data" action="{{route('checkout.submit')}}" method="POST">
                <div class="woocommerce-additional-fields">
                    <p><label for="photo">Bukti Pembayaran</label></p>
                    <input type="file" id="photo" accept="image/*" name="photo" placeholder="Bukti pembayaran">
                </div>
                <div class="woocommerce-additional-fields">
                    <textarea name="order_comments" class="input-text "
                              placeholder="Informasi tambahan (misal: Alamat, dll)"></textarea>
                </div>


                @csrf

               <div style="margin-top: 30px">
                   <button style="z-index: 0" type="submit" class="button">Check out</button>
               </div>
            </form>

        </div>
    </section>


</x-homepage-layout>