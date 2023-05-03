@extends('backend.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add User </h1>
                </div>
                <div class="col-sm-6 text-sm">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Add User</li>
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
                        <div class="card-header">

                            <h4>Account Information</h4>
                        </div>




                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>First Name:</label>
                                            <input name="firstname" id="firstname" class="form-control input-sm" type="text" placeholder="First Name" required autocomplete="given-name" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Middle Name:</label>
                                            <input name="middlename" id="middlename" class="form-control input-sm" type="text" placeholder="Middle Name" autocomplete="additional-name" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Last Name:</label>
                                            <input name="lastname" id="lastname" class="form-control input-sm" type="text" placeholder="Last Name" required autocomplete="family-name" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input name="email" id="email" class="form-control input-sm" type="email" placeholder="Email" required autocomplete="email" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Password: </label> <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Minimum of 8 characters and contain a mixture of uppercase and lowercase letters, numbers, or special characters"></i>

                                            <input oncopy="return false" id="password" onpaste="return false" oncut="return false" name="password" class="form-control input-sm" type="password" placeholder="Password" required autocomplete="new-password" />

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Confirm Password:</label>
                                            <input oncopy="return false" id="pasword_confirmation" onpaste="return false" oncut="return false" name="password_confirmation" class="form-control input-sm" type="password" placeholder="Confirm Password" required autocomplete="new-password" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>User Role:</label>
                                            <select class="form-control" name="role" id="role" required>
                                                <option hidden>Select Role</option>
                                                <option value="System Admin">System Admin</option>
                                                <option value="Enumerator">Enumerator</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <select class="form-control" name="status" id="status" required>
                                                <option value="1">Activate</option>
                                                <option value="0">Deactivate</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <input type="hidden" name="status" value="1">

                                </div>

                                <div class="modal-footer">
                                    <button type="submit" id="formSubmit" class="btn btn-primary btn-sm">Submit Information</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection