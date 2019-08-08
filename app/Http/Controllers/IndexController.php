<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity\Cabin;
use App\Entity\Service;
use App\Entity\Feature;

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

    public function about(){
        return view('about');
    }


    public function cab() {
        return view('cab');
    }

}
