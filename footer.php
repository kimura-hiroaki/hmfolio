    <!-- footer -->
    <footer class="p-footer">
        <div class="l-inner">
            <figure class="p-footer__logo">
                <?php echo get_image_html('/assets/img/portfolio_logo2.png', 'logo'); ?>
            </figure>
            <?php if (is_front_page()) : ?>
                <nav class="p-footer__nav">
                    <ul class="p-footer__nav__ul">
                        <li class="p-footer__nav__li"><a href="#top" class="p-footer__nav--link">Top</a></li>
                        <li class="p-footer__nav__li u-isPC">／</li>
                        <li class="p-footer__nav__li"><a href="#about" class="p-footer__nav--link">About me</a></li>
                        <li class="p-footer__nav__li u-isPC">／</li>
                        <li class="p-footer__nav__li"><a href="#portfolio" class="p-footer__nav--link">Portfolio</a></li>
                        <li class="p-footer__nav__li u-isPC">／</li>
                        <li class="p-footer__nav__li"><a href="#strong" class="p-footer__nav--link">Strong</a></li>
                        <li class="p-footer__nav__li u-isPC">／</li>
                        <li class="p-footer__nav__li"><a href="#service" class="p-footer__nav--link">Service</a></li>
                    </ul>
                </nav>
            <?php endif; ?>
            <div class="p-footer__copyright">©︎2023 HM-WebCoder. All Rights Reserved.</div>
        </div>
        <div class="c-totop__button">
            <a href="#top" class="c-totop__button--link">
                <?php echo get_image_html('/assets/img/icon-top.png', 'totop'); ?>
            </a>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>