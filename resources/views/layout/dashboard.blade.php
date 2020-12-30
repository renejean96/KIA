<!DOCTYPE html>
<html lang="en">

<head>
  @yield('header')
</head>
<body>
    @yield('menu')
    @yield('content')
    @yield('footer')
</body>
</html>




<!DOCTYPE html>
<html lang="en">

<head>
  @include('inc.header')
</head>
<body>
    @include('inc.dashHeader')


        

    @include('inc.dash_footer')

</body>
</html>