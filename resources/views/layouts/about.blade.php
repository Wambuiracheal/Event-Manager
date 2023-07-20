@extends('layouts.merge')

@section('title','News Page')

@section('content')
<body class="about">
{{--------------------------------- navbar --------------------------------}}
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
    <body class="container">
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
</section>
@endsection