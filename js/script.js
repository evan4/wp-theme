jQuery(function($) {
	"use strict";

    /*
     * accordion
     * */
    var allPanels = $('.disorder__item'),
        parentPanels = $('.disorder__parent');

    $(parentPanels).on('click', function(e) {
        var that = $(this);

        if(!that.next('li').hasClass('disorder__item_active')){
            allPanels.slideUp().removeClass('disorder__item_active');
            that.next('li').slideDown();
        }
        that.next('li').addClass('disorder__item_active');

        e.preventDefault();
    });

    $('.disorder-sub__text').after('<span class="disorder-sub__dots"><span></span></span>');

    //scroll to
    $('.menu-item').find('a').on('click',function(e) {
        var destination,
            root;
        destination = $(e.target).attr('href');
        root = destination.split("#");
        function action(des) {
            $('html, body').animate({
                scrollTop: $(des).offset().top
            }, 1500);
        }
        if(root[0]){
            if($('#'+root[1]).length){
                destination = '#'+root[1];
                action(destination);
            }else{
                window.location.href = destination;
            }
        }else{
            action(destination);
        }

        e.preventDefault();
    });

	//modals
	$('.close').click(function() {
		$.magnificPopup.close();
	});
	$('.callback').magnificPopup({
		showCloseBtn : false,
		midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	});;

});