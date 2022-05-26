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
                  @if(isset($editWhatsapp))
                  <h5 class="display-5">Edit editWhatsapp</h5>
                    @else
                    <h5 class="display-5">Create Whatsapp</h5>
                  @endif
                  <a href="{{route('whatsapp.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> WhatsApp List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{(@$editWhatsapp)?route('whatsapp.update',$editWhatsapp->id):route('whatsapp.store')}} " method="POST" enctype="multipart/form-data">
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
                    <label for="my-input">WhatsApp Link</label>
                    <input type="url" class="form-control" name="whatsapp" id="" value="{{@$editWhatsapp->whatsapp}}" placeholder="Enter Your WhatsApp Link" required>
                    <font style="color:red">{{($errors->has('whatsapp'))?($errors->first('whatsapp')):''}} </font>
                </div> 
                <div class="form-group">
                  <button type="submit" id="button" class="btn btn-success">{{(@$editWhatsapp)?"Update":"Submit"}} </button>
                </div>          
            </form>
        </div>
    </div>

</div>
{{-- card end --}}


  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection