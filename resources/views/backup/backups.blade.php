@extends('backend.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Backups</h1>
        </div>
        <div class="col-sm-6 text-sm">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Backups</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <hr />
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 5000)">
          @if (Session::has('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
              <i class="fa fa-times"></i>
            </button>
            <i class="fas fa-check faa-pulse animated"></i>
            <strong>Success:</strong> {{ session('success') }}
          </div>

          @elseif (Session::has('error'))
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
              <i class="fa fa-times"></i>
            </button>
            <i class="fas fa-exclamation-triangle faa-pulse animated"></i>
            <strong>Error:</strong> {{ session('error') }}
          </div>

          @elseif ($errors->any())
          {!! implode('', $errors->all('<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
              <i class="fa fa-times"></i>
            </button><i class="fas fa-exclamation-triangle faa-pulse animated"></i><strong>:message</strong>
          </div>')) !!}
          @endif
        </div>
        <div class="card-header d-flex justify-content-between align-items-center">
    <form action="{{ route('backup.create') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-success">Create New Backup</button>
    </form>
</div>

<div class="card-body">
    <div class="row mb-3">
      
    </div>
    <table class="table table-bordered  table-hover dataTable nowrap " width="100%" id="backup-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Size</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($backups as $backup)
                <tr>
                    <td>{{ $backup['name'] }}</td>
                    <td>{{ $backup['date'] }}</td>
                    <td>{{ $backup['size'] }}</td>
                    <td>
                        <form action="{{ route('backup.destroy', $backup['name']) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this backup? This action cannot be undone.')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



      </div>
    </div>
  </section>
</div>

@endsection