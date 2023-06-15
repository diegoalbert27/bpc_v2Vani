$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('.dropdown-toggle').on('click', function () {
        let spanIcon = $($(this).children()[1]);
        if (spanIcon.hasClass('fa-plus')) {
            spanIcon.removeClass('fa-plus');
            spanIcon.html('&ndash;');
        } else {
            spanIcon.addClass('fa-plus');
            spanIcon.html('');
        }
    })
});
