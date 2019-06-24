<html>
<head>
<title>Laravel</title>
<body>
<h1>Database Content</h1>
<table>
<tr> 
  <th>Name</th>
  <th>password</th>
  <th>email</th>
  <th>Action</th>
</tr>
<tr>

@foreach($post as $post)
<td>{{$post->name}}</td>
<td>{{$post->password}}</td>
<td>
<td><a href="/edit/{{$post->id}}"><button>edit</button></a>    <a href="/delete/{{$post->id}}"><button>Delete</button></a> </td>
</tr>

@endforeach



</tr>
</table>
</body>
</head>
</html>

