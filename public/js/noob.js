$(document).ready(function (){

    // CONSTANTES

    const FADE_IN_UP = "fadeInUp animated";
    const FADE_IN_DOWN = "fadeInDown animated";
    const FADE_OUT_UP = "fadeOutUp animated";
    const FADE_OUT_DOWN = "fadeOutDown animated";
    const FADE_OUT_RIGHT = "fadeOutRight animated";
    const SLIDE_IN_LEFT = "slideInLeft animated";
    const SLIDE_OUT_LEFT = "slideOutLeft animated";
    const ANIMATION_END = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";

    // INSTANCIA DE ELEMENTOS

    var tabsTop = $('.tabs-center').find('li');
    var searchBox = $('.container-search-box');
    var searchInput = $('#id_search_main');
    var btnSelectGame = $('#id_select_game');
    var dropGameSelect = $("ul[menu='drop-select-game']");
    var dropUserOptions = $("ul[role='dd-user-options']");
    var dropUserMenu = $("ul[menu='drop-user-menu'");
    var btnExpandMainMenu = $('#id_btn_expand_main_menu');
    var btnCollapseMainMenu = $('#id_btn_collapse_main_menu');
    var mainMenu = $("ul[role='main-menu'");
    var bgOpacityMain = $('.bg-opacity-main');
    var bgOpacityContent = $('.bg-opacity-content');
    var btnUserOptions = $('#id_btn_user_options');    
    var linkVideosGrid = $("div.col-grid-videos").find('a');  
    var sectionBody = $('.section-body');
    var contentBody = $('.section-body.ft-left-p-rel');
    var pdTopContent = $('.padding-top-content');
    var tabsHeader = $('.card-head.tabs-top');
    var loaderMainWhite1 = $('.pos-spinner-main-white-1');

    $(document).click(function(){
        $(dropGameSelect).fadeOut(200);  
        $(dropUserOptions).fadeOut(200);
    });

    $(bgOpacityMain).click(function(e){
                
        $(bgOpacityMain).fadeOut(200);
        
        $(mainMenu).addClass(SLIDE_OUT_LEFT).one(ANIMATION_END, function () {
            $(mainMenu).removeClass(SLIDE_OUT_LEFT);        
            $(mainMenu).hide();            
        });

        e.stopPropagation();
    });

    $(bgOpacityContent).click(function(e){
        
        $(searchBox).fadeOut(200);
        $(bgOpacityContent).fadeOut(200);

        e.stopPropagation();
    });

    // ===================================================================================================
    // ========================================== TABS HEADER ============================================
    // ===================================================================================================

    $(tabsTop).click(function (e){

        var route = $(this).find('a').attr('href');
        var activeTab = $('.tabs-center').find('li.active');
        activeTab.removeClass('active'); 
        $(this).addClass('active');       
                
        history.pushState(null, null, route);

        e.preventDefault();
    });


    // ===================================================================================================
    // ========================================== SEARCH MAIN ============================================
    // ===================================================================================================

    $(searchInput).keyup(function (e){
        if($(this).val().length > 2){

            $(searchBox).fadeIn(200);                                
            $(bgOpacityContent).fadeIn(200);
        }else if ($(this).val().length === 0){

            $(searchBox).fadeOut(200);                
            $(bgOpacityContent).fadeOut(200);
        }
    });

    // ===================================================================================================
    // ========================================== WINDOW HISTORY =========================================
    // ===================================================================================================



    // ===================================================================================================
    // ========================================== BOX GAME SELECT ========================================
    // ===================================================================================================

    $(btnSelectGame).click(function (e){
                
        $(searchBox).fadeOut(200);                
        $(bgOpacityContent).fadeOut(200);

        $(dropUserMenu).fadeOut(200);        
        $(dropGameSelect).fadeIn(200);

        e.stopPropagation();
    });

    $(dropGameSelect).click(function (e){
        e.stopPropagation();
    });

    // ===================================================================================================
    // ========================================== BOX OPTIONS USER =======================================
    // ===================================================================================================

    $(btnUserOptions).click(function (e){
                
        $(searchBox).fadeOut(200);                
        $(bgOpacityContent).fadeOut(200);

        $(dropGameSelect).fadeOut(200);        
        $(dropUserOptions).fadeIn(200);

        e.stopPropagation();
    });

    $(dropUserOptions).click(function (e){
        e.stopPropagation();
    });


    // ===================================================================================================
    // ========================================== LEFT MENU ==============================================
    // ===================================================================================================

    $(btnExpandMainMenu).click(function(e){
        $(searchBox).fadeOut(200);
        $(bgOpacityContent).fadeOut(200);
        $(bgOpacityMain).fadeIn(200);
        $(mainMenu).show();

        $(mainMenu).addClass(SLIDE_IN_LEFT).one(ANIMATION_END, function () {
            $(mainMenu).removeClass(SLIDE_IN_LEFT);
        });

        e.stopPropagation();
    });

    $(btnCollapseMainMenu).click(function(e){
        $(bgOpacityMain).fadeOut(200);
        $(mainMenu).addClass(SLIDE_OUT_LEFT).one(ANIMATION_END, function () {
            $(mainMenu).removeClass(SLIDE_OUT_LEFT);        
            $(mainMenu).hide();            
        });
        
        e.stopPropagation();
    });   
    
    // ===================================================================================================
    // ========================================== VIDEOS GRID ============================================
    // ===================================================================================================

    $(linkVideosGrid).click(function(e){
        
        var route = $(this).attr('href');
        
        $(tabsHeader).css('display','none');
        $(pdTopContent).css('padding-top','65px');
        loadViews(route, 'get', 'html', null, contentBody);

        e.preventDefault();
    });




    // ===================================================================================================
    // ========================================== FUNCTIONS ==============================================
    // ===================================================================================================

/*
* Function name = loadViews()
* Params = route, method, dataType, parameter and contentBody
* Return = view in HTML loaded in container contentBody
*/

    function loadViews(route, method, dataType, parameters, contentBody){    
        
        history.pushState(null, null, route);
        $(contentBody).css('display','none');
        $(loaderMainWhite1).fadeIn(200);

        $.ajax({
            method: method,
            url: route,
            dataType: dataType,

            success: function (response) {
                var content = $(response).find('.content-body');
                $(contentBody).html('').html($(content).html());   
                $(contentBody).fadeIn(200);
                $(loaderMainWhite1).hide();                 
            }
        });
    };
});

    