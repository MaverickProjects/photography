<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        @yield('meta')

        <link rel="stylesheet" href="/frontend/css/style.css">
        <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    </head>
    <body>
    

            @yield('content')

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="/frontend/js/bootstrap.min.js"> </script>
    </body>
</html>