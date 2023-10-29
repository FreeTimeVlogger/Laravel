<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .con{
        margin-top: 10px;
        width: 40%;
        margin-left: 30%; 
        background-color:rgba(210, 180, 140, 0.292);
        
        padding: 15px;
        border-radius: 20px;
    }
    body{
        background-image: url('img/event_1.jpeg');
        background-size: cover;
        color: white;
    }
</style>

<body>
<div class="con">
    <center><h1 style="color: black" >REGISTRATION</h1></center>

    <form method="POST" action="register">
        @csrf
        <div class="form-group ">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="name">
            <small style="color: red">
                @error('name')
                    {{ $message }}
                @enderror
            </small>
        </div>
    
            <div class="form-group ">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                <small style="color: red">
                    @error('email')
                        {{ $message }}
                    @enderror
                </small>
            </div>


    
        <div class="form-group ">
            <label>password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
            <small style="color: red">
                @error('password')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <div class="form-group ">
            <label>confirm password</label>
            <input type="password" class="form-control" name="confirm_password"
                placeholder="confirm password">
                <small style="color: red">
                    @error('confirm_password')
                        {{ $message }}
                    @enderror
                </small>
        </div>
        {{-- <div class="form-row"> --}}
            <div class="form-group ">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="number">
                <small style="color: red">
                    @error('mobile')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="form-group col-md-3">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="user" selected>user</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Gender</label>
                <select name="gen" class="form-control">
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group ">
                <label>Profile_pic</label>
                <input type="file" class="form-control" name="file" placeholder="Choose Profile">
                <small style="color: red">
                    @error('file')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <center>
                <button type="submit" name="submit" class="btn btn-primary" style="width: 200px">Sign up</button>
            </center>

            
    </form>
</div>

</body>

</html>
