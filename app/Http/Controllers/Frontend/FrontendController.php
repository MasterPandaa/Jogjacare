<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('frontend.terms');
    }

    /**
     * About Us Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    /**
     * Contact Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    public function partner()
    {
        return view('frontend.partner');
    }
}
