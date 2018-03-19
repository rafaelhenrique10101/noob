@extends('layouts.master')

@section('body')	
<header id="header">
    <div class="card-head">
        <div class="container-input-top w-60pc ft-left-p-rel al-center mg-tp-bt-10px">
            <input type="text" class="form-control" id="searchInput" placeholder="Pesquise jogos, canais e videos">
            <div class="form-control-line"></div>
        </div>
        <div class="w-20pc ft-right-p-rel mg-tp-bt-10px">
            <div class="col-sm-3 ft-right-p-rel">
                <div class="btn-group">                                    																			
                    <button type="button" class="btn ink-reaction btn-floating-action btn-sm bg-rounded-button" data-toggle="dropdown" aria-expanded="false">
                        <img src="https://yt3.ggpht.com/-Aam0SyVoD80/AAAAAAAAAAI/AAAAAAAAAAA/ZN6QyyFrRf4/s100-c-c0xffffff-k-no-rj-mo/photo.jpg" style="width: 34px;border-radius: 50%;">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu" style="width: 240px; height: 270px;">
                        
                    </ul>
                </div>
            </div>
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