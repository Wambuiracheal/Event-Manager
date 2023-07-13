@extends('layouts.app')

@section('content')
    <!-- Content from welcome.blade.php -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0538fc5c28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>welcome page</title>
</head>
<body class="back-ground">

{{-------------------------------------------navbar----------------------------------}} 

<div class="header">
    <nav id="navbar">
        <ul id="sidemenu">
            <li class="logo"><img src="/images/logo.png"></li>
            <li><a href="/">Home</a></li>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </nav>
</div>

{{-------------------------------------------welcome message----------------------------}}
<div class="header">
    <h1>Hepi Events</h1>
    <P>Where Trust meets Perfection</P>
    <button type="button"  class="custom-button"><a href="/register">Get started</a></button>
</div> 
</body>
</html>
    @include('welcome')

    <!-- Content from about.blade.php -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>about page</title>
</head>
<body class="about">
<div id="about">
    <div class="container">
        <div class="about-row">
            <div class="about-col-1">
                <img src="images/about.jpeg">
            </div>
            <div class="about-col-2">
                <h1>About Us</h1>
                    <p>Hepi Events is a platform that was specifically designed to host a wide range of events and provide an online booking system for users to conveniently reserve their desired events.
                    The platform aims to simplify the event booking process, allowing individuals to easily browse through a variety of events and select the ones that suit their preferences.
                    Hepi Events provides a seamless and user-friendly interface, ensuring a smooth experience for users during the event booking and payment procedures.
                    By leveraging the power of technology, Hepi Events eliminates the need for traditional offline event booking methods, offering a more efficient and time-saving approach.</p>
                    <p>The platform was established on the 7th of July, 2023, marking the beginning of its journey in the event management industry.
                    Hepi Events is owned and managed by Racheal Njuguna, who has extensive experience and expertise in event planning and management.
                    With Hepi Events, users have the convenience of booking events from the comfort of their own homes, eliminating the need to physically visit event venues or engage in lengthy paperwork.
                    The platform provides a secure payment system, ensuring that transactions are protected and users' financial information is kept confidential.</p>
                    <p>Hepi Events offers a diverse range of events, including conferences, seminars, workshops, concerts, exhibitions, and more, catering to various interests and preferences.
                    Users can easily search for events based on different criteria such as location, date, type, or specific keywords, allowing them to find events that align with their interests and availability.
                    Hepi Events collaborates with event organizers and venues to ensure a wide selection of high-quality and reputable events are available for booking.
                    The platform provides detailed event descriptions, including schedules, locations, speakers or performers, ticket prices, and any additional information that users may need to make informed decisions.
                    Hepi Events promotes community engagement by hosting local and international events, fostering cultural exchange, and providing opportunities for networking and knowledge sharing.</p>
                    <p>Users can create personalized accounts on Hepi Events, enabling them to save their preferences, track their bookings, and receive notifications about upcoming events.
                    Hepi Events also offers a feedback system, allowing users to provide reviews and ratings for events they have attended, helping others make informed choices.
                    The platform continuously updates its event listings to ensure users have access to the latest and most exciting events happening around them.
                    Hepi Events is committed to delivering exceptional customer service, providing prompt assistance and support to users for any inquiries or issues they may encounter.
                    The platform embraces innovation and technology advancements in the event management industry, constantly exploring new features and enhancements to improve the user experience.
                    Hepi Events aims to become a leading platform in the event management industry, known for its reliability, efficiency, and extensive event offerings.
                    Through Hepi Events, Racheal Njuguna and her team strive to create memorable and enjoyable experiences for event attendees, contributing to the growth and success of the event industry as a whole.</P>
            </div>
        </div>
    </div>
</div>
</body>
</html>
    @include('about')

    <!-- Content from event.blade.php -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>event page</title>
</head>
<body>
<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="posters/poster1.jpg" style="width:100%" >
    </div>

    <div class="mySlides fade">
        <img src="posters/poster2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="posters/poster3.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="posters/poster4.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="posters/poster5.jpg" style="width:100%">
    </div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span> 
    <span class="dot" onclick="currentSlide(5)"></span> 
</div>
</body>
</html>
    @include('event')

    <!-- Content from contact.blade.php -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/0538fc5c28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>contact page</title>
</head>
<body class="contact">
<div id="contact">
<div class="container">
<div class="contact-row">
    <div class="contact-left">
        <h1 class="sub-title">Contact Us</h1> 
        <p><i class="fa-solid fa-envelope"></i>rachealnjugush@gmail.com</p>
        <p><i class="fa-solid fa-envelope"></i>reenjugush@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i>0707813711</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/ree.njugush"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/Ree_wambui"><i class="fab fa-twitter-square"></i></a>
            <a href="https://www.instagram.com/mendi_wambui/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/racheal-njuguna-626a82206/"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
    <div class="contact-right">
        <form>
            <h3>Incase you need to leave a short message for us,fill in the following form.Thankyou!!</h3>
            <input type="text" name="Name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="Message" rows="6" placeholder="Your Message"></textarea><br>
            <button type="submit" class="btn btn2">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</body>
</html>
    @include('contact')
@endsection
