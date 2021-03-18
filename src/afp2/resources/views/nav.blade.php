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
                        <a class="nav-link" id="nav-home" href="/">Home</a>
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
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="/cart">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            </ul>
            @endguest
    </div>
</div>
</nav>