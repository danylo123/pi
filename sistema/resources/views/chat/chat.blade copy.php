@extends('app')

@section('titulo')
Mensagens
@stop

@section('conteudo')
<h3>Mensagens</h3>

<div class="container-fluid">

    <div class="peers fxw-nw pos-r">
        <div class="peer peer-greed" id="chat-box">
            <div class="layers h-75">

                <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r ps">
                    <div class="p-20 gapY-15">
                        @foreach($chat as $c)
                        @if($c->user_id != auth()->user()->id)
                        <div class="peers fxw-nw">
                            <div class="peer mR-20"><img class="w-2r bdrs-50p" src="{{ url('storage/users/user.png') }}" alt="{{ $c->user_id }}"></div>
                            <div class="peer peer-greed">
                                <div class="layers ai-fs gapY-5">
                                    <div class="layer">
                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                            <div class="peer mR-10"><small>{{ date_format($c->created_at, "H:i") }}</small></div>
                                            <div class="peer-greed"><span>{{ $c->mensagem }}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @foreach($chat as $c2)
                        @if($c2->user_id == auth()->user()->id)
                        <div class="peers fxw-nw ai-fe">
                            <div class="peer ord-1 mL-20"><img class="w-2r bdrs-50p" src="{{ url('storage/users/user.png') }}" alt="{{ auth()->user()->name }}"></div>
                            <div class="peer peer-greed ord-0">
                                <div class="layers ai-fe gapY-10">
                                    <div class="layer">
                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                            <div class="peer mL-10 ord-1"><small>{{ date_format($c2->created_at, "H:i") }}</small></div>

                                            <div class="peer-greed ord-0"><span>{{ $c2->mensagem }}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
                <div class="layer w-100">
                    <div class="p-20 bdT bgc-white">
                        <div class="pos-r">
                            <form method="post" action="{{ url('chat/store') }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                @foreach($contrato as $co)
                                <input type="hidden" name="contratar_id" value="{{ $co->id }}">
                                @endforeach
                                <input type="text" class="form-control bdrs-10em m-0" name="mensagem" required placeholder="Escreva sua mensagem aqui"> <button type="submit" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1"><i class="fa fa-paper-plane-o"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop