
    {{-- <!-- preloader -->
    <div class="preloader">
        <div class="container">
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
            <div class="dot dot-3"></div>
        </div>
    </div>
    <!-- end preloader --> --}}
    <header class="two bg-white  srollable-header" >
        <div class="bottom-bar ">
          <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-3">
                     <div class="d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="index.html">
                                <img alt="logo" src="{{ asset('img/logomamud-01.png') }}" style="width: 100px; height: 100px;">
                              </a>

                        </div>
                        <div class="d-flex cart-checkout">
                          <a href="cart-checkout.html">
                              <i>
                                  <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g>
                                  <path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path></g></svg>
                              </i>
                          </a>
                          <div class="bar-menu">

                               <i class=""> <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 7L4 7" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M20 12L4 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 17L4 17" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> </g></svg></i>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <nav class="navbar">
                        <ul class="navbar-links">
                          <li class="navbar-dropdown text-darkm8">
                            <a class="{{ Request::is('/') ? 'active' : '' }}"href="/home">Home</a>
                            {{-- <div class="dropdown">
                              <a href="index.html">home 1</a>
                              <a href="index-2.html">home 2</a>
                              <a href="index-3.html">home 3</a>
                            </div> --}}
                          </li>
                          <li class="navbar-dropdown">
                            <a href="/aboutus">About Us</a>
                            {{-- <div class="dropdown">
                              <a href="menu-1.html">Menu 1</a>
                              <a href="menu-2.html">Menu 2</a>
                              <a href="menu-3.html">Menu 3</a>
                            </div> --}}
                          </li>
                          <li class="navbar-dropdown">
                            <a href="/menu">Menu</a>

                            {{-- <div class="dropdown">
                              <a href="shop.html">our product</a>
                              <a href="product-details.html">product details</a>
                              <a href="shop-cart.html">shop cart</a>
                              <a href="cart-checkout.html">cart checkout</a>
                            </div> --}}
                          </li>
                          <li class="navbar-dropdown">
                            <a href="/partnership">Partnership</a>

                          </li>

                          <li class="navbar-dropdown">
                            <a href="/contactus">Contact</a>
                          </li>
                        </ul>
                      </nav>
                  </div>
                  <div class="col-lg-3">
                     <div class="hamburger-icon">
                        <div class="donation">

                      <a href="JavaScript:void(0)" class="pr-cart">

                        <svg id="Shoping-bags" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path></g></svg>

                      </a>

                      <div class="cart-popup">

                          <ul>

                            <li class="d-flex align-items-center position-relative">

                              <div class="p-img light-bg">

                                <img src="https://via.placeholder.com/75x75" alt="Product Image">

                              </div>

                              <div class="p-data">

                                <h3 class="font-semi-bold">Brown Sandwich</h3>

                                <p class="theme-clr font-semi-bold">1 x $10.50</p>

                              </div>

                              <a href="JavaScript:void(0)" id="crosss"></a>

                            </li>

                            <li class="d-flex align-items-center position-relative">

                              <div class="p-img light-bg">

                                <img src="https://via.placeholder.com/75x75" alt="Product Image">

                              </div>

                              <div class="p-data">

                                <h3 class="font-semi-bold">Banana Leaves</h3>

                                <p class="theme-clr font-semi-bold">1 x $12.60</p>

                              </div>

                              <a href="JavaScript:void(0)" id="cross"></a>

                            </li>

                          </ul>

                            <div class="cart-total d-flex align-items-center justify-content-between">

                              <span class="font-semi-bold">Total:</span>

                              <span class="font-semi-bold">$23.10</span>

                            </div>



                      </div>

                    </div>
                           <a href="contact.html" class="button">Reserve a Table</a>
                     </div>
                  </div>
               </div>
         </div>
        </div>
        <div  class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">

            <div class="res-log">
              <a href="index.html">
                <img src="{{ asset('img/logomamud-01.png') }}" width="64" height="64" alt="Responsive Logo" class="white-logo">
              </a>
            </div>
              <ul>

                <li class="menu-item-has-children"><a href="/home">Home</a>
                  <ul class="sub-menu">



                  </ul>
                </li>
                <li class="menu-item-has-children"><a href="/aboutus">about us</a>

                </li>
                <li class="menu-item-has-children"><a href="/menu">menus</a>

                </li>

                <li class="menu-item-has-children"><a href="/partnership">partnership</a>

                </li>

                <li class="menu-item-has-children"><a href="/contactus">contact us</a>

                </li>







        </div>
      </header>
