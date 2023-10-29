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

    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">



    <link href="{{ asset('js/main.js') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



    <!-- =======================================================
  * Template Name: Eterna - v4.10.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!--jquery-->

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

        .aahan {
            padding: 2rem 0rem;
        }

        .like {
            font-size: 1.5rem;
        }
    </style>

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center" style="background-color: #545454;">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <div class="dropdown text-secondary">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
                <a class="btn" href="beforelogin" role="button" aria-expanded="false">
                    Login <i class="bi bi-person"></i>
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
                    <li><a href="/"><span class="fw-bold fs-6">Home</span></a></li>


                    <li class="dropdown"><a href="before_swayam"><span class="fw-bold fs-6">WHO WE ARE</span></a>

                    </li>

                    <li class="dropdown"><a href="before_store"><span class="fw-bold fs-6">STORE</span></a>

                    </li>

                    <li class="dropdown"><a href="before_what_we_do"><span class="fw-bold fs-6">WHAT WE DO</span></a>

                    </li>


                    <li><a href="before_programs" class="fw-bold fs-6">PROGRAMS</a></li>
                    <!--
    <li><a href="#" class="fw-bold fs-6">VOLUNTEER</a></li>
    -->
                    <li><a href="before_register"><button type="button" id="join"
                                class="btn btn-success fw-bold fs-6">Register</button></a></li>
                    <li><a href="before_donate"><button type="button" id="donate"
                                class="btn btn-danger fw-bold fs-6">DONATE</button></a></li>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->
    <div class="aahan"></div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</body>

</html>
