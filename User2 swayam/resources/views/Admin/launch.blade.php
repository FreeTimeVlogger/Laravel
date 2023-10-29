@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<a href="addprograms"><button type="button" class="btn btn-secondary">Program</button> <br></a>
<table style="width: 100%" border="1">
   <tr>
   
    <th>Image</th>
    <th>Program_Name</th>
    <th>Program_Topic</th>
    <th colspan="2">Operator</th>
   </tr>
   <tr>
    @foreach ($aahan as $antima)
    <td><img src="programs_image/{{ $antima['Image']}}" alt="" height="100px" width="100px"> </td>
    <td>  {{ $antima['program_name'] }}</td>
    <td> {{ $antima['program_topic']}} </td>
    <td>
    <a href="">
        <button type="button" class="btn btn-success">Edit</button>
    </a>
    <a href="">
        <button type="button" class="btn btn-danger">Delete</button>
    </a>
    </td>

  

   </tr>
   @endforeach
</table>
@endsection