<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="#" type="image/x-icon">
        <meta name="description" content="">
        <title>Vyomann Automation @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
        <!-- <link rel="stylesheet" href="assets/gallery/style.css"> -->
        <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <!-- View included CSS -->
        @yield('css')
    </head>
    <body>
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <!-- View included JS -->
        <script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
        <script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
        <script src="{{ asset('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
        <script src="{{ asset('assets/parallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
        <script src="{{ asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
        <script src="{{ asset('assets/ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
        <script src="{{ asset('assets/theme/js/script.js') }}"></script>
        <script src="{{ asset('assets/slidervideo/script.js') }}"></script>
        <script src="{{ asset('assets/sociallikes/social-likes.js') }}"></script>
        <!-- <script src="assets/gallery/player.min.js"></script>
        <script src="assets/gallery/script.js"></script> -->
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/anime.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- <script src="js/jquery.inputmask.bundle.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        
        @yield('js')
    </body>
    @toastr_render
</html>
