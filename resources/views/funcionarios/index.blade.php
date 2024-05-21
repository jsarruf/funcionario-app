<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funcionários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Lista de Funcionários</h1>
                        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary mb-3">Adicionar Funcionário</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>CPF</th>
                                    <th>Idade</th>
                                    <th>Categoria</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($funcionarios as $funcionario)
                                <tr>
                                    <td>{{ $funcionario->id }}</td>
                                    <td>{{ $funcionario->fun_nome }}</td>
                                    <td>{{ $funcionario->fun_email }}</td>
                                    <td>{{ $funcionario->fun_cpf }}</td>
                                    <td>{{ $funcionario->fun_idade }}</td>
                                    <td>{{ $funcionario->departamento->dept_nome ?? 'Sem Departamento' }}</td>
                                    <td>
                                        <a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-info">Ver</a>
                                        <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

   

