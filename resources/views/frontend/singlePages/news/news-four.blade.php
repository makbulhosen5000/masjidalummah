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
        @foreach($newsFour as $item)
        <h3 style="text-align: center;font-family:'Times New Roman', Times, serif">{{$item->short_desc}} </h3>
        <p>{{$item->long_desc}}</p>
    @endforeach
    </div>

   
  
@include('frontend.layouts.footer')