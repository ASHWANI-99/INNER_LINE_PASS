<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="STYLE/ilp.css"> -->
    <title>Document</title>
    <style>
        div{
            margin:0;
            padding:0;
        }
.ILP-page{
    
    margin: 0px;
    padding: 0px;
    z-index: 999;
    border:3px solid black;
    font-family:sans-serif;


}
.head_er{
    background-color: #fff;
    text-align: center;
    font-size: 20px;
    line-height:1.2;

}
.pagedetail{
    margin:0;
    padding:0 0 0 4px;
    display: flex;
    flex-direction: column;
    font-display: space;
    font-size: 16px;
    line-height:1.5;

}
.Address_c{
    display: flex;

}
.sp{
    padding: 0 24px;
    width:50%;
}
.sign{
    text-align: right;

}
.copy{
    font-size:13px;
}
.row{
    display:flex;
}
.note{
    margin:0;
    padding:3px;
    font-size:13px;
}
br{
    padding:5px;
}
fieldset{
    border-radius: 5px;
    left:50%;
}

legend{
    background-color:#ccc;
    color:white;
    border-radius: 5px;
}

#back{
            position:relative;
            top:35%;
            /* left:30%; */
            text-align:center;
            opacity:0.1;
            z-index:0;
           
        }


        
        #front{
            position:absolute;
            top:0;
            z-index:1;
        }
        .sign{
            text-align:right;
        }

    </style>
</head>
<body>
    <div id="back">
        <img src="{{public_path('/img/ashok.jpeg')}}" style="width:200px;height:350px;"> 
        
    </div>
    <div id='front'>
        <div class="ILP-page">
        <div class="head_er">
            <div class="head-line-1">Form-B</div>
            <div class="head-line-2"><b> INNER LINE PASS RENEWAL</b></div>
            <div class="head-line-3">(See Sub paragraph(1)of Paragraph 3)</div>
            <div class="head-line-4"><i>(In Accordance with the provision of Bengali Eastern Frontier)</i></div>
            <hr>
            <br>
        </div>
        <div class="pagedetail">
        <div>
        <b>Pass No :</b><u>{{$status->Pass_No}}</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
        <b>Name of Pass holder : </b><u>{{$status->Applicant_Name}}</u>
        <br><b>Father's Name : </b><u>{{$status->Fathers_Name}}</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b>Age : </b><u>{{$status->Age}}</u>
        <br><b>  Identity mark of pass holder :</b><u>{{$status->IdentificationMark}}</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br><b>P.S : </b><u></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b>House No : </b><u>{{$status->Present_Address_Hno}}</u>
        <br><b>Dist : </b><u>{{$status->Present_Address_District}}</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b>P.O : </b><u>{{$status->Present_Address_Post_office}}</u>
        <br><b>E/Roll : </b><u>{{$status->E_Roll_SlNo}}</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b>Part No: </b><u>{{$status->Part_No}}</u>
        <br><b>Constituency: </b><u>{{$status->Constituency}}</u>
        <br><b>Name Of Sponsor :</b><u>{{$status->Sponsor_Name}}</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b>  Father's Name of Sponsor: </b><u>{{$status->Sponsors_Father_name}}</u>
        <br><b> Sponsor Address :</b>
        <div class="sp">
             <fieldset class='field set'>
             <legend> <b>Private Sponsor</b></legend>
             <b> House No.:</b><u>{{$status->sponsor_address_Hno}}</u>
             <br><b> P.O.:</b><u>{{$status->sponsor_address_Post_office}}</u>
             <br><b> Locatity:</b><u>{{$status->sponsor_address_Location}}</u>
             <br><b> District:</b><u>{{$status->sponsor_address_District}}</u>
             <br><b> Epic No:</b><u>{{$status->Sponsors_EPIC_UID_No}}</u>  
             </fieldset>
         </div> 
            
            <br><b>  Purpose of Stay :</b><u>{{$status->Purpose_of_stay}}</u>
            <br><b>  Validity:</b><u>{{$status->Validaty_Period}}</u>
            <i><center> (This Pass is issued on conditions and restrictions as may be seen overleaf)</center></i>
            <b>  D.C. Order Dated :</b><u>{{$status->Officer_UpdatedAt}}</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>  Memo No.: </b><u></u>
            <br><b>  Dated:</b><u>{{$status->Application_date}}</u>
            <br>
            <div class="sign"> <b> Signature of Pass Holder : </b></div><u></u>
            <div >
            <center><img src ="data:image/png;base64,{{DNS1D::getBarcodePNG($passno, 'C39E') }}" width="300" height="30"/> </center>
            </div>
            <div class="row"><div class="copy"><b>  Copy to: </b>
                <ol>
                    <li>Shri/Smt.  SAKTHI</li>
                    <li>Sponsor    FG</li>
                    <li>President, V.C,</li>
                    <li>O/C , Bawngkawn PS</li>
                    <li>D.C., Aizawl District.</li>
                </ol>
                <b><u> NOTE:</u></b>
                <ol>
                    <li>This order is digitally signed and therefore needs no physical signature .</li>
                    <li>Authenticity of this order can be verified from https://edistrict.mizoram.gov.in .This order is legally valid as per the Information Technology Act 2000 and its subsequent amendments</li>
                    <li>Tampering of this order will attract Penal Action.</li>
                </ol>
            </div>
            <br>
            <div>
                <p class="sign"> (LALSANGLIANA)<br>Certificate officer<br>Aizawl District , Aizawl</p>
            </div> 
         
    </div>
    </div>
</body>
</html>


            