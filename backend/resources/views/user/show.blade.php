<body>
<html>
<h1>{{ $msg }}</h1>
<ul>
  @foreach($users as $user)
  <li>{{ $user->name }}</li>
  @endforeach
</ul>
</html>
</body>