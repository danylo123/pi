@extends('app')

@section('titulo')
Restrito
@stop

@section('conteudo')
<h1>Restrito</h1>


<div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900">Buttons</h6>
        <div class="mT-30">
            <div class="w-100 gap-20 peers mY-20">
                <div class="peer"><button type="button" class="btn cur-p btn-outline-primary" data-toggle="modal" data-target="#estruturaAdm">Estrutura Administrativa</button></div>
                <!-- Estrutura Adm -->
                <div class="modal fade" id="estruturaAdm" tabindex="-1" role="dialog" aria-labelledby="estruturaAdm" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="estruturaAdm">Estrutura Administrativa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <button type="button" class="btn btn-secondary">Cadastrar</button>
                                <button type="button" class="btn btn-secondary">Listar</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="peer"><button type="button" class="btn cur-p btn-outline-secondary" data-toggle="modal" data-target="#galeria">Galerias</button></div>
                <!-- Galeria -->
                <div class="modal fade" id="galeria" tabindex="-1" role="dialog" aria-labelledby="galeria" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="galeria">Galeria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <button type="button" class="btn btn-secondary">Cadastrar</button>
                                <button type="button" class="btn btn-secondary">Listar</button>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="peer"><button type="button" class="btn cur-p btn-outline-success">Portal da transparêcia</button></div>
                <div class="peer"><button type="button" class="btn cur-p btn-outline-danger">Documentos</button></div>
                <div class="peer"><button type="button" class="btn cur-p btn-outline-warning">Mídias</button></div>
                <div class="peer"><button type="button" class="btn cur-p btn-outline-info">Vídeo aulas</button></div>
            </div>
        </div>
    </div>
</div>
@stop