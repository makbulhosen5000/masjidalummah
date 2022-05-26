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
                  @if(isset($editServiceOne))
                  <h5 class="display-5">Edit EditServiceOne</h5>
                    @else
                    <h5 class="display-5">Create ServiceOne</h5>
                  @endif
                  <a href="{{route('servises.one.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> ServiceOne List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{(@$editServiceOne)?route('servises.one.update',$editServiceOne->id):route('servises.one.store')}} " method="POST" enctype="multipart/form-data">
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
                    <label for="my-input">ServiceOne Title</label>
                    <input type="text" class="form-control" name="title" id="" value="{{@$editServiceOne->title}}" type="text" placeholder="Enter Your Title" required>
                    <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">ServiceOne Short Description</label>
                  <textarea name="short_desc"  id="" type="text" rows="7" cols="73" placeholder="Please Write Your Short Description" required>{{@$editServiceOne->short_desc}}</textarea>
                 
                  <font style="color:red">{{($errors->has('short_desc'))?($errors->first('short_desc')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">ServiceOne Long Description</label>
                  <textarea name="long_desc"  id="" type="text" rows="15" cols="73" placeholder="Please Write Your Long Description" required>{{@$editServiceOne->long_desc}}</textarea>
                  <font style="color:red">{{($errors->has('long_desc'))?($errors->first('long_desc')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">ServiceOne Image</label>
                  <input id="my-input" class="form-control" type="file" name="image" value="{{@$editServiceOne->image}}" required>
                     <font style="color:red">{{($errors->has('image'))?($errors->first('image')):''}} </font>
                </div>
                <div class="form-group">
                  <button type="submit" id="button" class="btn btn-success">{{(@$editServiceOne)?"Update":"Submit"}} </button>
                </div>

            </form>
        </div>
    </div>

</div>
{{-- card end --}}


  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection