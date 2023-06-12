<nav class="navbar navbar-expand-lg navbar-dark bg-dark-purple">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ url('/') }}>Movie App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-3">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href={{ url('/') }}>Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->segment(1) == 'movie' ? 'active' : '' }}" aria-current="page"
                        href={{ url('/movie') }}>Movies</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->segment(1) == 'cinemas' ? 'active' : '' }}" aria-current="page" 
                        href={{ url('/cinemas') }}>Cinemas</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle {{ request()->segment(1) == 'about' ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item {{ request()->segment(2) == 'aboutUs' ? 'active' : '' }}"
                                href={{ url('/about/aboutUs') }}>About Us</a></li>
                        <li><a class="dropdown-item {{ request()->segment(2) == 'contactUs' ? 'active' : '' }}"
                                href={{ url('/about/contactUs') }}>Contact Us</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-3 pull-right">
                @if ($UserRole == 'Guest')
                    <li class="nav-item">
                        <a href={{ url('/login') }}><button class="btn btn-purple px-3 m-1"
                                type="button">Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/register') }}><button class="btn btn-purple px-3 m-1"
                                type="submit">Register</button></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href={{ url('/profile') }}><button class="btn btn-purple px-3 m-1"
                                type="button">Profile</button></a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/logout') }}><button class="btn btn-purple px-3 m-1"
                                type="submit">Logout</button></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
