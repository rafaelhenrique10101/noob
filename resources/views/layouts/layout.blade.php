@extends('layouts.master')

@section('body')	
<header id="header">
    <div class="card-head">
        <div class="container-input-top w-60pc ft-left-p-rel al-center mg-tp-bt-10px">
            <input type="text" class="form-control" id="searchInput" placeholder="Pesquise jogos, canais e videos">
            <div class="form-control-line"></div>
        </div>
    </div>
    <div class="card-head tabs-top">
        <ul class="nav nav-tabs tabs-center" data-toggle="tabs">
            <li class="active"><a href="home">P&Aacute;GINA INICIAL</a></li>
            <li><a href="live">AO VIVO</a></li>
            <li><a href="games">JOGOS</a></li>
            <li><a href="channels">CANAIS</a></li>
        </ul>
    </div>
</header>
<div id="base">	
    <div class="offcanvas">
    </div>
        <div id="content">			
            <section>                
                @yield('content')                
            </section>
        </div>
    
</div>    
@stop