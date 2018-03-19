@extends('layouts.master')

@section('body')	
<header id="header">
    <div class="card-head">
        <div class="container-input-top w-60pc ft-left-p-rel al-center mg-tp-bt-10px">
            <input type="text" class="form-control pd-rg-lt-15px" id="searchInput" placeholder="Pesquise jogos, canais e videos">
            <div class="form-control-line"></div>
        </div>
        <div class="w-20pc ft-right-p-rel mg-tp-bt-10px">
            <div class="col-sm-3 ft-right-p-rel">
                <div class="btn-group">                                    																			
                    <button type="button" class="btn ink-reaction btn-floating-action btn-sm bg-rounded-button" data-toggle="dropdown" aria-expanded="false">
                        <img src="https://yt3.ggpht.com/-Aam0SyVoD80/AAAAAAAAAAI/AAAAAAAAAAA/ZN6QyyFrRf4/s100-c-c0xffffff-k-no-rj-mo/photo.jpg" class="rounded" style="width: 42px;">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu" style="width: 240px; height: 270px;">
                        <div class="ft-left-p-rel mg-tp-bt-10px txt-center w-100pc">
                            <img src="https://yt3.ggpht.com/-Aam0SyVoD80/AAAAAAAAAAI/AAAAAAAAAAA/ZN6QyyFrRf4/s100-c-c0xffffff-k-no-rj-mo/photo.jpg" class="rounded" style="width: 100px;"/>                            
                        </div>
                        <div class="ft-left-p-rel mg-tp-bt-5px txt-center w-100pc" style="line-height: 22px;">                            
                            <span class="txt-white txt-size-15px txt-weight-500">Rafael Henrique</span>
                            <span class="txt-grey-1">rafaelhenrique10101@gmail.com</span>
                        </div>
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