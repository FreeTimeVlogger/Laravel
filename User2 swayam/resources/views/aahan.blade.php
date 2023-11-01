<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SWAYAMSEVAK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/logo_bg.png" rel="icon"> -->
  <!-- <link href="assets/img/logo_bg.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->

  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">



  <link href="{{asset('js/main.js')}}" rel="stylesheet">

  <!-- Template Main CSS File -->


  
  <link href="{{asset('css/style.css')}}" rel="stylesheet">


 <script src="jQuery-3.6.3.min.js"></script>
 
 <script>
 

$(document).ready(function(){  
    $("#swayam").click(function(){  
        $("p").slideToggle("slow");  
    });  
});    





$(document).ready(function(){  
    $("#highlights").click(function(){  
        $("p").slideToggle("slow");  
    });  
});    


$(document).ready(function(){  
        $("#hide").click(function(){  
        $("p").hide();  
    });  
    $("#show").click(function(){  
        $("p").show();  
    });  
});  
  </script>

  </script>
  <style>
    #form {
      background-color: rgb(184, 177, 177);
      width: 33%;
      height: 75%;
      border-radius: 5px;
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    #input {
      all: unset;
      font: 16px system-ui;
      color: #fff;
      height: 100%;
      width: 100%;
      padding: 6px 10px;
    }

    ::placeholder {
      color: #fff;
      opacity: 0.7;
    }

    #btn_1 {
      background-color: gray;
      display: flex;
      border: none;
    }
  </style>

</head>

<body>
  
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center" style="background-color: #545454;">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          
            <a href="#" class="linkedin"><i class="bi bi-youtube fs-5"></i></i></a>&emsp;&emsp;
            <a href="#" class="twitter"><i class="bi bi-twitter fs-6"></i></a> &emsp;&emsp;
            <a href="#" class="facebook"><i class="bi bi-facebook fs-6"></i></a>&emsp;&emsp;
            <a href="#" class="instagram"><i class="bi bi-linkedin fs-6"></i></a>&emsp;&emsp;
        </div>
        <div class="d-none d-md-flex align-items-center">
            <div class="dropdown text-secondary">
            </div>

            <a class="btn" href="/ask_help" role="button" aria-expanded="false">
              Ask For Help
          </a>
           
            <a class="btn" href="/contact" role="button" aria-expanded="false">
                Contact
            </a>
            <a class="btn" href="/profile" role="button" aria-expanded="false">
                profile <i class="bi bi-person"></i>
            </a>&emsp;
            <a class="btn" href="/cart_list" role="button">
              Cart <i class="fa fa-cart-shopping"></i> </span>
          </a>&emsp;
            <form id="form" role="search"  action="{{ url('/search') }}">
                <input type="search" id="input" name="search" value="{{ Request::get('search') }} placeholder="Search..."
                    aria-label="Search through site content">
                <button id="btn_1"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</section>


<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1>swayamsewak</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <!--  <li><a class="active" href="index.html">Home</a></li>   -->
                <li><a href="After_home"><span class="fw-bold fs-6">Home</span></a></li>


                <li class="dropdown"><a href="/swayam"><span class="fw-bold fs-6">WHO WE ARE</span></a>
                  <li class="dropdown"><a href="/after_product"><span class="fw-bold fs-6">PRODUCTS</span></a>
                   
                    <!-- <ul style="background-color: aliceblue;">
        <li><a href="#">About The SWAYAMSEVAK</a></li>
          <li><a href="#">Our History & Archives </a></li>
        </ul> -->
                </li>

                <li class="dropdown"><a href="/what_we_do"><span class="fw-bold fs-6">WHAT WE DO</span></a>
                    <!-- <ul style="background-color: aliceblue;">
        <li><a href="what_we_do.html#education">Access to Education</a></li>
          <li><a href="what_we_do.html#education">National Society Development</a></li>
        </ul> -->
                </li>

                {{-- <li class="dropdown"><a href="/promises"><span class="fw-bold fs-6">STORE</span></a> --}}
                    <!-- <ul style="background-color: aliceblue;">
          <li><a href="promises.html">Adhyayan</a></li>
          <li><a href="promises.html">Jagran</a></li>
        </ul> -->
                </li>

                <!--
            <li><a href="about.html" class="fw-bold fs-6">WHO WE ARE</a></li>
            <li><a href="services.html" class="fw-bold fs-6">WHAT WE DO</a></li>
            <li><a href="portfolio.html" class="fw-bold fs-6">OUR PROMISE</a></li>
            -->
                <li><a href="/programs" class="fw-bold fs-6">PROGRAMS</a></li>
                
                
                <!--
      <li><a href="#" class="fw-bold fs-6">VOLUNTEER</a></li>
      -->
                <li><a href="/after_donate"><button type="button" id="donate"
                            class="btn btn-danger fw-bold fs-6">DONATE</button></a></li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>
</header><!-- End Header -->
  <div class="logo">
    <center><h1>SEARCH PRODUCTS</h1></center>
    <div class="container">
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      @if(session('Error'))
      <div class="alert alert-warning">
        {{ session('Error') }}
      </div>
      @endif

    </div>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  </div>
      <div class="card ml-2 " id="highlights">
        {{-- <h5 class="card-header">Highlights</h5> --}}
        <div class="row ml-2">
          @if ($searchproducts != null) 
                    @foreach ($searchproducts as $product)
                    <div class="col-xl-3 col-md-4 col-sm-6 mt-2 mb-2 " style="width: 18rem;">
                      <img src="products_image/{{ $product->Image}}" class="card-img-top ml-2" style="height: 200px " alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{ $product->Product_Name }}</h5>
                        <p class="card-text">RS: {{ $product->Price }}</p>
                        
                          Quantity:<select name="" id="selectOptions">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select><br><br>
                          <button onclick="cart(<?php echo $product->id; ?>)" class="btn btn-danger w-100">Add To Cart</button>

                        <br><br>
                        <a href="buyy/{{ $product->id }}" class="btn btn-success" style="width: 100%">Buy</a>

                      </div>
                    </div>
          @endforeach
          @endif
        </div>
      </div>
      
         
    </section><!-- End Services Section -->
    </section><!-- End Clients Section -->

  </main><!-- End #main -->
  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SWAYAMSEVAK</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Global Plan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Press Realese</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Get Involved</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Access to Education</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">National Society Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Health & Care</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Disasters, Climate and Crises</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Young Engagement</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              RK University <br>
              Rajkot, Gujarat 360020<br>
              India <br><br>
              <strong>Phone:</strong> +91 91919 19191<br>
              <strong>Email:</strong> info@swayamsewak.org<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Swayamsevak</h3>
            <p>Swayamsevaks are the volunteers of the Rashtriya Swayamsevak Sangh, a right-wing organisation in India.
              They are expected to dedicate their time and energy to the organisation and its activities, such as
              attending weekly shakhas (meetings) and participating in social service activities.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy; 2023 - <strong><span>SWAYAMSEVAK</span></strong>|| All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
 

<script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->

  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
<script>
  function cart(id) {
  var x = document.getElementById('selectOptions').value;
  window.location.href = 'http://127.0.0.1:8000/add_to_cart/'+ id +'/' + x;
}
</script>
