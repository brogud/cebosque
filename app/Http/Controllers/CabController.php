<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabController extends Controller
{
    public function index(){
        
        $cabs = [
            'Motmot',
            'Túcan',
            'Oropendula',
            '<script>alert(":V")</script>'
        ];

        $title = 'Cabañas';

        /*return view('cab',[
            'title' => 'Cabañas',
            'cabs' => $cabs
        ]);*/ //Esta es una forma de pasar parametros (Array asociativo)

        /*return view('cab')
            ->with('cabs', $cabs)
            ->with('title', "Cabañas");*/ 
            //Esta es una forma de pasar parametros, el tercero es más limpio

         return view('cab',compact('title', 'cabs')); //Array asociativo con compact
    }

    public function show($id){
        return "Mostrando detalle de la cabaña {$id}";
    }
}
