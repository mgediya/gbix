var $ = jQuery.noConflict();

/* Script on ready
------------------------------------------------------------------------------*/
$(() => {
	/* Do jQuery stuff when DOM is ready */

	$('.navigation ul li:has(ul)').addClass('has-sub');
	
	/* overlay scrollbar */
	var $journey_blocks = $('.yj-block-wrap');
	if ($journey_blocks.length) {
		$journey_blocks.overlayScrollbars({
			onScrollStop : true,
			callbacks : {
				onScrollStop : function(e) {
					console.log(000);

				 }
			}
		});
	}


	var $why_gbix_blocks = $('.wg-outer');
	if ($why_gbix_blocks.length) {
		$why_gbix_blocks.overlayScrollbars({});
	}
	/* meat-team-slider */
	var mtSlider = $('.mt-slider');
	if (mtSlider.length) {
		mtSlider.slick({
			slidesToShow:3,
			slidesToScroll: 1,
			centerMode: true,
			responsive: [
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 1,
					}
				},
			]
		});
	}
});

/* Script on scroll
------------------------------------------------------------------------------*/
window.onscroll = () => {
	/* Do jQuery stuff on Scroll */
	/* sticky-header */
	if ($(window).scrollTop() < 100) {
		$('.main-header').removeClass('stuck');
	} else {
		$('.main-header').addClass('stuck');
	}
};
