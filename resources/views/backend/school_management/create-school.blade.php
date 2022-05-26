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
                  @if(isset($editSchoolManagement))
                  <h5 class="display-5">Edit SchoolManagement</h5>
                    @else
                    <h5 class="display-5">Create SchoolManagement</h5>
                  @endif
                  <a href="{{route('schools.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> SchoolManagement List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{(@$editSchoolManagement)?route('schools.update',$editSchoolManagement->id):route('schools.store')}} " method="POST" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" name="title" id="" value="{{@$editSchoolManagement->title}}" placeholder="Enter Your Title" required>
                    <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">Description</label>
                  <textarea name="description"  id="" type="text" rows="7" cols="53" placeholder=" The description must not be greater than 500 characters." required>{{@$editSchoolManagement->description}}</textarea>
                 
                  <font style="color:red">{{($errors->has('description'))?($errors->first('description')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">First Day of Registration for Fall</label>
                  <input type="date" class="form-control" name="first_day_fall" id="" value="{{@$editSchoolManagement->first_day_fall}}" required>
                  <font style="color:red">{{($errors->has('first_day_fall'))?($errors->first('first_day_fall')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">First Day of Registration for Spring</label>
                  <input type="date" class="form-control" name="first_day_spring" id="" value="{{@$editSchoolManagement->first_day_spring}}" required>
                  <font style="color:red">{{($errors->has('first_day_spring'))?($errors->first('first_day_spring')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">Last Day of Registration for Fall</label>
                  <input type="date" class="form-control" name="last_day_fall" id="" value="{{@$editSchoolManagement->last_day_fall}}" required>
                  <font style="color:red">{{($errors->has('last_day_fall'))?($errors->first('last_day_fall')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">Last Day of Registration for Spring</label>
                  <input type="date" class="form-control" name="last_day_spring" id="" value="{{@$editSchoolManagement->last_day_spring}}" required>
                  <font style="color:red">{{($errors->has('last_day_spring'))?($errors->first('last_day_spring')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">Late Registration for Fall</label>
                  <input type="date" class="form-control" name="late_registration_fall" id="" value="{{@$editSchoolManagement->late_registration_fall}}" required>
                  <font style="color:red">{{($errors->has('late_registration_fall'))?($errors->first('late_registration_fall')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input">Late Registration for Spring</label>
                  <input type="date" class="form-control" name="late_registration_spring" id="" value="{{@$editSchoolManagement->late_registration_spring}}" required>
                  <font style="color:red">{{($errors->has('late_registration_spring'))?($errors->first('late_registration_spring')):''}} </font>
                </div>


                <div class="form-group">
                  <button type="submit" id="button" class="btn btn-success">{{(@$editSchoolManagement)?"Update":"Submit"}} </button>
                </div>

            </form>
        </div>
    </div>

</div>
{{-- card end --}}


  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection