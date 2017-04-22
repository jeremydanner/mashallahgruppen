<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

    <meta name="author" content="HandelsMarketing">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- the public folder is the root -->
    <link rel="stylesheet" href="/themes/mashallahgruppen/public/styles/mainSass.css">
    <title>Site Title</title>
</head>
<body>

    <!-- Bootsrap 4 navbar -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #f5f5f5;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">Mashallahgruppen IMG</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php foreach (get_pages() as $page): ?>
                    <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo get_permalink($page); ?>">
                            <?php echo $page->post_title; ?>
                        </a><!-- /nav-link -->
                    </li><!-- /nav-item -->
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>

    <div class="container">
