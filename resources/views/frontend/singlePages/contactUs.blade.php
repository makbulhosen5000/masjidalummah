<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="{{asset('public/frontend/')}}/css/bootstrap.min.css" integrity="" crossorigin="anonymous">

@include('frontend.layouts.header')
<style>
    img {
    width: 100%;
    height: 400px;
    }
</style>
<div class="img">
    <img src="{{asset('public/frontend')}}/img/bg-18.jpg " alt="">
    <h1 style="margin-left:15px; border-bottom:black solid 2px; width:300px;font-family: Arial, Helvetica, sans-serif;">Contact Us</h1>
</div>
<!-- contact us section start --> 
<section class="contact-us">
        <!-- form start -->
        <form action="{{route('contact.store')}}" method="POST">
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

            <div class="row bg-success text-light">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="my-input">Name</label>
                    <input id="my-input" class="form-control" type="text" name="name"placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                  <label for="my-input">Phone</label>
                  <input id="my-input" class="form-control" type="tel" name="phone" placeholder="Enter your Phone"required>
                </div>
                <div class="form-group">
                  <label for="my-input">E-Mail</label>
                  <input id="my-input" class="form-control" type="email" name="email" placeholder="Enter your Email" required>
                  </div>
              </div>
              <div class="col-md-6 pt-3">
                <div class="form-group">
                <label for="my-input">Massage</label>
                  <textarea name="massage" id="" rows="10" cols="60" placeholder="Please Write your Massage Here" required></textarea>
                </div>
                <div class="form-group">
                <button type="submit" class=" btn btn-warning float-center">Send Message</button>
                </div>
              </div>
            </div> 
          </form>
          <!-- form end -->
            <div class="row">
                <div class="col-md-12">
                <h3 style="padding-top: 10px; padding-bottom: 5px; border-bottom:black solid 2px; width:695px; font-family: Arial, Helvetica, sans-serif;">BIC Waqf Management Incorporated Location:</h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d320025.6927390317!2d150.99019654852586!3d-33.85467168574308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bd07dd1d2e69%3A0x5017d681632cac0!2zU2VmdG9uIOCmqOCmv-CmiSDgprjgpr7gpongpqUg4KaT4Kav4Ka84KeH4Kay4KeN4Ka4IDIxNjIsIOCmheCmuOCnjeCmn-CnjeCmsOCnh-CmsuCmv-Cmr-CmvOCmvg!5e0!3m2!1sbn!2sbd!4v1652090974895!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>      
  </section>
 <!-- contactUs section end -->
 {{-- tostr message --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
</script>
 @include('frontend.layouts.footer')





