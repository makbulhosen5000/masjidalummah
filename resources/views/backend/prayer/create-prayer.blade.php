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
                    <h5 class="display-5">Create Contact</h5>
                  <a href="{{route('prayers.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> Prayer Time List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{route('prayers.store')}}"method="POST">
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
                    <label for="my-input">Short_Title</label>
                    <input id="my-input" class="form-control" type="text" name="short_title" value="{{ old('short_title') }}" placeholder="Enter Short Title" required>
                    <font style="color:red">{{($errors->has('short_title'))?($errors->first('short_title')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Long_Title</label>
                    <input id="my-input" class="form-control" type="text" name="long_title" value="{{ old('long_title') }}" placeholder="Enter Long Title" required>
                    <font style="color:red">{{($errors->has('long_title'))?($errors->first('long_title')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Date</label>
                    <input id="my-input" class="form-control" type="date" name="date" value="{{ old('date') }}" placeholder="Enter  Time of Jummah" required>
                    <font style="color:red">{{($errors->has('date'))?($errors->first('date')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Jummah</label>
                    <input id="my-input" class="form-control" type="time" name="jummah" value="{{ old('jummah') }}" placeholder="Enter Time OF jummah" required>
                    <font style="color:red">{{($errors->has('jummah'))?($errors->first('jummah')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Fajr</label>
                    <input id="my-input" class="form-control" type="time" name="fajr" value="{{ old('fajr') }}" placeholder="Enter Time OF Fojr" required>
                    <font style="color:red">{{($errors->has('fajr'))?($errors->first('fajr')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Sunrise</label>
                    <input id="my-input" class="form-control" type="time" name="sunrise" value="{{ old('sunrise') }}" placeholder="Enter Time OF Sunrise" required>
                    <font style="color:red">{{($errors->has('sunrise'))?($errors->first('sunrise')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Dhuhr</label>
                    <input id="my-input" class="form-control" type="time" name="dhuhr" value="{{ old('dhuhr') }}" placeholder="Enter Time OF Dhuhr" required>
                    <font style="color:red">{{($errors->has('dhuhr'))?($errors->first('dhuhr')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Asr</label>
                    <input id="my-input" class="form-control" type="time" name="asr" value="{{ old('asr') }}"placeholder="Enter Time OF Asr" required>
                    <font style="color:red">{{($errors->has('asr'))?($errors->first('asr')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Sunset</label>
                    <input id="my-input" class="form-control" type="time" name="sunset" value="{{ old('sunset') }}"placeholder="Enter Time OF Sunset" required>
                    <font style="color:red">{{($errors->has('sunset'))?($errors->first('sunset')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Maghrib</label>
                    <input id="my-input" class="form-control" type="time" name="maghrib" value="{{ old('maghrib') }}" placeholder="Enter Time OF Maghrib" required>
                    <font style="color:red">{{($errors->has('maghrib'))?($errors->first('maghrib')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Isha'a</label>
                    <input id="my-input" class="form-control" type="time" name="ishaa" value="{{ old('ishaa') }}" placeholder="Enter Time OF Isha'a" required>
                    <font style="color:red">{{($errors->has('ishaa'))?($errors->first('ishaa')):''}} </font>
                </div>
               
                <div class="form-group">
                  <button type="submit" id="button" class="btn btn-success">Submit</button>
                </div>

            </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
