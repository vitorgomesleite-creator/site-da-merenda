<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cardápio da Merenda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="container mt-4">
  <div class="row">
    <div class="col-12 text-center bg-success text-white p-3">
      <h2>Cardápio da Merenda Escolar</h2>
    </div>
  </div>
</section>

<section class="container mt-4">
  <div class="row">
    @foreach ($semanas as $semana)
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-header bg-success text-white">
            {{ $semana->nome_dia }}
          </div>
          <div class="card-body">
            @if ($semana->cardapios->count())
              <ul>
                @foreach ($semana->cardapios as $item)
                  <li>{{ $item->prato->nome }}</li>
                @endforeach
              </ul>
            @else
              <p class="text-muted">Nenhum prato cadastrado</p>
            @endif
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>

</body>
</html>
