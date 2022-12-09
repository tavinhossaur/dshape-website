<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required metatags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="/css/styles.css">

    <title>DShape - Site para avaliação fisica</title>

  </head>
  <body>
    
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-1" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a href="/measurements/home" class="navbar-brand text-white">Seja bem-vindo(a), {{auth()->user()->name}}</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/measurements/list">Lista de medições</a></li>
                    <li class="nav-item"><a class="nav-link" href="/measurements/new">Criar novo formulário de medição</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout">Sair da conta</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container p-5">
    <!-- Gráficos -->
    <h2 class="text-black font-weight-bold mt-5">Seu progresso 🏋️‍♂️</h2>
    <div class="row">
        <div class="col-md-6">
          <div class="cardChart card shadow p-4 my-2">
            <canvas id="chart_chest"></canvas>
          </div>
        </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_abdomen"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_left_arm"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_right_arm"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_waist"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_hips"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_left_thigh"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_right_thigh"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_left_calf"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-4 my-2">
          <canvas id="chart_right_calf"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-5 my-2">
          <canvas id="chart_weight"></canvas>
        </div>
      </div> <!-- fim da col -->

      <div class="col-md-6">
        <div class="cardChart card shadow p-5 my-2">
          <canvas id="chart_height"></canvas>
        </div>
      </div> <!-- fim da col -->

    </div> <!-- fim da row-->
  </div> <!-- fim do container -->



  <!-- Importando o chart.js-->
  <script src="{{ asset('/js/chart.min.js') }}"></script>

  <script src="{{ asset('/js/createChart.js') }}"></script>

  <script>
    //Peito
    createChart("chart_chest", {!! json_encode($dados["dates"]) !!}, "Peito", {!! json_encode($dados["chest"]) !!}, "line");

    //Braço Direiro
    createChart("chart_right_arm", {!! json_encode($dados["dates"]) !!}, "Braço Direito", {!! json_encode($dados["right_arm"]) !!}, "line");

    //Braço Esquerdo
    createChart("chart_left_arm", {!! json_encode($dados["dates"]) !!}, "Braço Esquerdo",{!! json_encode($dados["left_arm"]) !!}, "line");

    //Abdomen
    createChart("chart_abdomen", {!! json_encode($dados["dates"]) !!}, "Abdomen",{!! json_encode($dados["abdomen"]) !!}, "line");

    //Waist
    createChart("chart_waist", {!! json_encode($dados["dates"]) !!}, "Cintura",{!! json_encode($dados["waist"]) !!}, "line");

    //Hips
    createChart("chart_hips", {!! json_encode($dados["dates"]) !!}, "Quadril",{!! json_encode($dados["hips"]) !!}, "line");

    //Coxa Esquerda
    createChart("chart_left_thigh", {!! json_encode($dados["dates"]) !!}, "Coxa Esquerda",{!! json_encode($dados["left_thigh"]) !!}, "line");

    //Coxa Direita
    createChart("chart_right_thigh", {!! json_encode($dados["dates"]) !!}, "Coxa Direita",{!! json_encode($dados["right_thigh"]) !!}, "line");

    //Panturrilha Esquerda
    createChart("chart_left_calf", {!! json_encode($dados["dates"]) !!}, "Panturrilha Esquerda",{!! json_encode($dados["left_calf"]) !!}, "line");
  
    //Panturrilha Direita
    createChart("chart_right_calf", {!! json_encode($dados["dates"]) !!}, "Panturrilha Direita",{!! json_encode($dados["right_calf"]) !!}, "line");

    //Peso
    createChart("chart_weight", {!! json_encode($dados["dates"]) !!}, "Peso",{!! json_encode($dados["weight"]) !!}, "bar");
  
    //Altura
    createChart("chart_height", {!! json_encode($dados["dates"]) !!}, "Altura",{!! json_encode($dados["height"]) !!}, "bar");
  </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="{{ asset('/js/scripts.bundle.min.js') }}"></script>

  </body>
</html>

