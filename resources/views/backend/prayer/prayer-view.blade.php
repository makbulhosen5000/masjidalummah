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
                    <h5 class="display-5">Prayer Time List</h5>
 
                  <a href="{{route('prayers.create')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create Prayer Time</a>

                </div>
            </div>
        </div>
    </div>

  
            <table id="example2" class="table table-bordered table-hover text-center">
                {{-- table start --}}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Short_Title</th>
                        <th>Long_Title</th>
                        <th>Date</th>
                        <th>Jummah</th>
                        <th>Fajr</th>
                        <th>Sunrise</th>
                        <th>Dhuhr</th>
                        <th>Asr</th>
                        <th>Sunset</th>
                        <th>Maghrib</th>
                        <th>Isha'a</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  
               @foreach ($showPrayerTime as $key=> $item)
                 
                       <tr>
                         <td>{{$key++}} </td>
                         <td>{{$item->short_title}} </td>
                         <td>{{$item->long_title}} </td>
                         <td>{{$item->date}} </td>
                         <td>{{$item->jummah}} </td>
                         <td>{{$item->fajr}} </td>
                         <td>{{$item->sunrise}} </td>
                         <td>{{$item->dhuhr}} </td>
                         <td>{{$item->asr}} </td>
                         <td>{{$item->sunset}} </td>
                         <td>{{$item->maghrib}} </td>
                         <td>{{$item->ishaa}} </td>
                         <td>
                          <a href="{{route('prayers.edit',$item->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-user-edit"></i></a>
                          <a href="{{route('prayers.destroy',$item->id)}} " id="delete" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
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
