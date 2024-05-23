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

                    <label for="funcionario">Selecione o Funcionário:</label>
                    
                    <select id="funcionario" name="funcionario">
                        @foreach($funcionarios as $funcionario)
                        <option value="{{$funcionario->id}}">{{$funcionario->fun_nome}}</option>
                        @endforeach
                    </select>

                    <script>
                        function verificarHoraUtil() {
                            const datetime = document.getElementById('datetime').value;
                            const resultadoElem = document.getElementById('resultado');
                            fetch(`/verificar-hora-util?datetime=${encodeURIComponent(datetime)}`)
                                .then(response => response.json())
                                .then(data => {
                                    if (data.is_hora_util){
                                        resultadoElem.innerText =  'É hora útil';
                                        resultadoElem.className = 'alert alert-success';
                                    }
                                        else
                                    {    
                                        resultadoElem.innerText =  'Não é hora útil';                                    
                                        resultadoElem.className = 'alert alert-danger';
                                    }                                                          
                                })
                                .catch(error => console.error('Erro:', error));
                                resultadoElem.innerText = 'Erro: ' + error.message;
                                resultadoElem.className = 'alert alert-danger';
                        }
                    </script>
            
 
                    <div>
                        <label for="datetime">Data e Hora:</label>
                        <input type="time" id="datetime">
                        <button class="btn btn-success" type="submit" onclick="verificarHoraUtil()">Verificar</button>
                    </div>
                    <div id="resultado"></div>
         
          
                </div>
            </div>
        </div>
    </div>


</x-app-layout>

   

