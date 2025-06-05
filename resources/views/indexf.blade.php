<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- SweetAlert2 -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        function valid() {
            var Name = document.getElementById("Name").value;
            if (/\d/.test(Name))
            {
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Nama tidak boleh mengandung angka",
                });
                return false;
            }
        if (Name.length < 2)
            {
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Nama minimal 2 huruf",
                });
                return false;
            }
        return true;
        }
    </script>
   </head>
   <body>
      <div class="header_section header_bg">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="{{ asset('images/jack-watkins-studio-logo.png') }}" alt=""style="height: 37.99px;" width="278.04px"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="icecream.html">Icecream</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt"><a href="#">Login <span style="color: #222222;"><i class="fa fa-user" aria-hidden="true"></i></span></a></div>
                     <div class="fa fa-search form-control-feedback"></div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- about sectuion start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="{{ asset('images/work-leroy-elevates.jpg') }}" ></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">Irresistible by design.</h1>
                  <p class="about_text">Strategic brands and websites for founders and businesses who want to be seen, remembered, and chosen — for all the right reasons.</p>
                  <div class="read_bt_1"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about sectuion end -->
      <div class="about_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <h1 class="about_taital">HALLO</h1>
                 <p class="about_text">I’m Jack Watkins — designer, creative director, and the person behind the studio.
                  For over seven years, I’ve been helping ambitious founders shape brands and websites that feel as good as they look, and work as well as they feel.
                  Everything I do is intentional, intelligent, and designed to make a lasting impression.</p>
                 <div class="read_bt_1"><a href="#">About</a></div>
              </div>
              <div class="col-md-6">
                <div class="about_img"><img src="{{ asset('images/JW-Photo-Studio-Portrait-161.jpg') }}" ></div>
             </div>
           </div>
        </div>
     </div>
     <!-- about sectuion end -->
      <!-- cream sectuion start -->
      <div class="cream_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h1 class="testimonial_taital">Ways we can work together.</h1>
                 <p class="cream_text">From brand identities to strategic websites, here’s how I help founders, creatives and businesses elevate their businesses with clarity, confidence, and creativity.</p>
              </div>
           </div>
           <div class="cream_section_2">
              <div class="row">
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="{{ asset('images/kontener 2/jack-watkins-brand-clarity-worksheets.jpg') }}"></div>
                       <div class="strawberry_text">Brand design</div>
                       <h6 class="strawberry_text">The foundation for your next chapter.</h6>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="{{ asset('images/kontener 2/jack-watkins-logo-sketch-portabello.jpg') }}"></div>
                       <div class="strawberry_text">Website design</div>
                       <h6 class="strawberry_text">Designed to connect, built to perform.</h6>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="cream_box">
                       <div class="cream_img"><img src="{{ asset('images/kontener 2/jack-watkins-studio-desk-laptop.jpg') }}"></div>
                       <div class="strawberry_text">Brand consultancy</div>
                       <h6 class="strawberry_text">Sharp thinking for brand defining decisions.</h6>
                    </div>
                 </div>
              </div>
           </div>
           <div class="seemore_bt"><a href="#">See More</a></div>
        </div>
     </div>
     <!-- cream sectuion end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h1 class="testimonial_taital">From vision to reality.</h1>
                 <p class="cream_text">Transformations brought to life in collaboration with brilliant clients across creative, lifestyle, and purpose-led industries.</p>
              </div>
           </div>
           <div class="testimonial_section_2">
              <div class="row">
                 <div class="col-md-12">
                    <div class="testimonial_box">
                       <div id="main_slider" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                             <div class="carousel-item active">
                                <p class="testimonial_text">An earthy, enchanting, brand for one of the UK's oldest plant nurseries</p>
                                <h4 class="client_name">HOLDEN CLOUGH</h4>
                                <div class="client_img"><img src="{{ asset('images/jack-watkins-studio-holden-clough-thumbnail.jpg') }}" style="height: 180px; width: 180.5px;"></div>
                             </div>
                             <div class="carousel-item">
                                <p class="testimonial_text">A refined, romantic brand for a leading floral design duo</p>
                                <h4 class="client_name">COCO IN THE COUNTRY</h4>
                                <div class="client_img"><img src="{{ asset('images/work-coco-in-the-country-square.jpg') }}" style="height: 180px; width: 180.5px;"></div>
                             </div>
                             <div class="carousel-item">
                                <p class="testimonial_text">A bold, playfil and distinctive take on baking, branding</p>
                                <h4 class="client_name">FINCH BAKERY</h4>
                                <div class="client_img"><img src="{{ asset('images/jack-watkins-studio-finch-bakery-thumbnail.jpg') }}" style="height: 180px; width: 180.5px;"></div>
                             </div>
                          </div>
                          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                          <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                          <i class="fa fa-angle-right"></i>
                          </a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>

     <!-- contact section start -->
     <div class="contact_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="contact_main">
                  <h1 class="contact_taital">Contact Us</h1>
                  <form action="https://google.co.id"  method="get" onsubmit="return valid();">
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Name" name="Name" id="Name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Email" name="Name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                     </div>
                     <div class="form-group">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                     </div>
                     <input type="submit" class="main_bt" value="Send">
                  </form>
               </div>
            </div>
            <div class="col-md-8">
               <div class="location_text">
                  <ul>
                     <li>
                        <a href="#">
                        <span class="padding_left_10 active"><i class="fa fa-map-marker" aria-hidden="true"></i></span>Making this the first true</a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>Call : +01 1234567890
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>Email : demo@gmail.com
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="mail_main">
                  <h3 class="newsletter_text">A journal on branding, creativity, and what it means to make things that move people.</h3>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="example@gmail.com"></textarea>
                     <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                  </div>
               </div>
               <div class="footer_social_icon">
                  <ul>
                     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section start -->
      <div class="copyright_section margin_top90">
        <div class="container">
           <p class="copyright_text">Copyright © 2025 · Jack Watkins</p>
        </div>
     </div>
     <!-- copyright section end -->
   </div>
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <!-- javascript -->
   </body>
</html>
