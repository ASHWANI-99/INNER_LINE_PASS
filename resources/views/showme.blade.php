<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/search') }}" type="GET">
    Application No: <input type="text" name="Application_No">
    <input type="Submit" value="Edit">
       
    </form>
</body>
</html>
