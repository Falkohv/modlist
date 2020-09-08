<?php
    // ativando menus dinamicos
    function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu' => _('Menu')
                
            )
        );
    }
    add_action('init', 'register_my_menus');
?>