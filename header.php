<!-- Global header -->
<!DOCTYPE HTML>
<html>

<head>
    <title>TITLE HERE</title>
    <?php wp_head(); ?>
</head>

<body>
    <section>
        <header id="site-header">
            <!-- APP LOGO -->
            <div class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo">
            </div>
            <!-- MAIN MENU -->
            <menu id="main-menu">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top_menu',
                        'menu_class' => 'top_menu_class',
                        'container' => 'ul'
                    )
                ); ?>
            </menu>
        </header>
    </section>