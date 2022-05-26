@include('frontend.layouts.header')

<style>
    img {
    width: 100%;
    height: 400px;
    }
    h1{
      text-align: center;
    }
</style>

<!-- about us section start -->
   <div class="img">
    <img src="{{asset('public/frontend')}}/img/bg-18.jpg " alt="">
   </div>
    <div class="container">
        <h1>About Us</h1>
        <p>{{$about_us->description}}</p>
    </div>

<!-- about us section end -->

@include('frontend.layouts.footer')







