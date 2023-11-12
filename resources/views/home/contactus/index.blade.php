<section class="banner" img alt="imgG" src="{{ asset('img/bannerimg.png') }}">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-7">
             <div class="title-area-data">
                <h2>Contact Us</h2>
                <p style="color: #6d6d6d;">Ayam Mama Muda adalah konsep F&B terbaru yang menggabungkan konsep resto dan
                 content creation untuk tujuan marketing.</p>
             </div>
             <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/contactus">Contact Us</a>


</body>

             </ol>
          </div>
          <div class="col-lg-5">
                 <div class="row">
                     <img alt="img" src="{{ asset('img/mamamuda.png') }}">
             </div>
          </div>
       </div>
    </div>
 </section>

          {{-- <div class="col-lg-5">
             <div class="row">
                <div class="col-6">
                   <div class="title-area-img">
                      <img alt="title-area-img" src="https://via.placeholder.com/230x376">
                      <img alt="pata" class="pata" src="assets/img/pata.png">
                   </div>
                </div>
                <div class="col-6">
                   <div class="title-area-img two">
                      <img alt="title-area-img" src="https://via.placeholder.com/230x376">
                   </div>
                </div>
             </div>
          </div> --}}
       </div>
    </div>
 </section>

 <section class="gap">
    <div class="container">
       <div class="row">
          <div class="col-xl-8">
             <div class="get-in-touch">
                <h2>Get in Touch</h2>
                <ul class="booking">
                <li class="contact">
                   <i>
                      <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_16-Smartphone" data-name="16-Smartphone"><path d="m23 2h-14a3 3 0 0 0 -3 3v22a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-22a3 3 0 0 0 -3-3zm-5.39 2-.33 1h-2.56l-.33-1zm6.39 23a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1-1v-22a1 1 0 0 1 1-1h3.28l.54 1.63a2 2 0 0 0 1.9 1.37h2.56a2 2 0 0 0 1.9-1.37l.54-1.63h3.28a1 1 0 0 1 1 1z"/><path d="m17 24h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2z"/></g></svg>
                   </i>
                   <div>
                      <span>Our Whatsapp</span>
                      <a href="callto:01123456786"><span>01 123 456 786 </span></a>
                   </div>
                </li>
                <li class="contact">
                   <i>
                      <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_01-Email" data-name="01-Email"><path d="m29.61 12.21-13-10a1 1 0 0 0 -1.22 0l-13 10a1 1 0 0 0 -.39.79v14a3 3 0 0 0 3 3h22a3 3 0 0 0 3-3v-14a1 1 0 0 0 -.39-.79zm-13.61-7.95 11.36 8.74-11.36 8.74-11.36-8.74zm11 23.74h-22a1 1 0 0 1 -1-1v-12l11.39 8.76a1 1 0 0 0 1.22 0l11.39-8.76v12a1 1 0 0 1 -1 1z"></path></g></svg>
                   </i>
                   <div>
                      <span>Our Email</span>
                      <a href="mailto:info@domain.com"><span>Ayammamamudaid@gmail.com</span></a>
                   </div>
                </li>
                </ul>
             </div>
             <div class="mapouter"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.774158081089!2d106.7323527!3d-6.1382879!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11097e2bafd%3A0x8ada2254fa44ee80!2sAyam%20Mama%20Muda!5e0!3m2!1sen!2sid!4v1699794617814!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
             <div class="align-items-center d-flex mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24" width="24" height="24">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                    </g>
                </svg>
                <p>Mutiara Taman Palem A16 no 16, Cengkareng.</p>
            </div>



          </div>
          <div class="col-xl-6">
             <div class="get-in-touch">
                <h2>Have Question?</h2>
                <p>For all enquires, please contact us and one of our delightful team will be be happy to help.</p>
             </div>

             <form role="form"  id="contact-form" method="post" class="add-review leave-comment mt-4">
                <input type="text" name="complete_name" id="Complete_Name" placeholder="Full Name" required>
                 <input type="text" name="email_address" placeholder="Email Address" id="email_address" required>
                <input type="text"  name="phone" placeholder="Phone No">
                <textarea placeholder="Message" name="message"></textarea>
                <button class="button" type="submit" value="submit">
                   <span>send Message</span>
                </button>
              </form>
          </div>
       </div>
    </div>
 </section>

