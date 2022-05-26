@include('frontend.layouts.header')

<style>
    img {
    width: 100%;
    height: 400px;
    }
</style>

   <div class="img">
    <img src="{{asset('public/frontend')}}/img/mos2.jpg" alt="">
   </div>
    <div class="container">
        @foreach($serviceThree as $item)
        <h3 style="text-align: center;font-family:sans-serif">{{$item->title}} </h3>
        <p>{{$item->long_desc}}</p>
    @endforeach
    </div>

   
  
@include('frontend.layouts.footer')