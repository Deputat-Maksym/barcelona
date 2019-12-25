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

    /*-----------phone input form mask--------------*/
    $('.phone_text').mask("+99 (999) 999-99-99");
});