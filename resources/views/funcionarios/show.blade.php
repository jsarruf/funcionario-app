<div class="container">
        <h1>Detalhes do Funcionário</h1>
        <p><strong>Nome:</strong> {{ $funcionario->fun_nome }}</p>
        <p><strong>Email:</strong> {{ $funcionario->fun_email }}</p>
        <p><strong>CPF:</strong> {{ $funcionario->fun_cpf }}</p>
        <p><strong>Idade:</strong> {{ $funcionario->fun_idade }}</p>
        <a href="{{ route('funcionarios.index') }}" class="btn btn-primary">Voltar</a>
    </div>