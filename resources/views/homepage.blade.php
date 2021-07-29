<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNER LINE PASS</title>
    <style>
body{
  background-color:#f9f9f9 !important;
    margin:0;
        padding:0;
}
    
    .top_line{
        border-top: 15px solid #cff6cf;
        width:auto;
        margin:0;
        padding:0;
       

    }

    .nav_pic{
       background-color: #b8b5ff;
        margin:0;
        padding:0;
    }
    .h{
        margin:0;
    }
    .C{
        margin :8px,0px,0px,0px;
    }
    .msegs{
        background-color:#b8b5ff !important;    }
        .navbar-brand{
            background-color:# #7868e6 !important; 
        }



        .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; // remove the gap so it doesn't close
 }
 .N_T
 {
     margin:0;
     padding:0;
 }
 .mySlides {display:none;
 height: 300px;
 }
 .search{
     /* background-color:#f42; */
 }
 .fit{
   float:right!important;
   height:300px;
   
    margin:0;
    padding:0;
    
 }
 footer{
   background-color:#b4aee8;
  padding:0;
  margin:0;
 }
 .jj{
  height: 20px; 
   background: white; 
 }

    </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="shortcut icon" href="img/mseg.ico" type="image/x-icon">
</head>
<body>
  <!-- top line -->
    <div class="top_line"></div>
        <!-- header -->
    <div class="nav_pic" class="jumbotron text-center" >
    <center>
  <div>  <span><img src="https://msegs.mizoram.gov.in/uploads/attachments/1bb87d41d15fe27b500a4bfcde01bb0e/logo.png" class="msegs" alt="m" width="100" height="100" margin-right="0"> </span></div>
   
     <span><h1 class="h">INNER LINE PASS</h1></span>
    <p class="C">(A Government of Mizoram undertaking)</p></center>
  
    </div>
    <!--  NAVBAR-->
    <nav class ="N_T" class="navbar navbar-light fixed"  style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="/homepage">
    <img src="img/mseg logo.jpg" width="30" height="30"   alt="msegs">
  </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/homepage"><span class="glyphicon glyphicon-home"> </span> HOME</i></a></li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">  About Mizoram <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color: #e3f2fd;" >
          <li><a href="https://mizoram.nic.in/about/glance.htm">At a Glance</a></li>
          <li><a href="https://mizoram.nic.in/about/people.htm">People</a></li>
          <li><a href="https://mizoram.nic.in/about/history.htm">History</a></li>
          <li><a href="https://mizoram.nic.in/about/custom.htm">Custom</a></li>
          <li><a href="https://mizoram.nic.in/about/dances.htm">Dances</a></li>
          <li><a href="https://mizoram.nic.in/about/physiography.htm">Physiography</a></li>    
        </ul>
      </li>

      <li><a href="https://mizoram.nic.in/more/howto.htm">How to reach Mizoram</a></li>
      <li><a href="https://mizoram.nic.in/more/houses.htm">Mizoram Houses</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<!-- FIRST CONTAINER -->

<br>
<br>
<div class="container-fluid  p-3 my-3 border">
<div class="container-fluid col-lg-7" style="max-width:100%"  height="400px"!important  >
 
 
 <img class="mySlides " src="img/self.jpeg" style="width:100%">
 <img class="mySlides " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyiH6_IpX8svl4RsvTnxscuPFRFfeY7VPhJA&usqp=CAU" style="width:100%">
 <img class="mySlides " src="img/hostel.jpeg" style="width:100%">
 <img class="mySlides " src="https://www.cmsholidays.com/sites/default/files/styles/gallery_display/public/img/tour/domestic/gallery/Mizoram-NEET-Counselling.jpg?itok=e5VkMY9W" style="width:100%">
 <img class="mySlides " src="https://urbanepistemologycom.files.wordpress.com/2018/08/aizawl.jpg?w=1000" style="width:100%">
     
     </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
 var i;
 var x = document.getElementsByClassName("mySlides");
 for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";  
 }
 myIndex++;
 if (myIndex > x.length) {myIndex = 1}     
 x[myIndex-1].style.display = "block";  
 setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<div class="container-fluid col-lg-5" >
<div class="search">
        <h2>Check Your ILP Status</h2>
        <form action="/check" method="get">
        
             <input type="text" placeholder="Application No." name="ApplicationNo"class="search">
             <button type="Submit" class="btn btn-info">Search</button>
             <br>
             <br>
             @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
             @elseif (Session::has('msg'))
                <p class="alert alert-danger">{{ Session::get('msg') }}</p>
             @elseif(Session::has('pending'))
                <p class="alert alert-warning">{{ Session::get('pending') }}</p>
        
                @endif
        </form>
        </div>
        </div>
</div>
<hr class="jj">


        <div class ="fit">
                       
                                      <img src="img/process flow.jpg" alt="img" class="img-responsive" alt="Responsive image" style=" background-color:black; float-right "!important >
                                   
                  </div>

<hr>
<br>
<hr>
<br>
<hr>
<br>
<hr>
<br>
<hr>
<br>
<hr>
<br>
<hr>
<br>  
<br>
    </div>
    <hr class="jj">
    <div class="container-fluid col-lg-10 p-3 my-3 border">


   <h2>INNER LINE PASS For MIZORAM</h2>
        <h3> Entry Formalities for Domestic Tourists :</h3>
        
        Inner Line Pass is required for entry into Mizoram and can be obtained from Liaison Officer, Government of Mizoram from the following cities- Kolkata, Silchar, Shillong, Guwahati and New Delhi. Government employees travelling for official purposes are exempted from obtaining ILP but are required to carry a photo identification card with them at all times. <br>
        
        Tourists arriving by air can obtain passes from the Security Officer on arrival at Lengpui Airport, Aizawl. <br>
        
        <b>Two types of ILP can be issued :</b>  <br>
        
        1.<u> <b>Temporary</b> </u>: 15 days at a time which can be renewed once for another 15 days. <br>
        
        Fees to be paid : <br>
        
        Rs.20 Application Form <br>
        Rs.100 Processing Fee <br>
        Rs.20 Renewal Fee <br>
        Requirements : 4 passport size photo and a photo ID (Driving License/Voter ID/Department ID) <br>
        
        2. <u> <b>Regular</u> </b>: 6 months at a time which can be renewed twice for another 6 months each. However, sponsorship from a local resident or a Government Department is required. <br>
        
        <b>Fees to be paid :</b> <br>
        
        Rs.20 Application Form <br>
        Rs.200 Processing Fee <br>
        Rs.100 Renewal Fee <br>
        <b>Requirements :</b> 4 passport size photo and a photo ID , 2 passport size photo of the sponsor <br>
        
        <i>* Renewal for both Temporary and Regular ILP can be done at District Commissioner’s Office located at Treasury Square, Aizawl <br>
        
        * For tourists originating from Cachar, Hailakandi and Karimganj Districts of Assam State, Electoral Roll details are required due to porous international boundary with Bangladesh and so is the case with persons coming from the state of Tripura. <br>
        
        * Tourists entering from Bairabi and Vairengte can obtain ILP from Sub-Deputy Commissioner, Bairabi and Sub-Divisional Officer Vairengte respectively. <br>
        
        * ILP cannot be issued at Check gates upon entering the State. </i><br>
        
        <br>
        <h3><b>Foreign Tourists : </b></h3>
        
        All foreign nationals have to register themselves at the office of Superintendent of Police (CID/SB) Mizoram who is the designated Foreigners Registration Officer (FRO) of the State within 24 hours of arrival. <br>
        
        Citizens of Afghanistan, China and Pakistan and foreign nationals having their origin in these countries would continue to require prior approval of the Ministry of Home Affairs before entering the state. <br>
        <br>
        <b> The addresses of Mizoram House:</b>
        <table class="table table-striped" style='width:100%'>
          <thead >
            <tr>
              <th >S no.</th>
              <th >Place</th>
              <th >Address</th>
              <th >Contact Information</th>
            </tr>
          </thead>
          <tbody >
            <tr >
              <th scope="row" >1</th>
              <td>At Lengpui Airport</td>
              <td>Officer in charge Anti Hijacking Security Civil Aerodrome ,Lengpui</td>
              <td>Phone(R C):011-23016408(O)
                          25675166 (R)</td>
            </tr>
            <tr >
              <th scope="row" >2</th>
              <td>At Shillong</td>
              <td>Liaison Officer Government of Mizoram ,Nongrim Hills, Shillong</td>
              <td>Ph : 0364-2230149(O) 2225058(R)</td>
            </tr>
            <tr >
              <th scope="row" >3</th>
              <td>At Guwahati</td>
              <td>Liaison Officer MIZORAM HOUSE ,Christian Basti. ,G.S.Road ,Guwahati - 781 005</td>
              <td>Ph: 0361- 2529 448 Reception : 529 411 Fax:  2529448</td>
            </tr>
            <tr >
              <th scope="row" >4</th>
              <td>At Silchar</td>
              <td>Liaison Officer, Mizoram Run,Sonai Road, Silchar -788 005</td>
              <td>Ph No: 03842-25655(O), 25419 (R of LO)</td>
            </tr>
            <tr >
              <th scope="row" >5</th>
              <td>At Kolkota</td>
              <td>Liaison Officer, Government of Mizoram, Mizoram House; 24, Old Ballygunge Road, Calcutta, 700 019</td>
              <td>Phone: 033-4756430/4757887/4757064, Fax: 033-4757034</td>
            </tr>
            <tr >
              <th scope="row" >6</th>
              <td>At New. Delhi</td>
              <td>Resident Commissioner, Government of Mizoram, MIZORAM HOUSE, Circular Road, Chankyapuri, New Delhi 110 021</td>
              <td>Ph(R.C):011-3016408(O) 6440954 (R) (Dy R.C.) - 3010548 ,Reception: 3016101, PABX: 3012331, Fax : 011-3012331</td>
            </tr>
          </tbody>
        </table>

   </div>
   
   <div class="container-fluid col-lg-2 p-3 my-3 border">

   <hr><br><hr> <br><hr><br><hr><hr> <br><hr><br><hr> <br><hr><br><hr><hr><br><hr> <br><hr><br><hr><hr> <br><hr><br><hr> <br><hr><br><hr><hr><br><hr> <br><hr>
   </div>
   <hr><hr><hr><br><br><br><br>
   
   </body>
   <hr class="jj">
   <div class="container-fluid  col-lg-12 p-3 my-3 border" style="margin:0; padding:0; text-color:red; ! important">
   <footer class="footer">
   <div class="test">
    <Center> <br> <strong> Ministry of Communication & Information Technology <br>
    National Informatics Centre, Mizoram State Centre <br>
    Room No 109, Block C, Mizoram Secretariat , Aizawl - 796001 </strong> <br> <br></Center>
    </footer>
    </div>
<br><br><br>


</html>