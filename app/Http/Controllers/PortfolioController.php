<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public string $title;
    public function index()
    {
        $this->title='Simba Jirira - Freelance Website Designer / Developer';
        return view('pages.welcome',['title'=>$this->title]);
    }

    public function about()
    {
        $this->title ='About - Simba Jirira Freelance Website Designer / Developer';
        return view('pages.about',['title' => $this->title]);
    }
}
