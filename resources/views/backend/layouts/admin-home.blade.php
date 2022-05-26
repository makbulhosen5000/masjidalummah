@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- bank section start --}}
    @if(Auth::user()->usertype=='donator')
    <div class="back-section">
      <div class="text-center">
        <h4>Account Name: BIC Waqf Management Inc.</h4>
        <h4>BSB Number: BSB#012220</h4>
        <h4>Account : 1555-73954</h4>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="col-md-6 offset-3 pt-3">
            <h1 class="text-center display-4 text-danger"> Bank Infomation</h1>
            {{-- form start --}}
            <form action="{{route('banks.store')}} " method="POST">
                @csrf
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
                    <label for="my-input"><span class="give-required-indicator text-warning">*</span>Doner Account Name</label>
                    <input id="my-input" class="form-control" type="text" name="acccount_name" value="{{ old('acccount_name') }}" placeholder="Please Enter Your Accont Name" required>
                    <font style="color:red">{{($errors->has('acccount_name'))?($errors->first('acccount_name')):''}} </font>
                </div>
                <div class="form-group">
                  <label for="my-input"><span class="give-required-indicator text-warning">*</span>Doner Account Number</label>
                  <input id="my-input" class="form-control" type="text" name="account_no" value="{{ old('account_no') }}" placeholder="Please Enter Your Accont Number" required>
                  <font style="color:red">{{($errors->has('account_no'))?($errors->first('account_no')):''}} </font>
              </div>
              <div class="form-group">
                <label for="my-input"><span class="give-required-indicator text-warning">*</span>Doner Account Transaction Number</label>
                <input id="my-input" class="form-control" type="text" name="transaction_no" value="{{ old('transaction_no') }}" placeholder="Please Enter Your Transaction Number" required>
                <font style="color:red">{{($errors->has('transaction_no'))?($errors->first('transaction_no')):''}} </font>
              </div>
              <div class="form-group">
                <label for="my-input"><span class="give-required-indicator text-warning">*</span>Doner Amount Transaction Date</label>
                <input id="my-input" class="form-control" type="date" name="transaction_date" value="{{ old('transaction_no') }}" required>
                <font style="color:red">{{($errors->has('transaction_date'))?($errors->first('transaction_date')):''}} </font>
              </div>
              <div class="form-group">
                <label for="my-input"><span class="give-required-indicator text-warning">*</span>Amount</label>
                <input id="my-input" class="form-control" type="number" name="amount" value="{{ old('amount') }}" placeholder="Please Enter Your Amount" required>
                <font style="color:red">{{($errors->has('amount'))?($errors->first('amount')):''}} </font>
              </div>
              <div class="form-group">
                <label for="my-input">Message</label>
                <textarea class="form-control" name="message" id=""  type="text"  rows="10" placeholder="Write Your Massage Here"></textarea>
                <font style="color:red">{{($errors->has('message'))?($errors->first('message')):''}} </font>
              </div>
      
              <button class="btn btn-success mt-1 mb-2" type="submit">Submit</button>
            </form>
            {{-- form end --}}
        </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    @endif
    {{-- bank section end --}}

    {{-- for admin --}}
    @if(Auth::user()->usertype=='admin')
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New E-Mail</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endif

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
