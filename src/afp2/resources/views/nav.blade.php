
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="me-auto">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" id="nav-home" href="/">
                            <img src="/img/logo/logo_lighter.png" class="logo-icon">
                            <img src="/img/logo/logo_itstore.png" class="logo-text">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/addProduct">Add a product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orders">Order Listing</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/cart">
                        <i class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        </i></a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        @auth
                        <li class="dropdown-item">
                            <a class="nav-link" href="/profile">Profile</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                        @endauth
                        @guest
                        <li class="dropdown-item">
                                <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        @endguest
                    </ul>
                </li>
            </ul>
            
    </div>
</div>
</nav>