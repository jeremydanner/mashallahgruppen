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
<div class="row">
    <div class="col-md-12">

        <form class="contactForm" action="/kontakt" method="post">

            <span class="alert-warning">Fält som börjar med * är obligatoriskt</span>

            <div class="row centerInput">
                <div class="col-md-6">
                    <input class="contactFullName" type="text" name="fullName" placeholder="* Namn"> <span class="alert-danger spanFullName"></span>
                </div>

                <div class="col-md-6">
                    <input class="contactPhoneNumber" type="number" name="phoneNumber" placeholder="* Telefon"> <span class="alert-danger spanPhoneNumber"><span>
                    </div>
                </div>

                <div class="row centerInput">
                    <div class="col-md-6">
                        <input class="contactEmail" type="email" name="email" placeholder="* exempel@exempel.com"> <span class="alert-danger spnaEmail"></span>
                    </div>
                    <div class="col-md-6">
                        <input class="contactCommpany" type="text" name="commpany" placeholder="Företag (frivillig)"> <span class="alert-danger spanCompany"></span>
                    </div>
                </div>

                <div class="row centerInput">
                    <div class="col-md-12">
                        <textarea class="contactMessage" name="message" rows="8" cols="60" placeholder="* Medelande..."></textarea> <span class="alert-danger spanMessage"></span>
                    </div>
                </div>

                <div class="row centerInput">
                    <div class="col-md-12">
                        <button class="contactSubmit" type="submit" name="button">Skicka</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <?php get_footer(); ?>
