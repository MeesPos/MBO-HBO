<?php get_header(); ?>
    <header>
        <img class="homeHeader" src="<?php echo get_template_directory_uri() . '/img/homeHeader.jpg' ?>" alt="Leerlingen van een school - MBO HBO NHF">
        <div class="blueBorder"></div>
    </header>

    <div class="homeContent">
        <?php the_content(); ?>
    </div>
<?php get_footer(); ?>