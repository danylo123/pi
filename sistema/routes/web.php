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

Route::get('/restrito', 'PagesController@restrito'); // rota normal

Route::get('/estrutura_administrativa', 'PagesController@estruturaAdministrativa'); // rota estruturaAdministrativa

Route::get('/estrutura_administrativa/cadastro', 'PagesController@cadastroEstruturaAdministrativa'); // rota estruturaAdministrativa

Route::get('/estrutura_administrativa/editar/{$id}', 'PagesController@editarEstruturaAdministrativa'); // rota estruturaAdministrativa

Route::get('/estrutura_administrativa/listar', 'PagesController@listarEstruturaAdministrativa'); // rota estruturaAdministrativa


Route::get('/galeria/gme', 'PagesController@galeriaGme'); // rota Galeria

Route::get('/galeria/mce', 'PagesController@galeriaMce'); // rota Galeria

Route::get('/galeria/icce', 'PagesController@galeriaIcce'); // rota Galeria

Route::get('/galeria/oficiais_executivos', 'PagesController@galeriaOfcExecutivos'); // rota Galeria

Route::get('/galeria/cadastro', 'PagesController@cadastroGaleria'); // rota Vídeo Aula

Route::get('/galeria/editar/{id}', 'PagesController@editarGaleria'); // rota com paramentro

Route::get('/galeria/listar', 'PagesController@listarGaleria'); // rota Vídeo Aula


Route::get('/transparencia/gce', 'PagesController@transparenciaGce'); // rota Transparência

Route::get('/transparencia/adace', 'PagesController@transparenciaAdace'); // rota Transparência

Route::get('/documento/adace', 'PagesController@documentoAdace'); // rota Documento

Route::get('/documento/ge', 'PagesController@documentoGe'); // rota Documento

Route::get('/documento/icce', 'PagesController@documentoIcce'); // rota Documento

Route::get('/documento/gce', 'PagesController@documentoGce'); // rota Documento

Route::get('/midia', 'PagesController@midia'); // rota Mídia

Route::get('/video_aula', 'PagesController@videoAula'); // rota Vídeo Aula

Route::get('/ouvidoria', 'PagesController@ouvidoria'); // rota Vídeo Aula

Route::get('/usuario/cadastro', 'PagesController@cadastroUsuario'); // rota Vídeo Aula

Route::get('/usuario/editar/{id}', 'PagesController@editarUsuario'); // rota com paramentro

Route::get('/usuario/listar', 'PagesController@listarUsuario'); // rota Vídeo Aula
