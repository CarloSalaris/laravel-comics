<header class="bg-white text-center">

    <div class="container">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" class="header_logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">NEWS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                SHOP
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="md-form mt-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>

                </div>
            </div>

        </nav>

    </div>

    <div id="jumbo" class="m-0 p-0">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
</header>
