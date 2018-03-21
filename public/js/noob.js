$(document).ready(function (){


    // INSTANCIA DE ELEMENTOS

    var tabsTop = $('.tabs-center').find('li');
    var searchBox = $('.container-search-box');
    var searchInput = $('#id_search_main');

    // CONSTANTES






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
            }else if ($(this).val().length === 0){
                $(searchBox).fadeOut(200);
            }
        });

    // ===================================================================================================
    // ========================================== WINDOW HISTORY =========================================
    // ===================================================================================================


});