<?php
use Illuminate\Support\Facades\DB;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel = "stylesheet"/>
    <link href="{{ asset('css/styles/start/starter.css') }}" rel = "stylesheet"/>
    <link href="{{ asset('css/styles/start/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles/start/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel = "stylesheet"/>
    <link href="{{ asset('css/styles/sidebar.css') }}" rel = "stylesheet"/>
   
<title>BubbleMyTea</title>
</head>

<body>
    <header>
        <div>
            <img src="/image/logo.png" alt="logo du site" id="logo"/>
            <h1>BubbleMyTea</h1>
        </div>
    </header>

    <main>
        @yield('main')
    </main>


    <footer>
        <p>Company © Qualitea All rights reserved.</p>
    </footer>
</body>


</html>