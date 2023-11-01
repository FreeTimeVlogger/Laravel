@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')

<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-4">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
     <strong> {{$message}} </strong>
  </div>
    
@endif
</div>
<div class="card">
<div class="card-header text-center font-weight-bold">
<h2>Add Help</h2>
</div>

<div class="card-body">
<form name="product" id="product" method="post" action="contect_insert" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Your Name</label>
    <input type="text" id="id" name="name" id="name" value="" class="@error('name') is-invalid @enderror form-control">
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
<div class="form-group">
<label for="exampleInputEmail1">Your Email</label>
<input type="email" id="email" name="email" value="" class="@error('email') is-invalid @enderror form-control">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Subject</label>
<input type="text" id="subject" name="subject" value="" class="@error('subject') is-invalid @enderror form-control">
@error('subject')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
<div class="form-group">
    <label for="exampleInputEmail1">Your Message</label>
    <input type="text" id="message" name="message" value="" class="@error('message') is-invalid @enderror form-control">
    @error('message')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>



<button type="submit" class="btn btn-primary">Submit</button><br><br>

</form>
</div>
</div>
</div>  
</body>
</html>
@endsection