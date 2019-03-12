/* =================================
------------------------------------
	Cryptocurrency - Landing Page Template
	Version: 1.0
 ------------------------------------
 ====================================*/


'use strict';


$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {

	/*------------------
		Navigation
	--------------------*/
	$('.responsive-bar').on('click', function(event) {
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});


	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});


	/*------------------
		Review
	--------------------*/
	var review_meta = $(".review-meta-slider");
    var review_text = $(".review-text-slider");


    review_text.on('changed.owl.carousel', function(event) {
		review_meta.trigger('next.owl.carousel');
	});

	review_meta.owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		items: 3,
		center: true,
		margin: 20,
		autoplay: true,
		mouseDrag: false,
	});


	review_text.owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		items: 1,
		margin: 20,
		autoplay: true,
		navText: ['<i class="ti-angle-left"><i>', '<i class="ti-angle-right"><i>'],
		animateOut: 'fadeOutDown',
    	animateIn: 'fadeInDown',
	});

})(jQuery);


$(function() {
    $('#createPin').click(function(e) {
			e.preventDefault();


			var dataTest	= { "name": "test", "email": "pepe@peperoni.com", "password": "sarasa" }
			var urlAjax		= "/test.php";

			$.ajax({
				type: "POST",
				url: urlAjax,
				contentType: "application/json",
				data: dataTest ,
				success: function(data) {
					var response = JSON.parse(res);
					alert(response);
				},
				error: function(data) {console.log(data); },
				dataType: 'json',
				beforeSend: function (xhr) {
					xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
				},
				headers: {
					'Access-Control-Allow-Origin': '*'
				}
			});

	});
});
