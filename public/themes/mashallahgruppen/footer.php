<?php
/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/
?>
</div> <!-- end container -->

<div class="row footerWrapper">

    <div class="col-md-4 footer">
        <span class="footerLeft">
            <p>Följ oss på</p>
            <a href="https://www.facebook.com/mashallahgruppen/"><img src="<?= get_template_directory_uri(); ?>/public/icons/facebook-logo.svg" alt="facebook logo"></a>
            <a href="https://www.instagram.com/mashallahgruppen/"><img src="<?= get_template_directory_uri(); ?>/public/icons/instagram-social-network-logo-of-photo-camera.svg" alt="instagram logo"></a>
        </span>
    </div>

    <div class="col-md-4 footer">
        <span class="footerCenter">
            Copyright © <?= date('Y'); ?> Mashallahgruppen
        </span>
    </div>

    <div class="col-md-4 footer">
        <span class="footerRight"><a href="/kontakt/">Kontakta oss</a></span>
    </div>

</div>


<?php wp_footer(); ?>
</body>
</html>
