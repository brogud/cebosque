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

    public function showCab(string $cabName) {

        /*
            Creación de servicios de habitación.
        */
        $service1 = new Service();
        $service1->setName("Televisión por cable");
        $service1->setIcon("fas fa-tv");

        $service2 = new Service();
        $service2->setName("Agua caliente");
        $service2->setIcon("fas fa-shower");

        $service3 = new Service();
        $service3->setName('Wifi');
        $service3->setIcon('fas fa-wifi');

        $service4 = new Service();
        $service4->setName('Zona para trabajar con netbooks');
        $service4->setIcon('fas fa-laptop');

        /*
            Creación de las características de la habitación
        */

        $feature1 = new Feature();
        $feature1->setName('Huéspedes');
        $feature1->setValue('2');
        $feature1->setIcon('fas fa-user-friends');

        $feature2 = new Feature();
        $feature2->setName('Dormitorio');
        $feature2->setValue('1');
        $feature2->setIcon('fas fa-door-open');

        $feature3 = new Feature();
        $feature3->setName('Cama');
        $feature3->setValue('1');
        $feature3->setIcon('fas fa-bed');

        $feature4 = new Feature();
        $feature4->setName('Baño');
        $feature4->setValue('1');
        $feature4->setIcon("fas fa-bath");

        $tucan = new Cabin();
        $tucan->setName("Tucán");
        $tucan->setDescription("Cabaña equipada con artículos básicos para la preparación de alimentos, una sala en la planta baja, al igual en la planta alta posee un servicio sanitario junto con un baño, dos habitaciones (una con dos camas matromoniales y a otra con una cama matrimonial), también contine un balcón donde se observa el Valle de Turrialba, la Cordillera de Talamanca y la gran vegetación presente a su alrededor donde pueden ser visitados por una serie de aves.");
        $tucan->setPrice('₡39,934');
        $tucan->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/12829375_1898805013679135_3059892016459349272_o.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=e88c94920e62dc4a23f5560f91c34d75&oe=5CD49D8D");
        $tucan->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/12799097_1896731380553165_7202097831249211714_n.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=7d80d621b836c75d8bf59022cb7468d5&oe=5CC087E5");
        $tucan->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/13240682_1938500959709540_4522071452483574883_n.jpg?_nc_cat=104&_nc_ht=scontent.fsyq1-1.fna&oh=f318b63978d974f60d89510a891e5ded&oe=5CBF91C9");
        $tucan->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15994933_2088752328017735_5087035091306290604_o.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=93735c40b51f7c296e554228a5c8059b&oe=5CD68F42");
        $tucan->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/14352257_2009002189326083_6787347921209471053_o.jpg?_nc_cat=101&_nc_ht=scontent.fsyq1-1.fna&oh=ec24ff97399ce5273063363efb796c15&oe=5C909F2A");
        $tucan->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15403627_2061686267391008_3696920128150782756_o.jpg?_nc_cat=111&_nc_ht=scontent.fsyq1-1.fna&oh=ad50f0caf69f4b2ddba8fabd680fba2d&oe=5C8DC1D5");
        $tucan->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/1962860_1528176654075308_123082910_n.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=492b5fca629c1cf3a5294b7910db988c&oe=5C90F587");
        $tucan->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/39937435_2483973265162304_8759419181230718976_o.jpg?_nc_cat=103&_nc_ht=scontent.fsyq1-1.fna&oh=2bb822f0d6c96cf0a8c68ccfa56080ad&oe=5CD0A61F");
        

        $tucan->addService($service1);
        $tucan->addService($service2);
        $tucan->addService($service3);
        $tucan->addService($service4);

        $tucan->addFeature($feature1);
        $tucan->addFeature($feature2);
        $tucan->addFeature($feature3);
        $tucan->addFeature($feature4);
        
        $momot = new Cabin();
        $momot->setName("Momot");
        $momot->setDescription("Cabaña equipada con artículos básicos para la preparación de alimentos, una sala en la planta baja, al igual en la planta alta posee un servicio sanitario junto con un baño, dos habitaciones (una con dos camas matromoniales y a otra con una cama matrimonial), también contine un balcón donde se observa el Valle de Turrialba, la Cordillera de Talamanca y la gran vegetación presente a su alrededor donde pueden ser visitados por una serie de aves.");
        $momot->setPrice('₡39,934');
        $momot->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/12829375_1898805013679135_3059892016459349272_o.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=e88c94920e62dc4a23f5560f91c34d75&oe=5CD49D8D");
        $momot->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/12799097_1896731380553165_7202097831249211714_n.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=7d80d621b836c75d8bf59022cb7468d5&oe=5CC087E5");
        $momot->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/13240682_1938500959709540_4522071452483574883_n.jpg?_nc_cat=104&_nc_ht=scontent.fsyq1-1.fna&oh=f318b63978d974f60d89510a891e5ded&oe=5CBF91C9");
        $momot->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15994933_2088752328017735_5087035091306290604_o.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=93735c40b51f7c296e554228a5c8059b&oe=5CD68F42");
        $momot->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/14352257_2009002189326083_6787347921209471053_o.jpg?_nc_cat=101&_nc_ht=scontent.fsyq1-1.fna&oh=ec24ff97399ce5273063363efb796c15&oe=5C909F2A");
        $momot->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15403627_2061686267391008_3696920128150782756_o.jpg?_nc_cat=111&_nc_ht=scontent.fsyq1-1.fna&oh=ad50f0caf69f4b2ddba8fabd680fba2d&oe=5C8DC1D5");
        $momot->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/1962860_1528176654075308_123082910_n.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=492b5fca629c1cf3a5294b7910db988c&oe=5C90F587");
        $momot->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/39937435_2483973265162304_8759419181230718976_o.jpg?_nc_cat=103&_nc_ht=scontent.fsyq1-1.fna&oh=2bb822f0d6c96cf0a8c68ccfa56080ad&oe=5CD0A61F");
        

        $momot->addService($service1);
        $momot->addService($service2);
        $momot->addService($service3);
        $momot->addService($service4);
        $momot->addFeature($feature1);
        $momot->addFeature($feature2);
        $momot->addFeature($feature3);
        $momot->addFeature($feature4);

        $colibri = new Cabin();
        $colibri->setName("Colibrí");
        $colibri->setDescription("Cabaña equipada con artículos básicos para la preparación de alimentos, una sala en la planta baja, al igual en la planta alta posee un servicio sanitario junto con un baño, dos habitaciones (una con dos camas matromoniales y a otra con una cama matrimonial), también contine un balcón donde se observa el Valle de Turrialba, la Cordillera de Talamanca y la gran vegetación presente a su alrededor donde pueden ser visitados por una serie de aves.");
        $colibri->setPrice('₡39,934');
        $colibri->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/12829375_1898805013679135_3059892016459349272_o.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=e88c94920e62dc4a23f5560f91c34d75&oe=5CD49D8D");
        $colibri->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/12799097_1896731380553165_7202097831249211714_n.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=7d80d621b836c75d8bf59022cb7468d5&oe=5CC087E5");
        $colibri->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/13240682_1938500959709540_4522071452483574883_n.jpg?_nc_cat=104&_nc_ht=scontent.fsyq1-1.fna&oh=f318b63978d974f60d89510a891e5ded&oe=5CBF91C9");
        $colibri->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15994933_2088752328017735_5087035091306290604_o.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=93735c40b51f7c296e554228a5c8059b&oe=5CD68F42");
        $colibri->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/14352257_2009002189326083_6787347921209471053_o.jpg?_nc_cat=101&_nc_ht=scontent.fsyq1-1.fna&oh=ec24ff97399ce5273063363efb796c15&oe=5C909F2A");
        $colibri->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15403627_2061686267391008_3696920128150782756_o.jpg?_nc_cat=111&_nc_ht=scontent.fsyq1-1.fna&oh=ad50f0caf69f4b2ddba8fabd680fba2d&oe=5C8DC1D5");
        $colibri->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/1962860_1528176654075308_123082910_n.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=492b5fca629c1cf3a5294b7910db988c&oe=5C90F587");
        $colibri->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/39937435_2483973265162304_8759419181230718976_o.jpg?_nc_cat=103&_nc_ht=scontent.fsyq1-1.fna&oh=2bb822f0d6c96cf0a8c68ccfa56080ad&oe=5CD0A61F");
        

        $colibri->addService($service1);
        $colibri->addService($service2);
        $colibri->addService($service3);
        $colibri->addService($service4);
        $colibri->addFeature($feature1);
        $colibri->addFeature($feature2);
        $colibri->addFeature($feature3);
        $colibri->addFeature($feature4);

        $lechuza = new Cabin();
        $lechuza->setName("Lechuza");
        $lechuza->setDescription("Cabaña equipada con artículos básicos para la preparación de alimentos, una sala en la planta baja, al igual en la planta alta posee un servicio sanitario junto con un baño, dos habitaciones (una con dos camas matromoniales y a otra con una cama matrimonial), también contine un balcón donde se observa el Valle de Turrialba, la Cordillera de Talamanca y la gran vegetación presente a su alrededor donde pueden ser visitados por una serie de aves.");
        $lechuza->setPrice('₡39,934');
        $lechuza->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/12829375_1898805013679135_3059892016459349272_o.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=e88c94920e62dc4a23f5560f91c34d75&oe=5CD49D8D");
        $lechuza->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/12799097_1896731380553165_7202097831249211714_n.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=7d80d621b836c75d8bf59022cb7468d5&oe=5CC087E5");
        $lechuza->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/13240682_1938500959709540_4522071452483574883_n.jpg?_nc_cat=104&_nc_ht=scontent.fsyq1-1.fna&oh=f318b63978d974f60d89510a891e5ded&oe=5CBF91C9");
        $lechuza->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15994933_2088752328017735_5087035091306290604_o.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=93735c40b51f7c296e554228a5c8059b&oe=5CD68F42");
        $lechuza->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/14352257_2009002189326083_6787347921209471053_o.jpg?_nc_cat=101&_nc_ht=scontent.fsyq1-1.fna&oh=ec24ff97399ce5273063363efb796c15&oe=5C909F2A");
        $lechuza->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15403627_2061686267391008_3696920128150782756_o.jpg?_nc_cat=111&_nc_ht=scontent.fsyq1-1.fna&oh=ad50f0caf69f4b2ddba8fabd680fba2d&oe=5C8DC1D5");
        $lechuza->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/1962860_1528176654075308_123082910_n.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=492b5fca629c1cf3a5294b7910db988c&oe=5C90F587");
        $lechuza->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/39937435_2483973265162304_8759419181230718976_o.jpg?_nc_cat=103&_nc_ht=scontent.fsyq1-1.fna&oh=2bb822f0d6c96cf0a8c68ccfa56080ad&oe=5CD0A61F");
        

        $lechuza->addService($service1);
        $lechuza->addService($service2);
        $lechuza->addService($service3);
        $lechuza->addService($service4);
        $lechuza->addFeature($feature1);
        $lechuza->addFeature($feature2);
        $lechuza->addFeature($feature3);
        $lechuza->addFeature($feature4);

        $oropendula = new Cabin();
        $oropendula->setName("Oropéndula");
        $oropendula->setDescription("Cabaña equipada con artículos básicos para la preparación de alimentos, una sala en la planta baja, al igual en la planta alta posee un servicio sanitario junto con un baño, dos habitaciones (una con dos camas matromoniales y a otra con una cama matrimonial), también contine un balcón donde se observa el Valle de Turrialba, la Cordillera de Talamanca y la gran vegetación presente a su alrededor donde pueden ser visitados por una serie de aves.");
        $oropendula->setPrice('₡39,934');
        $oropendula->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/12829375_1898805013679135_3059892016459349272_o.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=e88c94920e62dc4a23f5560f91c34d75&oe=5CD49D8D");
        $oropendula->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/12799097_1896731380553165_7202097831249211714_n.jpg?_nc_cat=102&_nc_ht=scontent.fsyq1-1.fna&oh=7d80d621b836c75d8bf59022cb7468d5&oe=5CC087E5");
        $oropendula->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/13240682_1938500959709540_4522071452483574883_n.jpg?_nc_cat=104&_nc_ht=scontent.fsyq1-1.fna&oh=f318b63978d974f60d89510a891e5ded&oe=5CBF91C9");
        $oropendula->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15994933_2088752328017735_5087035091306290604_o.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=93735c40b51f7c296e554228a5c8059b&oe=5CD68F42");
        $oropendula->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/14352257_2009002189326083_6787347921209471053_o.jpg?_nc_cat=101&_nc_ht=scontent.fsyq1-1.fna&oh=ec24ff97399ce5273063363efb796c15&oe=5C909F2A");
        $oropendula->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t31.0-8/15403627_2061686267391008_3696920128150782756_o.jpg?_nc_cat=111&_nc_ht=scontent.fsyq1-1.fna&oh=ad50f0caf69f4b2ddba8fabd680fba2d&oe=5C8DC1D5");
        $oropendula->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/1962860_1528176654075308_123082910_n.jpg?_nc_cat=108&_nc_ht=scontent.fsyq1-1.fna&oh=492b5fca629c1cf3a5294b7910db988c&oe=5C90F587");
        $oropendula->addImage("https://scontent.fsyq1-1.fna.fbcdn.net/v/t1.0-9/39937435_2483973265162304_8759419181230718976_o.jpg?_nc_cat=103&_nc_ht=scontent.fsyq1-1.fna&oh=2bb822f0d6c96cf0a8c68ccfa56080ad&oe=5CD0A61F");
        

        $oropendula->addService($service1);
        $oropendula->addService($service2);
        $oropendula->addService($service3);
        $oropendula->addService($service4);
        $oropendula->addFeature($feature1);
        $oropendula->addFeature($feature2);
        $oropendula->addFeature($feature3);
        $oropendula->addFeature($feature4);

        $cabArray = array('tucan' => $tucan, 'momot' => $momot, 'colibri' => $colibri, 'lechuza' => $lechuza, 'oropendula' => $oropendula);
/*
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
*/
        
        if (array_key_exists($cabName, $cabArray)) {
            return view('cabDetail', ['cabin' => $cabArray[$cabName]]);
            //->with('cabDetail', $cabArray[$cabName]);
        }

        return redirect()->action('IndexController@index');
    }

}
