<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
    }
}