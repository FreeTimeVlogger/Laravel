<?php
session_start();

if (isset($_SESSION['reg_msg'])) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert" id="alertmsg" style="font-size: 20px;">
    <strong>Success </strong> <?php echo $_SESSION['reg_msg']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-size: 30px;">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<script>
    setTimeout("", 5000);
</script>
<?php
    unset($_SESSION['reg_msg']);
}

if (isset($_SESSION['reg_msg_err'])) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertmsg" style="font-size: 20px;">
    <strong>Success! </strong> <?php echo $_SESSION['reg_msg_err']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-size: 30px;">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<script>
    setTimeout("", 5000);
</script>
<?php
    unset($_SESSION['reg_msg_err']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styless.css">
    <!-- <script src="Register.js"></script> -->
    <style type="text/css">
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: black;
        }

        .logo {
            font-size: 50px;
            color: red;
        }

        .logo1 {
            font-size: 30px;
            color: white;
        }

        .logo2 {
            size: 100px;
            color: green;
        }

        .logo1:hover {
            transform: scale(1.3);
            cursor: pointer;
        }

        .logo2:hover {
            transform: scale(1.3);
            cursor: pointer;
        }

        .container0 {
            display: flex;

            flex-direction: row;
            justify-content: space-evenly;
            border-radius: 8px;
            margin: 15px;
            padding: 60px;
            box-shadow: darkgray 3px 5px;
            border: 5px black;
            background-color: rgba(137, 140, 140, 0.586);
            /* background-image: url(contact.jpg);   */
        }

        .div0 {
            flex-basis: 45%;
            /* color: rgb(52, 10, 52); */
            font-weight: 650;
        }

        .div1 {
            flex-basis: 45%;
        }

        textarea {
            margin-top: 10px;
            border-radius: 5px;
            background-color: rgba(183, 180, 180, 0.462);
            border: 0;
            width: 100%;
        }

        p {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .div1 input {
            transition: 1s;
        }

        .div1 input:hover {
            transform: scale(1.077);
        }

        .div1 textarea {
            transition: 1s;
        }

        .div1 textarea:hover {
            transform: scale(1.077);
        }

        .container1 button {
            transition: 1.5s;
        }

        .container1 button:hover {
            transform: 1.1;
            background-color: black;
            color: #fff;
            font-style: bold;
        }

        .div0 h2 {
            transition: 1s;
        }

        .div0 h2:hover {
            transform: scale(1.2);
        }

        .div0 img {
            transition: 1s;
        }

        .div0 img:hover {
            transform: scale(1.2);
        }

        .div0 h3 {
            transition: 1s;
        }

        .div0 h3:hover {
            transform: scale(1.15);
        }

        .div0 p {
            transition: 1s;
        }

        .div0 p:hover {
            transform: scale(1.1);
        }

        @media screen and (max-width: 980px) {
            .container0 {
                /* background-color: blueviolet; */
                display: flex;
                flex-direction: column;
                font-size: 12px;
            }

            .home .nav1 {
                font-size: 10px;
            }
        }
    </style>
</head>
<center>

    <body style="background-color: rgba(137, 140, 140, 0.586);">
      
        <form style="background-color: rgba(137, 140, 140, 0.586); width:40%;height:75vh;margin-top:5%;"
             method="post" enctype="multipart/form-data" action="{{ URL::to('/register_user') }}">
            @csrf
            <h3><u>Register Now</u></h3>

            <div>
                <!-- <label for="email">Full Name:</label> -->
                <input type="text" onfocus=inp(); class="box" placeholder="Enter Name" id="name1"
                    name="name">
                    <br>
                    <small style="color: red">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </small>
                
            </div>
<br>
            <div>
                <!-- <label for="email">Email address:</label> -->
                <input type="text" onfocus=inp(); class="box" placeholder="Enter Email" id="em"
                    name="email" onblur="demo(this)">
                    <small style="color: red">
                        <br>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>
            </div>
            <br>

            <div>
                <!-- <label for="pwd">Password:</label> -->
                <input type="password" onfocus=inp(); class="box" placeholder="Enter Password" id="pwd"
                    name="password">
                    <br>
                    <small style="color: red">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </small>
            </div>
<br>
            <div>
                <!-- <label for="pwd">Confirm Password:</label> -->
                <input type="password" onfocus=inp(); class="box" placeholder="Confirm Password" id="conform_password"
                    name="conform_password">
                    <br>
                    <small style="color: red">
                        @error('conform_password')
                            {{ $message }}
                        @enderror
                    </small>
            </div>
<br>
            <div>
                <!-- <label for="pwd">Mobile Number:</label> -->
                <input type="text" onfocus=inp(); class="box" placeholder="Enter Mobile Number" id="mob1"
                    name="mobile">
                    <br>
                    <small style="color: red">
                        @error('mobile')
                            {{ $message }}
                        @enderror
                    </small>
            </div>
            <br>
            <div>
                <!-- <label for="email">Gender</label><br> -->
                <!-- <input class="" type="radio" name="gen" value="M"> Male &nbsp;&nbsp; <input class="" type="radio"
                    name="gen" value="F"> Female -->
                <select name="gen" id="" class="box" style="width:20%;">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            
            <div class="form-group">
                <!-- <label for="email">Role</label><br> -->
                <!-- <input class="" type="radio" name="role" value="User" checked> User
                &nbsp;&nbsp;
                <input class="" type="radio" name="role" value="Admin"> Admin -->
                <select name="role" id="" style="width:20%;" class="box">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>

            <input type="submit" style="width:20%;" class="delete-btnn" value="Submit" name="register-btn" />
            <a href="/login">
                <p style="color:black">Already have an account ?</p>
            </a>
        </form>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>
</center>


</html>
