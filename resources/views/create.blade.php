@section('content')
    {{--  tudo que estiver aqui irá ser renderizado no nosso template --}}
    <div class="container mt-5">
        <h1>Adicione uma peça nova</h1>
        <hr>
        <form action="" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite um Nome...">
                </div>
<br>
                <div class="form-group">
                  <label for="categoria">Categoria:</label>
                  <input type="text" class="form-control" name="categoria" placeholder="Digite a Categoria da Peça...">
              </div>
<br>
              <div class="form-group">
                <label for="ano_criacao">Ano de Criação:</label>
                <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o Ano de Fabricação...">
            </div>
<br>
            <div class="form-group">
              <label for="valor">Valor:</label>
              <input type="number" class="form-control" name="valor" placeholder="Digite o valor da Peça...">
          </div>
<br>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>

            </div>
        </form>
    </div>
@endsection
