<!DOCTYPE html>
<html>
<head>
    <title>Event-Manager</title>
    <!-- Include your CSS stylesheets and other necessary assets here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0538fc5c28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <!-- Include your header content here -->
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
    </header>

    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        <!-- Include your footer content here -->
        <p>Copyright &copy;Hepi Events.com. Where trust meets perfection</p>
    </footer>

    <!-- Include your JavaScript files and other necessary scripts here -->
    <script>
        let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
            }
            </script>
</body>
</html>
