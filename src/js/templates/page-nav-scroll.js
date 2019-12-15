$(document).ready(function () {
    $(".main-menu").find("a").on("click", function(  ){
        var id = $( this ).attr('href'),
            top = $( id ).offset().top - 155;
        $('body,html').animate( {scrollTop: top}, 600);
    });

    var options = {
        root: null,
        // root: document.querySelector('body'),
        rootMargin: '0px',
        threshold: 0
    };

    var linksList = document.querySelectorAll(".main-menu a"),
        linkStatus = {};
    for(var t = 0; t < linksList.length; t += 1) {
        var linkCurrent = linksList[t].getAttribute('href').slice(1);
        linkStatus[linkCurrent] = false;
    };

    var callback = function(entries, observer) {
        entries.forEach(function(entry) {
            var sectionAnchor = entry.target.getAttribute('id');

            if (entry.intersectionRatio > 0 && linkStatus[sectionAnchor] === false) {
                linkStatus[sectionAnchor] = true;

                $('.main-menu a').removeClass('current-sect');
                $(".main-menu a[href='#" + sectionAnchor + "']").addClass('current-sect');
            } else {
                $(".main-menu a[href='#" + sectionAnchor + "']").removeClass('current-sect');
                linkStatus[sectionAnchor] = false;
            }
        })
    };

    var observer = new IntersectionObserver(callback, options);

    var targets = document.querySelectorAll('.main-menu-item');
    for(var i = 0; i < targets.length; i++) {
        observer.observe(targets[i]);
    }
});
