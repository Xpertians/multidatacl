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
    $('#runSearch').click(function(e) {
		e.preventDefault();
		var dataPost	= { "qry": document.getElementById("qryValue").value}
		var urlAjax		= "/search/"+document.getElementById("qryType").value;
		$.ajax({
			cache:false,
			type: "POST",
			url: urlAjax,
			contentType: "application/json",
			data: JSON.stringify(dataPost) ,
			error: function(data) {console.log(data); },
			complete: function (res) {
				var response = JSON.stringify(res.responseText);
				document.getElementById("#summary").innerHTML=response;
				alert(jQuery.parseJSON(response));
			},
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
