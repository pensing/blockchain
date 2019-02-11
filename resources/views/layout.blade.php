<!DOCTYPE html>
<html lang="en">
<head>
   <title> @yield('title', 'Blockchain') </title>
   
</head>
<body>
   <div class="container">
       @yield('content')
   </div>
   <div>
      <a href="/">Home</a><br>
      <a href="/investments">Investments</a><br>
      <a href="/investments/create">Create investment</a><br>
      <a href="/users">Users</a><br>
      <a href="/users/create">Create user</a><br>
      <a href="/feedback">Feedback</a><br>
      <a href="/investments/create">Create feedback</a><br>
   </div>
</body>
</html>