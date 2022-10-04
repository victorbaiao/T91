<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
      @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer>

        <script src="https://cdn.tailwindcss.com"></script>

    </script>
    <style>
        footer {
            width: 75%;
            position: fixed;
            bottom:0;
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- MENU --}}
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    Fluxo de Caixa
                    - {{ Auth::user()->nome }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavFluxo"
                    aria-controls="navbarNavFluxo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavFluxo">
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">
                           Home
                        </a>
                        <a class="nav-link" href="#">
                            Lançamento de Peças
                        </a>
                        <a class="nav-link" href="#">
                            Montar seu Computador
                        </a>
                        <a class="nav-link" href="#">
                            Carrinho
                        </a>
                        <a class="nav-link" href="#">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        {{-- /MENU --}}


        {{-- CONTEÚDO --}}
        @section('content')
	{{--  tudo que estiver aqui irá ser renderizado no nosso template --}}
    <h1>Pecãs de Computador</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ano de Fabricação</th>
            <th scope="col">Valor</th>
          </tr>
        </thead>
        <tbody>

        <tr>
            <th>{{ $pecas->id }}</th>
            <th>{{ $pecas->nome }}</th>
            <th>{{ $pecas->criar }}</th>
            <th>{{ $pecas->editar  }}</th>
            <th>{{ $pecas->excluir }}</th>

      </tr>
     @endforeach
    </tbody>
  </table>
        {{-- CONTEÚDO --}}
    </div>
</body>
@yield('script')
</html>
