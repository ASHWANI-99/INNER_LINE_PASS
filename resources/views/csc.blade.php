@extends('layouts.ash')

  <style>
  
  .btn1
  {
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  box-shadow: 0 9px #ffe227;
  
  }
  .btn1:active {
  background-color: dark green;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

  
  .btn2
  {
    background-color: orange; 
  border: none;
  color: white;
  padding: 16px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  box-shadow: 0 9px #e45826;
  
  }
  .btn2:active {
  background-color: red;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  
  
  
  .btn3
  {
    background-color: #a7c5eb; 
  border: none;
  color: white;
  padding: 16px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  box-shadow: 0 9px #4a47a3;
  
  }
  .btn3:active {
  background-color: voilet;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


  
  
  </style>

<link rel="shortcut icon" href="img/mseg.ico" type="image/x-icon">
@section('content')
<center> <div class ='grid-container'>
            <div class='item1'> 
            <h2><STRONG>  FILL A NEW FORM </STRONG></h2>
             <BR>
             <a href="/ApplicationForm" ><button  class='btn1'>FILL FORM</button></a> 
             </div> 
            <HR>
            <div class='item2'>
            <H2> <STRONG>SEARCH A SPECIFIC APPLICATION  </STRONG> </H2>
            <BR>
            <a href="/retrieve" ><button class='btn2'>SEARCH</button></a> </div>
            <HR>
          <div class='item2'>
          <H2> <STRONG> CHECK THE LIST OF APPLICATIONS  </STRONG></H2> 
          <BR>
          <a href="/ListOfApplications" ><button class='btn3'>CHECK LIST</button></a> <p> </p></div>
          </div>
               <HR>
             </center>   


             @endsection