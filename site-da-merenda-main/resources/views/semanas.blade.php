<div class="container mt-4">

    <h3>Dias da Semana</h3>

    <form method="POST" action="{{ isset($editar) ? url('/semanas/atualizar/'.$editar->id) : url('/semanas') }}">
        @csrf

        <input type="text" name="nome_dia" class="form-control mb-2"
               value="{{ $editar->nome_dia ?? '' }}">

        <button class="btn btn-success">
            {{ isset($editar) ? 'Atualizar' : 'Salvar' }}
        </button>
    </form>

    <table class="table mt-3">
        @foreach($semanas as $s)
        <tr>
            <td>{{ $s->nome_dia }}</td>
            <td>
                <a href="{{ url('/semanas/editar/'.$s->id) }}" class="btn btn-warning btn-sm">
                    Editar
                </a>
            </td>
        </tr>
        @endforeach
    </table>

</div>
