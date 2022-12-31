<!-- Start Header Area -->
<header class="header-area">

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" class="black-logo" alt="image" height="25px">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a href="index.html">
                        <img src="assets/img/logo.png" class="black-logo" alt="image">
                        <img src="assets/img/logo-2.png" class="white-logo" alt="image">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link {{ $active ==  'home' ? 'active' : ''  }}">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/about" class="nav-link {{ $active ==  'about' ? 'active' : ''  }}">
                                    About
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/services" class="nav-link {{ $active ==  'services' ? 'active' : ''  }}">
                                    Services
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/contact" class="nav-link {{ $active ==  'contact' ? 'active' : ''  }}">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->