<!-- Global header -->
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title><?php echo esc_html(get_bloginfo('name')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <section id="section-header">
        <header id="site-header" class="container">
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