<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?>
    <script src="https://kit.fontawesome.com/1eb7c10cba.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class() ?>>
    <nav class="userNavbar navbar navbar-expand-lg" id="menuHeader">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?> <img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="Het logo van MBO-HBO NHF">
            <?php } ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNav',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </nav>
    <div class="blueBorder"></div>