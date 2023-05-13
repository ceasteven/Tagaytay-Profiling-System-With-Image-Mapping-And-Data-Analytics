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
                    




                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="row">

                                  <div class="col-md-3 border-right">
  <div class="d-flex flex-column align-items-center text-center p-3 py-5">
    <img class="rounded-circle mt-5" height="250" width="250" src="{{asset('dist/img/default.jpg')}}" id="image_preview">
    <label for="profile" class="font-weight-bold mt-3">
      Choose a profile image:
    </label>
    <input type="file" name="profile" id="profile" class="form-control" onchange="previewImage()" required>
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
                                                <input name="firstname" id="firstname" class="form-control input-sm" type="text" placeholder="First Name" required autocomplete="given-name" />
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-4">
                                            <div class="form-group">
                                                <label>Middle Name:</label>
                                                <input name="middlename" id="middlename" class="form-control input-sm" type="text" placeholder="Middle Name" autocomplete="additional-name" />
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-4">
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input name="lastname" id="lastname" class="form-control input-sm" type="text" placeholder="Last Name" required autocomplete="family-name" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input name="email" id="email" class="form-control input-sm" type="email" placeholder="Email" required autocomplete="email" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password: </label> <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top" title="(Minimum of 8 characters and contain a mixture of uppercase and lowercase letters, numbers, or special characters"></i>

                                                <input oncopy="return false" id="password" onpaste="return false" oncut="return false" name="password" class="form-control input-sm" type="password" placeholder="Password" required autocomplete="new-password" />

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Confirm Password:</label>
                                                <input oncopy="return false" id="pasword_confirmation" onpaste="return false" oncut="return false" name="password_confirmation" class="form-control input-sm" type="password" placeholder="Confirm Password" required autocomplete="new-password" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>User Role:</label>
                                                <select class="form-control" name="role" id="role" required>
                                                    <option hidden>Select Role</option>
                                                    <option value="System Administrator">System Administrator</option>
                                                    <option value="Enumerator">Enumerator</option>
                                                </select>
                                            </div>
                                        </div>
                                      
                                        <input type="hidden" name="status" value="1">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Barangay:</label>
                                                <select class="form-control" name="barangay" id="barangay" disabled="disabled">
                                                    <option value="">Select Barangay</option>
                                                    <option value="Asisan">Asisan</option>
                                                    <option value="Bagong Tubig">Bagong Tubig</option>
                                                    <option value="Calabuso">Calabuso </option>
                                                    <option value="Dapdap East">Dapdap East</option>
                                                    <option value="Dapdap West">Dapdap West</option>
                                                    <option value="Francisco ">Francisco</option>
                                                    <option value="Guinhawa North">Guinhawa North</option>
                                                    <option value="Guinhawa South">Guinhawa South</option>
                                                    <option value="Iruhin Central">Iruhin Central</option>
                                                    <option value="Iruhin East">Iruhin East </option>
                                                    <option value="Iruhin West">Iruhin West</option>
                                                    <option value="Kaybagal Central">Kaybagal Central</option>
                                                    <option value="Kaybagal North">Kaybagal North</option>
                                                    <option value="Kaybagal South">Kaybagal South</option>
                                                    <option value="Mag-asawang Ilat">Mag-asawang Ilat</option>
                                                    <option value="Maharlika East">Maharlika East</option>
                                                    <option value="Maharlika West">Maharlika West</option>
                                                    <option value="Maitim II Central">Maitim II Central</option>
                                                    <option value="Maitim II  East">Maitim II East</option>
                                                    <option value="Maitim II West">Maitim II West</option>
                                                    <option value="Mendez Crossing East">Mendez Crossing East</option>
                                                    <option value="Mendez Crossing West">Mendez Crossing West</option>
                                                    <option value="Neogant">Neogan</option>
                                                    <option value="Patutong Malaki North">Patutong Malaki North</option>
                                                    <option value="Patutong Malaki South">Patutong Malaki South</option>
                                                    <option value="Sambong">Sambong</option>
                                                    <option value="San Jose">San Jose</option>
                                                    <option value="Silang Crossing East">Silang Crossing East</option>
                                                    <option value="Silang Crossing West">Silang Crossing West</option>
                                                    <option value="Sungay East">Sungay East</option>
                                                    <option value="Sungay West">Sungay West</option>
                                                    <option value="Tolentino East">Tolentino East</option>
                                                    <option value="Tolentino West">Tolentino West</option>
                                                    <option value="Zambal">Zambal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                        <button type="submit" id="formSubmit" class="btn btn-primary btn-sm">Submit Information</button>
                                    </div>

                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    
document.getElementById("role").onchange = function () {
    if (this.value == 'System Administrator'){
        document.getElementById("barangay").disabled = true;
      
    } else {
        document.getElementById("barangay").disabled = false;


    }

}
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
</script>
@endsection