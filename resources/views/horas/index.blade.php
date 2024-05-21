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

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="/submit_hours" method="post">
                    <label for="funcionario">Selecione o Funcionário:</label>
                    
                    <select id="funcionario" name="funcionario">
                        @foreach($funcionarios as $funcionario)
                        <option value="{{$funcionario->id}}">{{$funcionario->fun_nome}}</option>
                        @endforeach
                    </select>

                    <label for="horas_inicio">Horas Início:</label>
                    <input type="text" id="horas_inicio" name="horas_inicio" placeholder="Digite as hora início">
                    <input type="time" id="appt-time" name="appt-time" min="09:00" max="18:00" step="1800">


                    <label for="horas_fim">Horas Fim:</label>
                    <input type="text" id="horas_fim" name="horas_fim" placeholder="Digite as hora final">

                    <input type="submit" value="Registrar Horas">
                </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

   

