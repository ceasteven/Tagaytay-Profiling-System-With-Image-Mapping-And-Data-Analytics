@extends('backend.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Activity Logs</h1>
        </div>
        <div class="col-sm-6 text-sm">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Activity Logs </li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <hr/>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 5000)">
                     @if (Session::has('success'))
                     <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                           <i class="fa fa-times"></i>
                        </button>
                        <i class="fas fa-check faa-pulse animated"></i>
                        <strong></strong> {{ session('success') }}
                     </div>

                     @elseif (Session::has('error'))
                     <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                           <i class="fa fa-times"></i>
                        </button>
                          <i class="fas  fa-xmark fa-lg"></i>
                         <strong></strong> {{ session('error') }}
                     </div>

                     @elseif ($errors->any())
                     {!! implode('', $errors->all('<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                           <i class="fa fa-times"></i>
                        </button>   <i class="fas  fa-xmark fa-lg"></i><strong> :message</strong>
                     </div>')) !!}
                     @endif
                  </div>
          <div class="card-header">
          <a href="{{ route('logsclear') }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete Activity Logs</a>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover nowrap " style="width:100%">
                <thead>
                  <tr role="row">
                    <th>Name</th>
                    <th>Action</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($activityLog as $key => $users)
                  <tr>
                    <td>{{$users->log_name}}</td>
                    <td>{{$users->description}}</td>
                    <td>{{$users->updated_at}}</td>
                    </td>

                    </td>

                  </tr>

                  @endforeach


                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection