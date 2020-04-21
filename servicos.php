<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mercado de Serviços">
    <meta name="author" content="Automax - Serviços">
    <link rel="icon" href="img/favicon.ico">

    <title>Mercado de Serviços</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/carousel.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <a class="navbar-brand" href="index.php">Mercado de Serviços</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="servicos.php">Serviços <span class="sr-only">(atual)</span></a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="http://localhost/pi/sistema/public/">Entrar</a>
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

                <div class="card-deck mb-3 text-center">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="http://domusengconstrucao.com.br/wp-content/uploads/carpintaria.jpg" width="100" height="180" alt="{{ $s->nome }}">
                            <div class="card-body">
                                <h5 class="card-title">Serviço</h5>
                                <p class="card-text">Carpintaria</p>
                                <a class="btn btn-primary btn-block" href="http://localhost/pi/sistema/public/" id="contratar">Contratar</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-deck mb-3 text-center">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="http://domusengconstrucao.com.br/wp-content/uploads/carpintaria.jpg" width="100" height="180" alt="{{ $s->nome }}">
                            <div class="card-body">
                                <h5 class="card-title">Serviço</h5>
                                <p class="card-text">Carpintaria</p>
                                <a class="btn btn-primary btn-block" href="http://localhost/pi/sistema/public/" id="contratar">Contratar</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Voltar ao topo</a></p>
            <p>&copy; Automax, 2020 &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
        </footer>
    </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="js/holder.min.js"></script>
</body>

</html>