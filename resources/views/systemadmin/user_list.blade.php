@extends('backend.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users</h1>
        </div>
        <div class="col-sm-6 text-sm">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">View Users</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <hr />
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
                <strong>Success:</strong> {{ session('success') }}
              </div>

              @elseif (Session::has('error'))
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                  <i class="fa fa-times"></i>
                </button>
                   <i class="fas  fa-xmark fa-lg"></i>
                 <strong>Error: </strong> {{ session('error') }}
              </div>

              @elseif ($errors->any())
              {!! implode('', $errors->all('<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                  <i class="fa fa-times"></i>
                </button>   <i class="fas  fa-xmark fa-lg"></i><strong> :message</strong>
              </div>')) !!}
              @endif
            </div>
            <!-- <div class="card-header">

              <a href="{{ route('users.create') }}" class="btn btn-success btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i> Add User</a>


            </div> -->

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover nowrap " style="width:100%">
                <thead>
                  <tr>

                    <th>Name</th>
                    <th>User Role</th>
                    <th>Barangay</th>
                    <th>Status</th>
                    <th data-orderable="false">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($all as $users)
                  <tr>
                    <td>{{ $users->name }}</td>

                    <td>{{$users->role}}</td>
                    <td>{{$users->barangay}}</td>
                    <td>
                      @if($users->status == 1)
                      <form action="{{ route('users.update', $users->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="firstname" value="{{ $users->firstname }}">
                        <input type="hidden" name="middlename" value="{{ $users->middlename }}">
                        <input type="hidden" name="lastname" value="{{ $users->lastname }}">
                        <input type="hidden" name="username" value="{{ $users->username }}">
                        <input type="hidden" name="email" value="{{ $users->email }}">
                        <input type="hidden" name="role" value="{{ $users->role }}">
                        <input type="hidden" name="status" value="0">
                        <input type="hidden" name="barangay" value="{{ $users->barangay }}">
                        <input type="hidden" name="profile" value="{{ $users->profile }}">
                        <button type="submit" class="btn btn-success">Active</button>
                      </form>
                      @else
                      <form action="{{ route('users.update', $users->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="firstname" value="{{ $users->firstname }}">
                        <input type="hidden" name="middlename" value="{{ $users->middlename }}">
                        <input type="hidden" name="lastname" value="{{ $users->lastname }}">
                        <input type="hidden" name="username" value="{{ $users->username }}">
                        <input type="hidden" name="email" value="{{ $users->email }}">
                        <input type="hidden" name="role" value="{{ $users->role }}">
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="barangay" value="{{ $users->barangay }}">
                        <input type="hidden" name="profile" value="{{ $users->profile }}">
                        <button type="submit" class="btn btn-danger">Inactive</button>
                      </form>
                      @endif
                    </td>
                    <td>
                      <!-- <a href="#" button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#viewmodal{{$users->id}}" title="Edit"><i class="fa-solid fa-eye"></i> </button></a> -->
                      <a href="{{route('users.show',$users->id)}}" button class="btn btn-sm btn-info"  title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>


                    </td>

                  </tr>

                  @endforeach


                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script>
            $(document).ready(function() {
              $('.delete_form').on('submit', function() {
                if (confirm("Are you sure you want to archive this user?")) {
                  return true;
                } else {
                  return false;
                }
              });
            });
            
          </script> -->
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
<!-- Add Modal -->



</div>


@endsection