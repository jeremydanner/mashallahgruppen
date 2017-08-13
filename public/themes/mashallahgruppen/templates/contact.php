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

if ($_POST) {

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $messageDanger = 'Du måste fylla i e-post';
        return false;
    }

    if (!filter_var($_POST['fullName'], FILTER_SANITIZE_SPECIAL_CHARS)) {
        $messageDanger = 'Bara bokstäver';
        return false;
    }

    if (!filter_var($_POST['phoneNumber'], FILTER_SANITIZE_NUMBER_FLOAT)) {
        $messageDanger = 'Bara siffror';
        return false;
    }

    if (!filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS)) {
        $messageDanger = 'Bara bokstäver';
        return false;
    }

    function sendEmail($email, $fullName, $phoneNumber, $message)
    {
        wp_mail(
            'jeremy.danner@HandelsMarketing.se',
            'Från ' . $fullName . ' ' . $email,
            $message . ' telefon: ' . $phoneNumber
        );
    }

    if (isset($_POST['email']) && isset($_POST['fullName']) && isset($_POST['phoneNumber']) && isset($_POST['message'])) {
        sendEmail($_POST['email'], $_POST['fullName'], $_POST['phoneNumber'], $_POST['message']);
        $messageSuccess = 'Tack för ditt medelande!';
    } else {
        $messageDanger = 'Något gick fel, försök igen.';
    }

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

    <div class="col-md-6">
        <div class="google-maps">
            <a href="https://www.google.se/maps/place/Byfogdegatan+6C,+415+05+G%C3%B6teborg/@57.726967,12.0079088,16z/data=!4m5!3m4!1s0x464ff4641abeeaa9:0x90a7abc123878fb!8m2!3d57.7269642!4d12.0122862?hl=en" target="_blank">
                <img src="<?= get_template_directory_uri(); ?>/public/icons/googlemaps.png" alt="googleMaps">
            </a>
        </div>
    </div>

    <!-- Contact form -->
    <?php if (have_rows('input')): ?>
        <div class="col-md-6">

            <form class="contactForm" action="/sv/kontakt/" method="post">
                <?php while (have_rows('input')): the_row(); ?>

                    <?php if (get_sub_field('typOfField') === 'email'): ?>
                        <div class="form-group">
                            <?php if (get_sub_field('required') === true): ?>
                                <input class="form-control contactForm" type="email" name="email" placeholder="<?= get_sub_field('input') ?>" required>
                            <?php else: ?>
                                <input class="form-control contactForm" type="email" name="email" placeholder="<?= get_sub_field('input') ?>">
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
                                <input class="form-control contactForm" type="number" name="phoneNumber" placeholder="<?= get_sub_field('input') ?>" required>
                            <?php else: ?>
                                <input class="form-control contactForm" type="number" name="phoneNumber" placeholder="<?= get_sub_field('input') ?>">
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

</div><!-- end row -->


<?php get_footer(); ?>
