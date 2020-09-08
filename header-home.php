<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style; ?>.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/geral.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/wow/css/libs/animate.css" />
    </head>
    <body>
        <?php include('includes/organisms/menu-mobile.php'); ?>
        <div class="layout">
            <header>
                <div class="container">
                    <div class="logo wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo">
                            Falkohv
                        </a>
                    </div>
                    <div class="links wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <?php include('includes/organisms/menu.php'); ?>                        
                        <a class="toggle" href="javascript:;">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>                       
                    </div>
                </div>
                <div class="banner wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".2s"></div>
            </header>
            <main>