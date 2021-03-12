<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->

        <link href="css/app.css" rel="stylesheet" type="text/css">
        
        <!-- Js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
             integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </head>
    
    <body class="antialiased">
    @include('nav')
    @yield('content')
       

        <div class="flex items-top justify-center min-h-screen bg-dark dark:bg-gray-900 sm:pt-0">
            <div class="mt-2 text-primary dark:text-gray-400 text-sm">
                <center>Copyright &copy; 2021 <b> IMPACT ZONE </b> TEAM </center>
            </div>
        </div>
    </body>
</html>