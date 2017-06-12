<?php
/*
Template name: Contact
*/
?>

<?php
/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*/

// TODO: Email Dose not sent from localhost. Test function when on server.
// BUG: Javascript bug allows user to senad email if one fieald passes validation
// BUG: form dose not validate in php at all...

if ($_POST) {
    dd($_POST);
}

get_header(); ?>

<!-- Flash message success -->
<?php if (isset($messageSuccess)): ?>
    <div class="alert alert-success" role="alert">
        <strong><?= $messageSuccess; ?></strong>
    </div>
<?php endif; ?>

<!-- Flash message Danger -->
<?php if (isset($messageDanger)): ?>
    <div class="alert alert-danger" role="alert">
        <strong><?= $messageDanger; ?></strong>
    </div>
<?php endif; ?>

<?php if (have_rows('contactBody')): ?>
    <?php while (have_rows('contactBody')): the_row(); ?>
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

<div class="row">

    <div class="col-md-4">
        <div class="colInnerWrapper">
            <a href="<?php the_field('email'); ?>"><?php the_field('email') ?></a>
        </div>
    </div>

    <div class="col-md-4">
        <a href="<?php the_field('phone'); ?>"><?php the_field('phone') ?></a>
    </div>

    <div class="col-md-4">
        <a href="<?php the_field('adress'); ?>"><?php the_field('adress') ?></a>
    </div>

</div>

<!-- Contact form -->
<?php if (have_rows('input')): ?>
    <div class="row">
        <div class="col-md-12">

            <form class="contactForm" action="/kontakt" method="post">
                <?php while (have_rows('input')): the_row(); ?>

                    <?php if (get_sub_field('typOfField') === 'email'): ?>
                        <div class="row centerInput">
                            <div class="col-md-6">
                                <?php if (get_sub_field('required') === true): ?>
                                    <input type="email" name="fullName" placeholder="<?= get_sub_field('input') ?>" required>
                                <?php else: ?>
                                    <input type="email" name="fullName" placeholder="<?= get_sub_field('input') ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (get_sub_field('typOfField') === 'text'): ?>
                        <div class="row centerInput">
                            <div class="col-md-6">
                                <?php if (get_sub_field('required') === true): ?>
                                    <input type="text" name="fullName" placeholder="<?= get_sub_field('input') ?>" required>
                                <?php else: ?>
                                    <input type="text" name="fullName" placeholder="<?= get_sub_field('input') ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (get_sub_field('typOfField') === 'number'): ?>
                        <div class="row centerInput">
                            <div class="col-md-6">
                                <?php if (get_sub_field('required') === true): ?>
                                    <input type="number" name="fullName" placeholder="<?= get_sub_field('input') ?>" required>
                                <?php else: ?>
                                    <input type="number" name="fullName" placeholder="<?= get_sub_field('input') ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (get_sub_field('typOfField') === 'textarea'): ?>
                        <div class="row centerInput">
                            <div class="col-md-6">
                                <?php if (get_sub_field('required') === true): ?>
                                    <textarea class="contactMessage" name="message" rows="8" cols="60" placeholder="<?= get_sub_field('input') ?>"  required></textarea>
                                <?php else: ?>
                                    <textarea class="contactMessage" name="message" rows="8" cols="60" placeholder="<?= get_sub_field('input') ?>"></textarea>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>

                <div class="row centerInput">
                    <div class="col-md-12">
                        <button class="contactSubmit" type="submit" name="button">
                            <?php the_field('sendBtn') ?>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
