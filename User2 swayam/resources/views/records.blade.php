




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Records</title>
</head>
<style>
table{
  font-size:x-large;
  
}


</style>
<body>
  
<h1>Data</h1> 

<h3 style="text-align:right;"><a href="{{('logout')}}"><button style="width: 100px; height: 50px; background-color:firebrick; font-size:x-large;color:azure">logout</button></a></h3>

<h1 style="background-color:aqua;font-size:xx-large;text-align:center">registered data</h1>
<center>
  <table border="1" style="text-align:center" >
    <tr style="font-size:x-large;background-color:aquamarine"> 
    <td>Id</td>
      <td>name</td>
       <td>email</td>
       <td>password</td>
       <td>age</td>
       <td>contact_no</td>
       <td>operations</td>

    </tr>

    @foreach($record as $data)
    <tr style="background-color:beige"> 
    <td>{{$data['id']}}</td>
      <td>{{$data['name']}}</td>
       <td>{{$data['email']}}</td>
       <td>{{$data['password']}}</td>
       <td>{{$data['age']}}</td>
       <td>{{$data['contact_no']}}</td>
       <td><button style="font-size:large">
       <a href="/editform/{{ $data->id }}">Edit</a> </button> 
        <button style="font-size:large">
        
<a href="{{ route('employees.delete',$data->id) }}" 
   class="btn btn-danger"
   onclick="return confirm('Are you sure want to delete this record?')">Delete</a></button>
    </td>

       </td>

    </tr>

    @endforeach


  </table>
</center>
  

<br>
<br>


<h2 style="background-color:blanchedalmond;text-align:center">donation details</h2>
<h1 style="text-align:center">
  <a href="{{url('/drecords')}}">click here to see the donation records</a>
</h1>
<body>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

   
    </style>
</body>
</body>
</html>