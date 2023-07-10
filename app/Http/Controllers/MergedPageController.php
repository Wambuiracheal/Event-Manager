<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MergedPageController extends Controller
{
    public function index()
    {
        return view('merged-page');
    }
}
