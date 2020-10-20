<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title> Home Page @yield('title')</title>
        @yield('meta')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/frontend/css/style.css">
        <link rel="stylesheet" href="/frontend/css/mobile.css">
        <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
        <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Slick Slider -->
        <link rel="stylesheet" href="/frontend/css/slick.css">
        <link rel="stylesheet" href="/frontend/css/slick-theme.css">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="navbar-brand" href="#">Photography</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
              </ul>
            </div>
          </nav>


            @yield('content')


        <section>
        <div class="footer">
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-linkedin" aria-hidden="true"></i>
        </div>
        </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="/frontend/js/bootstrap.min.js"> </script>
    <script src="/frontend/js/slick.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.slickSlider').slick({
            infinite: true,
            dots:true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            slidesToShow: 1,
            autoplaySpeed: 3000
        });
    });
    </script>
    </body>
</html>