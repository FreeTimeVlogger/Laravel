@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<a href="before_register"><button type="button" class="btn btn-secondary">Add New User</button> <br></a>
<table style="width: 100%" border="1">
   <tr>
    <th>ID</th>
    <th>Picture</th>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Password</th>
    <th colspan="2">Operator</th>
   </tr>
    <tr>
        @foreach ($users as $user)
        <td>{{ $user['id']}}</td>
        <td><img src="{{ URL::to('/') }}/img/user/{{ $user->profile_pic }}" alt="Admin"
        class="rounded-circle" height="100" width="100"></td>
        {{-- <img src="/img/user{{ $user['profile_pic']}}" alt="" height="100px" width="100px"> </td> --}}
        <td> {{ $user['name']}} </td>
        <td>{{ $user['email']}} </td>
        <td>{{ $user['number']}} </td>
        <td>{{ $user['password']}} </td>
        
       
        <td><a href="Users/{{$user['email']}}/edit" class="btn btn-success">Edit</a>
        <a href="Users/{{$user['email']}}/delete">
        <button type="button" class="btn btn-danger">Delete</button>
        </a>
    </td>
       </tr>
       </tr>
       @endforeach
</table>
@endsection