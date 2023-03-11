$(document).ready(function() {
    $('.menu-burger').click(function(event) {
        $('.menu-burger,.nav-menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});