@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')

<!DOCTYPE html>
<html>
<head>
<title>Product Form</title>
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
<h2>Add Program</h2>
</div>

<div class="card-body">
<form name="product" id="product" method="post" action="/addprogram/store" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Program Text</label>
<input type="" id="program_name" name="program_name" value="{{ old('program_name') }}" class="@error('program_name') is-invalid @enderror form-control">
@error('program_name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Program Topic</label>
<input type="text" id="program_topic" name="program_topic" value="{{ old('program_topic') }}" class="@error('price') is-invalid @enderror form-control">
@error('program_topic')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
<div class="form-group">
<label for="file">Choose File:</label>
<input type="file" id="file" name="file" class="@error('file') is-invalid @enderror form-control">
@error('file')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>


<button type="submit" class="btn btn-primary">Add</button><br><br>

</form>
</div>
</div>
</div>  
</body>
</html>
@endsection