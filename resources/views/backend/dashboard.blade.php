@extends('backend.app')
@section('content')

<div class="content-wrapper" style="min-height: 539px;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 ">
          @auth
          <h4>{{auth()->user()->role}} Dashboard <small style="color:#999;">Welcome</small></h4>
          @endauth
        </div><!-- /.col -->
        <div class="col-sm-6 text-sm"> 
          
          <ol class="breadcrumb float-sm-right" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item">Dashboard</li>
          </ol>
        </div><!-- /.col -->
        
      </div><!-- /.row -->
     
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
     
      <div class="row">
        @if(auth()->user()->role=='System Administrator')
        @include('systemadmin.dashboard')
        @include('backend.chart')
        @else
        @include('enumerator.dashboard')
        @include('backend.chart')
        <!-- ./col -->
        @endif
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
@endsection