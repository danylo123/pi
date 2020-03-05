<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Aqui é onde você pode registrar rotas da web para seu aplicativo. Estes
|rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
|contém o grupo de middleware "web". Agora crie algo ótimo!
|
*/

Route::get('/', 'PagesController@index'); // pagina inicial 

Route::get('/index', 'PagesController@index'); // pagina inicial 

Route::get('/usuario/cadastro', 'PagesController@cadastroUsuario'); // Tela Cadastro Usuario

Route::get('/usuario/editar/{id}', 'PagesController@editarUsuario'); // Tela Editar Usuario

Route::get('/usuario/listar', 'PagesController@listarUsuario'); // Tela Listar Usuario

Route::get('/servico/cadastro', 'PagesController@cadastroServico'); // Tela Cadastro Serviço

Route::get('/servico/editar/{id}', 'PagesController@editarServico'); // Tela Editar Serviço

Route::get('/servico/listar', 'PagesController@listarServico'); // Tela Listar Serviço

Route::get('/duvidas', 'PagesController@duvidas'); // Tela Listar Serviço

Route::get('/ouvidoria', 'PagesController@ouvidoria'); // Tela Listar Serviço

Route::get('/perfil', 'PerfilController@perfil'); // Tela Perfil
