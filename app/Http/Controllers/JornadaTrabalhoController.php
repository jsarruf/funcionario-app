<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JornadaTrabalhoController extends Controller
{
    private $funcionario;

    public function __construct(Funcionario $funcionario) {
        $this->funcionario = $funcionario;
    }

    public function gerarJornada() {
        $horariosUteis = [];
        $currentDate = new DateTime();
        
        for ($i = 0; $i < 30; $i++) {
            $dateString = $currentDate->format('Y-m-d');

            // Manhã
            for ($hour = 9; $hour < 12; $hour++) {
                $horariosUteis[] = $dateString . ' ' . $hour . ':00:00';
            }

            // Tarde
            for ($hour = 13; $hour < 18; $hour++) {
                $horariosUteis[] = $dateString . ' ' . $hour . ':00:00';
            }

            $currentDate->modify('+1 day');
        }

        return $horariosUteis;
    }

    public function isHoraUtil(DateTime $datetime) {
        $hour = (int) $datetime->format('H');
        return ($hour >= 9 && $hour < 12) || ($hour >= 13 && $hour < 18);
    }
}
