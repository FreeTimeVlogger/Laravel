@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<a href="addcontacts"><button type="button" class="btn btn-secondary">Help</button> <br></a>
<table style="width: 100%" border="1">
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Subject</th>
    <th>Additional Message</th>
    <th colspan="4">Operator</th>
   </tr>
    <tr>
       @foreach ($contacts as $contact)
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->mobile }}</td>
        <td>{{ $contact->subject }}</td>
        <td>{{ $contact->message }}<br> </td>

        <a href="/edit">
            <td><button type="button" class="btn btn-success">Edit</button></td>
        </a>
        <a href="">
            <td><button type="button" class="btn btn-danger">Delete</button></td>
        </a>
       </tr>
       </tr>
       @endforeach
</table>
@endsection