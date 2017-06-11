<?php
/*
Template name: Sustainability
*/

/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/
?>
<?php get_header(); ?>

    <?php if (have_rows('sustainabilityBody')): ?>
        <?php while (have_rows('sustainabilityBody')): the_row(); ?>
            <div class="rowWrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="colInnerWrapper">
                            <h1><?php the_sub_field('title') ?></h1>

                            <p><?php the_sub_field('body') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
