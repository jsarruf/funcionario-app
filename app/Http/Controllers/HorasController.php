<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\JornadaTrabalhoController;
use App\Models\TbFuncionario;
use App\Models\TbDepartamento;
use Carbon\Carbon;

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

    
    public function verificarHoraUtil(Request $request)
    {
        $datetime = $request->query('datetime');
        $date = Carbon::parse($datetime);

        // Suponha que o horário útil seja de segunda a sexta-feira, das 9h às 18h
        $isBusinessHour = $date->isWeekday() && $date->hour >= 9 && $date->hour < 18;

        return response()->json(['is_hora_util' => $isBusinessHour]);
    }
}
