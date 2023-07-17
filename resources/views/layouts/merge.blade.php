<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0538fc5c28.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>@yield('title')</title>
</head>
<body class="back-ground">

    <!-- Navbar -->
    <div class="header">
        <nav id="navbar">
            <ul id="sidemenu">
                <li class="logo"><img src="/images/logo.png"></li>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/news">News</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/events">Events</a></li>
                <li><a href="/admin">Admin</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </div>

<!-- Content Section -->
    <div class="content">
        @yield('content')
    </div> 

    <!---------------------------------- Footer-------------------------------- -->
    <footer class="copyright">
        <p>Copyright &copy;Hepi Events.com. Where trust meets perfection</p>
    </footer>

</body>
</html>
