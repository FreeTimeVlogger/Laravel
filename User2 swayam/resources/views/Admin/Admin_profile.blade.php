@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>


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

    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @foreach ($users as $admins)
                                    <img src="{{ URL::to('/') }}/img/user/{{ $admins->profile_pic }}" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">

                                        <h4> {{ $admins['name'] }} </h4>
                                        <p class="text-muted font-size-sm"></p>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $admins['name'] }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $admins['email'] }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $admins['number'] }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Age</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $admins['Age'] }}
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">gender</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                male
                            </div>
                        </div> --}}
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank"
                                        href="Users/{{ $admins['email'] }}/edit">Edit</a>
                                    {{-- <a style="cursor:pointer; color:#000;" data-toggle="modal" data-target="#ch_pass">
                                        <a class="btn btn-info " target="__blank" href="">Change Password</a>
                                    </a><br> --}}
                                    {{-- <a style="cursor:pointer; color:#000; margin-left: 60%;" data-toggle="modal">
                                    <a class="btn btn-info " target="__blank" href="logout"  >Logout</a>
                                </a> --}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </body>

    </html>
@endsection
