<!DOCTYPE html>
<html lang="en">
<head>
   <title> @yield('title', 'Blockchain') </title>
   
</head>
<body>
    @include('layouts.nav')
   <div class="container">
       @yield('content')
   </div>

</body>
</html>