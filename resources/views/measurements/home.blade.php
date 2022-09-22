<!DOCTYPE html>
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

    <title>Dshape - Home</title>
</head>
<body>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-1" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a href="/" class="navbar-brand">Dshape - Medição corporal</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/measurements">Lista de medições</a></li>
                    <li class="nav-item"><a class="nav-link" href="/measurements/new">Criar novo formulário de medição</a></li>
                </ul>
            </div>
        </div>
    </nav>

</body>