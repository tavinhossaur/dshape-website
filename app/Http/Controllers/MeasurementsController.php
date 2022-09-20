<?php

namespace App\Http\Controllers;

use App\Models\Measurements;
use Illuminate\Http\Request;

class MeasurementsController extends Controller
{
    public function index(){
        $measurements = Measurements::all();
        return view('measurements/list', ['measurements' => $measurements]);
    }

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

        // Redirecionar para a página de medidas
        // Apenas para atualizar a tela
        return redirect('/measurements');
    }
    // Fim do método store

    public function destroy($id){
        $measurements = Measurements::findOrFail($id);
        $measurements -> delete();

        //Redirecionar para a página de medidas apenas para atualizar a tela
        return redirect('/measurements');
    }// Fim do método destroy

    public function update(Request $request, $id){
        // Buscar medida que será alterada
        $measurement = Measurements::findOrFail($id);
       
        $measurement -> date = $request -> date;
        $measurement -> weight = $request -> weight;
        $measurement -> height = $request -> height;
        $measurement -> chest = $request -> chest;
        $measurement -> left_arm = $request -> left_arm;
        $measurement -> right_arm = $request -> right_arm;
        $measurement -> abdomen = $request -> abdomen;
        $measurement -> waist = $request -> waist;
        $measurement -> hips = $request -> hips;
        $measurement -> left_thigh = $request -> left_thigh;
        $measurement -> right_thigh = $request -> right_thigh;
        $measurement -> left_calf = $request -> left_calf;
        $measurement -> right_calf = $request -> right_calf;
        // Realizar as alterações

        // Salvar alterações no bando de dados (UPDATE)
        $measurement -> update();

        // Redireciona para páginda de medidas
        return redirect('/measurements');
    }// Fim do método update

    public function show($id){
        // Busca pela medida específica
        $measurement = Measurements::findOrFail($id);

        // Retorna a view com a medida encontrada
        return view('measurements/form', ['measurement' => $measurement]);
    }// Fim do método show

}// Fim da classe
