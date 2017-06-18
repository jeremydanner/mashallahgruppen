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

    <div class="rowWrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="colInnerWrapper">
                    <p><?php the_field('titelTextFieldOfWork'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    <?php if (have_rows('FieldOfWorkBody')): ?>
        <?php while (have_rows('FieldOfWorkBody')): the_row(); ?>
            <div class="col-md-6 fields FieldOfWorkImg">
                <img src="<?php the_sub_field('bodyImage') ?>" alt="<?php the_sub_field('bodyImageTitle') ?>">
                <p><?php the_sub_field('body') ?></p>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php get_footer();
