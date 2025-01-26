<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }
    public function dealers()
    {
        return view('pages.dealers');
    }
    public function dealer_detail()
    {
        return view('pages.dealer_detail');
    }
    public function cars()
    {
        return view('pages.cars');
    }
    public function cardetail()
    {
        return view('pages.car_detail');
    }
    public function showroom()
    {
        return view('pages.car_show_room');
    }
    public function compare()
    {
        return view('pages.compare');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function appointment()
    {
        return view('pages.appointment');
    }
    public function feedback()
    {
        return view('pages.feedback');
    }
}
