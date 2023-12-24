<x-homepage-layout title="Menu">
    <section class="gap">
        <div class="container">
            <div class="row">
                @foreach ($category->menus as $menu)
                    <div class="col-xl-4 col-md-6">
                        <div class="featured-dishes">
                            <div class="featured-dishes-img">
                                <img alt="featured-dishes" src="{{ asset($menu->photo) }}">
                            </div>
                            <ul class="star">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <a href="{{route('menu.detail', $menu)}}"><h5>{{ $menu->name }}</h5></a>
                            <p><span>{{$menu->formattedPrice}}</span></p>
                            <a href="{{route('menu.detail', $menu)}}">
                                <i>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path>
                                        </g>
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <ul class="pagination m-auto mt-5">
                <li class="prev"><a href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">18</a></li>
                <li class="next"><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
            </ul>
        </div>
    </section>
</x-homepage-layout>