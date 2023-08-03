<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller

{
    //welcome page
    public function welcome()
    {
        return view('pages.welcome');
    }

    //about page
    public function about()
    {
        return view('pages.about');
    }

    //new page
    public function news()
    {
        return view('pages.news');
    }

    //contact page
    public function contact()
    {
        return view('pages.contact');
    }

    //merge page
    public function mergePage()
    {
        return view('layouts.merge');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
