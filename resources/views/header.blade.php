<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mosh - Creative Business Template | Contact</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt="logo"></a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.html">Accueil</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.html">A Propos</a></li>
                                    <li class="nav-item"><a class="nav-link" href="services.html">Nos Services</a></li>
                                    <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href={{ Route('contact') }}>Contact</a></li>
                                </ul>
                                <!-- Search Form Area Start -->
                                
                                <!-- Search btn -->
                                
                                <!-- Login/Register btn -->

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @yield('content')

</body>
</html>