$(document).ready(function () {
    // Enable all tooltips in the document:
    $('[data-toggle="tooltip"]').tooltip();

    // disable all the inputs events
    $('.disabled').off();
    $('input').off("select");
    $('img, select, input, textarea, label, .none').on("select focus change keypress keyup keydown", function(e) {
        e.preventDefault();
        this.blur();
    });

    // disable any form submit
    $('form').unbind('submit');
    $('form').on('submit', function(e) {
        e.preventDefault();
    });
})