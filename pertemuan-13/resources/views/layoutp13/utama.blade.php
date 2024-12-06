<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('judul', 'Aplikasi Laravel')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="{{Route('topmenu1')}}">Home</a></li>
      <li><a href="{{Route('topmenu2')}}">Home</a></li>
      <li><a href="{{Route('topmenu3')}}">Home</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  @yield('konten')
</div>

</body>
</html>
