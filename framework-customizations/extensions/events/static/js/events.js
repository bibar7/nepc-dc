jQuery(function($){
    "use strict";

    $.slz_event_archive_search = function() {
        var dateFormat = "mm/dd/yy";
        var btn_search = $('.slz-events-archive .slz-event-search.event-search-form .slz-btn-search');

        if( btn_search.length > 0 ) {

            btn_search
                .closest('.slz-events-archive')
                .find('.event-search-result')
                .change(function () {
                    var search_result  = $(this);
                    var search_form    = search_result.closest('.slz-events-archive').find('.slz-event-search');
                    var search_loading = search_result.closest('.slz-events-archive').find('.event-search-loading');

                    var links          = search_result.find('.slz-pagination .nav-links a');
                    links
                        .each(function(idx,dom){
                            $(dom).attr('href', 'javascript:void(0);')
                        });
                    links
                        .off()
                        .click(function () {
                            var start_date = search_form.find('input.start_date').val();
                            var location   = search_form.find('input.location').val();
                            var keyword    = search_form.find('input.keywords').val();
                            var page       = $(this).data('page');

                            var current = $(this);

                            search_loading.addClass('active');
                            search_result.addClass('hide-list');

                            var data = {
                                "start_date": start_date,
                                "location"  : location,
                                "keyword"   : keyword,
                                "page"      : page
                            }

                            $.fn.Form.ajax(['events', 'ajax_archive_search'], data, function(res) {
                                if( res != undefined && res.length > 0 ) {
                                    current.addClass('current');
                                    search_result.html(res).trigger('change');
                                    search_loading.removeClass('active');
                                    search_result.removeClass('hide-list');
                                }
                            });
                        });
                });

            btn_search.on( 'click', function() {
                var search_form    = $(this).closest('.slz-event-search');
                var search_loading = $(this).closest('.slz-events-archive').find('.event-search-loading');
                var search_result  = $(this).closest('.slz-events-archive').find('.event-search-result');
                var start_date = search_form.find('input.start_date').val();
                var location   = search_form.find('input.location').val();
                var keyword    = search_form.find('input.keywords').val();

                search_loading.addClass('active');
                search_result.addClass('hide-list');

                var data = {
                    "start_date": start_date,
                    "location": location,
                    "keyword": keyword
                }

                $.fn.Form.ajax(['events', 'ajax_archive_search'], data, function(res) {
                    if( res != undefined && res.length > 0 ) {
                        search_result.html(res).trigger('change');
                        search_loading.removeClass('active');
                        search_result.removeClass('hide-list');
                    }
                });
            });

            btn_search.closest('.slz-events-archive').find('.event-search-result').trigger('change');
        }

    };
    $.slz_shortcode_event_search = function () {
        if ( $('.sc_events_search .sc_form_events_search').length >0 ) {
            $('.sc_events_search button.slz-btn-search').click(function () {
                var _this = $(this).parents('.sc_events_search');
                var _date = $(_this).find('input.start_date').val();
                var _location = $(_this).find('input.location').val();
                var _keywords = $(_this).find('input.keywords').val();

                $(_this).find('form.sc_form_events_search input[name="start_date"]').val(_date);
                $(_this).find('form.sc_form_events_search input[name="location"]').val(_location);
                $(_this).find('form.sc_form_events_search input[name="keywords"]').val(_keywords);

                $(_this).find('form.sc_form_events_search').submit();
            });
        }
    }
    $.slz_event_archive_auto_search = function () {
        if ($('.slz-events-archive .slz-event-search[autoload]').length > 0) {
            $('.slz-events-archive .slz-event-search[autoload]').each(function (_index, _this) {
                var json = $(_this).attr('data-json');
                var data = $.parseJSON(json);
                var keywords     = data.keywords;
                var location     = data.location;
                var start_date   = data.start_date;

                $(_this).find('input.keywords').val(keywords);
                $(_this).find('input.location').val(location);
                $(_this).find('input.start_date').val(start_date);

                $(_this).removeAttr('autoload');
                $(_this).removeAttr('data-json');
            });
        }
    }
    $(document).ready(function(){
        jQuery.slz_event_archive_search();
        jQuery.slz_shortcode_event_search();
        jQuery.slz_event_archive_auto_search();
    });
});