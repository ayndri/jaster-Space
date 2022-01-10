
$('.toogle-nav').on('click', function (event) {
    $('body').toggleClass("nav-aktif");
});
$('.overnav').on('click', function (event) {
    $('body').removeClass("nav-aktif");
    $('.toogle-nav').removeClass("opened");
});
$('.nav-item').on('click', function (event) {
    $(this).children('.nav-submenu').slideToggle('slow');
    $('.nav-submenu').not($(this).children('.nav-submenu')).slideUp('slow');
});

