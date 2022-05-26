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
<div class="container">
   <div class="vc_row-full-width vc_clearfix"></div>
   <div class="vc_row wpb_row vc_row-fluid vc_custom_1507733274655">
     
    <div id="sc_icons_1466341774" class="sc_icons sc_icons_default sc_icons_size_small sc_align_center  vc_custom_1507301028237">
        <div class="sc_icons_item">
            <a href="#" id="" class=""><img class="logo_image" style="height: 200px;width:250px" src="{{asset('upload/user_image/'.$logo->image)}}" alt=""></a>
        
        </div>
    </div>
              
       <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
           <div class="vc_column-inner">
               <div class="wpb_wrapper">
                   <div id="sc_services_389712867" class="sc_services color_style_default sc_services_list sc_services_featured_top">
                       <h2 class="sc_item_title sc_services_title sc_align_center sc_item_title_style_default">Our Philosophy</h2>
                       <div class="sc_services_columns_wrap sc_item_columns sc_item_columns_4 trx_addons_columns_wrap">
                           <div class="trx_addons_column-1_4">
                               
                               <div class="sc_services_item without_content with_icon sc_services_item_featured_top">
                                  @foreach($knowledge as $item) 
                                  <a href="#" id="" class=""><img class="logo_image" style="height: 300px;" src="{{asset('upload/user_image/'.$item->image)}}"  alt=""></a>
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
                                  <a href="#" id="" class=""><img class="logo_image" style="height: 300px" src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
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
                                  <a href="#" id="" class=""><img class="logo_image" style="height: 300px" src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
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
                                  <a href="#" id="" class=""><img class="logo_image" style="height: 300px" src="{{asset('upload/user_image/'.$item->image)}}" alt=""></a>
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
   
</div> 
{{-- container end --}}
@include('frontend.layouts.footer')