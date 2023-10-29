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
        <script type="text/javascript">
            function validate123() {
                //alert("welcome to js");
                var fn = document.getElementById('name1').value;
                var email = document.getElementById('em').value;
                var pwd = document.getElementById('pwd').value;
                var pwd1 = document.getElementById('cpwd').value;
                var no = document.getElementById('mob1').value;
                //alert("welcome to js");
                if (fn == "") {
                    //alert("error");
                    document.getElementById('fn1').innerHTML = "Full name field cannot be empty";
                    document.getElementById('fn1').style.color = "red";
                    document.getElementById('name1').style.borderColor = "red";
                    var vfn = false;
                } else {
                    var fn123 = /^[a-zA-Z ]*$/;
                    // alert ("demooooooooooo");
                    // alert(e);
                    if (fn123.test(fn)) {
                        document.getElementById('name1').focus();
                        document.getElementById('fn1').innerHTML = "Full name must contain only letters";

                        // alert ("demooooooooooo");
                        document.getElementById('fn1').style.color = "red";
                        document.getElementById('name1').style.borderColor = "red";
                        var vfn = false;
                    } else {
                        document.getElementById('fn1').innerHTML = "";
                        document.getElementById('name1').style.borderColor = "green";
                        var vfn = true;
                    }
                }
                if (email == "") {
                    document.getElementById('mail1').innerHTML = "Email Address field cannot be empty";
                    document.getElementById('mail1').style.color = "red";
                    document.getElementById('em').style.borderColor = "red";
                    var vemail = false;
                } else {
                    var em = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
                    if (em.test(email)) {
                        document.getElementById('em').focus();
                        document.getElementById('mail1').innerHTML = "Invalid Email address Please Enter Valid Email Address";
                        document.getElementById('mail1').style.color = "red";
                        document.getElementById('ema').style.borderColor = "red";
                        var vemail = false;
                    } else {
                        document.getElementById('mail1').innerHTML = "";
                        document.getElementById('em').style.borderColor = "green";
                        var vemail = true;
                    }
                }
                if (no == "") {
                    document.getElementById('mno').innerHTML = "Mobile  number cannot be empty";
                    document.getElementById('mno').style.color = "red";
                    document.getElementById('mob1').style.borderColor = "red";
                    var vno = false;
                } else {
                    var mn = /^[0-9]{10}$/;
                    var b = mn.test(no);
                    if (b == false) {
                        document.getElementById('mob1').focus();
                        document.getElementById('mno').innerHTML = "Invalid Mobile Number Please Enter Valid Mobile Number";
                        document.getElementById('mno').style.color = "red";
                        document.getElementById('mob1').style.borderColor = "red";
                        var vno = false;
                    } else {

                        document.getElementById('mno').innerHTML = "";
                        document.getElementById('mob1').style.borderColor = "green";
                        var vno = true;
                    }
                }
                if (pwd == "") {
                    document.getElementById('passw').innerHTML = "Password field cannot be empty";
                    document.getElementById('passw').style.color = "red";
                    document.getElementById('pwd').style.borderColor = "red";
                    var vpwd = false;
                } else {
                    re = /[0-9]/;
                    re1 = /[a-z]/;
                    re2 = /[A-Z]/;
                    re3 = /[!@#\$%\^\&*+=._-]/;
                    var a1 = pwd.length < 6;
                    var a2 = pwd.length > 15;
                    var a3 = re.test(pwd);
                    var a4 = re1.test(pwd);
                    var a5 = re2.test(pwd);
                    var a6 = re3.test(pwd);
                    if (a1 == true || (a2 == true) || (a3 == false) || (a4 == false) || (a5 == false) || (a6 == false)) {
                        document.getElementById('pass').focus();
                        var msgpwd =
                            "Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character";
                        document.getElementById('passw').innerHTML = msgpwd;
                        document.getElementById('passw').style.color = "red";
                        document.getElementById('pwd').style.borderColor = "red";
                        alert("hello");
                        var vpwd = false;
                        // alert(vpwd);
                    } else {
                        var msgpwd = "";
                        document.getElementById('passw').innerHTML = msgpwd;
                        document.getElementById('pwd').style.borderColor = "green";
                        var vpwd = true;
                    }
                }
                if (pwd1 == "") {
                    document.getElementById('passw1').innerHTML = "Confirm Password field cannot be empty";
                    document.getElementById('passw1').style.color = "red";
                    document.getElementById('cpwd').style.borderColor = "red";
                    var vpwd1 = false;
                } else {
                    if (pwd1 != pwd) {
                        document.getElementById('cpwd').focus();
                        document.getElementById('passw1').innerHTML = "Password and Confirm Password must be same";
                        document.getElementById('passw1').style.color = "red";
                        document.getElementById('cpwd').style.borderColor = "red";
                        var vpwd1 = false;
                    } else {
                        document.getElementById('passw1').innerHTML = "";
                        document.getElementById('cpwd').style.borderColor = "green";
                        var vpwd1 = true;
                    }
                }

                if (vemail == false || vno == false || vpwd == false || vpwd1 == false || vfn == false) {
                    return false;
                } else {
                    return true;
                }
            }
        </script>
        <form style="background-color: rgba(137, 140, 140, 0.586); width:40%;height:75vh;margin-top:5%;"
            onSubmit="return(validate123());" method="post" enctype="multipart/form-data" action="">
            <h3><u>Register Now</u></h3>

            <div>
                <!-- <label for="email">Full Name:</label> -->
                <input type="text" onfocus=inp(); class="box" placeholder="Enter Name" id="name1"
                    name="name">
                <p id="fn1"></p>
            </div>

            <div>
                <!-- <label for="email">Email address:</label> -->
                <input type="text" onfocus=inp(); class="box" placeholder="Enter Email" id="em"
                    name="mail" onblur="demo(this)">
                <p id="mail1"></p>
            </div>

            <div>
                <!-- <label for="pwd">Password:</label> -->
                <input type="password" onfocus=inp(); class="box" placeholder="Enter Password" id="pwd"
                    name="pass">
                <p id="passw"></p>
            </div>

            <div>
                <!-- <label for="pwd">Confirm Password:</label> -->
                <input type="password" onfocus=inp(); class="box" placeholder="Confirm Password" id="cpwd"
                    name="cpass">
                <p id="passw1"></p>
            </div>

            <div>
                <!-- <label for="pwd">Mobile Number:</label> -->
                <input type="text" onfocus=inp(); class="box" placeholder="Enter Mobile Number" id="mob1"
                    name="mob">
                <p id="mno"> </p>
            </div>
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
