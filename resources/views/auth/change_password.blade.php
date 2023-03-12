@extends('backend.app')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Change Password</h2>
                        </div>

                        <form action="{{ route('update_password') }}" method="POST">
                            @csrf
                            <div class="card-body">
                            <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
                                @if (session('status'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
                                    {{ session('status') }}
                                </div>
                                @elseif (session('error'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
                                    {{ session('error') }}
                                </div>
                                @endif
                            </div>
                                <div class="mb-3">
                                    <label for="oldpassword" class="form-label">Old Password</label>
                                    <input oncopy="return false" onpaste="return false" oncut="return false" name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" placeholder="Old Password" required>
                                    @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="newPasswordInput" class="form-label">New Password</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Minimum of 8 characters and contain a mixture of uppercase letters, lowercase letters, numbers, and special characters"></i>
                                    <input oncopy="return false" onpaste="return false" oncut="return false" name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput" placeholder="New Password" required>
                                    @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                    <input oncopy="return false" onpaste="return false" oncut="return false" name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput" placeholder="Confirm New Password" required>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button class="btn btn-success">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection