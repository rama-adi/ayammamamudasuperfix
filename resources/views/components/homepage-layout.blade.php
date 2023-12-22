@props([
    'title' => ''
    ])
        <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$title}} - Ayam Mama Muda</title>
    <link rel="icon" href="resources/img/logo-icon.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- fancybox -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- color -->
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/preloader.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    @livewireStyles
</head>

<body>

<header class="two bg-white srollable-header">
    <div class="bottom-bar ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="index.html">
                                <img alt="logo" src="{{ asset('img/logomamud-01.png') }}"
                                     style="width: 100px; height: 100px;">
                            </a>

                        </div>
                        <div class="d-flex cart-checkout">
                            <a href="cart-checkout.html">
                                <i>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path>
                                        </g>
                                    </svg>
                                </i>
                            </a>
                            <div class="bar-menu">

                                <i class="">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                           stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M20 7L4 7" stroke="#000000" stroke-width="1.5"
                                                  stroke-linecap="round"></path>
                                            <path opacity="0.5" d="M20 12L4 12" stroke="#000000" stroke-width="1.5"
                                                  stroke-linecap="round"></path>
                                            <path d="M20 17L4 17" stroke="#000000" stroke-width="1.5"
                                                  stroke-linecap="round"></path>
                                        </g>
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <nav class="navbar">
                        <ul class="navbar-links">
                            <li class="navbar-dropdown text-darkm8">
                                <a class="{{ Request::routeIs('homepage') ? 'active' : '' }}" href="{{route('homepage')}}">Home</a>
                                {{-- <div class="dropdown">
                                  <a href="index.html">home 1</a>
                                  <a href="index-2.html">home 2</a>
                                  <a href="index-3.html">home 3</a>
                                </div> --}}
                            </li>
                            <li class="navbar-dropdown">
                                <a class="{{ Request::routeIs('about-us') ? 'active' : '' }}" href="{{route('about-us')}}">About Us</a>
                                {{-- <div class="dropdown">
                                  <a href="menu-1.html">Menu 1</a>
                                  <a href="menu-2.html">Menu 2</a>
                                  <a href="menu-3.html">Menu 3</a>
                                </div> --}}
                            </li>
                            <li class="navbar-dropdown">
                                <a class="{{ Request::routeIs('menu.index') ? 'active' : '' }}" href="{{route('menu.index')}}">Menu</a>

                                {{-- <div class="dropdown">
                                  <a href="shop.html">our product</a>
                                  <a href="product-details.html">product details</a>
                                  <a href="shop-cart.html">shop cart</a>
                                  <a href="cart-checkout.html">cart checkout</a>
                                </div> --}}
                            </li>
                            <li class="navbar-dropdown">
                                <a class="{{ Request::routeIs('partnership') ? 'active' : '' }}" href="{{route('partnership')}}">Partnership</a>

                            </li>

                            <li class="navbar-dropdown">
                                <a class="{{ Request::routeIs('contact-us') ? 'active' : '' }}" href="{{route('contact-us')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="hamburger-icon">
                        <livewire:cart-widget-component />
                        <a href="contact.html" class="button">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">

        <div class="res-log">
            <a href="index.html">
                <img src="{{ asset('img/logomamud-01.png') }}" width="64" height="64" alt="Responsive Logo"
                     class="white-logo">
            </a>
        </div>
        <ul>
            <li class="menu-item-has-children"><a href="/home">Home</a>
                <ul class="sub-menu">
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="/aboutus">about us</a></li>
            <li class="menu-item-has-children"><a href="/menu">menus</a></li>
            <li class="menu-item-has-children"><a href="/partnership">partnership</a></li>
            <li class="menu-item-has-children"><a href="/contactus">contact us</a></li>
        </ul>
    </div>
</header>

{{$slot}}

<footer class="three" style="background-image:url({{ asset('img/blackpatron.jpg') }}); color: white;">
    <!-- Remove the container if you want to extend the Footer to full width. -->

    <footer class="text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4" style="color: white;">Tentang Ayam Mama Muda</h5>


                    <p style="color: white;">
                        Ayam Mama Muda adalah kemitraan ayam goreng krispi (Crispy Fried Chicken).
                        Renyah ayam dari tepung bumbu racikan rahasia serta varian saus menjadi
                        pembeda dan keunggulan Ayam Mama Muda dari produk ayam goreng krispi lainnya.
                    </p>


                    <div class="mt-4">
                        <!-- Facebook -->
                        <!-- Facebook -->
                        <a href="https://www.instagram.com/ayammamamuda.id" target="_blank" type="button"
                           class="btn btn-floating btn-light btn-lg">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                          fill="#000000"></path>
                                    <path
                                            d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                            fill="#000000"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                          fill="#000000"></path>
                                </g>
                            </svg>
                        </a>

                        <a href="https://www.instagram.com/ayammamamuda.id" target="_blank" type="button"
                           class="btn btn-floating btn-light btn-lg">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z"
                                          fill="#0F0F0F"></path>
                                </g>
                            </svg>
                        </a>


                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase whitez mb-4 pb-1" style="color: white;">Search something</h5>

                    <div class="form-outline form-white mb-4">
                        <input type="text" id="formControlLg" class="form-control form-control-lg"/>
                        <label class="form-label" for="formControlLg">Search</label>
                    </div>

                    <ul class="fa-ul" style="margin-left: 1.65em;">
                        <li class="mb-3">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                          stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                    <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                          stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <span class="fa-li"><i class=""></i></span><span class="ms-2">Mutiara Taman
                                Palem
                                A16 no 16, Cengkareng.</span>
                        </li>
                        <li class="mb-3">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M3 8L8.44992 11.6333C9.73295 12.4886 10.3745 12.9163 11.0678 13.0825C11.6806 13.2293 12.3194 13.2293 12.9322 13.0825C13.6255 12.9163 14.2671 12.4886 15.5501 11.6333L21 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z"
                                          stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <span class="fa-li"><i class=""></i></span><span

                                    class="ms-2">Ayammamamudaid@gmail.com</span>
                        </li>
                        <li class="mb-3">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M6.014 8.00613C6.12827 7.1024 7.30277 5.87414 8.23488 6.01043L8.23339 6.00894C9.14051 6.18132 9.85859 7.74261 10.2635 8.44465C10.5504 8.95402 10.3641 9.4701 10.0965 9.68787C9.7355 9.97883 9.17099 10.3803 9.28943 10.7834C9.5 11.5 12 14 13.2296 14.7107C13.695 14.9797 14.0325 14.2702 14.3207 13.9067C14.5301 13.6271 15.0466 13.46 15.5548 13.736C16.3138 14.178 17.0288 14.6917 17.69 15.27C18.0202 15.546 18.0977 15.9539 17.8689 16.385C17.4659 17.1443 16.3003 18.1456 15.4542 17.9421C13.9764 17.5868 8 15.27 6.08033 8.55801C5.97237 8.24048 5.99955 8.12044 6.014 8.00613Z"
                                          fill="#ffffff"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12 23C10.7764 23 10.0994 22.8687 9 22.5L6.89443 23.5528C5.56462 24.2177 4 23.2507 4 21.7639V19.5C1.84655 17.492 1 15.1767 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23ZM6 18.6303L5.36395 18.0372C3.69087 16.4772 3 14.7331 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C11.0143 21 10.552 20.911 9.63595 20.6038L8.84847 20.3397L6 21.7639V18.6303Z"
                                          fill="#ffffff"></path>
                                </g>
                            </svg>
                            <span class="fa-li"><i class=""></i></span><span class="ms-2">081188822377</span>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4" style="color: white;">Opening hours</h5>

                    <table class="table text-center text-white">
                        <tbody class="fw-normal">
                        <tr>
                            <td>Mon - Thu:</td>
                            <td>8am - 9pm</td>
                        </tr>
                        <tr>
                            <td>Fri - Sat:</td>
                            <td>8am - 1am</td>
                        </tr>
                        <tr>
                            <td>Sunday:</td>
                            <td>9am - 10pm</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3">
            © 202 Copyright:
            <a class="text-white">Ayam Mama Muda</a>
        </div>
        <!-- Copyright -->
    </footer>
</footer>

<!-- progress -->
<div id="progress">
    <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>
</div>

<!-- Bootstrap Js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<!-- fancybox -->
<script src="{{ asset('/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@livewireScripts
</body>