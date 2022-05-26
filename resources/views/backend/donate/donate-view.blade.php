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
    <div class="head bg-muted">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-12  d-flex justify-content-between align-items-center">
                    <h5 class="display-5">Donator List</h5>
 
                  <a href="#" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create Donator</a>

                </div>
            </div>
        </div>
    </div>

            {{-- table start --}}
              <table id="example2" class="table table-responsive table-bordered table-hover text-center">               
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Age</th>
                          <th>Title</th>
                          <th>First Name</th>
                          <th>Middle Name</th>
                          <th>Family_Name</th>
                          <th>Num_Street_Name</th>
                          <th>Suburb</th>
                          <th>State</th>
                          <th>Post Code</th>
                          <th>Email</th>
                          <th>Home Phone Number</th>
                          <th>Mobile Phone Number</th>
                          <th>Work Phone Number</th>
                          <th>Applicant Signature</th>
                          <th>Applicant Date</th>
                          <th>Nominator Full Name</th>
                          <th>Nominator Membership No</th>
                          <th>Nominator Signature</th>
                          <th>Nominator Date</th>
                          <th>Seconder Full Name</th>
                          <th>Seconder Membership No</th>
                          <th>Seconder_Signature</th>
                          <th>seconder_date</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($showDonate as $key=>$item)
                      <tr>
                          <td>{{++$key}}</td>
                          <td>{{$item->age}}</td>
                          <td>{{$item->title}}</td>
                          <td>{{$item->first_name}}</td>
                          <td>{{$item->middle_name}}</td>
                          <td>{{$item->family_name}}</td>
                          <td>{{$item->num_street_name}}</td>
                          <td>{{$item->suburb}}</td>
                          <td>{{$item->state}}</td>
                          <td>{{$item->post_code}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->home_phone_num}}</td>
                          <td>{{$item->mobile_phone_num}}</td>
                          <td>{{$item->work_phone_num}}</td>
                          <td>{{$item->applicant_signature}}</td>
                          <td>{{$item->applicant_date}}</td>
                          <td>{{$item->nominator_full_name}}</td>
                          <td>{{$item->nominator_membership_no}}</td>
                          <td>{{$item->nominator_signature}}</td>
                          <td>{{$item->nominator_date}}</td>
                          <td>{{$item->seconder_full_name}}</td>
                          <td>{{$item->seconder_membership_no}}</td>
                          <td>{{$item->seconder_signature}}</td>
                          <td>{{$item->seconder_date}}</td>
                         
                          <td>
                          @if(Auth::user()->usertype=='admin')
                              <a href="{{route('donates.edit',$item->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-user-edit"></i></a>
                              <a href="{{route('donates.destroy',$item->id)}}" id="delete" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                          @endif
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
