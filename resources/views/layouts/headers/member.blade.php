<nav class="navbar navbar-expand-lg navbar-dark bg-dark-purple">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Movie App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-3">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#">Movies</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" aria-current="page" href="#">Cinemas</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item active" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-3 pull-right">
                <li class="nav-item">
                    <a href={{ url('/') }}><button class="btn btn-purple px-3 m-1"
                            type="button">Profile</button></a>
                </li>
                <li class="nav-item">
                    <a href={{ url('/logout') }}><button class="btn btn-purple px-3 m-1"
                            type="submit">Logout</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
