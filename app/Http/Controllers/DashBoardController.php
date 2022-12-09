<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurements;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index(){

      $measurements = Measurements::orderBy('date','desc')
        ->where('user_id',Auth::user()->id)
        ->take(5)
        ->get()
        ->reverse();

        $dados = [];

        foreach ($measurements as $key => $measurement) {
          $dados["dates"][] = date("d/m/Y", strtotime($measurement["date"]));
          $dados["chest"][] = $measurement["chest"];
          $dados["left_arm"][] = $measurement["left_arm"];
          $dados["right_arm"][] = $measurement["right_arm"];
          $dados["abdomen"][] = $measurement["abdomen"];
          $dados["waist"][] = $measurement["waist"];
          $dados["hips"][] = $measurement["hips"];
          $dados["left_thigh"][] = $measurement["left_thigh"];
          $dados["right_thigh"][] = $measurement["right_thigh"];
          $dados["left_calf"][] = $measurement["left_calf"];
          $dados["right_calf"][] = $measurement["right_calf"];
          $dados["weight"][] = $measurement["weight"];
          $dados["height"][] = $measurement["height"];
        }

      return view('/measurements/home',['dados' => $dados]);

    }//fim do index
}
