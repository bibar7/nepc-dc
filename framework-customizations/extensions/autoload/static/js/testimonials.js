jQuery(function($) {
	"use strict";

	var SLZ = window.SLZ || {};

    SLZ.Testimonial_st = function() {
        $('.sc_testimonial.testimonial-slide .slz-carousel-wrapper').each(function() {
            var carousel_item = parseInt($(this).attr('data-slidestoshow')),
                dot = $(this).attr('data-dots'),
                arrow = $(this).attr('data-arrowshow'),
                speed = $(this).attr('data-speed'),
                autoplay = $(this).attr('data-autoplay'),
                infinite = $(this).attr('data-infinite');
            if( speed == 0 || speed == '' || speed == undefined){
                speed = 600;
            }
            if( autoplay == '1' ){
                autoplay = true;
            } else {
                autoplay = false;
            }
            if( infinite == '1' ){
                infinite = true;
            } else {
                infinite = false;
            }
            if ( dot == '1' ) {
                dot = true;
            }else{
                dot = false;
            }
            if ( arrow == '1' ) {
                arrow = true;
            }else{
                arrow = false;
            }
            if (carousel_item == 1) {
                $(this).slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: dot,
                    speed: speed,
                    arrows: arrow,
                    infinite: infinite,
                    autoplay: autoplay,
                    focusOnSelect: true,
                    adaptiveHeight: true,
                    prevArrow: '<button class="btn btn-prev"><i class="icons fa"></i><span class="text">Previous</span></button>',
                    nextArrow: '<button class="btn btn-next"><span class="text">Next</span> <i class="icons fa"></i></button>',
                    responsive: [
                        {
                            breakpoint: 769,
                            settings: {
                                arrows: false,
                                dots: true
                            }
                        }
                    ]
                });
            }
            else if (carousel_item == 2) {
                $(this).slick({
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: dot,
                    speed: speed,
                    arrows: arrow,
                    infinite: infinite,
                    autoplay: autoplay,
                    focusOnSelect: true,
                    adaptiveHeight: true,
                    prevArrow: '<button class="btn btn-prev"><i class="icons fa"></i><span class="text">Previous</span></button>',
                    nextArrow: '<button class="btn btn-next"><span class="text">Next</span> <i class="icons fa"></i></button>',
                    responsive: [
                        {
                            breakpoint: 769,
                            settings: {
                                arrows: false,
                                dots: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        }
                    ]
                });
            }
            else if (carousel_item >= 3) {
                $(this).slick({
                    slidesToShow: carousel_item,
                    slidesToScroll: carousel_item,
                    dots: dot,
                    speed: speed,
                    arrows: arrow,
                    infinite: infinite,
                    autoplay: autoplay,
                    focusOnSelect: true,
                    adaptiveHeight: true,
                    prevArrow: '<button class="btn btn-prev"><i class="icons fa"></i><span class="text">Previous</span></button>',
                    nextArrow: '<button class="btn btn-next"><span class="text">Next</span> <i class="icons fa"></i></button>',
                    responsive: [
                        {
                            breakpoint: 1025,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            }
                        },{
                            breakpoint: 769,
                            settings: {
                                arrows: false,
                                dots: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        }
                    ]
                });
            }
        });

        $('.sc_testimonial.la-italy .slz-carousel-wrapper').each(function() {
            var carousel_item = parseInt($(this).attr('data-slidestoshow')),
                dot = $(this).attr('data-dots'),
                arrow = $(this).attr('data-arrowshow'),
                speed = $(this).attr('data-speed'),
                autoplay = $(this).attr('data-autoplay'),
                infinite = $(this).attr('data-infinite');
            if( speed == 0 || speed == '' || speed == undefined){
                speed = 600;
            }
            if( autoplay == '1' ){
                autoplay = true;
            } else {
                autoplay = false;
            }
            if( infinite == '1' ){
                infinite = true;
            } else {
                infinite = false;
            }
            if ( dot == '1' ) {
                dot = true;
            }else{
                dot = false;
            }
            if ( arrow == '1' ) {
                arrow = true;
            }else{
                arrow = false;
            }
            $(this).find('.slider-for').slick({
                fade: true,
                arrows: false,
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: infinite,
                autoplay: autoplay,
                asNavFor: '.slider-nav',
                adaptiveHeight: true,
            });
            $(this).find('.slider-nav').slick({
                dots: dot,
                arrows: arrow,
                slidesToScroll: 1,
                centerMode: true,
                focusOnSelect: true,
                centerPadding: '0px',
                asNavFor: '.slider-for',
                slidesToShow: carousel_item,
                appendArrows: $(this),
                prevArrow: '<button class="btn btn-prev"><i class="icons fa"></i><span class="text">Previous</span></button>',
                nextArrow: '<button class="btn btn-next"><span class="text">Next</span> <i class="icons fa"></i></button>',
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 5
                        }
                    },{
                        breakpoint: 415,
                        settings: {
                            slidesToShow: 4,
                            arrows: false,
                            dots: true
                        }
                    },{
                        breakpoint: 374,
                        settings: {
                            slidesToShow: 3,
                            arrows: false,
                            dots: true
                        }
                    }
                ]
            });

        });

        $('.sc_testimonial.la-united-kingdom .slz-carousel-wrapper').each(function() {
            var carousel_item = parseInt($(this).attr('data-slidestoshow')),
                dot = $(this).attr('data-dots'),
                arrow = $(this).attr('data-arrowshow'),
                speed = $(this).attr('data-speed'),
                autoplay = $(this).attr('data-autoplay'),
                infinite = $(this).attr('data-infinite');
            if( speed == 0 || speed == '' || speed == undefined){
                speed = 600;
            }
            if( autoplay == '1' ){
                autoplay = true;
            } else {
                autoplay = false;
            }
            if( infinite == '1' ){
                infinite = true;
            } else {
                infinite = false;
            }
            if ( dot == '1' ) {
                dot = true;
            }else{
                dot = false;
            }
            if ( arrow == '1' ) {
                arrow = true;
            }else{
                arrow = false;
            }
            $(this).find('.slider-for').slick({
                fade: true,
                arrows: false,
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: infinite,
                autoplay: autoplay,
                asNavFor: '.slider-nav',
                adaptiveHeight: true,
            });
            $(this).find('.slider-nav').slick({
                dots: dot,
                arrows: arrow,
                centerMode: true,
                slidesToScroll: 1,
                focusOnSelect: true,
                appendDots: $(this),
                appendArrows: $(this),
                centerPadding: '0px',
                asNavFor: '.slider-for',
                slidesToShow: carousel_item,
                prevArrow: '<button class="btn btn-prev"><i class="icons fa"></i><span class="text">Previous</span></button>',
                nextArrow: '<button class="btn btn-next"><span class="text">Next</span> <i class="icons fa"></i></button>',
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 2
                        }
                    },{
                        breakpoint: 481,
                        settings: {
                            slidesToShow: 1,
                            arrows: false,
                            dots: true
                        }
                    }
                ]
            });

        });

        $('.sc_testimonial.testimonial-vertical .slz-carousel-wrapper').each(function() {
            var carousel_item = parseInt($(this).attr('data-slidestoshow')),
                dot = $(this).attr('data-dots'),
                arrow = $(this).attr('data-arrowshow'),
                speed = $(this).attr('data-speed'),
                autoplay = $(this).attr('data-autoplay'),
                infinite = $(this).attr('data-infinite');
            if( speed == 0 || speed == '' || speed == undefined){
                speed = 600;
            }
            if( autoplay == '1' ){
                autoplay = true;
            } else {
                autoplay = false;
            }
            if( infinite == '1' ){
                infinite = true;
            } else {
                infinite = false;
            }
            if ( dot == '1' ) {
                dot = true;
            }else{
                dot = false;
            }
            if ( arrow == '1' ) {
                arrow = true;
            }else{
                arrow = false;
            }
            $(this).find('.slider-for').slick({
                dots: dot,
                fade: true,
                arrows: arrow,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: infinite,
                autoplay: autoplay,
                adaptiveHeight: true,
                appendArrows: $(this),
                asNavFor: '.slider-nav',
                prevArrow: '<button class="btn btn-prev"><i class="icons fa"></i><span class="text">Previous</span></button>',
                nextArrow: '<button class="btn btn-next"><span class="text">Next</span> <i class="icons fa"></i></button>',
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            arrows: false
                        }
                    }
                ]
            });
            $(this).find('.slider-nav').slick({
                dots: false,
                arrows: false,
                vertical: true,
                slidesToScroll: 1,
                focusOnSelect: true,
                verticalSwiping: true,
                asNavFor: '.slider-for',
                slidesToShow: carousel_item,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 3,
                        }
                    },{
                        breakpoint: 481,
                        settings: {
                            vertical: false,
                            verticalSwiping: false,
                            slidesToShow: 3,
                            centerMode: true,
                            centerPadding: '0px',
                        }
                    }
                ]
            });
        });
    }
	$(document).ready(function() {
        SLZ.Testimonial_st();
	});
});
