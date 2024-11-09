<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function cctv()
    {
        return view('frontend.cctv');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function dedicated()
    {
        return view('frontend.dedicated');
    }

    public function designAndInstallation()
    {
        return view('frontend.design&installation');
    }

    public function domainreg()
    {
        return view('frontend.domainreg');
    }

    public function ekdesh()
    {
        $packages = Package::orderBy('sort_order', 'asc')->where('type', 3)->where('status', 1)->where('status', 1)->get();
        return view('frontend.ekdesh', compact('packages'));
    }

    public function homeinternet()
    {
        return view('frontend.homeinternet');
    }

    public function itsolution()
    {
        return view('frontend.itsolution');
    }

    public function mail()
    {
        return view('frontend.mail');
    }

    public function monitoring()
    {
        return view('frontend.monitoring');
    }

    public function netequiopments()
    {
        return view('frontend.netequiopments');
    }

    public function onsitesupport()
    {
        return view('frontend.onsitesupport');
    }

    public function premium()
    {
        $packages = Package::orderBy('sort_order', 'asc')->where('type', 1)->where('status', 1)->where('status', 1)->get();
        return view('frontend.premium', compact('packages'));
    }

    public function serverconfi()
    {
        return view('frontend.serverconfi');
    }

    public function sohoz()
    {
        $packages = Package::orderBy('sort_order', 'asc')->where('type', 2)->where('status', 1)->where('status', 1)->get();
        return view('frontend.sohoz', compact('packages'));
    }

    public function team()
    {
        return view('frontend.team');
    }

    public function testimonials()
    {
        return view('frontend.testimonials');
    }

    public function webdesign()
    {
        return view('frontend.webdesign');
    }

    public function webhosting()
    {
        return view('frontend.webhosting');
    }

}
