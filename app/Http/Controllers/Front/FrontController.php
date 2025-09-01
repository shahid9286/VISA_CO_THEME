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
<<<<<<< HEAD

    public function about3()
    {
        // dd('ss');
        return view('front.about.about');
    }
=======
        public function index3()
    {
        // dd('ss');
        return view('front.home3.home');
    }

>>>>>>> 1cccade8ada0e65a7eec677ee5b76643f56c1ee1
}
