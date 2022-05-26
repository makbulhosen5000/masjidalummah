@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
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
                    <h5 class="display-5">SchoolManagement List</h5>
                  <a href="{{route('schools.create')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create SchoolManagement</a>
                </div>
            </div>
        </div>
    </div>
     <!-- /.card -->

     <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped text-center">
                  <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>First_Day of Registraition for Fall</th>
                            <th>First_Day of Registraition for Spring</th>
                            <th>Last_Day of Registraition for Fall</th>
                            <th>Last_Day of Registraition for spring</th>
                            <th>Late Registraition for Fall</th>
                            <th>Late Registraition for Spring</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody style="text-align:justify">
                        @foreach ($schoolManagement as $key=> $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->first_day_fall}}</td>
                            <td>{{$item->first_day_spring}}</td>
                            <td>{{$item->last_day_fall}}</td>
                            <td>{{$item->last_day_spring}}</td>
                            <td>{{$item->late_registration_fall}}</td>
                            <td>{{$item->late_registration_spring}}</td>
                            <td>
                                <a href="{{route('schools.edit',$item->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-user-edit"></i></a>
                                <a href="{{route('schools.destroy',$item->id)}} " id="delete" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                  </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection