<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventsController extends Controller

{
    //welcome page
    public function welcome()
    {
        return view('events.welcome');
    }

    //about page
    public function about()
    {
        return view('events.about');
    }

    //new page
    public function news()
    {
        return view('events.news');
    }

    //contact page
    public function contact()
    {
        return view('events.contact');
    }

    //merge page
    public function mergePage()
    {
        return view('layouts.merge');
    }

}
