<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="padding-top: 10%;">
            <h2>Registration</h2>
            <form method="post" action="{{route('register')}}">
                @csrf
                <div class="form-group">
                    <select name="usertype" id="">
                        <option value="student">Student</option>
                        <option value="donor">Donor</option>
                        {{-- <option value="admin">Admin</option> --}}
                    </select>
                </div>
                <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" placeholder="Enter username" name="username">
                @error('username')
                    {{$message}}
                @enderror
                </div>
                <div class="form-group">
                    <label for="adress">Email address:</label>
                    <input type="text" class="form-control" placeholder="Enter address" name="email">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phonenumber">Phone:</label>
                    <input type="text" class="form-control" placeholder="Enter phone number" name="number">
                    @error('number')
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
                <button type="submit" class="btn btn-primary">Register</button> <br> <br>
            </form>
            <a href="login">Already have an account?</a> |
            <a href="/">Back to Main page</a>
        </div>
    </body>

</html>