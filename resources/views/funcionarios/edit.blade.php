<div class="container">
        <h1>Editar Funcionário</h1>
        <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $funcionario->fun_nome }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $funcionario->fun_email }}">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $funcionario->fun_cpf }}">
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade" class="form-control" value="{{ $funcionario->fun_idade }}">
            </div>
            <div class="form-group">
                <select class="form-control" name="dept_cod">
                    @foreach($departamentos as $deparatamento)
                    <option value="{{$deparatamento->id}}">{{$deparatamento->dept_nome}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>