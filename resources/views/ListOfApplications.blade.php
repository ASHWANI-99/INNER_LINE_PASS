@extends('layouts.ash')
<link rel="shortcut icon" href="img/mseg.ico" type="image/x-icon">

@section('content')
<center>
<h2>LIST OF APPLICATION FORMS </h2> 
</center>
<br>
<table class="table" style='width:100%'>
  <thead class="column">
    <tr>
      <th >S.No.</th>
      <th >APPLICATION NUMBER</th>
      <th >APPLICANT'S NAME</th>
      <th >APPLICATION DATE</th>
      <th >ILP NUMBER</th>
      <th >UPDATED AT</th>
      <th >RENEWAL</th>
    </tr>
  </thead>
  <tbody >

  @foreach($application_forms as $application_form)
 
    <tr >
     <td>{{$loop->index+1}}</td>
      <td> {{$application_form->Application_No}}</td>
      <td> {{$application_form->Applicant_Name}}</td>
      <td>{{$application_form->Application_date}}</td>
      <td> {{$application_form->Pass_No}}</td>
      <td> {{$application_form->updated_at}}</td>
      <td> <a href="/cscApplicationForm/{{$application_form->id}}"> <button CLASS="btn btn-warning"> RENEW  </button></a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
  