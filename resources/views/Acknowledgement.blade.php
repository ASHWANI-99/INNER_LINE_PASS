<!DOCTYPE html>
<html lang="en">
<style>
.Ack{
    margin: 2px 4rem 2px 2px;
  
    border-bottom-width: 50px;
    border-left-width: 50px;
    border-right-width: 50px;
    border-top-width: 50px;
    border:3px solid black;
    width: 100%;
    height: 50%;
    padding: 4px 8px 2px 20px;
    font-size: 20px;
}
.right{
    float:right;
   
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE/Acknowledgement.css">
    <title>Acknowledgement</title>
</head>
<body>

<div class="Ack">
<div class="Acknowledgement">
   <center><h3 ><u> Acknowledgement</u> </h3></center> 
   <p class> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;This is to acknowledge the receipt <b><u> Re-Issue/Extension </u></b> </p>
   <br>
   <p>
   &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<b><u>of Inner Line Pass</u></b> with Application No. <b><u>{{$applicant->Application_No}}</u></b>   </p>
   <br>
   <p>
   
   &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; dated on<b> <u>{{$applicant->Application_date}}</u></b> to the <b><u> XXXX</u> </b> has been <b><u> SUBMITTED </u></b></p>
 <div> <p>
    <b>Place: Aizawl </b><br>
    <b>Date: {{$applicant->updated_at}}</b><br>
    </p>
    </div>
    <div class="right"> 
    Registering Authority<br>
     Aizawl:Mizoram
    

    </div>
</div>

</div>
</body>
</html>
<button><a href="/page/{{$applicant->id}}"> Download</a></button>
<button><a href="/home"> Back To Home page</a></button>