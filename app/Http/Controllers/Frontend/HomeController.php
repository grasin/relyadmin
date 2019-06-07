<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }
    
        public function new()
    {
        return view('frontend.new');
    }
    
    public function orders()
    {
        return view('frontend.orders');
    }
    

    public function newOrder()
    {
        return view('frontend.newOrder');
    }
}
