<x-homepage-layout>
    <section class="gap featured-dishes-product-detail-img">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="featured-dishes product-detail-img">
                        <div class="sale">
                            <h6>Sale</h6>
                        </div>
                        <div class="featured-dishes-img">
                            <img alt="featured-dishes" src="{{asset($menu->photo)}}">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="available">
                       <span>
                          <i class="fa-solid fa-check"></i>
                          available
                       </span>
                        <ul class="star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="product-info ">
                        <h3>
                            {{$menu->name}}
                        </h3>
                        <div class="variations_form">
                            <div class="deal-week mb-4 d-flex align-items-center">
                                <h2 class="m-0">
                                    {{$menu->formatted_price}}
                                </h2>
                            </div>
                            <h5>Deskripsi</h5>
                            <p>{{$menu->description}}</p>
                            @auth
                                <livewire:add-to-card-component :menu="$menu" />
                            @elseauth
                                <a href="{{route('login')}}" class="button">Login to Order</a>
                            @endauth
                            <ul class="product_meta">
                                <li><span class="theme-bg-clr">Category:</span>
                                    <ul class="pd-tag">
                                        <li>
                                            <a href="{{route('menu.show', $menu->category)}}" class="ps-0">
                                                {{$menu->category->name}}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-homepage-layout>