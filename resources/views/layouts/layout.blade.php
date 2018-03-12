@extends('layouts.master')

@section('body')	
<header id="header">
    <div class="card-head">
    </div>
    <div class="card-head tabs-top">
        <ul class="nav nav-tabs tabs-center" data-toggle="tabs">
            <li class="active"><a href="">P&Aacute;GINA INICIAL</a></li>
            <li><a href="">AO VIVO</a></li>
            <li><a href="">JOGOS</a></li>
            <li><a href="">CANAIS</a></li>
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