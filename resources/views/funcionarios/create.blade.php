<div class="container">
    <h1>Adicionar Funcionário</h1>
    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="fun_nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="fun_email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="fun_cpf" id="cpf" class="form-control">
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" name="fun_idade" id="idade" class="form-control">
        </div>
        <div class="form-group">
            <label for="departamento">Departamento:</label>
            <select class="form-control" name="dept_codigo">
                @foreach($departamentos as $departamento)
                    <option value="{{$departamento->id}}">{{$departamento->dept_nome}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>