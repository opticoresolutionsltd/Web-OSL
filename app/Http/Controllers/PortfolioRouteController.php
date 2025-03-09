<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioRouteController extends Controller
{
    public function logoIdentity()
    {
        return view('main.portfolio.graphic design.logo-identity');
    }

    public function photoshopEditing()
    {
        return view('main.portfolio.graphic design.photoshop-editing');
    }

    public function printDesign()
    {
        return view('main.portfolio.graphic design.print-design');
    }

    public function packagingDesign()
    {
        return view('main.portfolio.graphic design.packaging-design');
    }

    public function socialMediaGraphics()
    {
        return view('main.portfolio.graphic design.social-media-graphics');
    }
}
