<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta -->
    <meta name="description" content="HM-WebCorderのポートフォリオサイトです">

    <!-- ogp -->

    <!-- favicon -->
    <link rel="icon" href="./assets/img/favicon.ico">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Noto+Serif+JP:wght@500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css">
    <!-- title -->
    <title>Top-HM-WebCoder</title>
    <!-- javascript css -->
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NN16CS0JC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-7NN16CS0JC');
    </script>
</head>

<body>
    <!-- header -->
    <header id="top" class="p-header">
        <div class="p-header__wrap">
            <div class="p-header__logo">
                <h1>
                    <a href="#top" class="p-header__logo--link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-logo01.png" alt="logo">
                    </a>
                </h1>
            </div>
            <?php if (is_front_page()) : ?>
            <nav class="p-header__nav">
                <ul class="p-header__nav__ul">
                    <li class="p-header__nav__li"><a href="#top" class="p-header__nav--link">Top</a></li>
                    <li class="p-header__nav__li u-header__nav--space">／</li>
                    <li class="p-header__nav__li"><a href="#about" class="p-header__nav--link">About me</a></li>
                    <li class="p-header__nav__li u-header__nav--space">／</li>
                    <li class="p-header__nav__li"><a href="#portfolio" class="p-header__nav--link">Portfolio</a></li>
                    <li class="p-header__nav__li u-header__nav--space">／</li>
                    <li class="p-header__nav__li"><a href="#strong" class="p-header__nav--link">Strong</a></li>
                    <li class="p-header__nav__li u-header__nav--space">／</li>
                    <li class="p-header__nav__li"><a href="#service" class="p-header__nav--link">Service</a></li>
                </ul>
            </nav>
            <div class="p-header__buttons">
                <div class="p-header__button__contact">
                    <a href="<?php echo home_url('/contact'); ?>" class="p-header__button__contact--link">Contact</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php if (is_front_page()) : ?>
        <div class="p-header__hamburgericon">
            <div class="p-header__hamburgericon__bars">
                <div class="p-header__hamburgericon__bar1"></div>
                <div class="p-header__hamburgericon__bar2"></div>
                <div class="p-header__hamburgericon__bar3"></div>
            </div>
        </div>
        <?php endif; ?>
    </header>
    <?php if (is_front_page()) : ?>
    <div class="p-drawer">
        <div class="p-drawer__background"></div>
        <div class="p-drawer__menu">
            <nav class="p-drawer__nav">
                <ul class="p-drawer__nav__ul">
                    <li class="p-drawer__nav__li"><a href="#top" class="p-drawer__nav--link">Top</a></li>
                    <li class="p-drawer__nav__li"><a href="#about" class="p-drawer__nav--link">About me</a></li>
                    <li class="p-drawer__nav__li"><a href="#portfolio" class="p-drawer__nav--link">Portfolio</a></li>
                    <li class="p-drawer__nav__li"><a href="#strong" class="p-drawer__nav--link">Strong</a></li>
                    <li class="p-drawer__nav__li"><a href="#service" class="p-drawer__nav--link">Service</a></li>
                </ul>
            </nav>
            <div class="p-drawer__button__contact">
                <a href="<?php echo home_url('/contact'); ?>" class="p-drawer__button__contact--link">Contact</a>
            </div>
        </div>
    </div>
    <?php endif; ?>