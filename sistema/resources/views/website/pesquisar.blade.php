<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mercado de Serviços">
    <meta name="author" content="Automax - Serviços">
    <link rel="icon" href="">

    <title>Mercado de Serviços</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <a class="navbar-brand" href="{{ url('/') }}">Mercado de Serviços</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/pesquisar') }}">Serviços <span class="sr-only">(atual)</span></a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="{{ url('login') }}">Entrar</a>
                </form>
            </div>
        </nav>
    </header>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="https://gestaodesegurancaprivada.com.br/wp-content/uploads/prestador-de-servi%C3%A7o-defini%C3%A7%C3%A3o.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Mercado de serviços</h1>
                            <p>Texto explicativo sobre o Mercado de Serviços</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Ler mais</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="https://gestaodesegurancaprivada.com.br/wp-content/uploads/prestador-de-servi%C3%A7o-defini%C3%A7%C3%A3o.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Outra manchete</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="https://gestaodesegurancaprivada.com.br/wp-content/uploads/prestador-de-servi%C3%A7o-defini%C3%A7%C3%A3o.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Outra manchete, pra garantir</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Voltar</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Avançar</span>
            </a>
        </div>


        <div class="container marketing">
            <div class="row">
                @foreach ($servico as $s)
                <div class="col-md-4">
                    <div class="card">
                        <div id="{{ url('storage/servicos/'.$s->id) }}" class="carousel slide card-img-top" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach( $s->arquivo as $photo )
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner">
                                @foreach( $s->arquivo as $i )
                                <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                                    <img class="d-block w-100" src="{{ url('storage/servicos/'.$i->arquivo) }}" alt="{{ $s->nome }}">
                                </div>
                                @endforeach
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $s->nome }}</h5>
                            <p class="card-text">Margem de preço: R$ {{ $s->menor_preco }} ~ R$ {{ $s->maior_preco }}</p>

                            <a href="{{ url('servico/contratar/'.$s->id) }}" class="btn btn-primary btn-block" type="button" id="dropdownMenuButton">Contratar</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Voltar ao topo</a></p>
            <p>&copy; Companhia S.A., 2017-2018 &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
        </footer>
    </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write("<script src='{{ asset('js/jquery-slim.min.js') }}'><\/script>");
    </script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="{{ asset('js/holder.min.js') }}"></script>
</body>

</html>