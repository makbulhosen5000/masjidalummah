@include('frontend.layouts.header')
<style>
    img {
    width: 100%;
    height: 400px;
    }
</style>

   <div class="img">
    <img src="{{asset('public/frontend')}}/img/bg-19.jpg" alt="">
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

   
  
@include('frontend.layouts.footer')