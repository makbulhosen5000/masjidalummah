@include('frontend.layouts.header')

<style>
    img {
    width: 100%;
    height: 400px;
    }
</style>
   <div class="img">
    <img src="{{asset('public/frontend')}}/img/bg-18.jpg " alt="">
   </div>
    <div class="container">
        @foreach($newsOne as $item)
        <p style="padding-top: 20px">{{$item->long_desc}}</p>
    @endforeach
    </div>

   
  
@include('frontend.layouts.footer')