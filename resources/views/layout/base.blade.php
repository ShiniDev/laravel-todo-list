<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App - @yield('title')</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <main class="container">
    <h1>@yield('title')</h1>
    @yield('content')
  </main> 
  <footer>&copy; 2023 - Shinidev</footer>
</body>
</html>