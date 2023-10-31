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

    <!-- Vendor CSS Files -->

    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">



    <link href="{{ asset('js/main.js') }}" rel="stylesheet">

    <!-- Template Main CSS File -->



    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <script src="jQuery-3.6.3.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#swayam").click(function() {
                $("p").slideToggle("slow");
            });
        });





        $(document).ready(function() {
            $("#highlights").click(function() {
                $("p").slideToggle("slow");
            });
        });


        $(document).ready(function() {
            $("#hide").click(function() {
                $("p").hide();
            });
            $("#show").click(function() {
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
                {{-- <form id="form" role="search">
                    <input type="search" id="input" name="q" placeholder="Search..."
                        aria-label="Search through site content">
                    <button id="btn_1"><i class="bi bi-search"></i></button>
                </form> --}}
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


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <center>
                <h2>Ask for Help</h2>
            </center>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>India ,gujarat</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>abhattarai446@rku.ac.in</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+91 9354586272</p>
                    </div>
                </div>

            </div>

            {{-- <div class="row">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div> --}}
<center>
                <div class="col-lg-6">
                    <form action="help" method="post" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name">
                                <small style="color: red">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" >
                                    <small style="color: red">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </small>
                            </div>

                        </div>

                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="mobile" 
                                placeholder="Contact Number" >
                                <small style="color: red">
                                    @error('mobile')
                                        {{ $message }}
                                    @enderror
                                </small>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" >
                                <small style="color: red">
                                    @error('subject')
                                        {{ $message }}
                                    @enderror
                                </small>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="message"></textarea>
                            <small style="color: red">
                                @error('message')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                          <button type="submit">Ask Help</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->


</center>

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
                            <li><i class="bx bx-chevron-right"></i> <a href="#">National Society Development</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Health & Care</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Disasters, Climate and
                                    Crises</a></li>
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
                        <p>Swayamsevaks are the volunteers of the Rashtriya Swayamsevak Sangh, a right-wing organisation
                            in India.
                            They are expected to dedicate their time and energy to the organisation and its activities,
                            such as
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
    
</body>
</html>