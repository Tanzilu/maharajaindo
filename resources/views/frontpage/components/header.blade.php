<header>
    <div class="container">
        <nav class="nav sticky">
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
            <a href="{{ route('home') }}" class="logo"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            <ul class="nav-list">
                <!-- Home -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }} ">Home</a>
                </li>

                <!-- Tea 101 -->
                <li class="nav-item">
                    <a href="{{ route('coffee') }}" class="nav-link {{ Request::is('coffee') ? 'active' : '' }}">Coffee
                        101</a>
                </li>

                <!-- Products -->
                <li class="nav-item">
                    <a href="{{ route('products') }}"
                        class="nav-link {{ Request::is('products') ? 'active' : '' }}">Products</a>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About
                        Us</a>
                </li>

                <!-- Our Team -->
                <li class="nav-item">
                    <a href="{{ route('team') }}" class="nav-link {{ Request::is('team') ? 'active' : '' }}">Our
                        Team</a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a href="{{ route('contact') }}"
                        class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- Header Ends -->