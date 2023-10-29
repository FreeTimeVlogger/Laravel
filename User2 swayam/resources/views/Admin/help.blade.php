@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<a href="#"><button type="button" class="btn btn-secondary">Help</button> <br></a>
<table style="width: 100%" border="1">
   <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Number</th>
    <th>Email</th>
    <th>What Issues</th>
    <th>Additional Message</th>
    <th colspan="4">Operator</th>
   </tr>
    <tr>
        <td>1</td>
        <td>Krishnu Dai</td>
        <td>9825244773</td>
        <td>aliaahan31@gmail.com</td>
        <td>Orphan Child</td>
        <td>A child who wandering <br> in our society.</td>

        <a href="/edit">
            <td><button type="button" class="btn btn-success">Edit</button></td>
        </a>
        <a href="">
            <td><button type="button" class="btn btn-danger">Delete</button></td>
        </a>
       </tr>
       </tr>
</table>
@endsection