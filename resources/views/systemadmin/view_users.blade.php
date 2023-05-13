@extends('backend.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit User </h1>
                </div>
                <div class="col-sm-6 text-sm">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
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


                        <form action="{{ route('users.update',$users->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-md-3 border-right">
                                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                            <img class="rounded-circle mt-5" height="250" width="250" src="{{asset('dist/img/'.$users->profile)}}" id="image_preview">
                                            <label for="profile" class="font-weight-bold mt-3">
                                                Change the profile image:
                                            </label>
                                            <input type="file" name="profile" id="profile" class="form-control" onchange="previewImage()">
                                        </div>
                                    </div>


                                    <div class="col-md-9">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Account Information:</h4>
                                        </div>

                                        <div class="row">
                                            <div class="col-3 col-md-4">
                                                <div class="form-group">
                                                    <label>First Name:</label>
                                                    <input name="firstname" id="firstname" class="form-control input-sm" type="text" placeholder="First Name" value="{{$users->firstname}}" required autocomplete="given-name" />
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-4">
                                                <div class="form-group">
                                                    <label>Middle Name:</label>
                                                    <input name="middlename" id="middlename" class="form-control input-sm" type="text" placeholder="Middle Name" value="{{$users->middlename}}" autocomplete="additional-name" />
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-4">
                                                <div class="form-group">
                                                    <label>Last Name:</label>
                                                    <input name="lastname" id="lastname" class="form-control input-sm" type="text" placeholder="Last Name" value="{{$users->lastname}}" required autocomplete="family-name" />
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-4">
                                                <div class="form-group">
                                                    <label>Username:</label> <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Must contain a mixture of letters numbers, dash and underscore."></i>
                                                    <input name="username" class="form-control input-sm" type="username" placeholder="Change Username" value="{{$users->username}}" required autocomplete />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input name="email" id="email" class="form-control input-sm" type="email" placeholder="Change email"value="{{$users->email}}" required autocomplete="email" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>New Password:</label> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Minimum of 8 characters and contain a mixture of uppercase and lowercase letters, numbers, or special characters"></i>
                                                    <input oncopy="return false" id="password" onpaste="return false" oncut="return false" name="password" class="form-control input-sm" type="password" placeholder="New Password" autocomplete="new-password" />

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Confirm New Password:</label>
                                                    <input oncopy="return false" id="password" onpaste="return false" oncut="return false" name="password_confirmation" class="form-control input-sm" type="password" placeholder="Confirm New Password" autocomplete="new-password" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>User Role:</label>

                                                    <select class="form-control" name="role" value="{{$users->role}}" id="role">
                                                        <option hidden>Select Role</option>
                                                        <option value="System Administrator" {{ $users->role == 'System Administrator' ? 'selected':'' }}>System Administrator</option>
                                                        <option value="Enumerator" {{ $users->role == 'Enumerator' ? 'selected':'' }}>Enumerator</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <input type="hidden" name="status" value="{{ $users->status }}">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Barangay:</label>
                                                    <select class="form-control" name="barangay" value="{{$users->barangay}} " id ="barangay">
                                                        <option value="" {{$users->barangay == '' ? 'selected':'' }}> Select barangay </option>
                                                        <option value="Asisan" {{$users->barangay == 'Asisan' ? 'selected':'' }}>Asisan</option>
                                                        <option value="Bagong Tubig" {{$users->barangay == 'Bagong Tubig' ? 'selected':'' }}>Bagong Tubig</option>
                                                        <option value="Calabuso" {{$users->barangay == 'Calabuso' ? 'selected':'' }}>Calabuso </option>
                                                        <option value="Dapdap East" {{$users->barangay == 'Dapdap East' ? 'selected':'' }}>Dapdap East</option>
                                                        <option value="Dapdap West" {{$users->barangay == 'Dapdap West' ? 'selected':'' }}>Dapdap West</option>
                                                        <option value="Francisco " {{$users->barangay == 'Francisco' ? 'selected':'' }}>Francisco</option>
                                                        <option value="Guinhawa North" {{$users->barangay == 'Guinhawa North' ? 'selected':'' }}>Guinhawa North</option>
                                                        <option value="Guinhawa South" {{$users->barangay == 'Guinhawa South' ? 'selected':'' }}>Guinhawa South</option>
                                                        <option value="Iruhin Central" {{$users->barangay == 'Iruhin Central' ? 'selected':'' }}>Iruhin Central</option>
                                                        <option value="Iruhin East" {{$users->barangay == 'Iruhin East' ? 'selected':'' }}>Iruhin East </option>
                                                        <option value="Iruhin West" {{$users->barangay == 'Iruhin West' ? 'selected':'' }}>Iruhin West</option>
                                                        <option value="Kaybagal Central" {{$users->barangay == 'Kaybagal Central' ? 'selected':'' }}>Kaybagal Central</option>
                                                        <option value="Kaybagal North" {{$users->barangay == 'Kaybagal North' ? 'selected':'' }}>Kaybagal North</option>
                                                        <option value="Kaybagal South" {{$users->barangay == 'Kaybagal South' ? 'selected':'' }}>Kaybagal South</option>
                                                        <option value="Mag-asawang Ilat" {{$users->barangay == 'Mag-asawang Ilat' ? 'selected':'' }}>Mag-asawang Ilat</option>
                                                        <option value="Maharlika East" {{$users->barangay == 'Maharlika East' ? 'selected':'' }}>Maharlika East</option>
                                                        <option value="Maharlika West" {{$users->barangay == 'Maharlika West' ? 'selected':'' }}>Maharlika West</option>
                                                        <option value="Maitim II Central" {{$users->barangay == 'Maitim II Central' ? 'selected':'' }}>Maitim II Central</option>
                                                        <option value="Maitim II  East" {{$users->barangay == 'Maitim II East' ? 'selected':'' }}>Maitim II East</option>
                                                        <option value="Maitim II West" {{$users->barangay == 'Maitim II West' ? 'selected':'' }}>Maitim II West</option>
                                                        <option value="Mendez Crossing East" {{$users->barangay == 'Mendez Crossing East' ? 'selected':'' }}>Mendez Crossing East </option>
                                                        <option value="Mendez Crossing West" {{$users->barangay == 'Mendez Crossing West' ? 'selected':'' }}>Mendez Crossing West</option>
                                                        <option value="Neogan" {{$users->barangay == 'Neogan' ? 'selected':'' }}>Neogan</option>
                                                        <option value="Patutong Malaki North" {{$users->barangay == 'Patutong Malaki North' ? 'selected':'' }}>Patutong Malaki North</option>
                                                        <option value="Patutong Malaki South" {{$users->barangay == 'Patutong Malaki South' ? 'selected':'' }}>Patutong Malaki South</option>
                                                        <option value="Sambong" {{$users->barangay == 'Sambong' ? 'selected':'' }}>Sambong</option>
                                                        <option value="San Jose" {{$users->barangay == 'San Jose' ? 'selected':'' }}>San Jose</option>
                                                        <option value="Silang Crossing East" {{$users->barangay == 'Silang Crossing East' ? 'selected':'' }}>Silang Crossing East </option>
                                                        <option value="Silang Crossing West" {{$users->barangay == 'Silang Crossing West' ? 'selected':'' }}>Silang Crossing West</option>
                                                        <option value="Sungay East" {{$users->barangay == 'Sungay East' ? 'selected':'' }}>Sungay East</option>
                                                        <option value="Sungay West" {{$users->barangay == 'Sungay West' ? 'selected':'' }}>Sungay West</option>
                                                        <option value="Tolentino East" {{$users->barangay == 'Tolentino East' ? 'selected':'' }}>Tolentino East</option>
                                                        <option value="Tolentino West" {{$users->barangay == 'Tolentino West' ? 'selected':'' }}>Tolentino West</option>
                                                        <option value="Zambal" {{$users->barangay == 'Zambal' ? 'selected':'' }}>Zambal</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="formSubmit" class="btn btn-primary btn-sm">Save Changes</button>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
      function previewImage() {
    const preview = document.getElementById('image_preview');
    const file = document.getElementById('profile').files[0];
    const reader = new FileReader();

    reader.onloadend = () => {
      preview.src = reader.result;
    };

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "{{asset('dist/img/default.jpg')}}";
    }
  }
    const roleSelect = document.getElementById('role');
    const barangaySelect = document.getElementById('barangay');

    // listen for changes to the role select element
    roleSelect.addEventListener('change', () => {
        if (roleSelect.value === 'System Administrator') {
            barangaySelect.disabled = true;
        } else {
            barangaySelect.disabled = false;
        }
    });

    // set initial state of barangay select element
    if (roleSelect.value === 'System Administrator') {
        barangaySelect.disabled = true;
    } else {
        barangaySelect.disabled = false;
    }
</script>

@endsection