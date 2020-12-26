<body>
<html>
<h1>Hellooo, {{ $msg }}</h1>
<ul>
  @foreach($users as $user)
  <li>{{ $user->name }}</li>
  @endforeach
</ul>
</html>
</body>