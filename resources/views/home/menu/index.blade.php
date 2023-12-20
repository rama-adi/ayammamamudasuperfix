<section class="banner" img alt="imgG" src="{{ asset('img/bannerimg.png') }}">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-7">
             <div class="title-area-data">
                <h2>Menu</h2>
                <p style="color: #6d6d6d;">Ayam Mama Muda adalah konsep F&B terbaru yang menggabungkan konsep resto dan
                 content creation untuk tujuan marketing.</p>
             </div>
             <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/menu">Menu</a>

             </ol>
          </div>
          <div class="col-lg-5">
                 <div class="rowimage">
                     <img alt="imgmoi" src="{{ asset('img/mamamuda.png') }}">
             </div>
          </div>
       </div>
    </div>
 </section>

<section class="gap no-bottom">
    <div class="container">
       <div class="heading-two">
          <h2>Pilih #AyamMamaMuda mu !</h2>
          <div class="line"></div>
       </div>
       <div class="choosecategory owl-carousel owl-theme">
        @foreach($types as $type)
        <div class="item">
            <div class="category-choose">
               <div class="category-choose-img">
                  <img alt="Category" src="{{ asset($type->foto) }}">
                  {{-- {{ asset($type->foto) }} --}}
               </div>
               <a href="{{ route('menu.show', $type->id) }}"><h3>{{ $type->nama }}</h3></a>
               <span>12 Dishes in the Menu</span>
            </div>
         </div>
         @endforeach
          {{-- <div class="item">
             <div class="category-choose">
                <div class="category-choose-img">
                   <img alt="Category" src="{{ asset('img/mamud3.png') }}">
                </div>
                <a href="#"><h3></h3></a>
                <span></span>
             </div>
          </div>
          <div class="item">
             <div class="category-choose">
                <div class="category-choose-img">
                   <img alt="Category" src="{{ asset('img/mamud.png') }}">
                </div>
                <a href="#"><h3></h3></a>
                <span></span>
             </div>
          </div>
          <div class="item">
             <div class="category-choose">
                <div class="category-choose-img">
                   <img alt="Category" src="{{ asset('img/mamud2.png') }}">
                </div>
                <a href="#"><h3></h3></a>
                <span></span>
             </div> --}}
          </div>

       </div>
    </div>
 </section>
 <section class="watch-video" style="background-image: url({{ asset('img/blackpatron.jpg') }})">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xl-6">
             <div class="heading">
                <h6>#AyamPalingHot</h6>
                <h2>Ayam paling kriuk dan hot serta renyah ya #AyamMamaMuda</h2>
             </div>

          </div>
          <div class="col-xl-6">
             <div class="row align-items-center">
                <div class="col-lg-6">
                   <div class="watch-video-img">
                      <img alt="imgG" src="{{ asset('img/mamahot.png') }}">
                   </div>
                   <div class="watch-video-img two">
                      <img alt="imgG" src="{{ asset('img/mamajepang.png') }}">
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="watch-video-img">
                      <img alt="imgG" src="{{ asset('img/mamacentil.png') }}">
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
