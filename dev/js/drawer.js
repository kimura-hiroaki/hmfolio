jQuery(".p-header__hamburgericon").on("click", function (e) {
    e.preventDefault();
    jQuery(".p-header").toggleClass("is-active");
    jQuery(".p-header__hamburgericon").toggleClass("is-active");
    jQuery(".p-drawer").toggleClass("is-active");
    return false;
});
jQuery(".p-drawer__nav--link").on("click", function (e) {
    e.preventDefault();
    jQuery(".p-header").toggleClass("is-active");
    jQuery(".p-header__hamburgericon").toggleClass("is-active");
    jQuery(".p-drawer").toggleClass("is-active");
    return false;
});