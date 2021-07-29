<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asdasd</title>
</head>
<body>
    <h2>
        Dummy
    </h2>

    {{ session('mssg') }}



    <form action="/dummy" method="POST">
    @csrf

    <label for="school">School name</label>
    <input type="text" id="school" name="school">


    <label for="phoneno">Phone no</label>
    <input type="text" id="phoneno" name="phoneno">

    <input type="submit" value="submit">

</form>
</body>
</html>