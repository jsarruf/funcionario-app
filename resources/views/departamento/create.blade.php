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