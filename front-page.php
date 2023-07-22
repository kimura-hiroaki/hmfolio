<?php get_header(); ?>
<!-- loading -->
<div class="l-wrapper">
    <!-- 黒い背景とドット -->
    <div class="c-loader-bg js-loader-bg">
        <div class="c-loader-dot js-loader-dot-wrap">
            <span class="c-loader-dot--1 js-loader-dot--1"></span>
            <span class="c-loader-dot--2 js-loader-dot--2"></span>
            <span class="c-loader-dot--3 js-loader-dot--3"></span>
        </div>
    </div>
</div>
<main>
    <!-- mainvisual -->
    <section class="p-topview">
        <div class="p-topview__bgimage"></div>
        <div class="p-topview__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/face.png" alt="image">
        </div>
        <div class="p-topview__content">
            <div class="p-topview__title">
                <div class="p-topview__title--sub">
                    カタチニスル
                </div>
                <div class="p-topview__title--main">
                    <h2>
                        We Create Your Image<br>
                        <span>HM-Web Corder</span>
                    </h2>
                </div>
            </div>
            <div class="p-topview__button"><a href="<?php echo home_url('/contact'); ?>">お問い合わせはこちら</a></div>
        </div>
        <a class="c-scroll u-isSP js-scroll" href="#about">
            <span></span>
        </a>
    </section>
    <!-- about me -->
    <section id="about" class="l-section p-about js-fadein">
        <div class="l-inner">
            <div class="c-section__title p-about__title">
                <div class="p-about__title--main">
                    <h2 class="c-section__title--main"><span>A</span>bout me</h2>
                </div>
                <div class="p-about__title--sub c-section__title--sub">私について</div>
            </div>
            <div class="p-about__content__wrap">
                <div class="p-about__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-directors01.png"
                        alt="director">
                </div>
                <div class="p-about__content">
                    <div class="p-about__content__name">キムラ ヒロアキ</div>
                    <div class="p-about__content__introduction">
                        痒い所に手が届くコーダーを目指しています。<br>
                        そのために、align with you.（ お客様に寄り添う ）<br>
                        お客様に誠実に対応することが大切と考えています。<br>
                    </div>
                    <div class="p-about__content__info">
                        <div class="p-about__content__info__title">&lt; info &gt;</div>
                        <div class="p-about__content__info__text">
                            首都圏在住<br>
                            本業は組み込み系のソフトウェアエンジニア（ C言語 ）。<br>
                            製品開発業務に16年間従事しています。
                            <div class="p-about__content__lisence">
                                <dl class="p-about__content__lisence__table">
                                    <div class="p-about__content__lisence__table--item">
                                        <dt>スキル :</dt>
                                        <dd>HTML, CSS, SCSS, WordPress, JavaScript, jQuery, Git, Gulp, GASP</dd>
                                    </div>
                                    <div class="p-about__content__lisence__table--item">
                                        <dt>保有資格 :</dt>
                                        <dd>基本情報処理技術者、 FP3級（趣味で取得）</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section id="portfolio" class="l-section p-work js-fadein">
        <div class="l-inner">
            <div class="c-section__title p-work__title">
                <div class="p-work__title--main">
                    <h2 class="c-section__title--main"><span>P</span>ortfolio</h2>
                </div>
                <div class="p-work__title--sub c-section__title--sub">制作実績</div>
            </div>
            <div class="p-work__card__wrap">
                <div class="p-work__card">
                    <a href="">
                        <div class="p-work__card__content">
                            <figure class="p-work__card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/my_portfolio.jpg"
                                    alt="Portfolio1">
                            </figure>
                            <div class="p-work__body">
                                <dl class="p-work__info">
                                    <div class="p-work__info-item">
                                        <dt>制作期間：</dt>
                                        <dd>7日間</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>対応内容：</dt>
                                        <dd>コーディング</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>ページ数：</dt>
                                        <dd>1ページ</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>利用技術：</dt>
                                        <dd>HTML, CSS, JavaScript, JQuery</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>特徴　　：</dt>
                                        <dd>デザインカンプからのコーディングを行いました。デザインを再現することを重視し、ピクセルパーフェクトを意識しております。</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-work__card">
                    <a href="">
                        <div class="p-work__card__content">
                            <figure class="p-work__card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/my_portfolio.jpg"
                                    alt="Portfolio1">
                            </figure>
                            <div class="p-work__body">
                                <dl class="p-work__info">
                                    <div class="p-work__info-item">
                                        <dt>制作期間：</dt>
                                        <dd>7日間</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>対応内容：</dt>
                                        <dd>コーディング</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>ページ数：</dt>
                                        <dd>1ページ</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>利用技術：</dt>
                                        <dd>HTML, CSS, JavaScript, JQuery</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>特徴　　：</dt>
                                        <dd>デザインカンプからのコーディングを行いました。デザインを再現することを重視し、ピクセルパーフェクトを意識しております。</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-work__card">
                    <a href="">
                        <div class="p-work__card__content">
                            <figure class="p-work__card__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/my_portfolio.jpg"
                                    alt="Portfolio1">
                            </figure>
                            <div class="p-work__body">
                                <dl class="p-work__info">
                                    <div class="p-work__info-item">
                                        <dt>制作期間：</dt>
                                        <dd>7日間</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>対応内容：</dt>
                                        <dd>コーディング</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>ページ数：</dt>
                                        <dd>1ページ</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>利用技術：</dt>
                                        <dd>HTML, CSS, JavaScript, JQuery</dd>
                                    </div>
                                    <div class="p-work__info-item">
                                        <dt>特徴：</dt>
                                        <dd>デザインカンプからのコーディングを行いました。デザインを再現することを重視し、ピクセルパーフェクトを意識しております。</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="p-work__note__wrapper">
                <p class="p-work__note">※上記ポートフォリオにはBasic認証が設定されております。閲覧時はユーザー名、パスワード欄に<span
                        class="u-accent">「demo」</span>とご入力ください。</p>
            </div>
        </div>
    </section>
    <!-- strong -->
    <section id="strong" class="l-section p-strong js-fadein">
        <div class="l-inner">
            <div class="c-section__title p-strong__title">
                <div class="p-strong__title--main">
                    <h2 class="c-section__title--main"><span>S</span>trong Point</h2>
                </div>
                <div class="p-strong__title--sub c-section__title--sub">強み</div>
            </div>
            <div class="p-strong__text">一緒にお仕事をさせていただくにあたり、私自身の今までの経験・強みを生かせると考えております。</div>
            <div class="p-strong__accordion__wrap">
                <div class="p-strong__accordion">
                    <div class="p-strong__accordion__title is-active">
                        1. 16年間携わっている開発・品質業務経験
                    </div>
                    <div class="p-strong__accordion__text">
                        本業で8年間 設計・開発業務、8年間 品質確認業務に携わってきました。<br>
                        本業での経験が活かせると思っています。<br>
                        また、チーム作業での、情報共有の必要性は重々承知しています。<br>
                        作業時は報・連・相による素早い情報共有を徹底します。
                    </div>
                </div>
                <div class="p-strong__accordion">
                    <div class="p-strong__accordion__title is-active">
                        2. 本業で実施しているチームコーディング経験
                    </div>
                    <div class="p-strong__accordion__text">
                        本業でもGitHub（GitLab）を使用して、チームコーディングをしています。<br>
                        その経験を活かして、作業が可能です。
                    </div>
                </div>
                <div class="p-strong__accordion">
                    <div class="p-strong__accordion__title is-active">
                        3. 16年間のコーディング経験
                    </div>
                    <div class="p-strong__accordion__text">
                        本業でも組み込み系のソフトウェアエンジニア（C言語）として働いています。<br>
                        javascriptやWordPressなどのコーディングで経験が活かせます。（学習中にも体感しました）
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service -->
    <section id="service" class="l-section p-service js-fadein">
        <div class="l-inner">
            <div class="c-section__title p-service__title">
                <div class="p-service__title--main">
                    <h2 class="c-section__title--main"><span>S</span>ervice</h2>
                </div>
                <div class="p-service__title--sub c-section__title--sub">サービス</div>
            </div>
            <div class="p-service__card__wrapper">
                <div class="p-service__card">
                    <figure class="p-service__card__image">
                        <svg xmlns="http://www.w3.org/2000/svg" height="120" viewBox="0 0 128 128">
                            <path fill="#E44D26"
                                d="M27.854 116.354l-8.043-90.211h88.378l-8.051 90.197-36.192 10.033z" />
                            <path fill="#F16529" d="M64 118.704l29.244-8.108 6.881-77.076h-36.125z" />
                            <path fill="#EBEBEB"
                                d="M64 66.978h-14.641l-1.01-11.331h15.651v-11.064h-27.743l.264 2.969 2.72 30.489h24.759zM64 95.711l-.049.013-12.321-3.328-.788-8.823h-11.107l1.55 17.372 22.664 6.292.051-.015z" />
                            <path
                                d="M28.034 1.627h5.622v5.556h5.144v-5.556h5.623v16.822h-5.623v-5.633h-5.143v5.633h-5.623v-16.822zM51.816 7.206h-4.95v-5.579h15.525v5.579h-4.952v11.243h-5.623v-11.243zM64.855 1.627h5.862l3.607 5.911 3.603-5.911h5.865v16.822h-5.601v-8.338l-3.867 5.981h-.098l-3.87-5.981v8.338h-5.502v-16.822zM86.591 1.627h5.624v11.262h7.907v5.561h-13.531v-16.823z" />
                            <path fill="#fff"
                                d="M63.962 66.978v11.063h13.624l-1.284 14.349-12.34 3.331v11.51l22.682-6.286.166-1.87 2.6-29.127.27-2.97h-2.982zM63.962 44.583v11.064h26.725l.221-2.487.505-5.608.265-2.969z" />
                        </svg>
                    </figure>
                    <h3 class="p-service__card__title">コーディング</h3>
                    <p class="p-service__card__text">お客様のデザインを忠実に再現し、<br>イメージ通りに仕上げます。</p>
                </div>
                <div class="p-service__card">
                    <figure class="p-service__card__image">
                        <svg xmlns="http://www.w3.org/2000/svg" height="120" viewBox="0 0 512 512">
                            <path
                                d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z" />
                        </svg>
                    </figure>
                    <h3 class="p-service__card__title">WordPress対応</h3>
                    <p class="p-service__card__text">WordPressのオリジナルテーマ開発を行います。</p>
                </div>
                <div class="p-service__card">
                    <figure class="p-service__card__image">
                        <svg xmlns="http://www.w3.org/2000/svg" height="120" viewBox="0 0 512 512">
                            <path
                                d="M176 88v40H336V88c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zm-48 40V88c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56v40h28.1c12.7 0 24.9 5.1 33.9 14.1l51.9 51.9c9 9 14.1 21.2 14.1 33.9V304H384V288c0-17.7-14.3-32-32-32s-32 14.3-32 32v16H192V288c0-17.7-14.3-32-32-32s-32 14.3-32 32v16H0V227.9c0-12.7 5.1-24.9 14.1-33.9l51.9-51.9c9-9 21.2-14.1 33.9-14.1H128zM0 416V336H128v16c0 17.7 14.3 32 32 32s32-14.3 32-32V336H320v16c0 17.7 14.3 32 32 32s32-14.3 32-32V336H512v80c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64z" />
                        </svg>
                    </figure>
                    <h3 class="p-service__card__title">Webサイト回収・運用・保守</h3>
                    <p class="p-service__card__text">Webサイトのちょっとしたお困りごとに対応いたします。また、運用・保守も対応します。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- inquiry -->
    <section id="inquiry" class="l-section p-inquiry js-fadein">
        <div class="l-inner">
            <div class="p-inquiry__title">
                <div class="p-inquiry__title--main">
                    <h2 class="c-section__title--main"><span>C</span>ontact</h2>
                </div>
                <div class="p-inquiry__title--sub c-section__title--sub">お問い合わせ</div>
            </div>
            <p class="p-inquiry__text">
                お仕事のご依頼およびご相談は問い合わせフォーム,TwitterのDMより承ります。<br>
                小さな修正等から対応可能ですので、お気軽にご連絡ください。
            </p>
            <div class="p-inquiry__icon">
                <div class="p-inquiry__image">
                    <a href="<?php echo home_url('/contact'); ?>">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                </div>
                <div class="p-inquiry__twitter">
                    <a class="twitter-timeline" href="https://twitter.com/hiroaki_web?ref_src=twsrc%5Etfw"
                        data-width="300px" data-height="400px">Tweets by
                        hiroaki_web</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php get_footer(); ?>