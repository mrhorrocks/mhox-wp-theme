<!-- Global header -->
<!DOCTYPE HTML>
<html>

<head>
    <title>TITLE HERE</title>
    <?php wp_head(); ?>
</head>

<body>


    <header>
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo">
        <h1>header.php</h1>
    </header>

    <menu>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top_menu',
                'menu_class' => 'top_menu_class',
                'container' => 'ul'

            )
        ); ?>

    </menu>