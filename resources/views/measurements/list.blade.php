<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styles.css">
  <title>Lista</title>
</head>
<body>
  
</body>
</html>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-1" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white">Seja bem-vindo(a), {{auth()->user()->name}}</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/measurements/new">Criar novo formulário de medição</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Sair da conta</a></li>
                </ul>
            </div>
        </div>
    </nav>
  <div class="container">
    <div class="row">
      <div class="col-12 my-3">
        <br><br>
        <a class="btn btn-dark" href="/measurements/home">Voltar</a>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-dark text-white text-center">
            <h2>Medidas Cadastradas</h2>
          </div>
          <div class="card-body">
            <div class="container px-3 my-3">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($measurements->isEmpty())
                    <tr>
                      <td colspan="3" class="text-center">
                        Nenhuma medida cadastrada
                      </td>
                    </tr>
                  @else
                  @foreach ($measurements as $measurement)
                  <tr>
                    <th scope="row">{{$measurement->id}}</th>
                    <td>{{$measurement->date}}</td>
                    <td>

                      <a href="/measurements/edit/{{$measurement->id}}" class="btn btn-secondary"
                                 role="button">Editar</a>

                      <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                              data-bs-target="#confirmationModal" data-measurement-id="{{$measurement->id}}">
                        Excluir
                      </button>

                    </td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div><!-- fim do card-body -->
        </div> <!-- fim do card -->
      </div> <!-- fim da col -->
    </div> <!-- fim da row-->
  </div> <!-- fim da container -->


  <script src="{{ asset('/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Modal -->
  <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseja excluir essa medida?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <form action="" method="POST" id="formDeleteMeasurements">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-dark">Sim</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    //variável que recebe o elemento html(Modal)
    const confirmationModal = document.getElementById('confirmationModal');

    //adiciona um evento, toda vez que o modal for aberto
    confirmationModal.addEventListener('show.bs.modal', function (event) {
      //variável que recebe o botão que acionou o modal
      const button = event.relatedTarget
      //variável que recebe o formulário do modal
      const form = document.getElementById('formDeleteMeasurements');
      //Alterando o Action(rota) do formulário
      form.action = "/measurements/" + button.getAttribute('data-measurement-id');
    });

  </script>
