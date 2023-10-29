<h2>donation data </h2>


<table border="1">
<tr style="font-size:x-large;background-color:aquamarine"> 
    <td>id</td>
    <td>name</td>
     <td>amount</td>
     <td>message</td>
     <td>operations</td>
    

  </tr>

  @foreach($record1 as $data)
  <tr style="background-color:beige"> 
    <td>{{$data['id']}}</td>
    <td>{{$data['name']}}</td>
     <td>{{$data['amount']}}</td>
     <td>{{$data['message']}}</td>
     <td>
        <button class="btn btn-danger">
        <a href="/edit/{{ $data->id }}">Edit</a>  
        </button>
        
        
        <button   class="btn btn-danger">
        
<a href="{{ route('donates.delete',$data->id) }}" 
 
   onclick="return confirm('Are you sure want to delete this record?')">Delete</a></button>
    </td>

  </tr>

  @endforeach

</table>
<br>
<br>
<button style="background-color:darkcyan"><h2><a href="/records">Back</a></h2></button>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: aquamarine;
        font-size: x-large;
    }

    tr:nth-child(even) {
        background-color: beige;
    }

    .btn {
        padding: 5px;
        margin: 3px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: medium;
        color: white;
    }

    .btn-danger {
        background-color: red;
    }

    .btn-danger:hover {
        background-color: darkred;
    }

    a {
        color: white;
        text-decoration: none;
    }
</style>