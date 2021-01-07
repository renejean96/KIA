<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{config('app.name','Kigali Infants Academy') }}</title>
  @yield('header')
</head>
<body>
    @yield('menu')
    @yield('content')
    @yield('footer')
</body>
</html>