@extends('layouts.merge')

@section('title','News Page')

@section('content')
<section id="news">
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

<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span> 
    <span class="dot" onclick="currentSlide(5)"></span> 
</div>
</section>
@endsection
