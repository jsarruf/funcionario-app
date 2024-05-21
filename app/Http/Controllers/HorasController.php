<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\JornadaTrabalhoController;
use App\Models\TbFuncionario;
use App\Models\TbDepartamento;

class HorasController extends Controller
{
    public function index()
    {
        $funcionarios = TbFuncionario::with('departamento')->get();
        return view('horas.index' , ['funcionarios' => $funcionarios]);
    }

    public function gerar($funcionario)
    {
        $jornada = new  JornadaTrabalhoController($funcionario);
        $horarios = $jornada.gerarJornada();
        return view('horas.index' , ['funcionarios' => $funcionarios,
                                    'horarios' => $horarios]);
    }
}
