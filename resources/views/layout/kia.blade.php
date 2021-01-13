<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ $title ?? 'Academic Portal' }} - Kigali Infants Academy</title>
  @yield('header')
</head>
<body>
    @yield('menu')
    @yield('content')
    @yield('footer')
</body>
</html>