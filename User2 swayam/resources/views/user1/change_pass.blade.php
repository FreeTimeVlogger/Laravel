<!DOCTYPE html>
<html lang="en">
<title>Forget Password</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.147.0/three.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>

<body>
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


    <main>

        @if (session('forget'))
            <div class="alert forget alert-warning alert-dismissible fade show" role="alert"
                style="min-width: 350px; right: 20px; top: 50px; z-index:1; position: absolute;">
                {{ session('forget') }}
            </div>

            <script>
                // Automatically close the alert after 5 seconds
                setTimeout(function() {
                    $('.forget').alert('close');
                }, 3000);
            </script>
        @endif
        <div style="width:100%;display:flex;flex-direction:row;justify-content:center;align-content:center;">
            <div class="row card1" style="width: 40%;background-color:  rgba(137, 140, 140, 0.586);margin-top:10%;">
                <div class="col-12 card2">
                    <center>
                        <h1>Change Password</h1>
                    </center>
                    <br>
                    <form method="get" action="{{URL::to('/')}}/change_forget_password">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="pwd" placeholder="New Password" id="em1"
                                    class="form-control">
                            </div>
                            @error('pwd')
                                <small style="color: red">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
    
                        <div class="row">
                            <div class="col">
                                <input type="text" name="cpwd" placeholder="Enter Same password as above" id="em1"
                                    class="form-control">
                            </div>
                            @error('cpwd')
                                <small style="color: red">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
    
                        <input type="text" name="email" id="" value="{{substr(strrchr(url()->current(),'/'),1)}}" hidden>
    
                        <div class="row" style="text-align:center;">
                            <div class="col">
                                <input type="submit" value="Submit" name="btn-login" class="login">
    
                                <input type="reset" value="Reset" name="btn-message" class="reset">
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        
    </main>


    <!-- Main End -->
</body>

</html>
