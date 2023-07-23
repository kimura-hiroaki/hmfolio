<?php
/*
Template Name: ContactConfirm
*/
?>
<?php get_header(); ?>
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

                <div class="p-contact__form">
                    <?php the_content(); ?>
                </div>
            </div>
    </section>
</main>
<!-- footer -->
<?php get_footer(); ?>