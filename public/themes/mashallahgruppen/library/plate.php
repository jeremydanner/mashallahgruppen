<?php
declare(strict_types=1);
/*
|--------------------------------------------------------------------------
| Plate
|--------------------------------------------------------------------------
|
| Plate provides a bunch of handy WordPress defaults to help you get the
| most out of WordPress development.
|
| Please see https://github.com/wordplate/plate
|
*/
// Remove menu items.
add_theme_support('plate-menu', [
   'comments',
   'dashboard',
   'links',
   // 'media',
   'posts'
]);
// Remove meta boxes in post editor.
add_theme_support('plate-editor', [
    'commentsdiv',
    'commentstatusdiv',
    'linkadvanceddiv',
    'linktargetdiv',
    'linkxfndiv',
    'postcustom',
    'postexcerpt',
    'revisionsdiv',
    'slugdiv',
    'sqpt-meta-tags',
    'trackbacksdiv',
    //'categorydiv',
    //'tagsdiv-post_tag',
]);
// Remove dashboard widgets.
add_theme_support('plate-dashboard', [
    'dashboard_activity',
    'dashboard_incoming_links',
    'dashboard_plugins',
    'dashboard_recent_comments',
    'dashboard_primary',
    'dashboard_quick_press',
    'dashboard_recent_drafts',
    'dashboard_secondary',
    //'dashboard_right_now',
]);
// Remove links from admin toolbar.
add_theme_support('plate-toolbar', [
    'comments',
    'wp-logo',
    'edit',
    'appearance',
    'view',
    'new-content',
    'updates',
    'search',
]);
// Remove dashboard tabs.
add_theme_support('plate-tabs', ['help', 'screen-options']);
// Set custom permalink structure.
add_theme_support('plate-permalink', '/%postname%/');
// Set custom login logo.
add_theme_support('plate-login', sprintf('%s/%s', get_template_directory_uri(), '/Screenshot.png'));
// Set custom footer text.
add_theme_support('plate-footer', 'Skapad med &#10084; av <a href="handelsmarketing.se" target="_blank">HandelsMarketing</a>.');
