const submit_button = jQuery(".contact_submit_btn");
jQuery("#js-form input, #js-form textarea, #js-form select").on("change", function () {
    if (jQuery('#js-form input[id="your_name"]').val() !== ""
        && jQuery('#js-form input[id="your_ruby"]').val() !== ""
        && jQuery('#js-form input[type="tel"]').val() !== ""
        && jQuery('#js-form input[type="email"]').val() !== ""
        && jQuery('#js-form select').val() !== ""
        && jQuery('#js-form textarea').val() !== ""
        && jQuery('#js-form input[type="checkbox"]').prop("checked") === true) {
        submit_button.prop("disabled", false);
        submit_button.addClass("is-active");
    }
    else {
        console.log($('#js-form input[type="text"]').val());
        console.log($('#js-form input[type="email"]').val());
        console.log($('#js-form input[name="entry.1833175559"]').prop("checked"));
        submit_button.prop("disabled", true);
        submit_button.removeClass("is-active");
    }
});