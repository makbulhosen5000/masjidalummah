@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-muted">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-dark" >Home</a></li>
              <li class="breadcrumb-item active text-dark">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
    <div class="head bg-muted">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-12  d-flex justify-content-between align-items-center">
                  @if(isset($editData))
                <h5 class="display-5">Edit Contact</h5>
                  @else
                  <h5 class="display-5">Create Contact</h5>
                  @endif
                  <a href="{{route('contacts.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> Contact List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{(@$editData)?route('contacts.update',$editData->id):route('contacts.store')}} " method="POST" enctype="multipart/form-data">   
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
                <div class="form-group">
                    <label for="my-input"> <span style="color:red">*</span> Address</label>
                    <input id="my-input" class="form-control" type="text" name="address" placeholder="Enter Your Address" value="{{$editData->address}}" required>
                    <font style="color:red">{{($errors->has('address'))?($errors->first('address')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input"><span style="color:red">*</span> Phone</label>
                    <input id="my-input" class="form-control" type="tel" name="phone" placeholder="Enter Your Phone" value="{{$editData->phone}}" required>
                       <font style="color:red">{{($errors->has('phone'))?($errors->first('phone')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input"><span style="color:red">*</span> Email</label>
                    <input id="my-input" class="form-control" type="email" name="email" placeholder="Enter Your Email"value="{{$editData->email}}" required>
                       <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Facebook</label>
                    <input id="my-input" class="form-control" type="text" name="facebook" placeholder="Enter Your Facebook Link"value="{{$editData->facebook}}" required>
                       <font style="color:red">{{($errors->has('facebook'))?($errors->first('facebook')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Twitter</label>
                    <input id="my-input" class="form-control" type="text" name="twitter" placeholder="Enter Your Twitter Link"value="{{$editData->twitter}}" required>
                       <font style="color:red">{{($errors->has('twitter'))?($errors->first('twitter')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Linkedin</label>
                    <input id="my-input" class="form-control" type="text" name="linkedin" placeholder="Enter Your Linkedin Link" value="{{$editData->linkedin}}" required>
                    <font style="color:red">{{($errors->has('linkedin'))?($errors->first('linkedin')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Instagram</label>
                    <input id="my-input" class="form-control" type="text" name="instagram" placeholder="Enter Your Instagram Link" value="{{$editData->address}}"required>
                       <font style="color:red">{{($errors->has('instagram'))?($errors->first('instagram')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">YouTube</label>
                    <input id="my-input" class="form-control" type="text" name="youtube" placeholder="Enter Your Youtube Link"value="{{$editData->youtube}}" required>
                       <font style="color:red">{{($errors->has('youtube'))?($errors->first('youtube')):''}} </font>
                </div>            
                <div class="form-group">
                <button type="submit" id="button" class="btn btn-success">{{(@$editData)?"Update":"Submit"}} </button>
                </div>

            </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
