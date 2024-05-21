<div class="container">
        <h1>Editar Departamento</h1>
        <form action="{{ route('departamentos.update', $departamentos->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $departamentos->dept_nome }}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>