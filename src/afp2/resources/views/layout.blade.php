<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
         
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" id="nav-home" href="">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutme">Products1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutme">Products2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutme">Products3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutme">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutme">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutme">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cv"></a>
            </li>
        </ul>
    </div>
</nav>
    @yield('content')
       

        <div class="flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <center>Copyright &copy; 2021 <b> IMPACT ZONE </b> TEAM </center>
            </div>
        </div>
    </body>
</html>