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

    <?php if (have_rows('indexBody')): ?>
        <?php while (have_rows('indexBody')): the_row(); ?>
            <div class="rowWrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="colInnerWrapper">
                            <h1 class="alignCenter"><?php the_sub_field('title') ?></h1>

                            <p><?php the_sub_field('body') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="circleWrapper">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

    <!-- <div class="latestNewsWrapper">
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
    </div> -->
    <!-- SnapWidget -->
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://snapwidget.com/embed/373963" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
        </div>
    </div>

<script src="https://snapwidget.com/js/snapwidget.js"></script>

<?php get_footer();
