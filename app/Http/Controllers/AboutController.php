<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function about()
    {
        return view('layouts.about');
    }
}