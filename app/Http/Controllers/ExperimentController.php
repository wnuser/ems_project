<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperimentController extends Controller
{

    // Experiments route 
    public function experiment($id)
    {
       if($id == 1) {
            return view('experiments.actophotometer');
       }elseif($id == 2) {
            return view('experiments.rota_rod_apparatus');
       }elseif($id == 3) {
        return view('experiments.diuretic_cage');
       }elseif($id == 4) {
        return view('experiments.analgesic_hot_plate');
       }elseif($id == 5) {
        return view('experiments.anticonvulsant_electro_convulsiometer_method1');
       }elseif($id == 6) {
        return view('experiments.anticonvulsant_electro_convulsiometer_method2');
       }else {

       }

    }

    //
    public function actophotometer()
    {
        return view('experiments.actophotometer');
    }
}
