<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo( 'charset' )?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <div class="c-colum">
        <div class="l-colum-main">
            <header class="l-header p-header">
                <button class="p-header__nav-btn">Menu</button>
                <div class="l-header-top">
                    <h1 class="p-header-top__title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ) ?></a></h1>
                    <?php get_search_form() ?>
                </div>
        </header>
