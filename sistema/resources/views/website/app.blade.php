<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Mercado de Serviços - @yield('titulo')</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script type="text/javascript" src="/js/lib/dummy.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/result-light.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style id="compiled-css" type="text/css">
        .vertical-nav {
            min-width: 17rem;
            width: 17rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.4s;
        }

        .page-content {
            width: calc(100% - 17rem);
            margin-left: 17rem;
            transition: all 0.4s;
        }

        /* for toggle behavior */

        #sidebar.active {
            margin-left: -17rem;
        }

        #content.active {
            width: 100%;
            margin: 0;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -17rem;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #content {
                width: 100%;
                margin: 0;
            }

            #content.active {
                margin-left: 17rem;
                width: calc(100% - 17rem);
            }
        }


        body {
            background: rgb(2, 0, 36);
            background: -webkit-linear-gradient(to right, #093a83, #00559f, #0070b9, #008cd3, #12a9eb);
            background: linear-gradient(to right, #093a83, #00559f, #0070b9, #008cd3, #12a9eb);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .separator {
            margin: 3rem 0;
            border-bottom: 1px dashed #fff;
        }

        .text-uppercase {
            letter-spacing: 0.1em;
        }

        .text-gray {
            color: #aaa;
        }

        /* EOS */
    </style>

    <script id="insert"></script>


    <script>
        const customConsole = (w) => {
            const pushToConsole = (payload, type) => {
                w.parent.postMessage({
                    console: {
                        payload: payload,
                        type: type
                    }
                }, "*")
            }

            w.onerror = (message, url, line, column) => {
                // the line needs to correspond with the editor panel
                // unfortunately this number needs to be altered every time this view is changed
                line = line - 70
                if (line < 0) {
                    pushToConsole(message, "error")
                } else {
                    pushToConsole(`[${line}:${column}] ${message}`, "error")
                }
            }

            let console = (function(systemConsole) {
                return {
                    log: function() {
                        let args = Array.from(arguments)
                        pushToConsole(args, "log")
                        systemConsole.log.apply(this, args)
                    },
                    info: function() {
                        let args = Array.from(arguments)

                        pushToConsole(args, "info")
                        systemConsole.info.apply(this, args)
                    },
                    warn: function() {
                        let args = Array.from(arguments)
                        pushToConsole(args, "warn")
                        systemConsole.warn.apply(this, args)
                    },
                    error: function() {
                        let args = Array.from(arguments)
                        pushToConsole(args, "error")
                        systemConsole.error.apply(this, args)
                    },
                    system: function() {
                        let args = Array.from(arguments)
                        pushToConsole(args, "system")
                    }
                }
            }(window.console))

            window.console = console

            console.system("Running fiddle")
        }

        if (window.parent) {
            customConsole(window)
        }
    </script>
</head>

<body>
    <!-- Vertical navbar  -->
    <div class="vertical-nav bg-white" id="sidebar">

        <div class="py-2 px-5 mb-4 bg-light">
            <div class="media d-flex"><img src="{{ url('/images/icons/logo.png') }}" alt="Logo marca Mercado de Serviços" width="100" class="mr-2 rounded-circle img-thumbnail shadow-sm">
            </div>
        </div>
        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Mercado de Serviços</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link text-dark 
                @if(Route::current()->getName() == '')
                bg-light
                @endif">
                    <i class="fa fa-home mr-3 text-primary fa-fw"></i>
                    Inicío
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/pesquisar') }}" class="nav-link text-dark 
                @if(Route::current()->getName() == 'pesquisar' or Route::current()->getName() == 'procurar')
                bg-light                
                @endif">
                    <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                    Serviços
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/register') }}" class="nav-link text-dark  
                @if(Route::current()->getName() == 'register')
                bg-light
                @endif">
                    <i class="fa  fa-sign-in mr-3 text-primary fa-fw"></i>
                    Cadastre-se
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/login') }}" class="nav-link text-dark  
                @if(Route::current()->getName() == 'login')
                bg-light
                @endif">
                    <i class="fa  fa-sign-in mr-3 text-primary fa-fw"></i>
                    Entrar
                </a>
            </li>


        </ul>


    </div>


    <div class="page-content p-5" id="content">

        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-1"></i><small class="text-uppercase font-weight-bold"></small></button>

        @yield('conteudo')


    </div>


    <script type="text/javascript">
        //<![CDATA[


        $(function() {
            // Sidebar toggle behavior
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });
        });



        //]]>
    </script>

    <script>
        // tell the embed parent frame the height of the content
        if (window.parent && window.parent.parent) {
            window.parent.parent.postMessage(["resultsFrame", {
                height: document.body.getBoundingClientRect().height,
                slug: ""
            }], "*")
        }

        // always overwrite window.name, in case users try to set it manually
        window.name = "result"
    </script>

    <script>
        let allLines = []

        window.addEventListener("message", (message) => {
            if (message.data.console) {
                let insert = document.querySelector("#insert")
                allLines.push(message.data.console.payload)
                insert.innerHTML = allLines.join(";\r")

                let result = eval.call(null, message.data.console.payload)
                if (result !== undefined) {
                    console.log(result)
                }
            }
        })
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo asset('js/mask.js') ?>"></script>
    <script src="<?php echo asset('js/jquery.js') ?>"></script>
</body>

</html>