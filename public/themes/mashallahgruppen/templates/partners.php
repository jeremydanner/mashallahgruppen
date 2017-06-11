<?php
/*
Template name: Partners
*/

/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/
?>

<?php get_header(); ?>

    <div class="rowWrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="colInnerWrapper">
                    <h1><?php the_field('title'); ?></h1>
                    <p><?php the_field('body') ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="latestNewsWrapper">
        <div class="row">
            <?php if (have_rows('logos')): ?>
                <?php while (have_rows('logos')): the_row(); ?>
                    <div class="col-md-4 latestNews">
                        <a href="<?php the_sub_field('partnerLink'); ?> target="_blank">
                            <img src="<?php the_sub_field('logo') ?>" alt="<?php the_sub_field('name') ?>">
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
