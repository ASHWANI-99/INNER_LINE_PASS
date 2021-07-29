@extends('layouts.app')

@section('content')

 
<div class="wrapper create_pizza">
<h1>CREATE A PIZZA</h1>

<FORM action ='/pizza_welcome' method ='POST'>
@csrf
<label for="name">your name:</label>
<input type="text" name='name'value="">
<br>


<label for="type">choose type:</label>
<select name="type" id="type">
<option value="0"></option>
<option value="apple">apple</option>
<option value="mango">mango</option>
<option value="orange">orange</option>
</select>

<br>
<label for="base">choose base:</label>
<select name="base" id="base">
<option value="0"></option>
<option value="solid">solid</option>
<option value="medium">medium</option>
<option value="soft">soft</option>
</select>
<br>
<fieldset>
<label for="toppings">toppings</label>
<input type='checkbox' name='toppings[]' value='salt'>salt <br>
<input type='checkbox' name='toppings[]' value='pepper'>pepper <br>
<input type='checkbox' name='toppings[]' value='chilly_flakes'>chilly_flakes <br>
<input type='checkbox' name='toppings[]' value='sugar'>sugar <br>
</fieldset>
<input type="submit" value="order">
</FORM>



</div>


@endsection