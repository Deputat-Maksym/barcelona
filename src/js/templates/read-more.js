$(document).ready(function () {
    var openBtnText = $('.seo_text').attr('data-open'),
        closeBtnText = $('.seo_text').attr('data-close');

    $('.seo_text').readmore({
        maxHeight: 160,
        moreLink: '<a class="more-btn" href="#">' + openBtnText + '</a>',
        lessLink: '<a class="more-btn" href="#">' + closeBtnText + '</a>'
    });
});