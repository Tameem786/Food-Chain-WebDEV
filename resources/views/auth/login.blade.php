<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="padding-top: 10%;">
            <h2>LOGIN</h2>
            @if (session('status'))
                {{session('status')}}
            @endif
            <form method="post" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                    <select name="usertype" id="">
                        <option value="student">Student</option>
                        <option value="donor">Donor</option>
                        <option value="admin">Admin</option> 
                    </select>
                </div>
                <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email">
                @error('email')
                    {{$message}}
                @enderror
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password">
                @error('password')
                    {{$message}}
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button> <br> <br>
            </form>
            <a href="register">Don't have an account?</a> |
            <a href="/">Back to Main page</a>
        </div>
    </body>
</html>
