




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SWAYAMSEVAK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_bg.png" rel="icon">
  <link href="assets/img/logo_bg.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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



  <!-- =======================================================
  * Template Name: Eterna - v4.10.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

 <!--jquery-->

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
        <div class="dropdown text-secondary">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            English
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">हिंदी</a></li>
            <li><a class="dropdown-item" href="#">বাংলা</a></li>
            <li><a class="dropdown-item" href="#">Español</a></li>
          </ul>
        </div>&emsp;&emsp;
        <a href="#" class="linkedin"><i class="bi bi-youtube fs-5"></i></i></a>&emsp;&emsp;
        <a href="#" class="twitter"><i class="bi bi-twitter fs-6"></i></a> &emsp;&emsp;
        <a href="#" class="facebook"><i class="bi bi-facebook fs-6"></i></a>&emsp;&emsp;
        <a href="#" class="instagram"><i class="bi bi-linkedin fs-6"></i></a>&emsp;&emsp;
      </div>
      <div class="d-none d-md-flex align-items-center">
        <div class="dropdown text-secondary">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quick Access
          </a>
          <ul class="dropdown-menu" style="background-color: whitesmoke;">

            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">Highlights&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                  <th scope="col">Topics&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                  <th scope="col">Events&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#">What's new</a></td>
                  <td><a href="#">Childrens</a></td>
                  <td><a href="#">Global conference</a></td>
                </tr>
                <tr>
                  <td><a href="#">Media</a></td>
                  <td><a href="#">Orphans</a></td>
                  <td><a href="#">Annual meeting</a></td>
                </tr>
                <tr>
                  <td><a href="#">The SWAYAMSEVAKS funding and spending</a></td>
                  <td><a href="#">Response</a></td>
                  <td><a href="#">Call of duty</a></td>
                </tr>
              </tbody>
            </table>
          </ul>
        </div>
        <a class="btn" href="#news" role="button" aria-expanded="false">
          Press Release
        </a>
        <a class="btn" href="/contact" role="button" aria-expanded="false">
          Contact
        </a>
        <a class="btn" href="login.php" role="button" aria-expanded="false">
          Login <i class="bi bi-person"></i>
        </a>&emsp;
        <form id="form" role="search">
          <input type="search" id="input" name="q" placeholder="Search..." aria-label="Search through site content">
          <button id="btn_1"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </section>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="i/">swayamsewak</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <!--  <li><a class="active" href="index.html">Home</a></li>   -->

          <li class="dropdown"><a href="/swayam"><span class="fw-bold fs-6">WHO WE ARE</span></a>
            <ul style="background-color: aliceblue;">
              <li><a href="swayam.html#about">About The SWAYAMSEVAK</a></li>
              <li><a href="swayam.html#history">Our History & Archives </a></li>
              <li><a href="swayam.html#fundamental_principle">Fundamental Principles</a></li>
              <li><a href="swayam.html#governance">Governance</a></li>
              <li><a href="swayam.html#global_plan">Global PLan</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="/what_we_do"><span class="fw-bold fs-6">WHAT WE DO</span></a>
            <ul style="background-color: aliceblue;">
              <li><a href="what_we_do.html#education">Access to Education</a></li>
              <li><a href="what_we_do.html#education">National Society Development</a></li>
              <li><a href="what_we_do.html#health">Health and Care</a></li>
              <li><a href="what_we_do.html#disaster">Disasters, Climate and Crises</a></li>
              <!--
              <li><a href="#">Coronavirus: COVID-19 Pandemic</a></li>
              <li><a href="#">Operational Research</a></li>
              <li><a href="#">Global Action</a></li>
              -->
              <li><a href="what_we_do.html#youth">Youth Engagement</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="/promises"><span class="fw-bold fs-6">OUR PROMISE</span></a>
            <ul style="background-color: aliceblue;">
              <li><a href="promises.html">Adhyayan</a></li>
              <li><a href="promises.html">Jagran</a></li>
              <li><a href="promises.html">Prashikshan</a></li>
              <li><a href="promises.html">Sahyog</a></li>
            </ul>
          </li>

          <!--
                <li><a href="about.html" class="fw-bold fs-6">WHO WE ARE</a></li> 
                <li><a href="services.html" class="fw-bold fs-6">WHAT WE DO</a></li>
                <li><a href="portfolio.html" class="fw-bold fs-6">OUR PROMISE</a></li>
                -->
          <li><a href="#impact" class="fw-bold fs-6">IMPACT</a></li>
          <!--
          <li><a href="#" class="fw-bold fs-6">VOLUNTEER</a></li>
          -->
          <li><a href="signup.php"><button type="button" id="join" class="btn btn-success fw-bold fs-6">JOIN US</button></a></li>
          <li><a href="/donate"><button type="button" id="donate" class="btn btn-danger fw-bold fs-6">DONATE</button></a></li>

          <!--
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  @yield('body')