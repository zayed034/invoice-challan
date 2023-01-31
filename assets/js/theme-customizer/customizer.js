

//live customizer js
$(document).ready(function() {
    $(".floated-customizer-btn").on('click', function() {
        $(".floated-customizer-panel").toggleClass("active");
    });

    $(".close-customizer-btn").on('click', function() {
        $(".floated-customizer-panel").removeClass("active");
    });

    // live customizer menu-color-option js
    $('input[type=radio][name=menu-color-option]').change(function() {
        var menu_color_option_color = $(this).val();
        if(menu_color_option_color == 'menu-dark'){
            $(".page-sidebar").addClass("page-sidebar-dark");
        }
        else{
            $(".page-sidebar").removeClass("page-sidebar-dark");
        }
    });

    // live customizer semi-logo-background-color-option
    $('input[type=radio][name=semi-light]').change(function() {
        var semi_nav_bg = $(this).val();
        $('.main-header-left').attr("semilight-bg-color", semi_nav_bg);
        $('.main-header-right').attr("header-bg-color", "");
    });

    // live customizer header-background-color-option
    $('input[type=radio][name=header-light]').change(function() {
        var header_nav_bg = $(this).val();
        $('.main-header-right').attr("header-bg-color", header_nav_bg);
        $('.main-header-left').attr("semilight-bg-color", "");
    });

    // live customizer  nav-bar-background-color-option
    $('input[type=radio][name=navu-light]').change(function() {
        var nav_nav_bg = $(this).val();
        $('.main-header-left').attr("semilight-bg-color", nav_nav_bg);
        $('.main-header-right').attr("header-bg-color", nav_nav_bg);
    });

    // live customizer main-theme-layout
    $('input[type=radio][name=main-theme-layout]').change(function() {
        var main_theme_layout = $(this).val();
        $('.main-header-left').attr("semilight-bg-color", "");
        $('.main-header-right').attr("header-bg-color", "");
        $("body").attr("main-theme-layout", main_theme_layout);
    });

    // live customizer main-theme-layout
    $('.main-theme-layout').click(function() {
        var main_theme_layout = $(this).attr("theme-layout");
        $('.main-header-left').attr("semilight-bg-color", "");
        $('.main-header-right').attr("header-bg-color", "");
        $("body").attr("main-theme-layout", main_theme_layout);
    });

    // live customizer menu-layout
    $('input[type=radio][name=menu-layouts]').change(function() {
        var menu_layout = $(this).val();
        if(menu_layout == "menu-layout-collapsed"){
            $("#sidebar-toggle").prop('checked', false);
            $(".page-body-wrapper").addClass("sidebar-close");
        }else{
            $("#sidebar-toggle").prop('checked', true);
            $(".page-body-wrapper").removeClass("sidebar-close");
        }
    });

    $("input[type=checkbox][name=naviagation-layout-checkbox]").change(function(){
        $("input:checkbox[name=naviagation-layout-checkbox]:checked").each(function(){
            var nav_layout_c = $(this).val();
            $(".page-sidebar").addClass(nav_layout_c);

            if($(".page-sidebar").hasClass("native-scroll")){
                $(".page-sidebar").removeClass("custom-scrollbar");
            }
            if(nav_layout_c == "native-default"){
                $("#navigation_bordered_check").prop( "checked", false );
                $("#navigation_rightside_check").prop( "checked", false );
                $("#navigation_scroll_check").prop( "checked", false );
                $("#navigation_back_image_check").prop( "checked", false );
            }
        });

        $("input:checkbox[name=naviagation-layout-checkbox]:not(:checked)").each(function () {
            var nav = $(this).val();
            $(".page-sidebar").removeClass(nav);
            if(nav == "native-scroll"){
                $(".page-sidebar").addClass("custom-scrollbar");
            }
        });
    });

    // tooltip on theme layouts
    $(".main-theme-layout").tooltip();
});

