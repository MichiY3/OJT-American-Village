<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="沖縄の真ん中、西海岸の北谷町にあるアメリカンビレッジOffiailSite" >
    <title>Okinawa Chatan American Village Official</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
<body>
    <div class="wrapper">
    <!-- header -->
    <header>
        <!-- header left -->
        <p class="logo_img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="american village_logo"></p>
        <!-- header right -->
        <nav>
            <ul class="nav_list">
                <!-- Navigation -->
                <nav id="navi" class="navi" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <div id="navi-in" class="navi-in">
                    <?php wp_nav_menu(
                    array (
                        //カスタムメニュー名
                        'theme_location' => 'header-navi',
                        //コンテナを表示しない
                        'container' => false,
                        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
                        'fallback_cb' => true,
                        //出力されるulに対してidやclassを表示しない
                        'items_wrap' => '<ul>%3$s</ul>',
                    )
                    ); ?>
                </div><!-- /#navi-in -->
                </nav>
                <!-- /Navigation -->
            </ul>
            <!-- <li>Menu01</li>
                <li>Menu02</li>
                <li>Menu03</li>
                <li>Menu04</li> -->
        </nav>

        <!-- hamburger -->
        <p id="btn" class="js-hamburger hamburger">
	        <span></span>
        </p>
        <!-- drawer -->
        <div id="drawer-bg" >
            <ul>
                <li>Menu01</li>
                <li>Menu02</li>
                <li>Menu03</li>
                <li>Menu04</li>
            </ul>
        </div>
    </header>
    <!-- /header -->