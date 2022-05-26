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
                  <h5 class="display-5">Edit PhylosophyService</h5>
                    @else
                    <h5 class="display-5">Create PhylosophyService</h5>
                  @endif
                  <a href="{{route('phylosophy.services.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> PhylosophyService View</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{(@$editData)?route('phylosophy.services.update',$editData->id):route('phylosophy.services.store')}} " method="POST" enctype="multipart/form-data">
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
                    <label for="my-input">Title</label>
                    <input type="text" class="form-control" name="title" id="" value="{{@$editData->title}}" placeholder="Enter Your Title" required>
                    <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">Short Description</label>
                  <textarea name="description"  id="" type="text" rows="10" cols="53" placeholder="Write Your Description" required>{{@$editData->description}}</textarea>
                 
                  <font style="color:red">{{($errors->has('short_desc'))?($errors->first('short_desc')):''}} </font>
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <img src="{{(!empty($editData->image))?url('upload/user_image/'.$editData->image):url('upload/user_image/no_image_found.png')}}" id="image" style="width:405px;height:200px">
                  <input id="my-input" class="form-control" type="file" name="image" id="file" onchange="showImage(this,'image')" value=''>
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