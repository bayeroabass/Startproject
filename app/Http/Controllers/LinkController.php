<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function services()
    {
        return view('services');
    }
    public function accueil()
    {
        return view('accueil');
    }
    public function about()
    {
        return view('about');
    }
    public function portfolio()
    {
        return view('portfolio');
    }

}
