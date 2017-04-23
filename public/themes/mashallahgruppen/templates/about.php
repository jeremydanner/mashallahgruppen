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
    <img class="hero" src="<?php the_field('hero'); ?>" />
</div>

<div class="container">

    <div class="rowWrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="colInnerWrapper">
                    <h1 class="left"><?php the_field('mainTitle'); ?></h1>

                    <?php the_field('mainBody'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="rowWrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="colInnerWrapper">
                    <h2><?php the_field('subTitle'); ?></h2>

                    <?php the_field('subBody'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="rowWrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="colInnerWrapper">
                    <h2><?php the_field('subTitle2'); ?></h2>

                    <?php the_field('subBody2'); ?>
                </div>
            </div>
        </div>
    </div>


</div><!-- End Container -->

<?php get_footer();
