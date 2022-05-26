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
                    <h5 class="display-5">Email Send</h5> 
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{url('send')}}" method="POST">
                @csrf
                @if(Session::has('success'))
                <div class="btn btn-success">{{Session::get('success')}} </div>
                @endif
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
                  <label for="my-input">Greeting</label>
                  <input id="my-input" class="form-control" type="text" name="greeting" value="{{old('greeting')}}" placeholder="Hello! Dear User" required>
                </div>
                <div class="form-group">
                  <label for="my-input">Body</label>
                  <input id="my-input" class="form-control" type="text" name="body" value="{{old('body')}}" placeholder="There is new post for you" required>
                </div>
                <div class="form-group">
                  <label for="my-input">Massage</label>
                  <input id="my-input" class="form-control" type="text" name="actiontext" value="{{old('actiontext')}}" placeholder="Please read our post" required>
                </div>
                <div class="form-group">
                  <label for="my-input">URL</label>
                  <input id="my-input" class="form-control" type="url" name="url" value="{{old('url')}}" placeholder="http://masjidalummah.com.au/news" required>
                </div>
                <div class="form-group">
                  <label for="my-input">Lastline</label>
                  <input id="my-input" class="form-control" type="text" name="lastline" value="{{old('lastline')}}" placeholder="thank you so much for cooperationg with us" required>
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
