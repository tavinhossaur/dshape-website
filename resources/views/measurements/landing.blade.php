@extends('./layouts/main')

@section('container')
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="cabecalho py-5">
            <div class="container px-4 px-lg-5 h-100 py-3">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-100 align-self-end">
                        <h1 class="text-black font-weight-bold">Conheça o Dshape</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-12 align-self-baseline p-4">
                        <h4 class="mb-1">
                            Dshape é o site criado pela sala do 3ºDS da ETEC João Belarmino para fins de estudo da modalidade de desenvolvimento web, 
                            utilizando o framework Laravel. O site tem como principal função a medição corporal dos membros do corpo humano, 
                            útil para pessoas que frequentam uma academia.</h4>
                    </div>
                    <hr class="divider" />
                </div>
            </div>
        </header>
        <!-- Detalhes-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-2 fixed-center mb-4">
                <div class="row gx-4 gx-lg-2">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-2">
                            <div class="mb-2"><i class="bi-person fs-1"></i></div>
                            <h3 class="h4 mb-2">Meça seus músculos</h3>
                            <p class="text-muted mb-0">Faça a medição dos seus músculos e os salve aqui!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-2">
                            <div class="mb-2"><i class="bi-laptop fs-1"></i></div>
                            <h3 class="h4 mb-2">Acompanhe seu progresso</h3>
                            <p class="text-muted mb-0">Suas medições sempre estarão aqui para você ver.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-2">
                            <div class="mb-2"><i class="bi-arrow-up fs-1"></i></div>
                            <h3 class="h4 mb-2">Veja como você evoluiu</h3>
                            <p class="text-muted mb-0">Compare medidas antigas e medidas atuais e veja o quanto você mudou!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-2">
                            <div class="mb-2"><i class="bi-heart fs-1"></i></div>
                            <h3 class="h4 mb-2">Feito com amor</h3>
                            <p class="text-muted mb-0">Site feito pela sala do 3ºDS junto do professor Fernando Bartholomeu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5">
            <div class="container px-4 px-lg-5 fixed-bottom py-3">
                <div class="small text-center text-muted">Dshape 2022 - Tavinho - 3ºDS Desenvolvimento de Sistemas ETEC João Belarmino</div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

@endsection
