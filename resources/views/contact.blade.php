@extends('layouts.merge')

@section('title','Contact Page')

@section('content')
<section id="contact">
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
</section>
@endsection