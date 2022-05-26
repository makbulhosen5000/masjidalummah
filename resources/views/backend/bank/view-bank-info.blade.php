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
              <li class="breadcrumb-item"><a href="#" class="text-dark" >Home</a></li>
              <li class="breadcrumb-item active text-dark">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
    <div class="card-body ">
        <div class="row">
            <div class="col-md-12  d-flex justify-content-between align-items-center">
                <h5 class="display-5">Donator Bank Information</h5>

              <a href="{{route('donates.create')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create Donator</a>

            </div>
        </div>
    </div>
            {{-- table start --}}
              <table class="table table-bordered table-hover text-center">               
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Acccount Name</th>
                          <th>Acccount No</th>
                          <th>Transaction No</th>
                          <th>Receiving Date</th>
                          <th>Massage</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($showBank as $key=>$item)
                      <tr>
                          <td>{{++$key}}</td>
                          <td>{{$item->acccount_name}}</td>
                          <td>{{$item->account_no}}</td>
                          <td>{{$item->transaction_no}}</td>
                          <td>{{$item->transaction_date}}</td>
                          <td>{{$item->message}}</td>
                          <td>
                              <a href="#" class="btn btn-warning" title="Edit"><i class="fa fa-user-edit"></i></a>
                              <a href="#" id="delete" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
            {{-- table end --}}
</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
