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
declare(strict_types=1);

get_header();
?>

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

<!-- SnapWidget -->

<div class="row">
    <div class="col-md-12">
        <iframe src="https://snapwidget.com/embed/373963" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
    </div>
</div>

<script src="https://snapwidget.com/js/snapwidget.js"></script>

<?php get_footer();
