<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de apoio a ordem DeMolay Cearense">
    <title>Automax - @yield('titulo')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        #loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <link href="<?php echo asset('css/style.css') ?>" rel="stylesheet">
</head>

<body class="app">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <script type="c4c66d0321ac18206eb8bb66-text/javascript">
        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.classList.add('fadeOut');
            }, 300);
        });
    </script>
    <div>
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                        <div class="peer peer-greed"><a class="sidebar-link td-n" href="{{ url('/') }}" class="td-n">
                                <div class="peers ai-c fxw-nw">
                                    <div class="peer">
                                        <div class="logo"><img src="https://pngimage.net/wp-content/uploads/2018/06/icone-servi%C3%A7os-png-7.png" width="65" alt="40"></div>
                                    </div>
                                    <div class="peer peer-greed">
                                        <h5 class="lh-1 mB-0 logo-text">Automax</h5>
                                    </div>
                                </div>
                            </a></div>
                        <div class="peer">
                            <div class="mobile-toggle sidebar-toggle"><a href="{{ url('/') }}" class="td-n"><i class="ti-arrow-circle-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="sidebar-menu scrollable pos-r">

                    <li class="nav-item mT-30 active"><a class="sidebar-link" href="{{ url('/') }}" default><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Inicio</span></a></li>

                    <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-orange-500 ti-gallery"></i> </span><span class="title">Serviços</span>
                            <span class="arrow"><i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="sidebar-link" href="{{ url('/servico/cadastro') }}">Cadastrar</a></li>
                            <li><a class="sidebar-link" href="{{ url('/servico/listar') }}">Listar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-orange-500 ti-user"></i> </span><span class="title">Usuários </span>
                            <span class="arrow"><i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="sidebar-link" href="{{ url('/usuario/cadastro') }}">Cadastrar</a></li>
                            <li><a class="sidebar-link" href="{{ url('/usuario/listar') }}">Listar</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="sidebar-link" href="{{ url('/ouvidoria') }}"><span class="icon-holder"><i class="c-indigo-500 ti-headphone"></i> </span><span class="title">Ouvidoria</span></a></li>

                    <li class="nav-item"><a class="sidebar-link" href="{{ url('/duvidas') }}"><span class="icon-holder"><i class="c-light-blue-500 ti-help-alt"></i> </span><span class="title">Dúvidas Frequentes</span></a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="page-container">
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a>
                        </li>
                        <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
                        <li class="search-input"><input class="form-control" type="text" placeholder="Procurar..."></li>
                    </ul>
                    <ul class="nav-right">
                        <li class="notifications dropdown"><span class="counter bgc-red">1</span> <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
                            <ul class="dropdown-menu">
                                <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Notificações</span></li>
                                <li>
                                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                        <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                                <div class="peer peer-greed"><span><span class="fw-500">Usuário</span> <span class="c-grey-600">liked your <span class="text-dark">post</span></span></span>
                                                    <p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
                                                </div>
                                            </a></li>

                                    </ul>
                                </li>
                                <li class="pX-20 pY-15 ta-c bdT"><span><a href="" class="c-grey-600 cH-blue fsz-sm td-n">
                                            Ver todas<i class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                                <div class="peer"><span class="fsz-sm c-grey-900">Usuário</span></div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                                <li><a href="{{ url('/perfil') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i>
                                        <span>Perfil</span></a></li>
                                <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i>
                                        <span>Messagens</span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i>
                                        <span>Sair</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    @yield('conteudo')
                </div>
            </main>

            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © Automax 2020 <a href="" target="_blank" title=""> PreWare Técnologia</a>. Todos os direitos
                    reservados.</span>
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="c4c66d0321ac18206eb8bb66-text/javascript"></script>
                <script type="c4c66d0321ac18206eb8bb66-text/javascript">
                    window.dataLayer = window.dataLayer || [];

                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());

                    gtag('config', 'UA-23581568-13');
                </script>
            </footer>
        </div>
    </div>
    <script type="c4c66d0321ac18206eb8bb66-text/javascript" src="<?php echo asset('js/vendor.js') ?>"></script>
    <script type="c4c66d0321ac18206eb8bb66-text/javascript" src="<?php echo asset('js/bundle.js') ?>"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="c4c66d0321ac18206eb8bb66-|49" defer=""></script>
</body>

</html>