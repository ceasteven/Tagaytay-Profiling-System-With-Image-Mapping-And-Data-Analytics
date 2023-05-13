@extends('backend.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Inactive Users</h1>
        </div>
        <div class="col-sm-6 text-sm">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">View Inactive Users</li>
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
                
                <strong>Error:</strong> {{ session('error') }}
              </div>

              @elseif ($errors->any())
              {!! implode('', $errors->all('<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                  <i class="fa fa-times"></i>
                </button><strong>:message</strong>
              </div>')) !!}
              @endif
            </div>
            <div class="card-header">

              <a href="{{ route('users.create') }}" class="btn btn-success btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i> Add User</a>


            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover nowrap " style="width:100%">
                <thead>
                  <tr>

                    <th>Name</th>
                    <th>User Role</th>
                    <th>Status</th>
                    <th data-orderable="false">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($inactive as $users)
                  <tr>
                    <td>{{ $users->name }}</td>

                    <td>{{$users->role}}</td>
                    <td>
        @if($users->status == 0)
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
                <button type="submit" class="btn btn-danger">Inactive</button>
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
                <input type="hidden" name="status" value="0">
                <button type="submit" class="btn btn-danger">Active</button>
            </form>
        @endif
    </td>
        <td>
                      <!-- <a href="#" button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#viewmodal{{$users->id}}" title="Edit"><i class="fa-solid fa-eye"></i> </button></a> -->
                      <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-target="#editmodal{{$users->id}}" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>


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
@foreach ($inactive as $users)
<div class="modal fade text-left" id="editmodal{{$users->id}}" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">{{ __('Edit User\'s Information') }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <form action="{{ route('users.update', $users->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <label>First Name:</label>
              <input name="firstname" class="form-control input-sm" type="text" placeholder="Enter First Name" value="{{$users->firstname}}" required />
            </div>
            <div class="form-group">
              <label>Middle Name:</label>
              <input name="middlename" class="form-control input-sm" type="text" placeholder="Enter Middle Name" value="{{$users->middlename}}" />
            </div>
            <div class="form-group">
              <label>Last Name:</label>
              <input name="lastname" class="form-control input-sm" type="text" placeholder="Enter Last Name" value="{{$users->lastname}}" required />
            </div>

            <div class="form-group">
              <label>Username:</label> <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Must contain a mixture of letters numbers, dash and underscore."></i>
              <input name="username" class="form-control input-sm" type="username" placeholder="Change Username" value="{{$users->username}}" required autocomplete />
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input name="email" class="form-control input-sm" type="email" placeholder="Change Email" value="{{$users->email}}" required autocomplete />
            </div>
            <div class="form-group">
              <label>New Password:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Minimum of 8 characters and contain a mixture of uppercase and lowercase letters, numbers, or special characters"></i>
              <input name="password" class="form-control input-sm" type="password" placeholder="New Password" autocomplete="new-password" />
            </div>
            <div class="form-group">
              <label>Confirm New Password:</label>
              <input name="password_confirmation" class="form-control input-sm" type="password" placeholder="Confirm New Password" autocomplete="new-password" />
            </div>
            <div class="form-group">
              <label> User Role:</label>
              <select class="form-control" name="role" value="{{$users->role}}">
                <option hidden>Select Role</option>
                <option value="System Administrator" {{ $users->role == 'System Administrator' ? 'selected':'' }}>System Administrator</option>
                <option value="Enumerator" {{ $users->role == 'Enumerator' ? 'selected':'' }}>Enumerator</option>
              </select>
            </div>
            <input type="hidden" name="status" value="{{ $users->status }}">

            <!-- <div class="form-group">
              <label>Status:</label>
              <select class="form-control" name="status" value="{{$users->role}}">
                <option value="1" {{ $users->status == '1' ? 'selected':'' }}>Active </option>
                <option value="0" {{ $users->status == ' 0' ? 'selected':'' }}>Inactive</option>
              </select>
            </div>
          </div> -->

            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endforeach
@endsection