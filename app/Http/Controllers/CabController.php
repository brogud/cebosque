<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity\Cabin;
use App\Entity\Service;
use App\Entity\Feature;

class CabController extends Controller
{
    public function showAllCabs(){
        
        $cabArray = $this->CabModel();
        return view('cab', ['cabins' => $cabArray]);
    }

    public function showCab(string $cabName) {
       $cabArray = $this->CabModel();
        
        if (array_key_exists($cabName, $cabArray)) {
            return view('cabDetail', ['cabin' => $cabArray[$cabName], "banner" => $cabArray[$cabName]->getImages()[0]]);
        }
        return abort(404);
    }

    /**
    * @deprecated This funcition needs to be updated with a correct model class
    */
    public function CabModel() {
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
        $tucan->setIdentifier("Tucan");
        $tucan->setDescription("Cabaña equipada con artículos básicos para la preparación de alimentos, una sala en la planta baja, al igual en la planta alta posee un servicio sanitario junto con un baño, dos habitaciones (una con dos camas matromoniales y a otra con una cama matrimonial), también contine un balcón donde se observa el Valle de Turrialba, la Cordillera de Talamanca y la gran vegetación presente a su alrededor donde pueden ser visitados por una serie de aves.");
        $tucan->addImage("Tucan/tu1.jpg");
        $tucan->addImage("Tucan/tu2.jpg");
        $tucan->addImage("Tucan/tu3.jpg");
        $tucan->addImage("Tucan/tu4.jpg");
        $tucan->addImage("Tucan/tu5.jpg");
        $tucan->addImage("Tucan/tu6.jpg");
        $tucan->addImage("Tucan/tu7.jpg");
        $tucan->addImage("Tucan/tu8.jpg");


        $tucan->addService($service1);
        $tucan->addService($service2);
        $tucan->addService($service3);
        $tucan->addService($service4);

        $tucan->addFeature($feature1);
        $tucan->addFeature($feature2);
        $tucan->addFeature($feature3);
        $tucan->addFeature($feature4);
        
        $motmot = new Cabin();
        $motmot->setName("Motmot");
        $motmot->setIdentifier("Motmot");
        $motmot->setDescription("Cabaña equipada con artículos básicos para la preparación de alimentos, una sala en la planta baja, al igual en la planta alta posee un servicio sanitario junto con un baño, dos habitaciones (una con dos camas matromoniales y a otra con una cama matrimonial), también contine un balcón donde se observa el Valle de Turrialba, la Cordillera de Talamanca y la gran vegetación presente a su alrededor donde pueden ser visitados por una serie de aves.");
        $motmot->addImage("Momot/mo1.jpg");
        $motmot->addImage("Momot/mo2.jpg");
        $motmot->addImage("Momot/mo3.jpg");
        $motmot->addImage("Momot/mo4.jpg");
        $motmot->addImage("Momot/mo5.jpg");
        $motmot->addImage("Momot/mo6.jpg");
        $motmot->addImage("Momot/mo7.jpg");
        $motmot->addImage("Momot/mo8.jpg");
        $motmot->addImage("Momot/mo9.jpg");
        $motmot->addImage("Momot/mo10.jpg");
        $motmot->addImage("Momot/mo11.jpg");
        $motmot->addImage("Momot/mo12.jpg");
        

        $motmot->addService($service1);
        $motmot->addService($service2);
        $motmot->addService($service3);
        $motmot->addService($service4);
        $motmot->addFeature($feature1);
        $motmot->addFeature($feature2);
        $motmot->addFeature($feature3);
        $motmot->addFeature($feature4);

        $colibri = new Cabin();
        $colibri->setName("Colibrí");
        $colibri->setIdentifier("Colibri");
        $colibri->setDescription("Caba&ntilde;a equipada con art&iacute;culos b&aacute;sicos, con servicio sanitario y ba&ntilde;o; al igual posee un sof&aacute; cama junto a una cama matrimonial. En la planta baja posee espacio para estacionar veh&iacute;culo.");

        $colibri->addImage("Colibri/col1.jpg");
        $colibri->addImage("Colibri/col2.jpg");
        $colibri->addImage("Colibri/col3.jpg");
        $colibri->addImage("Colibri/col4.jpg");
        $colibri->addImage("Colibri/col5.jpg");
        $colibri->addImage("Colibri/col6.jpg");
        $colibri->addImage("Colibri/col7.jpg");
        $colibri->addImage("Colibri/col8.jpg");
        $colibri->addImage("Colibri/col9.jpg");
        $colibri->addImage("Colibri/col10.jpg");
        $colibri->addImage("Colibri/col11.jpg");
        $colibri->addImage("Colibri/col12.jpg");



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
        $lechuza->setIdentifier("Lechuza");
        $lechuza->setDescription("Les presentamos nuestra m&aacute;s reciente caba&ntilde;a llamada La Lechuza con una excelente vista hacia el Volc&aacute;n Turrialba, les invitamos a visitarnos y disfrutar de nuestras instalaciones rodeadas de naturaleza. Nuestras caba&ntilde;as se encuentran ubicadas en medio de un Bosque en Regeneraci&oacute;n, el cual la m&uacute;sica que nuestros hu&eacute;spedes escuchan es el canto de hermosas aves que viven en los alrededores...");

        $lechuza->addImage("Lechuza/le1.jpg");
        $lechuza->addImage("Lechuza/le2.jpg");
        $lechuza->addImage("Lechuza/le3.jpg");
        $lechuza->addImage("Lechuza/le4.jpg");
        $lechuza->addImage("Lechuza/le5.jpg");
        $lechuza->addImage("Lechuza/le6.jpg");
        

        $lechuza->addService($service1);
        $lechuza->addService($service2);
        $lechuza->addService($service3);
        $lechuza->addService($service4);
        $lechuza->addFeature($feature1);
        $lechuza->addFeature($feature2);
        $lechuza->addFeature($feature3);
        $lechuza->addFeature($feature4);

        $oropendula = new Cabin();
        $oropendula->setName("Orop&eacute;ndula");
        $oropendula->setIdentifier("Oropendula");
        $oropendula->setDescription("Caba&ntilde;a equipada con cama matrimonial, ba&ntilde;o con ducha, refrigeradora, cocina el&eacute;ctrica, sillon para descanso, balc&oacute;n con vista a nuestro bosque en regeneraci&oacute;n. ");

        
        $oropendula->addImage("Oropendula/or1.jpg");
        $oropendula->addImage("Oropendula/or2.jpg");
        $oropendula->addImage("Oropendula/or3.jpg");
        $oropendula->addImage("Oropendula/or4.jpg");
        $oropendula->addImage("Oropendula/or5.jpg");    

        $oropendula->addService($service1);
        $oropendula->addService($service2);
        $oropendula->addService($service3);
        $oropendula->addService($service4);
        $oropendula->addFeature($feature1);
        $oropendula->addFeature($feature2);
        $oropendula->addFeature($feature3);
        $oropendula->addFeature($feature4);

        $cabArray = array('Tucan' => $tucan, 'Motmot' => $motmot, 'Colibri' => $colibri, 'Lechuza' => $lechuza, 'Oropendula' => $oropendula);

        return $cabArray;
    }
}
