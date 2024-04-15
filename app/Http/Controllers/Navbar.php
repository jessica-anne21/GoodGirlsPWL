<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navbar extends Controller
{
    public function index ()
    {
        $title = 'GoogGirls';
        return view ('navbar',['title'=> $title]);
    }
}
