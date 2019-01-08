<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function rest(){
        return view('rest');
    }

    public function attraction(){
        return view('attraction');
    }
    
    public function contact(){
        return view('contact');
    }

    public function cab() {
        return view('cab');
    }

    public function cabShowMomot() {
        return view('cabMomot');
    }

    public function cabShowTucan(){
        return view('cabTucan');
    }

    public function cabShowOropendula(){
        return view('cabOropendula');
    }
}
