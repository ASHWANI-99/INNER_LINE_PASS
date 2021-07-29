@extends('layouts.app')
@section("content")

<h1>hello</h1>

{{session('msg')}} <br>
<a href="/create">ORDER A PIZZA</a>

@endsection