<?php
// include_once("../project-1/connect_db.php");
// session_start();

if (isset($_SESSION['uname']) && isset($_SESSION['password']) && isset($_SESSION['role'])) {
    // $_SESSION['Activation_err'] = "Please Login First";
    // header("location:../s_web/user_login.php");
    if ($_SESSION['role'] == "Admin") {
?>
<script>
    window.location = "#";
</script>
<?php
    }
    if ($_SESSION['role'] == "User") {
    ?>
<script>
    window.location = "#";
</script>
<?php
    }
}

if (isset($_SESSION['Activation_succ'])) {
    ?>
<div class="alert alert-success alert-dismissible fade show" role="alert" id="alertmsg" style="font-size: 20px;">
    <strong>Hey!</strong> <?php echo $_SESSION['Activation_succ']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-size: 30px;">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<script>
    setTimeout("", 5000);
</script>
<?php
    unset($_SESSION['Activation_succ']);
}

if (isset($_SESSION['Activation_err'])) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertmsg" style="font-size: 20px;">
    <strong>Sorry!</strong> <?php echo $_SESSION['Activation_err']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="font-size: 30px;">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<script>
    setTimeout("", 5000);
</script>
<?php
    unset($_SESSION['Activation_err']);
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
    <script src="Register.js"></script>
    <!-- <style type="text/css"> -->
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

        <form style="background-color: rgba(137, 140, 140, 0.586); width:20%;height:50vh;margin-top:5%;" method="post" action="check_login">
            <h3><u>Login Now</u></h3>

            <div>
                <!-- <label for="email">Email address:</label> -->
                <input type="text" class="box" placeholder="Enter Email" name="Email" onblur="demo(this)">
                <small style="color: red">
                    @error('Email')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <br>
            <div>
                <!-- <label for="pwd">Password:</label> -->
                <input type="password" class="box" placeholder="Enter Password" name="password">   

                <small style="color: red">
                    @error('password')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <br>
            <input type="submit" class="delete-btnn" style="color:fff" value="Submit" name="login" />

            <a href="/form">
                <p style="color:#000;">New User ?</p>
            </a>
            <a href="/">
                <p style="color:#000;">Return Back</p>
            </a>
            <a href="/forget">
                <p style="color:#000;">Forgot Password ?</p>
            </a>
            <!-- <a href="/form">
                <p style="color:#000;">Send activation link ?</p>
            </a> -->
        </form>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

    </body>
</center>

</html>

<?php
if (isset($_POST['login'])) {
    $mail = @$_POST['mail'];
    $pass = @$_POST['pass'];
    // echo $mail;
    // echo $pass;
    $q = "select * from registration where Email='$mail' and Password='$pass'";
   
    $data = mysqli_query($con, $q);
    $count = mysqli_num_rows($data);

    if ($count == 1) {
        $fetch = mysqli_fetch_array($data);
        $uid = $fetch['id'];
        $role = $fetch['Role'];
        $status = $fetch['Status'];

        if ($status == "Active") {
            $_SESSION['uname'] = $mail;
            $_SESSION['password'] = $pass;
            $_SESSION['role'] = $role;
            $_SESSION['uid'] = $uid;

            if ($role == "Admin") {
                // $_SESSION['log_msg_succ'] = "Logged in successfully.";
?>
<script>
    alert("Login Successful");
    window.location.href = "../project-1/Home1.php";
</script>
<?php
            } else if ($role == "User") {
                // $_SESSION['log_msg_succ'] = "Logged in successfully.";
            ?>
<script>
    alert("Login Successful");
    window.location.href = "Home1.php";
</script>
<?php
            }
        } elseif ($status == "Deleted") {
            // $_SESSION['Activation_err'] = "Your account is deleted. Please reactivate first.";
            ?>
<script>
    alert("Your account is not activated.");
    window.location.href = "user_login.php";
</script>
<?php
        } else {
            // $_SESSION['Activation_err'] = "Your account is not activated. Please acivate first.";
        ?>
<script>
    alert("Your account is not activated.");
    window.location.href = "user_login.php";
</script>
<?php
        }
    } else {
        // $_SESSION['Activation_err'] = "Incorrect Email or Password.";
        ?>
<script>
    alert("Incorrect Email or Password");
    window.location.href = "login.php";
</script>
<?php
    }
}
?>
