    $(document).ready(function(){   
        var sudoSlider = $("#carousel").sudoSlider({
            // Autoheight is on per default.
        });
    });

(function($){
    $('.carousel.slide').carousel(0);
    var $thumbItems = $('#.carousel.slide1 .item');
    $('#carousel').on('slide.bs.carousel', function (event) {
       var $slide = $(event.relatedTarget);
       var thumbIndex = $slide.data('thumb');
       var curThumbIndex = $thumbItems.index($thumbItems.filter('.active').get(0));
        if (curThumbIndex>thumbIndex) {
            $('#.carousel.slide1').one('slid.bs.carousel', function (event) {
                $('#.carousel.slide1').carousel(thumbIndex);
            });
            if (curThumbIndex === ($thumbItems.length-1)) {
                $('#.carousel.slide1').carousel('next');
            } else {
                $('#.carousel.slide1').carousel(numThumbItems-1);
            }
        } else {
            $('#.carousel.slide1').carousel(thumbIndex);
        }
    });
})
