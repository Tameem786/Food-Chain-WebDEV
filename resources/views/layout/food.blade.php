<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/food.css')}}">
    <title>Document</title>
</head>
<body>
    @if ($foods->count())
        @foreach ($foods as $food)
            <div class="flex-container">
                <div>
                    <h1>Food Details</h1>
                    <ul>
                        <li>Food Type: {{$food->type}}</li>
                        <li>Food Quantity: {{$food->quantity}}</li>
                        <li>Food Details: {{$food->description}}</li>
                    </ul>
                    @if (auth()->user()->type == 'admin')
                    <form method="POST" action="/delete/{{ $food->id }}">
                        @method('DELETE')
                        @csrf
                            <button type="submit" class="button">Delete</button>
                    </form>
                    @else
                        <a href="book">Get it Now</a>
                    @endif
                </div>
            </div>     
        @endforeach
    @endif
    
			

</body>
</html>