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

    public function about(){
        return view('about');
    }


    public function cab() {
        return view('cab');
    }

    public function cabShow(string $cabName) {

        $cabArray = array('tucan' => array('cabName' => 'Tucán', 'cabDescription' => 'We are a family business that started this project in 2010 with the initiative to offer a place of rest, peace with nature, tranquility and privacy. Our mission is to provide excellent service, lodging, dining and resting in a place surrounded by nature.We pride ourselves on honesty, responsibility, preserving and protecting the environment and quality service.We look forward to hosting you and your family and appreciate your business. Please let us know how we can make your stay a perfect one!',
                                            'cabPrice' => 40.000, 
                                            'cabServices' => array(array('description' => 'Televisión por cable', 'icon' => 'lnr-screen'), array('description' => 'Wi-Fi', 'icon' => 'lnr-cloud'), array('description' => 'Agua caliente', 'icon' => 'lnr-sun'), array('description' => 'Zona para trabajar con netbooks', 'icon' => 'lnr-laptop-phone'))),
                                            'momot' => array('cabName' => 'Momot', 'cabDescription' => 'We are a family business that started this project in 2010 with the initiative to offer a place of rest, peace with nature, tranquility and privacy. Our mission is to provide excellent service, lodging, dining and resting in a place surrounded by nature.We pride ourselves on honesty, responsibility, preserving and protecting the environment and quality service.We look forward to hosting you and your family and appreciate your business. Please let us know how we can make your stay a perfect one!',
                                            'cabPrice' => 40.000, 
                                            'cabServices' => array(array('description' => 'Televisión por cable', 'icon' => 'lnr-screen'), array('description' => 'Wi-Fi', 'icon' => 'lnr-cloud'), array('description' => 'Agua caliente', 'icon' => 'lnr-sun'), array('description' => 'Zona para trabajar con netbooks', 'icon' => 'lnr-laptop-phone'))),
                                            'colibri' => array('cabName' => 'Colibrí', 'cabDescription' => 'We are a family business that started this project in 2010 with the initiative to offer a place of rest, peace with nature, tranquility and privacy. Our mission is to provide excellent service, lodging, dining and resting in a place surrounded by nature.We pride ourselves on honesty, responsibility, preserving and protecting the environment and quality service.We look forward to hosting you and your family and appreciate your business. Please let us know how we can make your stay a perfect one!',
                                            'cabPrice' => 40.000, 
                                            'cabServices' => array(array('description' => 'Televisión por cable', 'icon' => 'lnr-screen'), array('description' => 'Wi-Fi', 'icon' => 'lnr-cloud'), array('description' => 'Agua caliente', 'icon' => 'lnr-sun'), array('description' => 'Zona para trabajar con netbooks', 'icon' => 'lnr-laptop-phone'))),
                                            'lechuza' => array('cabName' => 'La Lechuza', 'cabDescription' => 'We are a family business that started this project in 2010 with the initiative to offer a place of rest, peace with nature, tranquility and privacy. Our mission is to provide excellent service, lodging, dining and resting in a place surrounded by nature.We pride ourselves on honesty, responsibility, preserving and protecting the environment and quality service.We look forward to hosting you and your family and appreciate your business. Please let us know how we can make your stay a perfect one!',
                                            'cabPrice' => 40.000, 
                                            'cabServices' => array(array('description' => 'Televisión por cable', 'icon' => 'lnr-screen'), array('description' => 'Wi-Fi', 'icon' => 'lnr-cloud'), array('description' => 'Agua caliente', 'icon' => 'lnr-sun'), array('description' => 'Zona para trabajar con netbooks', 'icon' => 'lnr-laptop-phone'))),
                                            'oropendula' => array('cabName' => 'Oropéndula', 'cabDescription' => 'We are a family business that started this project in 2010 with the initiative to offer a place of rest, peace with nature, tranquility and privacy. Our mission is to provide excellent service, lodging, dining and resting in a place surrounded by nature.We pride ourselves on honesty, responsibility, preserving and protecting the environment and quality service.We look forward to hosting you and your family and appreciate your business. Please let us know how we can make your stay a perfect one!',
                                            'cabPrice' => 40.000, 
                                            'cabServices' => array(array('description' => 'Televisión por cable', 'icon' => 'lnr-screen'), array('description' => 'Wi-Fi', 'icon' => 'lnr-cloud'), array('description' => 'Agua caliente', 'icon' => 'lnr-sun'), array('description' => 'Zona para trabajar con netbooks', 'icon' => 'lnr-laptop-phone')))
        );
        
        if (array_key_exists($cabName, $cabArray)) {
            return view('cabDetail', ['cabDetail' => $cabArray[$cabName]]);
            //->with('cabDetail', $cabArray[$cabName]);
        }

        return redirect()->action('IndexController@index');
    }

}
