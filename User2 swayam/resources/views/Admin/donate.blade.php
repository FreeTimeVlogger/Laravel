@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<a href="Add_Donation"><button type="button" class="btn btn-secondary">Add New Donation</button> <br></a>
<table style="width: 100%" border="1">
   <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Amount</th>
    <th>Message</th>
    <th colspan="2">Operator</th>
   </tr>
    <tr>
        @foreach ($donates as $donate)
        <td>{{ $donate['id']}}</td>
        <td> {{ $donate['name']}} </td>
        <td> {{ $donate['amount']}} </td>
        <td> {{ $donate['message']}}</td> 
        <td>
        <a href="donate/{{$donate['name']}}/edit">
                <button type="button" class="btn btn-success mt-2 ">Edit</button>
        </a>
        <a href="donate/{{$donate['name']}}/donate_delete">
            <button type="button" class="btn btn-danger mt-2">Delete</button>
        </a>
    </td>

       </tr>
       </tr>
       @endforeach
</table>
@endsection