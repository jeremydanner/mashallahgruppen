<?php
/*
Template name: Home
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
                <h1><?php the_field('indexTitle'); ?></h1>

                <?php the_field('indexIntroText'); ?>
            </div>
        </div>
    </div>
</div>

</div><!-- End Container -->

<?php get_footer();
