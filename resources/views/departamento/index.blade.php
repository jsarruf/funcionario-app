<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Lista de Departamento</h1>
                        <a href="{{ route('departamentos.create') }}" class="btn btn-primary mb-3">Adicionar Departamento</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($departamentos as $departamento)
                                <tr>
                                    <td>{{ $departamento->id }}</td>
                                    <td>{{ $departamento->dept_nome }}</td>
                                    <td>
                                        <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST" style="display: inline;">
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

   

