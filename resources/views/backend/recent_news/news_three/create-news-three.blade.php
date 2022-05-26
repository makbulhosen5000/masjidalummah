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
                  @if(isset($editNewsThree))
                  <h5 class="display-5">Edit editNewsThree</h5>
                    @else
                    <h5 class="display-5">Create NewsThree</h5>
                  @endif
                  <a href="{{route('news.three.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> News Three List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{(@$editNewsThree)?route('news.three.update',$editNewsThree->id):route('news.three.store')}} " method="POST" enctype="multipart/form-data">
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
                    <label for="my-input">NewsThree Title</label>
                    <input type="text" class="form-control" name="title" id="" value="{{@$editNewsThree->title}}" type="text" placeholder="Enter Your Title" required>
                    <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">NewsThree Short Description</label>
                  <textarea name="short_desc"  id="" type="text" rows="7" cols="73" placeholder="The short desc must not be greater than 100 characters." required>{{@$editNewsThree->short_desc}}</textarea>
                 
                  <font style="color:red">{{($errors->has('short_desc'))?($errors->first('short_desc')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">NewsThree Long Description</label>
                  <textarea name="long_desc"  id="" type="text" rows="15" cols="73" placeholder="Please Write Your Long Description" required>{{@$editNewsThree->long_desc}}</textarea>
                  <font style="color:red">{{($errors->has('long_desc'))?($errors->first('long_desc')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">Date</label>
                  <input type="date" class="form-control" name="date" id="" value="{{@$editNewsThree->date}}" required>
                  <font style="color:red">{{($errors->has('date'))?($errors->first('date')):''}} </font>
              </div>
              <div class="form-group">
                  <button type="submit" id="button" class="btn btn-success">{{(@$editNewsThree)?"Update":"Submit"}} </button>
              </div>

            </form>
        </div>
    </div>

</div>
{{-- card end --}}


  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection