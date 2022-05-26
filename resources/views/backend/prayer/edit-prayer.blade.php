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
                    <h5 class="display-5">Edit Contact</h5>
                    <a href="{{route('prayers.view')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Prayers Time List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{route('prayers.update',$editPrayerTime->id)}} " method="POST" >
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
                    <input id="my-input" class="form-control" type="text" name="short_title" value='{{$editPrayerTime->short_title}}'>
                    <font style="color:red">{{($errors->has('short_title'))?($errors->first('short_title')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Long_Title</label>
                    <input id="my-input" class="form-control" type="text" name="long_title" value='{{$editPrayerTime->long_title}}'>
                    <font style="color:red">{{($errors->has('long_title'))?($errors->first('long_title')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Date</label>
                    <input id="my-input" class="form-control" type="date" name="date" value='{{$editPrayerTime->date}}'>
                    <font style="color:red">{{($errors->has('date'))?($errors->first('date')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Jummah</label>
                    <input id="my-input" class="form-control" type="time" name="jummah" value='{{$editPrayerTime->fajr}}'>
                    <font style="color:red">{{($errors->has('jummah'))?($errors->first('jummah')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Fajr</label>
                    <input id="my-input" class="form-control" type="time" name="fajr" value='{{$editPrayerTime->fajr}}'>
                    <font style="color:red">{{($errors->has('fajr'))?($errors->first('fajr')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Sunrise</label>
                    <input id="my-input" class="form-control" type="time" name="sunrise" value='{{$editPrayerTime->sunrise}}'>
                    <font style="color:red">{{($errors->has('sunrise'))?($errors->first('sunrise')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Dhuhr</label>
                    <input id="my-input" class="form-control" type="time" name="dhuhr" value='{{$editPrayerTime->dhuhr}}'>
                    <font style="color:red">{{($errors->has('dhuhr'))?($errors->first('dhuhr')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Asr</label>
                    <input id="my-input" class="form-control" type="time" name="asr" value='{{$editPrayerTime->asr}}'>
                    <font style="color:red">{{($errors->has('asr'))?($errors->first('asr')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Sunset</label>
                    <input id="my-input" class="form-control" type="time" name="sunset" value='{{$editPrayerTime->sunset}}'>
                    <font style="color:red">{{($errors->has('sunset'))?($errors->first('sunset')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Maghrib</label>
                    <input id="my-input" class="form-control" type="time" name="maghrib" value='{{$editPrayerTime->maghrib}}'>
                    <font style="color:red">{{($errors->has('maghrib'))?($errors->first('maghrib')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Ishaa</label>
                    <input id="my-input" class="form-control" type="time" name="ishaa" value='{{$editPrayerTime->ishaa}}'>
                    <font style="color:red">{{($errors->has('ishaa'))?($errors->first('sunrise')):''}} </font>
                </div>
               
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Updated</button>
                </div>

            </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
