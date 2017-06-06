<?php
/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/

$directory = get_template_directory_uri();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

    <meta name="author" content="HandelsMarketing">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="<?= $directory; ?>/manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Mashallahgruppen">
    <link rel="icon" sizes="192x192" href="<?= get_template_directory_uri(); ?>/public/applicationLogos/192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">
    <meta name="apple-mobile-web-app-title" content="Mashallahgruppen">
    <link rel="apple-touch-icon" href="<?= $directory; ?>/public/applicationLogos/144.png">

    <!-- Add your bookmark icon hear -->
    <link rel="icon" href="<?= $directory; ?>/public/logoMashallagruppen.png">

    <?php wp_head(); ?>

    <title>Mashallahgruppen</title>

</head>
<body <?php body_class(); ?>>

    <!-- Bootsrap 4 navbar -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #f5f5f5;">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="/"><img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/public/OriginalLogoMashallagruppen.png" alt=""></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav pullRight">

                <?php
                // sorts the menu after order in admin page
                $pages = array (
                    'sort_order' => 'asc',
                    'sort_column' => 'menu_order');
                    ?>

                    <?php foreach (get_pages($pages) as $page): ?>
                        <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?>">
                            <a class="nav-link navLink" href="<?= get_permalink($page); ?>">
                                <?= $page->post_title; ?>
                            </a><!-- /nav-link -->
                        </li><!-- /nav-item -->
                    <?php endforeach; ?>

                    <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?> dropdown">
                        <span class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!--The languages are set in javascript-->
                            <span class="navLink">Select Language</span>
                            <!-- language links -->
                            <span class="languageChange"></span>
                        </span>

                        <div class="dropdown-menu dropdownMenu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/sv/hem">Svenska</a>
                            <a class="dropdown-item" href="/en/home">English</a>
                        </div>

                    </li>

                </ul>

            </div>
        </nav>
