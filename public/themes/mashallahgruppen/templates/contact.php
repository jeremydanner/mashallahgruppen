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

<?php get_header();

// logic for the contact form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // if all fiealds are set
    if (isset($_POST['fullName']) &&
    isset($_POST['phoneNumbe']) &&
    isset($_POST['email']) &&
    isset($_POST['commpany']) &&
    isset($_POST['message'])) {

        if ($_POST['fullName'] && $_POST['phoneNumbe'] && $_POST['email'] && $_POST['commpany'] && $_POST['message'] !== '') {
            echo $_POST['message'];
            $messageSuccess = 'Tack ' . $_POST['fullName'] . ', ditt medelande är skickat till oss!';
        } else {
            $messageDanger = 'Du måste fylla i alla fälten';
        }

    }
}

?>

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
                <a href="<?php the_field('email') ?>"><?php the_field('email') ?></a>
            </div>
        </div>

        <div class="col-md-4">
            <a href="<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
        </div>

        <div class="col-md-4">
            <a href="<?php the_field('adress') ?>"><?php the_field('adress') ?></a>
        </div>

    </div>

    <!-- Contact form -->
    <div class="row">
        <div class="col-md-12">

            <form action="/kontakt" method="post">

                <div class="row centerInput">
                    <div class="col-md-6">
                        <input type="text" name="fullName" placeholder="Namn">
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="phoneNumbe" placeholder="Telefon">
                    </div>
                </div>

                <div class="row centerInput">
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="exempel@exempel.com">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="commpany" placeholder="Företag">
                    </div>
                </div>

                <div class="row centerInput">
                    <div class="col-md-12">
                        <textarea name="message" rows="8" cols="60" placeholder="Medelande..."></textarea>
                    </div>
                </div>

                <div class="row centerInput">
                    <div class="col-md-12">
                        <button type="submit" name="button">Skicka</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

</div><!-- End container-->

<?php

get_footer();



?>
