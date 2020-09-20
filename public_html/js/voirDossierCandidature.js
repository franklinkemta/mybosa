$(document).ready(function () {
    // Enable all tooltips in the document:
    $('[data-toggle="tooltip"]').tooltip();

    // disable all the inputs events
    $('.disabled').off();
    $('input').off("select");
    $('input, select, textarea, label').on("select focus change keypress keyup keydown", function(e) {
        e.preventDefault();
        this.blur();
    })
})