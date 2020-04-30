// collpase
$(".faq_collapse").click(function () {
    var collapse = $(this);

    if (collapse.find(".faq_collapse_box").is(":visible")) {
        collapse.find(".faq_collapse_box").slideUp(200);
    } else {
        collapse.parent().find(".faq_collapse_box").slideUp(200);
        collapse.find(".faq_collapse_box").slideDown(200);
    }
});