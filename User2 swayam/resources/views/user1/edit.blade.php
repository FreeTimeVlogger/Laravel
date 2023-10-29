<body>
  <div class="container mt-4">

</div>

<!----donation box-->
<form action="{{url('update-data/'.$data->id)}}" method="post">
@csrf
  <div>
    <div class="container-container text-center"
      style="background-color: cornsilk; font-family: monospace; color:darkorange">
      <h1 style="font-size: 70px;">General Donation</h1><br>
      <h3>To help the needy people </h3>
    </div>
    <br><br>
    <div class="container">
      <h1 style="color:rgb(11, 186, 58)">Donate now</h1>
       
      <div class="form-floating mb-3">
      <input type="hidden" name="id" value="{{ $data->id }}">
        <input type="text" class="form-control" id="name" name="name" value = "{{$data['name']}}" >
        <label for="floatingInput">name</label>

      </div><br>

      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="amount" name="amount" value = "{{$data['amount']}}" >
        <label for="floatingInput">Amount</label>
 <br><br>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="message" name="message" value = "{{$data['message']}}"   >
        <label for="floatingInput">Enter Message</label>

      </div> <br>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="check" >
        <label class="form-check-label" for="flexCheckDefault">
          Agree terms and conditions
        </label>
  
      </div><br>

      <h2 style="text-align: center;color:rgb(5, 115, 10);text-shadow: 10cm;">submit here</h2><br>

      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit" id="bank">submit/card</button><br><br><br>
       
      </div>
      </div>
</div>
</form>
</body>
</body>
</html>