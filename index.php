<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="col-md-6 actueel-post">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    <div><?php the_excerpt() ?></div>
                    <a href="<?php the_permalink() ?>">Lees Meer ></a>
                </div>
            <?php endwhile;
        else : ?>
            <p>Geen berichten gevonden!</p>
        <?php endif; ?>
    </div>
</div>



    <?php get_footer(); ?>