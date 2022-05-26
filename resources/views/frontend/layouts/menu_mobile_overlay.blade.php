<!-- count down timer cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<div class="menu_mobile_overlay"></div>
<div class="menu_mobile menu_mobile_fullscreen scheme_dark">
    <div class="menu_mobile_inner">
        <a class="menu_mobile_close icon-cancel"></a><a class="sc_layouts_logo" href="{{url('/')}}"><img src="{{asset('upload/user_image/'.$logo->image)}}" alt="#" width="300" height="136"></a>
        <nav class="menu_mobile_nav_area">
            <ul id="menu_mobile-main-menu" class="">
                <li id="menu_mobile-item-109" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-109"><a href="{{url('/donate')}}"><span>Donate</span></a>
                    
                </li>
                <li id="menu_mobile-item-109" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-109"><a href="{{url('/')}} "><span>Home</span></a>
                    
                </li>
                <li id="menu_mobile-item-110" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-110"><a href="{{route('aboutUs')}}"><span>About</span></a>
                </li>
               
                <li id="menu_mobile-item-104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104"><a href="{{route('philosophy')}}"><span>Philosophy</span></a></li>
            
                <li id="menu_mobile-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="{{route('contactUs')}}"><span>Contact</span></a></li>
                <li id="menu_mobile-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="{{route('login')}}"><span>Login</span></a></li>

            </ul>
            </nav>
            <div class="search_wrap search_style_normal search_mobile">
                <div class="search_form_wrap">
                    <form role="search" method="get" class="search_form" action="#">
                        <input type="text" class="search_field" placeholder="Search" value="" name="s">
                        <button type="submit" class="search_submit trx_addons_icon-search"></button>
                    </form>
                </div>
            </div>
    </div>
</div>
<!-- page_content_wrap start -->
<div class="page_content_wrap">
   <!-- content_wrap start -->
    <div class="content_wrap">
        <div class="content">
            <article id="post-2" class="post_item_single post_type_page post-2 page type-page status-publish hentry">
                <div class="post_content entry-content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                    <div class="wpb_revslider_element wpb_content_element">
                                        <p class="rs-p-wp-fix"></p>
                                      
                                        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                            <rs-module id="rev_slider_1_1"  data-version="6.5.11">
                                     
                                            <rs-slides>
                                                @foreach ($sliders as $key => $slider)
                                               <!-- slider 1 start -->
                                                    <rs-slide style="position: absolute;" data-key="rs-{{$key++}}" data-title="Slide" data-thumb="" data-anim="ms:600;r:0;" data-in="o:0;" data-out="a:false;">
                                                   
                                                    <img src="" title="Home" class=" rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{asset('upload/user_image/'.$slider->image)}}" data-panzoom="d:10000;ss:100;se:115;"
                                                            data-no-retina>
                                                        
                                                        <rs-layer id="slider-1-slide-1-layer-2" class="Icon" data-type="text" data-rsp_ch="on" data-xy="x:c;y:m;yo:-118px;" data-text="s:16;l:27;a:inherit;" data-vbility="t,f,f,f"
                                                            data-frame_1="st:1500;sp:3000;sR:1500;" data-frame_999="o:0;st:w;sp:1000;sR:4500;" style="z-index:6;">
                                                            <div id="sc_icons_563119721" class="sc_icons sc_icons_default sc_icons_size_small sc_align_center">  
                                                            </div>
                                                        </rs-layer>
                                                        
                                                        <rs-layer class="text-gray-700" id="slider-1-slide-1-layer-3" class="Title" data-type="text" data-rsp_ch="on" data-xy="x:c;xo:1px;y:m;yo:-16px;" data-text="s:62;l:80;fw:700;a:center;" data-frame_0="o:1;bri:100%;blu:10px;"
                                                            data-frame_0_chars="d:5;y:ran(-60|60);o:0;rX:0deg;bri:100%;blu:10px;" data-frame_1="e:power4.inOut;sp:3000;" data-frame_1_chars="d:5;" data-frame_999="o:0;e:power2.in;st:w;sp:1000;sR:4350;blu:10px;">
                                                            <h5 style="font-family: Arial, Helvetica, sans-serif;">{{$slider->long_title}}</h5>
                                                        </rs-layer>
                                                         <a href="{{url('/donate')}}">
                                                        <rs-layer id="slider-1-slide-1-layer-8" class="Button rev-btn" data-type="button" data-xy="x:c;y:m;yo:194px;" data-text="s:16;l:27;a:center;" data-actions='o:click;a:simplelink;tar get:_self;'
                                                            data-rsp_bd="off" data-padding="t:12;r:32;b:15;l:32;" data-border="bor:6px,6px,6px,6px;" data-frame_1="e:power2.out;st:3000;sp:3000;sR:3000;" data-frame_999="o:0;st:w;sp:1000;sR:3000;"
                                                            data-frame_hover="c:#fff;bgc:#57a68f;boc:#db9e30;bor:6px,6px,6px,6px;bos:solid;oX:50;oY:50;e:power4.out;" style="z-index:9;background-color:#db9e30;font-family:'Roboto Slab';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;" >
                                                            Become A Member
                                                        </rs-layer>     
                                                        </a>                                               
                                                    </rs-slide>    
                                                     @endforeach                                               
                                                    <!-- slider end -->                                  
                                                </rs-slides>                                                                                                    
                                               
                                            </rs-module>
                                            
                                            <script type="text/javascript">
                                                setREVStartSize({
                                                    c: 'rev_slider_1_1',
                                                    rl: [1240, 1024, 1024, 1024],
                                                    el: [970, 768, 768, 768],
                                                    gw: [1240, 1024, 1024, 1024],
                                                    gh: [970, 768, 768, 768],
                                                    type: 'standard',
                                                    justify: '',
                                                    layout: 'fullwidth',
                                                    mh: "0"
                                                });
                                                if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider11"] !== undefined) {
                                                    window.RS_MODULES.modules["revslider11"].once = false;
                                                    window.revapi1 = undefined;
                                                    if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                                }
                                            </script>
                                        </rs-module-wrap>

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid shaha_welcome_to vc_custom_1570699938312 vc_row-has-fill vc_row-no-padding">
                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12 vc_col-has-fill sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner vc_custom_1570797105614">
                                <div class="wpb_wrapper">
                                    <div id="sc_content_267682635" class="sc_content color_style_default scheme_dark sc_content_default sc_float_center  vc_custom_1570799715612">
                                        <div class="sc_content_container">
                                            <div id="sc_icons_174295989" class="sc_icons sc_icons_default sc_icons_size_small sc_align_center  vc_custom_1507734715381">
                                                <div class="sc_icons_item">
                                                  
                                                </div>
                                            </div>
                                            {{-- Prayer time start --}}
                                            @foreach($prayers as $prayer)
                                           
                                            
                                            <div id="sc_title_2075716413" class="sc_title color_style_default sc_title_default">
                                                <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default"style=" font-family: Arial, Helvetica, sans-serif;">{{$prayer->short_title}}</h2>
                                            </div>
                                            <div class="wpb_raw_code wpb_content_element wpb_raw_html shaha_prayertimes lg_resp">
                                                <div class="wpb_wrapper">
                                                    <div class="MPwidget">
                                                    <div class="MPheader"><div class="title">
                                                        {{$prayer->long_title}}
                                                    </div>
                                                     
                                                    </div>
                                                        <table class="MPtimetable">
                                                        <tbody>
                                                        <tr class="align-center">
                                                        <td colspan="2"><div class="daterow" style="text-align:center;">@php echo date("d.m.Y"); @endphp</div></td>
                                                        </tr>
                                                        <tr>
                                                        <td>Jummah</td>
                                                        <td>{{ Carbon\Carbon::parse($prayer->jummah)->format('g:i A' ) }}</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Fajr</td>
                                                        <td>{{ Carbon\Carbon::parse($prayer->fajr)->format('g:i A' ) }}</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Dhuhr</td>
                                                        <td>{{ Carbon\Carbon::parse($prayer->dhuhr)->format('g:i A' ) }}</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Asr</td>
                                                        <td>{{ Carbon\Carbon::parse($prayer->asr)->format('g:i A' ) }}</td>
                                                        </tr>
                                                      
                                                        <tr>  
                                                        <td>Maghrib</td>
                                                        <td>{{ Carbon\Carbon::parse($prayer->maghrib)->format('g:i A' ) }}</td>
                                                        </tr>
                                                        <tr>
                                                        <td>Isha'a</td>
                                                        <td>{{ Carbon\Carbon::parse($prayer->ishaa)->format('g:i A' ) }}</td>
                                                        </tr>
                                                        </tbody>
                                                        </table>
                                                    <div class="MPfooter" style="text-align: center">
                                                        {{-- <iframe id="iframe" title="prayerWidget" class="widget-m-top" style=" height: 358px; font-size:25px; border: 1px solid #ddd;" scrolling="no" src="https://www.islamicfinder.org/prayer-widget/8347677/hanafi/1/0/18.0/17.0"> </iframe> --}}
                                                       
                                                    </div>
                                                    </div>
                                                     {{-- Prayer time end--}}
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-md-6 vc_col-xs-12 vc_col-has-fill sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner vc_custom_1570797119270">
                                <div class="wpb_wrapper">
                                    <div id="sc_content_1423568197" class="sc_content color_style_default sc_content_default sc_float_center">
                                        <div class="sc_content_container">
                                            <div id="sc_icons_1325795508" class="sc_icons sc_icons_default sc_icons_size_small sc_align_left  vc_custom_1507734731844">
                                                <div class="sc_icons_item">
                                                    <a href="#" id="" class=""><img class="logo_image" src="{{asset('upload/user_image/'.$logo->image)}}" alt="" width="100" height="50"></a>
                                                </div>
                                            </div>
                                            <div id="sc_title_1249673116" class="sc_title color_style_default sc_title_default">
                                                <h2 style=" font-family: Arial, Helvetica, sans-serif;">Welcome to the BIC Waqf Management Incorporated</h2>
                                                <div class="sc_item_descr sc_title_descr sc_align_left">
                                                    <p>The  BIC Waqf Management Incorporated is not just a mosque for prayers rather it is a community center for all.<br /> The Center is committed to preserving an Islamic identity, building and<br /> supporting a viable
                                                        Muslim community, promoting a comprehensive Islamic<br /> way of life based on the Holy Quran and the<br /> Sunnah of Prophet Muhammad.</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <a href="{{url('/donate')}}" id="sc_button_1367544505" class="sc_button color_style_link2 sc_button_default  vc_custom_1507734776040 sc_button_size_normal sc_button_icon_left"><span class="sc_button_text"><span class="sc_button_title">Become A Member</span></span></a> --}}
                                      
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-1 vc_col-lg-2 vc_col-md-2 vc_hidden-sm vc_hidden-xs sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="vc_row-full-width vc_clearfix"></div>
                    {{-- sunrise and sunset start--}}
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid  " style="background-color: black;">
            
                        @foreach($prayers as $prayer) 
                        <div style="text-align: end; padding-bottom:20px;">
                              <a id="sc_button_1367544505" class="sc_button color_style_link2 sc_button_default  vc_custom_1507734776040 sc_button_size_normal"><span class="sc_button_text"><span class="sc_button_title" style=" font-size:20px;">Sunrise  {{ Carbon\Carbon::parse($prayer->sunrise)->format('g:i A' ) }}</span></span></a>
                              <a id="sc_button_1367544505" class="sc_button color_style_link2 sc_button_default  vc_custom_1507734776040 sc_button_size_normal"><span class="sc_button_text "><span class="sc_button_title" style=" font-size:20px;">Sunset  {{ Carbon\Carbon::parse($prayer->sunset)->format('g:i A' ) }}</span></span></a>
                        </div>                                                                       
                        @endforeach                
                    </div>
                     {{-- sunrise and sunset end--}}
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1507733274655">
               
                               
                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                             
                                    <div id="sc_icons_1466341774" class="sc_icons sc_icons_default sc_icons_size_small sc_align_center  vc_custom_1507301028237">
                                        <div class="sc_icons_item">
                                            <a href="#" id="" class=""><img class="logo_image" src="{{asset('upload/user_image/'.$logo->image)}}" alt="" width="100" height="50"></a>
                                        
                                        </div>
                                    </div>
                                    <div id="sc_services_389712867" class="sc_services color_style_default sc_services_list sc_services_featured_top">
                                        <h2 class="sc_item_title sc_services_title sc_align_center sc_item_title_style_default">Our Philosophy</h2>
                                        <div class="sc_services_columns_wrap sc_item_columns sc_item_columns_4 trx_addons_columns_wrap">
                                            <div class="trx_addons_column-1_4">
                                                
                                                <div class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                   @foreach($knowledge as $item) 
                                                   <a href="#" id="" class=""><img class="logo_image"  style="height: 300px width:300px"  src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
                                                   <div class="sc_services_item_info">
                                                        <div class="sc_services_item_header">
                                                            <h6 class="sc_services_item_title"  style="font-family: sans-serif">{{$item->title}}</h6>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <p style="text-align: justify;">{{$item->description}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </div>
                                            <div class="trx_addons_column-1_4">
                                                <div class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                @foreach($spirituality as $item) 
                                                   <a href="#" id="" class=""><img class="logo_image" style="height: 300px width:300px" src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
                                                    <div class="sc_services_item_info">
                                                        <div class="sc_services_item_header">
                                                            <h6 class="sc_services_item_title"  style="font-family: sans-serif">{{$item->title}}</h6>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <p style="text-align: justify;">{{$item->description}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </div>
                                            <div class="trx_addons_column-1_4">
                                                <div class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                @foreach($community as $item) 
                                                   <a href="#" id="" class=""><img class="logo_image" style="height: 300px width:300px" src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
                                                    <div class="sc_services_item_info">
                                                        <div class="sc_services_item_header">
                                                            <h6 class="sc_services_item_title"  style="font-family: sans-serif">{{$item->title}}</h6>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <p style="text-align: justify;">{{$item->description}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </div>
                                            <div class="trx_addons_column-1_4">
                                                <div class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                                @foreach($phylosophyService as $item) 
                                                   <a href="#" id="" class=""><img class="logo_image" style="height: 300px width:300px" src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
                                                    <div class="sc_services_item_info">
                                                        <div class="sc_services_item_header">
                                                            <h6 class="sc_services_item_title"  style="font-family: sans-serif">{{$item->title}}</h6>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <p style="text-align: justify;">{{$item->description}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid shaha_support_us vc_custom_1570631044845 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div id="sc_content_784421700" class="sc_content color_style_default scheme_dark sc_content_default sc_float_center sc_align_left">
                                        <div class="sc_content_container">
                                            <div id="sc_icons_191384529" class="sc_icons sc_icons_default sc_icons_size_small sc_align_left  vc_custom_1507818842184">
                                                <div class="sc_icons_item">
                                                    {{-- icon--}}
                                                    <div>
                                                        <a href="#" id="" class=""><img class="logo_image" src="{{asset('upload/user_image/'.$logo->image)}}" alt="" width="188" height="85"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="sc_title_1411769606" class="sc_title color_style_default sc_title_default  vc_custom_1507818882346">
                                                <h2 class="sc_item_title sc_title_title sc_align_left sc_item_title_style_default" style=" font-family: Arial, Helvetica, sans-serif;">We are BIC Waqf Management. <br> We need your support.</h2>
                                            </div>
                                            <div id="sc_skills_205214232" class="sc_skills sc_skills_pie sc_skills_compact_off" data-type="pie">
                                                <div class="sc_skills_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">                          
                                  
                                                    <h3 style="font-family:sans-serif">Mission</h3>
                                                    <p>Our main motto is to develop this organization so much so that it can caret almost all the needs of the communities related with this centre.</p>
                                                    <h3 style="font-family:sans-serif">Vision</h3>
                                                    <p>The overriding vision of the Bangladeshi Islamic Centre is to be the most inclusive and successful community and voluntary sector organisation in Sandwell.
                                                     Underpinning this high level aspirational vision is our total commitment to improving the quality of life for all local residents of NSW and throughout the country.
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element  vc_custom_1507820442578">
                                                
                                            </div>
                                        </div>
                                    </div><a href="{{route('login')}}" id="sc_button_2144892328" class="sc_button color_style_link2 sc_button_default  vc_custom_1507819001483 sc_button_size_normal sc_button_icon_left"><span class="sc_button_text"><span class="sc_button_title">Donate Now</span></span></a></div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row-full-width vc_clearfix"></div>            
                    <br>
                  
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid shaha_upcoming_event vc_custom_1570699833293 vc_row-has-fill vc_row-no-padding">
                        <div class="wpb_column vc_column_container vc_col-sm-5 vc_col-has-fill sc_layouts_column_icons_position_left">
                         
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-7 vc_col-has-fill sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner vc_custom_1507721630200">
                                <div class="wpb_wrapper">
                                    <div id="sc_content_455428952" class="sc_content color_style_default scheme_dark sc_content_default sc_float_center  vc_custom_1507729642359">
                                        <div class="sc_content_container">
                                            <div id="sc_icons_646467496" class="sc_icons sc_icons_default sc_icons_size_small sc_align_center  vc_custom_1507729396560">
                                                <div class="sc_icons_item">
                                                    <a href="#" id="" class=""><img class="logo_image" src="{{asset('upload/user_image/'.$logo->image)}}" alt="" width="100" height="50"></a>
                                                </div>
                                            </div>
                                            <div id="sc_countdown_803149240" class="sc_countdown sc_countdown_default aligncenter">
                                                <h2 class="sc_item_title sc_countdown_title sc_align_center sc_item_title_style_default"  style=" font-family: Arial, Helvetica, sans-serif;">Upcoming Event</h2>
                                                <div class="sc_item_descr sc_countdown_descr sc_align_center">
                                                    <h3 class="sc_item_title sc_countdown_title sc_align_center sc_item_title_style_default"  style=" font-family: Arial, Helvetica, sans-serif;">{{$timers->title}}</h3>
                                                    <h3 class="wrap-countdown mercado-countdown" data-expire="{{ Carbon\Carbon::parse($timers->launch_date)->format('Y/m/d h:i:s') }}" style=" font-family: Arial, Helvetica, sans-serif;"></h3>
                                                </div>                                              
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1507820953301">
                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div id="sc_icons_483939427" class="sc_icons sc_icons_default sc_icons_size_small sc_align_left  vc_custom_1507821079596">
                     
                                    </div>
                                    <div id="sc_services_1348203501" class="sc_services color_style_default sc_services_default sc_services_featured_top">
                                        <h2 class="sc_item_title sc_services_title sc_align_left sc_item_title_style_default" style="font-style: normal"  style=" font-family: Arial, Helvetica, sans-serif;">Services</h2>
                                        <div class="sc_services_columns_wrap sc_item_columns sc_item_columns_3 trx_addons_columns_wrap columns_padding_bottom">
                                            <div class="trx_addons_column-1_3">
                                                <div class="sc_services_item with_content with_icon sc_services_item_featured_top">
                                                    @foreach($serviceOne as $item)
                                                    <a href="#" id="sc_services_1348203501_icon-icon-shaha-05_1"><img src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
                                                    <div class="sc_services_item_info">
                                                        
                                                            
                                                        <div class="sc_services_item_header">
                                                            <h6 class="sc_services_item_title"  style="font-family: sans-serif">{{$item->title}}</h6>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <p style="text-align:justify">{{$item->short_desc}}</p>
                                                        </div>
                                                        <div class="sc_services_item_button sc_item_button"><a href="{{route('service.one')}}" class="sc_button sc_button_default sc_button_size_normal sc_button_services">Read More</a></div>
                                                        
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            
                                            <div class="trx_addons_column-1_3">
                                                <div class="sc_services_item with_content with_icon sc_services_item_featured_top">
                                                    @foreach($serviceTwo as $item)
                                                    <a href="#" id="sc_services_1348203501_icon-icon-shaha-05_1"><img src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
                                                    <div class="sc_services_item_info">
                                                        <div class="sc_services_item_header">
                                                            <h6 class="sc_services_item_title"  style="font-family: sans-serif">{{$item->title}}</h6>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <p style="text-align:justify">{{$item->short_desc}}</p>
                                                        </div>
                                                        <div class="sc_services_item_button sc_item_button"><a href="{{route('service.two')}}" class="sc_button sc_button_default sc_button_size_normal sc_button_services">Read More</a></div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="trx_addons_column-1_3">
                                                <div class="sc_services_item with_content with_icon sc_services_item_featured_top">
                                                    @foreach($serviceThree as $item)
                                                    <a href="#" id="sc_services_1348203501_icon-icon-shaha-05_1"><img src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
                                                    <div class="sc_services_item_info">
                                                        <div class="sc_services_item_header">
                                                            <h6 class="sc_services_item_title"  style="font-family: sans-serif">{{$item->title}}</h6>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <p style="text-align:justify">{{$item->short_desc}}</p>
                                                        </div>
                                                        <div class="sc_services_item_button sc_item_button"><a href="{{route('service.three')}} " class="sc_button sc_button_default sc_button_size_normal sc_button_services">Read More</a></div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid shaha_islamic_school vc_custom_1570700817977 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div id="sc_content_2140211870" class="sc_content color_style_default scheme_dark sc_content_default sc_float_center">
                                        <div class="sc_content_container">
                                            <div id="sc_icons_2086979148" class="sc_icons sc_icons_default sc_icons_size_small sc_align_left  vc_custom_1507895088836">
                                              
                                            </div>
                                            <div id="sc_title_2010495489" class="sc_title color_style_default sc_title_default  vc_custom_1507895117592">
                                                <h2 class="sc_item_title sc_title_title sc_align_left sc_item_title_style_default"style=" font-family: Arial, Helvetica, sans-serif;">{{$school->title}}</h2>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p><span style="color: white;">{{$school->description}}</span></p>
                                                </div>
                                            </div>
                                            <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey vc_custom_1507895144453  vc_custom_1507895144453"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td><span style="color: white;">School Calendar</span></td>
                                                                <td><span style="color: white;">Fall Semester</span></td>
                                                                <td><span style="color: white;">Spring Semester</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="trx_addons_accent">First day</span></td>
                                                                <td>{{$school->first_day_fall}}</td>
                                                                <td>{{$school->first_day_spring}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="trx_addons_accent">Last day</span></td>
                                                                <td>{{$school->last_day_fall}}</td>
                                                                <td>{{$school->last_day_spring}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="trx_addons_accent">Late registration</span></td>
                                                                <td>{{$school->late_registration_fall}}</td>
                                                                <td>{{$school->late_registration_spring}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1508770288498">
                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    
                                    <div id="sc_title_249780979" class="sc_title color_style_default sc_title_default  vc_custom_1508770302045">
                                        <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default"  style=" font-family: Arial, Helvetica, sans-serif;">Our Recent News</h2>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                                            <div class="vc_column-inner vc_custom_1508770306686">
                                                <div class="wpb_wrapper">
                                                    <div class="sc_blogger color_style_default sc_blogger_default">
                                                        <div class="sc_blogger_content sc_item_content">
                                                            <div class="sc_blogger_item post_format_standard post-275 post type-post status-publish format-standard has-post-thumbnail hentry category-grace category-special-months-times">
                                                                @foreach ($newsOne as $item)  
                                                                <div class="post_featured with_thumb hover_dots sc_blogger_item_featured"><img width="760" height="428" src="{{asset('public/frontend')}}/wp-content/uploads/2017/07/image-31-760x428.jpg" class="attachment-shaha-thumb-big size-shaha-thumb-big wp-post-image"
                                                                        sizes="(max-width: 760px) 100vw, 760px" />
                                                                    <div class="mask"></div><a href="" aria-hidden="true" class="icons"><span></span><span></span><span></span></a></div>
                                                                <div class="sc_blogger_item_content entry-content">
                                                                    <div class="sc_blogger_item_header entry-header">
                                                                        <div class="post_meta"> <span class="post_meta_item post_date"><a href="#">{{$item->date}}</a></span>
                                                                        </div>
                                                                        <h5 class="sc_blogger_item_title entry-title" style="font-family: sans-serif">{{$item->title}}</h5>
                                                                    </div>
                                                                    <div class="sc_blogger_item_excerpt">
                                                                        <div class="sc_blogger_item_excerpt_text">
                                                                            <p>{{$item->short_desc}}&#8230;</p>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="sc_services_item_button sc_item_button"><a href="{{route('news.one')}} " class="sc_button sc_button_default sc_button_size_normal sc_button_services">Read More</a></div>
                                                                </div>
                                                                 @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill sc_layouts_column_icons_position_left">
                                            <div class="vc_column-inner vc_custom_1508770314861">
                                                <div class="wpb_wrapper">
                                                    <div id="sc_content_594484332" class="sc_content color_style_default sc_content_default sc_float_center  vc_custom_1507304680987">
                                                        <div class="sc_content_container">
                                                            <div class="sc_blogger color_style_default sc_blogger_plain">
                                                                <div class="sc_blogger_content sc_item_content">
                                                                    <div class="sc_blogger_item post_format_standard post-185 post type-post status-publish format-standard has-post-thumbnail hentry category-important category-islamic-identity category-knowledge tag-islam tag-quran">
                                                                        @foreach ($newsTwo as $key=> $item)
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h4 class="sc_blogger_item_title entry-title">{{$item->title}}</h4>
                                                                            <h5 class="sc_blogger_item_title entry-title"><a href="{{route('news.two')}}" rel="bookmark">{{$item->short_desc}}</a></h5>
                                                                            <div
                                                                                class="post_meta"> <span class="post_meta_item post_date"><a href="#">{{$item->date}}</a></span>                              
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                        @foreach ($newsThree as $key=> $item)
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h4 class="sc_blogger_item_title entry-title">{{$item->title}}</h4>
                                                                            <h5 class="sc_blogger_item_title entry-title"><a href="{{route('news.three')}}" rel="bookmark">{{$item->short_desc}}</a></h5>
                                                                            <div
                                                                                class="post_meta"> <span class="post_meta_item post_date"><a href="#">{{$item->date}}</a></span>                                                                                   
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                        @foreach ($newsFour as $key=> $item)
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h4 class="sc_blogger_item_title entry-title">{{$item->title}}</h4>
                                                                            <h5 class="sc_blogger_item_title entry-title"><a href="{{route('news.four')}}" rel="bookmark">{{$item->short_desc}}</a></h5>
                                                                            <div
                                                                                class="post_meta"> <span class="post_meta_item post_date"><a href="#">{{$item->date}}</a></span>                                                                                  
                                                                             </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <!-- <div class="sc_blogger_item post_format_standard post-185 post type-post status-publish format-standard has-post-thumbnail hentry category-important category-islamic-identity category-knowledge tag-islam tag-quran">
                                                                        
                                                                    </div>
                                                                    <div class="sc_blogger_item post_format_standard post-185 post type-post status-publish format-standard has-post-thumbnail hentry category-important category-islamic-identity category-knowledge tag-islam tag-quran">
                                                                     
                                                                    </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid shaha_skills_counter vc_custom_1570699988801 vc_row-has-fill">
            <div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
                <div class="vc_column-inner vc_custom_1508770186332">
                    <div class="wpb_wrapper">
                        <div id="sc_content_1847391801" class="sc_content color_style_default scheme_dark sc_content_default sc_float_center">
                            <div class="sc_content_container">
                                <div id="sc_skills_1147981069" class="sc_skills sc_skills_counter  vc_custom_1506686087636" data-type="counter">
                                    <div class="sc_skills_column trx_addons_column-1_1">
                                        <div class="sc_skills_item_wrap">
                                            <div class="sc_skills_item">
                                                <div class="sc_skills_total" data-start="0" data-stop="62" data-step="1" data-max="100" data-speed="40" data-duration="2480" data-ed="" style="color: #ffffff">0</div>
                                            </div>
                                            <div class="sc_skills_item_title">Diverse</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_text_column wpb_content_element  vc_custom_1506690084515">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;"><span class="trx_addons_dark">Community with over 62 different<br />
nationalities represented.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
                <div class="vc_column-inner vc_custom_1508770190818">
                    <div class="wpb_wrapper">
                        <div id="sc_content_1677474881" class="sc_content color_style_default scheme_dark sc_content_default sc_float_center">
                            <div class="sc_content_container">
                                <div id="sc_skills_1342078246" class="sc_skills sc_skills_counter  vc_custom_1509107261362" data-type="counter">
                                    <div class="sc_skills_column trx_addons_column-1_1">
                                        <div class="sc_skills_item_wrap">
                                            <div class="sc_skills_item">
                                                <div class="sc_skills_total" data-start="0" data-stop="1200" data-step="12" data-max="1200" data-speed="27" data-duration="2700" data-ed="" style="color: #ffffff">0</div>
                                            </div>
                                            <div class="sc_skills_item_title">Growing</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_text_column wpb_content_element  vc_custom_1506690093407">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;"><span class="trx_addons_dark">Over 1,200 men and women attend the<br />
weekly Jumma prayer service.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
                <div class="vc_column-inner vc_custom_1508770195761">
                    <div class="wpb_wrapper">
                        <div id="sc_content_932313326" class="sc_content color_style_default scheme_dark sc_content_default sc_float_center">
                            <div class="sc_content_container">
                                <div id="sc_skills_1616490258" class="sc_skills sc_skills_counter  vc_custom_1506686093019" data-type="counter">
                                    <div class="sc_skills_column trx_addons_column-1_1">
                                        <div class="sc_skills_item_wrap">
                                            <div class="sc_skills_item">
                                                <div class="sc_skills_total" data-start="0" data-stop="60 " data-step="1" data-max="100" data-speed="38" data-duration="2280" data-ed="%" style="color: #ffffff">0%</div>
                                            </div>
                                            <div class="sc_skills_item_title">Young</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_text_column wpb_content_element  vc_custom_1509368259444">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;"><span class="trx_addons_dark">60 percent of our community<br />
is under the age of 34.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>
    </article>
</div>
</div>
<!-- content_wrap end  -->
</div>
<!-- page_content_wrap end -->
{{-- CountDown Timer --}}
<script src="{{asset('public/backend/build/js/jquery.countdown.min.js')}}"></script>
<script>
   ;(function($) {
    
    var MERCADO_JS = {
      init: function(){
         this.mercado_countdown();
         
      }, 
    mercado_countdown: function() {
         if($(".mercado-countdown").length > 0){
                $(".mercado-countdown").each( function(index, el){
                  var _this = $(this),
                  _expire = _this.data('expire');
               _this.countdown(_expire, function(event) {
                        $(this).html( event.strftime('<span><b>%D</b> Days</span> <span><b>%-H</b> Hrs</span> <span><b>%M</b> Mins</span> <span><b>%S</b> Secs</span>'));
                    });
                });
         }
      },
   
   }
   
      window.onload = function () {
         MERCADO_JS.init();
      }
   
      })(window.Zepto || window.jQuery, window, document);
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>




