<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horas') }}
        </h2>
    </x-slot>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        select, input[type="text"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

<div class="container">
        <h1>Adicionar Departamento</h1>
        <form action="{{ route('departamentos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="dept_nome" id="nome" class="form-control">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    </x-app-layout>