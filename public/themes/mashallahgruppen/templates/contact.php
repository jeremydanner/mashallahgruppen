<?php
/*
Template name: Contact
*/

/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*/
?>

<?php
get_header();

// TODO: Email Dose not sent from localhost. Test function when on server.
// TODO: Validate email in php

// logic for the contact form
$messageSent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // if all fiealds are set
    if (isset($_POST['fullName']) && isset($_POST['phoneNumber']) &&
    isset($_POST['email']) && isset($_POST['commpany']) && isset($_POST['message'])) {

        if ($_POST['fullName'] && $_POST['phoneNumber'] && $_POST['email'] &&
        $_POST['commpany'] && $_POST['message'] !== '') {

            $emailMessage = wordwrap(
                'Medelande: ' . $_POST['message'] .
                ' Från: ' . $_POST['fullName'] .
                ' tel: ' . $_POST['phoneNumber'] .
                ' epost: ' . $_POST['email'], 70);

                wp_mail('jeremy.danner@HandelsMarketing.se', 'test', $emailMessage);

                //dd('jeremy.danner@HandelsMarketing.se', 'test', $emailMessage);

                $messageSuccess = 'Tack ' . $_POST['fullName'] . ', ditt medelande är skickat till oss!';

            } else {
                $messageDanger = 'Du måste fylla i alla fälten';
            } // end checing if string is !== ''

        } // end checking if $_POST isset

    } // end server REQUEST_METHOD

    ?>

    <!-- Hero image -->
    <div class="headerHero">
        <img class="hero" src="<?php the_field('hero'); ?>" alt="<?php the_field('heroTitle'); ?>" />
    </div>

    <div class="container">

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

        </div><!-- End container-->

        <script src="<?= get_template_directory_uri(); ?>/assets/js/formValidation.js"></script>

        <?php get_footer(); ?>
