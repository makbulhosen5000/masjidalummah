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
                    <h5 class="display-5">Edit Donators</h5>
                    <a href="{{route('donates.view')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Donators List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            {{-- form start --}}
            <form action="{{route('donates.update',$editDonate->id)}} " method="POST" >
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
                <label for="my-input">Age</label>
                <input id="my-input" class="form-control" type="text" name="age" value="{{ $editDonate->age }}">
                <font style="color:red">{{($errors->has('age'))?($errors->first('age')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Title</label>
                <input id="my-input" class="form-control" type="text" name="title" value="{{ $editDonate->title }}">
                <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">First_Name</label>
                <input id="my-input" class="form-control" type="text" name="first_name" value="{{ $editDonate->first_name }}">
                <font style="color:red">{{($errors->has('first_name'))?($errors->first('first_name')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Middle_Name</label>
                <input id="my-input" class="form-control" type="text" name="middle_name"  value="{{ $editDonate->middle_name }}">
                <font style="color:red">{{($errors->has('middle_name'))?($errors->first('middle_name')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Family_Name</label>
                <input id="my-input" class="form-control" type="text" name="family_name" value="{{ $editDonate->family_name }}">
                <font style="color:red">{{($errors->has('family_name'))?($errors->first('family_name')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Number & Street Name</label>
                <input id="my-input" class="form-control" type="text" name="num_street_name" value="{{ $editDonate->num_street_name }}">
                <font style="color:red">{{($errors->has('num_street_name'))?($errors->first('num_street_name')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Suburb</label>
                <input id="my-input" class="form-control" type="text" name="suburb"  value="{{ $editDonate->suburb }}">
                <font style="color:red">{{($errors->has('suburb'))?($errors->first('suburb')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">State</label>
                <input id="my-input" class="form-control" type="text" name="state"  value="{{ $editDonate->state }}">
                <font style="color:red">{{($errors->has('state'))?($errors->first('state')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Post Code</label>
                <input id="my-input" class="form-control" type="text" name="post_code"  value="{{ $editDonate->post_code }}">
                <font style="color:red">{{($errors->has('post_code'))?($errors->first('post_code')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Email</label>
                <input id="my-input" class="form-control" type="email" name="email"  value="{{ $editDonate->email }}">
                <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Home Phone Number</label>
                <input id="my-input" class="form-control" type="tel" name="home_phone_num"  value="{{ $editDonate->home_phone_num }}">
                <font style="color:red">{{($errors->has('home_phone_num'))?($errors->first('home_phone_num')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Mobile Phone Number</label>
                <input id="my-input" class="form-control" type="tel" name="mobile_phone_num"  value="{{ $editDonate->mobile_phone_num }}">
                <font style="color:red">{{($errors->has('mobile_phone_num'))?($errors->first('mobile_phone_num')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Work Phone_Number</label>
                <input id="my-input" class="form-control" type="tel" name="work_phone_num"  value="{{ $editDonate->work_phone_num }}">
                <font style="color:red">{{($errors->has('work_phone_num'))?($errors->first('work_phone_num')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Applicant Signature</label>
                <input id="my-input" class="form-control" type="text" name="applicant_signature"  value="{{ $editDonate->applicant_signature }}">
                <font style="color:red">{{($errors->has('applicant_signature'))?($errors->first('applicant_signature')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Applicant's Date</label>
                <input id="my-input" class="form-control" type="date" name="applicant_date"  value="{{ $editDonate->applicant_date }}">
                <font style="color:red">{{($errors->has('applicant_date'))?($errors->first('applicant_date')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Nominator Full Name</label>
                <input id="my-input" class="form-control" type="text" name="nominator_full_name"  value="{{ $editDonate->nominator_full_name }}">
                <font style="color:red">{{($errors->has('nominator_full_name'))?($errors->first('nominator_full_name')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Nominator Membership No</label>
                <input id="my-input" class="form-control" type="text" name="nominator_membership_no"  value="{{ $editDonate->nominator_membership_no }}">
                <font style="color:red">{{($errors->has('nominator_membership_no'))?($errors->first('nominator_membership_no')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Nominator's Signature</label>
                <input id="my-input" class="form-control" type="text" name="nominator_signature"  value="{{ $editDonate->nominator_signature }}">
                <font style="color:red">{{($errors->has('nominator_signature'))?($errors->first('nominator_signature')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Nominator Date</label>
                <input id="my-input" class="form-control" type="date" name="nominator_date"  value="{{ $editDonate->nominator_date }}">
                <font style="color:red">{{($errors->has('nominator_date'))?($errors->first('nominator_date')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Seconder Full_Name</label>
                <input id="my-input" class="form-control" type="text" name="seconder_full_name" value="{{ $editDonate->seconder_full_name }}">
                <font style="color:red">{{($errors->has('seconder_full_name'))?($errors->first('seconder_full_name')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Seconder_Membership_No</label>
                <input id="my-input" class="form-control" type="text" name="seconder_membership_no" value="{{ $editDonate->seconder_membership_no }}">
                <font style="color:red">{{($errors->has('seconder_membership_no'))?($errors->first('seconder_membership_no')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Seconder's Signature</label>
                <input id="my-input" class="form-control" type="text" name="seconder_signature" value="{{ $editDonate->seconder_signature }}">
                <font style="color:red">{{($errors->has('seconder_signature'))?($errors->first('seconder_signature')):''}} </font>
            </div>
            <div class="form-group">
                <label for="my-input">Seconder's Date</label>
                <input id="my-input" class="form-control" type="date" name="seconder_date"value="{{ $editDonate->seconder_date }}">
                <font style="color:red">{{($errors->has('seconder_date'))?($errors->first('seconder_date')):''}} </font>
            </div>
           
               
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Updated</button>
                </div>

            </form>
            {{-- form End --}}
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
