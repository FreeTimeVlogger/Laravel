@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<a href="/form"><button type="button" class="btn btn-secondary">Add New Product</button> <br></a>
<table style="width: 100%" border="1">
   <tr>
    <th>ID</th>
    <th>Product_Id</th>
    <th>Product_Image</th>
    <th>Product_Name</th>
    <th>Quantity</th>
    <th>Product_price</th>
    <th>Total_price</th>
    <th colspan="2">Operator</th>
   </tr>
    <tr>
        @foreach ($cart as $o)
                        @foreach ($product_detail as $p)
                            @if ($o['id'] == $p['id'])
        <td>1</td>
        <td>33322</td>
        <td><img src="{{ URL::to('/') }}/products_image/{{ $p['Image'] }} alt="" height="100px" width="100px"> </td>
        <td>Healthy_Juice</td>
        <td>4</td>
        <td>Rs 150</td>
        <td>Rs 600</td>
        <a href="">
            <td><button type="button" class="btn btn-success">Edit</button></td>
        </a>
        <a href="">
            <td><button type="button" class="btn btn-danger">Delete</button></td>
        </a>
       </tr>
       @endif
                        @endforeach
                    @endforeach
</table>
@endsection