<form action="/rejectOff/{{$application_forms->id}}" method="post">
@csrf
 reason of rejection :  <textarea name="remarks" id="remarks" cols="30" rows="10"></textarea>
   <input type="submit" value="submit">
</form>