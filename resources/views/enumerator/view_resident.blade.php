@extends('backend.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1></h1>
                </div>
                <div class="col-sm-6 text-sm">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">View Resident</li>
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
                       You're viewing/editing the residents information of <strong>{{$resident->householdmembername}}.</strong>
                            </div>




                        <form action="{{ route('residents.update', $resident->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">


                                <div class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5><strong> A. IDENTIFICATION</strong></h5>
                                            <label class="col-sm-5 col-form-label"> II. Location </label><br>
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">a.1 Region:</p>
                                                <div class="col-sm-6">
                                                    <input name="region" class="form-control input-sm" min="0" type="text" value="IV-A" readonly />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">a.2 Province:</p>
                                                <div class="col-sm-6">
                                                    <input name="province" class="form-control input-sm" min="0" type="text" value="Cavite" readonly />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">b. City/Municipality:</p>
                                                <div class="col-sm-6">
                                                    <input name="city" class="form-control input-sm" min="0" type="text" value="Tagaytay City" readonly />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">c. Zone:</p>
                                                <div class="col-sm-6">
                                                    <input name="zone" class="form-control input-sm" min="0" type="text" placeholder="" value="{{$resident->zone}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">d. Barangay:</p>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="barangay" value="{{$resident->barangay}}" required>
                                                        <option value=""> Select barangay </option>
                                                        <option value="Asisan" {{$resident->barangay == 'Asisan' ? 'selected':'' }}>Asisan</option>
                                                        <option value="Bagong Tubig" {{$resident->barangay == 'Bagong Tubig' ? 'selected':'' }}>Bagong Tubig</option>
                                                        <option value="Calabuso" {{$resident->barangay == 'Calabuso' ? 'selected':'' }}>Calabuso </option>
                                                        <option value="Dapdap East" {{$resident->barangay == 'Dapdap East' ? 'selected':'' }}>Dapdap East</option>
                                                        <option value="Dapdap West" {{$resident->barangay == 'Dapdap West' ? 'selected':'' }}>Dapdap West</option>
                                                        <option value="Francisco " {{$resident->barangay == 'Francisco' ? 'selected':'' }}>Francisco</option>
                                                        <option value="Guinhawa North" {{$resident->barangay == 'Guinhawa North' ? 'selected':'' }}>Guinhawa North</option>
                                                        <option value="Guinhawa South" {{$resident->barangay == 'Guinhawa South' ? 'selected':'' }}>Guinhawa South</option>
                                                        <option value="Iruhin Central" {{$resident->barangay == 'Iruhin Central' ? 'selected':'' }}>Iruhin Central</option>
                                                        <option value="Iruhin East" {{$resident->barangay == 'Iruhin East' ? 'selected':'' }}>Iruhin East </option>
                                                        <option value="Iruhin West" {{$resident->barangay == 'Iruhin West' ? 'selected':'' }}>Iruhin West</option>
                                                        <option value="Kaybagal Central" {{$resident->barangay == 'Kaybagal Central' ? 'selected':'' }}>Kaybagal Central</option>
                                                        <option value="Kaybagal North" {{$resident->barangay == 'Kaybagal North' ? 'selected':'' }}>Kaybagal North</option>
                                                        <option value="Kaybagal South" {{$resident->barangay == 'Kaybagal South' ? 'selected':'' }}>Kaybagal South</option>
                                                        <option value="Mag-asawang Ilat" {{$resident->barangay == 'Mag-asawang Ilat' ? 'selected':'' }}>Mag-asawang Ilat</option>
                                                        <option value="Maharlika East" {{$resident->barangay == 'Maharlika East' ? 'selected':'' }}>Maharlika East</option>
                                                        <option value="Maharlika West" {{$resident->barangay == 'Maharlika West' ? 'selected':'' }}>Maharlika West</option>
                                                        <option value="Maitim II Central" {{$resident->barangay == 'Maitim II Central' ? 'selected':'' }}>Maitim II Central</option>
                                                        <option value="Maitim II  East" {{$resident->barangay == 'Maitim II East' ? 'selected':'' }}>Maitim II East</option>
                                                        <option value="Maitim II West" {{$resident->barangay == 'Maitim II West' ? 'selected':'' }}>Maitim II West</option>
                                                        <option value="Mendez Crossing East" {{$resident->barangay == 'Mendez Crossing East' ? 'selected':'' }}>Mendez Crossing East </option>
                                                        <option value="Mendez Crossing West" {{$resident->barangay == 'Mendez Crossing West' ? 'selected':'' }}>Mendez Crossing West</option>
                                                        <option value="Neogan" {{$resident->barangay == 'Neogan' ? 'selected':'' }}>Neogan</option>
                                                        <option value="Patutong Malaki North" {{$resident->barangay == 'Patutong Malaki North' ? 'selected':'' }}>Patutong Malaki North</option>
                                                        <option value="Patutong Malaki South" {{$resident->barangay == 'Patutong Malaki South' ? 'selected':'' }}>Patutong Malaki South</option>
                                                        <option value="Sambong" {{$resident->barangay == 'Sambong' ? 'selected':'' }}>Sambong</option>
                                                        <option value="San Jose" {{$resident->barangay == 'San Jose' ? 'selected':'' }}>San Jose</option>
                                                        <option value="Silang Crossing East" {{$resident->barangay == 'Silang Crossing East' ? 'selected':'' }}>Silang Crossing East </option>
                                                        <option value="Silang Crossing West" {{$resident->barangay == 'Silang Crossing West' ? 'selected':'' }}>Silang Crossing West</option>
                                                        <option value="Sungay East" {{$resident->barangay == 'Sungay East' ? 'selected':'' }}>Sungay East</option>
                                                        <option value="Sungay West" {{$resident->barangay == 'Sungay West' ? 'selected':'' }}>Sungay West</option>
                                                        <option value="Tolentino East" {{$resident->barangay == 'Tolentino East' ? 'selected':'' }}>Tolentino East</option>
                                                        <option value="Tolentino West" {{$resident->barangay == 'Tolentino West' ? 'selected':'' }}>Tolentino West</option>
                                                        <option value="Zambal" {{$resident->barangay == 'Zambal' ? 'selected':'' }}>Zambal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">e. Purok/Sitio:</p>
                                                <div class="col-sm-6">
                                                    <input name="purok" class="form-control input-sm" type="text" placeholder="" value="{{$resident->purok}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">f. Street:</p>
                                                <div class="col-sm-6">
                                                    <input name="street" class="form-control input-sm" type="text" placeholder="" value="{{$resident->street}}" required />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">g. House/Building Number:</p>
                                                <div class="col-sm-6">
                                                    <input name="housenum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" value="{{$resident->housenum}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="col-sm-5 col-form-label">h. Unit Number:</p>
                                                <div class="col-sm-6">
                                                    <input name="unitnum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" value="{{$resident->unitnum}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">III. House Control Number
                                                    (HCN):</label>
                                                <div class="col-sm-6">
                                                    <input name="housecontrolnum" class="form-control input-sm" min="0" max="99999999999999" type="number" value="{{$resident->housecontrolnum}}" required />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">IV. Name of Household
                                                    Head:</label>
                                                <div class="col-sm-6">
                                                    <input name="headname" class="form-control input-sm" type="text" placeholder="" value="{{$resident->headname}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">V. Name of Respondent:</label>
                                                <div class="col-sm-6">
                                                    <input name="respondentname" class="form-control input-sm" type="text" placeholder="" value="{{$resident->respondentname}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">VI. Start Date of
                                                    Interview:</label>
                                                <div class="col-sm-6">
                                                    <input name="startdate" class="form-control input-sm" type="date" placeholder="" value="{{$resident->startdate}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">VII. Time Started:</label>
                                                <div class="col-sm-6">
                                                    <input name="timestart" class="form-control input-sm" type="time" placeholder="" value="{{$resident->timestart}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">VIII. Name of Enumerator:</label>
                                                <div class="col-sm-6">
                                                    <input name="enumname" class="form-control input-sm" type="name" placeholder="" value="{{$resident->enumname}}" required />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5><strong>B. HOUSING AND HOUSEHOLD CHARACTERISTICS</strong></h5><br>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">1. In what type of building does the
                                                    household reside?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="housetype" value="{{$resident->housetype}}" required>
                                                        <option value="">Select Building Type</option>
                                                        <option value="Single house" {{$resident->housetype == 'Single house' ? 'selected':'' }}>Single house </option>
                                                        <option value="Duplex" {{$resident->housetype == 'Duplex' ? 'selected':'' }}>Duplex </option>
                                                        <option value="Multi-unit residential" {{$resident->housetype == 'Multi-unit residential' ? 'selected':'' }}>Multi-unit residential </option>
                                                        <option value="Commercial, Industrial, Agricultural building or house" {{$resident->housetype == 'Commercial, Industrial, Agricultural building or house' ? 'selected':'' }}>Commercial / Industrial / Agricultural building/house </option>
                                                        <option value="Institutional living quarters" {{$resident->housetype == 'Institutional living quarters' ? 'selected':'' }}>Institutional living quarters </option>
                                                        <option value="Other housing unit" {{$resident->housetype == 'Other housing unit' ? 'selected':'' }}>Other housing unit </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">2. How many bedrooms does this
                                                    housing unit have?</label>
                                                <div class="col-sm-6">
                                                    <input name="bedroomnum" class="form-control input-sm" min="0" type="number" placeholder="" value="{{$resident->bedroomnum}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">3. How many storeys does this housing
                                                    unit have?</label>
                                                <div class="col-sm-6">
                                                    <input name="storeysnum" class="form-control input-sm" min="0" type="number" placeholder="" value="{{$resident->storeysnum}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">4. What type of construction
                                                    materials are the roof made of?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="rooftype" value="{{$resident->rooftype}}" required>
                                                        <option value="">Select Roof Type</option>
                                                        <option value="Strong materials" {{$resident->rooftype == 'Strong materials' ? 'selected':'' }}>Strong materials (e.g. galvanized iron, aluminum, tile,
                                                            concrete, brick, stone, asbestos)</option>
                                                        <option value="Light materials" {{$resident->rooftype == 'Light materials' ? 'selected':'' }}>Light materials (e.g. cogon, nipa, anahaw)
                                                        </option>
                                                        <option value="Salvaged, makeshift materials" {{$resident->rooftype == 'Salvaged, makeshift materials' ? 'selected':'' }}>Salvaged/makeshift materials (e.g. tarpaulin,
                                                            tent) </option>
                                                        <option value="Mixed but predominantly strong materials" {{$resident->rooftype == 'Mixed but predominantly strong materials' ? 'selected':'' }}>Mixed but predominantly strong materials</option>
                                                        <option value="Mixed but premoninantly light materials" {{$resident->rooftype == 'Mixed but premoninantly light materials' ? 'selected':'' }}>Mixed but premoninantly light materials </option>
                                                        <option value="Mixed but predominantly salvaged materials" {{$resident->rooftype == 'Mixed but predominantly salvaged materials' ? 'selected':'' }}>Mixed but predominantly salvaged materials
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <h5><strong></strong></h5><br>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">5. What type of construction
                                                    materials are the outer walls made of?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="walltype" value="{{$resident->walltype}}" required>
                                                        <option>Select Wall Type</option>
                                                        <option value="Strong materials" {{$resident->walltype == 'Strong materials' ? 'selected':'' }}>Strong materials (e.g. galvanized iron, aluminum, tile,
                                                            concrete, brick, stone, asbestos)</option>
                                                        <option value="Light materials" {{$resident->walltype == 'Light materials' ? 'selected':'' }}>Light materials (e.g. cogon, nipa, anahaw)
                                                        </option>
                                                        <option value="Salvaged or makeshift materials" {{$resident->walltype == 'Salvaged or makeshift materials' ? 'selected':'' }}>Salvaged/makeshift materials (e.g. tarpaulin,
                                                            tent) </option>
                                                        <option value="Mixed but predominantly strong materials" {{$resident->walltype == 'Mixed but predominantly strong materials' ? 'selected':'' }}>Mixed but predominantly strong materials</option>
                                                        <option value="Mixed but premoninantly light materials" {{$resident->walltype == 'Mixed but premoninantly light materials' ? 'selected':'' }}>Mixed but premoninantly light materials </option>
                                                        <option value="Mixed but predominantly salvaged materials" {{$resident->walltype == 'Mixed but predominantly salvaged materials' ? 'selected':'' }}>Mixed but predominantly salvaged materials
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">6. What type of construction
                                                    materials are the floors made of?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="floortype" value="{{$resident->floortype}}" required>
                                                        <option value="">Select Floor Type</option>
                                                        <option value="Marble" {{$resident->floortype == 'Marble' ? 'selected':'' }}>Marble</option>
                                                        <option value="Ceramic" {{$resident->floortype == 'Ceramic' ? 'selected':'' }}>Ceramic tiles </option>
                                                        <option value="Cement" {{$resident->floortype == 'Cement' ? 'selected':'' }}>Cement</option>
                                                        <option value="Vinyl and linoleum" {{$resident->floortype == 'Vinyl and linoleum' ? 'selected':'' }}>Vinyl, linoleum</option>
                                                        <option value="Parquet and polished wood" {{$resident->floortype == 'Parquet and polished wood' ? 'selected':'' }}>Parquet, polished wood </option>
                                                        <option value="Palm or Bamboo" {{$resident->floortype == 'Palm or Bamboo' ? 'selected':'' }}>Palm/ Bamboo</option>
                                                        <option value="Wood planks" {{$resident->floortype == 'Wood planks' ? 'selected':'' }}>Wood planks</option>
                                                        <option value="Natural floor" {{$resident->floortype == 'Natural floor' ? 'selected':'' }}>Natural floor (earth, sand, dung)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">7. How many nuclear families are
                                                    there in the household?</label>
                                                <div class="col-sm-6">
                                                    <input name="nucfam" class="form-control input-sm" min="0" type="number" placeholder="" value="{{$resident->nucfam}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">8. How many members are there in the
                                                    household, including OFWs?</label>
                                                <div class="col-sm-6">
                                                    <input name="housemembernum" class="form-control input-sm" min="0" type="number" placeholder="" value="{{$resident->housemembernum}}" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5><strong> C. DEMOGRAPHY</strong></h5>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">9. Who is the head of household?</label>
                                                <div class="col-sm-6">
                                                    <input name="householdhead" class="form-control input-sm" type="text" placeholder="Surname, First Name Middle Name" value="{{$resident->householdhead}}" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">9. Who are the other of members of the household?</label>

                                                <div class="col-sm-6"><input name="householdmembername" class="form-control input-sm" type="text" placeholder="Surname, First Name Middle Name" value="{{$resident->householdmembername}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">10. What is the ___'s relationship to head of the household?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="reltohead" value="{{$resident->reltohead}}">
                                                        <option value="">Select Relationship</option>
                                                        <option value="Head" {{$resident->reltohead == 'Head' ? 'selected':'' }}>Head</option>
                                                        <option value="Spouse" {{$resident->reltohead == 'Spouse' ? 'selected':'' }}>Spouse</option>
                                                        <option value="Son" {{$resident->reltohead == 'Son' ? 'selected':'' }}>Son</option>
                                                        <option value="Daughter" {{$resident->reltohead == 'Daughter' ? 'selected':'' }}>Daughter</option>
                                                        <option value="Son in law" {{$resident->reltohead == 'Son-in-law' ? 'selected':'' }}>Son-in-law</option>
                                                        <option value="Daughter in law" {{$resident->reltohead == 'Daughter-in-law' ? 'selected':'' }}>Daughter-in-law</option>
                                                        <option value="Grandson" {{$resident->reltohead == 'Grandson' ? 'selected':'' }}>Grandson</option>
                                                        <option value="Granddaughter" {{$resident->reltohead == 'Granddaughter' ? 'selected':'' }}>Granddaughter</option>
                                                        <option value="Father" {{$resident->reltohead == 'Father' ? 'selected':'' }}>Father</option>
                                                        <option value="Mother" {{$resident->reltohead == 'Mother' ? 'selected':'' }}>Mother</option>
                                                        <option value="Other relatives" {{$resident->reltohead == 'Other relatives' ? 'selected':'' }}>Other relatives</option>
                                                        <option value="Housemaid" {{$resident->reltohead == 'Housemaid' ? 'selected':'' }}>Housemaid</option>
                                                        <option value="Houseboy" {{$resident->reltohead == 'Houseboy' ? 'selected':'' }}>Houseboy</option>
                                                        <option value="Step son" {{$resident->reltohead == 'Step-son' ? 'selected':'' }}>Step-son</option>
                                                        <option value="Step daughter" {{$resident->reltohead == 'Step-daughter' ? 'selected':'' }}>Step-daughter</option>
                                                        <option value="Others" {{$resident->reltohead == 'Others' ? 'selected':'' }}>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">11. In which nuclear family does ____ belong?</label>
                                                <div class="col-sm-6">
                                                    <input name="nucfambelong" class="form-control input-sm" type="text" placeholder="" value="{{$resident->nucfambelong}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">12. Is ___ male or female?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="gender" id="gender" value="{{$resident->gender}}">
                                                        <option value="">Select Gender</option>
                                                        <option value="Male" {{$resident->gender == 'Male' ? 'selected':'' }}>Male</option>
                                                        <option value="Female" {{$resident->gender == 'Female' ? 'selected':'' }}>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">13. When is ___'s date of birth</label>
                                                <div class="col-sm-6">
                                                    <input name="birthdate" class="form-control input-sm" type="date" placeholder="" value="{{$resident->birthdate}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                            </div>




                                        </div>
                                        <div class="col-md-6">
                                            <h5><strong></strong></h5><br>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">14. Was ___'s birth registered with the civil registry office?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="birthregistered" value="{{$resident->birthregistered}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->birthregistered == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->birthregistered == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small>(For 10 years old and above)</small>
                                            <div class="form-group row">

                                                <label class="col-sm-5 col-form-label">15. What is ___'s marital status (civil status)? </label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="civilstatus" value="{{$resident->civilstatus}}">
                                                        <option value="">Select</option>
                                                        <option value="Single" {{$resident->civilstatus == 'Single' ? 'selected':'' }}>Single</option>
                                                        <option value="Married" {{$resident->civilstatus == 'Married' ? 'selected':'' }}>Married</option>
                                                        <option value="Widowed" {{$resident->civilstatus == 'Widowed' ? 'selected':'' }}>Widowed</option>
                                                        <option value="Divorced or Separated" {{$resident->civilstatus == 'Divorced or Separated' ? 'selected':'' }}>Divorced/Separated</option>
                                                        <option value="Common law or Live-in" {{$resident->civilstatus == 'Common-law or Live-in' ? 'selected':'' }}>Common-law/Live-in</option>
                                                        <option value="Uknown" {{$resident->civilstatus == 'Uknown' ? 'selected':'' }}>Uknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">16. What is ___'s ethnicity by blood?</label>
                                                <div class="col-sm-6">
                                                    <input name="ethnicity" class="form-control input-sm" type="text" value="{{$resident->ethnicity}}" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">17. What is religious affilation?</label>
                                                <div class="col-sm-6">
                                                    <input name="religiousaffiliation" class="form-control input-sm" type="text" value="{{$resident->religiousaffiliation}}" placeholder="" />
                                                </div>
                                            </div>
                                            <small>(For 10 years old and above)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">18. Is ___ an overseas worker?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="ofw" id="ofw">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->ofw == 'Yes' ? 'selected':'' }}>Yes (Go to 19)</option>
                                                        <option value="No" {{$resident->ofw == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small>(For 10 years old and above)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">19. Where is ___'s country of destination? </label>
                                                <div class="col-sm-6">
                                                    <input name="ofwcountry" class="form-control input-sm" type="text" value="{{$resident->ofwcountry}}" id="ofwcountry" />
                                                </div>

                                            </div>

                                            <small> (FOR 3 YEARS OLD AND ABOVE)</small>
                                            <div class="form-group row">

                                                <label class="col-sm-5 col-form-label">20. Where was___ residing 3 years ago?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="residing" id="residing">
                                                        <option value="">Select</option>
                                                        <option value="Same address now" {{$resident->residing == 'Same address now' ? 'selected':'' }}>Same address now</option>
                                                        <option value="Other address" {{$resident->residing == 'Other address' ? 'selected':'' }}>Other address, specify</option>
                                                    </select>

                                                </div>


                                            </div>

                                            <div class="form-group row">

                                                <label class="col-sm-5 col-form-label">Other address</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="residingo" class="form-control input-sm" name="residingo" value="{{$resident->residingo == 'residingo' ? 'selected':'' }}" />

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5><strong>D. EDUCATION AND LITERACY</strong></h5>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">21. Is ___ currently attending school? </label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="attendschool" id="attendschool" value="{{$resident->attendschool}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->attendschool == 'Yes' ? 'selected':'' }}>Yes </option>
                                                        <option value="No" {{$resident->attendschool == 'No' ? 'selected':'' }}>No (Go to 24)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small>IF YES IN (21) (FOR 3 YEARS OLD AND ABOVE) </small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">22. What grade or year is ___ currently attending?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="yearlevel" value="{{$resident->yearlevel}}" id="yearlevel">
                                                        <option value="">Select Grade</option>
                                                        <option value="No Grade" {{$resident->yearlevel == 'No Grade' ? 'selected':'' }}>No Grade </option>
                                                        <option value="Day Care" {{$resident->yearlevel == 'Day Care' ? 'selected':'' }}>Day Care</option>
                                                        <option value="Kindergarten" {{$resident->yearlevel == 'Kindergarten' ? 'selected':'' }}>Kindergarten</option>
                                                        <option value="Grade I" {{$resident->yearlevel == 'Grade I' ? 'selected':'' }}>Grade I</option>
                                                        <option value="Grade II" {{$resident->yearlevel == 'Grade II' ? 'selected':'' }}>Grade II</option>
                                                        <option value="Grade III" {{$resident->yearlevel == 'Grade III' ? 'selected':'' }}>Grade III</option>
                                                        <option value="Grade IV" {{$resident->yearlevel == 'Grade IV' ? 'selected':'' }}>Grade IV</option>
                                                        <option value="Grade V" {{$resident->yearlevel == 'Grade V' ? 'selected':'' }}>Grade V</option>
                                                        <option value="Grade VI" {{$resident->yearlevel == 'Grade VI' ? 'selected':'' }}>Grade VI</option>
                                                        <option value="Grade 7" {{$resident->yearlevel == 'Grade 7' ? 'selected':'' }}>Grade 7</option>
                                                        <option value="Grade 8" {{$resident->yearlevel == 'Grade 8' ? 'selected':'' }}>Grade 8</option>
                                                        <option value="Grade 9" {{$resident->yearlevel == 'Grade 9' ? 'selected':'' }}>Grade 9</option>
                                                        <option value="Grade 10" {{$resident->yearlevel == 'Grade 10' ? 'selected':'' }}>Grade 10</option>
                                                        <option value="Grade 11" {{$resident->yearlevel == 'Grade 11' ? 'selected':'' }}>Grade 11</option>
                                                        <option value="Grade 12" {{$resident->yearlevel == 'Grade 12' ? 'selected':'' }}>Grade 12</option>
                                                        <option value="1st Year PS or N-T or TV" {{$resident->yearlevel == '1st Year PS or N-T or TV' ? 'selected':'' }}>1st Year PS/N-T/TV</option>
                                                        <option value="2nd Year PS or N-T or TV" {{$resident->yearlevel == '2nd Year PS or N-T or TV' ? 'selected':'' }}>2nd Year PS/N-T/TV</option>
                                                        <option value="1st Year College" {{$resident->yearlevel == '1st Year College' ? 'selected':'' }}>1st Year College</option>
                                                        <option value="2nd Year College" {{$resident->yearlevel == '2nd Year College' ? 'selected':'' }}>2nd Year College</option>
                                                        <option value="3rd Year College" {{$resident->yearlevel == '3rd Year College' ? 'selected':'' }}>3rd Year College</option>
                                                        <option value="4th Year College or higher" {{$resident->yearlevel == '4th Year College or higher' ? 'selected':'' }}>4th Year College or higher</option>
                                                        <option value="ALS Elementary" {{$resident->yearlevel == 'ALS Elementary' ? 'selected':'' }}>ALS Elementary</option>
                                                        <option value="ALS Secondary" {{$resident->yearlevel == 'ALS Secondary' ? 'selected':'' }}>ALS Secondary</option>
                                                        <option value="SPED Elementary" {{$resident->yearlevel == 'SPED Elementary' ? 'selected':'' }}>SPED Elementary</option>
                                                        <option value="SPED Secondary" {{$resident->yearlevel == 'SPED Secondary' ? 'selected':'' }}>SPED Secondary</option>
                                                        <option value="Post Grad with units" {{$resident->yearlevel == 'Post Grad with units' ? 'selected':'' }}>Post Grad with units</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small>IF YES IN (21) (FOR 3 YEARS OLD AND ABOVE)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">23. Where does ___ attend school? </label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="schooltype" value="{{$resident->schooltype}}">
                                                        <option value="">Select school type</option>
                                                        <option value="Public" {{$resident->schooltype == 'Public' ? 'selected':'' }}>Public </option>
                                                        <option value="Private" {{$resident->schooltype == 'Private' ? 'selected':'' }}>Private </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small>IF NO IN (21) FOR 3-24 YEARS OLD</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">24. Why is ___ not attending school?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="notattending" onchange='checkvalue(this.value)' value="{{$resident->notattending}}">
                                                        <option value="">Select reason</option>
                                                        <option value="Schools are very far" {{$resident->notattending == 'Schools are very far' ? 'selected':'' }}>Schools are very far </option>
                                                        <option value="No school within the barangay" {{$resident->notattending == 'No school within the barangay' ? 'selected':'' }}>No school within the barangay </option>
                                                        <option value="No regular transportation" {{$resident->notattending == 'No regular transportation' ? 'selected':'' }}>No regular transportation </option>
                                                        <option value="High cost of education or Financial concern" {{$resident->notattending == 'High cost of education or Financial concern' ? 'selected':'' }}>High cost of education/ Financial concern </option>
                                                        <option value="Illness or Disability" {{$resident->notattending == 'Illness or Disability' ? 'selected':'' }}>Illness/Disability </option>
                                                        <option value="Housekeeping or Taking care of siblings" {{$resident->notattending == 'Housekeeping or Taking care of siblings' ? 'selected':'' }}>Housekeeping/Taking care of siblings </option>
                                                        <option value="Marriage or Cohabitation" {{$resident->notattending == 'Marriage or Cohabitation' ? 'selected':'' }}>Marriage/Cohabitation </option>
                                                        <option value="Employment or looking for work" {{$resident->notattending == 'Employment or looking for work' ? 'selected':'' }}>Employment/looking for work </option>
                                                        <option value="Cannot cope with school work" {{$resident->notattending == 'Cannot cope with school work' ? 'selected':'' }}>Cannot cope with school work </option>
                                                        <option value="Finished schooling" {{$resident->notattending == 'Finished schooling' ? 'selected':'' }}>Finished schooling </option>
                                                        <option value="Problem with school record" {{$resident->notattending == 'Problem with school record' ? 'selected':'' }}>Problem with school record </option>
                                                        <option value="Problem with birth certificate" {{$resident->notattending == 'Problem with birth certificate' ? 'selected':'' }}>Problem with birth certificate </option>
                                                        <option value="To young to go to school" {{$resident->notattending == 'To young to go to school' ? 'selected':'' }}>To young to go to school </option>
                                                        <option value="Got pregnant" {{$resident->notattending == 'Got pregnant' ? 'selected':'' }}>Got pregnant </option>
                                                        <option value="Others" {{$resident->notattending == 'Others' ? 'selected':'' }}>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            (FOR 3 YEARS OLD AND ABOVE)
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">25. What is the highest educational attainment completed by ___?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="educcompleted" value="{{$resident->educcompleted}}">
                                                        <option value="">Select Educational Attainment Completed</option>
                                                        <option value="No Grade" {{$resident->educcompleted == 'No Grade' ? 'selected':'' }}>No Grade </option>
                                                        <option value="Day Care" {{$resident->educcompleted == 'Day Care' ? 'selected':'' }}>Day Care</option>
                                                        <option value="Kindergarten" {{$resident->educcompleted == 'Kindergarten' ? 'selected':'' }}>Kindergarten</option>
                                                        <option value="Grade I" {{$resident->educcompleted == 'Grade I' ? 'selected':'' }}>Grade I</option>
                                                        <option value="Grade II" {{$resident->educcompleted == 'Grade II' ? 'selected':'' }}>Grade II</option>
                                                        <option value="Grade III" {{$resident->educcompleted == 'Grade III' ? 'selected':'' }}>Grade III</option>
                                                        <option value="Grade IV" {{$resident->educcompleted == 'Grade IV' ? 'selected':'' }}>Grade IV</option>
                                                        <option value="Grade V" {{$resident->educcompleted == 'Grade V' ? 'selected':'' }}>Grade V</option>
                                                        <option value="Grade VI" {{$resident->educcompleted == 'Grade VI' ? 'selected':'' }}>Grade VI</option>
                                                        <option value="Elementary Graduate" {{$resident->educcompleted == 'Elementary Graduate' ? 'selected':'' }}>Elementary Graduate</option>
                                                        <option value="Grade 7" {{$resident->educcompleted == 'Grade 7' ? 'selected':'' }}>Grade 7</option>
                                                        <option value="Grade 8" {{$resident->educcompleted == 'Grade 8' ? 'selected':'' }}>Grade 8</option>
                                                        <option value="Grade 9" {{$resident->educcompleted == 'Grade 9' ? 'selected':'' }}>Grade 9</option>
                                                        <option value="Grade 10" {{$resident->educcompleted == 'Grade 10' ? 'selected':'' }}>Grade 10</option>
                                                        <option value="Grade 11" {{$resident->educcompleted == 'Grade 11' ? 'selected':'' }}>Grade 11</option>
                                                        <option value="Grade 12" {{$resident->educcompleted == 'Grade 12' ? 'selected':'' }}>Grade 12</option>
                                                        <option value="High school graduate - Old curriculum" {{$resident->educcompleted == 'High school graduate - Old curriculum' ? 'selected':'' }}>High school graduate (Old curriculum)</option>
                                                        <option value="Senior High school graduate" {{$resident->educcompleted == 'Senior High school graduate - K-12 curriculum' ? 'selected':'' }}>Senior High school graduate (K-12 curriculum)</option>
                                                        <option value="1st Year PS or N-T or TV" {{$resident->educcompleted == '1st Year PS or N-T or TV' ? 'selected':'' }}>1st Year PS/N-T/TV</option>
                                                        <option value="2nd Year PS or N-T or TV" {{$resident->educcompleted == '2nd Year PS or N-T or TV' ? 'selected':'' }}>2nd Year PS/N-T/TV</option>
                                                        <option value="Post secondary graduate" {{$resident->educcompleted == 'Post secondary graduate' ? 'selected':'' }}>Post secondary graduate</option>
                                                        <option value="1st Year College" {{$resident->educcompleted == '1st Year College' ? 'selected':'' }}>1st Year College</option>
                                                        <option value="2nd Year College" {{$resident->educcompleted == '2nd Year College' ? 'selected':'' }}>2nd Year College</option>
                                                        <option value="3rd Year College" {{$resident->educcompleted == '3rd Year College' ? 'selected':'' }}>3rd Year College</option>
                                                        <option value="4th Year College or higher" {{$resident->educcompleted == '4th Year College or higher' ? 'selected':'' }}>4th Year College or higher</option>
                                                        <option value="College graduate" {{$resident->educcompleted == 'College graduate' ? 'selected':'' }}>College graduate</option>
                                                        <option value="ALS Elementary" {{$resident->educcompleted == 'ALS Elementary' ? 'selected':'' }}>ALS Elementary</option>
                                                        <option value="ALS Secondary" {{$resident->educcompleted == 'ALS Secondary' ? 'selected':'' }}>ALS Secondary</option>
                                                        <option value="SPED Elementary" {{$resident->educcompleted == 'SPED Elementary' ? 'selected':'' }}>SPED Elementary</option>
                                                        <option value="SPED Secondary" {{$resident->educcompleted == 'SPED Secondary' ? 'selected':'' }}>SPED Secondary</option>
                                                        <option value="SPED Graduate" {{$resident->educcompleted == 'SPED Graduate' ? 'selected':'' }}>SPED Graduate</option>
                                                        <option value="Post Grad with units" {{$resident->educcompleted == 'Post Grad with units' ? 'selected':'' }}>Post Grad with units</option>
                                                        <option value="Masters or PhD graduate" {{$resident->educcompleted == 'Masters or PhD graduate' ? 'selected':'' }}>Masters or PhD graduate</option>
                                                    </select>
                                                </div>
                                            </div>
                                            (FOR 3 YEARS OLD AND ABOVE)
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">26. If senior high school graduate, what is ___'s track/strand?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="shsstrand" value="{{$resident->shsstrand}}">
                                                        <option value="">Select Strand</option>
                                                        <option value="Accountancy, Business and Management" {{$resident->shsstrand == 'Accountancy, Business and Management' ? 'selected':'' }}>Accountancy, Business and Management</option>
                                                        <option value="Science, Technology, Engineering, and Mathematics" {{$resident->shsstrand == 'Science, Technology, Engineering, and Mathematics' ? 'selected':'' }}>Science, Technology, Engineering, and Mathematics</option>
                                                        <option value="Humanities and Social Sciences" {{$resident->shsstrand == 'Humanities and Social Sciences' ? 'selected':'' }}>Humanities and Social Sciences</option>
                                                        <option value="General Academic" {{$resident->shsstrand == 'General Academic' ? 'selected':'' }}>General Academic</option>
                                                        <option value="Home Economics" {{$resident->shsstrand == 'Home Economics' ? 'selected':'' }}>Home Economics</option>
                                                        <option value="Agri-Fishery" {{$resident->shsstrand == 'Agri-Fishery' ? 'selected':'' }}>Agri-Fishery</option>
                                                        <option value="Industrial Arts" {{$resident->shsstrand == 'Industrial Arts' ? 'selected':'' }}>Industrial Arts</option>
                                                        <option value="Information and Communication Technology" {{$resident->shsstrand == 'Information and Communication Technology' ? 'selected':'' }}>Information and Communication Technology or ICT</option>
                                                        <option value="Sports" {{$resident->shsstrand == 'Sports' ? 'selected':'' }}>Sports</option>
                                                        <option value="Arts and Design" {{$resident->shsstrand == 'Arts and Design' ? 'selected':'' }}>Arts and Design</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">27. If at least college graduate, what is ___'s college course></label>
                                                <div class="col-sm-6">
                                                    <input name="collegecourse" class="form-control input-sm" type="text" placeholder="" value="{{$resident->collegecourse}}" />
                                                </div>
                                            </div>




                                        </div>
                                        <div class="col-md-6">
                                            <small> For 10-64 YEARS OLD ONLY </small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">28. Is ___ currently attending any skills training? </label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="training" value="{{$resident->training}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->training == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->training == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">29. Have ___ attended any skills training in the past?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="pasttraining" value="{{$resident->pastraining}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->pasttraining == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->pasttraining == 'No' ? 'selected':'' }}>No (Go to 31)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">30. How many skills training have ___ attended including the current one?</label>
                                                <div class="col-sm-6">
                                                    <input name="trainnum" class="form-control input-sm" type="number" min="0" placeholder="" value="{{$resident->trainum}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">Training Programs</label>
                                                <div class="col-sm-6">
                                                    <input name="trainprogram" class="form-control input-sm" type="text" placeholder="" value="{{$resident->trainprogram}}" />
                                                </div>
                                            </div>
                                            <small> IF NOT AT LEAST HIGH SCHOOL GRADUATE</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">31. Can ___ read and write a simple message in any language or dialect?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="literate" value="{{$resident->literate}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->literate == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->literate == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5><strong>E. POLITICAL PARTICIPATION</strong></h5>
                                            <small> (FOR 16 YEARS OLD AND ABOVE)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">32. Is ____ a registered voter? </label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="voter" value="{{$resident->voter}}" id="voter">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->voter == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->voter == 'No' ? 'selected':'' }}>No (GO TO 34)</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">33. Did ___ vote in the last election? </label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="votedlast" value="{{$resident->votedlast}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->votedlast == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->votedlast == 'No' ? 'selected':'' }}>No</option>
                                                        <option value="Dont Know" {{$resident->votedlast == 'Dont Know ' ? 'selected':'' }}>Don't know</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5><strong>G. OTHER CHARACTERISTICS OF HOUSEHOLD MEMBERS</strong></h5>
                                            <small>IF CODE 2 IN (12)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">59. Is ___ pregnant?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="pregnant" id="pregnant" value="{{$resident->pregnant}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->pregnant == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->pregnant == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">60. Is ___ a solo parent taking care of a child/children?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="soloparent" id="soloparent" value="{{$resident->soloparent}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->soloparent == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->soloparent == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small> IF YES IN (60)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">61. Does ___ have a Solo Parent ID?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="soloparentid" id="soloparentid" value="{{$resident->soloparentid}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->soloparentid == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->soloparentid == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">62. Does ___ have any physical or mental disability?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="disability" id="disability" value="{{$resident->disability}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->disability == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->disability == 'No' ? 'selected':'' }}>No (Go to 65)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small> IF YES IN (62)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">63. What type of disability does ___ have?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="disabilitytype" id="disabilitytype" value="{{$resident->disabilitytype}}">
                                                        <option value="">Select type of Disability</option>
                                                        <option value="Mental or Intellectual" {{$resident->disabilitytype == 'Mental or Intellectual' ? 'selected':'' }}>Mental/Intellectual</option>
                                                        <option value="Hearing Disability" {{$resident->disabilitytype == 'Hearing Disability' ? 'selected':'' }}>Hearing Disability</option>
                                                        <option value="Psychosocial Disability" {{$resident->disabilitytype == 'Psychosocial Disability' ? 'selected':'' }}>Psychosocial Disability</option>
                                                        <option value="Visual Disability" {{$resident->disabilitytype == 'Visual Disability' ? 'selected':'' }}>Visual Disability</option>
                                                        <option value="Speech Impairment" {{$resident->disabilitytype == 'Speech Impairment' ? 'selected':'' }}>Speech Impairment</option>
                                                        <option value="Disability due to Chronic illness" {{$resident->disabilitytype == 'Disability due to Chronic illness' ? 'selected':'' }}>Disability due to Chronic illness</option>
                                                        <option value="Orthopedic or Musculoskeletal Disability" {{$resident->disabilitytype == 'Orthopedic or Musculoskeletal Disability' ? 'selected':'' }}>Orthopedic (Musculoskeletal) Disability</option>
                                                        <option value="Multiple Disabilities" {{$resident->disabilitytype == 'Multiple Disabilities' ? 'selected':'' }}>Multiple Disabilities</option>
                                                        <option value="Learning Disability" {{$resident->disabilitytype == 'Learning Disability' ? 'selected':'' }}>Learning Disability</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">64. Does ___ have a PWD ID?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="pwdid" id="pwdid" value="{{$resident->pwdid}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->pwdid == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->pwdid == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small>FOR 60 YEARS OLD AND ABOVE</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">65. Does ___ have a Senior Citizen's ID?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="seniorcitizenid" value="{{$resident->seniorcitizenid}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->seniorcitizenid == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->seniorcitizenid == 'No' ? 'selected':'' }}>No</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <h5><strong>H. CRIME</strong></h5>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">66. Has ___ been a victim of crime in the past 12 months?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="crime" id="crime" value="{{$resident->crime}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->crime == 'Yes' ? 'selected':'' }}>Yes</option>
                                                        <option value="No" {{$resident->crime == 'No' ? 'selected':'' }}>No (Go to 69)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small>IF YES IN (66)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">67. What crime/s was/were ___ a victim of?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="crimetype" id="crimetype" value="{{$resident->crimetype}}">
                                                        <option value="">Select Type of Crime</option>
                                                        <option value="Theft" {{$resident->crimetype == 'Theft' ? 'selected':'' }}>Theft</option>
                                                        <option value="Robbery" {{$resident->crimetype == 'Robbery' ? 'selected':'' }}>Robbery</option>
                                                        <option value="Rape" {{$resident->crimetype == 'Rape' ? 'selected':'' }}>Rape</option>
                                                        <option value="Physical Injury" {{$resident->crimetype == 'Physical Injury' ? 'selected':'' }}>Physical Injury</option>
                                                        <option value="Carnapping" {{$resident->crimetype == 'Carnapping' ? 'selected':'' }}>Carnapping</option>
                                                        <option value="Cattle rustling" {{$resident->crimetype == 'Cattle rustling' ? 'selected':'' }}>Cattle rustling</option>
                                                        <option value="Others" {{$resident->crimetype == 'Others' ? 'selected':'' }}>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">68. Where did the crime happen?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="crimeloc" id="crimeloc" value="{{$resident->crimeloc}}">
                                                        <option value="">Select Crime Location</option>
                                                        <option value="Within the barangay" {{$resident->crimeloc == 'Within the barangay' ? 'selected':'' }}>Within the barangay</option>
                                                        <option value="Outside the barangay but within municipality/city" {{$resident->crimeloc == 'Outside the barangay but within municipality/city' ? 'selected':'' }}>Outside the barangay but within municipality/city</option>
                                                        <option value="Outside the municipality or city but within province" {{$resident->crimeloc == 'Outside the municipality or city but within province' ? 'selected':'' }}>Outside the municipality/city but within province</option>
                                                        <option value="Outside the province" {{$resident->crimeloc == 'Outside the province' ? 'selected':'' }}>Outside the province</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <h5><strong> I. HEALTH AND NUTRITION</strong></h5>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">69. What is ___'s blood type?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="bloodtype" value="{{$resident->bloodtype}}">
                                                        <option value="">Select Blood Type</option>
                                                        <option value="O" {{$resident->bloodtype == 'O' ? 'selected':'' }}>O</option>
                                                        <option value="A" {{$resident->bloodtype == 'A' ? 'selected':'' }}>A</option>
                                                        <option value="B" {{$resident->bloodtype == 'B' ? 'selected':'' }}>B</option>
                                                        <option value="AB" {{$resident->bloodtype == 'AB' ? 'selected':'' }}>AB</option>
                                                        <option value="Dont Know" {{$resident->bloodtype == 'Dont Know' ? 'selected':'' }}>Don't Know</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <small>IF '1', '2', '3' OR '4' IN (69)</small>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">70. What is the Rhesus (Rh) factor of ___'s blood type?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="rhtype" value="{{$resident->rhtype}}">
                                                        <option value="">Select Rh Blood Type</option>
                                                        <option value="Positive" {{$resident->rhtype == 'Positive' ? 'selected':'' }}>Positive</option>
                                                        <option value="Negative" {{$resident->rhtype == 'Negative' ? 'selected':'' }}>Negative</option>
                                                        <option value="Dont Know" {{$resident->rhtype == 'Dont Know' ? 'selected':'' }}>Don't Know</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <p>FOR 5 YEARS OLD AND BELOW</p>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">71. NUTRITIONAL STATUS OF CHILDREN 0-5 YEARS OLD</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="nutritionstatus" value="{{$resident->nutritionstatus}}">
                                                        <option value="">Select Nutritional Status</option>
                                                        <option value="Overweight" {{$resident->nutritionstatus == 'Overweight' ? 'selected':'' }}>Overweight</option>
                                                        <option value="Normal" {{$resident->nutritionstatus == 'Normal' ? 'selected':'' }}>Normal</option>
                                                        <option value="Underweight" {{$resident->nutritionstatus == 'Underweight' ? 'selected':'' }}>Underweight</option>
                                                        <option value="Severely underweight" {{$resident->nutritionstatus == 'Severely underweight' ? 'selected':'' }}>Severely underweight</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">72. DATE OF RECORD OF BARANGAY NUTRITION SCHOLARS</label>
                                                <div class="col-sm-6">
                                                    <input name="datebns" class="form-control input-sm" type="date" placeholder="" value="{{$resident->datebns}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">73. During the past 12 months, did you or any member of the household avail of medical treatment for any ilnness?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="treatment" id="treatment" value="{{$resident->treatment}}">
                                                        <option value="">Select</option>
                                                        <option value="Yes" {{$resident->treatment == 'Yes' ? 'selected':'' }}>Yes (Go to 74)</option>
                                                        <option value="No" {{$resident->treatment == 'No' ? 'selected':'' }}>No</option>
                                                        <option value="Did not get sick" {{$resident->treatment == 'Did not get sick' ? 'selected':'' }}>Did not get sick</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">74. During the last illness of any member of the household, where did you go to
                                                    avail medical treatment?</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="treatmentloc" id="treatmentloc" value="{{$resident->treatmentloc}}">
                                                        <option value="">Select</option>
                                                        <option value="Public hospital - National" {{$resident->treatmentloc == 'Public hospital - National' ? 'selected':'' }}>Public hospital (National)</option>
                                                        <option value="Public hosptital - Provincial" {{$resident->treatmentloc == 'Public hosptital - Provincial' ? 'selected':'' }}>Public hosptital (Provincial)</option>
                                                        <option value="Public hosptital - Municipal or City" {{$resident->treatmentloc == 'Public hosptital - Municipal or City"' ? 'selected':'' }}>Public hosptital (Municipal/City)</option>
                                                        <option value="Public hosptital - District" {{$resident->treatmentloc == 'Public hosptital - District' ? 'selected':'' }}>Public hosptital (District)</option>
                                                        <option value="Public hosptital or clinic" {{$resident->treatmentloc == 'Public hosptital or clinic' ? 'selected':'' }}>Public hosptital or clinic</option>
                                                        <option value="Rural health units" {{$resident->treatmentloc == 'Rural health units' ? 'selected':'' }}>Rural health units</option>
                                                        <option value="Barangay Health Station" {{$resident->treatmentloc == 'Barangay Health Station' ? 'selected':'' }}>Barangay Health Station</option>
                                                        <option value="Non medical, non-trained Hilot or Personnel" {{$resident->treatmentloc == 'Non medical, non-trained Hilot or Personnel' ? 'selected':'' }}>Non-medical/non-trained Hilot/Personnel</option>
                                                        <option value="Others" {{$resident->treatmentloc == 'Others' ? 'selected':'' }}>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">IX. End Date of Interview:</label>
                                                <div class="col-sm-6">
                                                    <input name="enddate" class="form-control input-sm" type="date" placeholder="" value="{{$resident->enddate}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">X. Time Ended:</label>
                                                <div class="col-sm-6">
                                                    <input name="endtime" class="form-control input-sm" type="time" placeholder="" value="{{$resident->endtime}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-info btn-sm">Save Changes</button>
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