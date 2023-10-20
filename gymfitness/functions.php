<?php

    function gymfitness_menus() {
        register_nav_menus( array(
            'menu-principal' => __("Menu Principal", "gymfitness"),
            // 'Otro menu' => __("Redes sociales", "gymfitness"),
        ));
    }

    add_action("init","gymfitness_menus");