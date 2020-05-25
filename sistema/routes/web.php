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

Route::get('/', 'SiteController@site'); // pagina inicial 

Route::get('/pesquisar', 'SiteController@pesquisar')->name('pesquisar'); // pagina inicial 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'PagesController@Logout');


Route::get('/index', 'PagesController@index'); // pagina inicial 

Route::get('/usuario/cadastro', 'UsuarioController@cadastroUsuario'); // Tela Cadastro Usuario
Route::post('/usuario/store', 'UsuarioController@store'); // Tela Cadastro Usuario
Route::get('/usuario/editar/{id}', 'UsuarioController@editarUsuario'); // Tela Editar Usuario
Route::post('/usuario/alterar', 'UsuarioController@alterar'); // Tela Cadastro Usuario
Route::get('/usuario/excluir/{id}', 'UsuarioController@excluir'); // Tela Editar Usuario
Route::get('/usuarios', 'UsuarioController@usuarios'); // Tela Listar Usuario


Route::get('/servico/cadastro', 'ServicoController@cadastroServico'); // Tela Cadastro Serviço
Route::post('/servico/store', 'ServicoController@store'); // Tela Cadastro Usuario
Route::get('/servico/editar/{id}', 'ServicoController@editarServico'); // Tela Editar Serviço
Route::post('/servico/alterar', 'ServicoController@alterar'); // Tela Cadastro Usuario
Route::get('/servico/excluir/{id}', 'ServicoController@excluir'); // Tela Editar Usuario
Route::get('/servicos', 'ServicoController@listarServico')->name('servicos'); // Tela Listar Serviço
Route::get('/servico/{id}/imagem', 'ImagemServicoController@cadastrar'); // Tela Editar Serviço
Route::post('/servico/imagem/store', 'ImagemServicoController@store'); // Tela Cadastro Usuario

Route::get('/servico_todos', 'ServicoController@listarTodosServico')->name('servico_todos'); // Tela Cadastro Usuario
Route::get('/servico/contratar/{id}', 'ContratarController@cadastroContrato'); // Tela Cadastro Usuario

Route::post('/servico/contratar/store', 'ContratarController@store'); // Tela Cadastro Usuario
Route::get('/servicos_contratados', 'ContratarController@servicosContratados')->name('servicos_contratados'); // Tela Cadastro Usuario
Route::post('/servico/cancelar_contrato', 'ContratarController@cancelar')->name('servico/cancelar_contrato'); // Tela Cadastro Usuario
Route::post('/servico/aceitar_contrato', 'ContratarController@aceitar')->name('aceitar_contrato'); // Tela Cadastro Usuario

Route::get('/contratos', 'ContratarController@contratos')->name('contratos'); // Tela Cadastro Usuario



Route::get('/tipo_servico/cadastro', 'TipoServicoController@cadastroTipoServico'); // Tela Cadastro Serviço
Route::post('/tipo_servico/store', 'TipoServicoController@store'); // Tela Cadastro Usuario
Route::get('/tipo_servico/editar/{id}', 'TipoServicoController@editarTipoServico'); // Tela Editar Serviço
Route::post('/tipo_servico/alterar', 'TipoServicoController@alterar'); // Tela Cadastro Usuario
Route::get('/tipo_servico/excluir/{id}', 'TipoServicoController@excluir'); // Tela Editar Usuario
Route::get('/tipo_servicos', 'TipoServicoController@listarTipoServico'); // Tela Listar Serviço



Route::get('/duvidas', 'PagesController@duvidas'); // Tela Listar Serviço

Route::get('/ouvidoria', 'OuvidoriaController@ouvidoria')->name('ouvidoria'); // Tela Listar Serviço
Route::post('/ouvidoria/store', 'OuvidoriaController@store')->name('ouvidoria/store'); // Tela Listar Serviço


Route::get('/perfil', 'PerfilController@perfil')->name('perfil')->middleware('auth'); // Tela Perfil
Route::post('/perfil/perfilEditar', 'PerfilController@perfilEditar')->middleware('auth');; // Tela Editar Perfil
Route::get('/perfil/endereco', 'EnderecoController@endereco')->name('perfil/endereco');
Route::post('/perfil/endereco/store', 'EnderecoController@store');








