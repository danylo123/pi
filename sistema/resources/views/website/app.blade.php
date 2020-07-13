<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('/images/logo.png') }}">

    <title>Mercado de Serviços - @yield('titulo')</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="<?php echo asset('css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="<?php echo asset('css/carousel.css') ?>" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand text-hide" href="#">
                <img src="{{ url('/images/logo.png') }}" width="45px" height="35px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @if(Request::route()->getName() == '')
                    active
                    @endif">
                        <a class="nav-link" href="{{ url('/') }}">HOME <span class="sr-only">(atual)</span></a>
                    </li>
                    <li class="nav-item
                    @if(Request::route()->getName() == 'pesquisar')
                    active
                    @endif">
                        <a class="nav-link" href="{{ url('pesquisar') }}">SERVIÇOS</a>
                    </li>

                </ul>
                <a class="btn
                @if(Request::route()->getName() == 'login')
                btn-link 
                @else
                btn-link               
                @endif  my-2 my-sm-0" href="{{ url('/login') }}" style="color: #fff">Entre</a>
                <a class="btn @if(Request::route()->getName() == 'register')
                btn-light
                @else
                btn-light              
                @endif my-2 my-sm-0" href="{{ url('/register') }}" style="background: transparent; color: #fff;
">Cadastre-se</a>
            </div>
        </nav>
    </header>

    <main role="main">

        @yield('carosel')


        <!-- Mensagens de marketing e outras featurezinhas
      ================================================== -->
        <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

        <div class="container">
            <!-- container -->

            @yield('conteudo')

        </div><!-- /.container -->
        <footer class="footer fixed-bottom" style="position: relative;
    bottom: 0;
    width: 100%;
    margin: auto auto;
    padding-top: 15%">
            <div class="container text-center">
                <p class="navbar-text col-md-12 col-sm-12 col-xs-12">Copyright &copy; 2020 | Mercado de Serviços</p>
            </div>
        </footer>
    </main>

    <!-- FOOTER -->


    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo asset('js/vendor/jquery-slim.min.js') ?>"><\/script>')
    </script>
    <script src="<?php echo asset('js/vendor/popper.min.js') ?>"></script>
    <script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>

    <script src="<?php echo asset('js/vendor/holder.min.js') ?>"></script>
</body>

</html>