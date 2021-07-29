@extends('layouts.app')

@section('content') 
<head>
<link rel="stylesheet" href="/STYLE/AF_forworder.css">
  
</head>
<body>
<h2>LIST OF APPLICATION FORM </h2>
<br>
<table class="table" style='width:100%'>
  <thead class="column">
    <tr>
      <th >S.No.</th>
      <th >Application No</th>
      <th >Applicant Name</th>
      <th >Application Date</th>
       <th >ILP NUMBER</th>
     
    </tr>
  </thead>
  <tbody >
    @foreach($application_forms as $application_form)
    <tr >
      <th scope="row">{{$loop->index+1}}</th>
      <td><a href="/officerDetails/{{$application_form->id}}"> {{$application_form->Application_No}}</a></td>
      <td>{{$application_form->Applicant_Name}}</td>
      <td>{{$application_form->created_at}}</td>
      <td> {{$application_form->Pass_No}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>

@endsection
