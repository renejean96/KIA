<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
  <title>{{config('app.name','Kigali Infants Academy') }}</title>
=======
  <title>{{ $title ?? 'Academic Portal' }} - Kigali Infants Academy</title>
>>>>>>> eb638203d3574b658e0066cad36c137cc68fa40f
  @yield('header')
</head>
<body>
    @yield('menu')
    @yield('content')
    @yield('footer')
</body>
</html>