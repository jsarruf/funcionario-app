<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbDepartamento;

class DepartamentosController extends Controller
{
    public function index()
    {
        $departamentos = TbDepartamento::all();
        return view('departamento.index', ['departamentos' => $departamentos]);
    }

    public function create()
    {
        return view('departamento.create');
    }

    public function store(Request $request)
    {
        TbDepartamento ::create($request->all());

        return redirect()->route('departamentos.index')->with('success', 'Departamento criado com sucesso!');
    }


    public function edit($id)
    {
        $departamento = TbDepartamento ::findOrFail($id);
        return view('departamento.edit', ['departamentos' => $departamento]);
    }

    public function update(Request $request, $id)
    {
        $departamento = TbDepartamento ::findOrFail($id);
        $departamento->update($request->all());

        return redirect()->route('departamentos.index')->with('success', 'Departamento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $departamento = TbDepartamento::findOrFail($id);
        $departamento->delete();

        return redirect()->route('departamentos.index')->with('success', 'Departamento excluído com sucesso!');
    }
}
