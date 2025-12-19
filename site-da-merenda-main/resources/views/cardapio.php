<div class="container mt-4">

    <h3>Cardápio Semanal</h3>

    <form method="POST" action="{{ url('/cardapios') }}">
        @csrf

        <select name="semana_id" class="form-select mb-2">
            @foreach($semanas as $s)
                <option value="{{ $s->id }}">{{ $s->nome_dia }}</option>
            @endforeach
        </select>

        <select name="prato_id" class="form-select mb-2">
            @foreach($pratos as $p)
                <option value="{{ $p->id }}">{{ $p->nome }}</option>
            @endforeach
        </select>

        <button class="btn btn-success">Salvar</button>
    </form>

    <table class="table mt-3">
        @foreach($cardapios as $c)
        <tr>
            <td>{{ $c->semana->nome_dia }}</td>
            <td>{{ $c->prato->nome }}</td>
        </tr>
        @endforeach
    </table>

</div>
