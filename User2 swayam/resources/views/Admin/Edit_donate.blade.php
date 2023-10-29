@extends('admin_layouts.masterView')
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
<h2>Edit Donate</h2>
</div>
<div class="card-body">
<form name="donate" id="donate" method="post" action="donate/{{$donate['name']}}/donate_update" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" id="name" name="name" value="{{ old('name',$donate['name']) }}" class="@error('name') is-invalid @enderror form-control">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Amount</label>
<input type="number" id="amount" name="amount" value="{{ old('amount',$donate['amount']) }}" readonly class="@error('amount') is-invalid @enderror form-control">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror


<div class="form-group">
    <label for="exampleInputEmail1">Message</label>
    <input type="text" id="message" name="message" value="{{ old('message',$donate['message']) }}" class="@error('messsage') is-invalid @enderror form-control" value="{{old('password')}}">
    @error('password')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
</div>        




<button type="submit" class="btn btn-primary">Update</button><br><br>
</form>
</div>
</div>
</div>  
</body>
</html>

@endsection