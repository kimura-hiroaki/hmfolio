/* --------------------
fade in
-------------------- */
const fadeIn = gsap.utils.toArray(".js-fadein");

jQuery(function () {
    fadeIn.forEach(target => {
        gsap.fromTo(target, {
            y: 50,
            opacity: 0,
        }, {
            scrollTrigger: {
                trigger: target,
                start: "top 70%",
            },
            y: 0,
            opacity: 1,
        });
    });
});


/* --------------------
smooth scroll
-------------------- */
jQuery(function () {
    jQuery('a[href^="#"]').click(function () {
        // headerの高さ取得
        //headerがposition:fixの場合
        // let header_height = $(".header").innerHeight();
        //headerがposition:fixでは無い場合
        let header_height = 0;
        // 移動速度を指定（ミリ秒）
        let speed = 500;
        // hrefで指定されたidを取得
        let id = jQuery(this).attr("href");
        // idの値が#のみだったらターゲットをhtmlタグにしてトップへ戻るようにする
        let target = jQuery("#" == id ? "html" : id);
        // ページのトップを基準にターゲットの位置を取得
        // let position = 0;
        // if (id != "#") {
        //     position = $(id).offset().top - header_height;
        // }
        let position = jQuery(target).offset().top - header_height;
        // ターゲットの位置までspeedの速度で移動
        jQuery('body, html').animate({ scrollTop: position }, speed);
        return false;
    });
});

/* --------------------
move scroll arrow
-------------------- */
jQuery(function () {
    const scroll = '.js-scroll';
    const infTL = gsap.timeline();
    gsap.set(infTL, {
        y: 0
    });
    infTL.to(
        scroll, {
        y: 30,
        duration: 1.5,
        ease: 'bounce.out',
        repeat: -1,
        repeatDelay: 0.5
    }
    )
});