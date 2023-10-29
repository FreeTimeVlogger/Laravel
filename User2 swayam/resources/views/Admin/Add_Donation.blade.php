@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Donation Form</title>
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
    <!----donation box-->
<form action="/donate/donation" method="post">
    @csrf
      <div>
        <div class="container-container text-center"
          style="background-color: cornsilk; font-family: monospace; color:darkorange">
          <h1 style="font-size: 70px;">General Donation</h1><br>
          <h3>To help the needy people </h3>
    
        </div><br><br>
    
        <div class="container">
          <h1 style="color:rgb(11, 186, 58)">Donate now</h1>
           
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="enter amount" >
            <label for="floatingInput">name</label>
            @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
          </div><br>
    
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="amount" name="amount" value="{{old('amount')}}" placeholder="enter amount" >
            <label for="floatingInput">Amount</label>
            @error('amount')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
          </div><br>
    
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="message" name="message" value="{{old('message')}}" placeholder="your message" >
            <label for="floatingInput">Enter Message</label>
            @error('message')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
          </div> <br>
    
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="check" >
            <label class="form-check-label" for="flexCheckDefault">
              agree terms and conditions
            </label>
            @error('check')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
          </div><br>
    
          <h2 style="text-align: center;color:rgb(5, 115, 10);text-shadow: 10cm;">submit to donate</h2><br>
    
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit" id="bank">submit</button><br><br><br>
           
          </div>
        </div>
      </div>
</form>
    
    
    
    
    
    
        </div>
</body>
</html>
@endsection