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

    <!-- Contact form -->
    <?php if (have_rows('input')): ?>
        <div class="col-md-6">

            <form class="contactForm" action="/sv/kontakt/" method="post">
                <?php while (have_rows('input')): the_row(); ?>

                    <?php if (get_sub_field('typOfField') === 'email'): ?>
                        <div class="form-group">
                            <?php if (get_sub_field('required') === true): ?>
                                <input class="form-control contactForm" type="email" name="fullName" placeholder="<?= get_sub_field('input') ?>" required>
                            <?php else: ?>
                                <input class="form-control contactForm" type="email" name="fullName" placeholder="<?= get_sub_field('input') ?>">
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (get_sub_field('typOfField') === 'text'): ?>
                        <div class="form-group">
                            <?php if (get_sub_field('required') === true): ?>
                                <input class="form-control contactForm" type="text" name="fullName" placeholder="<?= get_sub_field('input') ?>" required>
                            <?php else: ?>
                                <input class="form-control contactForm" type="text" name="fullName" placeholder="<?= get_sub_field('input') ?>">
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (get_sub_field('typOfField') === 'number'): ?>
                        <div class="form-group">
                            <?php if (get_sub_field('required') === true): ?>
                                <input class="form-control contactForm" type="number" name="fullName" placeholder="<?= get_sub_field('input') ?>" required>
                            <?php else: ?>
                                <input class="form-control contactForm" type="number" name="fullName" placeholder="<?= get_sub_field('input') ?>">
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (get_sub_field('typOfField') === 'textarea'): ?>
                        <div class="form-group">
                            <?php if (get_sub_field('required') === true): ?>
                                <textarea class="form-control contactForm" name="message" rows="8" cols="60" placeholder="<?= get_sub_field('input') ?>"  required></textarea>
                            <?php else: ?>
                                <textarea class="form-control contactForm" name="message" rows="8" cols="60" placeholder="<?= get_sub_field('input') ?>"></textarea>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>

                <div class="form-group">
                    <button class="form-control contactForm" type="submit" name="button" value="submit">
                        <?php the_field('sendBtn') ?>
                    </button>
                </div>

            </form>
        </div>

    <?php endif; ?>

    <div class="col-md-6">
        <div class="google-maps">
            <iframe
            width="600" height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyBl5_vhw0jxUhjpZpA_ALVhnqQYKTRPkos&origin=Gothenburg+Sweden&destination=<?php the_field('adress') ?>"
        </iframe>
    </div>
</div>

</div><!-- end row -->


<?php get_footer(); ?>
