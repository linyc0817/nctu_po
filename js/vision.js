$(document).ready(function () {
    $('div.h1').hover(function () {
        $(this).find('div.cb1').show();
    }, function () {
        $(this).find('div.cb1').hide();
    });
});

$(document).ready(function () {
    $('div.h2').hover(function () {
        $(this).find('div.cb2').show();
    }, function () {
        $(this).find('div.cb2').hide();
    });
});

$(document).ready(function () {
    $('div.h3').hover(function () {
        $(this).find('div.cb3').show();
    }, function () {
        $(this).find('div.cb3').hide();
    });
});

$(document).ready(function () {
    $('div.h4').hover(function () {
        $(this).find('div.cb4').show();
    }, function () {
        $(this).find('div.cb4').hide();
    });
});