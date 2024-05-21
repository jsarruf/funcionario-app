<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbFuncionario;
use App\Models\TbDepartamento;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = TbFuncionario::with('departamento')->get();
        return view('funcionarios.index', ['funcionarios' => $funcionarios]);
    }

    public function create()
    {
        $departamentos = TbDepartamento::all();
        return view('funcionarios.create',['departamentos' => $departamentos]);
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        /*$request->validate([
            'fun_nome' => 'required|string',
            'fun_email' => 'required|email|unique:funcionarios,email',
            'fun_cpf' => 'required|string|unique:funcionarios,cpf',
            'fun_idade' => 'required|integer|min:18',
        ]);
*/
        TbFuncionario ::create($request->all());

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário criado com sucesso!');
    }

    public function show($id)
    {
        $funcionario = TbFuncionario ::findOrFail($id);
        return view('funcionarios.show', ['funcionario' => $funcionario]);
    }

    public function edit($id)
    {
        $funcionario = TbFuncionario ::findOrFail($id);
        $departamentos = TbDepartamento::all();
        return view('funcionarios.edit', ['funcionario' => $funcionario , 'departamentos' => $departamentos]);
    }

    public function update(Request $request, $id)
    {
       /* $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:funcionarios,email,' . $id,
            'cpf' => 'required|string|unique:funcionarios,cpf,' . $id,
            'idade' => 'required|integer|min:18',
     
        ]);*/

        $funcionario = TbFuncionario ::findOrFail($id);
        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $funcionario = TbFuncionario::findOrFail($id);
        $funcionario->delete();

        return redirect()->route('funcionarios.index')->with('success', 'Funcionário excluído com sucesso!');
    }
}
