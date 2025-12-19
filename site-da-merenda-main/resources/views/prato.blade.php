<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pratos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h3>Cadastro de Pratos</h3>

    <form method="POST" action="{{ isset($editar) ? url('/pratos/atualizar/'.$editar->id) : url('/pratos') }}">
        @csrf

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control"
                   value="{{ $editar->nome ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control">{{ $editar->descricao ?? '' }}</textarea>
        </div>

        <button class="btn btn-success">
            {{ isset($editar) ? 'Atualizar' : 'Salvar' }}
        </button>
    </form>

    <hr>

    <h4>Lista de Pratos</h4>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pratos as $p)
            <tr>
                <td>{{ $p->nome }}</td>
                <td>{{ $p->descricao }}</td>
                <td>
                    <a href="{{ url('/pratos/editar/'.$p->id) }}" class="btn btn-warning btn-sm">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
