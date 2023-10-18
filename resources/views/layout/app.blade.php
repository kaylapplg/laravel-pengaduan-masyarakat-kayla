<html>
    <head>
        <title>App Name - @yield('title')</title>

        <link rel="stylesheet" href="bs/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    </head>
    <body>
   @include('layouts.navbar')
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>