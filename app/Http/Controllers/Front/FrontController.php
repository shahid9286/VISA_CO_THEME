<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home1.index');
    }

    public function index2()
    {
        // dd('ss');
        return view('front.home2.home');
    }
        public function index3()
    {
        // dd('ss');
        return view('front.home3.home');
    }

}
