<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('home') }}"><img src="{{ '/' }}frontend/assets/img/PNG.png"></a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}"><span>About</span>
                        <!--- <i class="bi bi-chevron-down"></i>---></a> </li>

                <li class="dropdown"><a href="#" class="{{ Route::is(['dedicated', 'homeinternet', 'mail', 'itsolution', 'designAndInstallation', 'netequiopments', 'monitoring', 'serverconfi', 'cctv', 'onsitesupport', 'domainreg', 'webhosting', 'webdesign']) ? 'active' : '' }}"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <!-- Broadband Internet Dropdown Start -->
                        <li class="dropdown"><a href="#"><span>BroadBand Internet</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('dedicated') }}">Dedicated Internet</a></li>
                                <li><a href="{{ route('homeinternet') }}">Home Internet</a></li>
                            </ul>
                        </li>
                        <!-- Broadband Internet Dropdown End -->
                        <li><a href="{{ route('mail') }}">Mail Services</a></li>
                        <!-- IT Solution Dropdown Start -->
                        <li class="dropdown"><a href="#"><span>IT Solution</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('itsolution') }}">IT Solution </a></li>
                                <li><a href="{{ route('designAndInstallation') }}">Design & Installation</a></li>
                                <li><a href="{{ route('netequiopments') }}">Network & Equiopments</a></li>
                                <li><a href="{{ route('monitoring') }}">Monitoring & Maintenance</a></li>
                                <li><a href="{{ route('serverconfi') }}">Server Configuration & Maintenance</a></li>
                                <li><a href="{{ route('cctv') }}">Security Surveillance Systems</a></li>
                                <li><a href="{{ route('onsitesupport') }}">On Site Support</a></li>
                            </ul>
                        </li>
                        <!-- IT Solution Dropdown End -->

                        <!-- Web Hosting & Design Dropdown Start -->
                        <li class="dropdown"><a href="#"><span>Web Hosting & Design</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('domainreg') }}">Domain Registration</a></li>
                                <li><a href="{{ route('webhosting') }}">Web Hosting</a></li>
                                <li><a href="{{ route('webdesign') }}">Web Design & Development</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Web Hosting & Design Dropdown End -->
                <!-- Web Pricing Dropdown Start -->
                <li class="dropdown"><a href="#" class="{{ Route::is(['premium', 'sohoz', 'ekdesh']) ? 'active' : '' }}"><span>Pricing</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="{{ route('premium') }}">Premium</a></li>
                        <li><a href="{{ route('sohoz') }}">Sohoz</a></li>
                        <li><a href="{{ route('ekdesh') }}">Ek Desh Ek Rate</a></li>
                    </ul>
                </li>
                <!-- Web Pricing Dropdown End -->

                <li><a href="https://file.cyberlinkltd.com/" target="_blank">Media Server</a></li>
                <li><a href="http://cyberlink.yetfix.com/customer_login" target="_blank">Self Care</a></li>
                <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
            <a href="https://www.facebook.com/cyberlinkcommunication" target="_blank" class="facebook"><i
                    class="bu bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>

    </div>
</header><!-- End Header -->
