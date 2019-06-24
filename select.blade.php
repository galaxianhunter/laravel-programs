<html>
<body>
<form action="{{route('countrylists.fetch')}}" method="POST">
@csrf
<h1>Enter your name:</h1><br>
<input type="text" name ="name">
<h2>Select your country:</h2><br>
<select name="country">
@foreach($datas as $data)
<option value="{{$data->id}}">{{$data->country}}</option>
@endforeach

</select>
<div>
<h3>Select your Gender:</h3>

  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>

  </div>
  <input type="submit" name="submit" >
</form>
</body>
</html>
