<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    "{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"
    <!--link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"-->
</head>

<body class="antialiased">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <header id="header" class="fixed-top header-transparent header-scrolled">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <h1 class="logo mr-auto"><a href="index.php">Jifi Blog</a></h1>

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="active"><a href="index.php">Blog</a></li>
                            <li><a href="admin.php">Admin</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </header>

    <main id="main" class="mt-5">';

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
                            <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Blog</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="admin.php">Admin</a></li>
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>