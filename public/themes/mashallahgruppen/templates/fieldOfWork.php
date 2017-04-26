<?php
/*
Template name: FieldOfWork
*/

/*
*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/
?>

<?php get_header(); ?>

<div class="container">

    <div class="rowWrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="colInnerWrapper">
                    <p><?php the_field('titelTextFieldOfWork'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="latestNewsWrapper">
            <?php if (have_rows('FieldOfWorkBody')): ?>
                <?php while (have_rows('FieldOfWorkBody')): the_row(); ?>
                    <div class="row">
                    <div class="rowWrapper">
                        <div class="col-md-12">
                            <div class="colInnerWrapper">
                                <div class="col-md-6 latestNews">
                                    <img src="<?php the_sub_field('bodyImage') ?>" alt="<?php the_sub_field('bodyImageTitle') ?>">
                                    <p><?php the_sub_field('body') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

    </div>

</div><!-- End Container -->

<?php get_footer();
