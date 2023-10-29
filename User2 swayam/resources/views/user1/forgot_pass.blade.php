<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: rgba(137, 140, 140, 0.586)">
    @if (session('reg'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert"
            style="min-width: 500px; right: 20px; top: 50px; z-index:1; position: absolute;">
            {{ session('reg') }}
        </div> 
        @endif
@if(session('fail')) 

        <script>
            // Automatically close the alert after 5 seconds
            setTimeout(function() {
                $('.alert').alert('close');
            }, 3000);
        </script> 
    @endif

    @if (session('login'))
        <div class="alert lo alert-danger alert-dismissible fade show" role="alert"
            style="min-width: 350px; right: 20px; top: 50px; z-index:1; position: absolute;">
            {{ session('login') }}
        </div> 

        <script>
            // Automatically close the alert after 5 seconds
            setTimeout(function() {
                $('.lo').alert('close');
            }, 3000);
        </script>
    @endif

    @if (session('Active'))
        <div class="alert Active alert-info alert-dismissible fade show" role="alert"
            style="min-width: 350px; right: 20px; top: 50px; z-index:1; position: absolute;">
            {{ session('Active') }}
        </div>

        <script>
            setTimeout(function() {
                $('.Active').alert('close');
            }, 3000);
        </script>
    @endif

    <div style="height: 90vh;width:100%;display:flex;flex-direction: column;justify-content:center;align-items:center;">
        <div
            style="height: 40vh;width:70vh;border:solid 1px black;border-radius:10px;display:flex;flex-direction: column;justify-content:center;align-items:center;">
            <form action="send_forgot_link" method="post">
                @csrf
                <div style="display: flex;flex-direction: column;align-items: center;">
                    <div>
                      
                        <b>Email:</b> <br><input type="email" style="border-radius: 5px;height:30px;width:190px;"
                            required name="em">
                    </div>
                    <div>
                        <button type="Submit"
                            style="background-color: rgb(72, 0, 255);color:white;border-radius:5px;height:40px;width:80px;margin-top:20px;">Submit</button>
                        <button type="Button"
                            style="background-color: rgb(255, 0, 0);color:white;border-radius:5px;height:40px;width:80px;margin-top:20px;">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
