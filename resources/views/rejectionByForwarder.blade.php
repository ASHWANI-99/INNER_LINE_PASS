<form action="/reject/{{$data->id}}" method="post">
@csrf
   
   REASON FOR REJECTION: <textarea name="remarks" id="remarks" cols="30" rows="10"></textarea>
   <input type="submit" value="submit">
</form>