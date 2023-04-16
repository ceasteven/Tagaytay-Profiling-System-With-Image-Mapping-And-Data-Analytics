@foreach ($all as $residents)
<div class="modal fade" id="editmodal1{{$residents->id}}" aria-labelledby="exampleModalLabel" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog--center-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Identification</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="{{ route('residents.update', $residents->id) }}" method="POST">
                    @csrf
                    @method('PUT')
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
                                        <input name="zone" class="form-control input-sm" min="0" type="text" placeholder="" value="{{$residents->zone}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">d. Barangay:</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="barangay" value="{{$residents->barangay}}" required>
                                            <option value=""> Select barangay </option>
                                            <option value="Asisan" {{$residents->barangay == 'Asisan' ? 'selected':'' }}>Asisan</option>
                                            <option value="Bagong Tubig" {{$residents->barangay == 'Bagong Tubig' ? 'selected':'' }}>Bagong Tubig</option>
                                            <option value="Calabuso" {{$residents->barangay == 'Calabuso' ? 'selected':'' }}>Calabuso </option>
                                            <option value="Dapdap East" {{$residents->barangay == 'Dapdap East' ? 'selected':'' }}>Dapdap East</option>
                                            <option value="Dapdap West" {{$residents->barangay == 'Dapdap West' ? 'selected':'' }}>Dapdap West</option>
                                            <option value="Francisco " {{$residents->barangay == 'Francisco' ? 'selected':'' }}>Francisco</option>
                                            <option value="Guinhawa North" {{$residents->barangay == 'Guinhawa North' ? 'selected':'' }}>Guinhawa North</option>
                                            <option value="Guinhawa South" {{$residents->barangay == 'Guinhawa South' ? 'selected':'' }}>Guinhawa South</option>
                                            <option value="Iruhin Central" {{$residents->barangay == 'Iruhin Central' ? 'selected':'' }}>Iruhin Central</option>
                                            <option value="Iruhin East" {{$residents->barangay == 'Iruhin East' ? 'selected':'' }}>Iruhin East </option>
                                            <option value="Iruhin West" {{$residents->barangay == 'Iruhin West' ? 'selected':'' }}>Iruhin West</option>
                                            <option value="Kaybagal Central" {{$residents->barangay == 'Kaybagal Central' ? 'selected':'' }}>Kaybagal Central</option>
                                            <option value="Kaybagal North" {{$residents->barangay == 'Kaybagal North' ? 'selected':'' }}>Kaybagal North</option>
                                            <option value="Kaybagal South" {{$residents->barangay == 'Kaybagal South' ? 'selected':'' }}>Kaybagal South</option>
                                            <option value="Mag-asawang Ilat" {{$residents->barangay == 'Mag-asawang Ilat' ? 'selected':'' }}>Mag-asawang Ilat</option>
                                            <option value="Maharlika East" {{$residents->barangay == 'Maharlika East' ? 'selected':'' }}>Maharlika East</option>
                                            <option value="Maharlika West" {{$residents->barangay == 'Maharlika West' ? 'selected':'' }}>Maharlika West</option>
                                            <option value="Maitim II Central" {{$residents->barangay == 'Maitim II Central' ? 'selected':'' }}>Maitim II Central</option>
                                            <option value="Maitim II  East" {{$residents->barangay == 'Maitim II East' ? 'selected':'' }}>Maitim II East</option>
                                            <option value="Maitim II West" {{$residents->barangay == 'Maitim II West' ? 'selected':'' }}>Maitim II West</option>
                                            <option value="Mendez Crossing East" {{$residents->barangay == 'Mendez Crossing East' ? 'selected':'' }}>Mendez Crossing East </option>
                                            <option value="Mendez Crossing West" {{$residents->barangay == 'Mendez Crossing West' ? 'selected':'' }}>Mendez Crossing West</option>
                                            <option value="Neogan" {{$residents->barangay == 'Neogan' ? 'selected':'' }}>Neogan</option>
                                            <option value="Patutong Malaki North" {{$residents->barangay == 'Patutong Malaki North' ? 'selected':'' }}>Patutong Malaki North</option>
                                            <option value="Patutong Malaki South" {{$residents->barangay == 'Patutong Malaki South' ? 'selected':'' }}>Patutong Malaki South</option>
                                            <option value="Sambong" {{$residents->barangay == 'Sambong' ? 'selected':'' }}>Sambong</option>
                                            <option value="San Jose" {{$residents->barangay == 'San Jose' ? 'selected':'' }}>San Jose</option>
                                            <option value="Silang Crossing East" {{$residents->barangay == 'Silang Crossing East' ? 'selected':'' }}>Silang Crossing East </option>
                                            <option value="Silang Crossing West" {{$residents->barangay == 'Silang Crossing West' ? 'selected':'' }}>Silang Crossing West</option>
                                            <option value="Sungay East" {{$residents->barangay == 'Sungay East' ? 'selected':'' }}>Sungay East</option>
                                            <option value="Sungay West" {{$residents->barangay == 'Sungay West' ? 'selected':'' }}>Sungay West</option>
                                            <option value="Tolentino East" {{$residents->barangay == 'Tolentino East' ? 'selected':'' }}>Tolentino East</option>
                                            <option value="Tolentino West" {{$residents->barangay == 'Tolentino West' ? 'selected':'' }}>Tolentino West</option>
                                            <option value="Zambal" {{$residents->barangay == 'Zambal' ? 'selected':'' }}>Zambal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">e. Purok/Sitio:</p>
                                    <div class="col-sm-6">
                                        <input name="purok" class="form-control input-sm" type="text" placeholder="" value="{{$residents->purok}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">f. Street:</p>
                                    <div class="col-sm-6">
                                        <input name="street" class="form-control input-sm" type="text" placeholder="" value="{{$residents->street}}" required />
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">g. House/Building Number:</p>
                                    <div class="col-sm-6">
                                        <input name="housenum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" value="{{$residents->housenum}}" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">h. Unit Number:</p>
                                    <div class="col-sm-6">
                                        <input name="unitnum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" value="{{$residents->unitnum}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">III. House Control Number
                                        (HCN):</label>
                                    <div class="col-sm-6">
                                        <input name="housecontrolnum" class="form-control input-sm" min="0" max="99999999999999" type="number" value="{{$residents->housecontrolnum}}" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">IV. Name of Household
                                        Head:</label>
                                    <div class="col-sm-6">
                                        <input name="headname" class="form-control input-sm" type="text" placeholder="" value="{{$residents->headname}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">V. Name of Respondent:</label>
                                    <div class="col-sm-6">
                                        <input name="respondentname" class="form-control input-sm" type="text" placeholder="" value="{{$residents->respondentname}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">VI. Start Date of
                                        Interview:</label>
                                    <div class="col-sm-6">
                                        <input name="startdate" class="form-control input-sm" type="date" placeholder="" value="{{$residents->startdate}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">VII. Time Started:</label>
                                    <div class="col-sm-6">
                                        <input name="timestart" class="form-control input-sm" type="time" placeholder="" value="{{$residents->timestart}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">VIII. Name of Enumerator:</label>
                                    <div class="col-sm-6">
                                        <input name="enumname" class="form-control input-sm" type="name" placeholder="" value="{{$residents->enumname}}" required />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($all as $residents)
<div class="modal fade" id="editmodal2{{$residents->id}}" aria-labelledby="exampleModalLabel" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Housing and Household Characteristics</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="{{ route('residents.update', $residents->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>B. HOUSING AND HOUSEHOLD CHARACTERISTICS</strong></h5><br>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">1. In what type of building does the
                                        household reside?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="housetype" value="{{$residents->housetype}}" required>
                                            <option value="">Select Building Type</option>
                                            <option value="Single house" {{$residents->housetype == 'Single house' ? 'selected':'' }}>Single house </option>
                                            <option value="Duplex" {{$residents->housetype == 'Duplex' ? 'selected':'' }}>Duplex </option>
                                            <option value="Multi-unit residential" {{$residents->housetype == 'Multi-unit residential' ? 'selected':'' }}>Multi-unit residential </option>
                                            <option value="Commercial, Industrial, Agricultural building or house" {{$residents->housetype == 'Commercial, Industrial, Agricultural building or house' ? 'selected':'' }}>Commercial / Industrial / Agricultural building/house </option>
                                            <option value="Institutional living quarters" {{$residents->housetype == 'Institutional living quarters' ? 'selected':'' }}>Institutional living quarters </option>
                                            <option value="Other housing unit" {{$residents->housetype == 'Other housing unit' ? 'selected':'' }}>Other housing unit </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">2. How many bedrooms does this
                                        housing unit have?</label>
                                    <div class="col-sm-6">
                                        <input name="bedroomnum" class="form-control input-sm" min="0" type="number" placeholder="" value="{{$residents->bedroomnum}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">3. How many storeys does this housing
                                        unit have?</label>
                                    <div class="col-sm-6">
                                        <input name="storeysnum" class="form-control input-sm" min="0" type="number" placeholder="" value="{{$residents->storeysnum}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">4. What type of construction
                                        materials are the roof made of?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="rooftype" value="{{$residents->rooftype}}" required>
                                            <option value="">Select Roof Type</option>
                                            <option value="Strong materials" {{$residents->rooftype == 'Strong materials' ? 'selected':'' }}>Strong materials (e.g. galvanized iron, aluminum, tile,
                                                concrete, brick, stone, asbestos)</option>
                                            <option value="Light materials" {{$residents->rooftype == 'Light materials' ? 'selected':'' }}>Light materials (e.g. cogon, nipa, anahaw)
                                            </option>
                                            <option value="Salvaged, makeshift materials" {{$residents->rooftype == 'Salvaged, makeshift materials' ? 'selected':'' }}>Salvaged/makeshift materials (e.g. tarpaulin,
                                                tent) </option>
                                            <option value="Mixed but predominantly strong materials" {{$residents->rooftype == 'Mixed but predominantly strong materials' ? 'selected':'' }}>Mixed but predominantly strong materials</option>
                                            <option value="Mixed but premoninantly light materials" {{$residents->rooftype == 'Mixed but premoninantly light materials' ? 'selected':'' }}>Mixed but premoninantly light materials </option>
                                            <option value="Mixed but predominantly salvaged materials" {{$residents->rooftype == 'Mixed but predominantly salvaged materials' ? 'selected':'' }}>Mixed but predominantly salvaged materials
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">5. What type of construction
                                        materials are the outer walls made of?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="walltype" value="{{$residents->walltype}}" required>
                                            <option>Select Wall Type</option>
                                            <option value="Strong materials" {{$residents->walltype == 'Strong materials' ? 'selected':'' }}>Strong materials (e.g. galvanized iron, aluminum, tile,
                                                concrete, brick, stone, asbestos)</option>
                                            <option value="Light materials" {{$residents->walltype == 'Light materials' ? 'selected':'' }}>Light materials (e.g. cogon, nipa, anahaw)
                                            </option>
                                            <option value="Salvaged or makeshift materials" {{$residents->walltype == 'Salvaged or makeshift materials' ? 'selected':'' }}>Salvaged/makeshift materials (e.g. tarpaulin,
                                                tent) </option>
                                            <option value="Mixed but predominantly strong materials" {{$residents->walltype == 'Mixed but predominantly strong materials' ? 'selected':'' }}>Mixed but predominantly strong materials</option>
                                            <option value="Mixed but premoninantly light materials" {{$residents->walltype == 'Mixed but premoninantly light materials' ? 'selected':'' }}>Mixed but premoninantly light materials </option>
                                            <option value="Mixed but predominantly salvaged materials" {{$residents->walltype == 'Mixed but predominantly salvaged materials' ? 'selected':'' }}>Mixed but predominantly salvaged materials
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">6. What type of construction
                                        materials are the floors made of?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="floortype" value="{{$residents->floortype}}" required>
                                            <option value="">Select Floor Type</option>
                                            <option value="Marble" {{$residents->floortype == 'Marble' ? 'selected':'' }}>Marble</option>
                                            <option value="Ceramic" {{$residents->floortype == 'Ceramic' ? 'selected':'' }}>Ceramic tiles </option>
                                            <option value="Cement" {{$residents->floortype == 'Cement' ? 'selected':'' }}>Cement</option>
                                            <option value="Vinyl and linoleum" {{$residents->floortype == 'Vinyl and linoleum' ? 'selected':'' }}>Vinyl, linoleum</option>
                                            <option value="Parquet and polished wood" {{$residents->floortype == 'Parquet and polished wood' ? 'selected':'' }}>Parquet, polished wood </option>
                                            <option value="Palm or Bamboo" {{$residents->floortype == 'Palm or Bamboo' ? 'selected':'' }}>Palm/ Bamboo</option>
                                            <option value="Wood planks" {{$residents->floortype == 'Wood planks' ? 'selected':'' }}>Wood planks</option>
                                            <option value="Natural floor" {{$residents->floortype == 'Natural floor' ? 'selected':'' }}>Natural floor (earth, sand, dung)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">7. How many nuclear families are
                                        there in the household?</label>
                                    <div class="col-sm-6">
                                        <input name="nucfam" class="form-control input-sm" min="0" type="number" placeholder="" value="{{$residents->nucfam}}" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">8. How many members are there in the
                                        household, including OFWs?</label>
                                    <div class="col-sm-6">
                                        <input name="housemembernum" class="form-control input-sm" min="0" type="number" placeholder="" value="{{$residents->housemembernum}}" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@foreach ($all as $residents)
<div class="modal fade" id="editmodal3{{$residents->id}}" aria-labelledby="exampleModalLabel" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Demography</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="{{ route('residents.update', $residents->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong> C. DEMOGRAPHY</strong></h5>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">9. Who is the head of household?</label>
                                    <div class="col-sm-6">
                                        <input name="householdhead" class="form-control input-sm" type="text" placeholder="Surname, First Name Middle Name" value="{{$residents->householdhead}}" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">9. Who are the other of members of the household</label>

                                    <div class="col-sm-6"><input name="householdmembername" class="form-control input-sm" type="text" placeholder="Surname, First Name Middle Name" value="{{$residents->householdmembername}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">10. What is the ___'s relationship to head of the household?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="reltohead" value="{{$residents->reltohead}}">
                                            <option value="">Select Relationship</option>
                                            <option value="Head" {{$residents->reltohead == 'Head' ? 'selected':'' }}>Head</option>
                                            <option value="Spouse" {{$residents->reltohead == 'Spouse' ? 'selected':'' }}>Spouse</option>
                                            <option value="Son" {{$residents->reltohead == 'Son' ? 'selected':'' }}>Son</option>
                                            <option value="Daughter" {{$residents->reltohead == 'Daughter' ? 'selected':'' }}>Daughter</option>
                                            <option value="Son in law" {{$residents->reltohead == 'Son-in-law' ? 'selected':'' }}>Son-in-law</option>
                                            <option value="Daughter in law" {{$residents->reltohead == 'Daughter-in-law' ? 'selected':'' }}>Daughter-in-law</option>
                                            <option value="Grandson" {{$residents->reltohead == 'Grandson' ? 'selected':'' }}>Grandson</option>
                                            <option value="Granddaughter" {{$residents->reltohead == 'Granddaughter' ? 'selected':'' }}>Granddaughter</option>
                                            <option value="Father" {{$residents->reltohead == 'Father' ? 'selected':'' }}>Father</option>
                                            <option value="Mother" {{$residents->reltohead == 'Mother' ? 'selected':'' }}>Mother</option>
                                            <option value="Other relatives" {{$residents->reltohead == 'Other relatives' ? 'selected':'' }}>Other relatives</option>
                                            <option value="Housemaid" {{$residents->reltohead == 'Housemaid' ? 'selected':'' }}>Housemaid</option>
                                            <option value="Houseboy" {{$residents->reltohead == 'Houseboy' ? 'selected':'' }}>Houseboy</option>
                                            <option value="Step son" {{$residents->reltohead == 'Step-son' ? 'selected':'' }}>Step-son</option>
                                            <option value="Step daughter" {{$residents->reltohead == 'Step-daughter' ? 'selected':'' }}>Step-daughter</option>
                                            <option value="Others" {{$residents->reltohead == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">11. In which nuclear family does ____ belong?</label>
                                    <div class="col-sm-6">
                                        <input name="nucfambelong" class="form-control input-sm" type="text" placeholder="" value="{{$residents->nucfambelong}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">12. Is ___ male or female?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="gender" id="gender" value="{{$residents->gender}}">
                                            <option value="">Select Gender</option>
                                            <option value="Male" {{$residents->gender == 'Male' ? 'selected':'' }}>Male</option>
                                            <option value="Female" {{$residents->gender == 'Female' ? 'selected':'' }}>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">13. When is ___'s date of birth</label>
                                    <div class="col-sm-6">
                                        <input name="birthdate" class="form-control input-sm" type="date" placeholder="" value="{{$residents->birthdate}}" />
                                    </div>
                                </div>
                                <div class="form-group row">

                                </div>




                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">14. Was ___'s birth registered with the civil registry office?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="birthregistered" value="{{$residents->birthregistered}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->birthregistered == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->birthregistered == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <small>(For 10 years old and above)</small>
                                <div class="form-group row">

                                    <label class="col-sm-5 col-form-label">15. What is ___'s marital status (civil status)? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="civilstatus" value="{{$residents->civilstatus}}">
                                            <option value="">Select</option>
                                            <option value="Single" {{$residents->civilstatus == 'Single' ? 'selected':'' }}>Single</option>
                                            <option value="Married" {{$residents->civilstatus == 'Married' ? 'selected':'' }}>Married</option>
                                            <option value="Widowed" {{$residents->civilstatus == 'Widowed' ? 'selected':'' }}>Widowed</option>
                                            <option value="Divorced or Separated" {{$residents->civilstatus == 'Divorced or Separated' ? 'selected':'' }}>Divorced/Separated</option>
                                            <option value="Common law or Live-in" {{$residents->civilstatus == 'Common-law or Live-in' ? 'selected':'' }}>Common-law/Live-in</option>
                                            <option value="Uknown" {{$residents->civilstatus == 'Uknown' ? 'selected':'' }}>Uknown</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">16. What is ___'s ethnicity by blood?</label>
                                    <div class="col-sm-6">
                                        <input name="ethnicity" class="form-control input-sm" type="text" value="{{$residents->ethnicity}}" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">17. What is religious affilation?</label>
                                    <div class="col-sm-6">
                                        <input name="religiousaffiliation" class="form-control input-sm" type="text" value="{{$residents->religiousaffiliation}}" placeholder="" />
                                    </div>
                                </div>
                                <small>(For 10 years old and above)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">18. Is ___ an overseas worker?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="ofw" id="ofw">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->ofw == 'Yes' ? 'selected':'' }}>Yes (Go to 19)</option>
                                            <option value="No" {{$residents->ofw == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <small>(For 10 years old and above)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">19. Where is ___'s country of destination? </label>
                                    <div class="col-sm-6">
                                    <input name="ofwcountry" class="form-control input-sm" type="text" value="{{$residents->ofwcountry}}" id="ofwcountry" />
                                    </div>

                                </div>
            
                                <small> (FOR 3 YEARS OLD AND ABOVE)</small>
                                <div class="form-group row">

                                    <label class="col-sm-5 col-form-label">20. Where was___ residing 3 years ago?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="residing" id="residing">
                                            <option value="">Select</option>
                                            <option value="Same address now" {{$residents->residing == 'Same address now' ? 'selected':'' }}>Same address now</option>
                                            <option value="Other address" {{$residents->residing == 'Other address' ? 'selected':'' }}>Other address, specify</option>
                                        </select>

                                    </div>


                                </div>

                                <div class="form-group row">

                                    <label class="col-sm-5 col-form-label">Other address</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="residingo" class="form-control input-sm" name="residingo" value="{{$residents->residingo == 'residingo' ? 'selected':'' }}" />

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


@foreach ($all as $residents)
<div class="modal fade" id="editmodal4{{$residents->id}}" aria-labelledby="exampleModalLabel" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Education and Literacy</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('residents.update', $residents->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>D. EDUCATION AND LITERACY</strong></h5>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">21. Is ___ currently attending school? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="attendschool" id="attendschool" value="{{$residents->attendschool}}" >
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->attendschool == 'Yes' ? 'selected':'' }}>Yes </option>
                                            <option value="No" {{$residents->attendschool == 'No' ? 'selected':'' }}>No (Go to 24)</option>
                                        </select>
                                    </div>
                                </div>
                                <small>IF YES IN (21) (FOR 3 YEARS OLD AND ABOVE) </small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">22. What grade or year is ___ currently attending?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="yearlevel" value="{{$residents->yearlevel}}" id="yearlevel">
                                            <option value="">Select Grade</option>
                                            <option value="No Grade" {{$residents->yearlevel == 'No Grade' ? 'selected':'' }}>No Grade </option>
                                            <option value="Day Care" {{$residents->yearlevel == 'Day Care' ? 'selected':'' }}>Day Care</option>
                                            <option value="Kindergarten" {{$residents->yearlevel == 'Kindergarten' ? 'selected':'' }}>Kindergarten</option>
                                            <option value="Grade I" {{$residents->yearlevel == 'Grade I' ? 'selected':'' }}>Grade I</option>
                                            <option value="Grade II" {{$residents->yearlevel == 'Grade II' ? 'selected':'' }}>Grade II</option>
                                            <option value="Grade III" {{$residents->yearlevel == 'Grade III' ? 'selected':'' }}>Grade III</option>
                                            <option value="Grade IV" {{$residents->yearlevel == 'Grade IV' ? 'selected':'' }}>Grade IV</option>
                                            <option value="Grade V" {{$residents->yearlevel == 'Grade V' ? 'selected':'' }}>Grade V</option>
                                            <option value="Grade VI" {{$residents->yearlevel == 'Grade VI' ? 'selected':'' }}>Grade VI</option>
                                            <option value="Grade 7" {{$residents->yearlevel == 'Grade 7' ? 'selected':'' }}>Grade 7</option>
                                            <option value="Grade 8" {{$residents->yearlevel == 'Grade 8' ? 'selected':'' }}>Grade 8</option>
                                            <option value="Grade 9" {{$residents->yearlevel == 'Grade 9' ? 'selected':'' }}>Grade 9</option>
                                            <option value="Grade 10" {{$residents->yearlevel == 'Grade 10' ? 'selected':'' }}>Grade 10</option>
                                            <option value="Grade 11" {{$residents->yearlevel == 'Grade 11' ? 'selected':'' }}>Grade 11</option>
                                            <option value="Grade 12" {{$residents->yearlevel == 'Grade 12' ? 'selected':'' }}>Grade 12</option>
                                            <option value="1st Year PS or N-T or TV" {{$residents->yearlevel == '1st Year PS or N-T or TV' ? 'selected':'' }}>1st Year PS/N-T/TV</option>
                                            <option value="2nd Year PS or N-T or TV" {{$residents->yearlevel == '2nd Year PS or N-T or TV' ? 'selected':'' }}>2nd Year PS/N-T/TV</option>
                                            <option value="1st Year College" {{$residents->yearlevel == '1st Year College' ? 'selected':'' }}>1st Year College</option>
                                            <option value="2nd Year College" {{$residents->yearlevel == '2nd Year College' ? 'selected':'' }}>2nd Year College</option>
                                            <option value="3rd Year College" {{$residents->yearlevel == '3rd Year College' ? 'selected':'' }}>3rd Year College</option>
                                            <option value="4th Year College or higher" {{$residents->yearlevel == '4th Year College or higher' ? 'selected':'' }}>4th Year College or higher</option>
                                            <option value="ALS Elementary" {{$residents->yearlevel == 'ALS Elementary' ? 'selected':'' }}>ALS Elementary</option>
                                            <option value="ALS Secondary" {{$residents->yearlevel == 'ALS Secondary' ? 'selected':'' }}>ALS Secondary</option>
                                            <option value="SPED Elementary" {{$residents->yearlevel == 'SPED Elementary' ? 'selected':'' }}>SPED Elementary</option>
                                            <option value="SPED Secondary" {{$residents->yearlevel == 'SPED Secondary' ? 'selected':'' }}>SPED Secondary</option>
                                            <option value="Post Grad with units" {{$residents->yearlevel == 'Post Grad with units' ? 'selected':'' }}>Post Grad with units</option>
                                        </select>
                                    </div>
                                </div>
                                <small>IF YES IN (21) (FOR 3 YEARS OLD AND ABOVE)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">23. Where does ___ attend school? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="schooltype" value="{{$residents->schooltype}}">
                                            <option value="">Select school type</option>
                                            <option value="Public" {{$residents->schooltype == 'Public' ? 'selected':'' }}>Public </option>
                                            <option value="Private" {{$residents->schooltype == 'Private' ? 'selected':'' }}>Private </option>
                                        </select>
                                    </div>
                                </div>
                                <small>IF NO IN (21) FOR 3-24 YEARS OLD</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">24. Why is ___ not attending school?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="notattending" onchange='checkvalue(this.value)' value="{{$residents->notattending}}">
                                            <option value="">Select reason</option>
                                            <option value="Schools are very far" {{$residents->notattending == 'Schools are very far' ? 'selected':'' }}>Schools are very far </option>
                                            <option value="No school within the barangay" {{$residents->notattending == 'No school within the barangay' ? 'selected':'' }}>No school within the barangay </option>
                                            <option value="No regular transportation" {{$residents->notattending == 'No regular transportation' ? 'selected':'' }}>No regular transportation </option>
                                            <option value="High cost of education or Financial concern" {{$residents->notattending == 'High cost of education or Financial concern' ? 'selected':'' }}>High cost of education/ Financial concern </option>
                                            <option value="Illness or Disability" {{$residents->notattending == 'Illness or Disability' ? 'selected':'' }}>Illness/Disability </option>
                                            <option value="Housekeeping or Taking care of siblings" {{$residents->notattending == 'Housekeeping or Taking care of siblings' ? 'selected':'' }}>Housekeeping/Taking care of siblings </option>
                                            <option value="Marriage or Cohabitation" {{$residents->notattending == 'Marriage or Cohabitation' ? 'selected':'' }}>Marriage/Cohabitation </option>
                                            <option value="Employment or looking for work" {{$residents->notattending == 'Employment or looking for work' ? 'selected':'' }}>Employment/looking for work </option>
                                            <option value="Cannot cope with school work" {{$residents->notattending == 'Cannot cope with school work' ? 'selected':'' }}>Cannot cope with school work </option>
                                            <option value="Finished schooling" {{$residents->notattending == 'Finished schooling' ? 'selected':'' }}>Finished schooling </option>
                                            <option value="Problem with school record" {{$residents->notattending == 'Problem with school record' ? 'selected':'' }}>Problem with school record </option>
                                            <option value="Problem with birth certificate" {{$residents->notattending == 'Problem with birth certificate' ? 'selected':'' }}>Problem with birth certificate </option>
                                            <option value="To young to go to school" {{$residents->notattending == 'To young to go to school' ? 'selected':'' }}>To young to go to school </option>
                                            <option value="Got pregnant" {{$residents->notattending == 'Got pregnant' ? 'selected':'' }}>Got pregnant </option>
                                            <option value="Others" {{$residents->notattending == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                (FOR 3 YEARS OLD AND ABOVE)
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">25. What is the highest educational attainment completed by ___?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="educcompleted" value="{{$residents->educcompleted}}">
                                            <option value="">Select Educational Attainment Completed</option>
                                            <option value="No Grade" {{$residents->educcompleted == 'No Grade' ? 'selected':'' }}>No Grade </option>
                                            <option value="Day Care" {{$residents->educcompleted == 'Day Care' ? 'selected':'' }}>Day Care</option>
                                            <option value="Kindergarten" {{$residents->educcompleted == 'Kindergarten' ? 'selected':'' }}>Kindergarten</option>
                                            <option value="Grade I" {{$residents->educcompleted == 'Grade I' ? 'selected':'' }}>Grade I</option>
                                            <option value="Grade II" {{$residents->educcompleted == 'Grade II' ? 'selected':'' }}>Grade II</option>
                                            <option value="Grade III" {{$residents->educcompleted == 'Grade III' ? 'selected':'' }}>Grade III</option>
                                            <option value="Grade IV" {{$residents->educcompleted == 'Grade IV' ? 'selected':'' }}>Grade IV</option>
                                            <option value="Grade V" {{$residents->educcompleted == 'Grade V' ? 'selected':'' }}>Grade V</option>
                                            <option value="Grade VI" {{$residents->educcompleted == 'Grade VI' ? 'selected':'' }}>Grade VI</option>
                                            <option value="Elementary Graduate" {{$residents->educcompleted == 'Elementary Graduate' ? 'selected':'' }}>Elementary Graduate</option>
                                            <option value="Grade 7" {{$residents->educcompleted == 'Grade 7' ? 'selected':'' }}>Grade 7</option>
                                            <option value="Grade 8" {{$residents->educcompleted == 'Grade 8' ? 'selected':'' }}>Grade 8</option>
                                            <option value="Grade 9" {{$residents->educcompleted == 'Grade 9' ? 'selected':'' }}>Grade 9</option>
                                            <option value="Grade 10" {{$residents->educcompleted == 'Grade 10' ? 'selected':'' }}>Grade 10</option>
                                            <option value="Grade 11" {{$residents->educcompleted == 'Grade 11' ? 'selected':'' }}>Grade 11</option>
                                            <option value="Grade 12" {{$residents->educcompleted == 'Grade 12' ? 'selected':'' }}>Grade 12</option>
                                            <option value="High school graduate - Old curriculum" {{$residents->educcompleted == 'High school graduate - Old curriculum' ? 'selected':'' }}>High school graduate (Old curriculum)</option>
                                            <option value="Senior High school graduate" {{$residents->educcompleted == 'Senior High school graduate - K-12 curriculum' ? 'selected':'' }}>Senior High school graduate (K-12 curriculum)</option>
                                            <option value="1st Year PS or N-T or TV" {{$residents->educcompleted == '1st Year PS or N-T or TV' ? 'selected':'' }}>1st Year PS/N-T/TV</option>
                                            <option value="2nd Year PS or N-T or TV" {{$residents->educcompleted == '2nd Year PS or N-T or TV' ? 'selected':'' }}>2nd Year PS/N-T/TV</option>
                                            <option value="Post secondary graduate" {{$residents->educcompleted == 'Post secondary graduate' ? 'selected':'' }}>Post secondary graduate</option>
                                            <option value="1st Year College" {{$residents->educcompleted == '1st Year College' ? 'selected':'' }}>1st Year College</option>
                                            <option value="2nd Year College" {{$residents->educcompleted == '2nd Year College' ? 'selected':'' }}>2nd Year College</option>
                                            <option value="3rd Year College" {{$residents->educcompleted == '3rd Year College' ? 'selected':'' }}>3rd Year College</option>
                                            <option value="4th Year College or higher" {{$residents->educcompleted == '4th Year College or higher' ? 'selected':'' }}>4th Year College or higher</option>
                                            <option value="College graduate" {{$residents->educcompleted == 'College graduate' ? 'selected':'' }}>College graduate</option>
                                            <option value="ALS Elementary" {{$residents->educcompleted == 'ALS Elementary' ? 'selected':'' }}>ALS Elementary</option>
                                            <option value="ALS Secondary" {{$residents->educcompleted == 'ALS Secondary' ? 'selected':'' }}>ALS Secondary</option>
                                            <option value="SPED Elementary" {{$residents->educcompleted == 'SPED Elementary' ? 'selected':'' }}>SPED Elementary</option>
                                            <option value="SPED Secondary" {{$residents->educcompleted == 'SPED Secondary' ? 'selected':'' }}>SPED Secondary</option>
                                            <option value="SPED Graduate" {{$residents->educcompleted == 'SPED Graduate' ? 'selected':'' }}>SPED Graduate</option>
                                            <option value="Post Grad with units" {{$residents->educcompleted == 'Post Grad with units' ? 'selected':'' }}>Post Grad with units</option>
                                            <option value="Masters or PhD graduate" {{$residents->educcompleted == 'Masters or PhD graduate' ? 'selected':'' }}>Masters or PhD graduate</option>
                                        </select>
                                    </div>
                                </div>
                                (FOR 3 YEARS OLD AND ABOVE)
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">26. If senior high school graduate, what is ___'s track/strand?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="shsstrand" value="{{$residents->shsstrand}}">
                                            <option value="">Select Strand</option>
                                            <option value="Accountancy, Business and Management" {{$residents->shsstrand == 'Accountancy, Business and Management' ? 'selected':'' }}>Accountancy, Business and Management</option>
                                            <option value="Science, Technology, Engineering, and Mathematics" {{$residents->shsstrand == 'Science, Technology, Engineering, and Mathematics' ? 'selected':'' }}>Science, Technology, Engineering, and Mathematics</option>
                                            <option value="Humanities and Social Sciences" {{$residents->shsstrand == 'Humanities and Social Sciences' ? 'selected':'' }}>Humanities and Social Sciences</option>
                                            <option value="General Academic" {{$residents->shsstrand == 'General Academic' ? 'selected':'' }}>General Academic</option>
                                            <option value="Home Economics" {{$residents->shsstrand == 'Home Economics' ? 'selected':'' }}>Home Economics</option>
                                            <option value="Agri-Fishery" {{$residents->shsstrand == 'Agri-Fishery' ? 'selected':'' }}>Agri-Fishery</option>
                                            <option value="Industrial Arts" {{$residents->shsstrand == 'Industrial Arts' ? 'selected':'' }}>Industrial Arts</option>
                                            <option value="Information and Communication Technology" {{$residents->shsstrand == 'Information and Communication Technology' ? 'selected':'' }}>Information and Communication Technology or ICT</option>
                                            <option value="Sports" {{$residents->shsstrand == 'Sports' ? 'selected':'' }}>Sports</option>
                                            <option value="Arts and Design" {{$residents->shsstrand == 'Arts and Design' ? 'selected':'' }}>Arts and Design</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">27. If at least college graduate, what is ___'s college course></label>
                                    <div class="col-sm-6">
                                        <input name="collegecourse" class="form-control input-sm" type="text" placeholder="" value="{{$residents->collegecourse}}" />
                                    </div>
                                </div>




                            </div>
                            <div class="col-md-6">
                                <small> For 10-64 YEARS OLD ONLY </small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">28. Is ___ currently attending any skills training? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="training" value="{{$residents->training}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->training == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->training == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">29. Have ___ attended any skills training in the past?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="pasttraining" value="{{$residents->pastraining}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->pasttraining == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->pasttraining == 'No' ? 'selected':'' }}>No (Go to 31)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">30. How many skills training have ___ attended including the current one?</label>
                                    <div class="col-sm-6">
                                        <input name="trainnum" class="form-control input-sm" type="number" min="0" placeholder="" value="{{$residents->trainum}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Training Programs</label>
                                    <div class="col-sm-6">
                                        <input name="trainprogram" class="form-control input-sm" type="text" placeholder="" value="{{$residents->trainprogram}}" />
                                    </div>
                                </div>
                                <small> IF NOT AT LEAST HIGH SCHOOL GRADUATE</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">31. Can ___ read and write a simple message in any language or dialect?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="literate" value="{{$residents->literate}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->literate == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->literate == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <h5><strong>E. POLITICAL PARTICIPATION</strong></h5>
                                <small> (FOR 16 YEARS OLD AND ABOVE)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">32. Is ____ a registered voter? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="voter" value="{{$residents->voter}}" id="voter">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->voter == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->voter == 'No' ? 'selected':'' }}>No (GO TO 34)</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">33. Did ___ vote in the last election? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="votedlast" value="{{$residents->votedlast}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->votedlast == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->votedlast == 'No' ? 'selected':'' }}>No</option>
                                            <option value="Dont Know" {{$residents->votedlast == 'Dont Know ' ? 'selected':'' }}>Don't know</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach

@foreach ($all as $residents)
<div class="modal fade" id="editmodal5{{$residents->id}}" aria-labelledby="exampleModalLabel" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Economic Activity</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('residents.update', $residents->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>F. ECONOMIC ACTIVITY</strong></h5>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">34. Did ___ do any work for at least 1 hour during the past week?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="job" id="job" value="{{$residents->job}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->job == 'Yes' ? 'selected':'' }}>Yes (Go to 36)</option>
                                            <option value="No" {{$residents->job == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">35. Although ___ did not work, did ___ have a job or business during the past
                                        week?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="nwork" id="nwork" value="{{$residents->nwork}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->nwork == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->nwork == 'No' ? 'selected':'' }}>No (Go to 45)</option>
                                        </select>
                                    </div>
                                </div>
                                <small>IF YES IN 34 OR YES IN 35</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">36. How many work, jobs, or businesses does ___ have?</label>
                                    <div class="col-sm-6">
                                        <input name="jobnum" class="form-control input-sm" type="number" min="0" id="jobnum" value="{{$residents->jobnum}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">37. What was ___'s primary occupation during the past week?</label>
                                    <div class="col-sm-6">
                                        <input name="occup" class="form-control input-sm" type="text" id="occup" value="{{$residents->occup}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Code </label>
                                    <div class="col-sm-6">
                                        <input name="occupcode" class="form-control input-sm" type="number" min="0" id="occupcode" value="{{$residents->occupcode}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">38. In what kind of industry did ___ work during the past week?</label>
                                    <div class="col-sm-6">
                                        <input name="industry" class="form-control input-sm" type="text" id="industry" value="{{$residents->industry}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Code</label>
                                    <div class="col-sm-6">
                                        <input name="industrycode" class="form-control input-sm" type="text" min="0" id="industrycode" value="{{$residents->industrycode}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">39. What is ___'s nature of employment?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="employ" id="employ" value="{{$residents->employ}}">
                                            <option value="">Select nature of employment</option>
                                            <option value="Permanent job or business or unpaid family work" {{$residents->employ == 'Permanent job or business or unpaid family work' ? 'selected':'' }}>Permanent job/business/unpaid family work</option>
                                            <option value="Short-term or seasonal or casual job or business or unpaid family work" {{$residents->employ == 'Short-term or seasonal or casual job or business or unpaid family work' ? 'selected':'' }}>Short-term or seasonal or casual job/business/unpaid family work
                                            </option>
                                            <option value="Worked for different employeers or customers on day-to-day or
                                                week-to-week basis" {{$residents->employ == 'Worked for different employeers or customers on day-to-day or
                                                week-to-week basis' ? 'selected':'' }}>Worked for different employeers or customers on day-to-day or
                                                week-to-week basis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">40. What was ___'s normal working number of hours per day during the past week?</label>
                                    <div class="col-sm-6">
                                        <input name="employhrs" class="form-control input-sm" type="number" id="employhrs" value="{{$residents->employhrs}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">41. What was __'s total number of hours duing the past week?</label>
                                    <div class="col-sm-6">
                                        <input name="employthrs" class="form-control input-sm" type="number" id="employthrs" value="{{$residents->employthrs}}" />
                                    </div>
                                </div>
                                <small> FOR 15 YEARS OLD AND ABOVE</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">42. Did ___ want more hours or work during the past week?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="addhrsworkpast" id="addhrsworkpast" value="{{$residents->addhrsworkpast}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->addhrsworkpast == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->addhrsworkpast == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <small> IF YES IN 34 OR YES IN 35</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">43. Did ___ look for additional work during the past week?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="addextrawork" id="addextrawork" value="{{$residents->addextrawork}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->addextrawork == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->addextrawork == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">44. What is ___'s class of worker?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="classworker" id="classworker" value="{{$residents->classworker}} ">
                                            <option value="">Select Class of Worker</option>
                                            <option value="Working for private household" {{$residents->classworker == 'Working for private household' ? 'selected':'' }}>Working for private household</option>
                                            <option value="Working for private business or establishment or farm" {{$residents->classworker == 'Working for private business or establishment or farm' ? 'selected':'' }}>Working for private business/establishment/farm</option>
                                            <option value="Working for government or government corporation" {{$residents->classworker == 'Working for government or government corporation' ? 'selected':'' }}>Working for government/government corporation</option>
                                            <option value="Self-employed with no paid employee" {{$residents->classworker == 'Self-employed with no paid employee' ? 'selected':'' }}>Self-employed with no paid employee</option>
                                            <option value="Working with pay on own family-operated farm or business' ? 'selected':'' }}>Working with pay on own family-operated farm or business" {{$residents->classworker == 'Employer in own family-operated farm or business' ? 'selected':'' }}>Employer in own family-operated farm or business</option>
                                            <option value="Working with pay on own family-operated farm or business" {{$residents->classworker == 'Working with pay on own family-operated farm or business' ? 'selected':'' }}>Working with pay on own family-operated farm or business</option>
                                            <option value="Working without pay on own family-operated farm or business" {{$residents->classworker == 'Working without pay on own family-operated farm or business' ? 'selected':'' }}>Working without pay on own family-operated farm or business
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">45. Did ___ look for work or try to establish business during the past week?
                                    </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="fjobpast" id="fjobpast" value="{{$residents->fjobpast}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->fjobpast == 'Yes' ? 'selected':'' }}>Yes </option>
                                            <option value="No" {{$residents->fjobpast == 'No' ? 'selected':'' }}>No (Go to 49)</option>
                                        </select>
                                    </div>
                                </div>




                            </div>

                            <div class="col-md-6">

                                <small>IF NO IN (34) AND NO IN (35)</small><br>
                                <small> IF YES IN (45)</small><br>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">46. Was this ___'s first time to look for work or try to establish a
                                        business?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="findwork" id="findwork" value="{{$residents->findwork}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->findwork == 'Yes' ? 'selected':'' }}>Yes </option>
                                            <option value="No" {{$residents->findwork == 'No' ? 'selected':'' }}>No </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">47. What has ___ been doing to find work?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="rfindwork" id="rfindwork" value="{{$residents->rfindwork}}">
                                            <option value="">Select Reason</option>
                                            <option value="Registered in public employment agency" {{$residents->rfindwork == 'Registered in public employment agency' ? 'selected':'' }}>Registered in public employment agency</option>
                                            <option value="Registered in private employment agency" {{$residents->rfindwork == 'Registered in private employment agency' ? 'selected':'' }}>Registered in private employment agency</option>
                                            <option value="Approached employer directly" {{$residents->rfindwork == 'Approached employer directly' ? 'selected':'' }}>Approached employer directly</option>
                                            <option value="Approached relatives or friends" {{$residents->rfindwork == 'Approached relatives or friends' ? 'selected':'' }}>Approached relatives or friends</option>
                                            <option value="Placed or answered advertisements" {{$residents->rfindwork == 'Placed or answered advertisements' ? 'selected':'' }}>Placed or answered advertisements</option>
                                            <option value="Search and applied online" {{$residents->rfindwork == 'Search and applied online' ? 'selected':'' }}>Search and applied online</option>
                                            <option value="Others" {{$residents->rfindwork == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">48. How many weeks has ___ been looking for work? </label>
                                    <div class="col-sm-6">
                                        <input name="findworknum" class="form-control input-sm" type="number" min="0" placeholder="" id="findworknum" value="{{$residents->findworknum}}" />
                                    </div>
                                </div>
                                <small>IF NO IN (45)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">49. Why did ___ not look for work</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="rfnotwork" id="rfnotwork" value="{{$residents->rfnotwork}}">
                                            <option value="">Select Reason</option>
                                            <option value="Tired or Believes no work is available" {{$residents->rfnotwork == 'Tired or Believes no work is available' ? 'selected':'' }}>Tired/Believes no work is available </option>
                                            <option value="Awaiting results of previous job application" {{$residents->rfnotwork == 'Awaiting results of previous job application' ? 'selected':'' }}>Awaiting results of previous job application</option>
                                            <option value="Temporary illness or disability" {{$residents->rfnotwork == 'Temporary illness or disability' ? 'selected':'' }}>Temporary illness/disability</option>
                                            <option value="Bad weather" {{$residents->rfnotwork == 'Bad weather' ? 'selected':'' }}>Bad weather </option>
                                            <option value="Waiting for retire" {{$residents->rfnotwork == 'Waiting for retire' ? 'selected':'' }}>Waiting for retire</option>
                                            <option value="Too young or old or retired or permanent disability" {{$residents->rfnotwork == 'Too young or old or retired or permanent disability' ? 'selected':'' }}>Too young/old or retired/permanent disability</option>
                                            <option value="Household and family duties" {{$residents->rfnotwork == 'Household, family duties' ? 'selected':'' }}>Household, family duties</option>
                                            <option value="Schooling" {{$residents->rfnotwork == 'Schooling' ? 'selected':'' }}>Schooling</option>
                                            <option value="Others" {{$residents->rfnotwork == 'Others' ? 'selected':'' }}>Others </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">50. When was the last time ___ looked for work?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="lastlookjob" id="lastlookjob" value="{{$residents->lastlookjob}}">
                                            <option value="">Select</option>
                                            <option value="Within last month" {{$residents->lastlookjob == 'Within last month' ? 'selected':'' }}>Within last month</option>
                                            <option value="'One to six months" {{$residents->lastlookjob == 'One to six months' ? 'selected':'' }}>One to six months</option>
                                            <option value="More then six months" {{$residents->lastlookjob == 'More then six months' ? 'selected':'' }}>More then six months</option>
                                            <option value="Never" {{$residents->lastlookjob == 'Never' ? 'selected':'' }}>Never</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">51. Had opportunity for work existed lass week or within two weeks, would ___
                                        been available? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="pastwillingwork" id="pastwillingwork" value="{{$residents->pastwillingwork}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->pastwillingwork == 'Yes' ? 'selected':'' }}>Yes </option>
                                            <option value="No" {{$residents->pastwillingwork == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">52. Was ___ willing to take up work during the past week or within 2
                                        weeks?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="willingtotakeupwork" id="willingtotakeupwork" value="{{$residents->willingtotakeupwork}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->willingtotakeupwork == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->willingtotakeupwork == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <small>DO NOT INCLUDE SALARY OF HOUSEHOLD MEMBERS WHO ARE OFW AND HOUSEMAID/BOYS</small>
                                <div class="form-group row" class="cashsalary">
                                    <label class="col-sm-5 col-form-label">53. In the past 12 months, how much total salary/wages, did ___ receive? (CASH)</label>
                                    <div class="col-sm-6">
                                        <input name="cashsalary" class="form-control input-sm" type="number" min="0" placeholder="" value="{{$residents->cashsalary}}" />
                                    </div>
                                </div>
                                <div class="form-group row" class="kindsalary">
                                    <label class="col-sm-5 col-form-label">53. In the past 12 months, how much total salary/wages, did ___ receive? (KIND)</label>

                                    <div class="col-sm-6">
                                        <input name="kindsalary" class="form-control input-sm" type="number" min="0" placeholder="" value="{{$residents->kindsalary}}" />
                                    </div>
                                </div>
                                <small> FOR 18 YEARS OLD AND ABOVE </small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">54. Is ___ a member of SSS?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="sssmember" value="{{$residents->sssmember}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->sssmember == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->sssmember == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">55. Is ___ a member of GSIS?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="gsismember" value="{{$residents->gsismember}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->gsismember == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->gsismember == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">56. Is ___ a member of PhilHealth?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="philhealthmember" id="philhealthmember" value="{{$residents->philhealthmember}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->philhealthmember == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->philhealthmember == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>

                                <small>IF YES IN (56)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">57. What is ___'s membership type?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="membertype" id="membertype" value="{{$residents->membertype}}">
                                            <option value="">Select Membership Type</option>
                                            <option value="PhilHealth - OFW" {{$residents->membertype == 'PhilHealth - OFW' ? 'selected':'' }}>PhilHealth - OFW</option>
                                            <option value="PhilHealth - Employed" {{$residents->membertype == 'PhilHealth - Employed' ? 'selected':'' }}>PhilHealth - Employed</option>
                                            <option value="PhilHealth - Individually paying" {{$residents->membertype == 'PhilHealth - Individually paying' ? 'selected':'' }}>PhilHealth - Individually-paying</option>
                                            <option value="PhilHealth - Sponsored" {{$residents->membertype == 'PhilHealth - Sponsored' ? 'selected':'' }}>PhilHealth - Sponsored</option>
                                            <option value="PhilHealth - Lifetime" {{$residents->membertype == 'PhilHealth - Lifetime' ? 'selected':'' }}>PhilHealth - Lifetime</option>
                                            <option value="PhilHealth - Senior Citizen" {{$residents->membertype == 'PhilHealth - Senior Citizen' ? 'selected':'' }}>PhilHealth - Senior-Citizen</option>
                                            <option value="PhilHealth - Indigent" {{$residents->membertype == 'PhilHealth - Indigent' ? 'selected':'' }}>PhilHealth - Indigent</option>
                                        </select>
                                    </div>
                                </div>
                                <small>IF NO IN (56)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">58. Is a dependendent of a PhilHealth member?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="philhealthdependent" id="philhealthdependent" value="{{$residents->philhealthdependent}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->philhealthdependent == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->philhealthdependent == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach

@foreach ($all as $residents)
<div class="modal fade" id="editmodal6{{$residents->id}}" aria-labelledby="exampleModalLabel" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Other Characteristics of Household Members</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="{{ route('residents.update', $residents->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>G. OTHER CHARACTERISTICS OF HOUSEHOLD MEMBERS</strong></h5>
                                <small>IF CODE 2 IN (12)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">59. Is ___ pregnant?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="pregnant" id="pregnant" value="{{$residents->pregnant}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->pregnant == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->pregnant == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">60. Is ___ a solo parent taking care of a child/children?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="soloparent" id="soloparent" value="{{$residents->soloparent}}" >
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->soloparent == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->soloparent == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <small> IF YES IN (60)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">61. Does ___ have a Solo Parent ID?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="soloparentid" id="soloparentid" value="{{$residents->soloparentid}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->soloparentid == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->soloparentid == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">62. Does ___ have any physical or mental disability?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="disability" id="disability" value="{{$residents->disability}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->disability == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->disability == 'No' ? 'selected':'' }}>No (Go to 65)</option>
                                        </select>
                                    </div>
                                </div>
                                <small> IF YES IN (62)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">63. What type of disability does ___ have?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="disabilitytype" id="disabilitytype" value="{{$residents->disabilitytype}}">
                                            <option value="">Select type of Disability</option>
                                            <option value="Mental or Intellectual" {{$residents->disabilitytype == 'Mental or Intellectual' ? 'selected':'' }}>Mental/Intellectual</option>
                                            <option value="Hearing Disability" {{$residents->disabilitytype == 'Hearing Disability' ? 'selected':'' }}>Hearing Disability</option>
                                            <option value="Psychosocial Disability" {{$residents->disabilitytype == 'Psychosocial Disability' ? 'selected':'' }}>Psychosocial Disability</option>
                                            <option value="Visual Disability" {{$residents->disabilitytype == 'Visual Disability' ? 'selected':'' }}>Visual Disability</option>
                                            <option value="Speech Impairment" {{$residents->disabilitytype == 'Speech Impairment' ? 'selected':'' }}>Speech Impairment</option>
                                            <option value="Disability due to Chronic illness" {{$residents->disabilitytype == 'Disability due to Chronic illness' ? 'selected':'' }}>Disability due to Chronic illness</option>
                                            <option value="Orthopedic or Musculoskeletal Disability" {{$residents->disabilitytype == 'Orthopedic or Musculoskeletal Disability' ? 'selected':'' }}>Orthopedic (Musculoskeletal) Disability</option>
                                            <option value="Multiple Disabilities" {{$residents->disabilitytype == 'Multiple Disabilities' ? 'selected':'' }}>Multiple Disabilities</option>
                                            <option value="Learning Disability" {{$residents->disabilitytype == 'Learning Disability' ? 'selected':'' }}>Learning Disability</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">64. Does ___ have a PWD ID?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="pwdid" id="pwdid" value="{{$residents->pwdid}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->pwdid == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->pwdid == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <small>FOR 60 YEARS OLD AND ABOVE</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">65. Does ___ have a Senior Citizen's ID?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="seniorcitizenid" value="{{$residents->seniorcitizenid}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->seniorcitizenid == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->seniorcitizenid == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <h5><strong>H. CRIME</strong></h5>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">66. Has ___ been a victim of crime in the past 12 months?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="crime" id="crime" value="{{$residents->crime}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->crime == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$residents->crime == 'No' ? 'selected':'' }}>No (Go to 69)</option>
                                        </select>
                                    </div>
                                </div>
                                <small>IF YES IN (66)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">67. What crime/s was/were ___ a victim of?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="crimetype" id="crimetype" value="{{$residents->crimetype}}">
                                            <option value="">Select Type of Crime</option>
                                            <option value="Theft" {{$residents->crimetype == 'Theft' ? 'selected':'' }}>Theft</option>
                                            <option value="Robbery" {{$residents->crimetype == 'Robbery' ? 'selected':'' }}>Robbery</option>
                                            <option value="Rape" {{$residents->crimetype == 'Rape' ? 'selected':'' }}>Rape</option>
                                            <option value="Physical Injury" {{$residents->crimetype == 'Physical Injury' ? 'selected':'' }}>Physical Injury</option>
                                            <option value="Carnapping" {{$residents->crimetype == 'Carnapping' ? 'selected':'' }}>Carnapping</option>
                                            <option value="Cattle rustling" {{$residents->crimetype == 'Cattle rustling' ? 'selected':'' }}>Cattle rustling</option>
                                            <option value="Others" {{$residents->crimetype == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">68. Where did the crime happen?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="crimeloc" id="crimeloc" value="{{$residents->crimeloc}}">
                                            <option value="">Select Crime Location</option>
                                            <option value="Within the barangay" {{$residents->crimeloc == 'Within the barangay' ? 'selected':'' }}>Within the barangay</option>
                                            <option value="Outside the barangay but within municipality/city" {{$residents->crimeloc == 'Outside the barangay but within municipality/city' ? 'selected':'' }}>Outside the barangay but within municipality/city</option>
                                            <option value="Outside the municipality or city but within province" {{$residents->crimeloc == 'Outside the municipality or city but within province' ? 'selected':'' }}>Outside the municipality/city but within province</option>
                                            <option value="Outside the province" {{$residents->crimeloc == 'Outside the province' ? 'selected':'' }}>Outside the province</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong> I. HEALTH AND NUTRITION</strong></h5>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">69. What is ___'s blood type?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="bloodtype" value="{{$residents->bloodtype}}">
                                            <option value="">Select Blood Type</option>
                                            <option value="O" {{$residents->bloodtype == 'O' ? 'selected':'' }}>O</option>
                                            <option value="A" {{$residents->bloodtype == 'A' ? 'selected':'' }}>A</option>
                                            <option value="B" {{$residents->bloodtype == 'B' ? 'selected':'' }}>B</option>
                                            <option value="AB" {{$residents->bloodtype == 'AB' ? 'selected':'' }}>AB</option>
                                            <option value="Dont Know" {{$residents->bloodtype == 'Dont Know' ? 'selected':'' }}>Don't Know</option>
                                        </select>
                                    </div>
                                </div>
                                <small>IF '1', '2', '3' OR '4' IN (69)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">70. What is the Rhesus (Rh) factor of ___'s blood type?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="rhtype" value="{{$residents->rhtype}}">
                                            <option value="">Select Rh Blood Type</option>
                                            <option value="Positive" {{$residents->rhtype == 'Positive' ? 'selected':'' }}>Positive</option>
                                            <option value="Negative" {{$residents->rhtype == 'Negative' ? 'selected':'' }}>Negative</option>
                                            <option value="Dont Know" {{$residents->rhtype == 'Dont Know' ? 'selected':'' }}>Don't Know</option>
                                        </select>
                                    </div>
                                </div>
                                <p>FOR 5 YEARS OLD AND BELOW</p>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">71. NUTRITIONAL STATUS OF CHILDREN 0-5 YEARS OLD</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="nutritionstatus" value="{{$residents->nutritionstatus}}">
                                            <option value="">Select Nutritional Status</option>
                                            <option value="Overweight" {{$residents->nutritionstatus == 'Overweight' ? 'selected':'' }}>Overweight</option>
                                            <option value="Normal" {{$residents->nutritionstatus == 'Normal' ? 'selected':'' }}>Normal</option>
                                            <option value="Underweight" {{$residents->nutritionstatus == 'Underweight' ? 'selected':'' }}>Underweight</option>
                                            <option value="Severely underweight" {{$residents->nutritionstatus == 'Severely underweight' ? 'selected':'' }}>Severely underweight</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">72. DATE OF RECORD OF BARANGAY NUTRITION SCHOLARS</label>
                                    <div class="col-sm-6">
                                        <input name="datebns" class="form-control input-sm" type="date" placeholder="" value="{{$residents->datebns}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">73. During the past 12 months, did you or any member of the household avail of medical treatment for any ilnness?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="treatment" id="treatment" value="{{$residents->treatment}}">
                                            <option value="">Select</option>
                                            <option value="Yes" {{$residents->treatment == 'Yes' ? 'selected':'' }}>Yes (Go to 74)</option>
                                            <option value="No" {{$residents->treatment == 'No' ? 'selected':'' }}>No</option>
                                            <option value="Did not get sick" {{$residents->treatment == 'Did not get sick' ? 'selected':'' }}>Did not get sick</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">74. During the last illness of any member of the household, where did you go to
                                        avail medical treatment?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="treatmentloc" id="treatmentloc" value="{{$residents->treatmentloc}}">
                                            <option value="">Select</option>
                                            <option value="Public hospital - National" {{$residents->treatmentloc == 'Public hospital - National' ? 'selected':'' }}>Public hospital (National)</option>
                                            <option value="Public hosptital - Provincial" {{$residents->treatmentloc == 'Public hosptital - Provincial' ? 'selected':'' }}>Public hosptital (Provincial)</option>
                                            <option value="Public hosptital - Municipal or City" {{$residents->treatmentloc == 'Public hosptital - Municipal or City"' ? 'selected':'' }}>Public hosptital (Municipal/City)</option>
                                            <option value="Public hosptital - District" {{$residents->treatmentloc == 'Public hosptital - District' ? 'selected':'' }}>Public hosptital (District)</option>
                                            <option value="Public hosptital or clinic" {{$residents->treatmentloc == 'Public hosptital or clinic' ? 'selected':'' }}>Public hosptital or clinic</option>
                                            <option value="Rural health units" {{$residents->treatmentloc == 'Rural health units' ? 'selected':'' }}>Rural health units</option>
                                            <option value="Barangay Health Station" {{$residents->treatmentloc == 'Barangay Health Station' ? 'selected':'' }}>Barangay Health Station</option>
                                            <option value="Non medical, non-trained Hilot or Personnel" {{$residents->treatmentloc == 'Non medical, non-trained Hilot or Personnel' ? 'selected':'' }}>Non-medical/non-trained Hilot/Personnel</option>
                                            <option value="Others" {{$residents->treatmentloc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">IX. End Date of Interview:</label>
                                    <div class="col-sm-6">
                                        <input name="enddate" class="form-control input-sm" type="date" placeholder="" value="{{$residents->enddate}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">X. Time Ended:</label>
                                    <div class="col-sm-6">
                                        <input name="endtime" class="form-control input-sm" type="time" placeholder="" value="{{$residents->endtime}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<script src="{{asset('plugins/residents/residents.js')}}"></script>