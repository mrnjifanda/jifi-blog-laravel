<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Mon super blog') - Jifi BLog</title>
    <!-- Favicons -->
    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top header-scrolled">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <h1 class="logo mr-auto"><a href="{{ route('home') }}">Jifi Blog</a></h1>

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}"><i class="fa fa-book"></i> Blog</a></li>
                            @auth
                            <li class="{{ Route::is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="fa fa-user"></i> Admin</a></li>
                            <li><form action="{{ route('logout') }}" method="post"><button class="text-danger" type="submit"><i class="fa fa-lock"></i> Logout</button></form></li>
                            @else
                            <li class="{{ Route::is('login') ? 'active' : '' }}"><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li class="{{ Route::is('register') ? 'active' : '' }}"><a href="{{ route('register') }}"><i class="fa fa-sign-out"></i> Register</a></li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </header>

    <main id="main" role='main'>
        <section id="about">
            <div class="container">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                @endif

                @yield('content')
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Jifi Blog</h3>
                        <p>Blog test est un site test</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('home') }}">Blog</a></li>
                            @auth
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('dashboard') }}">Admin</a></li>
                            @else
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('login') }}">Login</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('register') }}">Register</a></li>
                            @endauth
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Deido Douala, Cameroun <br>
                            <strong>Phone:</strong> (+237) 695 512 345<br>
                            <strong>Email:</strong> contact@njifanda.com<br>
                        </p>

                        <div class="social-links">
                            <a href="https://www.twitter.com/njifanda" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/njifanda" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/shooting_buzz" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/njifanda" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p></p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Jifi Blog</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="http://njifanda.com/">Mr NJIFANDA</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>