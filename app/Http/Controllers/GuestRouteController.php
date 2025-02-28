<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestRouteController extends Controller
{
   public function home()
   {
       return view('main.home');
   }

    public function contact()
    {
        return view('main.contact');
    }

    public function graphicDesign()
    {
        return view('main.graphic-design');
    }

    public function digitalMarketing()
    {
        return view('main.digital-marketing');
    }

    public function videoEditing()
    {
        return view('main.video-editing');
    }

    public function _3dProduction()
    {
        return view('main.3d-production');
    }

    public function webDevelopment()
    {
        return view('main.web-development');
    }

    public function portfolio()
    {
        return view('main.portfolio-individual');
    }

    public function faq()
    {
        return view('main.faq');
    }

    public function about()
    {
        return view('main.about');
    }
}
