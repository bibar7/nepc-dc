/*
 *
 *    [Table of contents]
 *
 *    Summary: Custom Site Color in specific parts
 *    		1. Settings for background-color and border-color
 *    		2. Settings for only color
 *    		3. Settings for only border-color
 *    		4. Settings for only background-color
 *	  
 *	  In respective parts, they're included css according to css files
 *    - Custom Editor
 *    - Default
 *    - Layout.css
 *    - Style.css
 *    - Button
 *    - Widgets
 *    - Contact
 *    - Event
 *    - Icon Box
 *    - Newsletter
 *    - Portfolio
 *    - Pricing Box
 *    - Team
 *    - Accordion
 *    - Isotope
 *    - Gallery
 *    - Woocommerce
 *
 *
 *
 */

/*======================================================
=         1. background-color and border-color         =
======================================================*/

	/*=======================================
	=              Custom Editor            =
	=======================================*/

	/*=======================================
	=                Default                =
	=======================================*/

	/*=======================================
	=                Layout                 =
	=======================================*/

		/* Line 2021 layout.css */
		.slz-change-color .audio-wrapper .mejs-controls .mejs-button.mejs-playpause-button button:hover,

		/* Line 2281 layout.css */
		.slz-change-color .tab-filter li.active, .tab-list li.active,
		.slz-change-color .tab-filter li:hover, .tab-list li:hover,

		/* Line 2687 */
		.slz-change-color  .theme-setting-content .purchase-wrap .purchase-btn {
			background-color: $main_color;
			border-color: $main_color;
		}

		.slz-change-color .theme-setting-content .purchase-wrap .purchase-btn:hover {
			color: $main_color;
		}


 	/*=======================================
	=               Style.css               =
	=======================================*/

		/* Line 2925 style.css */
		.slz-change-color .comments-area .comment-form .form-submit input,

		/* Line 3266 style.css */
		.slz-change-color .slz-block-item-01 .block-read-more:hover,

		/* Line 3679 style.css */
		.slz-change-color .post-password-form input[type="submit"]:hover,
	    .slz-change-color .post-password-form input[type="submit"]:focus,

	    /* Line 3958 style.css */
	    .slz-change-color.error404 .slz-btn.main-color,

	    /* Line 3939 style.css */
	    .slz-change-color .slz-page-404 .slz-btn:hover {
			border-color: $main_color;
		    background-color: $main_color;
		}

	    /* Line 3920 style.css */
	    .slz-change-color .slz-page-404 .slz-btn {
	    	background-color: transparent;
	    }

	/*=======================================
	=                Button                 =
	=======================================*/

		/* Line 27 button.css */
		.slz-change-color .slz-btn {
			background-color: $main_color;
			border-color: $main_color;
		}

	/*=======================================
	=                Widgets                =
	=======================================*/

		/* Line 563 widgets */
		.slz-change-color .slz-widget-contact-form .wpcf7-submit,

		/* Line 809 widgets */
		.slz-change-color .slz-widget .tnp-widget-minimal input.tnp-submit,

		/* Line 846 widgets */
		.slz-change-color .slz-widget-send-mail2 .input-group-button > .btn,
		.slz-change-color .slz-shortcode-send-mail2 .btn {
			background-color: $main_color;
			border-color: $main_color;
		}

		.slz-change-color .footer-top-wrapper .slz-widget-send-mail .form-control + button[type="submit"],
		.slz-change-color .footer-top-wrapper .slz-shortcode-send-mail .form-control + button[type="submit"] {
			background-color: rgba(255, 255, 255, 0.15);
			border-color: transparent;
		}
		.slz-change-color .footer-top-wrapper .slz-widget-send-mail .form-control + button[type="submit"]:hover,
		.slz-change-color .footer-top-wrapper .slz-shortcode-send-mail .form-control + button[type="submit"]:hover {
			background-color: rgba(0, 0, 0, 0.05);
		}

	/*=======================================
	=                Contact                =
	=======================================*/

	/*=======================================
	=                Event                  =
	=======================================*/

		/* Line 528 holycross-event */
		.slz-change-color .slz-change-color  .slz-events-block .list-layout .slz-block-item-07 .slz-btn:hover,

		/* Line 534 holycross-event */
		.slz-events-block .list-layout .slz-block-item-07 .slz-btn:hover,

		/* Line 599 holycross-event */
		.slz-change-color .sc_event_block .slz-block-item-05.style-1 .btn-block-donate:hover,

		/* Line 1314 holycross-event */
		.slz-change-color .slz-donate-submit .radio .label-check.slz-btn:hover,
		.slz-change-color .slz-form-event-donate .radio .label-check.slz-btn:hover,
		.slz-change-color .slz-donate-submit .radio input[type="radio"]:checked + .label-check.slz-btn,
		.slz-change-color .slz-form-event-donate .radio input[type="radio"]:checked + .label-check.slz-btn,

		/* Line 1633 holycross-event */
		.slz-change-color .slz-event.slz-event-single .slz-block-item-05 .slz-btn:hover {
			background-color: $main_color;
			border-color: $main_color;
		}

	/*=======================================
	=               Icon Box                =
	=======================================*/

	/*=======================================
	=              Newsletter               =
	=======================================*/

		/* Line 74 holycross-newsletter  */
		.slz-change-color .slz-widget-send-mail .form-control + button[type="submit"], 
		.slz-change-color .slz-shortcode-send-mail .form-control + button[type="submit"] {
			background-color: $main_color;
			border-color: $main_color;
		}

	/*=======================================
	=              Portfolio                =
	=======================================*/

	/*=======================================
	=             Pricing Box               =
	=======================================*/

		/* Line 147 holycross-pricing-box */
		.slz-change-color .slz-pricing-table-01 .pricing-footer .btn:hover {
			background-color: $main_color;
			border-color: $main_color;
		}

	/*=======================================
	=                Team                   =
	=======================================*/

	/*=======================================
	=               Isotope                 =
	=======================================*/

	/*=======================================
	=               Gallery                 =
	=======================================*/

	/*=======================================
	=             Woocommerce              =
	=======================================*/

		/* Line 282 holycross-woocommerce */
		.woocommerce input.button[name="apply_coupon"],

		/* Line 297 holycross-woocommerce */
		.woocommerce #respond input#submit:hover,
		.woocommerce a.button:hover,
		.woocommerce button.button:hover,
		.woocommerce input.button:hover,

		/* Line 313 holycross-woocommerce */
		.woocommerce .woocommerce-message a.button,
		.woocommerce .woocommerce-error a.button,
		.woocommerce .woocommerce-info a.button,

		/* Line 422 holycross-woocommerce */
		.woocommerce form .form-row.create-account input[type="checkbox"]:checked + label.checkbox:before,
		.woocommerce form .form-row label.inline input[type="checkbox"]:checked + .slz-woocommerce-label-for,

		/* Line 615 holycross-woocommerce */
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button.alt:hover,
		.woocommerce #respond input#submit.disabled:hover,
		.woocommerce #respond input#submit:disabled:hover,
		.woocommerce #respond input#submit:disabled[disabled]:hover,
		.woocommerce a.button.disabled:hover,
		.woocommerce a.button:disabled:hover,
		.woocommerce a.button:disabled[disabled]:hover,
		.woocommerce button.button.disabled:hover,
		.woocommerce button.button:disabled:hover,
		.woocommerce button.button:disabled[disabled]:hover,
		.woocommerce input.button.disabled:hover,
		.woocommerce input.button:disabled:hover,
		.woocommerce input.button:disabled[disabled]:hover,

		/* Line 831 holycross-woocommerce */
		.woocommerce .minus.button:hover,
		.woocommerce .plus.button:hover,

		/* Line 1007 holycross-woocommerce */
		.widget_product_search .woocommerce-product-search input[type="submit"],

		/* Line 1157 holycross-woocommerce */
		.woocommerce .widget_layered_nav_filters ul li a:hover,

		/* Line 1513 holycross-woocommerce */
		.woocommerce-password-strength.short,

		/* Line 1626 holycross-woocommerce */
		.woocommerce .place-order input[type="submit"],

		/* Line 1875 holycross-woocommerce */
		.woocommerce ul.products li.product a.added_to_cart:hover,

		/* Line 1964 holycross-woocommerce */
		.woocommerce .account-orders-table td.order-actions a,
		.woocommerce .wishlist_table td.product-add-to-cart a,

		/* Line 2101 holycross-woocommerce */
		.yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse:after,
		.yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse:after,
		.yith-wcwl-add-to-wishlist .yith-wcwl-add-button:hover:after,
		.yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse:hover:after,
		.yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse:hover:after,

		/* Line 2198 holycross-woocommerce */
		body.woocommerce.single-product .cross-sells .slick-arrow:hover,
		body.woocommerce.single-product .up-sells .slick-arrow:hover,
		body.woocommerce.single-product .viewed .slick-arrow:hover,
		body.woocommerce.single-product .related .slick-arrow:hover,

		/* Line 2693 holycross-woocommerce */
		.single-product.woocommerce .thumbnails #slider-prev:hover, 
		.single-product.woocommerce .thumbnails #slider-next:hover,

		/* Line 2805 holycross-woocommerce */
		.woocommerce #respond input#submit.alt, 
		.woocommerce a.button.alt, 
		.woocommerce button.button.alt, 
		.woocommerce input.button.alt,

		/* Line 2913 holycross-woocommerce */
		.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a,
		.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
			background-color: $main_color;
			border-color: $main_color;
		}


/*======================================================
=                        2. color                      =
======================================================*/

	/*=======================================
	=              Custom Editor            =
	=======================================*/
	
		/* Line 43 custom-editor */
		blockquote cite,
		blockquote small,

		/* Line 96 custom-editor */
		.slz-change-color .slz-footer-quote .cite,

		/* Line 129 custom-editor */
		.slz-change-color .slz-blockquote-01 cite,

		/* Line 149 custom-editor */
		.slz-change-color .slz-blockquote-02:before,

		/* Line 169 custom-editor */
		.slz-change-color .slz-blockquote-02 cite {
			color: $main_color;
		}

	/*=======================================
	=                Default                =
	=======================================*/

		/* Line 49 default */
		.slz-change-color .slz-logo-wrapper .logo > span,
		.slz-change-color .slz-logo-wrapper .logo > a,

		/* Line 145 default */
		.slz-change-color .slz-topbar-list .text .number-phone,

		/* Line 262 default */
		.slz-change-color .slz-logo-wrapper .logo > span,

		/* Line 298 default */
		.slz-change-color .slz-button-search .icons:hover,

		/* Line 498 default */
		.slz-change-color .slz-menu-wrapper .current-menu-item > a,

		/* Line 598 default */
		.slz-change-color .slz-main-menu .sub-menu .menu-item-has-children:hover > a:after,

		/* Line 609 default */
		.slz-change-color .slz-main-menu .sub-menu > li:hover > a ,

		/* Line 648 default */
		.slz-change-color .slz-header-transparent .slz-menu-wrapper .current-menu-item > a {
			color: $main_color;
		}

	/*=======================================
	=                Layout                 =
	=======================================*/

		/* Line 66 layout.css */
		.slz-change-color .primary-text,
		.slz-change-color .slz-logo-wrapper .logo,

		/* Line 97 layout.css */
		.slz-change-color  .slz-menu-wrapper > li > a:focus,

		/* Line 178 layout.css */
		.slz-change-color .header-transparent .slz-menu-wrapper > .current-menu-item > a, 
		.slz-change-color .header-transparent .slz-menu-wrapper > li:hover > a,
		.slz-change-color .slz-button-search:hover .icons,
		.slz-change-color .slz-button-search:hover .icons,
		.slz-change-color .nav-search form .search-submit:hover span,
		.slz-change-color .slz-main-menu .sub-menu > li:hover > a,
		/*  Line 386 layout.css */
		.slz-change-color .slz-header-mobile-topbar .slz-mobile-topbar .slz-btn,
		/* Line 440 layout.css */
		.slz-change-color .slz-header-topbar .woo-account-wrapper >.slz-btn:hover,
		.slz-change-color .slz-header-topbar .woo-account-wrapper >.slz-btn:focus,
		.slz-change-color .slz-header-topbar .slz-comming-event .view-detail .slz-btn,
		.slz-change-color .slz-header-topbar .woo-account-wrapper .dropdown-menu li a:hover,

		/* Line 455 layout.css */
		.slz-change-color .slz-header-topbar .slz-topbar-list .btn-block-donate:hover,
		.slz-change-color .slz-header-topbar .slz-topbar-list .btn-block-donate:focus {
			color: $main_color;
		}

		/* Line 475 layout.css */
		.slz-change-color .header-transparent .slz-header-main .slz-menu-wrapper > li:hover > a,
		.slz-change-color .header-transparent .slz-header-main .slz-menu-wrapper > li:hover .fa-angle-down:before,
		.slz-change-color .slz-main-menu .sub-menu > li > a .icon-dropdown,

		/* Line 552 layout.css */
		.slz-change-color .slz-footer-quote .cite,

		/* Line 653 layout.css */
		.slz-change-color .slz-footer-bottom .social a:hover,
		/* Line 1060 layout.css */
		.slz-change-color .social a:hover,
		.slz-change-color .social-list a:hover,
		.slz-change-color .social-list.block-info li a:hover,
		/* Line 1188 layout.css */
		.slz-change-color .slz-blog-author .media-right .postion,

		/* Line 1236 layout.css */
		.slz-change-color .slz-blockquote-01 cite,

		/* Line 1255 layout.css */
		.slz-change-color .slz-blockquote-02:before,

		/* Line 1274 layout.css */
		.slz-change-color .slz-blockquote-02 cite,

		/* Line 1340 layout.css */
		.slz-change-color .block-category,

		/* Line 1355 layout.css */
		.slz-change-color .block-read-more:hover,

		/* Line 1435 layout.css */
		.slz-change-color .block-title:hover,
		.slz-change-color .block-title:focus,
		
		/* Line 1647 layout.css */
		.slz-change-color .list-layout .block-category .author-text:hover,
		.slz-change-color .list-layout .block-info li a .author-text:hover,
		.slz-change-color .list-layout .block-info li a:hover,

		/* Line 1779 layout.css */
		.slz-change-color .slz-template-01 .main-layout .slz-block-item-01.style-3 .block-info:first-child .link,
		.slz-change-color .slz-template-01 .main-layout .slz-block-item-01.style-3 .block-info .link:hover,
		.slz-change-color .slz-template-01 .main-layout .slz-block-item-01.style-3 .block-title:hover,
		.slz-change-color .slz-template-01 .main-layout .slz-block-item-01.style-3 .block-category,

		/* Line 1975 layout.css */
		.slz-change-color .audio-wrapper .mejs-controls .mejs-button button,

		/* Line 2011 layout.css */
		.slz-change-color .audio-wrapper .mejs-controls .mejs-button.mejs-playpause-button,

		/* Line 2085 layout.css */
		.slz-change-color .audio-wrapper .mejs-container .mejs-controls .mejs-volume-button button:hover,

		/* Line 2415 layout.css */
		.slz-change-color .slz-main-title i,
	
		/* Line 2507 layout.css */
		[id^="sc-video-modal"] .modal-body .btn-close a:hover {
			color: $main_color;
		}

		.slz-change-color .slz-header-topbar .slz-comming-event .view-detail .slz-btn:hover {
			color: #ffffff;
		}

 	/*=======================================
	=               Style.css               =
	=======================================*/

		/* Line 145 style.css */
		a,

		/* Line 289 style.css */
		.slz-change-color blockquote cite,
		.slz-change-color blockquote small,

		/* Line 707 style.css */
		.slz-change-color .slz-widgets a:active,
		.slz-change-color .slz-widgets a:hover,

		/* Line 818 style.css */
		.slz-change-color .slz-widgets code,

		/* Line 1173 style.css */
		.slz-change-color .widget_search .search-field:focus + .search-submit,
		.slz-change-color .widget_search .search-field:active + .search-submit,
		.slz-change-color .widget_search .search-submit:hover,

		/* Line 1236 style.css */
		.slz-change-color .widget_rss .rss-date,

		/* Line 1308 style.css */
		.slz-change-color .widget_calendar #next:hover,
		.slz-change-color .widget_calendar #prev:hover,

		/* Line 1503 style.css */
		.slz-change-color .widget_meta ul li a:hover,
		.slz-change-color .categories-list  li a:hover,
		.slz-change-color .tags-list li a:hover,
		.slz-change-color .slz-tag a:hover,

		/* Line 1547 style.css */
		.slz-change-color .categories-list  li a:hover,
		.slz-change-color .tags-list li .link a:hover,

		/* Line 1679 style.css */
		.slz-change-color .slz-sticky .inner,

		/* Line 1917 style.css */
		.slz-change-color .entry-content code,

		/* Line 2249 style.css */
		.slz-change-color .dropcap:first-letter,
	    .slz-change-color .dropcap p:first-letter,
	    .slz-change-color .dropcapi:first-letter,
	    .slz-change-color .dropcapi p:first-letter,
	    .slz-change-color .dropcapb:first-letter,
	    .slz-change-color .dropcapb p:first-letter,

	    /* Line 2667 style.css */
	    .slz-change-color .comments-area .comment-author .fn a:hover,

	    /* Line 2703 style.css */
	    .slz-change-color .comments-area .comment-list .reply a:hover,

	    /* Line 2743 style.css */
	    .slz-change-color .comments-area .comment-metadata a:hover,

	    /* Line 3013 style.css */
	    .slz-change-color .comment-info-wrapper .author-name a:hover,

	    /* Line 3031 style.css */
	    .slz-change-color .comment-info-wrapper .info li a.date,
	    .slz-change-color .comment-info-wrapper .info li a:hover,

	    /* Line 3066 style.css */
	    .slz-change-color .comment-feedback-wrapper a:hover,

	    /* Line 3098 style.css */
	    .slz-change-color .comment-respond > .title a,

	    /* Line 3160 style.css */
	    .slz-change-color .block-info li .link.date,
	    .slz-change-color .block-info li .link .author-text:hover,
	    .slz-change-color .block-info li a:hover,

	    /* Line 3200 style.css */
	    .slz-change-color .block-info .edit-link .post-edit-link:hover,

	    /* Line 3224 style.css */
	    .slz-change-color .slz-block-item-01 .block-title:hover,

	    /* Line 3242 style.css */
	    .slz-change-color .block-content .entry-title a:hover,

	    /* Line 3263 style.css */
	    .slz-change-color .slz-block-item-01 .continue-reading:hover,

	    /* Line 3456 style.css */
	    .slz-change-color .post-navigation .nav-links a:hover,

	    /* Line 3625 style.css */
	    .slz-change-color .slz-article-not-found .search-form .search-submit .search-icon:before,

	    /* Line 3909 style.css */
	    .slz-change-color .slz-page-404 .title {
	    	color: $main_color;
	    }

	    /* Line 3268 style.css */
	    .slz-change-color .slz-block-item-01 .block-read-more:hover {
	    	color: #ffffff;
	    }

	/*=======================================
	=                Button                 =
	=======================================*/

	/*=======================================
	=                Widgets                =
	=======================================*/

		/* Line 444 widgets */
		.slz-change-color .slz-categories .link:hover,
		.slz-change-color .slz-categories2 .link:hover,
		.slz-change-color .slz-widget-categories .link:hover,
		.slz-change-color .slz-widget-categories2 .link:hover,
		.slz-change-color .slz-widget-custom-post .widget-content ul li a:hover,

		/* Line 548 widgets */
		.slz-change-color .slz-widget-contact-form .wpcf7-form-control,


		/* Line 942 widgets */
		.slz-change-color .slz-widget-portfolio .slz-block-item-03.portfolio-item .block-info .text,
		.slz-change-color .slz-widget-portfolio .slz-block-item-03.portfolio-item .block-info .block-date,

		/* Line 987 widgets */
		.slz-change-color .slz-widget-portfolio .slz-block-item-03.portfolio-item .tool-list li i,

		/* Line 1107 widgets */
		.slz-change-color .slz-widget-recent-post .media-heading:hover,

		/* Line 1136 widgets */
		.slz-change-color .slz-widget-recent-post .meta-info.category .link,

		/* Line 1148 widgets */
		.slz-change-color .slz-widget-recent-post .meta-info.time .link,
		.slz-change-color .slz-widget-recent-post .meta-info .link .author-text:hover,
		.slz-change-color .slz-widget-recent-post .meta-info .link:hover,
		.slz-change-color .slz-widget-recent-post .meta-info .link:focus,

		/* Line 1386 widgets */
		.slz-change-color .slz-new-tweet .list-news-tweet .recent-post .post-info .title .right-text,
		.slz-change-color .slz-new-tweet .list-news-tweet .recent-post .post-info .link:hover,

		/* Line 1605 widgets */
		.slz-change-color .social-counter-title.facebook:hover > .link,
		.slz-change-color .social-counter-title.twitter:hover > .link,
		.slz-change-color .social-counter-title.google:hover > .link,
		.slz-change-color .social-counter-title.vimeo:hover > .link,
		.slz-change-color .social-counter-title.soundcloud:hover > .link,
		.slz-change-color .social-counter-title.instagram:hover > .link,

		/* dong 1753 widgets */
		.slz-wrapper-footer.slz-dark .block-info li a:hover,
		.slz-wrapper-footer.slz-dark .widget_meta ul li a:hover,
		.slz-wrapper-footer.slz-dark .categories-list  li a:hover,
		.slz-wrapper-footer.slz-dark .tags-list li a:hover,
		.slz-wrapper-footer.slz-dark .slz-tag a:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-project .slz-block-item-03 .block-title:hover,
		.slz-wrapper-footer .slz-categories .link:hover > .text,
		.slz-wrapper-footer .slz-categories2 .link:hover > .text,
		.slz-wrapper-footer .slz-widget-categories .link:hover > .text,
		.slz-wrapper-footer .slz-widget-categories2 .link:hover > .text,
		.slz-wrapper-footer .slz-categories .link:hover,
		.slz-wrapper-footer .slz-categories2 .link:hover,
		.slz-wrapper-footer .slz-widget-categories .link:hover,
		.slz-wrapper-footer .slz-widget-categories2 .link:hover,
		.slz-wrapper-footer .slz-widget-custom-post .widget-content ul li a:hover,
		.slz-wrapper-footer .slz-widget-recent-post .meta-info .link .author-text:hover,
		.slz-wrapper-footer .slz-widget-recent-post .meta-info .link:hover,
		.slz-wrapper-footer .slz-widget-recent-post .meta-info .link:focus,
		.slz-wrapper-footer.slz-dark .block-info li .link.date:hover,
		.slz-wrapper-footer.slz-dark .list-layout .block-category:hover,
		.slz-wrapper-footer.slz-dark .list-layout .block-info li a:hover,
		.slz-wrapper-footer.slz-dark .block-info li a .author-text:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-causes .slz-block-item-06.style-1 .block-content .block-title:hover,
		.slz-wrapper-footer.slz-dark .slz-categories .link:hover,
		.slz-wrapper-footer.slz-dark .slz-categories2 .link:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-categories .link:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-categories2 .link:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-custom-post .widget-content ul li a:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-recent-post .meta-info .link .author-text:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-post-block .meta-info .link .author-text:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-recent-post .meta-info .link:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-recent-post .meta-info.time .link:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-causes .slz-block-item-06.style-1 .block-content .block-title:hover,
		.slz-wrapper-footer.slz-dark .slz-widget-recent-post .media-heading:hover,

		/* Line 1853 widgets */
		.slz-wrapper-footer .widget_nav_menu .menu-footer-menu-container .menu li a:before,
		.slz-wrapper-footer.slz-dark .slz-widget-contact-info .item .icons,
		.slz-wrapper-footer.slz-dark .slz-widget-contact-info .item > .contact-info a:hover,
		.slz-wrapper-footer .widget_nav_menu .menu-footer-menu-container .menu li a:hover {
			color: $main_color;
		}

	/*=======================================
	=                Contact                =
	=======================================*/

		/* Line 175 holycross-contact */
		.slz-change-color .slz-contact-01 .contact-content .slz-icon {
			color: $main_color;
		}

	/*=======================================
	=                Event                  =
	=======================================*/

		/* Line 289 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-1 .block-content-wrapper .block-title:hover,

		/* Line 312 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07 .block-content-wrapper .remaining-block .price,
		
		/* Line 353 */
		.slz-change-color  .raise-goal-block .raise .text,
		.slz-change-color  .raise-goal-block .goal .text,

		/* Line 419 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07 .block-content-wrapper .raise-goal-block .text,

		/* Line 545 holycross-event */
		.slz-change-color .slz-events-block .block-info li a:hover,

		/* Line 578 holycross-event */
		.slz-change-color .slz-block-item-05 .block-title:hover,

		/* Line 697 holycross-event */
		.slz-change-color .sc_event_block .slz-block-item-05 .block-info > li .place,
		.slz-change-color .sc_event_block .slz-block-item-05.style-1 .block-info > li .link.place,
		.slz-change-color .sc_event_block .slz-block-item-05.style-1 .price:hover,
		.slz-change-color .sc_event_block .slz-block-item-05.style-1 .block-info > li .link .text:hover,

		/* Line 722 holycross-event */
		.sc_event_block .block-info > li .place, .sc_event_block .slz-block-item-05 .block-info > li .place,
		.sc_event_block .slz-block-item-05.style-1 .block-info > li .link.place,

		/* Line 902 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-02 .slz-btn:hover,

		/* Line 991 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-02 .block-content .block-title:hover,

		/* Line 1180 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-04 .block-content-wrapper .col-right .btn-block-donate:hover,

		/* Line 1571 holycross-event */
		.slz-change-color .slz-block-item-05 .block-info > li .link:before,
		.slz-change-color .slz-block-item-07 .block-info > li .link:before,

		/* Line 1619 holycross-event */
		.slz-change-color .slz-event.slz-event-single .slz-block-item-05 .block-info > li .link.place {
			color: $main_color;
		}

	/*=======================================
	=               Icon Box                =
	=======================================*/

		/* Line 48 holycross-icon-box */
		.slz-change-color .slz-icon-box-1:hover .wrapper-icon .slz-icon,
		
		/* Line 73 holycross-icon-box */
		.slz-change-color .sc_icon_box  .slz-icon-box-1.style-1 .wrapper-icon .slz-icon,
		
		/* Line 245 holycross-icon-box */
		.slz-change-color .sc-service-list .slz-icon-box-1 .readmore:hover ,

		/* Line 281 holycross-icon-box */
		.slz-change-color .sc-service-list .slz-icon-box-1 .wrapper-info .title:hover {
			color: $main_color;
		}
	/*===============================
	=            Counter            =
	===============================*/
		
		/* Line 27 counterv2 */
		.slz-change-color .slz-counter-item-1 .content-cell .number,
		.slz-change-color .slz-counter-item-1 .suffix,
		.slz-change-color .slz-counter-item-1 .prefix,
		.slz-change-color .slz-counter-item-1 .wrapper-icon {
			color: $main_color;
		}
	
	
	/*=====  End of Counter  ======*/
	

	/*=======================================
	=              Newsletter               =
	=======================================*/

	/*=======================================
	=              Portfolio                =
	=======================================*/

		/* Line 60 holycross-portfolio */
		.slz-change-color .slz-portfolio .tool-list li .link,

		/* Line 89 holycross-portfolio */
		.slz-change-color .sc_portfolio_list .slz-carousel-wrapper .btn .icons,

		/* Line 122 holycross-portfolio */
		.slz-change-color .slz-block-item-01.portfolio-list .block-info .text,
		.slz-change-color .slz-block-item-01.portfolio-list .block-info .block-date,
		
		/* Line 135 holycross-portfolio */
		.slz-change-color  .slz-block-item-01.portfolio-list .block-info a:hover .author-text,

		/* Line 463 holycross-portfolio */
		.slz-change-color .slz-portfolio-content .block-info .block-category,

		/* Line 477 holycross-portfolio */
		.slz-change-color .slz-portfolio-content .block-info .author-text,
		.slz-change-color .slz-portfolio-content .block-info .block-date,

		/* Line 517 holycross-portfolio */
		.slz-portfolio .slz-social-share .link:hover .icons,

		/* Line 569 holycross-portfolio */
		.slz-change-color .sc_project_category .slz-counter-item-1 .content-cell .number,

		/* Line 575 holycross-portfolio */
		.slz-change-color .sc_project_category .slz-carousel-wrapper .btn {
			color: $main_color;
		}

	/*=======================================
	=             Pricing Box               =
	=======================================*/

		/* Line 103 holycross-pricing-box */
		.slz-change-color .slz-pricing-table-01 .pricing-section {
			color: $main_color;
		}

	/*=======================================
	=                Team                   =
	=======================================*/

		/* Line 117 holycross-team */
		.slz-change-color .slz-block-team-01:hover .team-body .title,
		.slz-change-color .slz-block-team-02:hover .team-body .title,

		/* Line 125 holycross-team */
		.slz-change-color .slz-block-team-01 .team-body .position,
		.slz-change-color .slz-block-team-02 .team-body .position,

		/* Line 138 holycross-teams */
		.slz-change-color .slz-block-team-01 .slz-info-block .info-item:before,
		.slz-change-color .slz-block-team-02 .slz-info-block .info-item:before,

		/* Line 157 holycross-teams */
		.slz-change-color .slz-list-block .social-list i.icon,
		.slz-change-color .social-list i.icon,

		/* Line 370 holycross-team */
		.slz-change-color .teams-detail-wrapper .heading-wrapper .name:hover,

		/* Line 373 holycross-team */
		.slz-change-color .teams-detail-wrapper .heading-wrapper .position,

		/* Line 406 holycross-team */
		.slz-change-color .teams-detail-wrapper .social-list li:hover a {
			color: $main_color;
		}

	/*=======================================
	=              Accordion                =
	=======================================*/

	/*=======================================
	=               Isotope                 =
	=======================================*/

	/*=======================================
	=             Image carousel            =
	=======================================*/
		
		/* Line 32 */
		.slz-change-color .slick-dots li button::before,
		.slz-change-color .slick-dots li.slick-active button:before {
			color: $main_color;
		}
	/*=======================================
	=               Gallery                 =
	=======================================*/

	/*=======================================
	=             Woocommerce              =
	=======================================*/

		/* Line 154 holycross-woocommerce */
		.slz-change-color .yith-wcwl-share li a:hover,

		/* Line 231 holycross-woocommerce */
		.woocommerce .single-product .thumbnails #slider-prev:hover,
		.woocommerce .single-product .thumbnails #slider-next:hover,

		/* Line 463 holycross-woocomerce */
		.woocommerce-error a,
		.woocommerce-info a,
		.woocommerce-message a,

		/* Line 480 holycross-woocomerce */
		.woocommerce-error:before,
		.woocommerce-info:before,
		.woocommerce-message:before,

		/* Line 523 holycross-woomcomerce */
		.woocommerce a.remove,

		/* Line 539 holycross-woocommerce */
		#add_payment_method table.cart .product-remove .remove,
		.woocommerce-cart table.cart .product-remove .remove,
		.woocommerce-checkout table.cart .product-remove .remove,

		/* Line 707 holycross-woocommerce */
		.woocommerce ul.products li.product h3:hover,
		.woocommerce ul.products li.product .price,

		/* Line 750 holycross-woocommerce */
		.woocommerce .star-rating:before,
		.woocommerce-page .star-rating:before,

		/* Line 773 holycross-woocommerce */
		.woocommerce .star-rating span:before,

		/* Line 920 holycross-woocommerce */
		.woocommerce-MyAccount-navigation ul >li.is-active >a,

		/* Line 971 holycross-woocommerce */
		.slz-change-color .widget_product_categories.slz-widget ul li a:hover,

		/* Line 1033 holycross-woocommerce */
		.slz-change-color .widget_product_tag_cloud a:hover,

		/* Line 1057 holycross-woocommerce */
		.woocommerce ul.product_list_widget li a:hover,

		/* Line 1076 holycross-woocommerce */
		.woocommerce .widget_product_tag_cloud .tagcloud a:hover,

		/* Line 1107 holycross-woocomerce */
		.woocommerce.widget_price_filter .price_slider_amount .price_label .from, 
		.woocommerce.widget_price_filter .price_slider_amount .price_label .to,

		/* Line 1136 holycross-woocommerce */
		.woocommerce .widget_layered_nav ul li.chosen a:before, 
		.woocommerce .widget_layered_nav_filters ul li a:before,

		/* Line 1223 holycross-woocommerce */
		.woocommerce.slz-widget .woocommerce-Price-amount.amount,

		/* Line 1227 holycross-woocommerce */
		.woocommerce.slz-widget ins,

		/* Line 1269 holycross-woocommerce */
		.woocommerce.slz-widget ins,

		/* Line 1422 holycross-woocommerce */
		.woocommerce-checkout-review-order .order-total .woocommerce-Price-amount.amount,

		/* Line 1451 holycross-woocommerce */
		.woocommerce-account .addresses .title .edit:hover,
		.woocommerce-account .addresses .title .edit:before,

		/* Line 1517 holycross-woocommerce */
		.woocommerce .products .product-category .count,

		/* Line 2004 holycross-woocommerce */
		.woocommerce table.wishlist_table tbody .product-price ins,

		/* Line 2245 holycross-woocommerce */
		.slz-change-color .comment-form-rating .stars a:before,
		.slz-change-color .stars-rating .review:before,

		/* Line 2468 holycross-woocommerce */
		.woocommerce ul.products li.product.outofstock .woocommerce-LoopProduct-link:after,

		/* Line 2743 holycross-woocommerce */
		.woocommerce .summary .price ins,
		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce .summary .price ins .woocommerce-Price-amount,

		/* Line 2759 holycross-woocommerce */
		.woocommerce div.product .out-of-stock,

		/* Line 2788 holycross-woocommerce-->
		.woocommerce .summary .single_variation_wrap .single_variation .price,

		/* Line 2870 holycross-woocommerce */
		.woocommerce .product_meta .tagged_as a:hover,
		.woocommerce .product_meta .posted_in a:hover,

		/* Line 2928 holycross-woocommerce */
		.woocommerce .woocommerce-breadcrumb,

		/* Line 2939 holycross-woocommerce */
		.woocommerce .woocommerce-breadcrumb a:hover,

		/* Line 2968 holycross-woocommerce */
		#add_payment_method .cart-collaterals .cart_totals tr td[data-title="Total"] .woocommerce-Price-amount, 
		#add_payment_method .cart-collaterals .cart_totals tr th[data-title="Total"] .woocommerce-Price-amount, 
		.woocommerce-cart .cart-collaterals .cart_totals tr td[data-title="Total"] .woocommerce-Price-amount, 
		.woocommerce-cart .cart-collaterals .cart_totals tr th[data-title="Total"] .woocommerce-Price-amount, 
		.woocommerce-checkout .cart-collaterals .cart_totals tr td[data-title="Total"] .woocommerce-Price-amount, 
		.woocommerce-checkout .cart-collaterals .cart_totals tr th[data-title="Total"] .woocommerce-Price-amount,

		/* Line 2983 holycross-woocommerce */
		.woocommerce table.shop_table .product-name a:hover {
			color: $main_color;
		}

		/* Line 1205 holycross-woocommerce */
		.woocommerce ul li .remove {
			color: $main_color !important;
		}


/*======================================================
=                   3. border-color                    =
======================================================*/

	/*=======================================
	=              Custom Editor            =
	=======================================*/

		/* Line 65 custom-editor */
		.slz-change-color .slz-header-topbar {
			border-bottom-color: $main_color;
		}

	/*=======================================
	=                Default                =
	=======================================*/

		/* Line 508 default */
		.slz-change-color .slz-main-menu .sub-menu {
			border-top-color: $main_color;
		}

	/*=======================================
	=                Layout                 =
	=======================================*/

		/* Line 126 layout.css */
		.slz-change-color .slz-main-menu .sub-menu {
			border-top-color: $main_color;
		}

		/* Line 1759 layout.css */
		.slz-change-color .slz-template-01 .main-layout .slz-block-item-01.style-3 .block-content {
			border-bottom-color: @main_color;
		}

 	/*=======================================
	=               Style.css               =
	=======================================*/

	/*=======================================
	=                Button                 =
	=======================================*/

		/* Line 53 button.css */
		.slz-change-color .slz-btn:hover,
		.slz-change-color .slz-btn:focus {
			border-color: $main_color;
			background-color: #ffffff;
		}

	/*=======================================
	=                Widgets                =
	=======================================*/

		/* Line 576 widgets */
		.slz-change-color .slz-widget-contact-form .wpcf7-submit:hover,
		.slz-change-color .slz-widget .tnp-widget-minimal input.tnp-submit:hover,

		/* Line 1304 widgets */
		.slz-change-color .slz-widget-material-download .slz-btn {
			border-color: $main_color;
		}

		/* Line 1314 widgets */
		.slz-change-color .slz-widget-material-download .slz-btn:hover {
			border-color: $main_color !important;
		}

		.slz-change-color .footer-top-wrapper .slz-widget-send-mail .form-control {
			border-color: rgba(255, 255, 255, 0.44);
		}

	/*=======================================
	=                Contact                =
	=======================================*/

	/*=======================================
	=                Event                  =
	=======================================*/

		

	/*=======================================
	=               Icon Box                =
	=======================================*/

	/*=======================================
	=              Newsletter               =
	=======================================*/

	/*=======================================
	=              Portfolio                =
	=======================================*/

		/* Line 362 holycross-portfolio */
		.slz-change-color .portfolio-list.style-6 .block-content,
		.slz-change-color .portfolio-list.style-6 .block-image + .block-content {
			border-bottom-color: $main_color;
		}

	/*=======================================
	=             Pricing Box               =
	=======================================*/

	/*=======================================
	=                Team                   =
	=======================================*/

	/*=======================================
	=              Accordion                =
	=======================================*/

		/* Line 28 accordion */
		.slz-change-color .accordion-panel {
			border-color: $main_color;
		}

		/* Line 84 accordion */
		.slz-change-color .panel-collapse {
			border-top-color: $main_color;
		}

	/*=======================================
	=               Isotope                 =
	=======================================*/

	/*=======================================
	=               Gallery                 =
	=======================================*/

	/*=======================================
	=             Woocommerce              =
	=======================================*/

		/* Line 355 holycross-woocommerce */
		.woocommerce form .form-row label.inline .slz-woocommerce-label-for:hover,

		/* Line 1589 holycross-woocommerce */
		#add_payment_method #payment ul.payment_methods li label:hover:before,
		.woocommerce-cart #payment ul.payment_methods li label:hover:before,
		.woocommerce-checkout #payment ul.payment_methods li label:hover:before,
		#add_payment_method #payment ul.payment_methods li input[type="radio"]:checked + label:before,
		.woocommerce-cart #payment ul.payment_methods li input[type="radio"]:checked + label:before,
		.woocommerce-checkout #payment ul.payment_methods li input[type="radio"]:checked + label:before {
			border-color: $main_color;
		}

		/* Line 458 holycross-woocommerce */
		.woocommerce-error,
		.woocommerce-info,
		.woocommerce-message,


		/* Line 3002 holycross-woocommerce */
		.slz-change-color .woo-account-wrapper .dropdown-menu {
			border-top-color: $main_color;
		}

		/* Line 3278 holycross-woocommerce */
		.woocommerce-MyAccount-navigation ul >li.is-active {
			border-bottom-color: $main_color;
		}

		/* Line 896 holycross-woocommerce */
		.woocommerce-MyAccount-navigation ul >li.is-active,

		/* Line 920 holycross-woocommerce */
		.woocommerce-MyAccount-navigation ul >li.is-active >a {
		    border-right-color: $main_color;
		}


/*======================================================
=                 4. background-color                  =
======================================================*/

	/*=======================================
	=              Custom Editor            =
	=======================================*/

	/*=======================================
	=                Default                =
	=======================================*/

		/* Line 932 default */
		.slz-change-color .slz-main-menu-mobile .slz-menu-wrapper .mega-menu .mega-menu-tablist li.active .link,
		.slz-change-color .slz-main-menu-mobile .slz-menu-wrapper .mega-menu .mega-menu-tablist li:hover .link,

		/* Line 985 default */
		.slz-change-color .slz-main-menu-mobile .nav-search,

		/* Line 1044 default */
		.slz-change-color .slz-footer-bottom .slz-logo > span {
			background-color: $main_color;
		}

	/*=======================================
	=              Layout.css               =
	=======================================*/

		/* Line 239 layout.css */
		.slz-change-color .holycross-menu .slz-menu-wrapper > li >a:before,

		/* Line 260 layout.css */
		.slz-change-color .holycross-menu .slz-menu-wrapper > li >a:after,

		/* Line 325 layout.css */
		.slz-change-color .slz-hamburger-menu .bar,
		.slz-change-color .slz-hamburger-menu .bar:before,
		.slz-change-color .slz-hamburger-menu .bar:after,
		.slz-change-color .slz-main-menu-mobile .nav-search,
		.slz-change-color .slz-header-mobile-topbar .slz-mobile-topbar,
		.slz-change-color .slz-main-menu-mobile .slz-menu-wrapper,

		/* Line 503 */
		.slz-change-color .header-transparent .slz-header-fixed .slz-hamburger-menu .bar, 
		.slz-change-color .header-transparent .slz-header-fixed .slz-hamburger-menu .bar:before, 
		.slz-change-color .header-transparent .slz-header-fixed .slz-hamburger-menu .bar:after,

		/* Line 573 layout.css */
		.slz-change-color .slz-footer-top,

		/* Line 1398 layout.css */
		.slz-change-color .block-image.has-audio .link:before,

		/* Line 1464 layout.css */
		.slz-change-color .block-quote-wrapper:before,

		/* Line 2138 layout.css */
		.slz-change-color .slz-progress-bar-01 .progress-bar,

		/* Line 2288 layout.css */
		.slz-change-color .tab-list li.active >.link,

		/* Line 2389 layout.css */
		.slz-change-color .sc-video.slz-block-video .btn-play .icons:hover,

		/* Line 2430 layout.css */
		.slz-change-color .sc_main_title.style-1 .slz-main-title:before {
			background-color: $main_color;
		}
		

 	/*=======================================
	=               Style.css               =
	=======================================*/

		/* Line 1281 style.css */
		.slz-change-color .widget_calendar #today,

		/* Line 2351 style.css */
		.slz-change-color .entry-content .page-links > span:not(.page-links-title):not(.screen-reader-text),

		/* Line 2388 style.css */
		.slz-change-color .entry-content .page-links a:hover,

		/* Line 3349 style.css */
		.slz-change-color .slz-pagination .nav-links .page-numbers.current,
	    .slz-change-color .slz-pagination .nav-links .page-numbers.current:hover,
	    .slz-change-color .pagination-comment .page-numbers.current,
	    .slz-change-color .pagination-comment .page-numbers.current:hover,
	    .slz-change-color .pagination-wrapper .page-numbers.current,
	    .slz-change-color .pagination-wrapper .page-numbers.current:hover,

	    /* Line 3359 style.css */
	    .slz-change-color .slz-pagination .nav-links .page-numbers:hover,
	    .slz-change-color .pagination-comment .page-numbers:hover,
	    .slz-change-color .pagination-wrapper .page-numbers:hover,

	    /* Line 3366 style.css */
	    .slz-change-color .slz-pagination .nav-links a.page-numbers:hover,
	    .slz-change-color .pagination-comment a.page-numbers:hover,
	    .slz-change-color .pagination-wrapper a.page-numbers:hover,

	    /* Line 3722 style.css */
	    .slz-change-color .slz-title-command:before,

	    /* Line 3852 style.css */
	    .slz-change-color .back-to-top .btn:hover {
			background-color: $main_color;
		}

	/*=======================================
	=                Button                 =
	=======================================*/

	/*=======================================
	=                Widgets                =
	=======================================*/

		/* Line 993 widgets */
		.slz-change-color .slz-widget-portfolio .slz-block-item-03.portfolio-item .tool-list li:hover {
			background-color: $main_color;
		}

		.slz-change-color .slz-footer-top .slz-widget-send-mail .form-control,
		.slz-change-color .slz-footer-top .slz-widget-send-mail2 .form-control,
		.slz-change-color .slz-footer-top .slz-shortcode-send-mail .form-control,
		.slz-change-color .slz-footer-top .slz-shortcode-send-mail2 .form-control,
		.woocommerce .slz-footer-top .slz-widget-send-mail .form-control,
		.woocommerce .slz-footer-top .slz-widget-send-mail2 .form-control,
		.woocommerce .slz-footer-top .slz-shortcode-send-mail .form-control,
		.woocommerce .slz-footer-top .slz-shortcode-send-mail2 .form-control {
			background-color: rgba(0, 0, 0, 0.08);
		}

	/*=======================================
	=                Contact                =
	=======================================*/

	/*=======================================
	=                Event                  =
	=======================================*/

		/* Line 438 holycross-event */
		.slz-change-color .slz-events-block .list-layout .slz-block-item-07 .block-date {
			background-color: $main_color;
		}

		/* Line 605 holycross-event */
		.slz-change-color .sc_event_block .slz-block-item-05.style-1 .block-date,

		/* Line 734 holycross-event */
		.slz-change-color .slz-events-block.layout-6 .main-layout .slz-block-item-07.style-1:not(.has-image) .block-content-wrapper,

		/* Line 770 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-1 .block-date,
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-02 .block-date,

		/* Line 821 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-02 .block-donation-wrapper,

		/* Line 857 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-02 .donate-block .remaining-block,

		/* Line 1038 holycross-event */
		.slz-change-color .slz-block-item-07.style-03 .block-date,

		/* Line 1097 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-03 .col-right,

		/* Line 1144 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-04 .block-content-wrapper,

		/* Line 1189 holycross-event */
		.slz-change-color .slz-events-block .main-layout .slz-block-item-07.style-04 .block-date,

		/* Line 1528 holycross-event */
		.slz-change-color .slz-event.slz-event-single .slz-block-item-05 .block-date {
			background-color: $main_color;
		}

		@media screen and (max-width:768px) {
			/* Line 1795 holycross-event */
			.slz-change-color .slz-events-block .main-layout .slz-block-item-07 .block-content-wrapper {
				background-color: $main_color;
			}
		}

	/*=======================================
	=               Icon Box                =
	=======================================*/

		/* Line 29 holycross-icon-box */
		.slz-change-color .slz-icon-box-1 .wrapper-icon {
			background-color: $main_color;
		}

		/* Line 61 holycross-icon-box */
		.slz-change-color .slz-icon-box-1:hover .wrapper-icon {
			   background-color: #ffffff;
		}

	/*=======================================
	=              Newsletter               =
	=======================================*/

	/*=======================================
	=              Portfolio                =
	=======================================*/

		/* Line 70 holycross-portfolio */
		.slz-change-color .slz-portfolio .tool-list li .link:hover,

		/* Line 395 holycross-portfolio */
		.slz-change-color .portfolio-list.style-6 .tool-list li:hover .link {
			background-color: $main_color;
			color: #ffffff;
		}

	/*=======================================
	=             Pricing Box               =
	=======================================*/

		/* Line 34 holycross-pricing-box */
		.slz-change-color .slz-pricing-table-01:before {
			background-color: $main_color;
		}

	/*=======================================
	=                Team                   =
	=======================================*/

		/* Line 43 holycross-team */
		.slz-block-team-01 .team-img .link:before,
    	.slz-block-team-02 .team-img .link:before,

		/* Line 165 holycross-team */
		.slz-change-color .tool-list li:hover,
		.slz-change-color .sc_team_carousel .slz-carousel-wrapper .btn:hover,
		.slz-change-color .sc_portfolio_list .slz-carousel-wrapper .btn:hover {
			background-color: $main_color;
		}
		.slz-change-color .sc_team_carousel .slz-carousel-wrapper .btn:hover .icons,
		.slz-change-color .sc_portfolio_list .slz-carousel-wrapper .btn:hover .icons {
			color:#FFFFFF;
		}

	/*=======================================
	=              Accordion                =
	=======================================*/

		/* Line 59 accordion */
		.slz-change-color .panel-heading a:hover,
		.slz-change-color .panel-heading .check-data-collapsed:not(.collapsed) {
			background-color: @main_color;
		}

	/*=======================================
	=               Isotope                 =
	=======================================*/

		/* Line 23 holycross-isotope */
		.slz-change-color .slz-isotope-grid-2 .grid-item > div .block-image .dh-overlay:before,
		.slz-change-color .slz-isotope-grid-2 .grid-item > div .block-image .dh-overlay:after,

		/* Line 47 holycross-isotope */
		.slz-change-color .slz-block-gallery-01 .block-content,

		/* Line 78 holycross-isotope */
		.slz-change-color .slz-block-gallery-01 .block-content .block-zoom-img {
			background-color: $main_color;
		}

	/*=======================================
	=               Gallery                 =
	=======================================*/

		.slz-change-color .slz-gallery-tab-01 .grid-item > .block-image .dh-overlay,
		.slz-change-color .slz-image-carousel .item > .block-image .dh-overlay,
		.slz-change-color .slz-carousel-syncing .slider-nav .thumbnail-image:after,
		.slz-change-color .slz-carousel-centermode .block-image:after, .slz-carousel-center .block-image:after {
			background-color: $main_color;
		}

		.slz-change-color .slz-portfolio-content .block-info .block-category:hover {
		    color: #555555;
		}

	/*=======================================
	=             Woocommerce              =
	=======================================*/

		/* Line 544 holycross-woocommerce */
		#add_payment_method table.cart .product-remove .remove:hover,
		.woocommerce-cart table.cart .product-remove .remove:hover,
		.woocommerce-checkout table.cart .product-remove .remove:hover,

		/* Line 1097 holycross-woocommerce */
		.woocommerce.widget_price_filter .ui-slider .ui-slider-range,
		.woocommerce.widget_price_filter .ui-slider .ui-slider-handle,

		/* Line 1219 holycross-woocommerce */
		.woocommerce ul li .remove:hover,

		/* Line 1372 holycross-woocommerce */
		.woocommerce nav.woocommerce-pagination ul li a:focus,
		.woocommerce nav.woocommerce-pagination ul li span.current,
		.woocommerce nav.woocommerce-pagination ul li a:hover,

		/* Line 1401 holycross-woocommerce */
		.woocommerce nav.woocommerce-pagination ul li .prev:hover,
		.woocommerce nav.woocommerce-pagination ul li .prev:focus,
		.woocommerce nav.woocommerce-pagination ul li .next:hover,
		.woocommerce nav.woocommerce-pagination ul li .next:focus,

		/* Line 1523 holycross-woomcommerce */
		.woocommerce mark,
		.woocommerce-page mark,

		/* Line 1564 holycross-woocommerce */
		#add_payment_method #payment ul.payment_methods li label:after,
		.woocommerce-cart #payment ul.payment_methods li label:after,
		.woocommerce-checkout #payment ul.payment_methods li label:after,

		/* Line 1918 holycross-woocommerce */
		 #add_payment_method .wc-proceed-to-checkout a.checkout-button,
		.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
		.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button.alt:hover,

		/* Line 2640 holycross-woocommerce */
		.woocommerce span.onsale,
		.woocommerce ul.products li.product .onsale,

		/* Line 3459 holycross-woocommerce */
		.woocommerce .shop_table .product-remove a,
		.woocommerce table.wishlist_table tr td.product-remove a {
			background-color: $main_color;
		}


/*======================================================
=               	  5. background                    =
======================================================*/

	/*=======================================
	=              Custom Editor            =
	=======================================*/

	/*=======================================
	=                Default                =
	=======================================*/

		/* Line 720 default */
		.slz-change-color .slz-hamburger-menu .bar,

		/* Line 732 default */
		.slz-change-color .slz-hamburger-menu .bar:before,

		/* Line 743 default */
		.slz-change-color .slz-hamburger-menu .bar:after,

		/* Line 795 default */
		.slz-change-color .slz-main-menu-mobile .slz-menu-wrapper,

		/* Line 836 default */
		.slz-change-color .slz-main-menu-mobile .slz-menu-wrapper li > a:hover,
		.slz-change-color .slz-main-menu-mobile .slz-menu-wrapper li > a:focus,

		/* Line 870 default */
		.slz-change-color .slz-main-menu-mobile .slz-menu-wrapper .sub-menu .mb-dropdown-open > a {
			background: $main_color;
		}

	/*=======================================
	=              Layout.css               =
	=======================================*/

		/* Line 2055 layout.css */
		.slz-change-color .audio-wrapper .mejs-controls .mejs-time-rail .mejs-time-current,
		
		/* Line 2107 layout.css */
		.slz-change-color .audio-wrapper  .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,

		/* Line 2364 */
		.slz-change-color .slz-block-video .btn-play .icons:hover {
			background: $main_color;
		}

 	/*=======================================
	=               Style.css               =
	=======================================*/

	/*=======================================
	=                Button                 =
	=======================================*/

	/*=======================================
	=                Widgets                =
	=======================================*/

	/*=======================================
	=                Contact                =
	=======================================*/

	/*=======================================
	=                Event                  =
	=======================================*/

	/*=======================================
	=               Icon Box                =
	=======================================*/

		/* Line 44 holycross-icon-box */
		.slz-change-color .slz-icon-box-1:hover .wrapper-icon {
			box-shadow: inset 0px 0px 0px 2px $main_color;
		}

	/*=======================================
	=              Newsletter               =
	=======================================*/

	/*=======================================
	=              Portfolio                =
	=======================================*/

	/*=======================================
	=             Pricing Box               =
	=======================================*/

	/*=======================================
	=                Team                   =
	=======================================*/

	/*=======================================
	=              Accordion                =
	=======================================*/

	/*=======================================
	=               Isotope                 =
	=======================================*/

	/*=======================================
	=               Gallery                 =
	=======================================*/

	/*=======================================
	=             Woocommerce              =
	=======================================*/

	/*===============================
	=            Counter            =
	===============================*/
	
		.slz-change-color .slz-counter-item-1 .line {
			background-color: $main_color;
		}
	
	/*=====  End of Counter  ======*/
	