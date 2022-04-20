<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/reset.css" rel="stylesheet">
    <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/script.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/wow.min.js"></script>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header-fixed">
            <h1 class="header_logo"><a href="/index.php"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/logo.png" alt="logo"></a></h1>
            <button class="nav-btn" id="nav-btn" type="button" aria-label="メニュー">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="nav header-nav" id="nav">
            <div class="header_wrap">
                <ul class="header_list">
                <?php wp_nav_menu( array(
                    'theme_location'=>'place_global',
                    'container'     =>'',
                    'menu_class'    =>'',
                    'items_wrap' => '%3$s',//<ul>を出力しない
                ));?>
                </ul>
            </div>
        </div>
    </header>