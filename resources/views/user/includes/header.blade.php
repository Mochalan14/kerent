<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        keRent
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/" class="menu-item">Beranda</a></li>
                        <li class="scroll-to-section"><a href="#about" class="menu-item">Mobil</a></li>
                        <li class="scroll-to-section"><a href="{{ route('sewaku') }}" class="menu-item">Sewaku</a>
                        </li>
                        <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li>
                        @if (Auth::check())
                            <li class="submenu">
                                <a href="javascript:;">{{ Auth::user()->name }}</a>
                                <ul>
                                    <li><a href="/logout" class="menu-item">Logout</a></li>

                                </ul>
                            </li>
                        @endif
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
