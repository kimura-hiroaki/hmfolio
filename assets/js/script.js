const jsDot = '.js-loader-dot-wrap > span'; // ドット

/**
 * アニメーション前の初期状態をセットする
 * @see https://greensock.com/docs/v3/GSAP/gsap.set
 */
/* ドット */
gsap.set(jsDot, {
    opacity: 0,
    y: -50
});


/**
 * 要素を指定された値にアニメーションさせる
 * @see https://greensock.com/docs/v3/GSAP/gsap.to()
 */
gsap.to(".selector", { options });

// 使い方の例
gsap.to(".hoge", {
    x: 100, // x座標を100pxにする
    backgroundColor: "red", // 背景色をredにする
    duration: 1, // 1秒間かけて行う
    delay: 0.5,　// 0.5秒後にこのアニメーションを実行する
    ease: "power2.inOut" // アニメーションのイージングを指定。これには様々な指定ができる
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
    duration: 0.8,
    delay: 0.8,
    stagger: {
        amount: 0.5,
        from: "start",
        ease: 'bounce.out'
    }
},
).to(
    /* ドット */
    /* 前のアニメーションが完了した後、ドットを消す */
    jsDot, {
    opacity: 0
}
);