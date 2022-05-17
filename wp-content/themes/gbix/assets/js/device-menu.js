var $ = jQuery.noConflict();
$(() => {
    /* Responsive Jquery Navigation */
    var $hamBurger = $('.hamburger');
    var $overlay = $('.mbnav__backdrop');
    function menuClose() {
        $hamBurger.removeClass('is-clicked');
        $('body').removeClass('scroll-fixed');
        $('.mbnav').removeClass('is-open');
        $('.mbnav .menu-wrap li').removeClass('is-open');
    }

    /* Mobile overlay click */
    $overlay.click(function () {
        menuClose();
    });

    /* Responsive Jquery Navigation */
    $hamBurger.click(function (event) {
        if ($(this).hasClass('is-clicked')) {
            menuClose();
        } else {
            $(this).addClass('is-clicked');
            $('.mbnav').addClass('is-open');
            $('body').addClass('scroll-fixed');
        };
    });

    var clickable = $('.mbnav__state').attr('data-clickable');
    $('.mbnav li:has(ul)').addClass('has-sub');
    $('.mbnav li > ul').addClass('sub-menu');
    $('.mbnav .has-sub>a').after('<em class="mbnav__caret">');

    if (clickable == 'true') {
        $('.mbnav .has-sub>.mbnav__caret').addClass('trigger-caret');
    } else {
        $('.mbnav .has-sub>a').addClass('trigger-caret').attr('href', 'javascript:;');
    }

    /* menu open and close on single click */
    $('.mbnav .has-sub>.trigger-caret').click(function () {
		var element = $(this).parent('li');
		if (element.hasClass('is-open')) {
			element.removeClass('is-open');
			element.find('li').removeClass('is-open');
			element.find('ul').slideUp(200);
		}
		else {
			element.addClass('is-open');
			element.children('ul').slideDown(200);
			element.siblings('li').children('ul').slideUp(200);
			element.siblings('li').removeClass('is-open');
			element.siblings('li').find('li').removeClass('is-open');
			element.siblings('li').find('ul').slideUp(200);
		}
	});
    $('.mbnav__state > .mbnav__inner').css('padding-top', $('header.main-header').outerHeight());
});