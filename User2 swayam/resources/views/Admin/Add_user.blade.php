@extends('layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<!DOCTYPE html>
<html>
<head>
<title>Laravel 10 Example Form Validation</title>
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
<h2>register here</h2>
</div>
<div class="card-body">
<form name="user" id="user" method="post" action="/Users/user" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" id="name" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" id="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror form-control">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror


<div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" id="password" name="password" value="{{ old('password') }}" class="@error('password') is-invalid @enderror form-control" value="{{old('password')}}">
    @error('password')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="exampleInputEmail1">Confirm Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control" value="{{old('password_confirmation')}}">
    @error('password_confirmation')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
</div>

</div>        
<div class="form-group">
<label for="exampleInputEmail1">Age</label>
<input type="number" id="age" name="age" value="{{ old('age') }}" class="@error('age') is-invalid @enderror form-control">
@error('age')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Contact No</label>
<input type="number" id="contact_no" name="contact_no" value="{{ old('contact_no') }}" class="@error('contact_no') is-invalid @enderror form-control">
@error('contact_no')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
<label for="file">Profile pic:</label>
<input type="file" id="file" name="file" class="@error('file') is-invalid @enderror form-control">
@error('file')
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