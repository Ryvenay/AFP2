<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
         <link href="css/style.css" rel="stylesheet" rel="text/css">
    </head>
    <body class="antialiased">

        @yield('content')


        <div class="flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <center>Copyright &copy; 2021 <b> IMPACT ZONE </b> TEAM </center>
            </div>
        </div>
    </body>
</html>