<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        <?php
        if (!is_home()) :
            echo (wp_title(''));
            echo (' - ');
        endif;
        echo (bloginfo('name')); ?>
    </title>
    <?php $theme_uri = get_stylesheet_directory_uri(); ?>
    <link rel="stylesheet" href="<?php echo ($theme_uri); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ($theme_uri); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo ($theme_uri); ?>/css/mobile.css">
    <link rel="stylesheet" href="<?php echo ($theme_uri); ?>/css/article.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>
    <script src="<?php echo ($theme_uri); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo ($theme_uri); ?>/js/recent-post.js"></script>
    <script src="<?php echo ($theme_uri); ?>/js/share-button.js"></script>
    <script src="<?php echo ($theme_uri); ?>/js/share.js"></script>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <?php if (current_user_can('administrator')) { ?>
        <style>
            .Liberty .navbar-fixed-top {
                top: 32px;
            }

            @media screen and (max-width: 782px) {
                .Liberty .navbar-fixed-top {
                    top: 46px;
                }
            }

            @media screen and (max-width: 600px) {
                #wpadminbar {
                    position: fixed;
                }
            }
        </style>
    <?php } ?>
</head>