<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



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

                <a class="btn" href="/contact" role="button" aria-expanded="false">
                    Contact
                </a>
                <a class="btn" href="/profile" role="button" aria-expanded="false">
                    profile <i class="bi bi-person"></i>
                </a>&emsp;
                <form id="form" role="search">
                    <input type="search" id="input" name="q" placeholder="Search..."
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
                    <li><a href="/donate"><button type="button" id="donate"
                                class="btn btn-danger fw-bold fs-6">DONATE</button></a></li>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

    <form action="profile_check" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    @foreach ($make as $hel)
                                        <img src="{{ URL::to('/') }}/img/user/{{ $hel->profile_pic }}" alt="Admin"
                                            class="rounded-circle p-1 bg-primary" width="110">
                                        <div class="mt-3">

                                            <h4>{{ $hel->name }}</h4>
                                        </div>
                                </div>
                                <hr class="my-4">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value=" {{ $hel->name }}"
                                            name="name">
                                        <small style="color: red">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{ $hel->email }}" readonly
                                            name="email">
                                        <small style="color: red">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{ $hel->number }}"
                                            name="phone">
                                        <small style="color: red">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Age</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{ $hel->Age }}"
                                            name="age">
                                        <small style="color: red">
                                            @error('age')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Profile_pic</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" class="form-control" name="profile_pic">
                                        <small style="color: red">
                                            @error('profile_pic')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- <input  value=""> --}}
                                        {{-- <button type="submit" class="btn btn-primary px-4">

                                            Save Changes</button> --}}
                                            <input type="submit" value="Save Changes"class="btn btn-primary px-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </form>


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
