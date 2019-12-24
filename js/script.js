$(document).ready(function () {

    if ($(document).scrollTop() > 106) {
        $(".header").addClass("min-height");
    }

    $(window).scroll(function() {

        if ($(document).scrollTop() > 106) {
            $(".header").addClass("min-height");
        }
        else {
            $(".header").removeClass("min-height");
        }
    });

    $('.checkbox').click(function () {
        if (this.checked) {
            $('input[type=text].sitebg').val('20€');
        } else {
            $('input[type=text].sitebg').val('0€');
        }
    });
    $('.checkbox2').click(function () {
        if (this.checked) {

            var price_f = $('input[name="book-transfer"]:checked').parent(".fl").find(".trans-price").text();

            $('input[type=text].sitebg2').val(price_f);

            $(".info_for_back_transf").show();
        } else {
            $('input[type=text].sitebg2').val('0€');
            $(".info_for_back_transf").hide();
        }
    });

    $('.js-arrow-btn').on('click', function () {
        $(this).parents(".numbers-sect-phone").toggleClass('numbers-sect-phone--open');
    });

    $('body').on('click', function (e) {
        if (!$('.numbers-sect-phone').is(e.target) && $('.numbers-sect-phone').has(e.target).length === 0) {
            $(".numbers-sect-phone").removeClass('numbers-sect-phone--open');
        }
    });

    // humburger menu
    $('#menu-trigger').on('click', function () {
        $(this).toggleClass('is-open');
        $('.side-bottom').toggleClass('show-menu');
        $('html').toggleClass('hidden');
    });

    if(window.matchMedia('(max-width: 967px)').matches) {
        $('.main-menu a').on('click', function() {
            $('#menu-trigger').removeClass('is-open');
            $('.side-bottom').removeClass('show-menu');
            $('html').removeClass('hidden');
        });
    }
    // humburger menu end

    // modal open
    $('button[data-target="#myModal2"], #order-btn').on('click', function () {
        $('#myModal2').addClass('modal-open');
        $('html').addClass('hidden');
    });

    $('.modal-close').on('click', function () {
        $('.modal').removeClass('modal-open');
        $('html').removeClass('hidden');
    })

    $('.modal-dialog').on('click', function (e) {
        if (!$('.modal-content').is(e.target) && $('.modal-content').has(e.target).length === 0) {
            $('.modal').removeClass('modal-open');
            $('html').removeClass('hidden');
        }
    });
});

// Time Picker Initialization
// $(function () {
//     $('#datepicker').datepicker();
//     $('#datepicker_1').datepicker();
//     /* Russian (UTF-8) initialisation for the jQuery UI date picker plugin. */
//     /* Written by Andrew Stromnov (stromnov@gmail.com). */
//     (function (factory) {
//         if (typeof define === "function" && define.amd) {
//
//             // AMD. Register as an anonymous module.
//             define(["../widgets/datepicker"], factory);
//         } else {
//
//             // Browser globals
//             factory(jQuery.datepicker);
//         }
//     }(function (datepicker) {
//
//         datepicker.regional.ru = {
//             closeText: "Закрыть",
//             prevText: "&#x3C;Пред",
//             nextText: "След&#x3E;",
//             currentText: "Сегодня",
//             monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
//                 "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
//             monthNamesShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн",
//                 "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
//             dayNames: ["воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота"],
//             dayNamesShort: ["вск", "пнд", "втр", "срд", "чтв", "птн", "сбт"],
//             dayNamesMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
//             weekHeader: "Нед",
//             dateFormat: "dd.mm.yy",
//             firstDay: 1,
//             isRTL: false,
//             showMonthAfterYear: false,
//             yearSuffix: ""
//         };
//         datepicker.setDefaults(datepicker.regional.ru);
//
//         return datepicker.regional.ru;
//
//     }));
// });

