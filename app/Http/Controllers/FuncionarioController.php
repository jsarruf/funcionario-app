<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Funcionario extends Controller
{
    private $nome;
    private $email;
    private $cpf;
    private $idade;
    private $departamento;

    public function __construct($nome, $email, $cpf, $idade, Departamento $departamento) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->departamento = $departamento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento(Departamento $departamento) {
        $this->departamento = $departamento;
    }

    public function exibirInformacoes() {
        return "Nome: " . $this->nome . "\nEmail: " . $this->email . "\nCPF: " . $this->cpf . "\nIdade: " . $this->idade . "\nDepartamento: " . $this->departamento->getNome();
    }


    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', ['funcionarios' => $funcionarios]);
    }
}
