
<!-- footer start form here -->
 <footer class="footer_wrap footer_custom footer_custom_17 footer_custom_footer-informed scheme_dark">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1500022130067 vc_row-has-fill sc_layouts_row sc_layouts_row_type_normal">
            <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div id="sc_content_1742136524" class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center">
                            <div class="sc_content_container">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space  height_large" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                                <div class="sc_layouts_item">
                                                    <div id="sc_icons_922157820" class="sc_icons sc_icons_default sc_icons_size_small sc_align_center">
                                                    
                                                    </div>
                                                </div>
                                                <div class="sc_layouts_item">
                                                    <div id="sc_title_1958020713" class="sc_title color_style_default sc_title_default">
                                                        <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">Newsletter</h2>
                                                        <div class="sc_item_descr sc_title_descr sc_align_center">
                                                            <p>Subscribe to our mailing list</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_empty_space  height_tiny" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <script>
                                                            (function() {
                                                                window.mc4wp = window.mc4wp || {
                                                                    listeners: [],
                                                                    forms: {
                                                                        on: function(evt, cb) {
                                                                            window.mc4wp.listeners.push({
                                                                                event: evt,
                                                                                callback: cb
                                                                            });
                                                                        }
                                                                    }
                                                                }
                                                            })();
                                                        </script>
                                                        <form action="{{route('subscriber.email.store')}}" id="mc4wp-form-1" class="mc4wp-form mc4wp-form-426" method="POST" data-id="426" data-name="">
                                                            @csrf
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            <div class="mc4wp-form-fields">
                                                                <div class="mailchimp_form">
                                                                    <div class="mailchimp_inputs">
                                                                    @if(Session::get('success'))
                                                                    <div class="alert alert-danger alert-dismissible">
                                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                                        <strong>{{Session::get('success')}}</strong>
                                                                    </div>
                                                                    @endif  
                                                                        <input type="email" id="mailchimp_email" name="email" placeholder="Your Email" required /><button>Sign Up</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden"
                                                                name="_mc4wp_timestamp" value="1648799900" /><input type="hidden" name="_mc4wp_form_id" value="426" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                                            <div class="mc4wp-response"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="vc_empty_space  height_large" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-3 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_wp_custommenu wpb_content_element">
                                                    <div class="widget widget_nav_menu">
                                                        <h2 class="widgettitle">Menu</h2>
                                                        <div class="menu-menu-container">
                                                            <ul id="menu-menu" class="menu">
                                                                <li id="menu-item-378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-378"><a href="{{route('aboutUs')}}">About</a></li>
                                                                <li id="menu-item-380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380"><a href="{{route('news')}} ">Events</a></li>
                                                                <li id="menu-item-382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-382"><a href="{{route('philosophy')}}">Philosophy</a></li>
                                                                <li id="menu-item-379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-379"><a href="{{route('contactUs')}}">Contact</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_wp_custommenu wpb_content_element">
                                                    <div class="widget widget_nav_menu">
                                                        <h2 class="widgettitle">Services</h2>
                                                        <div class="menu-services-list-container">
                                                            <ul id="menu-services-list" class="menu">
                                                                <li id="menu-item-383" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-383"><a href="{{route('service.one')}}">Marriage</a></li>
                                                                <li id="menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-384"><a href="{{route('service.two')}}">Hajj & Umrah</a></li>
                                                                <li id="menu-item-387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-387"><a href="{{route('service.three')}}">Funeral Services</a></li>
                                                                <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386"><a href="{{url('/donate')}}">Donate</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_wp_text wpb_content_element">
                                                    <div class="widget widget_text">
                                                        <h2 class="widgettitle">Contact</h2>
                                                        @foreach($contacts as $item)
                                                        <div class="textwidget">
                                                            <p><a href="#">Email: {{$item->email}}</a><br/>   
                                                             <p>Address:{{$item->address}}</p>
                                                             <p>Phone:{{$item->phone}}</p>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3 sc_layouts_column_icons_position_left">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_wp_text wpb_content_element">
                                                    <div class="widget widget_text">
                                                        <h2 class="widgettitle">Social</h2>
                                                        <div class="textwidget">
                                                        @foreach($contacts as $item)
                                                            <p><a href="{{$item->facebook}}">Facebook</a><br />
                                                                <a href="{{$item->youtube}}">YouTube</a><br />
                                                                <a href="{{$item->instragram}}">Instagram</a><br />
                                                                <a href="{{$item->twitter}}">Twitter</a></p>
                                                                <a href="{{$item->linkedin}}">Linkedin</a></p>
                                                        @endforeach
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text"><span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:rgb(87,166,143);border-color:rgba(87,166,143,0.2);" class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:rgb(87,166,143);border-color:rgba(87,166,143,0.2);" class="vc_sep_line"></span></span>
                        </div>
                        <div id="sc_content_1520346990" class="sc_content color_style_default sc_content_default sc_float_center">
                            <div class="sc_content_container">
                                <div class="vc_wp_text wpb_content_element">
                                    <div class="widget widget_text">
                                        <div class="textwidget">
                                            <p style="text-align: center;">Copyright © 2022 by <a href="https://ideatechsolution.com" target="_blank" rel="noopener noreferrer">Idea Tech Solution</a>. All rights reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end here -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = false;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    <script type="text/javascript">
        var ajaxRevslider;

        function rsCustomAjaxContentLoadingFunction() {
            // CUSTOM AJAX CONTENT LOADING FUNCTION
            ajaxRevslider = function(obj) {

                // obj.type : Post Type
                // obj.id : ID of Content to Load
                // obj.aspectratio : The Aspect Ratio of the Container / Media
                // obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content

                var content = '';
                var data = {
                    action: 'revslider_ajax_call_front',
                    client_action: 'get_slider_html',
                    token: 'ed8c8238a8',
                    type: obj.type,
                    id: obj.id,
                    aspectratio: obj.aspectratio
                };

                // SYNC AJAX REQUEST
                jQuery.ajax({
                    type: 'post',
                    url: '(public/frontend/wp-admin/admin-ajax.php',
                    dataType: 'json',
                    data: data,
                    async: false,
                    success: function(ret, textStatus, XMLHttpRequest) {
                        if (ret.success == true)
                            content = ret.data;
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });

                // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
                return content;
            };

            // CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
            var ajaxRemoveRevslider = function(obj) {
                return jQuery(obj.selector + ' .rev_slider').revkill();
            };


            // EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION				
            if (jQuery.fn.tpessential !== undefined)
                if (typeof(jQuery.fn.tpessential.defaults) !== 'undefined')
                    jQuery.fn.tpessential.defaults.ajaxTypes.push({
                        type: 'revslider',
                        func: ajaxRevslider,
                        killfunc: ajaxRemoveRevslider,
                        openAnimationSpeed: 0.3
                    });
            // type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
            // func: the Function Name which is Called once the Item with the Post Type has been clicked
            // killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
            // openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)					
        }

        var rsCustomAjaxContent_Once = false
        if (document.readyState === "loading")
            document.addEventListener('readystatechange', function() {
                if ((document.readyState === "interactive" || document.readyState === "complete") && !rsCustomAjaxContent_Once) {
                    rsCustomAjaxContent_Once = true;
                    rsCustomAjaxContentLoadingFunction();
                }
            });
        else {
            rsCustomAjaxContent_Once = true;
            rsCustomAjaxContentLoadingFunction();
        }
    </script>
    <script>
        (function(body) {
            'use strict';
            body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
        })(document.body);
    </script>
    <script>
        (function() {
            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields) {
                for (var j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField);
                }
            }
        })();
    </script>
    <script>
        /* <![CDATA[ */
        var tribe_l10n_datatables = {
            "aria": {
                "sort_ascending": ": activate to sort column ascending",
                "sort_descending": ": activate to sort column descending"
            },
            "length_menu": "Show _MENU_ entries",
            "empty_table": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "info_empty": "Showing 0 to 0 of 0 entries",
            "info_filtered": "(filtered from _MAX_ total entries)",
            "zero_records": "No matching records found",
            "search": "Search:",
            "all_selected_text": "All items on this page were selected. ",
            "select_all_link": "Select all pages",
            "clear_selection": "Clear Selection.",
            "pagination": {
                "all": "All",
                "next": "Next",
                "previous": "Previous"
            },
            "select": {
                "rows": {
                    "0": "",
                    "_": ": Selected %d rows",
                    "1": ": Selected 1 row"
                }
            },
            "datepicker": {
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Prev",
                "currentText": "Today",
                "closeText": "Done",
                "today": "Today",
                "clear": "Clear"
            }
        }; /* ]]> */
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400%7CCinzel+Decorative:700%7CRoboto:400&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css">
    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
                console.log("To fix this, you can:");
                console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <link property="stylesheet" rel='stylesheet' id='rs-plugin-settings-css' href='{{asset('public/frontend')}}/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.11' type='text/css' media='all' />
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.12.1' id='jquery-ui-datepicker-js'></script>
    <script type='text/javascript' id='jquery-ui-datepicker-js-after'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/booked/assets/js/spin.min.js?ver=2.0.1' id='booked-spin-js-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/booked/assets/js/spin.jquery.js?ver=2.0.1' id='booked-spin-jquery-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/booked/assets/js/tooltipster/js/jquery.tooltipster.min.js?ver=3.3.0' id='booked-tooltipster-js'></script>
    <script type='text/javascript' id='booked-functions-js-extra'>
        /* <![CDATA[ */
        var booked_js_vars = {
            "ajax_url": "http:\/\/shaha.ancorathemes.com\/wp-admin\/admin-ajax.php",
            "profilePage": "",
            "publicAppointments": "",
            "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
            "i18n_please_wait": "Please wait ...",
            "i18n_wrong_username_pass": "Wrong username\/password combination.",
            "i18n_fill_out_required_fields": "Please fill out all required fields.",
            "i18n_guest_appt_required_fields": "Please enter your name to book an appointment.",
            "i18n_appt_required_fields": "Please enter your name, your email address and choose a password to book an appointment.",
            "i18n_appt_required_fields_guest": "Please fill in all \"Information\" fields.",
            "i18n_password_reset": "Please check your email for instructions on resetting your password.",
            "i18n_password_reset_error": "That username or email is not recognized."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/booked/assets/js/functions.js?ver=2.3.5' id='booked-functions-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "http:\/\/shaha.ancorathemes.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.3' id='contact-form-7-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/trx_addons/js/swiper/swiper.jquery.min.js' id='swiperslider-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js' id='magnific-popup-js'></script>
    <script type='text/javascript' id='trx_addons-js-extra'>
        /* <![CDATA[ */
        var TRX_ADDONS_STORAGE = {
            "ajax_url": "http:\/\/shaha.ancorathemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "696d211cae",
            "site_url": "http:\/\/shaha.ancorathemes.com",
            "post_id": "2",
            "vc_edit_mode": "0",
            "popup_engine": "magnific",
            "animate_inner_links": "0",
            "menu_collapse": "1",
            "user_logged_in": "0",
            "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$",
            "msg_ajax_error": "Invalid server answer!",
            "msg_magnific_loading": "Loading image",
            "msg_magnific_error": "Error loading image",
            "msg_error_like": "Error saving your like! Please, try again later.",
            "msg_field_name_empty": "The name can't be empty",
            "msg_field_email_empty": "Too short (or empty) email address",
            "msg_field_email_not_valid": "Invalid email address",
            "msg_field_text_empty": "The message text can't be empty",
            "msg_search_error": "Search error! Try again later.",
            "msg_send_complete": "Send message complete!",
            "msg_send_error": "Transmit failed!",
            "ajax_views": "",
            "menu_cache": [".menu_mobile_inner > nav > ul"],
            "login_via_ajax": "1",
            "msg_login_empty": "The Login field can't be empty",
            "msg_login_long": "The Login field is too long",
            "msg_password_empty": "The password can't be empty and shorter then 4 characters",
            "msg_password_long": "The password is too long",
            "msg_login_success": "Login success! The page should be reloaded in 3 sec.",
            "msg_login_error": "Login failed!",
            "msg_not_agree": "Please, read and check 'Terms and Conditions'",
            "msg_email_long": "E-mail address is too long",
            "msg_email_not_valid": "E-mail address is invalid",
            "msg_password_not_equal": "The passwords in both fields are not equal",
            "msg_registration_success": "Registration success! Please log in!",
            "msg_registration_error": "Registration failed!",
            "msg_sc_googlemap_not_avail": "Googlemap service is not available",
            "msg_sc_googlemap_geocoder_error": "Error while geocode address"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset('public/frontend')}}/wp-content/plugins/trx_addons/js/trx_addons.js' id='trx_addons-js'></script>
    <script type='text/javascript' id='trx_demo_panels-js-extra'>
        /* <![CDATA[ */
        var TRX_DEMO_STORAGE = {
            "ajax_url": "http:\/\/shaha.ancorathemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "696d211cae",
            "site_url": "http:\/\/shaha.ancorathemes.com",
            "user_logged_in": "0",
            "msg_ajax_error": "Invalid server response! Try again later.",
            "tabs_delay": "5000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/trx_demo/js/trx_demo_panels.js' id='trx_demo_panels-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/dist/hooks.min.js?ver=a7edae857aab69d69fa10d5aef23a5de' id='wp-hooks-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/dist/i18n.min.js?ver=5f1269854226b4dd90450db411a12b79' id='wp-i18n-js'></script>
    <script type='text/javascript' id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script type='text/javascript' id='give-donation-summary-script-frontend-js-extra'>
        /* <![CDATA[ */
        var GiveDonationSummaryData = {
            "currencyPrecisionLookup": {
                "USD": 2,
                "EUR": 2,
                "GBP": 2,
                "AUD": 2,
                "BRL": 2,
                "CAD": 2,
                "CZK": 2,
                "DKK": 2,
                "HKD": 2,
                "HUF": 2,
                "ILS": 2,
                "JPY": 0,
                "MYR": 2,
                "MXN": 2,
                "MAD": 2,
                "NZD": 2,
                "NOK": 2,
                "PHP": 2,
                "PLN": 2,
                "SGD": 2,
                "KRW": 0,
                "ZAR": 2,
                "SEK": 2,
                "CHF": 2,
                "TWD": 2,
                "THB": 2,
                "INR": 2,
                "TRY": 2,
                "IRR": 2,
                "RUB": 2,
                "AED": 2,
                "AMD": 2,
                "ANG": 2,
                "ARS": 2,
                "AWG": 2,
                "BAM": 2,
                "BDT": 2,
                "BHD": 3,
                "BMD": 2,
                "BND": 2,
                "BOB": 2,
                "BSD": 2,
                "BWP": 2,
                "BZD": 2,
                "CLP": 0,
                "CNY": 2,
                "COP": 2,
                "CRC": 2,
                "CUC": 2,
                "CUP": 2,
                "DOP": 2,
                "EGP": 2,
                "GIP": 2,
                "GTQ": 2,
                "HNL": 2,
                "HRK": 2,
                "IDR": 2,
                "ISK": 0,
                "JMD": 2,
                "JOD": 2,
                "KES": 2,
                "KWD": 2,
                "KYD": 2,
                "MKD": 2,
                "NPR": 2,
                "OMR": 3,
                "PEN": 2,
                "PKR": 2,
                "RON": 2,
                "SAR": 2,
                "SZL": 2,
                "TOP": 2,
                "TZS": 2,
                "UAH": 2,
                "UYU": 2,
                "VEF": 2,
                "XCD": 2,
                "AFN": 2,
                "ALL": 2,
                "AOA": 2,
                "AZN": 2,
                "BBD": 2,
                "BGN": 2,
                "BIF": 0,
                "BTC": 8,
                "BTN": 1,
                "BYR": 2,
                "BYN": 2,
                "CDF": 2,
                "CVE": 2,
                "DJF": 0,
                "DZD": 2,
                "ERN": 2,
                "ETB": 2,
                "FJD": 2,
                "FKP": 2,
                "GEL": 2,
                "GGP": 2,
                "GHS": 2,
                "GMD": 2,
                "GNF": 0,
                "GYD": 2,
                "HTG": 2,
                "IMP": 2,
                "IQD": 2,
                "IRT": 2,
                "JEP": 2,
                "KGS": 2,
                "KHR": 0,
                "KMF": 2,
                "KPW": 0,
                "KZT": 2,
                "LAK": 0,
                "LBP": 2,
                "LKR": 0,
                "LRD": 2,
                "LSL": 2,
                "LYD": 3,
                "MDL": 2,
                "MGA": 0,
                "MMK": 2,
                "MNT": 2,
                "MOP": 2,
                "MRO": 2,
                "MUR": 2,
                "MVR": 1,
                "MWK": 2,
                "MZN": 0,
                "NAD": 2,
                "NGN": 2,
                "NIO": 2,
                "PAB": 2,
                "PGK": 2,
                "PRB": 2,
                "PYG": 2,
                "QAR": 2,
                "RSD": 2,
                "RWF": 2,
                "SBD": 2,
                "SCR": 2,
                "SDG": 2,
                "SHP": 2,
                "SLL": 2,
                "SOS": 2,
                "SRD": 2,
                "SSP": 2,
                "STD": 2,
                "SYP": 2,
                "TJS": 2,
                "TMT": 2,
                "TND": 3,
                "TTD": 2,
                "UGX": 2,
                "UZS": 2,
                "VND": 1,
                "VUV": 0,
                "WST": 2,
                "XAF": 2,
                "XOF": 2,
                "XPF": 2,
                "YER": 2,
                "ZMW": 2
            },
            "recurringLabelLookup": []
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/give/assets/dist/js/give-donation-summary.js?ver=2.17.1' id='give-donation-summary-script-frontend-js'></script>
    <script type='text/javascript' id='booked-fea-js-js-extra'>
        /* <![CDATA[ */
        var booked_fea_vars = {
            "ajax_url": "http:\/\/shaha.ancorathemes.com\/wp-admin\/admin-ajax.php",
            "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
            "i18n_confirm_appt_approve": "Are you sure you want to approve this appointment?"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/booked/includes/add-ons/frontend-agents/js/functions.js?ver=2.3.5' id='booked-fea-js-js'></script>
    <script type='text/javascript' id='cb70d11b8-js-extra'>
        /* <![CDATA[ */
        var localize = {
            "ajaxurl": "http:\/\/shaha.ancorathemes.com\/wp-admin\/admin-ajax.php",
            "nonce": "e58b879507",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading..."
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/uploads/essential-addons-elementor/734e5f942.min.js?ver=1648799900' id='cb70d11b8-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.min.js' id='superfish-js'></script>
    <script type='text/javascript' id='shaha-init-js-extra'>
        /* <![CDATA[ */
        var SHAHA_STORAGE = {
            "ajax_url": "http:\/\/shaha.ancorathemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "696d211cae",
            "site_url": "http:\/\/shaha.ancorathemes.com",
            "theme_url": "http:\/\/shaha.ancorathemes.com\/wp-content\/themes\/shaha",
            "site_scheme": "scheme_default",
            "user_logged_in": "",
            "mobile_layout_width": "767",
            "mobile_device": "1",
            "menu_side_stretch": "",
            "menu_side_icons": "",
            "background_video": "",
            "use_mediaelements": "1",
            "comment_maxlength": "1000",
            "admin_mode": "",
            "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$",
            "strings": {
                "ajax_error": "Invalid server answer!",
                "error_global": "Error data validation!",
                "name_empty": "The name can&#039;t be empty",
                "name_long": "Too long name",
                "email_empty": "Too short (or empty) email address",
                "email_long": "Too long email address",
                "email_not_valid": "Invalid email address",
                "text_empty": "The message text can&#039;t be empty",
                "text_long": "Too long message text"
            },
            "alter_link_color": "#db9e30",
            "button_hover": "slide_left"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/themes/shaha/js/__scripts.js' id='shaha-init-js'></script>
    <script type='text/javascript' id='mediaelement-core-js-before'>
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.16' id='mediaelement-core-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.8.2' id='mediaelement-migrate-js'></script>
    <script type='text/javascript' id='mediaelement-js-extra'>
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=5.8.2' id='wp-mediaelement-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.8.0' id='wpb_composer_front_js-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/trx_addons/components/shortcodes/skills/chart.min.js' id='trx_addons-chart-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/trx_addons/components/shortcodes/countdown/jquery.plugin.min.js' id='jquery-plugin-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/trx_addons/components/shortcodes/countdown/jquery.countdown.min.js' id='jquery-countdown-js'></script>
    <script type='text/javascript' src='{{asset("public/frontend")}}/wp-content/plugins/trx_addons/components/shortcodes/countdown/countdown.js' id='trx_addons-sc_countdown-js'></script>
    <script type='text/javascript' defer src='{{asset("public/frontend")}}/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.8.6' id='mc4wp-forms-api-js'></script>
    <script type="text/javascript" id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi1;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider11"] = {
            once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined,
            init: function() {
                window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1.length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
                if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) {
                    window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
                    if (window.revapi1initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider11"].init()
                    });
                    return;
                }
                window.revapi1 = jQuery(window.revapi1);
                if (window.revapi1.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_1_1");
                    return;
                }
                revapi1.revolutionInit({
                    revapi: "revapi1",
                    DPR: "dpr",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1240,1024,1024,1024",
                    gridwidth: "1240,1024,1024,1024",
                    gridheight: "970,768,768,768",
                    lazyType: "all",
                    spinner: "spinner0",
                    perspective: 600,
                    perspectiveType: "local",
                    editorheight: "970,768,800,720",
                    responsiveLevels: "1240,1024,1024,1024",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        mouseScrollNavigation: false,
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true,
                            touchOnDesktop: true
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "custom",
                            hide_onmobile: true,
                            hide_under: 1000,
                            v_offset: 40,
                            space: 13
                        }
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false,
                        visible_area: "20%"
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });

            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    <!-- whatsapp add -->
    <style>
        .whatsup{
            position: fixed;
            bottom: 10px;
            margin-left: 20px;
        }
    </style>
    <div class="whatsup">
        <a href="{{$whatsapps->whatsapp}}" target="_blank"><img src="{{asset('public/frontend')}}/img/whatsapp.png" class="whatsapp_float_btn" alt="" style="width:80px; height:80px"></a>
    </div>
  
</body>
</html>
