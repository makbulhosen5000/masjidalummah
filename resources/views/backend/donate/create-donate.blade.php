@extends('backend.layouts.admin-master')
@section('content')

<!-- Donate section start -->
<div class="content-wrapper">
    <div class="card">
        <div class="head bg-muted">
            <div class="card-body ">
                <div class="row mt-5">
                    <div class="col-md-12  d-flex justify-content-between align-items-center">
                        <h5 class="display-5">Create Donator</h5>
                      <a href="{{route('donates.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> Donator List</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
    
            <div class="col-md-6 offset-3 pt-3">
                {{-- form start --}}
                <form action="{{route('donates.store')}} " method="POST">
                    @csrf
                    @if(Session::has('success'))
                    <div class="btn btn-success">{{Session::get('success')}} </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="my-input"><span class="give-required-indicator text-warning">*</span>Age</label>
                        <input id="my-input" class="form-control" type="text" name="age" value="{{ old('age') }}" placeholder="Please Enter Your Age" required>
                        <font style="color:red">{{($errors->has('age'))?($errors->first('age')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Title</label>
                        <input id="my-input" class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Please Enter Your Title">
                        <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>First_Name</label>
                        <input id="my-input" class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Please Enter Your First Name" required>
                        <font style="color:red">{{($errors->has('first_name'))?($errors->first('first_name')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Middle_Name</label>
                        <input id="my-input" class="form-control" type="text" name="middle_name" value="{{ old('middle_name') }}" placeholder="Please Enter Your Middle Name" required>
                        <font style="color:red">{{($errors->has('middle_name'))?($errors->first('middle_name')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Family_Name</label>
                        <input id="my-input" class="form-control" type="text" name="family_name" value="{{ old('family_name') }}" placeholder="Please Enter Your Familly Name" required>
                        <font style="color:red">{{($errors->has('family_name'))?($errors->first('family_name')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Number & Street Name</label>
                        <input id="my-input" class="form-control" type="text" name="num_street_name" value="{{ old('num_street_name') }}" placeholder="Please Enter Your  number & Street Name">
                        <font style="color:red">{{($errors->has('num_street_name'))?($errors->first('num_street_name')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Suburb</label>
                        <input id="my-input" class="form-control" type="text" name="suburb" value="{{ old('suburb') }}"placeholder="Please Enter Your Suburb">
                        <font style="color:red">{{($errors->has('suburb'))?($errors->first('suburb')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>State</label>
                        <input id="my-input" class="form-control" type="text" name="state" value="{{ old('state') }}" placeholder="Please Enter Your State" required>
                        <font style="color:red">{{($errors->has('state'))?($errors->first('state')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Post Code</label>
                        <input id="my-input" class="form-control" type="text" name="post_code" value="{{ old('post_code') }}" placeholder="Please Enter Your Post Code" required>
                        <font style="color:red">{{($errors->has('post_code'))?($errors->first('post_code')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Email</label>
                        <input id="my-input" class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Please Enter Your Email" required>
                        <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Home Phone Number</label>
                        <input id="my-input" class="form-control" type="tel" name="home_phone_num" value="{{ old('home_phone_num') }}" placeholder="Please  Enter Your Home Phone Number" required>
                        <font style="color:red">{{($errors->has('home_phone_num'))?($errors->first('home_phone_num')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Mobile Phone Number</label>
                        <input id="my-input" class="form-control" type="tel" name="mobile_phone_num" value="{{ old('mobile_phone_num') }}" placeholder="Please  Enter Your Mobile Phone Number" required>
                        <font style="color:red">{{($errors->has('mobile_phone_num'))?($errors->first('mobile_phone_num')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Work Phone_Number</label>
                        <input id="my-input" class="form-control" type="tel" name="work_phone_num" value="{{ old('work_phone_num') }}" placeholder="Please  Enter Your Work Phone Number" required>
                        <font style="color:red">{{($errors->has('work_phone_num'))?($errors->first('work_phone_num')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Applicant Signature</label>
                        <input id="my-input" class="form-control" type="text" name="applicant_signature" value="{{ old('applicant_signature') }}" placeholder="Please, Enter  Your Signature" required>
                        <font style="color:red">{{($errors->has('applicant_signature'))?($errors->first('applicant_signature')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Applicant's Date</label>
                        <input id="my-input" class="form-control" type="date" name="applicant_date" value="{{ old('applicant_date') }}" placeholder="Please, Enter Date" required>
                        <font style="color:red">{{($errors->has('applicant_date'))?($errors->first('applicant_date')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input"><span class="text-warning">*</span>Nominator Full Name</label>
                        <input id="my-input" class="form-control" type="text" name="nominator_full_name" value="{{ old('nominator_full_name') }}" placeholder="Please  Enter Nominator's Full Name" required>
                        <font style="color:red">{{($errors->has('nominator_full_name'))?($errors->first('nominator_full_name')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Nominator Membership No</label>
                        <input id="my-input" class="form-control" type="text" name="nominator_membership_no" value="{{ old('nominator_membership_no') }}" placeholder="Please Enter  Nominator's Membership No">
                        <font style="color:red">{{($errors->has('nominator_membership_no'))?($errors->first('nominator_membership_no')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Nominator's Signature</label>
                        <input id="my-input" class="form-control" type="text" name="nominator_signature" value="{{ old('nominator_signature') }}" placeholder="Please Enter Nominator's Singature">
                        <font style="color:red">{{($errors->has('nominator_signature'))?($errors->first('nominator_signature')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Nominator Date</label>
                        <input id="my-input" class="form-control" type="date" name="nominator_date" value="{{ old('nominator_membership_no') }}" placeholder="Please Enter Nominator's Date">
                        <font style="color:red">{{($errors->has('nominator_date'))?($errors->first('nominator_date')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Seconder Full_Name</label>
                        <input id="my-input" class="form-control" type="text" name="seconder_full_name" value="{{ old('seconder_full_name') }}" placeholder="Please Enter  Seconder Full Name">
                        <font style="color:red">{{($errors->has('seconder_full_name'))?($errors->first('seconder_full_name')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Seconder_Membership_No</label>
                        <input id="my-input" class="form-control" type="text" name="seconder_membership_no" value="{{ old('seconder_membership_no') }}" placeholder="Please, Enter Seconder's Membership No">
                        <font style="color:red">{{($errors->has('seconder_membership_no'))?($errors->first('seconder_membership_no')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Seconder's Signature</label>
                        <input id="my-input" class="form-control" type="text" name="seconder_signature" value="{{ old('seconder_signature') }}" placeholder="Please Enter Seconder's Signature">
                        <font style="color:red">{{($errors->has('seconder_signature'))?($errors->first('seconder_signature')):''}} </font>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Seconder's Date</label>
                        <input id="my-input" class="form-control" type="date" name="seconder_date" value="{{ old('seconder_date') }}" placeholder="Please Enter Seconder's Date">
                        <font style="color:red">{{($errors->has('seconder_date'))?($errors->first('seconder_date')):''}} </font>
                    </div>
                   
                    <div class="form-group">
                      <button type="submit" id="button" class="btn btn-success">Submit</button>
                    </div>
    
                </form>
                {{-- form end --}}
            </div>
        </div>
    
    
    
    
    </div>
    {{-- card end --}}
    
      </div>
     <!-- Content Wrapper. Contains page content end-->  
     @endsection
    <!-- Donate section end -->
