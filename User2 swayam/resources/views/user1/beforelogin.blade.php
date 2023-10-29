<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


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

        .con {
            margin-top: 200px;
            width: 400px;
            margin-left: 35%;
        }

        body {
            background-image: url('img/event_1.jpeg');
            background-size: cover;
            color: white;
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
                <a class="btn" href="before_contact" role="button" aria-expanded="false">
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
                        <!-- <ul style="background-color: aliceblue;">
            <li><a href="#">About The SWAYAMSEVAK</a></li>
              <li><a href="#">Our History & Archives </a></li>
            </ul> -->
                    </li>

                    <li class="dropdown"><a href="before_what_we_do"><span class="fw-bold fs-6">WHAT WE DO</span></a>
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

    @if (session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert"
            style="min-width: 500px; right: 20px; top: 50px; z-index:1; position: absolute;">
            {{ session('success') }}
        </div>

        <script>
            // Automatically close the alert after 5 seconds
            setTimeout(function() {
                $('.alert').alert('close');
            }, 3000);
        </script>
    @endif

    @if (session('fail'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert"
            style="min-width: 500px; right: 20px; top: 50px; z-index:1; position: absolute;">
            {{ session('fail') }}
        </div>

        <script>
            // Automatically close the alert after 5 seconds
            setTimeout(function() {
                $('.alert').alert('close');
            }, 3000);
        </script>
    @endif

    @if (session('login'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert"
            style="min-width: 500px; right: 20px; top: 50px; z-index:1; position: absolute;">
            {{ session('login') }}
        </div>

        <script>
            // Automatically close the alert after 5 seconds
            setTimeout(function() {
                $('.alert').alert('close');
            }, 3000);
        </script>
    @endif

    <div class="con" style="margin-top: 6%">
        <h1>LOGIN FORM</h1>
        <form action="login_check" method="get">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Email address</label> <br>
                <small style="color: red">
                    @error('email')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Password</label> <br>
                <small style="color: red">
                    @error('password')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    {{-- <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div> --}}
                </div>

                <div class="col" >
                    <!-- Simple link -->
                    <a href="forgot_pass"style="color: #fff">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            {{-- <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button> --}}
            <input type="submit" value="Sign in" class="btn btn-primary btn-block mb-4">

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="before_register">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>
