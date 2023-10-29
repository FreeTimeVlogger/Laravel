<!DOCTYPE html>
<html>
<head>
<title>Laravel 10 Example Form Validation</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<div class="card">
<div class="card-header text-center font-weight-bold">
<h2>register here</h2>
</div>
<div class="card-body">
<form name="employee" id="employee" method="post" action="{{url('edit-form/'.$data->id)}}">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="hidden" name="id" value="{{ $data->id }}">
<input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control" value = "{{$data['name']}}">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control" value = "{{$data['email']}}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror


<div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror form-control"  value = "{{$data['password']}}">
    @error('password')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label for="exampleInputEmail1">Confirm Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control"  value = "{{$data['password']}}">
    @error('password_confirmation')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
</div>

</div>        
<div class="form-group">
<label for="exampleInputEmail1">Age</label>
<input type="number" id="age" name="age" class="@error('age') is-invalid @enderror form-control" value = "{{$data['age']}}">
@error('age')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>        
<div class="form-group">
<label for="exampleInputEmail1">Contact No</label>
<input type="number" id="contact_no" name="contact_no" class="@error('contact_no') is-invalid @enderror form-control" value = "{{$data['contact_no']}}">
@error('contact_no')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>  
</body>
</html>
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror