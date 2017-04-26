<?php
/*
Template name: About
*/

/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/
?>

<?php get_header(); ?>

<div class="headerHero">
    <img class="hero" src="<?php the_field('hero'); ?>" alt="<?php the_field('heroTitle'); ?>" />
</div>

<div class="container">

    <?php if (have_rows('aboutBody')): ?>
        <?php while (have_rows('aboutBody')): the_row(); ?>
            <div class="rowWrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="colInnerWrapper">
                            <h2><?php the_sub_field('title'); ?></h2>

                            <p><?php the_sub_field('body') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div><!-- End Container -->

<?php get_footer();
