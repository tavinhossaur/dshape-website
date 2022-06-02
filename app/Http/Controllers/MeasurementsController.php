<?php

namespace App\Http\Controllers;

use App\Models\Measurements;
use Illuminate\Http\Request;

class MeasurementsController extends Controller
{
    public function store(Request $request){
        // Criando um objeto
        $measurements = new Measurements();

        // Alterando os atributos do objeto
        $measurements -> date = $request -> date;
        $measurements -> weight = $request -> weight;
        $measurements -> height = $request -> height;
        $measurements -> chest = $request -> chest;
        $measurements -> left_arm = $request -> left_arm;
        $measurements -> right_arm = $request -> right_arm;
        $measurements -> abdomen = $request -> abdomen;
        $measurements -> waist = $request -> waist;
        $measurements -> hips = $request -> hips;
        $measurements -> left_thigh = $request -> left_thigh;
        $measurements -> right_thigh = $request -> right_thigh;
        $measurements -> left_calf = $request -> left_calf;
        $measurements -> right_calf = $request -> right_calf;

        // Salvando no banco de dados
        $measurements -> save();
    }
}
