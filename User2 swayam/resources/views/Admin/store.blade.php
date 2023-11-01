@extends('admin_layouts.masterView')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('body')
<a href="product"><button type="button" class="btn btn-secondary">Add New Product</button> <br></a>
<table style="width: 100%" border="1">
   <tr>
    <th>ID</th>
    
    <th>Product_Name</th>
    <th>Product_price</th>
    <th>Product_Image</th>
    <th colspan="2">Operator</th>
   </tr>
    <tr>
        @foreach ($products as $product)
        <td> {{ $product['id']}} </td>
        <td>  {{ $product['Product_Name'] }}</td>
        <td> {{ $product['Price']}} </td>
        <td><img src="products_image/{{ $product['Image']}}" alt="" height="100px" width="100px"> </td>
        <td>
        <a href="products/{{$product['id']}}/edit">
            <button type="button" class="btn btn-success">Edit</button>
        </a>
        <a href="products/{{$product['id']}}/delete">
            <button type="button" class="btn btn-danger">Delete</button>
        </a>
        </td>

      
    
       </tr>
       @endforeach
</table>
@endsection