<?php

    function gymfitness_menus() {
        register_nav_menus( array(
            'menu-principal' => __("Menu Principal", "gymfitness"),
            // 'Otro menu' => __("Redes sociales", "gymfitness"),
        ));
    }

    add_action("init","gymfitness_menus");

    // aqui se pone el stylesheet y en array el orden en el que las quiero
    function gymfitness_scripts_styles() {
        wp_enqueue_style("style", get_stylesheet_uri(), array(),"1.0.0");
    }

    add_action("wp_enqueue_scripts","gymfitness_scripts_styles");