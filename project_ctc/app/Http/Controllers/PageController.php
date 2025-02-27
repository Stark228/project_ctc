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
    public function dealer_detail($id)
    {
        return view('pages.dealer_detail', [ 'id'=>$id ] );
    }
    public function cars()
    {
        return view('pages.cars');
    }
    public function cardetail($id)
    {
        return view('pages.car_detail',['id' => $id]);
    }
    public function showroom($id)
    {
        return view('pages.car_show_room',['id' => $id]);
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
    public function appointment($id)
    {
        return view('pages.appointment',['id' => $id]);
    }
    public function appointment_track()
    {
        return view('pages.track_appointment');
    }
    public function feedback()
    {
        return view('pages.feedback');
    }
}
