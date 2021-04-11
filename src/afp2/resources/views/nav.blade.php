<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="nav-link" id="nav-home" href="/">
            <img src="{{asset('/img/logo/logo_lighter.png')}}" class="logo-icon">
            <img src="{{asset('/img/logo/logo_itstore.png')}}" class="logo-text">
            </a>
            <div class="me-auto">
                
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Computer
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/product">Computers</a></li>
                            <li><a class="dropdown-item" href="#">Components</a></li>
                            <li><a class="dropdown-item" href="#">Monitors</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Notebooks, Tablets
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Notebook</a></li>
                            <li><a class="dropdown-item" href="#">Tablet</a></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                        </ul>
                    </li>>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Printers
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Printers</a></li>
                            <li><a class="dropdown-item" href="#">Props</a></li>
                            <li><a class="dropdown-item" href="#">Components</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Telephone
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Smartphone</a></li>
                            <li><a class="dropdown-item" href="#">Landline</a></li>
                            <li><a class="dropdown-item" href="#">Classic phones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Entertainment
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Television</a></li>
                            <li><a class="dropdown-item" href="#">TV accessories</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Photo, video</a></li>
                            <li><a class="dropdown-item" href="#">Media players</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Drones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home appliance
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Kitchen appliances</a></li>
                            <li><a class="dropdown-item" href="#">Smarthome devices</a></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav">
                @auth 
                    @if (Auth::user()->level > 0)
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                    <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li class="dropdown-item">
                                    <a class="nav-link" href="/addProduct">Add a product</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="/orders">Order Listing</a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link" href="/users">User Listing</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                @endauth
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
                        </i>
                    </a>
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
                        <li class="dropdown-item">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>