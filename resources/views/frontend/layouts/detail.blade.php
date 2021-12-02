<!doctype html>
<html lang="en">

<head>
	<title>Document</title>
	@include('frontend.layouts.head')

	<style>
		.form_group {
			top: 100px;
			position: sticky;
			margin-top: 2.5rem;
			background-color: rgba(0, 120, 10, 0.2);
			padding: 40px 40px 40px 50px;
			border-radius: 8px;
			box-shadow: 0px 15px 30px rgba(62, 86, 238, 0.15);
		}

		.form-control {
			border-radius: 36px;
			padding: 25px;
		}

		.form-control:hover {
			border: 1px solid rgb(0, 255, 106);
		}

		.form-control.text:focus {
			background: rgb(217, 255, 0);
		}

		/* .form-control-select {
        padding: 25px;
     } */
		.form-label {
			color: #182135;
			font-weight: 400;
		}

		.submit-btn {
			width: 100%;
			background-color: orange;
			border-radius: 2rem;
			padding: 10px;
			color: white;
			font-weight: 600;
			border: none;
		}

		.submit-btn:hover {
			background-color: rgba(0, 255, 64, 0.5);
		}

		.nav-tabs .nav-link {
			margin-right: 16px;
			padding: 8px 0px;
			background-color: white;
		}

		.nav-tabs .nav-item.show .nav-link,
		.nav-tabs .nav-link.active {
			border: none;
			border-bottom: 5px solid rgba(131, 64, 2, 0.979) !important;
		}

		.nav-link:hover {
			border: none;
		}
	</style>
	<link rel='stylesheet' id='lexus-boostrap-css' href='https://anvuihomestay.com/wp-content/themes/amihomestay/assets/css/opal-boostrap.css?ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-hotel-booking-css' href='https://anvuihomestay.com/wp-content/plugins/wp-hotel-booking/assets/css/hotel-booking.min.css?ver=1.10.2' type='text/css' media='all' />
	
	<link rel='stylesheet' id='amihomestay-style-css' href='https://anvuihomestay.com/wp-content/themes/amihomestay/style.css?ver=5.8.2' type='text/css' media='all' />
	<style id='amihomestay-style-inline-css' type='text/css'>
		body,
		input,
		button,
		select,
		textarea {
			font-family: "Ubuntu", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			font-weight: 400;
			color: #6b6460
		}

		html {
			font-size: 16px;
		}

		.c-heading {
			color: #000000;
		}

		.c-primary {
			color: #cf9d6c;
		}

		.bg-primary {
			background-color: #cf9d6c;
		}

		.b-primary {
			border-color: #cf9d6c;
		}

		.button-primary:hover {
			background-color: #c38546;
			border-color: #c38546;
		}

		.c-secondary {
			color: #423a36;
		}

		.bg-secondary {
			background-color: #423a36;
		}

		.b-secondary {
			border-color: #423a36;
		}

		.button-secondary:hover {
			background-color: #272320;
		}

		input[type="text"]::placeholder,
		input[type="email"]::placeholder,
		input[type="url"]::placeholder,
		input[type="password"]::placeholder,
		input[type="search"]::placeholder,
		input[type="number"]::placeholder,
		input[type="tel"]::placeholder,
		input[type="range"]::placeholder,
		input[type="date"]::placeholder,
		input[type="month"]::placeholder,
		input[type="week"]::placeholder,
		input[type="time"]::placeholder,
		input[type="datetime"]::placeholder,
		input[type="datetime-local"]::placeholder,
		input[type="color"]::placeholder,
		input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		input[type="number"],
		input[type="tel"],
		input[type="range"],
		input[type="date"],
		input[type="month"],
		input[type="week"],
		input[type="time"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="color"],
		textarea::placeholder,
		textarea,
		.mainmenu-container ul ul .menu-item>a,
		.mainmenu-container li a span,
		.cat-links a,
		.entry-meta,
		.cat-tags-links .tags-links a:not(:hover),
		.author-wrapper .a-subtitle,
		.site-footer a,
		.comment-metadata,
		.comment-metadata a,
		.elementor-widget .tagcloud a,
		.elementor-widget.widget_tag_cloud a,
		.widget .tagcloud a,
		.widget.widget_tag_cloud a,
		.c-body,
		.site-header-account .account-links-menu li a,
		.site-header-account .account-dashboard li a,
		.comment-form label,
		.comment-form a,
		.elementor-nav-menu--dropdown a,
		.elementor-search-form--skin-minimal .elementor-search-form__icon,
		.elementor-widget-opal-testimonials .layout_2 .elementor-testimonial-content,
		#hotel-booking-cart input[type=email],
		#hotel-booking-cart input[type=number],
		#hotel-booking-cart input[type=text],
		#hotel-booking-payment input[type=email],
		#hotel-booking-payment input[type=number],
		#hotel-booking-payment input[type=text],
		#hotel-booking-results .hb-search-results>.hb-room .hb-room-meta li>label {
			color: #6b6460;
		}

		.widget-area strong,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.lexus-h1,
		.lexus-h2,
		.lexus-h3,
		.lexus-h4,
		.lexus-h5,
		.lexus-h6,
		blockquote,
		.breadcrumb.current-item,
		.breadcrumb span.current-item,
		.breadcrumb *.current-item,
		th,
		a,
		.entry-content blockquote cite a,
		.entry-content strong,
		.entry-content dt,
		.entry-content th,
		.single .navigation .thumbnail-nav,
		.related-posts .related-heading,
		.author-wrapper .author-name,
		.error404 .error-btn-bh,
		.comments-title,
		.comment-content strong,
		.comment-author,
		.comment-author a,
		.comment-metadata a.comment-edit-link,
		.comment-reply-link,
		.comment-content table th,
		.comment-content dt,
		.comment-respond .comment-reply-title,
		.elementor-element .elementor-widget-wp-widget-recent-posts .title-post a,
		h2.widget-title,
		h2.widgettitle,
		.c-heading,
		fieldset legend,
		.search .site-content .page-title,
		.site-header-account .login-form-title,
		.elementor-accordion .elementor-tab-title,
		.elementor-featured-box-wrapper .elementor-featured-box-title,
		.elementor-widget-opal-image-hotspots .elementor-accordion .elementor-tab-title,
		.elementor-price-table__currency,
		.elementor-price-table__integer-part,
		.elementor-price-table__feature-inner span.item-active,
		.elementor-price-table__period,
		.elementor-progress-percentage,
		.elementor-widget-progress .elementor-title,
		.elementor-teams-wrapper .elementor-team-name,
		.elementor-widget-opal-testimonials .elementor-testimonial-title,
		.elementor-widget-opal-testimonials .elementor-testimonial-content,
		.elementor-widget-opal-testimonials .elementor-testimonial-name,
		.rooms .hb_room .price,
		#hotel-booking-results>h3,
		#hotel-booking-results .hb-search-results>.hb-room .hb-room-name a:not(:hover),
		#hotel-booking-results .hb-search-results>.hb-room .hb-room-meta li>label+div,
		#hotel-booking-results .hb-search-results>.hb-room .hb-room-meta li .hb_search_item_price,
		.hb_single_room_tab_details #comments h2,
		.hb_related_other_room>.title {
			color: #000000;
		}

		.btn-link,
		.elementor-element .elementor-button-link .elementor-button,
		.button-link,
		blockquote:before,
		.main-navigation .top-menu>li:hover>a,
		.main-navigation .top-menu>li:active>a,
		.main-navigation .top-menu>li:focus>a,
		.mainmenu-container ul ul .menu-item>a:hover,
		.mainmenu-container ul ul .menu-item>a:active,
		.mainmenu-container ul ul .menu-item>a:focus,
		.mainmenu-container li.current-menu-parent>a,
		.mainmenu-container .menu-item>a:hover,
		.menu-toggle,
		.site-header .header-group .search-submit:hover,
		.site-header .header-group .search-submit:focus,
		.entry-meta .author a:not(:hover),
		.entry-meta .cat-links a,
		.pbr-social-share a:hover,
		.single .navigation>div:hover,
		.single .navigation>div:hover .nav-title,
		.single .navigation>div:hover a,
		.single .navigation>div:hover b,
		.single .navigation .nav-title,
		.error404 .error-404-subtitle,
		.breadcrumb a:hover,
		.breadcrumb a:hover span,
		.site-header-account>a:hover i,
		.site-header-account>a:hover .text-account,
		.comment-author a:hover,
		.comment-metadata a:hover,
		.elementor-element .elementor-widget-wp-widget-recent-posts .title-post a:hover,
		.title-with-icon:before,
		.widget_recent_entries li a:hover,
		.widget_recent_entries li a:active,
		.widget_search button[type="submit"],
		.elementor-widget .tagcloud a:hover,
		.elementor-widget .tagcloud a:focus,
		.elementor-widget.widget_tag_cloud a:hover,
		.elementor-widget.widget_tag_cloud a:focus,
		.widget .tagcloud a:hover,
		.widget .tagcloud a:focus,
		.widget.widget_tag_cloud a:hover,
		.widget.widget_tag_cloud a:focus,
		.button-outline-primary,
		.elementor-wpcf7-button-outline_primary input[type="button"],
		.elementor-wpcf7-button-outline_primary input[type="submit"],
		.elementor-wpcf7-button-outline_primary button[type="submit"],
		.mailchimp-button-outline_primary button,
		.mailchimp-button-outline_primary button[type="submit"],
		.elementor-element .elementor-button-outline_primary .elementor-button,
		.c-primary,
		.navigation-button .menu-toggle:hover,
		.navigation-button .menu-toggle:focus,
		.entry-header .entry-title a:hover,
		.entry-content blockquote cite a:hover,
		.site-header-account .account-dropdown a.register-link,
		.site-header-account .account-dropdown a.lostpass-link,
		.site-header-account .account-links-menu li a:hover,
		.site-header-account .account-dashboard li a:hover,
		.comment-form a:hover,
		.wp_widget_tag_cloud a:hover,
		.wp_widget_tag_cloud a:focus,
		#secondary .elementor-widget-container h5:first-of-type,
		.elementor-nav-menu-popup .mfp-close,
		.owl-theme.owl-carousel .owl-nav [class*='owl-']:hover,
		.owl-theme .products .owl-nav [class*='owl-']:hover,
		#secondary .elementor-widget-wp-widget-recent-posts a,
		.elementor-accordion .elementor-tab-title.elementor-active,
		.contactform-content .form-title,
		.elementor-widget-opal-countdown .elementor-countdown-digits,
		.elementor-featured-box-wrapper i,
		.elementor-widget-heading .sub-title,
		.elementor-widget-icon-box.elementor-view-framed:hover .elementor-icon,
		.elementor-widget-icon-box.elementor-view-framed:not(:hover) .elementor-icon,
		.elementor-widget-icon-box.elementor-view-default:hover .elementor-icon,
		.elementor-widget-icon-box.elementor-view-default:not(:hover) .elementor-icon,
		.elementor-widget-icon-box:hover .elementor-icon-box-title,
		.elementor-widget.elementor-widget-icon-list .elementor-icon-list-item:not(:hover) i,
		.elementor-widget.elementor-widget-icon-list .elementor-icon-list-item:not(:hover) .elementor-icon-list-text,
		.elementor-widget.elementor-widget-icon-list .elementor-icon-list-item:hover i,
		.elementor-widget.elementor-widget-icon-list .elementor-icon-list-item:hover .elementor-icon-list-text,
		.elementor-widget-icon.elementor-view-default .elementor-icon,
		.elementor-widget-icon.elementor-view-framed .elementor-icon,
		.elementor-widget-opal-image-hotspots .elementor-accordion .elementor-tab-title.elementor-active,
		.elementor-nav-menu--main.elementor-nav-menu--layout-horizontal .elementor-nav-menu a.elementor-sub-item.elementor-item-active,
		.elementor-nav-menu--main .elementor-item.highlighted,
		.elementor-nav-menu--main .elementor-item.elementor-item-active,
		.elementor-nav-menu--main .elementor-item:hover,
		.elementor-nav-menu--main .elementor-item:focus,
		.elementor-nav-menu--main .current-menu-ancestor .elementor-item.has-submenu,
		.elementor-nav-menu--popup .elementor-item.highlighted,
		.elementor-nav-menu--popup .elementor-item.elementor-item-active,
		.elementor-nav-menu--popup .elementor-item:hover,
		.elementor-nav-menu--popup .elementor-item:focus,
		.elementor-nav-menu--popup .elementor-nav-menu--dropdown a:hover,
		.elementor-nav-menu--popup .elementor-nav-menu--dropdown a.highlighted,
		.elementor-nav-menu--dropdown:not(.mega-menu) a:hover,
		.elementor-nav-menu--dropdown:not(.mega-menu) a.highlighted,
		.elementor-nav-menu--dropdown:not(.mega-menu) .has-submenu,
		.portfolio .portfolio-content .entry-title a:hover,
		.portfolio .entry-category a:hover,
		.elementor-portfolio-style-overlay .portfolio .portfolio-content .entry-title a:hover,
		.elementor-portfolio-style-overlay .portfolio .portfolio-content .entry-category a:hover,
		.elementor-portfolio__filter:hover,
		.single-portfolio-navigation .nav-link:hover span,
		.elementor-button-default .elementor-button,
		.elementor-search-form .elementor-search-form__submit:hover,
		.elementor-search-form--skin-full_screen .elementor-search-form__toggle:hover,
		.elementor-teams-wrapper .elementor-team-name:hover,
		.elementor-widget-opal-testimonials .elementor-testimonial-job,
		.testimonial-star-rating,
		.testimonial-star-rating span:before,
		.elementor-video-icon,
		.hb_single_room .price {
			color: #cf9d6c;
		}

		.f-primary {
			fill: #cf9d6c;
		}

		.mp-level::-webkit-scrollbar-thumb,
		.page-numbers:not(ul):not(.dots):hover,
		.page-numbers:not(ul):not(.dots):focus,
		.page-numbers.current:not(ul):not(.dots),
		.comments-link span,
		.cat-tags-links .tags-links a:hover,
		.cat-tags-links .tags-links a:focus,
		.page-links a:hover .page-number,
		.page-links a:focus .page-number,
		.page-links>.page-number,
		#secondary .widget_product_categories ul.product-categories>li>a:before,
		.widget_meta>ul>li>a:before,
		.widget_pages>ul>li>a:before,
		.widget_archive>ul>li>a:before,
		.widget_categories>ul>li>a:before,
		.widget_meta>ul>li>a:hover:before,
		.widget_pages>ul>li>a:hover:before,
		.widget_archive>ul>li>a:hover:before,
		.widget_categories>ul>li>a:hover:before,
		.wp_widget_tag_cloud a:hover:before,
		.wp_widget_tag_cloud a:focus:before,
		.button-primary,
		input[type="reset"],
		input.secondary[type="button"],
		input.secondary[type="reset"],
		input.secondary[type="submit"],
		input[type="button"],
		input[type="submit"],
		button[type="submit"],
		.more-link,
		.page .edit-link a.post-edit-link,
		.scrollup,
		.comment-form .form-submit input[type="submit"],
		.elementor-wpcf7-button-primary input[type="button"][type="submit"],
		.elementor-wpcf7-button-primary input[type="submit"],
		.elementor-wpcf7-button-primary button[type="submit"],
		.mailchimp-button-primary button,
		.mailchimp-button-primary button[type="submit"],
		#hotel-booking-cart .hb_button.hb_checkout,
		#hotel-booking-cart button[type=button],
		#hotel-booking-cart button[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout,
		#hotel-booking-payment button[type=button],
		#hotel-booking-payment button[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input[type=submit],
		.hb_button,
		#hotel-booking-results form .hb_button.hb_checkout,
		#hotel-booking-results form button.hb_add_to_cart,
		#hotel-booking-results form form button[type=submit],
		.button-default:hover,
		.button-dark:hover,
		.elementor-element .elementor-button-dark .elementor-button:hover,
		.button-dark:active,
		.elementor-element .elementor-button-dark .elementor-button:active,
		.button-dark:focus,
		.elementor-element .elementor-button-dark .elementor-button:focus,
		.button-light:hover,
		.elementor-element .elementor-button-light .elementor-button:hover,
		.button-light:active,
		.elementor-element .elementor-button-light .elementor-button:active,
		.button-light:focus,
		.elementor-element .elementor-button-light .elementor-button:focus,
		.elementor-element .elementor-button-primary .elementor-button,
		.button-outline-primary:hover,
		.elementor-wpcf7-button-outline_primary input:hover[type="button"],
		.elementor-wpcf7-button-outline_primary input:hover[type="submit"],
		.elementor-wpcf7-button-outline_primary button:hover[type="submit"],
		.mailchimp-button-outline_primary button:hover,
		.button-outline-primary:active,
		.elementor-wpcf7-button-outline_primary input:active[type="button"],
		.elementor-wpcf7-button-outline_primary input:active[type="submit"],
		.elementor-wpcf7-button-outline_primary button:active[type="submit"],
		.mailchimp-button-outline_primary button:active,
		.button-outline-primary.active,
		.elementor-wpcf7-button-outline_primary input.active[type="button"],
		.elementor-wpcf7-button-outline_primary input.active[type="submit"],
		.elementor-wpcf7-button-outline_primary button.active[type="submit"],
		.mailchimp-button-outline_primary button.active,
		.show>.button-outline-primary.dropdown-toggle,
		.elementor-wpcf7-button-outline_primary .show>input.dropdown-toggle[type="button"],
		.elementor-wpcf7-button-outline_primary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-outline_primary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-outline_primary .show>button.dropdown-toggle,
		.elementor-element .elementor-button-outline_primary .elementor-button:hover,
		.elementor-element .elementor-button-outline_primary .elementor-button:active,
		.elementor-element .elementor-button-outline_primary .elementor-button:focus,
		.bg-primary,
		.elementor-widget-divider .elementor-divider-separator:before,
		.elementor-flip-box__front,
		.elementor-widget-icon-box.elementor-view-stacked:hover .elementor-icon,
		.elementor-widget-icon-box.elementor-view-stacked:not(:hover) .elementor-icon,
		.elementor-widget-icon.elementor-view-stacked .elementor-icon,
		.elementor-widget-opal-image-hotspots .scrollbar-inner>.scroll-element .scroll-bar,
		.opal-image-hotspots-main-icons .opal-image-hotspots-icon,
		.elementor-widget-opal-image-gallery .gallery-item-overlay,
		.elementor-widget-opal-image-gallery .elementor-galerry__filter.elementor-active,
		.elementor-nav-menu--main.elementor-nav-menu--layout-horizontal:not(.e--pointer-framed) .elementor-nav-menu>li.current-menu-parent>a:before,
		.elementor-nav-menu--main.elementor-nav-menu--layout-horizontal:not(.e--pointer-framed) .elementor-nav-menu>li.current-menu-parent>a:after,
		.elementor-nav-menu--main.e--pointer-squares .elementor-item.elementor-item-active:before,
		.elementor-nav-menu--main.e--pointer-dot .elementor-item.elementor-item-active:before,
		.elementor-nav-menu--main.e--pointer-squares .elementor-item:hover:before,
		.elementor-nav-menu--main.e--pointer-dot .elementor-item:hover:before,
		.elementor-nav-menu--main:not(.e--pointer-framed):not(.e--pointer-squares):not(.e--pointer-dot) .elementor-item.elementor-item-active:before,
		.elementor-nav-menu--main:not(.e--pointer-framed):not(.e--pointer-squares):not(.e--pointer-dot) .elementor-item.elementor-item-active:after,
		.elementor-nav-menu--main:not(.e--pointer-framed):not(.e--pointer-squares):not(.e--pointer-dot) .elementor-item:before,
		.elementor-nav-menu--main:not(.e--pointer-framed):not(.e--pointer-squares):not(.e--pointer-dot) .elementor-item:after,
		.elementor-nav-menu--popup.e--pointer-dot .elementor-item.elementor-item-active:before,
		.elementor-nav-menu--popup.e--pointer-dot .elementor-item:hover:before,
		.elementor-nav-menu--main.elementor-nav-menu--layout-vertical-absolute .vertical-heading,
		.single-portfolio-summary .pbr-social-share a:hover,
		.elementor-teams-wrapper .team-icon-socials a:hover,
		.elementor-timeline-carousel .timeline-carosuel-item .timeline-number,
		.elementor-timeline-carousel .timeline-carosuel-item:hover .timeline-number,
		.elementor-timeline-carousel .timeline-carosuel-item.timeline-item-activate .timeline-number,
		.timeline-item .timeline-number,
		.elementor-timeline-view-vertical .timeline-number,
		.rooms-pagination .page-numbers li .page-numbers:hover,
		.rooms-pagination .page-numbers li .page-numbers.current,
		.rooms-pagination .page-numbers li .page-numbers.prev:hover,
		.rooms-pagination .page-numbers li .page-numbers.next:hover,
		.hb_related_other_room>.title:after,
		.hb_single_room .hb_single_room_details .hb_single_room_tabs>li a.active:after {
			background-color: #cf9d6c;
		}

		.button-primary,
		input[type="reset"],
		input.secondary[type="button"],
		input.secondary[type="reset"],
		input.secondary[type="submit"],
		input[type="button"],
		input[type="submit"],
		button[type="submit"],
		.more-link,
		.page .edit-link a.post-edit-link,
		.scrollup,
		.comment-form .form-submit input[type="submit"],
		.elementor-wpcf7-button-primary input[type="button"][type="submit"],
		.elementor-wpcf7-button-primary input[type="submit"],
		.elementor-wpcf7-button-primary button[type="submit"],
		.mailchimp-button-primary button,
		.mailchimp-button-primary button[type="submit"],
		#hotel-booking-cart .hb_button.hb_checkout,
		#hotel-booking-cart button[type=button],
		#hotel-booking-cart button[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout,
		#hotel-booking-payment button[type=button],
		#hotel-booking-payment button[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input[type=submit],
		.hb_button,
		#hotel-booking-results form .hb_button.hb_checkout,
		#hotel-booking-results form button.hb_add_to_cart,
		#hotel-booking-results form form button[type=submit],
		.button-secondary,
		.secondary-button .search-submit,
		.elementor-wpcf7-button-secondary input[type="button"][type="submit"],
		.elementor-wpcf7-button-secondary input[type="submit"],
		.elementor-wpcf7-button-secondary button[type="submit"],
		.mailchimp-button-secondary button,
		.mailchimp-button-secondary button[type="submit"],
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="week"]:focus,
		input[type="time"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="color"]:focus,
		textarea:focus,
		.site-header-account .account-dropdown .account-wrap,
		#secondary .widget_product_categories ul.product-categories,
		.elementor-widget .tagcloud a:hover,
		.elementor-widget .tagcloud a:focus,
		.elementor-widget.widget_tag_cloud a:hover,
		.elementor-widget.widget_tag_cloud a:focus,
		.widget .tagcloud a:hover,
		.widget .tagcloud a:focus,
		.widget.widget_tag_cloud a:hover,
		.widget.widget_tag_cloud a:focus,
		.wp_widget_tag_cloud a:hover:after,
		.wp_widget_tag_cloud a:focus:after,
		.wp_widget_tag_cloud a:hover,
		.wp_widget_tag_cloud a:focus,
		.button-default:hover,
		.button-dark:hover,
		.elementor-element .elementor-button-dark .elementor-button:hover,
		.button-dark:active,
		.elementor-element .elementor-button-dark .elementor-button:active,
		.button-dark:focus,
		.elementor-element .elementor-button-dark .elementor-button:focus,
		.button-light:hover,
		.elementor-element .elementor-button-light .elementor-button:hover,
		.button-light:active,
		.elementor-element .elementor-button-light .elementor-button:active,
		.button-light:focus,
		.elementor-element .elementor-button-light .elementor-button:focus,
		.elementor-element .elementor-button-primary .elementor-button,
		.button-outline-primary,
		.elementor-wpcf7-button-outline_primary input[type="button"],
		.elementor-wpcf7-button-outline_primary input[type="submit"],
		.elementor-wpcf7-button-outline_primary button[type="submit"],
		.mailchimp-button-outline_primary button,
		.mailchimp-button-outline_primary button[type="submit"],
		.elementor-element .elementor-button-outline_primary .elementor-button,
		.button-outline-primary:hover,
		.elementor-wpcf7-button-outline_primary input:hover[type="button"],
		.elementor-wpcf7-button-outline_primary input:hover[type="submit"],
		.elementor-wpcf7-button-outline_primary button:hover[type="submit"],
		.mailchimp-button-outline_primary button:hover,
		.button-outline-primary:active,
		.elementor-wpcf7-button-outline_primary input:active[type="button"],
		.elementor-wpcf7-button-outline_primary input:active[type="submit"],
		.elementor-wpcf7-button-outline_primary button:active[type="submit"],
		.mailchimp-button-outline_primary button:active,
		.button-outline-primary.active,
		.elementor-wpcf7-button-outline_primary input.active[type="button"],
		.elementor-wpcf7-button-outline_primary input.active[type="submit"],
		.elementor-wpcf7-button-outline_primary button.active[type="submit"],
		.mailchimp-button-outline_primary button.active,
		.show>.button-outline-primary.dropdown-toggle,
		.elementor-wpcf7-button-outline_primary .show>input.dropdown-toggle[type="button"],
		.elementor-wpcf7-button-outline_primary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-outline_primary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-outline_primary .show>button.dropdown-toggle,
		.elementor-element .elementor-button-outline_primary .elementor-button:hover,
		.elementor-element .elementor-button-outline_primary .elementor-button:active,
		.elementor-element .elementor-button-outline_primary .elementor-button:focus,
		.b-primary,
		.elementor-widget-icon-box.elementor-view-framed:hover .elementor-icon,
		.elementor-widget-icon.elementor-view-default .elementor-icon,
		.elementor-widget-icon.elementor-view-framed .elementor-icon,
		.elementor-widget-opal-image-gallery .elementor-galerry__filter.elementor-active:before,
		.e--pointer-framed .elementor-item.elementor-item-active:before,
		.e--pointer-framed .elementor-item.elementor-item-active:after,
		.e--pointer-framed .elementor-item:before,
		.e--pointer-framed .elementor-item:after,
		.elementor-nav-menu--main>.elementor-nav-menu,
		.elementor-nav-menu--main .elementor-nav-menu ul,
		.mega-menu-item,
		ul.elementor-price-table__features-list,
		.elementor-search-form__container:not(.elementor-search-form--full-screen),
		.elementor-search-form--skin-full_screen .elementor-search-form__toggle:hover,
		.elementor-timeline-carousel .timeline-carosuel-item:hover .timeline-number,
		.elementor-timeline-carousel .timeline-carosuel-item.timeline-item-activate .timeline-number,
		.hb_single_room .hb_room_gallery .camera_thumbs .camera_thumbs_cont ul li.cameracurrent:before {
			border-color: #cf9d6c;
		}

		.site-header-account>a:before,
		.elementor-nav-menu--layout-horizontal .elementor-nav-menu li.menu-item-has-children:before,
		.elementor-nav-menu--layout-horizontal .elementor-nav-menu li.has-mega-menu:before {
			border-bottom-color: #cf9d6c;
		}

		.btn-link:focus,
		.elementor-element .elementor-button-link .elementor-button:focus,
		.btn-link:hover,
		.elementor-element .elementor-button-link .elementor-button:hover,
		.button-link:focus,
		.button-link:hover,
		a:hover,
		a:active,
		.cat-links a:hover,
		.entry-meta .cat-links a:hover,
		.widget_search button[type="submit"]:hover,
		.widget_search button[type="submit"]:focus {
			color: #c38546;
		}

		.button-primary:hover,
		input:hover[type="reset"],
		input:hover[type="button"],
		input:hover[type="submit"],
		button:hover[type="submit"],
		.more-link:hover,
		.page .edit-link a.post-edit-link:hover,
		.scrollup:hover,
		.comment-form .form-submit input:hover[type="submit"],
		.elementor-wpcf7-button-primary input:hover[type="submit"],
		.elementor-wpcf7-button-primary button:hover[type="submit"],
		.mailchimp-button-primary button:hover,
		#hotel-booking-cart .hb_button.hb_checkout:hover,
		#hotel-booking-cart button:hover[type=button],
		#hotel-booking-cart button:hover[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout:hover,
		#hotel-booking-payment button:hover[type=button],
		#hotel-booking-payment button:hover[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input:hover[type=submit],
		.hb_button:hover,
		#hotel-booking-results form .hb_button.hb_checkout:hover,
		#hotel-booking-results form button.hb_add_to_cart:hover,
		#hotel-booking-results form form button:hover[type=submit],
		.button-primary:active,
		input:active[type="reset"],
		input:active[type="button"],
		input:active[type="submit"],
		button:active[type="submit"],
		.more-link:active,
		.page .edit-link a.post-edit-link:active,
		.scrollup:active,
		.comment-form .form-submit input:active[type="submit"],
		.elementor-wpcf7-button-primary input:active[type="submit"],
		.elementor-wpcf7-button-primary button:active[type="submit"],
		.mailchimp-button-primary button:active,
		#hotel-booking-cart .hb_button.hb_checkout:active,
		#hotel-booking-cart button:active[type=button],
		#hotel-booking-cart button:active[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout:active,
		#hotel-booking-payment button:active[type=button],
		#hotel-booking-payment button:active[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input:active[type=submit],
		.hb_button:active,
		#hotel-booking-results form .hb_button.hb_checkout:active,
		#hotel-booking-results form button.hb_add_to_cart:active,
		#hotel-booking-results form form button:active[type=submit],
		.button-primary.active,
		input.active[type="reset"],
		input.active[type="button"],
		input.active[type="submit"],
		button.active[type="submit"],
		.active.more-link,
		.page .edit-link a.active.post-edit-link,
		.active.scrollup,
		.comment-form .form-submit input.active[type="submit"],
		.elementor-wpcf7-button-primary input.active[type="submit"],
		.elementor-wpcf7-button-primary button.active[type="submit"],
		.mailchimp-button-primary button.active,
		#hotel-booking-cart .active.hb_button.hb_checkout,
		#hotel-booking-cart button.active[type=button],
		#hotel-booking-cart button.active[type=submit],
		#hotel-booking-payment .active.hb_button.hb_checkout,
		#hotel-booking-payment button.active[type=button],
		#hotel-booking-payment button.active[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input.active[type=submit],
		.active.hb_button,
		#hotel-booking-results form .active.hb_button.hb_checkout,
		#hotel-booking-results form button.active.hb_add_to_cart,
		#hotel-booking-results form form button.active[type=submit],
		.show>.button-primary.dropdown-toggle,
		.show>input.dropdown-toggle[type="reset"],
		.show>input.dropdown-toggle[type="button"],
		.show>input.dropdown-toggle[type="submit"],
		.show>button.dropdown-toggle[type="submit"],
		.show>.dropdown-toggle.more-link,
		.page .edit-link .show>a.dropdown-toggle.post-edit-link,
		.show>.dropdown-toggle.scrollup,
		.comment-form .form-submit .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-primary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-primary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-primary .show>button.dropdown-toggle,
		#hotel-booking-cart .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-cart .show>button.dropdown-toggle[type=button],
		#hotel-booking-cart .show>button.dropdown-toggle[type=submit],
		#hotel-booking-payment .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-payment .show>button.dropdown-toggle[type=button],
		#hotel-booking-payment .show>button.dropdown-toggle[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit .show>input.dropdown-toggle[type=submit],
		.show>.dropdown-toggle.hb_button,
		#hotel-booking-results form .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-results form .show>button.dropdown-toggle.hb_add_to_cart,
		#hotel-booking-results form form .show>button.dropdown-toggle[type=submit],
		.elementor-element .elementor-button-primary .elementor-button:hover,
		.elementor-element .elementor-button-primary .elementor-button:active,
		.elementor-element .elementor-button-primary .elementor-button:focus {
			background-color: #c38546;
		}

		.button-primary:active,
		input:active[type="reset"],
		input:active[type="button"],
		input:active[type="submit"],
		button:active[type="submit"],
		.more-link:active,
		.page .edit-link a.post-edit-link:active,
		.scrollup:active,
		.comment-form .form-submit input:active[type="submit"],
		.elementor-wpcf7-button-primary input:active[type="submit"],
		.elementor-wpcf7-button-primary button:active[type="submit"],
		.mailchimp-button-primary button:active,
		#hotel-booking-cart .hb_button.hb_checkout:active,
		#hotel-booking-cart button:active[type=button],
		#hotel-booking-cart button:active[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout:active,
		#hotel-booking-payment button:active[type=button],
		#hotel-booking-payment button:active[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input:active[type=submit],
		.hb_button:active,
		#hotel-booking-results form .hb_button.hb_checkout:active,
		#hotel-booking-results form button.hb_add_to_cart:active,
		#hotel-booking-results form form button:active[type=submit],
		.button-primary.active,
		input.active[type="reset"],
		input.active[type="button"],
		input.active[type="submit"],
		button.active[type="submit"],
		.active.more-link,
		.page .edit-link a.active.post-edit-link,
		.active.scrollup,
		.comment-form .form-submit input.active[type="submit"],
		.elementor-wpcf7-button-primary input.active[type="submit"],
		.elementor-wpcf7-button-primary button.active[type="submit"],
		.mailchimp-button-primary button.active,
		#hotel-booking-cart .active.hb_button.hb_checkout,
		#hotel-booking-cart button.active[type=button],
		#hotel-booking-cart button.active[type=submit],
		#hotel-booking-payment .active.hb_button.hb_checkout,
		#hotel-booking-payment button.active[type=button],
		#hotel-booking-payment button.active[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input.active[type=submit],
		.active.hb_button,
		#hotel-booking-results form .active.hb_button.hb_checkout,
		#hotel-booking-results form button.active.hb_add_to_cart,
		#hotel-booking-results form form button.active[type=submit],
		.show>.button-primary.dropdown-toggle,
		.show>input.dropdown-toggle[type="reset"],
		.show>input.dropdown-toggle[type="button"],
		.show>input.dropdown-toggle[type="submit"],
		.show>button.dropdown-toggle[type="submit"],
		.show>.dropdown-toggle.more-link,
		.page .edit-link .show>a.dropdown-toggle.post-edit-link,
		.show>.dropdown-toggle.scrollup,
		.comment-form .form-submit .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-primary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-primary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-primary .show>button.dropdown-toggle,
		#hotel-booking-cart .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-cart .show>button.dropdown-toggle[type=button],
		#hotel-booking-cart .show>button.dropdown-toggle[type=submit],
		#hotel-booking-payment .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-payment .show>button.dropdown-toggle[type=button],
		#hotel-booking-payment .show>button.dropdown-toggle[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit .show>input.dropdown-toggle[type=submit],
		.show>.dropdown-toggle.hb_button,
		#hotel-booking-results form .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-results form .show>button.dropdown-toggle.hb_add_to_cart,
		#hotel-booking-results form form .show>button.dropdown-toggle[type=submit],
		.button-secondary:active,
		.secondary-button .search-submit:active,
		.elementor-wpcf7-button-secondary input:active[type="submit"],
		.elementor-wpcf7-button-secondary button:active[type="submit"],
		.mailchimp-button-secondary button:active,
		.button-secondary.active,
		.secondary-button .active.search-submit,
		.elementor-wpcf7-button-secondary input.active[type="submit"],
		.elementor-wpcf7-button-secondary button.active[type="submit"],
		.mailchimp-button-secondary button.active,
		.show>.button-secondary.dropdown-toggle,
		.secondary-button .show>.dropdown-toggle.search-submit,
		.elementor-wpcf7-button-secondary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-secondary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-secondary .show>button.dropdown-toggle,
		.button-primary:hover,
		input:hover[type="reset"],
		input:hover[type="button"],
		input:hover[type="submit"],
		button:hover[type="submit"],
		.more-link:hover,
		.page .edit-link a.post-edit-link:hover,
		.scrollup:hover,
		.comment-form .form-submit input:hover[type="submit"],
		.elementor-wpcf7-button-primary input:hover[type="submit"],
		.elementor-wpcf7-button-primary button:hover[type="submit"],
		.mailchimp-button-primary button:hover,
		#hotel-booking-cart .hb_button.hb_checkout:hover,
		#hotel-booking-cart button:hover[type=button],
		#hotel-booking-cart button:hover[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout:hover,
		#hotel-booking-payment button:hover[type=button],
		#hotel-booking-payment button:hover[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input:hover[type=submit],
		.hb_button:hover,
		#hotel-booking-results form .hb_button.hb_checkout:hover,
		#hotel-booking-results form button.hb_add_to_cart:hover,
		#hotel-booking-results form form button:hover[type=submit],
		.elementor-element .elementor-button-primary .elementor-button:hover,
		.elementor-element .elementor-button-primary .elementor-button:active,
		.elementor-element .elementor-button-primary .elementor-button:focus {
			border-color: #c38546;
		}

		.button-outline-secondary,
		.elementor-wpcf7-button-outline_secondary input[type="button"][type="submit"],
		.elementor-wpcf7-button-outline_secondary input[type="submit"],
		.elementor-wpcf7-button-outline_secondary button[type="submit"],
		.mailchimp-button-outline_secondary button,
		.mailchimp-button-outline_secondary button[type="submit"],
		.elementor-element .elementor-button-outline_secondary .elementor-button,
		.c-secondary,
		.contactform-content button.mfp-close {
			color: #423a36;
		}

		.f-secondary {
			fill: #423a36;
		}

		.navigation-top,
		.button-secondary,
		.secondary-button .search-submit,
		.elementor-wpcf7-button-secondary input[type="button"][type="submit"],
		.elementor-wpcf7-button-secondary input[type="submit"],
		.elementor-wpcf7-button-secondary button[type="submit"],
		.mailchimp-button-secondary button,
		.mailchimp-button-secondary button[type="submit"],
		.elementor-button-secondary button[type="submit"],
		.elementor-button-secondary input[type="button"],
		.elementor-button-secondary input[type="submit"],
		.elementor-element .elementor-button-secondary .elementor-button,
		.hb_button_secondary,
		.button-outline-secondary:hover,
		.elementor-wpcf7-button-outline_secondary input:hover[type="submit"],
		.elementor-wpcf7-button-outline_secondary button:hover[type="submit"],
		.mailchimp-button-outline_secondary button:hover,
		.button-outline-secondary:active,
		.elementor-wpcf7-button-outline_secondary input:active[type="submit"],
		.elementor-wpcf7-button-outline_secondary button:active[type="submit"],
		.mailchimp-button-outline_secondary button:active,
		.button-outline-secondary.active,
		.elementor-wpcf7-button-outline_secondary input.active[type="submit"],
		.elementor-wpcf7-button-outline_secondary button.active[type="submit"],
		.mailchimp-button-outline_secondary button.active,
		.show>.button-outline-secondary.dropdown-toggle,
		.elementor-wpcf7-button-outline_secondary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-outline_secondary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-outline_secondary .show>button.dropdown-toggle,
		.elementor-element .elementor-button-outline_secondary .elementor-button:hover,
		.elementor-element .elementor-button-outline_secondary .elementor-button:active,
		.elementor-element .elementor-button-outline_secondary .elementor-button:focus,
		.bg-secondary,
		#secondary .elementor-widget-wp-widget-categories a:before,
		.elementor-flip-box__back,
		.elementor-teams-wrapper .team-icon-socials a {
			background-color: #423a36;
		}

		.form-control:focus,
		.button-secondary,
		.secondary-button .search-submit,
		.elementor-wpcf7-button-secondary input[type="button"][type="submit"],
		.elementor-wpcf7-button-secondary input[type="submit"],
		.elementor-wpcf7-button-secondary button[type="submit"],
		.mailchimp-button-secondary button,
		.mailchimp-button-secondary button[type="submit"],
		.elementor-button-secondary button[type="submit"],
		.elementor-button-secondary input[type="button"],
		.elementor-button-secondary input[type="submit"],
		.elementor-element .elementor-button-secondary .elementor-button,
		.hb_button_secondary,
		.button-outline-secondary,
		.elementor-wpcf7-button-outline_secondary input[type="button"][type="submit"],
		.elementor-wpcf7-button-outline_secondary input[type="submit"],
		.elementor-wpcf7-button-outline_secondary button[type="submit"],
		.mailchimp-button-outline_secondary button,
		.mailchimp-button-outline_secondary button[type="submit"],
		.elementor-element .elementor-button-outline_secondary .elementor-button,
		.button-outline-secondary:hover,
		.elementor-wpcf7-button-outline_secondary input:hover[type="submit"],
		.elementor-wpcf7-button-outline_secondary button:hover[type="submit"],
		.button-outline-secondary:active,
		.elementor-wpcf7-button-outline_secondary input:active[type="submit"],
		.elementor-wpcf7-button-outline_secondary button:active[type="submit"],
		.button-outline-secondary.active,
		.elementor-wpcf7-button-outline_secondary input.active[type="submit"],
		.elementor-wpcf7-button-outline_secondary button.active[type="submit"],
		.show>.button-outline-secondary.dropdown-toggle,
		.elementor-wpcf7-button-outline_secondary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-outline_secondary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-outline_secondary .show>button.dropdown-toggle,
		.elementor-element .elementor-button-outline_secondary .elementor-button:hover,
		.elementor-element .elementor-button-outline_secondary .elementor-button:active,
		.elementor-element .elementor-button-outline_secondary .elementor-button:focus,
		.b-secondary {
			border-color: #423a36;
		}

		.button-secondary:hover,
		.secondary-button .search-submit:hover,
		.elementor-wpcf7-button-secondary input:hover[type="submit"],
		.elementor-wpcf7-button-secondary button:hover[type="submit"],
		.mailchimp-button-secondary button:hover,
		.button-secondary:active,
		.secondary-button .search-submit:active,
		.elementor-wpcf7-button-secondary input:active[type="submit"],
		.elementor-wpcf7-button-secondary button:active[type="submit"],
		.mailchimp-button-secondary button:active,
		.button-secondary.active,
		.secondary-button .active.search-submit,
		.elementor-wpcf7-button-secondary input.active[type="submit"],
		.elementor-wpcf7-button-secondary button.active[type="submit"],
		.mailchimp-button-secondary button.active,
		.show>.button-secondary.dropdown-toggle,
		.secondary-button .show>.dropdown-toggle.search-submit,
		.elementor-wpcf7-button-secondary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-secondary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-secondary .show>button.dropdown-toggle,
		.elementor-button-secondary button[type="submit"]:hover,
		.elementor-button-secondary button[type="submit"]:active,
		.elementor-button-secondary button[type="submit"]:focus,
		.elementor-button-secondary input[type="button"]:hover,
		.elementor-button-secondary input[type="button"]:active,
		.elementor-button-secondary input[type="button"]:focus,
		.elementor-button-secondary input[type="submit"]:hover,
		.elementor-button-secondary input[type="submit"]:active,
		.elementor-button-secondary input[type="submit"]:focus,
		.elementor-element .elementor-button-secondary .elementor-button:hover,
		.elementor-element .elementor-button-secondary .elementor-button:active,
		.elementor-element .elementor-button-secondary .elementor-button:focus {
			background-color: #272320;
		}

		.button-secondary:hover,
		.secondary-button .search-submit:hover,
		.elementor-wpcf7-button-secondary input:hover[type="submit"],
		.elementor-wpcf7-button-secondary button:hover[type="submit"],
		.mailchimp-button-secondary button:hover,
		.button-secondary:active,
		.secondary-button .search-submit:active,
		.elementor-wpcf7-button-secondary input:active[type="submit"],
		.elementor-wpcf7-button-secondary button:active[type="submit"],
		.mailchimp-button-secondary button:active,
		.button-secondary.active,
		.secondary-button .active.search-submit,
		.elementor-wpcf7-button-secondary input.active[type="submit"],
		.elementor-wpcf7-button-secondary button.active[type="submit"],
		.mailchimp-button-secondary button.active,
		.show>.button-secondary.dropdown-toggle,
		.secondary-button .show>.dropdown-toggle.search-submit,
		.elementor-wpcf7-button-secondary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-secondary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-secondary .show>button.dropdown-toggle,
		.elementor-button-secondary button[type="submit"]:hover,
		.elementor-button-secondary button[type="submit"]:active,
		.elementor-button-secondary button[type="submit"]:focus,
		.elementor-button-secondary input[type="button"]:hover,
		.elementor-button-secondary input[type="button"]:active,
		.elementor-button-secondary input[type="button"]:focus,
		.elementor-button-secondary input[type="submit"]:hover,
		.elementor-button-secondary input[type="submit"]:active,
		.elementor-button-secondary input[type="submit"]:focus,
		.elementor-element .elementor-button-secondary .elementor-button:hover,
		.elementor-element .elementor-button-secondary .elementor-button:active,
		.elementor-element .elementor-button-secondary .elementor-button:focus {
			border-color: #272320;
		}

		.row,
		body.opal-default-content-layout-2cr #content .wrap,
		body.opal-content-layout-2cl #content .wrap,
		body.opal-content-layout-2cr #content .wrap,
		[data-opal-columns],
		.opal-archive-style-4.blog .site-main,
		.opal-archive-style-4.archive .site-main,
		.site-footer .widget-area,
		.comment-form,
		.widget .gallery,
		.elementor-element .gallery,
		.entry-gallery .gallery,
		.single .gallery,
		[data-elementor-columns],
		.single-portfolio-summary .single-portfolio-summary-inner,
		.wp-hotel-booking-search-rooms .hb-form-table {
			margin-right: -15px;
			margin-left: -15px;
		}

		.col-1,
		.col-2,
		[data-elementor-columns-mobile="6"] .column-item,
		.col-3,
		[data-elementor-columns-mobile="4"] .column-item,
		.wp-hotel-booking-search-rooms .hb-form-field,
		.col-4,
		[data-elementor-columns-mobile="3"] .column-item,
		.col-5,
		.col-6,
		[data-elementor-columns-mobile="2"] .column-item,
		.col-7,
		.col-8,
		.col-9,
		.col-10,
		.col-11,
		.col-12,
		.related-posts .column-item,
		.opal-default-content-layout-2cr .related-posts .column-item,
		.opal-content-layout-2cr .related-posts .column-item,
		.opal-content-layout-2cl .related-posts .column-item,
		.site-footer .widget-area .widget-column,
		.comment-form>p,
		.comment-form>.comment-form-rating,
		.widget .gallery-columns-1 .gallery-item,
		.elementor-element .gallery-columns-1 .gallery-item,
		.entry-gallery .gallery-columns-1 .gallery-item,
		.single .gallery-columns-1 .gallery-item,
		[data-elementor-columns-mobile="1"] .column-item,
		.single-portfolio-summary .single-portfolio-summary-inner .single-portfolio-summary-meta-title,
		.single-portfolio-summary .single-portfolio-summary-meta,
		.single-portfolio-summary .single-portfolio-summary-content,
		.single-portfolio-summary.col-lg-5 .single-portfolio-summary-meta,
		.single-portfolio-summary.col-lg-5 .single-portfolio-summary-content,
		.col,
		body #secondary,
		.col-auto,
		.col-sm-1,
		[data-opal-columns="12"] .column-item,
		.col-sm-2,
		[data-opal-columns="6"] .column-item,
		.col-sm-3,
		[data-opal-columns="4"] .column-item,
		.col-sm-4,
		[data-opal-columns="3"] .column-item,
		.widget .gallery-columns-6 .gallery-item,
		.elementor-element .gallery-columns-6 .gallery-item,
		.entry-gallery .gallery-columns-6 .gallery-item,
		.single .gallery-columns-6 .gallery-item,
		.col-sm-5,
		.col-sm-6,
		[data-opal-columns="2"] .column-item,
		.opal-archive-style-2 .column-item,
		.opal-archive-style-5 .column-item,
		.opal-archive-style-4 .column-item,
		.opal-archive-style-3 .column-item,
		.comment-form .comment-form-email,
		.comment-form .comment-form-author,
		.widget .gallery-columns-2 .gallery-item,
		.elementor-element .gallery-columns-2 .gallery-item,
		.entry-gallery .gallery-columns-2 .gallery-item,
		.single .gallery-columns-2 .gallery-item,
		.widget .gallery-columns-3 .gallery-item,
		.elementor-element .gallery-columns-3 .gallery-item,
		.entry-gallery .gallery-columns-3 .gallery-item,
		.single .gallery-columns-3 .gallery-item,
		.widget .gallery-columns-4 .gallery-item,
		.elementor-element .gallery-columns-4 .gallery-item,
		.entry-gallery .gallery-columns-4 .gallery-item,
		.single .gallery-columns-4 .gallery-item,
		.elementor-timeline-view-vertical .timeline-thumbnail,
		.elementor-timeline-view-vertical .timeline-content,
		.col-sm-7,
		.col-sm-8,
		.col-sm-9,
		.col-sm-10,
		.col-sm-11,
		.col-sm-12,
		[data-opal-columns="1"] .column-item,
		.opal-archive-style-2.opal-content-layout-2cr .column-item,
		.opal-archive-style-5.opal-content-layout-2cr .column-item,
		.opal-archive-style-4.opal-content-layout-2cr .column-item,
		.opal-archive-style-3.opal-content-layout-2cr .column-item,
		.comment-form .comment-form-url,
		.elementor-widget-opal-image-hotspots .opal-image-hotspots-accordion,
		.elementor-widget-opal-image-hotspots .opal-image-hotspots-accordion+.opal-image-hotspots-container,
		.col-sm,
		.col-sm-auto,
		.col-md-1,
		.col-md-2,
		[data-elementor-columns-tablet="6"] .column-item,
		.col-md-3,
		[data-elementor-columns-tablet="4"] .column-item,
		.col-md-4,
		[data-elementor-columns-tablet="3"] .column-item,
		.col-md-5,
		.col-md-6,
		[data-elementor-columns-tablet="2"] .column-item,
		.col-md-7,
		.col-md-8,
		.col-md-9,
		.col-md-10,
		.col-md-11,
		.col-md-12,
		[data-elementor-columns-tablet="1"] .column-item,
		.col-md,
		.col-md-auto,
		.col-lg-1,
		.col-lg-2,
		[data-elementor-columns="6"] .column-item,
		.col-lg-3,
		[data-elementor-columns="4"] .column-item,
		.col-lg-4,
		[data-elementor-columns="3"] .column-item,
		.col-lg-5,
		.col-lg-6,
		[data-elementor-columns="2"] .column-item,
		.col-lg-7,
		.col-lg-8,
		.col-lg-9,
		.col-lg-10,
		.col-lg-11,
		.col-lg-12,
		[data-elementor-columns="1"] .column-item,
		.col-lg,
		.col-lg-auto,
		.col-xl-1,
		.col-xl-2,
		.col-xl-3,
		.col-xl-4,
		.col-xl-5,
		.col-xl-6,
		.col-xl-7,
		.col-xl-8,
		.col-xl-9,
		.col-xl-10,
		.col-xl-11,
		.col-xl-12,
		.col-xl,
		.col-xl-auto {
			padding-right: 15px;
			padding-left: 15px;
		}

		.container,
		#content,
		ul.elementor-nav-menu--dropdown.mega-containerwidth>li.mega-menu-item>.elementor {
			padding-right: 15px;
			padding-left: 15px;
		}

		@media (min-width:576px) {

			.container,
			#content,
			ul.elementor-nav-menu--dropdown.mega-containerwidth>li.mega-menu-item>.elementor {
				max-width: 540px;
			}
		}

		@media (min-width:768px) {

			.container,
			#content,
			ul.elementor-nav-menu--dropdown.mega-containerwidth>li.mega-menu-item>.elementor {
				max-width: 720px;
			}
		}

		@media (min-width:992px) {

			.container,
			#content,
			ul.elementor-nav-menu--dropdown.mega-containerwidth>li.mega-menu-item>.elementor {
				max-width: 960px;
			}
		}

		@media (min-width:1200px) {

			.container,
			#content,
			ul.elementor-nav-menu--dropdown.mega-containerwidth>li.mega-menu-item>.elementor {
				max-width: 1140px;
			}
		}

		.elementor-widget-heading .elementor-heading-title {
			font-family: "Quicksand", -apple-system, BlinkMacSystemFont, Sans-serif;
		}

		.elementor-widget-heading .elementor-heading-title,
		.elementor-text-editor b {
			font-weight: 400;
		}

		.elementor-widget-heading .elementor-heading-title {
			font-family: "Quicksand", -apple-system, BlinkMacSystemFont, Sans-serif;
		}

		.elementor-widget-heading .elementor-heading-title,
		.elementor-text-editor b {
			font-weight: 400;
		}

		.typo-heading,
		.button-dark,
		.elementor-element .elementor-button-dark .elementor-button,
		.button-light,
		.elementor-element .elementor-button-light .elementor-button,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.lexus-h1,
		.lexus-h2,
		.lexus-h3,
		.lexus-h4,
		.lexus-h5,
		.lexus-h6,
		blockquote,
		.single .navigation .nav-link a,
		.related-posts .related-heading,
		.author-wrapper .author-name,
		.error404 .error-404 .error-title,
		.comments-title,
		.comment-respond .comment-reply-title,
		.widget_recent_entries li a,
		#secondary .elementor-widget-container h5:first-of-type,
		.contactform-content .form-title,
		.elementor-widget-heading .sub-title,
		.mc4wp-form-fields button,
		.elementor-testimonial-content,
		.elementor-widget-opal-testimonials .elementor-testimonial-name,
		.elementor-widget-opal-testimonials .elementor-testimonial-job,
		.rooms .hb_room .price,
		.rooms .hb_room .price span.price_value,
		.hb_package_title label,
		.hb_single_room_tab_details #comments h2,
		.hb_related_other_room>.title {
			font-family: "Quicksand", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			font-weight: 400;
		}

		@media screen and (min-width:1200px) {

			.container,
			#content,
			ul.elementor-nav-menu--dropdown.mega-containerwidth>li.mega-menu-item>.elementor,
			.elementor-section.elementor-section-boxed>div.elementor-container {
				max-width: 1320px;
			}
		}

		@media screen and (min-width:768px) {

			.container,
			#content,
			.container-fluid,
			.elementor-section.elementor-section-boxed:not(.elementor-inner-section)>.elementor-container,
			ul.elementor-nav-menu--dropdown.mega-containerwidth>li.mega-menu-item>.elementor {
				padding-left: 15px;
				padding-right: 15px;
			}
		}

		@media screen and (min-width:1800px) {
			body.opal-layout-boxed {
				margin: 0px auto;
				width: 1800px;
			}

			body.opal-layout-boxed .elementor-section.elementor-section-stretched {
				max-width: 1800px;
			}
		}

		.page-title-bar {
			background-color: #c3c9cb;
			background-image: url(https://anvuihomestay.com/wp-content/uploads/2021/04/bg-header.jpg);
			background-repeat: no-repeat;
			background-position: center center;
			;
		}

		.breadcrumb,
		.breadcrumb span,
		.breadcrumb * {
			color: #ffffff;
			;
		}

		.button-primary,
		input[type="reset"],
		input.secondary[type="button"],
		input.secondary[type="reset"],
		input.secondary[type="submit"],
		input[type="button"],
		input[type="submit"],
		button[type="submit"],
		.more-link,
		.page .edit-link a.post-edit-link,
		.scrollup,
		.comment-form .form-submit input[type="submit"],
		.elementor-wpcf7-button-primary input[type="button"][type="submit"],
		.elementor-wpcf7-button-primary input[type="submit"],
		.elementor-wpcf7-button-primary button[type="submit"],
		.mailchimp-button-primary button,
		.mailchimp-button-primary button[type="submit"],
		#hotel-booking-cart .hb_button.hb_checkout,
		#hotel-booking-cart button[type=button],
		#hotel-booking-cart button[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout,
		#hotel-booking-payment button[type=button],
		#hotel-booking-payment button[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input[type=submit],
		.hb_button,
		#hotel-booking-results form .hb_button.hb_checkout,
		#hotel-booking-results form button.hb_add_to_cart,
		#hotel-booking-results form form button[type=submit],
		.button-default:hover,
		.button-dark:hover,
		.elementor-element .elementor-button-dark .elementor-button:hover,
		.button-dark:active,
		.elementor-element .elementor-button-dark .elementor-button:active,
		.button-dark:focus,
		.elementor-element .elementor-button-dark .elementor-button:focus,
		.button-light:hover,
		.elementor-element .elementor-button-light .elementor-button:hover,
		.button-light:active,
		.elementor-element .elementor-button-light .elementor-button:active,
		.button-light:focus,
		.elementor-element .elementor-button-light .elementor-button:focus,
		.elementor-element .elementor-button-primary .elementor-button {
			background-color: #cf9d6c;
			border-color: #cf9d6c;
			color: #fff;
			border-radius: 5px;
		}

		.button-primary:hover,
		input:hover[type="reset"],
		input:hover[type="button"],
		input:hover[type="submit"],
		button:hover[type="submit"],
		.more-link:hover,
		.page .edit-link a.post-edit-link:hover,
		.scrollup:hover,
		.comment-form .form-submit input:hover[type="submit"],
		.elementor-wpcf7-button-primary input:hover[type="submit"],
		.elementor-wpcf7-button-primary button:hover[type="submit"],
		.mailchimp-button-primary button:hover,
		#hotel-booking-cart .hb_button.hb_checkout:hover,
		#hotel-booking-cart button:hover[type=button],
		#hotel-booking-cart button:hover[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout:hover,
		#hotel-booking-payment button:hover[type=button],
		#hotel-booking-payment button:hover[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input:hover[type=submit],
		.hb_button:hover,
		#hotel-booking-results form .hb_button.hb_checkout:hover,
		#hotel-booking-results form button.hb_add_to_cart:hover,
		#hotel-booking-results form form button:hover[type=submit],
		.button-primary:active,
		input:active[type="reset"],
		input:active[type="button"],
		input:active[type="submit"],
		button:active[type="submit"],
		.more-link:active,
		.page .edit-link a.post-edit-link:active,
		.scrollup:active,
		.comment-form .form-submit input:active[type="submit"],
		.elementor-wpcf7-button-primary input:active[type="submit"],
		.elementor-wpcf7-button-primary button:active[type="submit"],
		.mailchimp-button-primary button:active,
		#hotel-booking-cart .hb_button.hb_checkout:active,
		#hotel-booking-cart button:active[type=button],
		#hotel-booking-cart button:active[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout:active,
		#hotel-booking-payment button:active[type=button],
		#hotel-booking-payment button:active[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input:active[type=submit],
		.hb_button:active,
		#hotel-booking-results form .hb_button.hb_checkout:active,
		#hotel-booking-results form button.hb_add_to_cart:active,
		#hotel-booking-results form form button:active[type=submit],
		.button-primary.active,
		input.active[type="reset"],
		input.active[type="button"],
		input.active[type="submit"],
		button.active[type="submit"],
		.active.more-link,
		.page .edit-link a.active.post-edit-link,
		.active.scrollup,
		.comment-form .form-submit input.active[type="submit"],
		.elementor-wpcf7-button-primary input.active[type="submit"],
		.elementor-wpcf7-button-primary button.active[type="submit"],
		.mailchimp-button-primary button.active,
		#hotel-booking-cart .active.hb_button.hb_checkout,
		#hotel-booking-cart button.active[type=button],
		#hotel-booking-cart button.active[type=submit],
		#hotel-booking-payment .active.hb_button.hb_checkout,
		#hotel-booking-payment button.active[type=button],
		#hotel-booking-payment button.active[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input.active[type=submit],
		.active.hb_button,
		#hotel-booking-results form .active.hb_button.hb_checkout,
		#hotel-booking-results form button.active.hb_add_to_cart,
		#hotel-booking-results form form button.active[type=submit],
		.show>.button-primary.dropdown-toggle,
		.show>input.dropdown-toggle[type="reset"],
		.show>input.dropdown-toggle[type="button"],
		.show>input.dropdown-toggle[type="submit"],
		.show>button.dropdown-toggle[type="submit"],
		.show>.dropdown-toggle.more-link,
		.page .edit-link .show>a.dropdown-toggle.post-edit-link,
		.show>.dropdown-toggle.scrollup,
		.comment-form .form-submit .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-primary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-primary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-primary .show>button.dropdown-toggle,
		#hotel-booking-cart .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-cart .show>button.dropdown-toggle[type=button],
		#hotel-booking-cart .show>button.dropdown-toggle[type=submit],
		#hotel-booking-payment .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-payment .show>button.dropdown-toggle[type=button],
		#hotel-booking-payment .show>button.dropdown-toggle[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit .show>input.dropdown-toggle[type=submit],
		.show>.dropdown-toggle.hb_button,
		#hotel-booking-results form .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-results form .show>button.dropdown-toggle.hb_add_to_cart,
		#hotel-booking-results form form .show>button.dropdown-toggle[type=submit],
		.elementor-element .elementor-button-primary .elementor-button:hover,
		.elementor-element .elementor-button-primary .elementor-button:active,
		.elementor-element .elementor-button-primary .elementor-button:focus {
			background-color: #c38546;
			border-color: #c38546;
			color: #fff;
		}

		.button-primary,
		input[type="reset"],
		input.secondary[type="button"],
		input.secondary[type="reset"],
		input.secondary[type="submit"],
		input[type="button"],
		input[type="submit"],
		button[type="submit"],
		.more-link,
		.page .edit-link a.post-edit-link,
		.scrollup,
		.comment-form .form-submit input[type="submit"],
		.elementor-wpcf7-button-primary input[type="button"][type="submit"],
		.elementor-wpcf7-button-primary input[type="submit"],
		.elementor-wpcf7-button-primary button[type="submit"],
		.mailchimp-button-primary button,
		.mailchimp-button-primary button[type="submit"],
		#hotel-booking-cart .hb_button.hb_checkout,
		#hotel-booking-cart button[type=button],
		#hotel-booking-cart button[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout,
		#hotel-booking-payment button[type=button],
		#hotel-booking-payment button[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input[type=submit],
		.hb_button,
		#hotel-booking-results form .hb_button.hb_checkout,
		#hotel-booking-results form button.hb_add_to_cart,
		#hotel-booking-results form form button[type=submit],
		.button-default:hover,
		.button-dark:hover,
		.elementor-element .elementor-button-dark .elementor-button:hover,
		.button-dark:active,
		.elementor-element .elementor-button-dark .elementor-button:active,
		.button-dark:focus,
		.elementor-element .elementor-button-dark .elementor-button:focus,
		.button-light:hover,
		.elementor-element .elementor-button-light .elementor-button:hover,
		.button-light:active,
		.elementor-element .elementor-button-light .elementor-button:active,
		.button-light:focus,
		.elementor-element .elementor-button-light .elementor-button:focus,
		.elementor-element .elementor-button-primary .elementor-button {
			background-color: #cf9d6c;
			border-color: #cf9d6c;
			color: #fff;
			border-radius: 5px;
		}

		.button-primary:hover,
		input:hover[type="reset"],
		input:hover[type="button"],
		input:hover[type="submit"],
		button:hover[type="submit"],
		.more-link:hover,
		.page .edit-link a.post-edit-link:hover,
		.scrollup:hover,
		.comment-form .form-submit input:hover[type="submit"],
		.elementor-wpcf7-button-primary input:hover[type="submit"],
		.elementor-wpcf7-button-primary button:hover[type="submit"],
		.mailchimp-button-primary button:hover,
		#hotel-booking-cart .hb_button.hb_checkout:hover,
		#hotel-booking-cart button:hover[type=button],
		#hotel-booking-cart button:hover[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout:hover,
		#hotel-booking-payment button:hover[type=button],
		#hotel-booking-payment button:hover[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input:hover[type=submit],
		.hb_button:hover,
		#hotel-booking-results form .hb_button.hb_checkout:hover,
		#hotel-booking-results form button.hb_add_to_cart:hover,
		#hotel-booking-results form form button:hover[type=submit],
		.button-primary:active,
		input:active[type="reset"],
		input:active[type="button"],
		input:active[type="submit"],
		button:active[type="submit"],
		.more-link:active,
		.page .edit-link a.post-edit-link:active,
		.scrollup:active,
		.comment-form .form-submit input:active[type="submit"],
		.elementor-wpcf7-button-primary input:active[type="submit"],
		.elementor-wpcf7-button-primary button:active[type="submit"],
		.mailchimp-button-primary button:active,
		#hotel-booking-cart .hb_button.hb_checkout:active,
		#hotel-booking-cart button:active[type=button],
		#hotel-booking-cart button:active[type=submit],
		#hotel-booking-payment .hb_button.hb_checkout:active,
		#hotel-booking-payment button:active[type=button],
		#hotel-booking-payment button:active[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input:active[type=submit],
		.hb_button:active,
		#hotel-booking-results form .hb_button.hb_checkout:active,
		#hotel-booking-results form button.hb_add_to_cart:active,
		#hotel-booking-results form form button:active[type=submit],
		.button-primary.active,
		input.active[type="reset"],
		input.active[type="button"],
		input.active[type="submit"],
		button.active[type="submit"],
		.active.more-link,
		.page .edit-link a.active.post-edit-link,
		.active.scrollup,
		.comment-form .form-submit input.active[type="submit"],
		.elementor-wpcf7-button-primary input.active[type="submit"],
		.elementor-wpcf7-button-primary button.active[type="submit"],
		.mailchimp-button-primary button.active,
		#hotel-booking-cart .active.hb_button.hb_checkout,
		#hotel-booking-cart button.active[type=button],
		#hotel-booking-cart button.active[type=submit],
		#hotel-booking-payment .active.hb_button.hb_checkout,
		#hotel-booking-payment button.active[type=button],
		#hotel-booking-payment button.active[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit input.active[type=submit],
		.active.hb_button,
		#hotel-booking-results form .active.hb_button.hb_checkout,
		#hotel-booking-results form button.active.hb_add_to_cart,
		#hotel-booking-results form form button.active[type=submit],
		.show>.button-primary.dropdown-toggle,
		.show>input.dropdown-toggle[type="reset"],
		.show>input.dropdown-toggle[type="button"],
		.show>input.dropdown-toggle[type="submit"],
		.show>button.dropdown-toggle[type="submit"],
		.show>.dropdown-toggle.more-link,
		.page .edit-link .show>a.dropdown-toggle.post-edit-link,
		.show>.dropdown-toggle.scrollup,
		.comment-form .form-submit .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-primary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-primary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-primary .show>button.dropdown-toggle,
		#hotel-booking-cart .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-cart .show>button.dropdown-toggle[type=button],
		#hotel-booking-cart .show>button.dropdown-toggle[type=submit],
		#hotel-booking-payment .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-payment .show>button.dropdown-toggle[type=button],
		#hotel-booking-payment .show>button.dropdown-toggle[type=submit],
		.hb_single_room #reviews #review_form_wrapper form .form-submit .show>input.dropdown-toggle[type=submit],
		.show>.dropdown-toggle.hb_button,
		#hotel-booking-results form .show>.dropdown-toggle.hb_button.hb_checkout,
		#hotel-booking-results form .show>button.dropdown-toggle.hb_add_to_cart,
		#hotel-booking-results form form .show>button.dropdown-toggle[type=submit],
		.elementor-element .elementor-button-primary .elementor-button:hover,
		.elementor-element .elementor-button-primary .elementor-button:active,
		.elementor-element .elementor-button-primary .elementor-button:focus {
			background-color: #c38546;
			border-color: #c38546;
			color: #fff;
		}

		.button-secondary,
		.secondary-button .search-submit,
		.elementor-wpcf7-button-secondary input[type="button"][type="submit"],
		.elementor-wpcf7-button-secondary input[type="submit"],
		.elementor-wpcf7-button-secondary button[type="submit"],
		.mailchimp-button-secondary button,
		.mailchimp-button-secondary button[type="submit"],
		.elementor-button-secondary button[type="submit"],
		.elementor-button-secondary input[type="button"],
		.elementor-button-secondary input[type="submit"],
		.elementor-element .elementor-button-secondary .elementor-button,
		.hb_button_secondary {
			background-color: #423a36;
			border-color: #423a36;
			color: #fff;
			border-radius: 5px;
		}

		.button-secondary:hover,
		.secondary-button .search-submit:hover,
		.elementor-wpcf7-button-secondary input:hover[type="submit"],
		.elementor-wpcf7-button-secondary button:hover[type="submit"],
		.mailchimp-button-secondary button:hover,
		.button-secondary:active,
		.secondary-button .search-submit:active,
		.elementor-wpcf7-button-secondary input:active[type="submit"],
		.elementor-wpcf7-button-secondary button:active[type="submit"],
		.mailchimp-button-secondary button:active,
		.button-secondary.active,
		.secondary-button .active.search-submit,
		.elementor-wpcf7-button-secondary input.active[type="submit"],
		.elementor-wpcf7-button-secondary button.active[type="submit"],
		.mailchimp-button-secondary button.active,
		.show>.button-secondary.dropdown-toggle,
		.secondary-button .show>.dropdown-toggle.search-submit,
		.elementor-wpcf7-button-secondary .show>input.dropdown-toggle[type="submit"],
		.elementor-wpcf7-button-secondary .show>button.dropdown-toggle[type="submit"],
		.mailchimp-button-secondary .show>button.dropdown-toggle,
		.elementor-button-secondary button[type="submit"]:hover,
		.elementor-button-secondary button[type="submit"]:active,
		.elementor-button-secondary button[type="submit"]:focus,
		.elementor-button-secondary input[type="button"]:hover,
		.elementor-button-secondary input[type="button"]:active,
		.elementor-button-secondary input[type="button"]:focus,
		.elementor-button-secondary input[type="submit"]:hover,
		.elementor-button-secondary input[type="submit"]:active,
		.elementor-button-secondary input[type="submit"]:focus,
		.elementor-element .elementor-button-secondary .elementor-button:hover,
		.elementor-element .elementor-button-secondary .elementor-button:active,
		.elementor-element .elementor-button-secondary .elementor-button:focus {
			background-color: #272320;
			border-color: #272320;
			color: #fff;
		}

		button,
		input[type="submit"],
		input[type="reset"],
		input[type="button"],
		.button,
		.btn {}

		.elementor-button[class*='elementor-size-'] {
			border-radius: 5px;
		}
	</style>
	<link rel='stylesheet' id='osf-elementor-addons-css' href='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/css/elementor/style.css?ver=1.0.5' type='text/css' media='all' />
	<link rel='stylesheet' id='tooltipster-css' href='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/css/tooltipster.bundle.min.css?ver=1.0.5' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-35-css' href='https://anvuihomestay.com/wp-content/uploads/elementor/css/post-35.css?ver=1619949717' type='text/css' media='all' />
	<link rel='stylesheet' id='magnific-popup-css' href='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/css/magnific-popup.css?ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-36-css' href='https://anvuihomestay.com/wp-content/uploads/elementor/css/post-36.css?ver=1619949718' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-block-library-css' href='https://anvuihomestay.com/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href='https://anvuihomestay.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.4' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css' href='https://anvuihomestay.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.4.6' type='text/css' media='all' />
	<style id='rs-plugin-settings-inline-css' type='text/css'>
		#rs-demo-id {}
	</style>
	<link rel='stylesheet' id='wphb-extra-css-css' href='https://anvuihomestay.com/wp-content/plugins/wp-hotel-booking/includes/plugins/wp-hotel-booking-extra/assets/css/site.css?ver=1.10.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-hotel-booking-libaries-style-css' href='https://anvuihomestay.com/wp-content/plugins/wp-hotel-booking/assets/css/libraries.css?ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='amihomestay-opal-icon-css' href='https://anvuihomestay.com/wp-content/themes/amihomestay/assets/css/opal-icons.css?ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='amihomestay-carousel-css' href='https://anvuihomestay.com/wp-content/themes/amihomestay/assets/css/carousel.css?ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='otf-fonts-css' href='https://fonts.googleapis.com/css?family=Ubuntu%3A400%7CQuicksand%3A400%7CUbuntu%3A700%7CQuicksand%3A400&#038;subset=greek%2Cvietnamese%2Cgreek%2Cvietnamese' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Ubuntu%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;subset=vietnamese&#038;ver=5.8.2' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://anvuihomestay.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.1' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='https://anvuihomestay.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.1' type='text/css' media='all' />
	<script type="text/javascript">
		var hotel_settings = {
			ajax: 'https://anvuihomestay.com/wp-admin/admin-ajax.php',
			settings: {
				"review_rating_required": "1"
			},
			upload_base_url: 'https://anvuihomestay.com/wp-content/uploads',
			meta_key: {
				prefix: '_hb_'
			},
			nonce: '39fcb097d8',
			timezone: '1636708424',
			min_booking_date: 1
		}
	</script>
	<script type="text/javascript">
		var hotel_settings = {
			ajax: 'https://anvuihomestay.com/wp-admin/admin-ajax.php',
			settings: {
				"review_rating_required": "1"
			},
			upload_base_url: 'https://anvuihomestay.com/wp-content/uploads',
			meta_key: {
				prefix: '_hb_'
			},
			nonce: '39fcb097d8',
			timezone: '1636708424',
			min_booking_date: 1
		}
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/libs/modernizr.custom.js?ver=1.0.5' id='modernizr-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.4.4' id='tp-tools-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.4.6' id='revmin-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/underscore.min.js?ver=1.13.1' id='underscore-js'></script>
	<script type='text/javascript' id='wp-util-js-extra'>
		/* <![CDATA[ */
		var _wpUtilSettings = {
			"ajax": {
				"url": "\/wp-admin\/admin-ajax.php"
			}
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/wp-util.min.js?ver=5.8.2' id='wp-util-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.12.1' id='jquery-ui-mouse-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/jquery/ui/sortable.min.js?ver=1.12.1' id='jquery-ui-sortable-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.12.1' id='jquery-ui-datepicker-js'></script>
	<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
		jQuery(document).ready(function(jQuery) {
			jQuery.datepicker.setDefaults({
				"closeText": "\u0110\u00f3ng",
				"currentText": "H\u00f4m nay",
				"monthNames": ["Th\u00e1ng M\u1ed9t", "Th\u00e1ng Hai", "Th\u00e1ng Ba", "Th\u00e1ng T\u01b0", "Th\u00e1ng N\u0103m", "Th\u00e1ng S\u00e1u", "Th\u00e1ng B\u1ea3y", "Th\u00e1ng T\u00e1m", "Th\u00e1ng Ch\u00edn", "Th\u00e1ng M\u01b0\u1eddi", "Th\u00e1ng M\u01b0\u1eddi M\u1ed9t", "Th\u00e1ng M\u01b0\u1eddi Hai"],
				"monthNamesShort": ["Th1", "Th2", "Th3", "Th4", "Th5", "Th6", "Th7", "Th8", "Th9", "Th10", "Th11", "Th12"],
				"nextText": "Ti\u1ebfp theo",
				"prevText": "Quay v\u1ec1",
				"dayNames": ["Ch\u1ee7 Nh\u1eadt", "Th\u1ee9 Hai", "Th\u1ee9 Ba", "Th\u1ee9 T\u01b0", "Th\u1ee9 N\u0103m", "Th\u1ee9 S\u00e1u", "Th\u1ee9 B\u1ea3y"],
				"dayNamesShort": ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
				"dayNamesMin": ["C", "H", "B", "T", "N", "S", "B"],
				"dateFormat": "d MM, yy",
				"firstDay": 1,
				"isRTL": false
			});
		});
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/wp-hotel-booking/includes/libraries/owl-carousel/owl.carousel.min.js?ver=5.8.2' id='wp-hotel-booking-owl-carousel-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/wp-hotel-booking/includes/libraries/camera/js/gallery.min.js?ver=5.8.2' id='wp-hotel-booking-gallery-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/wp-hotel-booking/assets/js/select2.min.js?ver=5.8.2' id='wp-admin-hotel-booking-select2-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/themes/amihomestay/assets/js/libs/owl.carousel.js?ver=2.2.1' id='owl-carousel-js'></script>
	<!--[if lt IE 9]>
<script type='text/javascript' src='https://anvuihomestay.com/wp-content/themes/amihomestay/assets/js/libs/html5.js?ver=3.7.3' id='html5-js'></script>
<![endif]-->
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/carousel.js?ver=5.8.2' id='otf-carousel-js'></script>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://anvuihomestay.com/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://anvuihomestay.com/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 5.8.2" />
	<link rel="canonical" href="https://anvuihomestay.com/rooms/an-vui-lodge-villa-14/" />
	<link rel='shortlink' href='https://anvuihomestay.com/?p=1606' />
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<style type="text/css" id="custom-background-css">
		body.custom-background {
			background-color: #ffffff;
			background-image: url("https://localhost/wordpress/amihomestay/wp-content/uploads/2019/08/pattern.jpg");
			background-position: left top;
			background-size: auto;
			background-repeat: repeat;
			background-attachment: scroll;
		}
	</style>
	<meta name="generator" content="Powered by Slider Revolution 6.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
	<link rel="icon" href="https://anvuihomestay.com/wp-content/uploads/2021/04/cropped-logo-small-32x32.png" sizes="32x32" />
	<link rel="icon" href="https://anvuihomestay.com/wp-content/uploads/2021/04/cropped-logo-small-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="https://anvuihomestay.com/wp-content/uploads/2021/04/cropped-logo-small-180x180.png" />
	<meta name="msapplication-TileImage" content="https://anvuihomestay.com/wp-content/uploads/2021/04/cropped-logo-small-270x270.png" />
	<script type="text/javascript">
		function setREVStartSize(e) {
			//window.requestAnimationFrame(function() {				 
			window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
			window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
			try {
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
				e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
				if (e.layout === "fullscreen" || e.l === "fullscreen")
					newh = Math.max(e.mh, window.RSIH);
				else {
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl)
						if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
					e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl)
						if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

					var nl = new Array(e.rl.length),
						ix = 0,
						sl;
					e.tabw = e.tabhide >= pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
					e.tabh = e.tabhide >= pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
					for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
					sl = nl[0];
					for (var i in nl)
						if (sl > nl[i] && nl[i] > 0) {
							sl = nl[i];
							ix = i;
						}
					var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
					newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
				}
				if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
				document.getElementById(e.c).height = newh + "px";
				window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
			} catch (e) {
				console.log("Failure at Presize of Slider:" + e)
			}
			//});
		};
	</script>
</head>

<body data-rsssl=1 class="hb_room-template-default postid-1606 custom-background wp-custom-logo wp-hotel-booking wp-hotel-booking-room-page opal-style opal-single-post-style chrome platform-windows opal-default-content-layout-2cr opal-layout-boxed opal-page-title-right-left opal-footer-skin-light opal-has-menu-top elementor-default elementor-kit-1527">
	<div id="wptime-plugin-preloader"></div>
	<div class="opal-wrapper">
		<div id="page" class="site">

			@include('frontend.layouts.header')
			<div class="site-content-contain">
				<div id="content" class="site-content">
					<div class="wrap">
						<div id="primary" class="content-area">
							<main id="main" class="site-main">
								<div id="room-1606" class="hb_single_room post-1606 hb_room type-hb_room status-publish has-post-thumbnail hentry">
									<div class="summary entry-summary">
										<div class="title">
											<h3 class="entry-title">
												<a href="https://anvuihomestay.com/rooms/an-vui-lodge-villa-14/">An Vui Lodge Villa 14</a>
											</h3>
										</div>
										<div class="price">
											<span class="title-price">Từ</span>
											<span class="price_value price_min 1">3.850.000&#8363;</span>
											<span class="unit">Đêm</span>
										</div>
										<div class="hb_room_gallery camera_wrap camera_emboss" id="camera_wrap_1606">
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7872-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7872-1000x667.jpg"></div>
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7874-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7874-1000x667.jpg"></div>
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7876-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7876-1000x667.jpg"></div>
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7885-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7885-1000x667.jpg"></div>
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7886-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7886-1000x667.jpg"></div>
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7888-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7888-1000x667.jpg"></div>
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7892-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7892-1000x667.jpg"></div>
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7896-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7896-1000x667.jpg"></div>
											<div data-thumb="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7913-150x150.jpg" data-src="https://anvuihomestay.com/wp-content/uploads/2021/04/IMG_7913-1000x667.jpg"></div>
										</div>
										<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
										<script type="text/javascript">
											(function($) {
												"use strict";
												$(document).ready(function() {
													$('#camera_wrap_1606').camera({
														height: '470px',
														loader: 'none',
														pagination: false,
														thumbnails: true
													});
												});
											})(jQuery);
										</script>
										<div class="hb_single_room_details">
											<ul class="hb_single_room_tabs">
												<li>
													<a href="#hb_room_description">
														Mô Tả </a>
												</li>
												<li>
													<a href="#hb_room_additinal">
														Thông tin thêm </a>
												</li>
												<li>
													<a href="#hb_room_reviews">
														Reviews <span class="comment-count">(0)</span> </a>
												</li>
												<li>
													<a href="#hb_room_pricing_plans">
														Bảng Giá </a>
												</li>
											</ul>
											<div class="hb_single_room_tabs_content">
												<div id="hb_room_description" class="hb_single_room_tab_details">
													<p>Công suất: 14 người lớn</p>
													<p>2 phòng triple (1 giường đôi và 1 giường đơn); 1 phòng dorm (4 giường tầng – 8 người), 3 nhà vệ sinh</p>
													<p>smarttv, wifi dung lượng cao, bếp từ, tủ lạnh, đồ dùng</p>
													<p>Tiện ích: khăn tắm, khăn mặt, đồ toilletries, bể bơi, bếp bbq ngoài trời, sân chơi trẻ em, hố đốt lửa trại sau nhà.</p>
												</div>
												<div id="hb_room_additinal" class="hb_single_room_tab_details">
												</div>
												<div id="hb_room_reviews" class="hb_single_room_tab_details">
													<div id="reviews">
														<div id="comments">
															<h2>
																Reviews </h2>
															<p class="hb-noreviews">There are no reviews yet.</p>
														</div>
														<div id="review_form_wrapper">
															<div id="review_form">
																<div id="respond" class="comment-respond">
																	<h3 id="reply-title" class="comment-reply-title">Be the first to review &ldquo;An Vui Lodge Villa 14&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="/rooms/an-vui-lodge-villa-14/#respond" style="display:none;">Hủy</a></small></h3>
																	<form action="https://anvuihomestay.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
																		<p class="comment-form-rating"><label for="rating">Your Rating</label>
																		</p>
																		<div class="hb-rating-input"></div>
																		<p class="comment-form-comment"><label for="comment">Your Review</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>
																		<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" /></p>
																		<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" aria-required="true" /></p>
																		<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label></p>
																		<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='1606' id='comment_post_ID' />
																			<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
																		</p>
																	</form>
																</div>
															</div>
														</div>
														<div class="clear"></div>
													</div>
												</div>
												<div id="hb_room_pricing_plans" class="hb_single_room_tab_details">
													<h4 class="hb_room_pricing_plan_data">
														Regular plan </h4>
													<table class="hb_room_pricing_plans">
														<thead>
															<tr>
																<th>Mon</th>
																<th>Tue</th>
																<th>Wed</th>
																<th>Thu</th>
																<th>Fri</th>
																<th>Sat</th>
																<th>Sun</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	3.850.000&#8363; </td>
																<td>
																	3.850.000&#8363; </td>
																<td>
																	3.850.000&#8363; </td>
																<td>
																	3.850.000&#8363; </td>
																<td>
																	5.500.000&#8363; </td>
																<td>
																	8.250.000&#8363; </td>
																<td>
																	4.950.000&#8363; </td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="hb_related_other_room has_slider">
									<h3 class="title">Other Rooms</h3>
									<div class="hb_room_carousel">
										<div class="rooms tp-hotel-booking hb-catalog-column-4" data-elementor-columns="4">
											<div class="owl-carousel owl-theme" data-opal-carousel="true" data-dots="true" data-margin="30" data-nav="false" data-items="2" data-loop="false">
												<div id="room-1534" class="post-1534 hb_room type-hb_room status-publish has-post-thumbnail hentry hb_room_type-20-m2 hb_room_type-40-m2 hb_room_type-balcony hb_room_type-lake-view">
													<div class="summary entry-summary">
														<div class="rooms-thumbnail-wapper">
															<div class="inner">
																<div class="media">
																	<a href="https://anvuihomestay.com/rooms/an-vui-cottage-17/"><img src="https://anvuihomestay.com/wp-content/uploads/2021/04/cottage-17-4-270x270.jpg" width="270" height="270" alt="" /></a>
																</div>
																<div class="title">
																	<h3 class="entry-title">
																		<a href="https://anvuihomestay.com/rooms/an-vui-cottage-17/">An Vui Cottage 17</a>
																	</h3>
																</div>
															</div>
														</div>
														<div class="price">
															<span class="title-price">Từ</span>
															<span class="price_value price_min 1">4.400.000&#8363;</span>
															<span class="unit">Đêm</span>
														</div>
														<div class="opal-rooms-line">
															<span></span>
														</div>
														<div class="room-link ">
															<a class="button-link button-xs" href=" https://anvuihomestay.com/rooms/an-vui-cottage-17/">
																Xem Chi Tiết <i class="opal-icon-long-arrow-right"></i>
															</a>
														</div>
														<div class="rating">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</main>
						</div>
						<aside id="secondary" class="widget-area" role="complementary">
							<div class="form_group">
								<form class="form">
									<h3>Thông tin đặt Homestay</h3>
									<div id="booking" class="section">
										<div class="section-center">
											<div class="">
												<div class="row mr-0">
													<div class="booking-form">
														<div class="mb-3">
															<label for="exampleInputEmail1" class="form-label">Email address</label>
															<input placeholder="Email address" type="email" class="form-control text" id="exampleInputEmail1" aria-describedby="emailHelp" />
														</div>
														<div class="mb-3">
															<label for="exampleName" class="form-label">Name</label>
															<input placeholder="Name" type="text" class="form-control text" id="exampleName" aria-describedby="textHelp" />
														</div>
														<div class="mb-3">
															<label for="examplePhone" class="form-label">Phone</label>
															<input placeholder="Phone" type="text" class="form-control text" id="exampleName" aria-describedby="textHelp" />
														</div>
														<div class="row mr-0">
															<div class="col-md-6 pr-0">
																<div class="form-group">
																	<span class="form-label">Check In</span>
																	<input class="form-control" type="date" required />
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group">
																	<span class="form-label">Check Out</span>
																	<input class="form-control" type="date" required />
																</div>
															</div>
														</div>
														<div class="row mr-0">
															<div class="col-md-6 pr-0">
																<div class="form-group">
																	<span class="form-label">Adults</span>
																	<select class="form-control">
																		<option>1</option>
																		<option>2</option>
																		<option>3</option>
																	</select>
																	<span class="select-arrow"></span>
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group">
																	<span class="form-label">Children</span>
																	<select class="form-control">
																		<option>0</option>
																		<option>1</option>
																		<option>2</option>
																	</select>
																	<span class="select-arrow"></span>
																</div>
															</div>
														</div>
														<div class="form-group">
															<span class="form-label">Room Type</span>
															<select class="form-control" required>
																<option value="" selected hidden>
																	Select room type
																</option>
																<option>Private Room (1 to 2 People)</option>
																<option>Family Room (1 to 4 People)</option>
															</select>
															<span class="select-arrow"></span>
														</div>
														<div class="form-btn">
															<button class="submit-btn">
																Đặt ngay
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</aside>
					</div>
				</div>
			</div>
			@include('frontend.layouts.footer')
		</div>
		<nav id="opal-canvas-menu" class="opal-menu-canvas mp-menu">
			<div id="offcanvas-menu" class="offcanvas-menu menu menu-canvas-default">
				<ul>
					<li class="page_item page-item-17"><a href="https://anvuihomestay.com/404page/">404 Page</a></li>
					<li class="page_item page-item-21"><a href="https://anvuihomestay.com/about-us/">About us</a></li>
					<li class="page_item page-item-1508 current_page_parent"><a href="https://anvuihomestay.com/blog/">Blog</a></li>
					<li class="page_item page-item-1509"><a href="https://anvuihomestay.com/contact/">Contact</a></li>
					<li class="page_item page-item-19"><a href="https://anvuihomestay.com/gallery/">Gallery</a></li>
					<li class="page_item page-item-5"><a href="https://anvuihomestay.com/">Home 1</a></li>
					<li class="page_item page-item-8"><a href="https://anvuihomestay.com/hotel-rooms/">Homestay</a></li>
					<li class="page_item page-item-11"><a href="https://anvuihomestay.com/hotel-search/">Hotel Booking Search</a></li>
					<li class="page_item page-item-9"><a href="https://anvuihomestay.com/hotel-cart/">Hotel Cart</a></li>
					<li class="page_item page-item-10"><a href="https://anvuihomestay.com/hotel-checkout/">Hotel Checkout</a></li>
					<li class="page_item page-item-549"><a href="https://anvuihomestay.com/hotel-checkout-2/">Hotel Checkout</a></li>
					<li class="page_item page-item-547"><a href="https://anvuihomestay.com/hotel-rooms-2/">Hotel Rooms</a></li>
					<li class="page_item page-item-14"><a href="https://anvuihomestay.com/hotel-thank-you/">Hotel Thank You</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div id="fb-root"></div>


	<script>
		window.fbAsyncInit = function() {
			FB.init({
				xfbml: true,
				version: 'v10.0'
			});
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<div class="fb-customerchat" attribution="page_inbox" page_id="2235414456705443">
	</div>
	<script type="text/html" id="tmpl-hb-minicart-footer">
		<div class="hb_mini_cart_footer">

			<a href="https://anvuihomestay.com/hotel-checkout/" class="hb_button hb_checkout">Check Out</a>
			<a href="https://anvuihomestay.com/hotel-cart/" class="hb_button hb_view_cart">View Cart</a>

		</div>
	</script>
	<script type="text/html" id="tmpl-hb-minicart-empty">
		<p class="hb_mini_cart_empty">Your cart is empty.</p>
	</script> <a href="#" class="scrollup"><span class="icon fa fa-angle-up"></span></a>
	<link rel='stylesheet' id='elementor-icons-css' href='https://anvuihomestay.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.11.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-animations-css' href='https://anvuihomestay.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.2.2' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-1527-css' href='https://anvuihomestay.com/wp-content/uploads/elementor/css/post-1527.css?ver=1619949718' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='https://anvuihomestay.com/wp-content/uploads/elementor/css/global.css?ver=1619949719' type='text/css' media='all' />
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/libs/TweenMax.min.js?ver=1.0.5' id='tweenmax-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/libs/tooltipster.bundle.min.js?ver=1.0.5' id='tooltipster-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/libs/jquery-parallax.js?ver=1.0.5' id='parallaxmouse-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/libs/jquery.magnific-popup.min.js?ver=5.8.2' id='magnific-popup-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/libs/jquery.smartmenus.min.js?ver=1.0.5' id='smartmenus-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/libs/mlpushmenu.js?ver=1.0.5' id='pushmenu-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/libs/classie.js?ver=1.0.5' id='pushmenu-classie-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7' id='regenerator-runtime-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/dist/hooks.min.js?ver=a7edae857aab69d69fa10d5aef23a5de' id='wp-hooks-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/dist/i18n.min.js?ver=5f1269854226b4dd90450db411a12b79' id='wp-i18n-js'></script>
	<script type='text/javascript' id='wp-i18n-js-after'>
		wp.i18n.setLocaleData({
			'text direction\u0004ltr': ['ltr']
		});
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/dist/vendor/lodash.min.js?ver=4.17.19' id='lodash-js'></script>
	<script type='text/javascript' id='lodash-js-after'>
		window.lodash = _.noConflict();
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/dist/url.min.js?ver=d4bdf85a96aa587b52f4b8d58b4457c1' id='wp-url-js'></script>
	<script type='text/javascript' id='wp-api-fetch-js-translations'>
		(function(domain, translations) {
			var localeData = translations.locale_data[domain] || translations.locale_data.messages;
			localeData[""].domain = domain;
			wp.i18n.setLocaleData(localeData, domain);
		})("default", {
			"translation-revision-date": "2021-09-22 14:07:50+0000",
			"generator": "GlotPress\/3.0.0-alpha.2",
			"domain": "messages",
			"locale_data": {
				"messages": {
					"": {
						"domain": "messages",
						"plural-forms": "nplurals=1; plural=0;",
						"lang": "vi_VN"
					},
					"You are probably offline.": ["C\u00f3 th\u1ec3 b\u1ea1n \u0111ang ngo\u1ea1i tuy\u1ebfn."],
					"Media upload failed. If this is a photo or a large image, please scale it down and try again.": ["T\u1ea3i l\u00ean media kh\u00f4ng th\u00e0nh c\u00f4ng. N\u1ebfu \u0111\u00e2y l\u00e0 h\u00ecnh \u1ea3nh c\u00f3 k\u00edch th\u01b0\u1edbc l\u1edbn, vui l\u00f2ng thu nh\u1ecf n\u00f3 xu\u1ed1ng v\u00e0 th\u1eed l\u1ea1i."],
					"The response is not a valid JSON response.": ["Ph\u1ea3n h\u1ed3i kh\u00f4ng ph\u1ea3i l\u00e0 m\u1ed9t JSON h\u1ee3p l\u1ec7."],
					"An unknown error occurred.": ["C\u00f3 l\u1ed7i n\u00e0o \u0111\u00f3 \u0111\u00e3 x\u1ea3y ra."]
				}
			},
			"comment": {
				"reference": "wp-includes\/js\/dist\/api-fetch.js"
			}
		});
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/dist/api-fetch.min.js?ver=134e23b5f88ba06a093f9f92520a98df' id='wp-api-fetch-js'></script>
	<script type='text/javascript' id='wp-api-fetch-js-after'>
		wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("https://anvuihomestay.com/wp-json/"));
		wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("4fc4bb42da");
		wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
		wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
		wp.apiFetch.nonceEndpoint = "https://anvuihomestay.com/wp-admin/admin-ajax.php?action=rest-nonce";
	</script>
	<script type='text/javascript' id='contact-form-7-js-extra'>
		/* <![CDATA[ */
		var wpcf7 = {
			"cached": "1"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.4' id='contact-form-7-js'></script>
	<script type='text/javascript' id='wphb-extra-js-js-extra'>
		/* <![CDATA[ */
		var TPHB_Extra_Lang = [];
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/wp-hotel-booking/includes/plugins/wp-hotel-booking-extra/assets/js/site.min.js?ver=1.10.2' id='wphb-extra-js-js'></script>
	<script type='text/javascript' id='wp-hotel-booking-js-extra'>
		/* <![CDATA[ */
		var hotel_booking_i18n = {
			"invalid_email": "Your email address is invalid.",
			"no_payment_method_selected": "Please select your payment method.",
			"confirm_tos": "Please accept our Terms and Conditions.",
			"no_rooms_selected": "Please select at least one the room.",
			"empty_customer_title": "Please select your title.",
			"empty_customer_first_name": "Please enter your first name.",
			"empty_customer_last_name": "Please enter your last name.",
			"empty_customer_address": "Please enter your address.",
			"empty_customer_city": "Please enter your city name.",
			"empty_customer_state": "Please enter your state.",
			"empty_customer_postal_code": "Please enter your postal code.",
			"empty_customer_country": "Please select your country.",
			"empty_customer_phone": "Please enter your phone number.",
			"customer_email_invalid": "Your email is invalid.",
			"customer_email_not_match": "Your email does not match with existing email! Ok to create a new customer information.",
			"empty_check_in_date": "Please select check in date.",
			"empty_check_out_date": "Please select check out date.",
			"check_in_date_must_be_greater": "Check in date must be greater than the current.",
			"check_out_date_must_be_greater": "Check out date must be greater than the check in.",
			"enter_coupon_code": "Please enter coupon code.",
			"review_rating_required": "Please select a rating.",
			"waring": {
				"room_select": "Please select room number.",
				"try_again": "Please try again!"
			},
			"date_time_format": "mm\/dd\/yy",
			"monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			"monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			"dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			"dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
			"dayNamesMin": ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
			"date_start": "1",
			"view_cart": "View Cart",
			"cart_url": "https:\/\/anvuihomestay.com\/hotel-cart\/"
		};
		var hotel_booking_i18n = {
			"invalid_email": "Your email address is invalid.",
			"no_payment_method_selected": "Please select your payment method.",
			"confirm_tos": "Please accept our Terms and Conditions.",
			"no_rooms_selected": "Please select at least one the room.",
			"empty_customer_title": "Please select your title.",
			"empty_customer_first_name": "Please enter your first name.",
			"empty_customer_last_name": "Please enter your last name.",
			"empty_customer_address": "Please enter your address.",
			"empty_customer_city": "Please enter your city name.",
			"empty_customer_state": "Please enter your state.",
			"empty_customer_postal_code": "Please enter your postal code.",
			"empty_customer_country": "Please select your country.",
			"empty_customer_phone": "Please enter your phone number.",
			"customer_email_invalid": "Your email is invalid.",
			"customer_email_not_match": "Your email does not match with existing email! Ok to create a new customer information.",
			"empty_check_in_date": "Please select check in date.",
			"empty_check_out_date": "Please select check out date.",
			"check_in_date_must_be_greater": "Check in date must be greater than the current.",
			"check_out_date_must_be_greater": "Check out date must be greater than the check in.",
			"enter_coupon_code": "Please enter coupon code.",
			"review_rating_required": "Please select a rating.",
			"waring": {
				"room_select": "Please select room number.",
				"try_again": "Please try again!"
			},
			"date_time_format": "mm\/dd\/yy",
			"monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			"monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			"dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			"dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
			"dayNamesMin": ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
			"date_start": "1",
			"view_cart": "View Cart",
			"cart_url": "https:\/\/anvuihomestay.com\/hotel-cart\/"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/wp-hotel-booking/assets/js/hotel-booking.min.js?ver=1.10.2' id='wp-hotel-booking-js'></script>
	<script type='text/javascript' id='amihomestay-theme-js-js-extra'>
		/* <![CDATA[ */
		var osfAjax = {
			"ajaxurl": "https:\/\/anvuihomestay.com\/wp-admin\/admin-ajax.php"
		};
		var amihomestayJS = {
			"quote": "<i class=\"fa-quote-right\"><\/i>",
			"smoothCallback": "",
			"expand": "Expand child menu",
			"collapse": "Collapse child menu",
			"icon": "<i class=\"fa fa-angle-down\"><\/i>"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/themes/amihomestay/assets/js/theme.js?ver=1.0' id='amihomestay-theme-js-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/themes/amihomestay/assets/js/sticky-layout.js?ver=5.8.2' id='amihomestay-theme-sticky-layout-js-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/themes/amihomestay/assets/js/navigation.js?ver=1.0' id='amihomestay-navigation-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/comment-reply.min.js?ver=5.8.2' id='comment-reply-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/amihomestay-core/assets/js/SmoothScroll.min.js?ver=1.4.8' id='smoothscroll-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.2.2' id='elementor-webpack-runtime-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.2.2' id='elementor-frontend-modules-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.2.2' id='share-link-js'></script>
	<script type='text/javascript' src='https://anvuihomestay.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
	<script type='text/javascript' id='elementor-frontend-js-before'>
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Chia s\u1ebb tr\u00ean Facebook",
				"shareOnTwitter": "Chia s\u1ebb tr\u00ean Twitter",
				"pinIt": "Ghim n\u00f3",
				"download": "T\u1ea3i xu\u1ed1ng",
				"downloadImage": "T\u1ea3i h\u00ecnh \u1ea3nh",
				"fullscreen": "To\u00e0n m\u00e0n h\u00ecnh",
				"zoom": "Thu ph\u00f3ng",
				"share": "Chia s\u1ebb",
				"playVideo": "Ch\u01a1i Video",
				"previous": "Previous",
				"next": "Next",
				"close": "\u0110\u00f3ng"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Thi\u1ebft b\u1ecb di \u0111\u1ed9ng",
						"value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Extra",
						"value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "M\u00e1y t\u00ednh b\u1ea3ng",
						"value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Extra",
						"value": 1365,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1620,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			},
			"version": "3.2.2",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"a11y_improvements": true,
				"landing-pages": true
			},
			"urls": {
				"assets": "https:\/\/anvuihomestay.com\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description"
			},
			"post": {
				"id": 1606,
				"title": "An%20Vui%20Lodge%20Villa%2014%20%E2%80%93%20An%20Vui%20Homestay",
				"excerpt": "",
				"featuredImage": "https:\/\/anvuihomestay.com\/wp-content\/uploads\/2021\/04\/IMG_7886-1024x683.jpg"
			}
		};
	</script>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('frontend_assets/lib/easing/easing.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/lib/waypoints/waypoints.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/lib/counterup/counterup.min.js') }}"></script>

	<!-- Contact Javascript File -->
	<script src="{{ asset('frontend_assets/mail/jqBootstrapValidation.min.js') }}"></script>
	<script src="{{ asset('frontend_assets/mail/contact.js') }}"></script>

	<!-- Template Javascript -->
	<script src="{{ asset('frontend_assets/js/main.js') }}"></script>
	<!--jquery CDN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--slick slider -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript">
		$('.slider-team').slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 2,
			slidesToScroll: 1,
			responsive: [{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false
					}
				},

				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});
	</script>
	<!--michelsnik-->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>