<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <!-- Required meta tags -->         
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">                   
        <!-- <link rel="http://www.geraldine-camenisch.test/wp-content-themes/geraldinecamenisch/css/bootstrap.min.css"> -->         
        <!-- <link rel="http://www.geraldine-camenisch.test/wp-content-themes/geraldinecamenisch/js/bootstrap.min.css"> -->                  
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>">