$(document).ready(function () {
    $('.tree li').has('ul').not('.no-toggle').click(function (e) {
        e.stopPropagation();
        $(this).toggleClass('open');
    });
});
