<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORm action='/welcome' method='post'>
    @csrf
    name: <input type="text" name="naam"> 
    age: <input type="number" name='umar'>
    <input type="Submit" value="go">   
    
    
    
    </FORm>
</body>
</html>