$(document).ready(function () {
    var currId = '',
        topMargScroll = 106;
    if(window.matchMedia('(max-width: 967px)').matches) {
        topMargScroll = 50;
    }

    $(".main-menu").find("a").on("click", function(  ){
        $('.main-menu a').removeClass('current-sect');
        $(this).addClass('current-sect');
        var id = $( this ).attr('href'),
            top = $( id ).offset().top - topMargScroll;
        $('body,html').animate( {scrollTop: top}, 600);
        currId = id.slice(1);
    });

    var options = {
        root: null,
        // root: document.querySelector('body'),
        rootMargin: '0px',
        threshold: 0
    };

    var callback = function(entries, observer) {
        entries.forEach(function(entry) {
            var sectionAnchor = entry.target.getAttribute('id');

            if (entry.isIntersecting === false && currId === sectionAnchor) {
                $(".main-menu a[href='#" + sectionAnchor + "']").removeClass('current-sect');
            };
        })
    };

    var observer = new IntersectionObserver(callback, options);

    var targets = document.querySelectorAll('.main-menu-item');
    for(var i = 0; i < targets.length; i++) {
        observer.observe(targets[i]);
    }
});
