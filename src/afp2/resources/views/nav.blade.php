

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
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
                            <img src="/img/logo/logo_lighter.png" class="icon">
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
                    <a class="nav-link" href="/cart">Cart</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">User</a>
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