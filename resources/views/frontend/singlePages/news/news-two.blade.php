@include('frontend.layouts.header')

<style>
    img {
    width: 100%;
    height: 400px;
    }
</style>

   <div class="img">
    <img src="{{asset('public/frontend')}}/img/e.jpg " alt="">
   </div>
    <div class="container">
        @foreach($newsTwo as $item)
        <h3 style="text-align: center" style="text-align: justify; font-family:sans-serif">{{$item->short_desc}} </h3>
        <p>{{$item->long_desc}}</p>
    @endforeach
    </div>

   
  
@include('frontend.layouts.footer')