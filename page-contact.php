<?php get_header(); ?>

<body>
    <!-- header -->
    <header id="top" class="p-header">
        <div class="p-header__wrap">
            <div class="p-header__logo">
                <h1><a href="<?php echo home_url('/'); ?>" class="p-header__logo--link"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-logo01.png" alt="logo"></a>
                </h1>
            </div>
        </div>
    </header>
    <main>
        <!-- contact -->
        <section class="l-section p-contact">
            <div class="l-inner">
                <div class="p-contact--inner">
                    <div class="p-contact__title">
                        <div class="p-contact__title--main">
                            <h2 class="c-section__title--main"><span>C</span>ontact</h2>
                        </div>
                        <div class="p-contact__title--sub c-section__title--sub">お問い合わせ</div>
                    </div>

                    <div class="p-contact__text">お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br>
                        2日以内に担当者からメールにてご連絡いたします。
                    </div>
                    <div class="p-contact__form">
                        <?php echo do_shortcode('[mwform_formkey key="12"]'); ?>
                        <div class="p-contact__message">
                            <div class="p-contact__message__thanks">
                                お問い合わせありがとうございました。<br>
                                3日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
                            </div>
                            <p class="p-contact__message__text">→
                                <a href="" class="p-contact__message__text--link">トップへ戻る</a>
                            </p>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <!-- footer -->
    <footer class="p-footer">
        <div class="l-inner">
            <figure class="p-footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio_logo2.png" alt="logo">
            </figure>
            <div class="p-footer__copyright">©︎2023 HM-WebCorder. All Rights Reserved.</div>
        </div>
        <div class="c-totop__button">
            <a href="#top" class="c-totop__button--link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-top.png" alt="totop">
            </a>
        </div>
    </footer>

    <!-- script読み込み（後ろで初期化） -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- script実行 -->
    <script src="./assets/js/loading.js"></script>
    <script src="./assets/js/drawer.js"></script>
    <script src="./assets/js/accordion.js"></script>
    <script src="./assets/js/scroll.js"></script>
</body>

</html>