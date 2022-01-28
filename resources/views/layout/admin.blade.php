<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (auth()->user() and auth()->user()->type == 'admin')
        
    <div>
        <h2>User List</h2>
        <iframe src="users" frameborder="1" width="100%"></iframe>
    </div>

    <div>
        <h2>Donation List</h2>
        <iframe src="food" frameborder="1" width="100%"></iframe>
    </div>

    <div>
        <form action="logout" method="get">
            <button type="submit">Logout</button>
        </form>
    </div>
    @else
        <h2>Access Denied !</h2>
    @endif
</body>
</html>