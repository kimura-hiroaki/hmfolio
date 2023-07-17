window.onload = onLoad;
function onLoad() {
    const jsbg = '.js-loader-bg'; // ドット
    const jsDot = '.js-loader-dot-wrap > span'; // ドット
    const jsDot1 = '.js-loader-dot--1'; // ドット1
    const jsDot2 = '.js-loader-dot--2'; // ドット2
    const jsDot3 = '.js-loader-dot--3'; // ドット3
    /**
     * アニメーション前の初期状態をセットする
     * @see https://greensock.com/docs/v3/GSAP/gsap.set
     */
    /* ドット */
    gsap.set(jsDot, {
        opacity: 0,
        y: -500
    });

    /**
     * timelineを作成
     * @see https://greensock.com/docs/v3/GSAP/gsap.timeline()
     */
    // timelineを作成
    const tl = gsap.timeline();

    tl.to(
        /* ドット */
        /* 0.8秒後に起動 */
        jsDot, {
        opacity: 1,
        y: 0,
        duration: 1.5,
        delay: 0.8,
        backgroundColor: "#38b6ff",
        ease: 'bounce.out',
        stagger: {
            amount: 0.5,
            from: "start",
        }
    },
    ).to(
        jsDot1, {
        duration: 0.5,
        delay: 0.7,
        "margin-right": "-5vw"
    },
    ).to(
        jsDot3, {
        duration: 0.5,
        "margin-left": "-5vw"
    }, '<'
    ).to(
        jsDot1, {
        duration: 0.1,
        opacity: 0
    },
    ).to(
        jsDot3, {
        duration: 0.1,
        opacity: 0
    }, '<'
    ).to(
        jsDot2, {
        duration: 0.3,
        height: "1px",
        borderRadius: "0"
    },
    ).to(
        jsDot2, {
        duration: 0.7,
        width: "100vw",
        ease: "power4.out"
    },
    ).to(
        jsDot2, {
        duration: 1.0,
        backgroundColor: "#FFFFFF",
        height: "100vh",
        ease: "power4.out"
    },
    ).to(
        jsbg, {
        duration: 0.3,
        opacity: 0
    },
    ).to(
        jsbg, {
        duration: 0.1,
        y: "100vh"
    },
    )
};