<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller

{
    public function news()
    {
        return view('layouts.news');
    }
}
