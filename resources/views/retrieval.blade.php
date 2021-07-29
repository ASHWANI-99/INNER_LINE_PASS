@extends('layouts.ash')
<link rel="shortcut icon" href="img/mseg.ico" type="image/x-icon">

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEACH APPLICANT NAME</title>
   
</head>
<body>
                  <center>
                  <h1>  VERIFICATION  </h1>
                  <BR>
                  <BR>
                  <img src="/img/captcha.jpg" alt="captcha">
                  <BR>
                  <BR>
                  <BR>
                  <form action="{{ url('/autofill') }}" method="get">
  @csrf
    <input type="search" name="autofill" placeholder="Search Applicant">
    <button type="submit" class="btn btn-primary">proceed</button>
    </form> 
                  </center>
</body>
</html>
@endsection