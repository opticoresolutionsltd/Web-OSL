<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestRouteController extends Controller
{
    public function home()
    {
        return view('main.home');
    }
    public function graphicDesign()
    {
        return view('main.services.graphic-design');
    }

    public function digitalMarketing()
    {
        return view('main.services.digital-marketing');
    }

    public function videoEditing()
    {
        return view('main.services.video-editing');
    }

    public function _3dProduction()
    {
        return view('main.services.3d-production');
    }

    public function webDevelopment()
    {
        return view('main.services.web-development');
    }

    public function contact()
    {
        return view('main.others.contact');
    }

    public function portfolio()
    {
        return view('main.others.portfolio-individual');
    }

    public function faq()
    {
        return view('main.others.faq');
    }

    public function about()
    {
        return view('main.others.about');
    }

    public function privacy()
    {
        return view('main.others.privacy-policy');
    }

    public function terms()
    {
        return view('main.others.terms-conditions');
    }

    public function requestAppointment()
    {
        return view('main.others.appointment');
    }
}
