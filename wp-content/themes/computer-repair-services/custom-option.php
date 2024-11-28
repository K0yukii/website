<?php

    $computer_repair_services_theme_css= "";

    /*--------------------------- Scroll to top positions -------------------*/

    $computer_repair_services_scroll_position = get_theme_mod( 'computer_repair_services_scroll_top_position','Right');
    if($computer_repair_services_scroll_position == 'Right'){
        $computer_repair_services_theme_css .='#button{';
            $computer_repair_services_theme_css .='right: 20px;';
        $computer_repair_services_theme_css .='}';
    }else if($computer_repair_services_scroll_position == 'Left'){
        $computer_repair_services_theme_css .='#button{';
            $computer_repair_services_theme_css .='left: 20px;';
        $computer_repair_services_theme_css .='}';
    }else if($computer_repair_services_scroll_position == 'Center'){
        $computer_repair_services_theme_css .='#button{';
            $computer_repair_services_theme_css .='right: 50%;left: 50%;';
        $computer_repair_services_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/

    $computer_repair_services_slider_img_opacity = get_theme_mod( 'computer_repair_services_slider_opacity_color','');
    if($computer_repair_services_slider_img_opacity == '0'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.1'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.1';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.2'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.2';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.3'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.3';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.4'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.4';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.5'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.5';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.6'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.6';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.7'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.7';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.8'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.8';
        $computer_repair_services_theme_css .='}';
        }else if($computer_repair_services_slider_img_opacity == '0.9'){
        $computer_repair_services_theme_css .='.slider-box img{';
            $computer_repair_services_theme_css .='opacity:0.9';
        $computer_repair_services_theme_css .='}';
        }

    /*---------------------------Slider Height ------------*/

    $computer_repair_services_slider_img_height = get_theme_mod('computer_repair_services_slider_img_height');
    if($computer_repair_services_slider_img_height != false){
        $computer_repair_services_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $computer_repair_services_theme_css .='height: '.esc_attr($computer_repair_services_slider_img_height).';';
        $computer_repair_services_theme_css .='}';
    }

    /*--------------------------- Footer background image -------------------*/

    $computer_repair_services_footer_bg_image = get_theme_mod('computer_repair_services_footer_bg_image');
    if($computer_repair_services_footer_bg_image != false){
        $computer_repair_services_theme_css .='#colophon{';
            $computer_repair_services_theme_css .='background: url('.esc_attr($computer_repair_services_footer_bg_image).')!important;';
        $computer_repair_services_theme_css .='}';
    }