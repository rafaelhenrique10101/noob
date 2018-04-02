@extends('layouts.layout')

@section('content')        
    <div class="container-watch-video">                
        <div class="content-watch-video">
            <div class="w-100pc ft-left-p-rel">   
                <div class="w-100pc ft-left-p-rel bg-black">                       
                    <video class="video-player" controls="" crossorigin="" playsinline="" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">                
                        <source src="https://gaming.youtube.com/embed/s_G67_YRWVo" type="video/mp4">
                        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm">
                    </video>                    
                </div>
                <div class="w-100pc ft-left-p-rel pd-20px">
                    <div class="ft-left-p-rel w-100pc pd-bt-10px">
                        <div class="ft-left-p-rel">
                            <img src="https://yt3.ggpht.com/-Aam0SyVoD80/AAAAAAAAAAI/AAAAAAAAAAA/ZN6QyyFrRf4/s100-c-c0xffffff-k-no-rj-mo/photo.jpg" class="rounded" style="width: 40px;">
                        </div>                        
                        <div class="ft-left-p-rel pd-lt-10px wd-description-video">
                            <span class="w-100pc txt-size-15px txt-weight-500 txt-white font-rb">Official Call of Duty®: WWII Insider - Loadouts</span>
                            <span class="w-100pc ft-left-p-rel txt-size-13px txt-weight-400 txt-grey-1 font-rb">Publicado em 3 de jan de 2018</span>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <div class="container-column-rigth-video">
        </div>          
    </div>    
@stop