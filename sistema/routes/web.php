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

Route::get('/usuario/cadastro', 'UsuarioController@cadastroUsuario'); // Tela Cadastro Usuario

Route::post('/usuario/store', 'UsuarioController@store'); // Tela Cadastro Usuario

Route::get('/usuario/editar/{id}', 'UsuarioController@editarUsuario'); // Tela Editar Usuario
Route::post('/usuario/alterar', 'UsuarioController@alterar'); // Tela Cadastro Usuario

Route::get('/usuario/excluir/{id}', 'UsuarioController@excluir'); // Tela Editar Usuario

Route::get('/usuarios', 'UsuarioController@usuarios'); // Tela Listar Usuario


Route::get('/servico/cadastro', 'ServicoController@cadastroServico'); // Tela Cadastro Serviço

Route::get('/servico/editar/{id}', 'ServicoController@editarServico'); // Tela Editar Serviço

Route::get('/servicos', 'ServicoController@listarServico'); // Tela Listar Serviço

Route::get('/duvidas', 'PagesController@duvidas'); // Tela Listar Serviço

Route::get('/ouvidoria', 'PagesController@ouvidoria'); // Tela Listar Serviço

Route::get('/perfil', 'PerfilController@perfil'); // Tela Perfil

Route::get('/perfil/editar', 'PerfilController@editar'); // Tela Editar Perfil

