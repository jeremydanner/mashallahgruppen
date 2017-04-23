<?php
/*
Template name: Home
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
                    <h1><?php the_field('indexTitle'); ?></h1>

                    <?php the_field('indexIntroText'); ?>
                </div>

                <div class="circleWrapper">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="latestNewsWrapper">
        <h2>Senaste nytt</h2>
        <div class="row">
            <div class="col-md-4 latestNews">
                <img src="https://scontent-frt3-1.xx.fbcdn.net/v/t31.0-8/s960x960/17918029_783359525163310_8320188407829282925_o.jpg?oh=6cf6dde5e71956e5aa527ef9d145e22e&oe=597D0C14" alt="">
            </div>

            <div class="col-md-4 latestNews">
                <img src="https://scontent-frt3-1.xx.fbcdn.net/v/t31.0-8/s960x960/17918029_783359525163310_8320188407829282925_o.jpg?oh=6cf6dde5e71956e5aa527ef9d145e22e&oe=597D0C14" alt="">
            </div>

            <div class="col-md-4 latestNews">
                <img src="https://scontent-frt3-1.xx.fbcdn.net/v/t31.0-8/s960x960/17918029_783359525163310_8320188407829282925_o.jpg?oh=6cf6dde5e71956e5aa527ef9d145e22e&oe=597D0C14" alt="">
            </div>
        </div>
    </div>

</div><!-- End Container -->

<?php get_footer();
