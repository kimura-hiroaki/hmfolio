jQuery(function () {
    jQuery('.p-strong__accordion__title').click(function () {
        //クリックされた.question_accordion_headerに隣接する.question_accordion_answerが開いたり閉じたりする。
        jQuery(this).next('.p-strong__accordion__text').slideToggle();
        jQuery(this).toggleClass('is-active');
    });
});