@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ORDER FOR  {{$pizza->name}}</h1>
    <H2>WITH BASE {{$pizza->base}}  and crust {{$pizza->crust}}</H2>
    <p>toppings</p>
            <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>    
    @endforeach
    </ul>

    <div>
    <form action="/pizza/{{$pizza->id}}" method='post'>
    @csrf
    @method ('DELETE')
    <button>complete it</button>
    </form>
    </div>
         <a href="/pizza"><button>go back</button></a>

</body>
</html>
@endsection