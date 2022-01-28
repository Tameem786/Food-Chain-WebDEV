
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>index</title>
</head>
<body>
    <div class="flex-container">
        @if (auth()->user())
            <div><a href="logout">Logout</a></div>
            @if (auth()->user()->type == 'donor')
                <div><a href="donation">Donate Food</a></div>
            @endif
            @if (auth()->user()->type == 'student')
                <div><a href="food">Food Reggistration</a></div>
            @endif
            <div><a href="profile">My Profile</a></div>
        @else
            <div><a href="login">Login</a></div>
            <div><a href="register">Register</a></div>
        @endif
        <div><a href="contact">Contact Us</a></div>
        <div><a href="">Home</a></div>
    </div>
    <div class="banner">
        <p class="header">WELCOME TO THE FOOD CHARITY</p>
        <p class="para">UTM Food Charity is a program to support those who inside the UTM campus by giving the donated food to them. Since UTM is on lockdown</p>
        @if (!auth()->user())
            <button type="button" class="btn btn-primary" onclick="document.location='donation'">DONATE FOOD</button>
            <button type="button" class="btn btn-success" onclick="document.location='food'">Find Food</button>
        @else 
            @if (auth()->user()->type == 'donor')
                <button type="button" class="btn btn-primary" onclick="document.location='donation'">DONATE FOOD</button>
            @else
                <button type="button" class="btn btn-success" onclick="document.location='food'">Find Food</button>
            @endif
        @endif
    </div>

</body>
</html>