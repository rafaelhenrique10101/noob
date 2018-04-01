@extends('layouts.layout')

@section('content')        
    <div class="container-watch-video">                
        <div class="content-watch-video">
            <div class="w-100pc ft-left-p-rel">   
                <div class="w-100pc ft-left-p-rel bg-black">         
                    <video class="video-player" controls="" crossorigin="" playsinline="" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">                
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4" type="video/mp4">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm">
                    </video>
                </div>
                <div class="w-100pc ft-left-p-rel pd-20px" style="height: 150px">
                </div>
            </div>
        </div>   
        <div class="container-column-rigth-video">
        </div>          
    </div>    
@stop