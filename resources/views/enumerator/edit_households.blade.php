@foreach ($all as $household)
<div class="modal  fade text-left" id="edit1" tabindex="-2" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Water and Sanitation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('household.update' , $household->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">III. Household Control Number
                                        (HCN):</p>
                                    <div class="col-sm-6">
                                        <input name="housecontrolnum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" value="{{$household->housecontrolnum}}" id='housecontrolnum' required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">IV. Name of Household
                                        Head:</p>
                                    <div class="col-sm-6">
                                        <input name="headname" class="form-control input-sm" type="text" placeholder="" id='headname' value="{{$household->headname}}" required />
                                    </div>
                                </div>

                                <h5><strong>J. WATER AND SANITATION</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">75. What is your household's main source of water supply?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="watersupply" id="watersupply">
                                            <option value="" {{$household->watersupply == '' ? 'selected':'' }}>Select</option>
                                            <option value="Own use faucet, community water system" {{$household->watersupply == 'Own use faucet, community water system' ? 'selected':'' }}>Own use faucet, community water system (e.g. Maynilad)</option>
                                            <option value="Shared faucet, community water system" {{$household->watersupply == 'Shared faucet, community water system' ? 'selected':'' }}>Shared faucet, community water system</option>
                                            <option value="Own use tubed or piped deep well" {{$household->watersupply == 'Own use tubed or piped deep well' ? 'selected':'' }}>Own use tubed/piped deep well</option>
                                            <option value="Shared tubed or piped deep well" {{$household->watersupply == 'Shared tubed or piped deep well' ? 'selected':'' }}>Shared tubed/piped deep well</option>
                                            <option value="Tubed or piped shallow ell" {{$household->watersupply == 'Tubed or piped shallow ell' ? 'selected':'' }}>Tubed/piped shallow ell (e.g. Posom Artesian well, etc.)</option>
                                            <option value="Dug well" {{$household->watersupply == 'Dug well' ? 'selected':'' }}>Dug well (e.g. balon)</option>
                                            <option value="Protected spring" {{$household->watersupply == 'Protected spring' ? 'selected':'' }}>Protected spring</option>
                                            <option value="Unprotected spring" {{$household->watersupply == 'Unprotected spring' ? 'selected':'' }}>Unprotected spring</option>
                                            <option value="Lake, river, rain and others" {{$household->watersupply == 'Lake, river, rain and others' ? 'selected':'' }}>Lake, river, rain and others</option>
                                            <option value="Peddler" {{$household->watersupply == 'Peddler' ? 'selected':'' }}>Peddler</option>
                                            <option value="Bottled water" {{$household->watersupply == 'Bottled water' ? 'selected':'' }}>Bottled water (purified, distilled, mineral)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">76. How far is this water source from your house? IN METERS</p>
                                    <div class="col-sm-6">
                                        <input name="waternum" class="form-control input-sm" type="number" min="0" placeholder="" id="waternum" value="{{$household->waternum}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">77. What type of toilet facilty does the household use?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="toilettype" id="toilettype">
                                            <option value="" {{$household->toilettype == '' ? 'selected':'' }}>Select</option>
                                            <option value="Water-sealed, sewer septic tank, used exclusively by household" {{$household->toilettype == 'Water-sealed, sewer septic tank, used exclusively by household' ? 'selected':'' }}>Water-sealed, sewer septic tank, used exclusively by household
                                            </option>
                                            <option value="Water-sealed, sewer septic tank , shared with other household" {{$household->toilettype == 'Water-sealed, sewer septic tank , shared with other household' ? 'selected':'' }}>Water-sealed, sewer septic tank , shared with other household
                                            </option>
                                            <option value="Water-sealed, other depository, used exclusively by household" {{$household->toilettype == 'Water-sealed, other depository, used exclusively by household' ? 'selected':'' }}>Water-sealed, other depository, used exclusively by household
                                            </option>
                                            <option value="Water-sealed, other depository, shared with other household" {{$household->toilettype == 'Water-sealed, other depository, shared with other household' ? 'selected':'' }}>Water-sealed, other depository, shared with other household
                                            </option>
                                            <option value="Tubed or piped shallow well" {{$household->toilettype == 'Tubed or piped shallow well' ? 'selected':'' }}>Tubed/piped shallow well (e.g. Posom Artesian well, etc.)</option>
                                            <option value="Closed pit" {{$household->toilettype == 'Closed pit' ? 'selected':'' }}>Closed pit</option>
                                            <option value="Pail system" {{$household->toilettype == 'Pail system' ? 'selected':'' }}>Pail system</option>
                                            <option value="None" {{$household->toilettype == 'None' ? 'selected':'' }}>None (bodies of wate, backyard, public spaces)</option>
                                        </select>
                                    </div>
                                </div>
                                <h5><strong> K. HOUSING </strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">78. What is the tenure status of the housing unit and lot occupied by your
                                        household?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="tenure" id="tenure">
                                            <option value="" {{$household->tenure == '' ? 'selected':'' }}>Select</option>
                                            <option value="Own or owner-like-possession of house and lot" {{$household->tenure == 'Own or owner-like-possession of house and lot' ? 'selected':'' }}>Own or owner-like-possession of house and lot</option>
                                            <option value="Rent house or room including lot" {{$household->tenure == 'Rent house or room including lot' ? 'selected':'' }}>Rent house/room including lot</option>
                                            <option value="Own house, rent lot" {{$household->tenure == 'Own house, rent lot' ? 'selected':'' }}> Own house, rent lot</option>
                                            <option value="Own house, rent-free lot with consent of owner" {{$household->tenure == 'Own house, rent-free lot with consent of owner' ? 'selected':'' }}>Own house, rent-free lot with consent of owner</option>
                                            <option value="Own house, rent-free lot without conset of owner" {{$household->tenure == 'Own house, rent-free lot without conset of owner' ? 'selected':'' }}>Own house, rent-free lot without conset of owner</option>
                                            <option value="Rent-free house and lot with consent of owner" {{$household->tenure == 'Rent-free house and lot with consent of owner' ? 'selected':'' }}>Rent-free house and lot with consent of owner</option>
                                            <option value="Rent-free house and lot without consent of owner" {{$household->tenure == 'Rent-free house and lot without consent of owner' ? 'selected':'' }}>Rent-free house and lot without consent of owner</option>
                                            <option value="Living in a public space with rent" {{$household->tenure == 'Living in a public space with rent' ? 'selected':'' }}>Living in a public space with rent</option>
                                            <option value="Living in a public space without rent" {{$household->tenure == 'Living in a public space without rent' ? 'selected':'' }}>Living in a public space without rent</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">79. By your own estimate, how much is the imputed rent per month for the house
                                        and/or lot?</p>
                                    <div class="col-sm-6">
                                        <input name="rentpm" class="form-control input-sm" type="number" min="0" placeholder="" id="rentnpm" value="{{$household->rentnpm}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">80. What is the household's main source of cooking fuel?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="fuel" id='fuel'>
                                            <option value="" {{$household->fuel == '' ? 'selected':'' }}>Select</option>
                                            <option value="Electricity" {{$household->fuel == 'Electricity' ? 'selected':'' }}>Electricity</option>
                                            <option value="LPG" {{$household->fuel == 'LPG' ? 'selected':'' }}>LPG</option>
                                            <option value="Charcoal or Coal" {{$household->fuel == 'Charcoal or Coal' ? 'selected':'' }}>Charcoal/Coal</option>
                                            <option value="Wood" {{$household->fuel == 'Wood' ? 'selected':'' }}>Wood</option>
                                            <option value="Kerosene" {{$household->fuel == 'Kerosene' ? 'selected':'' }}>Kerosene</option>
                                            <option value="Agricultural crops residues" {{$household->fuel == 'Agricultural crops residues' ? 'selected':'' }}>Agricultural crops residues (e.g. coconut midribs, coconut shells,
                                                coconut/corn husks, rice hulls, ect.)</option>
                                            <option value="Animal dung" {{$household->fuel == 'Animal dung' ? 'selected':'' }}>Animal dung</option>
                                            <option value="Others" {{$household->fuel == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">81. Is there any electricity in the dwelling place?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="electric" id="electric">
                                            <option value="" {{$household->electric == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->electric == 'Yes (GO TO 82)' ? 'selected':'' }}>Yes (GO TO 82)</option>
                                            <option value="No" {{$household->electric == 'No (GO TO 83)' ? 'selected':'' }}>No (GO TO 83)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">82. What is the source of electricity in the dwelling place?</p>
                                    <p class="col-sm-2 col-form-label">Electric Company</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="electricsrc" id="electricsrc">
                                            <option value="" {{$household->electricsrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->electricsrc == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->electricsrc == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">Generator</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="generator" id="generator">
                                            <option value="" {{$household->generator == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->generator == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->generator == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">Solar</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="solar" id="solar">
                                            <option value="" {{$household->solar == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->solar == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->solar == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">Battery</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="battery" id="battery">
                                            <option value="" {{$household->battery == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->battery == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->battery == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">Others, specify</p>
                                    <div class="col-sm-3">
                                        <input name="electrico" class="form-control input-sm" type="text" placeholder="" id="electrico" value="{{$household->electrico}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">85. Does any member of the household have access to internet?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="internet" id='internet'>
                                            <option value="" {{$household->internet == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->internet == 'Yes' ? 'selected':'' }}>Yes </option>
                                            <option value="No" {{$household->internet == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">86. Do you have insurance for the following</p>
                                    <p class="col-sm-5 col-form-label">87. Who is the insurance provider </p>
                                    <p class="col-sm-3 col-form-label">House</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="house" id="house">
                                            <option value="" {{$household->house == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->house == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->house == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="houseinsurance" id="houseinsurance">
                                            <option value="" {{$household->houseinsurance == '' ? 'selected':'' }}>Select</option>

                                            <option value="Government insurance" {{$household->houseinsurance == 'Government insurance' ? 'selected':'' }}>Government insurance</option>
                                            <option value="Private insurance company" {{$household->houseinsurance == 'Private insurance company' ? 'selected':'' }}>Private insurance company</option>
                                            <option value="Bank" {{$household->houseinsurance == 'Bank' ? 'selected':'' }}>Bank</option>
                                            <option value="Other" {{$household->houseinsurance == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">Motor Vehicle</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="motor" id="motor">
                                            <option value="" {{$household->motor == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->motor == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->motor == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="motorinsurance" id="motorinsurance">
                                            <option value="" {{$household->motorinsurance == '' ? 'selected':'' }}>Select</option>
                                            <option value="Government insurance" {{$household->motorinsurance == 'Government insurance' ? 'selected':'' }}>Government insurance</option>
                                            <option value="Private insurance company" {{$household->motorinsurance == 'Private insurance company' ? 'selected':'' }}>Private insurance company</option>
                                            <option value="Bank" {{$household->motorinsurance == 'Bank' ? 'selected':'' }}>Bank</option>
                                            <option value="Other" {{$household->motorinsurance == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">Appliance</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="app" id="app">
                                            <option value="" {{$household->app == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->app == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->app == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="appinsurance" id="appinsurance">
                                            <option value="" {{$household->appinsurance == '' ? 'selected':'' }}>Select</option>
                                            <option value="Government insurance" {{$household->appinsurance == 'Government insurance' ? 'selected':'' }}>Government insurance</option>
                                            <option value="Private insurance company" {{$household->appinsurance == 'Private insurance company' ? 'selected':'' }}>Private insurance company</option>
                                            <option value="Bank" {{$household->appinsurance == 'Bank' ? 'selected':'' }}>Bank</option>
                                            <option value="Others" {{$household->appinsurance == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>L. WASTE MANAGEMENT</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">88. What is the system of garbage disposal adopted by the household?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="garbage" id="garbage">
                                            <option value="" {{$household->garbage == '' ? 'selected':'' }}>Select</option>
                                            <option value="Garbage collected" {{$household->garbage == 'Garbage collection' ? 'selected':'' }}>Garbage collection</option>
                                            <option value="Burning" {{$household->garbage == 'Burning' ? 'selected':'' }}>Burning</option>
                                            <option value="Composting" {{$household->garbage == 'Composting' ? 'selected':'' }}>Composting</option>
                                            <option value="Recycling" {{$household->garbage == 'Recycling' ? 'selected':'' }}>Recycling</option>
                                            <option value="Waste segregation" {{$household->garbage == 'Waste segregation' ? 'selected':'' }}>Waste segregation</option>
                                            <option value="Pit with cover" {{$household->garbage == 'Pit with cover' ? 'selected':'' }}>Pit with cover</option>
                                            <option value="Pit without cover" {{$household->garbage == 'Pit without cover' ? 'selected':'' }}>Pit without cover</option>
                                            <option value="Throwing garbage in river, vacant lot" {{$household->garbage == 'Throwing garbage in river, vacant lot' ? 'selected':'' }}>Throwing garbage in river, vacant lot</option>
                                            <option value="Others" {{$household->garbage == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">89. Who collects the garbage?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="gcollect" id="gcollect">
                                            <option value="" {{$household->gcollect == '' ? 'selected':'' }}>Select</option>
                                            <option value="Municipality or city collector" {{$household->gcollect == 'Municipality/city collector' ? 'selected':'' }}>Municipality/city collector</option>
                                            <option value="Barangay collector" {{$household->gcollect == 'Barangay collector' ? 'selected':'' }}>Barangay collector</option>
                                            <option value="Private collector" {{$household->watersupply == 'Private collector' ? 'selected':'' }}>Private collector</option>
                                            <option value="Others" {{$household->watersupply == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">90. How often is the garbage collected?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="gnum" id="gnum">
                                            <option value="" {{$household->gnum == '' ? 'selected':'' }}>Select</option>
                                            <option value="Once a week" {{$household->gnum == 'Once a week' ? 'selected':'' }}>Once a week</option>
                                            <option value="Twice a week" {{$household->gnum == 'Twice a week' ? 'selected':'' }}>Twice a week</option>
                                            <option value="Thrice a week" {{$household->gnum == 'Thrice a week' ? 'selected':'' }}>Thrice a week</option>
                                            <option value="Daily" {{$household->gnum == 'Daily' ? 'selected':'' }}>Daily</option>
                                            <option value="Others" {{$household->gnum == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br> <br><br> <br><br><br><br><br> <br><br><br>

                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">83. Do you own any of the following?</p>
                                    <p class="col-sm-5 col-form-label">84. How many were purchased in the past 3 years? </p>
                                    <p class="col-sm-3 col-form-label">1. Land (Agricultural, in parcels)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="landagri" id="landagri">
                                            <option value="" {{$household->landagri == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->landagri == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->landagri == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="landagrinum" class="form-control input-sm" type="number" min="0" placeholder="" id="landagrinum" value="{{$household->landagrinum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Land (Residential, in parcels)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="landres" id="landres">
                                            <option value="" {{$household->landres == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->landres == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->landres == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="landresnum" class="form-control input-sm" type="number" min="0" placeholder="" id="landresnum" value="{{$household->landresnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">3. Land (Commercial, in parcels)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="landresnum" id="landcom">
                                            <option value="" {{$household->landcom == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->landcom == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->landcom == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="landcomnum" class="form-control input-sm" type="number" min="0" placeholder="" id="landocomnum" value="{{$household->landcomnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">4. Car, jeep, van</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="car" id="car">
                                            <option value="" {{$household->car == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->car == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->car == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="carnum" class="form-control input-sm" type="number" min="0" id="carnum" placeholder="" value="{{$household->carnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">5. Tricycle, motorcycle, e-bike</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tricycle" id="tricycle">
                                            <option value="" {{$household->tricycle == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->tricycle == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->tricycle == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="trciyclenum" class="form-control input-sm" type="number" min="0" id="tricylenum" placeholder="" value="{{$household->tricyclenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">6. Bicycle</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="bicycle" id="bicycle">
                                            <option value="" {{$household->bicycle == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->bicycle == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->bicycle == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="bicyclenum" class="form-control input-sm" type="number" min="0" id="bicyclenum" placeholder="" value="{{$household->bicyclenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">7. Pedicab</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="pedi" id="pedi">
                                            <option value="" {{$household->pedi == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->pedi == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->pedi == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="pedinum" class="form-control input-sm" type="number" min="0" id="pedinum" placeholder="" value="{{$household->pedinum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">8. Television</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tv">
                                            <option value="" {{$household->tv == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->tv == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->tv == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="tvnum" class="form-control input-sm" type="number" min="0" placeholder="" id="tvnum" value="{{$household->tvnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">9. Radio/Radio casette</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="cassette">
                                            <option value="" {{$household->cassette == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->cassette == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->cassette == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="casettenum" class="form-control input-sm" type="number" min="0" placeholder="" id="casettenum" value="{{$household->casettenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">10. CD/VCD/DVD Player</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="dvd" id="dvd">
                                            <option value="" {{$household->dvd == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->dvd == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->dvd == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="dvdnum" class="form-control input-sm" type="number" min="0" placeholder="" id="dvdnum" value="{{$household->dvdnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">11. Component/Stereo/ Karaoke/Videoke</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="karaoke" id="karaoke">
                                            <option value="" {{$household->karaoke == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->karaoke == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->karaoke == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="karaokenum" class="form-control input-sm" type="number" min="0" placeholder="" id="karaokenum" value="{{$household->karaokenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">12. Cellphone</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="cell" id="cell">
                                            <option value="" {{$household->cell == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->cell == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->cell == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="cellnum" class="form-control input-sm" type="number" min="0" placeholder="" id="cellnum" value="{{$household->cellnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">13. Landline telephone</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tel" id="tel">
                                            <option value="" {{$household->tel == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->tel == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->tel == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="telnum" class="form-control input-sm" type="number" min="0" placeholder="" id="telnum" value="{{$household->telnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">14. Computer/Laptop/Netbook</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="comp" id="comp">
                                            <option value="" {{$household->comp == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->comp == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->comp == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="compnum" class="form-control input-sm" type="number" min="0" placeholder="" id="compnum" value="{{$household->compnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">15. Electric fan</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="fan" id="fan">
                                            <option value="" {{$household->fan == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->fan == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->fan == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fannum" class="form-control input-sm" type="number" min="0" placeholder="" id="fannum" value="{{$household->fannum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">16. Airconditioner/air cooler</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="aircon" id="aircon">
                                            <option value="" {{$household->aircon == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->aircon == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->aircon == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="airconum" class="form-control input-sm" type="number" min="0" placeholder="" id="airconum" value="{{$household->airconnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">17. Electric iron/steamer</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="iron" id="iron">
                                            <option value="" {{$household->iron == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->iron == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->iron == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="ironnum" class="form-control input-sm" type="number" min="0" placeholder="" id="ironnum" value="{{$household->ironnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">18. Washing Machine</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="washing" id="washing">
                                            <option value="" {{$household->washing == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->washing == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->washing == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="washingnum" class="form-control input-sm" type="number" min="0" placeholder="" id="washingnum" value="{{$household->washingnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">19. Refrigerator/Freezer</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="ref" id="ref">
                                            <option value="" {{$household->ref == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->ref == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->ref == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="refnum" class="form-control input-sm" type="number" min="0" placeholder="" id="refnum" value="{{$household->refnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">20. LPG gas stove/electric stove/range</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="stove" id="stove">
                                            <option value="" {{$household->stove == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->stove == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->stove == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="stovenum" class="form-control input-sm" type="number" min="0" placeholder="" id="stovenum" value="{{$household->stovenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">21. Rice cooker</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="rice" id="rice">
                                            <option value="" {{$household->rice == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->rice == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->rice == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="ricenum" class="form-control input-sm" type="number" min="0" placeholder="" id="ricenum" value="{{$household->ricenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">22. Microwave oven</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="oven" id="oven">
                                            <option value="" {{$household->oven == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->oven == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->oven == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="ovennum" class="form-control input-sm" type="number" min="0" placeholder="" id="ovennum" value="{{$household->ovenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">23. Toaster/Toaster oven</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="toaster" id="toaster">
                                            <option value="" {{$household->toaster == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->toaster == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->toaster == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="toasternum" class="form-control input-sm" type="number" min="0" placeholder="" id="toasternum" value="{{$household->toasternum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">24. Electric water dispenser</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="dispenser" id="dispenser">
                                            <option value="" {{$household->dispenser == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->dispenser == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->dispenser == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="dispensernum" class="form-control input-sm" type="number" min="0" placeholder="" id="dispensernum" value="{{$household->dispensernum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">25. Sala/Sofa set</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="sala" id="sala">
                                            <option value="" {{$household->sala == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->sala == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->sala == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="salanum" class="form-control input-sm" type="number" min="0" placeholder="" id="salanum" value="{{$household->salanum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">26. Sleeping mats (banig)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="mats" id="mats">
                                            <option value="" {{$household->mats == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->mats == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->mats == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="matsnum" class="form-control input-sm" type="number" min="0" placeholder="" id="matnum" value="{{$household->matnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">27. Frame without mattress (papag, folding bed)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="folding" id="folding">
                                            <option value="" {{$household->folding == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->folding == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->folding == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="foldingnum" class="form-control input-sm" type="number" min="0" placeholder="" id="foldingnum" value="{{$household->foldingnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">28. Mattress (kutson, sofa bed)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="sofa" id="sofa">
                                            <option value="" {{$household->sofa == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->sofa == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->sofa == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="sofanum" class="form-control input-sm" type="number" min="0" placeholder="" id='sofanum' value="{{$household->sofanum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">29. Others, specify</p>
                                    <div class="col-sm-3">
                                        <input name="othersname" class="form-control input-sm" type="text" placeholder="" id='othersname' value="{{$household->othersname}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="othersnum" class="form-control input-sm" type="number" min="0" placeholder="" id='othersnum' value="{{$household->othersnum}}" />
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($all as $household)
<div class="modal  fade text-left" id="edit2" tabindex="-2" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Source of Income</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('household.update' , $household->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>M. SOURCES OF INCOME </strong></h5>
                                <h5><strong>M.1. ENTREPRENEURIAL ACTIVITIES/SUSTENANCE ACTIVITIES</strong></h5>
                                <small>During the past 12 months, did you or any member of your household operate in any of
                                    the following entrepreneurial activities?</small>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">91. CROP FARMING AND GARDENING</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="crop" id="crop">
                                            <option value="" {{$household->crop == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->crop == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->crop == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">92. LIVESTOCK AND POULTRY RAISING .</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestock" id="livestock">

                                            <option value="Yes" {{$household->livestock == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->livestock == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">93. FISHING </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishing" id="fishing">
                                            <option value="" {{$household->fishing == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->fishing == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->fishing == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">94. FORESTRY AND HUNTING
                                        hunting</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="forestry" id="forestry">
                                            <option value="" {{$household->forestry == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->forestry == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->forestry == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">95. WHOLESALE AND RETAIL</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="wholesale" id="wholesale">
                                            <option value="" {{$household->wholesale == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->wholesale == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->wholesale == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">96. MANUFACTURING</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="manufacturing" id="manufacturing">
                                            <option value="" {{$household->manufacturing == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->manufacturing == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->manufacturing == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">97. COMMUNITY, SOCIAL, RECREATIONAL, & PERSONAL SERVICES etc.</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="community" id="community">
                                            <option value="" {{$household->community == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->community == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->community == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">98. STORAGE AND COMMUNICATION SERVICES</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="storage" id="storage">
                                            <option value="" {{$household->storage == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->storage == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->storage == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">99. MINING AND QUARRYING </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="mining" id="mining">
                                            <option value="" {{$household->mining == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->mining == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->mining == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">100.CONSTRUCTION </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="construct" id="construct">
                                            <option value="" {{$household->construct == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->construct == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->construct == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">101. ACTIVITIES NOT ELSEWHERE CLASSIFIED </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="elsewhere" id="elsewhere">
                                            <option value="" {{$household->elsewhere == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->elsewhere == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->elsewhere == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">102. TOTAL NET INCOME FROM ENTREPRENEURIAL ACTIVITIES</p>
                                </div>
                                <h5><strong> M.2 SALARIES AND WAGES FROM EMPLOYED MEMBERS</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">103. TOTAL SALARIES AND WAGES</p>
                                </div>
                                <h5><strong>M.3. OTHER SOURCES OF INCOME</strong></h5>
                                <p> During the past 12 months, how much did you or any member of your household receive from
                                    the following? </p>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(104) Remittances from Overseas Filipino Workers</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(105) Cash receipts, gifts, support, relief, and other forms of assistance from
                                        abroad</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(106) Cash receipts, support, assistance, and relief from domestic sources</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(107) Pension and retirement, workmen's compensation, and social security
                                        benefits</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(108) Net share of crops, fruits, and vegetables produced, aquaculture products
                                        harvested or livestock and poultry raised by other household</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(109) Rentals received from non-agricultural lands, buildings, spaces, and other
                                        properties</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(110) Interest from bank deposits, interest from loans extended to other
                                        families.</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(111) Dividends from investments</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(112) Other sources of income not elsewhere classified</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(113) TOTAL INCOME FROM OTHER SOURCES OF INCOME</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(114) TOTAL IMPUTED RENT FROM OWNED OR RENT-FREE HOUSE AND/OR LOT</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(115) TOTAL INCOME IN CASH AND IN KIND</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">(116) TOTAL HOUSEHOLD INCOME</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <h5><strong> NET INCOME</strong></h5>
                                <p>What was the total net value of income from these activities during the past 12 months? (in pesos) </p>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label text-center">(A) IN CASH</p>
                                    <p class="col-sm-6 col-form-label text-center">(B) IN KIND </p>

                                    <p class="col-sm-2 col-form-label">91A</p>
                                    <div class="col-sm-4">
                                        <input name="cropcash" class="form-control input-sm" type="number" min="0" placeholder="" id="cropcash" value="{{$household->cropcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">91B</p>
                                    <div class="col-sm-3">
                                        <input name="cropkind" class="form-control input-sm" type="number" min="0" placeholder="" id="cropkind" value="{{$household->cropkind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">92A</p>
                                    <div class="col-sm-4">
                                        <input name="livecash" class="form-control input-sm" type="number" min="0" placeholder="" id="livecash" value="{{$household->livecash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">92B</p>
                                    <div class="col-sm-3">
                                        <input name="livekind" class="form-control input-sm" type="number" min="0" placeholder="" id="livekind" value="{{$household->livekind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">93A</p>
                                    <div class="col-sm-4">
                                        <input name="fishcash" class="form-control input-sm" type="number" min="0" placeholder="" id="fishcash" value="{{$household->fishcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">93B</p>
                                    <div class="col-sm-3">
                                        <input name="fishkind" class="form-control input-sm" type="number" min="0" placeholder="" id="fishkind" value="{{$household->fishkind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">94A</p>
                                    <div class="col-sm-4">
                                        <input name="forestcash" class="form-control input-sm" type="number" min="0" placeholder="" id="forestcash" value="{{$household->forestcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">94B</p>
                                    <div class="col-sm-3">
                                        <input name="forestkind" class="form-control input-sm" type="number" min="0" placeholder="" id="forestkind" value="{{$household->forestkind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">95A</p>
                                    <div class="col-sm-4">
                                        <input name="wholesalecash" class="form-control input-sm" type="number" min="0" placeholder="" id="wholesalecash" value="{{$household->wholesalecash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">95B</p>
                                    <div class="col-sm-3">
                                        <input name="wholesalekind" class="form-control input-sm" type="number" min="0" placeholder="" id="wholesalekind" value="{{$household->wholesalekind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">96A</p>
                                    <div class="col-sm-4">
                                        <input name="manucash" class="form-control input-sm" type="number" min="0" placeholder="" id="manucash" value="{{$household->manucash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">96B</p>
                                    <div class="col-sm-3">
                                        <input name="manukind" class="form-control input-sm" type="number" min="0" placeholder="" id="manukind" value="{{$household->manukind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">97A</p>
                                    <div class="col-sm-4">
                                        <input name="servcash" class="form-control input-sm" type="number" min="0" placeholder="" id="servcash" value="{{$household->servcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">97B</p>
                                    <div class="col-sm-3">
                                        <input name="servkind" class="form-control input-sm" type="number" min="0" placeholder="" id="servkind" value="{{$household->servkind}}" />
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">98A</p>
                                    <div class="col-sm-4">
                                        <input name="transpocash" class="form-control input-sm" type="number" min="0" placeholder="" id="transpocash" value="{{$household->trasnpocash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">98B</p>
                                    <div class="col-sm-3">
                                        <input name="transpokind" class="form-control input-sm" type="number" min="0" placeholder="" id="transpokind" value="{{$household->trasnpokind}}" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">99A</p>
                                    <div class="col-sm-4">
                                        <input name="miningcash" class="form-control input-sm" type="number" min="0" placeholder="" id="miningcash" value="{{$household->miningcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">99B</p>
                                    <div class="col-sm-3">
                                        <input name="miningkind" class="form-control input-sm" type="number" min="0" placeholder="" id="miningkind" value="{{$household->miningkind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">100A</p>
                                    <div class="col-sm-4">
                                        <input name="constcash" class="form-control input-sm" type="number" min="0" placeholder="" id="constcash" value="{{$household->constcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">100B</p>
                                    <div class="col-sm-3">
                                        <input name="constkind" class="form-control input-sm" type="number" min="0" placeholder="" id="constkind" value="{{$household->contskind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">101A</p>
                                    <div class="col-sm-4">
                                        <input name="actcash" class="form-control input-sm" type="number" min="0" placeholder="" id="actcash" value="{{$household->acgcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">101B</p>
                                    <div class="col-sm-3">
                                        <input name="actkind" class="form-control input-sm" type="number" min="0" placeholder="" id="actkind" value="{{$household->actkind}}" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">102A</p>
                                    <div class="col-sm-4">
                                        <input name="totalnetincomecash" class="form-control input-sm" type="number" min="0" placeholder="" id="totalnetincomecash" value="{{$household->totalnetincomecash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">102B</p>
                                    <div class="col-sm-3">
                                        <input name="totalneticomekind" class="form-control input-sm" type="number" min="0" placeholder="" id="totalnetincomekind" value="{{$household->totalnetincomekind}}" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">103A</p>
                                    <div class="col-sm-4">
                                        <input name="totalsalarykind" class="form-control input-sm" type="number" min="0" placeholder="" id="totalsalarykind" value="{{$household->totalsalarykind}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">103B</p>
                                    <div class="col-sm-3">
                                        <input name="totalsalarycash" class="form-control input-sm" type="number" min="0" placeholder="" id="totalsalarycash" value="{{$household->totalsalarycash}}" />
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">104A</p>
                                    <div class="col-sm-4">
                                        <input name="ofwcash" class="form-control input-sm" type="number" min="0" placeholder="" id="ofwcash" value="{{$household->ofwcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">104B</p>
                                    <div class="col-sm-3">
                                        <input name="ofwkind" class="form-control input-sm" type="number" min="0" placeholder="" id="ofwkind" value="{{$household->ofwkind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">105A</p>
                                    <div class="col-sm-4">
                                        <input name="abroadcash" class="form-control input-sm" type="number" min="0" placeholder="" id="abroadcash" value="{{$household->abroadcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">105B</p>
                                    <div class="col-sm-3">
                                        <input name="abroadkind" class="form-control input-sm" type="number" min="0" placeholder="" id="abroadkind" value="{{$household->abroadkind}}" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">106A</p>
                                    <div class="col-sm-4">
                                        <input name="domesticcash" class="form-control input-sm" type="number" min="0" placeholder="" id="domesticcash" value="{{$household->domesticcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">106B</p>
                                    <div class="col-sm-3">
                                        <input name="domestickind" class="form-control input-sm" type="number" min="0" placeholder="" id="domestickind" value="{{$household->domestickind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">107A</p>
                                    <div class="col-sm-4">
                                        <input name="pensioncash" class="form-control input-sm" type="number" min="0" placeholder="" id="pensioncash" value="{{$household->pensioncash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">107B</p>
                                    <div class="col-sm-3">
                                        <input name="pensionkind" class="form-control input-sm" type="number" min="0" placeholder="" id="pensionkind" value="{{$household->pensionkind}}" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">108A</p>
                                    <div class="col-sm-4">
                                        <input name="netsharecash" class="form-control input-sm" type="number" min="0" placeholder="" id="netsharecash" value="{{$household->netsharecash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">108B</p>
                                    <div class="col-sm-3">
                                        <input name="netsharekind" class="form-control input-sm" type="number" min="0" placeholder="" id="netsharekind" value="{{$household->netsharekind}}" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">109A</p>
                                    <div class="col-sm-4">
                                        <input name="rentalscash" class="form-control input-sm" type="number" min="0" placeholder="" id="rentalcash" value="{{$household->rentalcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">109B</p>
                                    <div class="col-sm-3">
                                        <input name="rentalskind" class="form-control input-sm" type="number" min="0" placeholder="" id="rentalkind" value="{{$household->rentalkind}}" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">110A</p>
                                    <div class="col-sm-4">
                                        <input name="interestcash" class="form-control input-sm" type="number" min="0" placeholder="" id="interestcash" value="{{$household->interestcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">110B</p>
                                    <div class="col-sm-3">
                                        <input name="interestkind" class="form-control input-sm" type="number" min="0" placeholder="" id="interestkind" value="{{$household->interestkind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">111A</p>
                                    <div class="col-sm-4">
                                        <input name="investcash" class="form-control input-sm" type="number" min="0" placeholder="" id="investcash" value="{{$household->investcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">111B</p>
                                    <div class="col-sm-3">
                                        <input name="investkind" class="form-control input-sm" type="number" min="0" placeholder="" id="investkind" value="{{$household->investkind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">112A</p>
                                    <div class="col-sm-4">
                                        <input name="sourcecash" class="form-control input-sm" type="number" min="0" placeholder="" id="sourcecash" value="{{$household->sourcecash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">112B</p>
                                    <div class="col-sm-3">
                                        <input name="sourcekind" class="form-control input-sm" type="number" min="0" placeholder="" id="sourcekind" value="{{$household->sourekind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">113A</p>
                                    <div class="col-sm-4">
                                        <input name="totalgrosscash" class="form-control input-sm" type="number" min="0" placeholder="" id="totalgrosscash" value="{{$household->totalgrosscash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">113B</p>
                                    <div class="col-sm-3">
                                        <input name="totalgrosskind" class="form-control input-sm" type="number" min="0" placeholder="" id="totalgrosskind" value="{{$household->totalgrosskind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">114B</p>
                                    <div class="col-sm-4">
                                        <input name="totalimputed" class="form-control input-sm" type="number" min="0" placeholder="" id="totalimputed" value="{{$household->totalimputed}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">115A</p>
                                    <div class="col-sm-4">
                                        <input name="totalcash" class="form-control input-sm" type="number" min="0" placeholder="" id="totalcash" value="{{$household->totalcash}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">115B</p>
                                    <div class="col-sm-3">
                                        <input name="totalkind" class="form-control input-sm" type="number" min="0" placeholder="" id="totalkind" value="{{$household->totalkind}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">116</p>
                                    <div class="col-sm-4">
                                        <input name="totalincome" class="form-control input-sm" type="number" min="0" placeholder="" id="totalincome" value="{{$household->totalincom}}" />
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


@foreach ($all as $household)
<div class="modal  fade text-left" id="edit3" tabindex="-2" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Agriculture Farming</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('household.update' , $household->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>N. AGRICULTURE-LIVESTOCK AND/OR POULTRY RAISING</strong></h5>

                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">117. What is the tenure status of the agriculture land being tilled by the
                                        household?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="tenurestatus" id="tenurestatus">
                                            <option value="" {{$household->tenurestatus == '' ? 'selected':'' }}>Select</option>
                                            <option value="Fully-owned" {{$household->tenurestatus == 'Fully-owned' ? 'selected':'' }}>Fully-owned</option>
                                            <option value="Owner-like possession" {{$household->tenurestatus == 'Owner-like possession' ? 'selected':'' }}>Owner-like possession</option>
                                            <option value="Tenanted" {{$household->tenurestatus == 'Tenanted' ? 'selected':'' }}>Tenanted/Coal</option>
                                            <option value="Leased or Rented" {{$household->tenurestatus == 'Leased or Rented' ? 'selected':'' }}>Leased/Rented</option>
                                            <option value="Rent Free" {{$household->tenurestatus == 'Rent Free' ? 'selected':'' }}>Rent Free</option>
                                            <option value="Held under Certificate of Land Transfer or Certificate of Ownership Award" {{$household->tenurestatus == 'Held under Certificate of Land Transfer or Certificate of Ownership Award' ? 'selected':'' }}>Held under Certificate of Land Transfer (CLT) or Certificate of
                                                Land Ownership Award (CLOA)</option>
                                            <option value="Held under Certificate of Ancestral Domain Title or Certificate of Ancestral Land Title" {{$household->tenurestatus == 'Held under Certificate of Ancestral Domain Title or Certificate of Ancestral Land Title' ? 'selected':'' }}>Held under Certificate of Ancestral Domain Title/Certificate of
                                                Ancestral Land Title (CADT/CALT)</option>
                                            <option value="Held under Community-Based Forest Management Agreement or Stewardship" {{$household->tenurestatus == 'Held under Community-Based Forest Management Agreement or Stewardship' ? 'selected':'' }}>Held under Community-Based Forest Management Agreement (CBFMA)/
                                                Stewardship</option>
                                            <option value="Others" {{$household->tenurestatus == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <p class="col-sm-6 col-form-label">118. What is the area of the agricultural land? (in hectares)</p>
                                    <div class="col-sm-5">
                                        <input name="agrilandnum" class="form-control input-sm" type="number" min="0" placeholder="" id="agrilandnum" value="{{$household->agriland}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">119. During the past 12 months, what temporary and permanent crops did your
                                        household harvest?</p>
                                    <p class="col-sm-5 col-form-label">120. During the past 12 months how much did you harvest (in kilograms)? </p>
                                    <div class="col-sm-6">
                                        <input name="tempcrops" class="form-control input-sm" type="text" placeholder="" id="tempcrops" value="{{$household->tempcrops}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="tempcropskilo" class="form-control input-sm" type="number" min="0" placeholder="" id="tempcropskilo" value="{{$household->tempcropskilo}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="permacrops" class="form-control input-sm" type="text" placeholder="" id="permacrops" value="{{$household->permacrops}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="permaccropskilo" class="form-control input-sm" type="number" min="0" placeholder="" id="permaccropskilo" value="{{$household->permacropskilo}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="tcrops" class="form-control input-sm" type="text" placeholder="" id="tcrops" value="{{$household->tcrops}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="tcropskilo" class="form-control input-sm" type="number" min="0" placeholder="" id="tcropskilo" value="{{$household->tcopskilo}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="pcrops" class="form-control input-sm" type="text" placeholder="" id="pcrops" value="{{$household->pcrops}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="pcropskilo" class="form-control input-sm" type="number" min="0" placeholder="" id="pcropskilo" value="{{$household->pcropskilo}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="hcrops" class="form-control input-sm" type="text" placeholder="" id="hcrops" value="{{$household->hcrops}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="hcropskilo" class="form-control input-sm" type="number" min="0" placeholder="" id="hcropskilo" value="{{$household->hcropskilo}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">121. How many of each of the following agricultural equipment/facilities does the
                                        household use?</p>
                                    <p class="col-sm-6 col-form-label">122. How many agricultural equipment/facilities does the household own? </p>
                                    <p class="col-sm-3 col-form-label">Beast of burden</p>
                                    <div class="col-sm-3">
                                        <input name="beastnum" class="form-control input-sm" type="number" min="0" placeholder="" id="beastnum" value="{{$household->beatnum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="beastown" class="form-control input-sm" type="number" min="0" placeholder="" id="beastown" value="{{$household->beastown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Plow</p>
                                    <div class="col-sm-3">
                                        <input name="plownum" class="form-control input-sm" type="number" min="0" placeholder="" id="plownum" value="{{$household->plownum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="plowown" class="form-control input-sm" type="number" min="0" placeholder="" id="plowown" value="{{$household->plowown}}" />
                                    </div>

                                    <p class="col-sm-3 col-form-label">Harrow</p>
                                    <div class="col-sm-3">
                                        <input name="harrownum" class="form-control input-sm" type="number" min="0" placeholder="" id="harrownum" value="{{$household->harrownum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="harrowown" class="form-control input-sm" type="number" min="0" placeholder="" id="harrowown" value="{{$household->harrowown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Mower</p>
                                    <div class="col-sm-3">
                                        <input name="mowernum" class="form-control input-sm" type="number" min="0" placeholder="" id="mowernum" value="{{$household->mowernum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="mowerown" class="form-control input-sm" type="number" min="0" placeholder="" id="mowerown" value="{{$household->mowerown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Thresher/Corn sheller</p>
                                    <div class="col-sm-3">
                                        <input name="cornnum" class="form-control input-sm" type="number" min="0" placeholder="" id="cornnum" value="{{$household->cornnum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="cornown" class="form-control input-sm" type="number" min="0" placeholder="" id="cornown" value="{{$household->cornown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Insecticide/Pesticide sprayer</p>
                                    <div class="col-sm-3">
                                        <input name="spraynum" class="form-control input-sm" type="number" min="0" placeholder="" id="spraynum" value="{{$household->spraynum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="sprayown" class="form-control input-sm" type="number" min="0" placeholder="" id="sprayown" value="{{$household->sprayown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Farm Tractor</p>
                                    <div class="col-sm-3">
                                        <input name="tractornum" class="form-control input-sm" type="number" min="0" placeholder="" id="tractornum" value="{{$household->tractornum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="tractorown" class="form-control input-sm" type="number" min="0" placeholder="" id="tractorown" value="{{$household->tractorown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Hand tractor</p>
                                    <div class="col-sm-3">
                                        <input name="htractornum" class="form-control input-sm" type="number" min="0" placeholder="" id="htractornum" value="{{$household->htractornum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="htractorown" class="form-control input-sm" type="number" min="0" placeholder="" id="htractorown" value="{{$household->htractorown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Turtle/Mudboat</p>
                                    <div class="col-sm-3">
                                        <input name="turtlenum" class="form-control input-sm" type="number" min="0" placeholder="" id="turtlenum" value="{{$household->turtlenum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="turtleown" class="form-control input-sm" type="number" min="0" placeholder="" id="turtleown" value="{{$household->turtleown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Planter/Transplanter/Dryer</p>
                                    <div class="col-sm-3">
                                        <input name="planternum" class="form-control input-sm" type="number" min="0" placeholder="" id="planternum" value="{{$household->planternum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="planterown" class="form-control input-sm" type="number" min="0" placeholder="" id="planterown" value="{{$household->planterown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label"> Mechanical dryer</p>
                                    <div class="col-sm-3">
                                        <input name="dryernum" class="form-control input-sm" type="number" min="0" placeholder="" id="dryernum" value="{{$household->dryernum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="dryeown" class="form-control input-sm" type="number" min="0" placeholder="" id="dryerown" value="{{$household->dryerown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Multipurpose drying pavement</p>
                                    <div class="col-sm-3">
                                        <input name="mdrynum" class="form-control input-sm" type="number" min="0" placeholder="" id="mdrynum" value="{{$household->mdrynum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="mdryown" class="form-control input-sm" type="number" min="0" placeholder="" id="mdryown" value="{{$household->mdryown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Rice/corn/feed mill</p>
                                    <div class="col-sm-3">
                                        <input name="millnum" class="form-control input-sm" type="number" min="0" placeholder="" id="millnum" value="{{$household->millnum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="millown" class="form-control input-sm" type="number" min="0" placeholder="" id="millown" value="{{$household->millown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Harvester, any crop</p>
                                    <div class="col-sm-3">
                                        <input name="harvesternum" class="form-control input-sm" type="number" min="0" placeholder="" id="harvesternum" value="{{$household->harvestnum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="harvesterown" class="form-control input-sm" type="number" min="0" placeholder="" id="harvestown" value="{{$household->harvestown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Warehouse granary</p>
                                    <div class="col-sm-3">
                                        <input name="granarynum" class="form-control input-sm" type="number" min="0" placeholder="" id="granarynum" value="{{$household->granarynum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="granaryown" class="form-control input-sm" type="number" min="0" placeholder="" id="granaryown" value="{{$household->granaryown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Farmshed</p>
                                    <div class="col-sm-3">
                                        <input name="shednum" class="form-control input-sm" type="number" min="0" placeholder="" id="shednum" value="{{$household->shednum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="shedown" class="form-control input-sm" type="number" min="0" placeholder="" id="shedown" value="{{$household->shedown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Irrigation pump</p>
                                    <div class="col-sm-3">
                                        <input name="pumpnum" class="form-control input-sm" type="number" min="0" placeholder="" id="pumpnum" value="{{$household->pumpnum}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="pumpown" class="form-control input-sm" type="number" min="0" placeholder="" id="pumpown" value="{{$household->pumpown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Others, specify</p>
                                    <div class="col-sm-3">
                                        <input name="agriequip" class="form-control input-sm" type="text" placeholder="" id="agriequip" value="{{$household->agriequip}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="agriequipnum" class="form-control input-sm" type="number" min="0" placeholder="" id="agriequipnum" value="{{$household->agriequipnum}}" />
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>O. AGRICULTURE-LIVESTOCK AND/OR POULTRY RAISING</strong></h5>

                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">123. For the past 12 months, what type of livestock and/or poultry animal were
                                        raised and provided the following product? </p>
                                    <p class="col-sm-3 col-form-label">124. (a) Volume of production sold</p>
                                    <p class="col-sm-3 col-form-label">(b) Volume of production consumed</p>
                                    <p class="col-sm-2 col-form-label">Live Animals (number of heads)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="animals" id="animals">
                                            <option value="" {{$household->animals == '' ? 'selected':'' }}>Select</option>
                                            <option value="Hog or Swine" {{$household->animals == 'Hog or Swine' ? 'selected':'' }}>Hog/Swine</option>
                                            <option value="Goat" {{$household->animals == 'Goat' ? 'selected':'' }}>Goat</option>
                                            <option value="Carabao" {{$household->animals == 'Carabao' ? 'selected':'' }}>Carabao</option>
                                            <option value="Cattle" {{$household->animals == 'Cattle' ? 'selected':'' }}>Cattle</option>
                                            <option value="Chicken" {{$household->animals == 'Chicken' ? 'selected':'' }}>Chicken</option>
                                            <option value="Duck" {{$household->animals == 'Duck' ? 'selected':'' }}>Duck</option>
                                            <option value="Others" {{$household->animals == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="animalssold" class="form-control input-sm" type="number" min="0" placeholder="" id="animalssold" value="{{$household->animalssold}}" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="animalsconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="animalsconsume" value="{{$household->animalsconsume}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">Meat (weight in kilograms)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="meat" id="meat">
                                            <option value="" {{$household->meat == '' ? 'selected':'' }}>Select</option>
                                            <option value="Hog or Swine" {{$household->meat == 'Hog or Swine' ? 'selected':'' }}>Hog/Swine</option>
                                            <option value="Goat" {{$household->meeat == 'Goat' ? 'selected':'' }}>Goat</option>
                                            <option value="Carabao" {{$household->meat == 'Carabao' ? 'selected':'' }}>Carabao</option>
                                            <option value="Cattle" {{$household->meat == 'Cattle' ? 'selected':'' }}>Cattle</option>
                                            <option value="Chicken" {{$household->meat == 'Chicken' ? 'selected':'' }}>Chicken</option>
                                            <option value="Duck" {{$household->meat == 'Duck' ? 'selected':'' }}>Duck</option>
                                            <option value="Others" {{$household->meat == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="meatsold" class="form-control input-sm" type="number" min="0" placeholder="" id="meatsold" value="{{$household->meatsold}}" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="meatconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="meatconsume" value="{{$household->meatconsume}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">Milk (in liters)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="milk" id="milk">
                                            <option value="" {{$household->milk == '' ? 'selected':'' }}>Select</option>
                                            <option value="Hog or Swine" {{$household->milk == 'Hog or Swine' ? 'selected':'' }}>Hog/Swine</option>
                                            <option value="Goat" {{$household->milk == 'Goat' ? 'selected':'' }}>Goat</option>
                                            <option value="Carabao" {{$household->milk == 'Carabao' ? 'selected':'' }}>Carabao</option>
                                            <option value="Cattle" {{$household->milk == 'Cattle' ? 'selected':'' }}>Cattle</option>
                                            <option value="Chicken" {{$household->milk == 'Chicken' ? 'selected':'' }}>Chicken</option>
                                            <option value="Duck" {{$household->milk == 'Duck' ? 'selected':'' }}>Duck</option>
                                            <option value="Others" {{$household->milk == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="milksold" class="form-control input-sm" type="number" min="0" placeholder="" id="milksold" value="{{$household->milksold}}" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="milkconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="milkconsume" value="{{$household->milkconsume}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">Eggs (number)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="eggs" id="eggs">
                                            <option value="" {{$household->eggs == '' ? 'selected':'' }}>Select</option>
                                            <option value="Hog or Swine" {{$household->eggs == 'Hog or Swine' ? 'selected':'' }}>Hog/Swine</option>
                                            <option value="Goat" {{$household->eggs == 'Goat' ? 'selected':'' }}>Goat</option>
                                            <option value="Carabao" {{$household->eggs == 'Carabao' ? 'selected':'' }}>Carabao</option>
                                            <option value="Cattle" {{$household->eggs == 'Cattle' ? 'selected':'' }}>Cattle</option>
                                            <option value="Chicken" {{$household->eggs == 'Chicken' ? 'selected':'' }}>Chicken</option>
                                            <option value="Duck" {{$household->eggs == 'Duck' ? 'selected':'' }}>Duck</option>
                                            <option value="Others" {{$household->eggs == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="eggsold" class="form-control input-sm" type="number" min="0" placeholder="" id="eggsold" value="{{$household->eggsold}}" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="eggconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="eggconsume" value="{{$household->eggconsume}}" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">Others</p>
                                    <div class="col-sm-3">
                                        <input name="otherlivestock" class="form-control input-sm" type="text" placeholder="" requid="otherlivestock" value="{{$household->otherlivestock}}" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="otherlivestocksold" class="form-control input-sm" type="number" min="0" placeholder="" id="otherlivestocksold" value="{{$household->otherlivestocksold}}" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="otherlivestockconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="otherlivestockconsume" value="{{$household->otherlivestockconsume}}" />
                                    </div>

                                </div>
                                <h5><strong>P. AGRICULTURE-FISHING</strong></h5>

                                <div class="form-group row">


                                    <p class="col-sm-12 col-form-label">125. Is the household engaged in the following?</p>
                                    <p class="col-sm-5 col-form-label">1. Catching /gathering fishes, crabs, shrimps, etc.</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="catching" id="catching">
                                            <option value="" {{$household->catching == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->catching == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->catching == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>

                                    <p class="col-sm-5 col-form-label">2. Culturing fish, seaweeds, etc.</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="culturing" id="culturing">
                                            <option value="" {{$household->culturing == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->culturing == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->culturing == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">126. Where did household/s member/s fish in the past 12 months?</p>

                                    <div class="col-sm-6">
                                        <select class="form-control" name="fishloc" id="fishloc">
                                            <option value="" {{$household->fishloc == '' ? 'selected':'' }}>Select</option>
                                            <option value="Marine waters" {{$household->fishloc == 'Marine water' ? 'selected':'' }}>Marine waters</option>
                                            <option value="Inland waters" {{$household->fishloc == 'Inland water' ? 'selected':'' }}>Inland waters</option>
                                            <option value="Both" {{$household->fishloc == 'Both' ? 'selected':'' }}>Both</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">127. How many of each of the following types of boat/vessels does the household
                                        use in fishing activities? (Number)</p>
                                    <p class="col-sm-5 col-form-label">128. How many boat/vessels does the household own? (Number)</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-3 col-form-label">1. Boat with engine and outrigger</p>
                                    <div class="col-sm-3">
                                        <input name="boatone" class="form-control input-sm" type="number" min="0" placeholder="" id="boatone" value="{{$household->boatone}}" />
                                    </div>
                                    <div class=" col-sm-5">
                                        <input name="boatoneown" class="form-control input-sm" type="number" min="0" placeholder="" id="boatoneown" value="{{$household->boatoneown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Boat with engine but without outrigger</p>
                                    <div class="col-sm-3">
                                        <input name="boattwo" class="form-control input-sm" type="number" min="0" placeholder="" id="boattwo" value="{{$household->boattwo}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boattwoown" class="form-control input-sm" type="number" min="0" placeholder="" id="boattwoown" value="{{$household->boattwoown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">3. Boat without engine but with outrigger</p>
                                    <div class="col-sm-3">
                                        <input name="boatthree" class="form-control input-sm" type="number" min="0" placeholder="" id="boatthree" value="{{$household->boathree}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boathreeown" class="form-control input-sm" type="number" min="0" placeholder="" id="boatthreeown" value="{{$household->boathreeown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">4. Boat without engine and outrigger</p>
                                    <div class="col-sm-3">
                                        <input name="boatfour" class="form-control input-sm" type="number" min="0" placeholder="" id="boatfour" value="{{$household->boatfour}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boatfourown" class="form-control input-sm" type="number" min="0" placeholder="" id="boatfourown" value="{{$household->boatfourown}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">5. Raft</p>
                                    <div class="col-sm-3">
                                        <input name="boatfive" class="form-control input-sm" type="number" min="0" placeholder="" id="boatfive" value="{{$household->boatfive}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boatfiveown" class="form-control input-sm" type="number" min="0" placeholder="" id="boatfiveown" value="{{$household->boatfiveown}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">129. What kind of gears/accessories/devices was/were used?</p>
                                    <p class="col-sm-5 col-form-label">130. How many does the household own? </p>
                                    <div class="col-sm-6">
                                        <input name="gearone" class="form-control input-sm" type="text" placeholder="" id="gearone" value="{{$household->gearone}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="gearoneown" class="form-control input-sm" type="number" min="0" placeholder="" id="gearoneown" value="{{$household->gearoneown}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="geartwo" class="form-control input-sm" type="text" placeholder="" id="geartwo" value="{{$household->geartwo}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="geartwoown" class="form-control input-sm" type="number" min="0" placeholder="" id="geartwoown" value="{{$household->geartwoown}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="gearthree" class="form-control input-sm" type="text" placeholder="" id="gearthree" value="{{$household->greathree}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="gearthreeown" class="form-control input-sm" type="number" min="0" placeholder="" id="gearthreeown" value="{{$household->gearthreeown}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="gearfour" class="form-control input-sm" type="text" placeholder="" id="gearfour" value="{{$household->gearfour}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="gearfourown" class="form-control input-sm" type="number" min="0" placeholder="" id="gearfourown" value="{{$household->gearfourown}}" />
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">131. What type of aquafarm did the household operate?</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">1. Fishpond</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="pond" id="pond">
                                            <option value="" {{$household->pond == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->pond == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->pond == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">2. Fish pen</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishp" id="fishp">
                                            <option value="" {{$household->fishp == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->fishp == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->fishp == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">3. Fish cage</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishc" id="fishc">
                                            <option value="" {{$household->fishc == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->fishc == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->fishc == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">4. Seaweed farm</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="seaweed" id="seaweed">
                                            <option value="" {{$household->seaweed == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->seaweed == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->seaweed == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">5. Oyster farm</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="oyster" id="oyster">
                                            <option value="" {{$household->oyster == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->oyster == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->oyster == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">6. Mussel farm</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="mussel" id="mussel">
                                            <option value="" {{$household->mussel == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->mussel == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->mussel == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">7. Fish tank</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fisht" id="fisht">
                                            <option value="" {{$household->fisht == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->fisht == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->fisht == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">8. Hatchery</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="hatchery" id="hatchery">
                                            <option value="" {{$household->hatchery == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->hatchery == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->hatchery == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">9. Other, specify</p>
                                    <div class="col-sm-5">
                                        <input name="aquaot" class="form-control input-sm" type="text" placeholder="" id="aquaot" value="{{$household->aquaot}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">132. For the past 12 month, what were the fishes or aquatic animals cultured or
                                        caught by your household?</p>
                                    <p class="col-sm-5 col-form-label">133. How much wass the volume of fish harvested/caught in the past 12 months? (in
                                        kilograms)</p>
                                    <div class="col-sm-6">
                                        <input name="fishone" class="form-control input-sm" type="text" placeholder="" id="fishone" value="{{$household->fishone}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishoneown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishoneown" value="{{$household->fishoneown}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="fishtwo" class="form-control input-sm" type="text" placeholder="" id="fishtwo" value="{{$household->fishtwo}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishtwoown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishtwoown" value="{{$household->fishtwoown}}" />
                                    </div>
                                    <div class=" col-sm-6">
                                        <input name="fishthree" class="form-control input-sm" type="text" placeholder="" id="fishthree" value="{{$household->fishthree}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishthreeown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishthreeown" value="{{$household->fishthreeown}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="fishfour" class="form-control input-sm" type="text" placeholder="" id="fishfour" value="{{$household->fishfour}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishfourown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishfourown" value="{{$household->fishfourown}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="fishfive" class="form-control input-sm" type="text" placeholder="" id="fishfive" value="{{$household->fishfive}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishfiveown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishfiveown" value="{{$household->fishfiveown}}" />
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong> Q. CLIMATE CHANGE AND DISASTER RISK MANAGEMENT</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">134. How many years has the household been living in the barangay?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livingnum" id="livingnum">
                                            <option value="">Select</option>
                                            <option value="3 years and above">3 years and above (GO TO 135)</option>
                                            <option value="No more than 3 years">No more than 3 years (GO TO 167)</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong> Q.1. CROP FARMING</strong></h5>


                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">135. How many years has the household been engaged in crop farming?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="harvestyrs" id="harvestyrs">
                                            <option value="" {{$household->harvestyrs == '' ? 'selected':'' }}>Select</option>
                                            <option value="3 years and above" {{$household->harvestyrs == '3 years and above' ? 'selected':'' }}>3 years and above (GO TO 136)</option>
                                            <option value="No more than 3 years" {{$household->harvestyrs == 'No more than 3 years' ? 'selected':'' }}>No more than 3 years (GO TO 142)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">136. Compared with 3 years ago, did your harvest___?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="harvestr" id="harvestr">
                                            <option value="" {{$household->harvestr == '' ? 'selected':'' }}>Select</option>
                                            <option value="Decrease" {{$household->harvestr == 'Decrease' ? 'selected':'' }}>Decrease (GO TO 137)</option>
                                            <option value="Remain the same" {{$household->harvestr == 'Remain the same' ? 'selected':'' }}>Remain the same (GO TO 138)</option>
                                            <option value="Increase" {{$household->harvesstr == 'Increase' ? 'selected':'' }}>Increase (GO TO 138)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">137. What is the primary reason for the decrease in total harvest?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="harvestpr" id="harvestpr">
                                            <option value="" {{$household->harvestpr == '' ? 'selected':'' }}>Select</option>
                                            <option value="Increase in cost of inputs such as fertilizer, pesticide, etc." {{$household->harvestpr == 'Increase in cost of inputs such as fertilizer, pesticide, etc.' ? 'selected':'' }}>Increase in cost of inputs such as fertilizer, pesticide, etc.</option>
                                            <option value="Affected by drought" {{$household->harvestpr == 'Affected by drought' ? 'selected':'' }}>Affected by drought</option>
                                            <option value="Affected by typhoon" {{$household->harvestpr == 'Affected by typhoon' ? 'selected':'' }}>Affected by typhoon</option>
                                            <option value="Affected by flood" {{$household->harvestpr == 'Affected by flood' ? 'selected':'' }}>Affected by flood</option>
                                            <option value="Affected by pests" {{$household->harvestpr == 'Affected by pests' ? 'selected':'' }}>Affected by pests</option>
                                            <option value="Decrease in supply of water from the irrigation system" {{$household->harvestpr == 'Decrease in supply of water from the irrigation system' ? 'selected':'' }}>Decrease in supply of water from the irrigation system</option>
                                            <option value="Decrease in land area" {{$household->harvestpr == 'Decrease in land area' ? 'selected':'' }}>Decrease in land area</option>
                                            <option value="Change in primary occupation of member" {{$household->harvestpr == 'Change in primary occupation of member' ? 'selected':'' }}>Change in primary occupation of member</option>
                                            <option value="Others" {{$household->harvestpr == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">138. During the past 3 years , did you do the following in the last planting
                                        season?</p>
                                    <p class="col-sm-5 col-form-label">139. Reasons</p>
                                    <p class="col-sm-3 col-form-label">1. Change the variety of the same crop</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="samecrop" id="samecrop">
                                            <option value="" {{$household->samecrop == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->samecrop == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->samecrop == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="samecropr" id="samecropr">
                                            <option value="" {{$household->samecropr == '' ? 'selected':'' }}>Select</option>
                                            <option value="The inputs to the former crop are more expensive" {{$household->samecropr == 'The inputs to the former crop are more expensive' ? 'selected':'' }}>The inputs to the former crop are more expensive</option>
                                            <option value="The present crop is more resistant to pests and diseases" {{$household->samecropr == 'The present crop is more resistant to pests and diseases' ? 'selected':'' }}>The present crop is more resistant to pests and diseases</option>
                                            <option value="The present crop does not require much water" {{$household->samecropr == 'The present crop does not require much water' ? 'selected':'' }}>The present crop does not require much water</option>
                                            <option value="The present crop enables the member to earn more profit" {{$household->samecropr == 'The present crop enables the member to earn more profit' ? 'selected':'' }}>The present crop enables the member to earn more profit</option>
                                            <option value="The seedling of the former crop is no longer available" {{$household->samecropr == 'The seedling of the former crop is no longer available' ? 'selected':'' }}>The seedling of the former crop is no longer available</option>
                                            <option value="Others" {{$household->samecropr == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Change major crop</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="difcrop" id="difcrop">
                                            <option value="" {{$household->difcrop == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->difcrop == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->difcrop == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="difcropr" id="difcropr">
                                            <option value="" {{$household->difcropr == '' ? 'selected':'' }}>Select</option>
                                            <option value="The inputs to the former crop are more expensive" {{$household->difcropr == 'The inputs to the former crop are more expensive' ? 'selected':'' }}>The inputs to the former crop are more expensive</option>
                                            <option value="The present crop is more resistant to pests and diseases" {{$household->difcropr == 'The present crop is more resistant to pests and diseases' ? 'selected':'' }}>The present crop is more resistant to pests and diseases</option>
                                            <option value="The present crop does not require much water" {{$household->difcropr == 'The present crop does not require much water' ? 'selected':'' }}>The present crop does not require much water</option>
                                            <option value="The present crop enables the member to earn more profit" {{$household->difcropr == 'The present crop enables the member to earn more profit' ? 'selected':'' }}>The present crop enables the member to earn more profit</option>
                                            <option value="The seedling of the former crop is no longer available" {{$household->difcropr == 'The seedling of the former crop is no longer available' ? 'selected':'' }}>The seedling of the former crop is no longer available</option>
                                            <option value="Others" {{$household->difcropr == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">140. Do you have an insurance for the following:</p>
                                    <p class="col-sm-5 col-form-label">141. Who is the insurance provider?</p>
                                    <p class="col-sm-3 col-form-label">1. Crops</p></br>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="cropi" id="cropi">
                                            <option value="" {{$household->cropi == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->cropi == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->cropi == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="cropiprov" id="cropiprov">
                                            <option value="" {{$household->cropiprov == '' ? 'selected':'' }}>Select</option>
                                            <option value="Philippine Crop Insurance Corporation" {{$household->cropiprov == 'Philippine Crop Insurance Corporation' ? 'selected':'' }}>Philippine Crop Insurance Corporation</option>
                                            <option value="Private Insurance Company" {{$household->cropiprov == 'Private Insurance Company' ? 'selected':'' }}>Private Insurance Company</option>
                                            <option value="Bank" {{$household->cropiprov == 'Bank' ? 'selected':'' }}>Bank</option>
                                            <option value="Others" {{$household->cropiprov == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Agricultural equipment/ facilities</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="agrif" id="agrif">
                                            <option value="" {{$household->agrif == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->agrif == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->agrif == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="agrifprov" id="agrifprov">
                                            <option value="" {{$household->agrifprov == '' ? 'selected':'' }}>Select</option>
                                            <option value="Philippine Crop Insurance Corporation" {{$household->agrifprov == 'Philippine Crop Insurance Corporation' ? 'selected':'' }}>Philippine Crop Insurance Corporation</option>
                                            <option value="Private Insurance Company" {{$household->agrifprov == 'Private Insurance Company' ? 'selected':'' }}>Private Insurance Company</option>
                                            <option value="Bank" {{$household->agrifprov == 'Bank' ? 'selected':'' }}>Bank</option>
                                            <option value="Others" {{$household->agrifprov == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>


                                </div>
                            </div>

                        </div>


                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach

@foreach ($all as $household)
<div class="modal  fade text-left" id="edit4" tabindex="-2" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Livestock and Poultry</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('household.update' , $household->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">

                                <h5><strong>Q.2. LIVESTOCK AND POULTRY</strong></h5>
                                <div class="form-group row">

                                    <p class="col-sm-6 col-form-label">142. How many years has the household been engaged in livestock and poultry
                                        raising?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestocknum" id="livestocknum">
                                            <option value="" {{$household->livestocknum == '' ? 'selected':'' }}>Select</option>
                                            <option value="3 years and above" {{$household->livestocknum == '3 years and above' ? 'selected':'' }}>3 years and above (GO TO 143)</option>
                                            <option value="Not more than 3 years" {{$household->livestocknum == 'Not more than 3 years' ? 'selected':'' }}>Not more than 3 years (GO TO 145)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">143. Compared with 3 years ago, did the number of your livestock and poultry
                                        ___?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestockc" id="livestockc">
                                            <option value="Decrease" {{$household->livestockc == 'Decrease' ? 'selected':'' }}>Decrease (GO TO 144)</option>
                                            <option value="Remain the same" {{$household->livestockc == 'Remain the same' ? 'selected':'' }}>Remain the same (GO TO 145)</option>
                                            <option value="Increase" {{$household->livestockc == 'Increase' ? 'selected':'' }}>Increase (GO TO 145)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">144. What is the primary reason for the decrease in number of livestock and
                                        poultry?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestockr" id="livestockr">
                                            <option value="" {{$household->livestockr == '' ? 'selected':'' }}>Select</option>
                                            <option value="Increase in cost of farm inputs" {{$household->livestockr == 'Increase in cost of farm inputs' ? 'selected':'' }}>Increase in cost of farm inputs (feeds, chicks, etc.)</option>
                                            <option value="Stricken with diseases" {{$household->livestockr == 'Stricken with diseases' ? 'selected':'' }}>Stricken with diseases (swine flu, bird flu, foot and mouth
                                                disease, etc.)</option>
                                            <option value="Decrease in land holding" {{$household->livestockr == 'Decrease in land holding' ? 'selected':'' }}>Decrease in land holding</option>
                                            <option value="Affected by typhoon" {{$household->livestockr == 'Affected by typhoon' ? 'selected':'' }}>Affected by typhoon</option>
                                            <option value="Affected by flood" {{$household->livestockr == 'Affected by flood' ? 'selected':'' }}>Affected by flood</option>
                                            <option value="Affected by extreme hot weather condition" {{$household->livestockr == 'Affected by extreme hot weather condition' ? 'selected':'' }}>Affected by extreme hot weather condition</option>
                                            <option value="Others" {{$household->livestockr == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">145. Do you have livestock and poultry insurance?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestocki" id="livestocki">
                                            <option value="" {{$household->livestocki == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->livestocki == 'Yes' ? 'selected':'' }}>Yes (GO TO 146)</option>
                                            <option value="No" {{$household->livestocki == 'No' ? 'selected':'' }}>No (GO TO 147)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">146. Who is the insurance provider?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestockip" id="livestockip">
                                            <option value="" {{$household->livestockip == '' ? 'selected':'' }}>Select</option>
                                            <option value="Philippine Crop Insurance Corporation" {{$household->livestockip == 'Philippine Crop Insurance Corporation' ? 'selected':'' }}>Philippine Crop Insurance Corporation</option>
                                            <option value="Private Insurance Company" {{$household->livestockip == 'Private Insurance Company' ? 'selected':'' }}>Private Insurance Company</option>
                                            <option value="Bank" {{$household->livestockip == 'Bank' ? 'selected':'' }}>Bank</option>
                                            <option value="Others" {{$household->livestockip == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>

                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.3. FISHING</strong></h5>
                                <div class="form-group row">

                                    <p class="col-sm-6 col-form-label">147. How many years has the household been engaged in fishing?
                                        </small>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishyrs" id="fishyrs">
                                            <option value="" {{$household->fishyrs == '' ? 'selected':'' }}>Select</option>
                                            <option value="3 years and above" {{$household->fishyrs == '3 years and above' ? 'selected':'' }}>3 years and above (GO TO 148)</option>
                                            <option value="Not more than 3 years" {{$household->fishyrs == 'Not more than 3 years' ? 'selected':'' }}>Not more than 3 years (GO TO 152)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">148. Compared with 3 years ago, did your fish catch?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishyrsc" id="fishyrs">
                                            <option value="" {{$household->fishyrsc == '' ? 'selected':'' }}>Select</option>
                                            <option value="Decrease" {{$household->fishyrsc == 'Decrease' ? 'selected':'' }}>Decrease (GO TO 149)</option>
                                            <option value="Remain the same" {{$household->fishyrsc == 'Remain the same' ? 'selected':'' }}>Remain the same (GO TO 150)</option>
                                            <option value="Increase" {{$household->fishyrsc == 'Increase' ? 'selected':'' }}>Increase (GO TO 150)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">149. What is the primary reason for the decrease in fish catch?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishr" id="fishr">
                                            <option value="" {{$household->fishr == '' ? 'selected':'' }}>Select</option>
                                            <option value="Decrease in fishing area due to government restrictions" {{$household->fishr == 'Decrease in fishing area due to government restrictions' ? 'selected':'' }}>Decrease in fishing area due to government restrictions</option>
                                            <option value="Decrease in fishing area due to competition" {{$household->fishr == 'Decrease in fishing area due to competition' ? 'selected':'' }}>Decrease in fishing area due to competition</option>
                                            <option value="Decrease in fishes" {{$household->fishr == 'Decrease in fishes' ? 'selected':'' }}>Decrease in fishes</option>
                                            <option value="Occurrence of coral bleaching" {{$household->fishr == 'Occurrence of coral bleaching' ? 'selected':'' }}>Occurrence of coral bleaching</option>
                                            <option value="Occurrence of fishkill" {{$household->fishr == 'Occurrence of fishkill' ? 'selected':'' }}>Occurrence of fishkill</option>
                                            <option value="Occurrence of oil spill and other kinds of pollution" {{$household->fishr == 'Occurrence of oil spill and other kinds of pollution' ? 'selected':'' }}>Occurrence of oil spill and other kinds of pollution</option>
                                            <option value="Less frequent fishing because of increase in fuel prices and other expenses" {{$household->fishr == 'Less frequent fishing because of increase in fuel prices and other expenses' ? 'selected':'' }}>Less frequent fishing because of increase in fuel prices and other
                                                expenses</option>
                                            <option value="Frequent occurrence of typhoons" {{$household->fishr == 'Frequent occurrence of typhoons' ? 'selected':'' }}>Frequent occurrence of typhoons</option>
                                            <option value="Others" {{$household->fishr == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">150. Do you have fisheries insurance?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishi" id="fishi">
                                            <option value="" {{$household->fishi == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->fishi == 'Yes' ? 'selected':'' }}>Yes (GO TO 151)</option>
                                            <option value="No" {{$household->fishi == 'No' ? 'selected':'' }}>No (GO TO 152)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">151. Who is the insurance provider?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fiship" id="fiship">
                                            <option value="" {{$household->fiship == '' ? 'selected':'' }}>Select</option>
                                            <option value="Philippine Crop Insurance Corporation" {{$household->fiship == 'Philippine Crop Insurance Corporation' ? 'selected':'' }}>Philippine Crop Insurance Corporation</option>
                                            <option value="Private Insurance Company" {{$household->fiship == 'Private Insurance Company' ? 'selected':'' }}>Private Insurance Company</option>
                                            <option value="Bank" {{$household->fiship == 'Bank' ? 'selected':'' }}>Bank</option>
                                            <option value="Others" {{$household->fiship == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.4. TEMPERATURE</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">152. Compared with 3 years ago, in the temperature hotter now in your
                                        area?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="temp" id="temp">
                                            <option value="" {{$household->temp == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->temp == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->temp == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.5. ELECTRICITY</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">153. Compared with 3 years ago, are brownouts more frequent now in your
                                        area?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="brownout" id="brownout">
                                            <option value="" {{$household->brownout == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->brownout == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->brownout == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.6. SEA LEVEL</strong></h5>
                                <div class="form-group row">

                                    <p class="col-sm-6 col-form-label">154. Compared with 3 years ago, did the sea level ___ in your area?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="sealevel" id="sealevel">
                                            <option value="" {{$household->sealevel == '' ? 'selected':'' }}>Select</option>
                                            <option value="Decrease" {{$household->sealevel == 'Decrease' ? 'selected':'' }}>Decrease</option>
                                            <option value="Remain the same" {{$household->sealevel == 'Remain the same' ? 'selected':'' }}>Remain the same</option>
                                            <option value="Increase" {{$household->sealevel == 'Increase' ? 'selected':'' }}>Increase</option>
                                            <option value="Dont know" {{$household->sealevel == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Not applicable" {{$household->sealevel == 'Not applicable' ? 'selected':'' }}>Not applicable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">


                                <h5><strong>Q.7. WATER SUPPLY</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">155. Compared with 3 years ago, did the water supply ___ in your area?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="water" id="water">
                                            <option value="" {{$household->water == '' ? 'selected':'' }}>Select</option>
                                            <option value="Decrease" {{$household->water == 'Decrease' ? 'selected':'' }}>Decrease (GO TO 156)</option>
                                            <option value="Remain" {{$household->water == 'Remain' ? 'selected':'' }}>Remain the same (GO TO 157)</option>
                                            <option value="Increase" {{$household->water == 'Increase' ? 'selected':'' }}>Increase (GO TO 157)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">156. What is the primary reason for the decrease in water supply?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="waterr" id="waterr">
                                            <option value="" {{$household->waterr == '' ? 'selected':'' }}>Select</option>
                                            <option value="Drought" {{$household->waterr == 'Drought' ? 'selected':'' }}>Drought</option>
                                            <option value="Broken faucet or pump" {{$household->waterr == 'Broken faucet or pump' ? 'selected':'' }}>Broken faucet/pump</option>
                                            <option value="Lower water level in the dam" {{$household->waterr == 'Lower water level in the dam' ? 'selected':'' }}>Lower water level in the dam</option>
                                            <option value="Less frequent delivery of tanker truck or peddler" {{$household->waterr == 'Less frequent deliveryof tanker truck or peddler' ? 'selected':'' }}>Less frequent delivery of tanker truck/peddler</option>
                                            <option value="Increase in number of consumers" {{$household->waterr == 'Increase in number of consumers' ? 'selected':'' }}>Increase in number of consumers</option>
                                            <option value="Others" {{$household->waterr == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.8. FLOODING</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">157. Compared with 3 years ago, do floods occur more often in your area
                                        now?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="floodt" id="floodt">
                                            <option value="" {{$household->floodt == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->floodt == 'Yes' ? 'selected':'' }}>Yes (GO TO 158)</option>
                                            <option value="No" {{$household->floodt == 'No' ? 'selected':'' }}>No (GO TO 160)</option>
                                            <option value="Did not experience flood" {{$household->floodt == 'Did not experience flood' ? 'selected':'' }}>Did not experience flood (GO TO 160)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">158. Three years ago, how long did it usually take for the flood to subside?
                                        (Specify the number of hours)</p>
                                    <div class="col-sm-5">
                                        <input name="floodhrs" class="form-control input-sm" type="number" min="0" placeholder="" id="floodhrs" value="{{$household->floodhrs}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">159. During the past 12 months, how long did it usually take for the flood to
                                        subside (Specify the number of hours)?</p>
                                    <div class="col-sm-5">
                                        <input name="floodmnths" class="form-control input-sm" type="number" min="0" placeholder="" id="floodmnths" value="{{$household->floodmnths}}" />
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.9. DROUGHT</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">160. Compared with 3 years ago, does drought occur more often in your area
                                        now?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="drought" id="">
                                            <option value="" {{$household->drought == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->drought == 'Yes' ? 'selected':'' }}>Yes (GO TO 161)</option>
                                            <option value="No" {{$household->drought == 'No' ? 'selected':'' }}>No (GO TO 162)</option>
                                            <option value="Did not experience drought" {{$household->drought == 'Did not experience drought' ? 'selected':'' }}>Did not experience drought (GO TO 162)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">161. In the past 3 years, how long did the last drought occur IN MONTHS?</p>
                                    <div class="col-sm-5">
                                        <input name="droughtnum" class="form-control input-sm" type="number" min="0" placeholder="" id="droughtnum" value="{{$household->droughtnum}}" />
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.10. EVACUATION</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">162. During the past 3 years, did you move out/leave permanently from your
                                        previous dwelling unit?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="moveout" id="moveout">
                                            <option value="" {{$household->moveout == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->moveout == 'Yes' ? 'selected':'' }}>Yes (GO TO 163)</option>
                                            <option value="No" {{$household->moveout == 'No' ? 'selected':'' }}>No (GO TO 164)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">163. What was your primary reason for moving out/evacuating from your previous
                                        dwelling unit?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="moveoutr" id="moveoutr">
                                            <option value="" {{$household->moveoutr == '' ? 'selected':'' }}>Select</option>
                                            <option value="Typhoon" {{$household->moveoutr == 'Typhoon' ? 'selected':'' }}>Typhoon</option>
                                            <option value="Flood" {{$household->moveoutr == 'Flood' ? 'selected':'' }}>Flood</option>
                                            <option value="Drought" {{$household->moveoutr == 'Drought' ? 'selected':'' }}>Drought</option>
                                            <option value="Earthquake" {{$household->moveoutr == 'Earthquake' ? 'selected':'' }}>Earthquake</option>
                                            <option value="Volcanic eruption" {{$household->moveoutr == 'Volcanic eruption' ? 'selected':'' }}>Volcanic eruption</option>
                                            <option value="Landslide or mudslide" {{$household->moveoutr == 'Landslide or mudslide' ? 'selected':'' }}>Landslide or mudslide</option>
                                            <option value="Tsunami" {{$household->moveoutr == 'Tsunami' ? 'selected':'' }}>Tsunami</option>
                                            <option value="Fire" {{$household->moveoutr == 'Fire' ? 'selected':'' }}>Fire</option>
                                            <option value="Forest fire" {{$household->moveoutr == 'Forest fire' ? 'selected':'' }}>Forest fire</option>
                                            <option value="Armed conflict" {{$household->moveoutr == 'Armed conflict' ? 'selected':'' }}>Armed conflict</option>
                                            <option value="Infrastructure development project" {{$household->moveoutr == 'Infrastructure development project' ? 'selected':'' }}>Infrastructure development project</option>
                                            <option value="Others" {{$household->moveoutr == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">164. During the past 3 years, did you temporarily evacuate your house because of
                                        any calamity?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="evacuate" id="evacuate">
                                            <option value="" {{$household->evacuate == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->evacuate == 'Yes' ? 'selected':'' }}>Yes (GO TO 165)</option>
                                            <option value="No" {{$household->evacuate == 'No' ? 'selected':'' }}>No (GO TO 167)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">165. During your last temporary evacuation, where did you stay?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="evacuateloc" id="evacuateloc">
                                            <option value="" {{$household->evacuateloc == '' ? 'selected':'' }}>Select</option>
                                            <option value="School" {{$household->evacuateloc == 'School' ? 'selected':'' }}>School</option>
                                            <option value="Church" {{$household->evacuateloc == 'Church' ? 'selected':'' }}>Church</option>
                                            <option value="Covered court or gym" {{$household->evacuateloc == 'Covered court or gym' ? 'selected':'' }}>Covered court/gym</option>
                                            <option value="Relatives house" {{$household->evacuateloc == 'Relatives house' ? 'selected':'' }}>Relative's house</option>
                                            <option value="Neighbor or friends house" {{$household->evacuateloc == 'Neighbor or friends house' ? 'selected':'' }}>Neighbor or friend's house</option>
                                            <option value="Barangay or City hall" {{$household->evacuateloc == 'Barangay or City hall' ? 'selected':'' }}>Barangay/City hall</option>
                                            <option value="Multi-purpose hall" {{$household->evacuateloc == 'Multi-purpose hall' ? 'selected':'' }}>Multi-purpose hall</option>
                                            <option value="Designated evacuation center" {{$household->evacuateloc == 'Designated evacuation center' ? 'selected':'' }}>Designated evacuation center</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">166. How long did you stay in the evacuation area? (in days)</p>
                                    <div class="col-sm-5">
                                        <input name="evacuatenum" class="form-control input-sm" type="number" min="0" placeholder="" value="{{$household->evacuatenum}}" />
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach


@foreach ($all as $household)
<div class="modal  fade text-left" id="edit5" tabindex="-2" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Calamity</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('household.update' , $household->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>Q.11. CALAMITY</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-4 col-form-label">167. During the past 12 months, which of the following calamities affected your
                                        household?</p>
                                    <p class="col-sm-2 col-form-label">168. How many times did the ___ happen?</p>
                                    <p class="col-sm-2 col-form-label">169. Did you receive any kind of assistance? IF YES IN (167)</p>
                                    <p class="col-sm-3 col-form-label">170. Where did the assistance come from?</p>

                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">1. Typhoon</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="typhoon" id="typhoon">
                                            <option value="" {{$household->typhoon == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->typhoon == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->typhoon == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="typhoonnum" class="form-control input-sm" type="number" placeholder="" id="typhoonnum" value="{{$household->typhoonnum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="typhoona" id="typhoona">
                                            <option value="" {{$household->typhoona == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->typhoona == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->typhoona == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="typhoonsrc" id="typhoonsrc">
                                            <option value="" {{$household->typhoonsrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->typhoonsrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->typhoonsrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->typhoonsrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->typhoonsrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->typhoonsrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->typhoonsrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">2. Flood</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="flood" id="flood">
                                            <option value="" {{$household->flood == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->flood == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->flood == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="floodnum" class="form-control input-sm" type="number" placeholder="" id="floodnum" rvalue="{{$household->floodnum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="flooda" id="flooda">
                                            <option value="" {{$household->flooda == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->flooda == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->flooda == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="floodsrc" id="floodsrc">
                                            <option value="" {{$household->floodsrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->floodsrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->floodsrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->floodsrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->floodsrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->floodsrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->floodsrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">3. Drought</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="drough" id="drough">
                                            <option value="" {{$household->drough == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->drough == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->drough == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="droughnum" class="form-control input-sm" type="number" placeholder="" id="droughnum" value="{{$household->droughnum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="droughta" id="droughta">
                                            <option value="" {{$household->droughta == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->droughta == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->droughta == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="droughtsrc" id="droughtsrc">
                                            <option value="" {{$household->droughtsrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->droughtsrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->droughtsrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->droughtsrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->droughtsrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->droughtsrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->droughtsrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">4. Earthquake</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="quake" id="quake">
                                            <option value="" {{$household->quake == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->quake == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->quake == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="quakenum" class="form-control input-sm" type="number" placeholder="" id="quakenum" value="{{$household->quakenum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="quakea" id="quakea">
                                            <option value="" {{$household->quakea == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->quakea == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->quakea == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="quakesrc" id="quakesrc">
                                            <option value="" {{$household->quakesrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->quakesrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->quakesrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->quakesrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->quakesrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->quakesrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->quakesrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">5 Volcanic Eruption</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="erupt" id="erupt">
                                            <option value="" {{$household->erupt == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->erupt == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->erupt == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="eruptnum" class="form-control input-sm" type="number" placeholder="" id="eruptnum" value="{{$household->eruptnum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="erupta" id="erupta">
                                            <option value="" {{$household->erupta == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->erupta == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->erupta == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="eruptsrc" id="eruptsrc">
                                            <option value="" {{$household->eruptsrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->eruptsrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->eruptsrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->eruptsrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->eruptsrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->eruptsrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->eruptsrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">6 Ladnslide/mudslide</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="landslide" id="landslide">
                                            <option value="" {{$household->landslide == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->landslide == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->landslide == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="landslidenum" class="form-control input-sm" type="number" placeholder="" id="landslidenum" value="{{$household->landslidenum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="landslinea" id="landslinea">
                                            <option value="" {{$household->landslinea == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->landslinea == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->landslinea == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="landslinesrc" id="landslinesrc">
                                            <option value="" {{$household->landslinesrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->landslinesrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->landslinesrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->landslinesrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->landslinesrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->landslinesrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->landslinesrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">7. Tsunami</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="tsunami" id="tsunami">
                                            <option value="" {{$household->tsunami == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->tsunami == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->tsunami == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="tsunaminum" class="form-control input-sm" type="number" placeholder="" id="tsunaminum" value="{{$household->tsunaminum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="tsunamia" id="tsunamia">
                                            <option value="" {{$household->tsunamia == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->tsunamia == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->tsunamia == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tsunamisrc" id="tsunamisrc">
                                            <option value="" {{$household->tsunamisrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->tsunamisrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->tsunamisrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->tsunamisrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->tsunamisrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->tsunamisrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->tsunamisrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">8. Fire</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="fire" id="fire">
                                            <option value="" {{$household->fire == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->fire == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->fire == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="firenum" class="form-control input-sm" type="number" placeholder="" id="firenum" value="{{$household->firenum}}" />
                                        </select>
                                    </div>
                                    <div class=" col-sm-2">
                                        <select class="form-control" name="firea" id="firea">
                                            <option value="" {{$household->firea == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->firea == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->firea == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="firesrc" id="firesrc">
                                            <option value="" {{$household->firesrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->firesrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->firesrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->firesrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->firesrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->firesrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->firesrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">9. Forest Fire</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="forest" id="forest">
                                            <option value="" {{$household->forest == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->forest == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->forest == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="forestnum" class="form-control input-sm" type="number" placeholder="" id="forestnum" value="{{$household->forestnum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="foresta" id="foresta">
                                            <option value="" {{$household->foresta == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->foresta == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->foresta == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="forestsrc" id="forestsrc">
                                            <option value="" {{$household->forestsrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->forestsrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->forestsrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->forestsrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->forestsrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->forestsrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->forestsrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">10. Armed conflicts</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="conflict" id="conflict">
                                            <option value="" {{$household->conflict == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->conflict == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->conflict == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="conflictnum" class="form-control input-sm" type="number" placeholder="" id="conflictnum" value="{{$household->conflictnum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="conflicta" id="conflict">
                                            <option value="" {{$household->conflicta == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->conflicta == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->conflicta == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="conflictsrc" id="conflictsrc">
                                            <option value="" {{$household->conflictsrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->conflictsrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->conflictsrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->conflictsrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->conflictsrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->conflictsrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->conflictsrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">11. Others, specify</p>
                                    <div class="col-sm-2">
                                        <input name="osname" class="form-control input-sm" type="text" placeholder="" id="osname" value="{{$household->osname}}" />
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="osnum" class="form-control input-sm" type="number" placeholder="" id="osnum" value="{{$household->osnum}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="osa" id="osa">
                                            <option value="" {{$household->osa == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->osa == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->osa == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="osasrc" id="osasrc">
                                            <option value="" {{$household->osasrc == '' ? 'selected':'' }}>Select</option>
                                            <option value="National government" {{$household->osasrc == 'National government' ? 'selected':'' }}>National government</option>
                                            <option value="Local government" {{$household->osasrc == 'Local government' ? 'selected':'' }}>Local government</option>
                                            <option value="Non-government organization" {{$household->osasrc == 'Non-government organization' ? 'selected':'' }}>Non-government organization</option>
                                            <option value="International organization" {{$household->osasrc == 'International organization' ? 'selected':'' }}>International organization</option>
                                            <option value="Relatives" {{$household->osasrc == 'Relatives' ? 'selected':'' }}>Relatives</option>
                                            <option value="Others" {{$household->osasrc == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>

                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>R. HUNGER</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">174. In the last 3 months, did it happen even once that your household
                                        experienced hunger and did not have anything to eat?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="hungerhappen" id="hungerhappen">
                                            <option value="" {{$household->hungerhappen == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->hungerhappen == 'Yes' ? 'selected':'' }}>Yes (GO TO 175)</option>
                                            <option value="No" {{$household->hungerhappen == 'No' ? 'selected':'' }}>No (GO TO 177)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-3 col-form-label">During the past 3 months, how many days did your household experience hunger and
                                        not have anything to eat?</p>
                                    <p class="col-sm-4 col-form-label">175. NAME OF MONTH</p>
                                    <p class="col-sm-4 col-form-label">176. NUMBER OF DAYS</p>
                                    <p class="col-sm-3 col-form-label">a. First Month</p>
                                    <div class="col-sm-4">
                                        <input name="nhunger" class="form-control input-sm" type="text" placeholder="" id="nhunger" value="{{$household->nhunger}}" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="mhunger" class="form-control input-sm" type="number" placeholder="" id="mhunger" value="{{$household->mhunger}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">b. Second Month</p>
                                    <div class="col-sm-4">
                                        <input name="nhungers" class="form-control input-sm" type="text" placeholder="" id="nhungers" value="{{$household->nhungers}}" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="mhungers" class="form-control input-sm" type="number" placeholder="" id="mhungers" value="{{$household->mhungers}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">c. Third Month</p>
                                    <div class="col-sm-4">
                                        <input name="nhungert" class="form-control input-sm" type="text" placeholder="" id="nhungert" value="{{$household->nhungert}}" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="mhungert" class="form-control input-sm" type="number" placeholder="" id="mhungert" value="{{$household->mhungert}}" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <h5><strong>Q.12. DISASTER PREPAREDNESS</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">171. Do you have a disaster preparedness kit?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="disasterprepaidnesskit" id="disasterprepaidnesskit">
                                            <option value="" {{$household->disasterprepaidnesskit == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->disasterprepaidnesskit == 'Yes' ? 'selected':'' }}>Yes (GO TO 172)</option>
                                            <option value="No" {{$household->disasterprepaidnesskit == 'No' ? 'selected':'' }}>No (GO TO 174)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">172. Do you have the following in your disaster preparedness kit?</p>
                                    <p class="col-sm-5 col-form-label">173. How many days will it last?</p>
                                    <p class="col-sm-3 col-form-label">1. Water</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="watery" id="watery">
                                            <option value="" {{$household->watery == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->watery == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->watery == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="waterynum" class="form-control input-sm" type="number" min="0" placeholder="" id="waterynum" value="{{$household->waterynum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Food (canned goods, biscuits, bread)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="food" id="food">
                                            <option value="" {{$household->food == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->food == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->food == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="foodnum" class="form-control input-sm" type="number" min="0" placeholder="" id="foodnum" value="{{$household->foodnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">3. Matches/Lighter</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="match" id="match">
                                            <option value="" {{$household->match == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->match == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->match == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="matchnum" class="form-control input-sm" type="number" min="0" placeholder="" id="matchnum" value="{{$household->matchnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">4. Flashlight/Emergency light</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="light" id="light">
                                            <option value="" {{$household->light == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->light == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->light == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="lightnum" class="form-control input-sm" type="number" min="0" placeholder="" id="lightnum" value="{{$household->lightnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">5. Radio/ Transistor (battery-operated)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="radio" id="radio">
                                            <option value="" {{$household->light == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->light == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->light == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="radionum" class="form-control input-sm" type="number" min="0" placeholder="" id="radionum" value="{{$household->radionum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">6. Candle</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="candle" id="candle">
                                            <option value="" {{$household->light == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->light == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->light == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="candlenum" class="form-control input-sm" type="number" min="0" placeholder="" id="candlenum" value="{{$household->candlenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">7. Medical kit</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="kit" id="kit">
                                            <option value="" {{$household->kit == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->kit == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->kit == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="kitnum" class="form-control input-sm" type="number" min="0" placeholder="" id="kitnum" value="{{$household->kitnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">8. Whistle</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="whistle" id="whistle">
                                            <option value="" {{$household->whistle == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->whistle == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->whistle == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="whistlenum" class="form-control input-sm" type="number" min="0" placeholder="" id="whistlenum" value="{{$household->whistlenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">9. Clothes</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="clothe" id="clothe">
                                            <option value="" {{$household->light == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->light == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->light == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="clothenum" class="form-control input-sm" type="number" min="0" placeholder="" id="clothenum" value="{{$household->clothenum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">10. Blanket</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="blanket" id="blanket">
                                            <option value="" {{$household->blanket == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->blanket == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->blanket == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="blanketnum" class="form-control input-sm" type="number" min="0" placeholder="" id="blanketnum" value="{{$household->blanketnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">11. Battery (cellphone, flashlight, radio)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="batt" id="batt">
                                            <option value="" {{$household->batt == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->batt == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->batt == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="battnum" class="form-control input-sm" type="number" min="0" placeholder="" id="battnum" value="{{$household->battnum}}" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">12. Important documents (land title, valid ID, birth certificate, etc.)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="docu" id="docu">
                                            <option value="" {{$household->docu == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->docu == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->docu == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="docunum" class="form-control input-sm" type="number" min="0" placeholder="" id="docunum" value="{{$household->docunum}}" />
                                    </div>
                                    <p class=" col-sm-3 col-form-label">13. Others, specify</p>
                                    <div class="col-sm-3">
                                        <input name="othr" class="form-control input-sm" type="text" min="0" placeholder="" id="othr" value="{{$household->othr}}" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="othrnum" class="form-control input-sm" type="number" min="0" placeholder="" id="othrnum" value="{{$household->othrnum}}" />
                                    </div>

                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>S. DEATH</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">177. Were there any household members who died in the past 12 months?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="deathhousehold" id="deathhousehold">
                                            <option value="" {{$household->deathhousehold == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->deathhousehold == 'Yes' ? 'selected':'' }}>Yes (GO TO 178)</option>
                                            <option value="No" {{$household->deathhousehold == 'No' ? 'selected':'' }}>No (GO TO 182) </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-3 col-form-label">178. What is the name of the person who died?</p>
                                    <p class="col-sm-2 col-form-label">179. What is___'s sex??</p>
                                    <p class="col-sm-3 col-form-label">180. What was ___'s age at the time of death??</p>
                                    <p class="col-sm-3 col-form-label">181. What was the cause of___'s death?</p>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <input name="deatho" class="form-control input-sm" type="text" placeholder="" id="deatho" value="{{$household->deatht}}" />
                                    </div>
                                    <div class="col-sm-2">

                                        <select class="form-control" name="deathosex" id="deathosex" value="{{$household->deathosex}}">
                                            <option value="" {{$household->deathosex == '' ? 'selected':'' }}>Select</option>
                                            <option value="Male" {{$household->deathosex == 'Male' ? 'selected':'' }}>Male</option>
                                            <option value="Female" {{$household->deathosex == 'Female' ? 'selected':'' }}>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deathotime" class="form-control input-sm" type="number" placeholder="" id="deathotime" value="{{$household->deathotime}}" />
                                    </div>
                                    <div class="col-sm-3">

                                        <select class="form-control" name="deathocause" id="deathocause">
                                            <option value="" {{$household->deathocause == '' ? 'selected':'' }}>Select</option>
                                            <option value="Diseases of the heart" {{$household->deathocause == 'Diseases of the heart' ? 'selected':'' }}>Diseases of the heart (e.g. heart attack)</option>
                                            <option value="Diseases of the vascular system" {{$household->deathocause == 'Diseases of the vascular system' ? 'selected':'' }}>Diseases of the vascular system (e.g. stroke)</option>
                                            <option value="Malignant neoplasms" {{$household->deathocause == 'Malignant neoplasms' ? 'selected':'' }}>Malignant neoplasms (e.g. cancer)</option>
                                            <option value="Pneumonia" {{$household->deathocause == 'Pneumonia' ? 'selected':'' }}>Pneumonia</option>
                                            <option value="Road or Vehicular accidents" {{$household->deathocause == 'Road or Vehicular accidents' ? 'selected':'' }}>Road/Vehicular accidents</option>
                                            <option value="Other accidents" {{$household->deathocause == 'Other accidents' ? 'selected':'' }}>Other accidents</option>
                                            <option value="Tuberculois" {{$household->deathocause == 'Tuberculois' ? 'selected':'' }}>Tuberculois</option>
                                            <option value="Chronic lower respiratory diseases" {{$household->deathocause == 'Chronic lower respiratory diseases' ? 'selected':'' }}>Chronic lower respiratory diseases (e.g. COPD, bronchitis, asthma)
                                            </option>
                                            <option value="Diabetes mellitus" {{$household->deathocause == 'Diabetes mellitus' ? 'selected':'' }}>Diabetes mellitus</option>
                                            <option value="Nephritis, nephrotic syndrome and nephrosis" {{$household->deathocause == 'Nephritis, nephrotic syndrome and nephrosis' ? 'selected':'' }}>Nephritis, nephrotic syndrome and nephrosis (e.g inflammation of
                                                kidney)</option>
                                            <option value="Certain conditions originating in the perinatal period" {{$household->deathocause == 'Certain conditions originating in the perinatal period' ? 'selected':'' }}>Certain conditions originating in the perinatal period</option>
                                            <option value="Drowned from flood or storm surges or tsunami" {{$household->deathocause == 'Drowned from flood or storm surges or tsunami' ? 'selected':'' }}>Drowned from flood/storm surges/tsunami</option>
                                            <option value="Victim of landslide" {{$household->deathocause == 'Victim of landslide' ? 'selected':'' }}>Victim of landslide</option>
                                            <option value="Electrocuted during typhoon or storm surge" {{$household->deathocause == 'Electrocuted during typhoon or storm surge' ? 'selected':'' }}>Electrocuted during typhoon or storm surge</option>
                                            <option value="Murder" {{$household->deathocause == 'Murder' ? 'selected':'' }}>Murder</option>
                                            <option value="Others" {{$household->deathocause == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deatht" class="form-control input-sm" type="text" placeholder="" id="deatht" value="{{$household->deatht}}" />
                                    </div>
                                    <div class="col-sm-2">

                                        <select class="form-control" name="deathtsex" id="deathtsex">
                                            <option value="" {{$household->deathtsex == '' ? 'selected':'' }}>Select</option>
                                            <option value="Male" {{$household->deathtsex == 'Male' ? 'selected':'' }}>Male</option>
                                            <option value="Female" {{$household->deathtsex == 'Female' ? 'selected':'' }}>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deathttime" class="form-control input-sm" type="number" placeholder="" id="deathttime" value="{{$household->deathttime}}" />
                                    </div>
                                    <div class="col-sm-3">

                                        <select class="form-control" name="deathtcause" id="deathtcause">
                                            <option value="" {{$household->deathtcause == '' ? 'selected':'' }}>Select</option>
                                            <option value="Diseases of the heart" {{$household->deathtcause == 'Diseases of the heart' ? 'selected':'' }}>Diseases of the heart (e.g. heart attack)</option>
                                            <option value="Diseases of the vascular system" {{$household->deathtcause == 'Diseases of the vascular system' ? 'selected':'' }}>Diseases of the vascular system (e.g. stroke)</option>
                                            <option value="Malignant neoplasms" {{$household->deathtcause == 'Malignant neoplasms' ? 'selected':'' }}>Malignant neoplasms (e.g. cancer)</option>
                                            <option value="Pneumonia" {{$household->deathtcause == 'Pneumonia' ? 'selected':'' }}>Pneumonia</option>
                                            <option value="Road or Vehicular accidents" {{$household->deathtcause == 'Road or Vehicular accidents' ? 'selected':'' }}>Road/Vehicular accidents</option>
                                            <option value="Other accidents" {{$household->deathtcause == 'Other accidents' ? 'selected':'' }}>Other accidents</option>
                                            <option value="Tuberculois" {{$household->deathtcause == 'Tuberculois' ? 'selected':'' }}>Tuberculois</option>
                                            <option value="Chronic lower respiratory diseases" {{$household->deathtcause == 'Chronic lower respiratory diseases' ? 'selected':'' }}>Chronic lower respiratory diseases (e.g. COPD, bronchitis, asthma)
                                            </option>
                                            <option value="Diabetes mellitus" {{$household->deathtcause == 'Diabetes mellitus' ? 'selected':'' }}>Diabetes mellitus</option>
                                            <option value="Nephritis, nephrotic syndrome and nephrosis" {{$household->deathtcause == 'Nephritis, nephrotic syndrome and nephrosis' ? 'selected':'' }}>Nephritis, nephrotic syndrome and nephrosis (e.g inflammation of
                                                kidney)</option>
                                            <option value="Certain conditions originating in the perinatal period" {{$household->deathtcause == 'Certain conditions originating in the perinatal period' ? 'selected':'' }}>Certain conditions originating in the perinatal period</option>
                                            <option value="Drowned from flood or storm surges or tsunami" {{$household->deathtcause == 'Drowned from flood or storm surges or tsunami' ? 'selected':'' }}>Drowned from flood/storm surges/tsunami</option>
                                            <option value="Victim of landslide" {{$household->deathtcause == 'Victim of landslide' ? 'selected':'' }}>Victim of landslide</option>
                                            <option value="Electrocuted during typhoon or storm surge" {{$household->deathtcause == 'Electrocuted during typhoon or storm surge' ? 'selected':'' }}>Electrocuted during typhoon or storm surge</option>
                                            <option value="Murder" {{$household->deathtcause == 'Murder' ? 'selected':'' }}>Murder</option>
                                            <option value="Others" {{$household->deathtcause == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deathth" class="form-control input-sm" type="text" placeholder="" id="deathth" value="{{$household->deathth}}" />
                                    </div>
                                    <div class="col-sm-2">

                                        <select class="form-control" name="deaththsex" id="deaththsex">
                                            <option value="" {{$household->deaththsex == '' ? 'selected':'' }}>Select</option>
                                            <option value="Male" {{$household->deaththsex == 'Male' ? 'selected':'' }}>Male</option>
                                            <option value="Female" {{$household->deaththsex == 'Female' ? 'selected':'' }}>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deaththtime" class="form-control input-sm" type="number" placeholder="" id="deaththtime" value="{{$household->deathtime}}" />
                                    </div>
                                    <div class="col-sm-3">

                                        <select class="form-control" name="deatthcause" id="deatthcause">
                                            <option value="" {{$household->deatthcause == '' ? 'selected':'' }}>Select</option>
                                            <option value="Diseases of the heart" {{$household->deatthcause == 'Diseases of the heart' ? 'selected':'' }}>Diseases of the heart (e.g. heart attack)</option>
                                            <option value="Diseases of the vascular system" {{$household->deatthcause == 'Diseases of the vascular system' ? 'selected':'' }}>Diseases of the vascular system (e.g. stroke)</option>
                                            <option value="Malignant neoplasms" {{$household->deatthcause == 'Malignant neoplasms' ? 'selected':'' }}>Malignant neoplasms (e.g. cancer)</option>
                                            <option value="Pneumonia" {{$household->deatthcause == 'Pneumonia' ? 'selected':'' }}>Pneumonia</option>
                                            <option value="Road or Vehicular accidents" {{$household->deatthcause == 'Road or Vehicular accidents' ? 'selected':'' }}>Road/Vehicular accidents</option>
                                            <option value="Other accidents" {{$household->deatthcause == 'Other accidents' ? 'selected':'' }}>Other accidents</option>
                                            <option value="Tuberculois" {{$household->deatthcause == 'Tuberculois' ? 'selected':'' }}>Tuberculois</option>
                                            <option value="Chronic lower respiratory diseases" {{$household->deatthcause == 'Chronic lower respiratory diseases' ? 'selected':'' }}>Chronic lower respiratory diseases (e.g. COPD, bronchitis, asthma)
                                            </option>
                                            <option value="Diabetes mellitus" {{$household->deatthcause == 'Diabetes mellitus' ? 'selected':'' }}>Diabetes mellitus</option>
                                            <option value="Nephritis, nephrotic syndrome and nephrosis" {{$household->deatthcause == 'Nephritis, nephrotic syndrome and nephrosis' ? 'selected':'' }}>Nephritis, nephrotic syndrome and nephrosis (e.g inflammation of
                                                kidney)</option>
                                            <option value="Certain conditions originating in the perinatal period" {{$household->deatthcause == 'Certain conditions originating in the perinatal period' ? 'selected':'' }}>Certain conditions originating in the perinatal period</option>
                                            <option value="Drowned from flood or storm surges or tsunami" {{$household->deatthcause == 'Drowned from flood or storm surges or tsunami' ? 'selected':'' }}>Drowned from flood/storm surges/tsunami</option>
                                            <option value="Victim of landslide" {{$household->deatthcause == 'Victim of landslide' ? 'selected':'' }}>Victim of landslide</option>
                                            <option value="Electrocuted during typhoon or storm surge" {{$household->deatthcause == 'Electrocuted during typhoon or storm surge' ? 'selected':'' }}>Electrocuted during typhoon or storm surge</option>
                                            <option value="Murder" {{$household->deatthcause == 'Murder' ? 'selected':'' }}>Murder</option>
                                            <option value="Others" {{$household->deatthcause == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>


                            </div>


                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach


@foreach ($all as $household)
<div class="modal  fade text-left" id="edit6" tabindex="-2" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Programs</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('household.update' , $household->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>T. PROGRAMS</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">182. During the past 12 months, did you or any member of your household receive
                                        or avail of any of the following programs?</p>
                                    <p class="col-sm-5 col-form-label">183. What is the name of the program? </p>

                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-4 col-form-label">1. Sustainable Livelihood Program (SLP)</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="slp" id="slp">
                                            <option value="" {{$household->slp == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->slp == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->slp == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="slpname" class="form-control input-sm" type="text" placeholder="" id="slpname" value="{{$household->slpname}}" />
                                    </div>

                                    <p class="col-sm-4 col-form-label">2. Food for Work</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="ffw" id="ffw">
                                            <option value="" {{$household->ffw == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->ffw == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->ffw == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="ffwname" class="form-control input-sm" type="text" placeholder="" id="ffwname" value="{{$household->ffwname}}" />
                                        <br>
                                    </div>
                                    <p class="col-sm-4 col-form-label">3. Cash for Work</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="cfw" id="cfw">
                                            <option value="" {{$household->cfw == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->cfw == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->cfw == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="cfwname" class="form-control input-sm" type="text" placeholder="" id="cfwname" value="{{$household->cfwname}}" />
                                        <br>
                                    </div>
                                    <p class="col-sm-4 col-form-label">4. Social Pension for the Indigent Senior Citizens</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="pension" id="pension">
                                            <option value="" {{$household->pension == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->pension == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->pension == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="pensionaname" class="form-control input-sm" type="text" placeholder="" id="pensionaname" value="{{$household->pensionaname}}" />
                                    </div>
                                    <p class="col-sm-4 col-form-label">5. Pantawid Pamilyang Pilipino Program
                                        (4Ps)</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="ppp" id="ppp">
                                            <option value="" {{$household->ppp == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->ppp == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->ppp == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="pppname" class="form-control input-sm" type="text" placeholder="" id="pppname" value="{{$household->pppname}}" />
                                    </div>
                                    <p class="col-sm-4 col-form-label">6. Agrarian Reform Community
                                        Development Program (ARCDP)</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="arcdp" id="arcdp">
                                            <option value="" {{$household->arcdp == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->arcdp == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->arcdp == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="arcdpname" class="form-control input-sm" type="text" placeholder="" id="arcdpname" value="{{$household->arcdpname}}" />
                                    </div>
                                    <p class="col-sm-4 col-form-label">7. Training for Work Scholarship
                                        Program (TWSP)</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="twsp" id="twsp">
                                            <option value="" {{$household->twsp == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->twsp == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->twsp == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="twspname" class="form-control input-sm" type="text" placeholder="" id="twspname" value="{{$household->twspname}}" />
                                    </div>
                                    <p class="col-sm-4 col-form-label">8. Community-Based Employment
                                        Program (CBEP)</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="cbep" id="cbep">
                                            <option value="" {{$household->cbep == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->cbep == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->cbep == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="cbepname" class="form-control input-sm" type="text" placeholder="" id="cbepname" value="{{$household->cbepname}}" />
                                    </div>
                                    <p class="col-sm-4 col-form-label">9. Other health insurance (Maxicare,
                                        Medicare, Intellicare, etc.)</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="ohi" id="ohi">
                                            <option value="" {{$household->ohi == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->ohi == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->ohi == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="ohiname" class="form-control input-sm" type="text" placeholder="" id="ohiname" value="{{$household->ohiname}}" />
                                        <input name="othi" class="form-control input-sm" type="text" placeholder="" id="othi" value="{{$household->othi}}" />
                                    </div>
                                    <p class="col-sm-4 col-form-label">10. Health assistance</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="health" id="health">
                                            <option value="" {{$household->health == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->health == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->health == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="healthname" class="form-control input-sm" type="text" placeholder="" id="healthname" value="{{$household->healthname}}" />
                                        <input name="namehealth" class="form-control input-sm" type="text" placeholder="" id="namehealth" value="{{$household->namehealth}}" />
                                        <br>
                                    </div>
                                    <p class="col-sm-4 col-form-label">11. Supplemental feeding</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="feeding" id="feeding">
                                            <option value="" {{$household->feeding == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->feeding == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->feeding == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="feedingname" class="form-control input-sm" type="text" placeholder="" id="feedingname" value="{{$household->feedingname}}" />
                                        <input name="namefeeding" class="form-control input-sm" type="text" placeholder="" id="namefeeding" value="{{$household->namefeeding}}" />
                                        <br>
                                    </div>
                                    <p class="col-sm-4 col-form-label">12. Education/scholarship program</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="scholar" id="scholar">
                                            <option value="" {{$household->scholar == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->scholar == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->scholar == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="namescholar" class="form-control input-sm" type="text" placeholder="" id="namescholar" value="{{$household->namescholar}}" />
                                        <input name="scholarname" class="form-control input-sm" type="text" placeholder="" id="scholarname" value="{{$household->scholarname}}" />
                                        <br>
                                    </div>
                                    <p class="col-sm-4 col-form-label">13. Skills or livelihood training program</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="sltrp" id="sltrp">
                                            <option value="" {{$household->sltrp == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->sltrp == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->sltrp == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="sltrpname" class="form-control input-sm" type="text" placeholder="" id="sltrpname" value="{{$household->sltrpname}}" />
                                        <input name="namesltrp" class="form-control input-sm" type="text" placeholder="" id="namesltrp" value="{{$household->namesltrp}}" />
                                        <br>
                                    </div>
                                    <p class="col-sm-4 col-form-label">14. Credit program</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="credit" id="credit">
                                            <option value="" {{$household->credit == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->credit == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->credit == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="namecredit" class="form-control input-sm" type="text" placeholder="" id="namecredit" value="{{$household->namecredit}}" />
                                        <input name="creditname" class="form-control input-sm" type="text" placeholder="" id="creditname" value="{{$household->creditname}}" />
                                        <br>
                                    </div>
                                    <p class="col-sm-4 col-form-label">15. Housing Program</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="housing" id="housing">
                                            <option value="" {{$household->housing == '' ? 'selected':'' }}>Select</option>
                                            <option value="Yes" {{$household->housing == 'Yes' ? 'selected':'' }}>Yes</option>
                                            <option value="No" {{$household->housing == 'No' ? 'selected':'' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="housingname" class="form-control input-sm" type="text" placeholder="" id="housingname" value="{{$household->housingname}}" />
                                        <input name="namehousing" class="form-control input-sm" type="text" placeholder="" id="namehousing" value="{{$household->namehousing}}" />
                                        <br>
                                    </div>
                                    <p class="col-sm-4 col-form-label">16. Other programs, specify</p>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="programname" class="form-control input-sm" type="text" placeholder="" id="programname" value="{{$household->programname}}" />
                                        <input name="nameprogram" class="form-control input-sm" type="text" placeholder="" id="nameprogram" value="{{$household->nameprogram}}" />
                                        <input name="programoname" class="form-control input-sm" type="text" placeholder="" id="programoname" value="{{$household->programoname}}" />
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group row">
                                    <p class="col-sm-4 col-form-label">184. How many household members are covered by or are members of this
                                        program?</p>
                                    <p class="col-sm-4 col-form-label">185. What is/are the name/s of the household member/s who is/are beneficiary/ies
                                        /members of the program? </p>
                                    <p class="col-sm-3 col-form-label">186. Who implemented this program?</p>
                                    <p class="col-sm-3 col-form-label"></p>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3">

                                        <input name="memo" class="form-control input-sm" type="number" placeholder="" id="memo" value="{{$household->memo}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memop" class="form-control input-sm" type="text" placeholder="" id="memop" value="{{$household->memop}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memoi" id="memoi">
                                            <option value="" {{$household->memoi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memoi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memoi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memoi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memoi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memoi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memoi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memoi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memoi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>

                                    <div class="col-sm-3">
                                        <input name="memtw" class="form-control input-sm" type="number" placeholder="" id="memtw" value="{{$household->memtw}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memtwp" class="form-control input-sm" type="text" placeholder="" id="memtwp" value="{{$household->memtwp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memtwpi" id="memtwpi">
                                            <option value="" {{$household->memtwpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memtwpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memtwpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memtwpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memtwpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memtwpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memtwpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memtwpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memtwpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memth" class="form-control input-sm" type="number" placeholder="" id="memth" value="{{$household->memth}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memthp" class="form-control input-sm" type="text" placeholder="" id="memthp" value="{{$household->memthp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memthpi" id="memthpi">
                                            <option value="" {{$household->memthpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memthpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memthpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memthpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memthpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memthpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memthpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memthpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memthpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memf" class="form-control input-sm" type="number" placeholder="" id="memf" value="{{$household->memf}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memfp" class="form-control input-sm" type="text" placeholder="" id="memfp" value="{{$household->memfp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memfpi" id="memfpi">
                                            <option value="" {{$household->memfpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memfpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memfpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memfpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memfpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memfpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memfpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memfpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memfpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memfiv" class="form-control input-sm" type="number" placeholder="" id="memfiv" value="{{$household->memfiv}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memfip" class="form-control input-sm" type="text" placeholder="" id="memfip" value="{{$household->memfip}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memfipi" id="memfipi">
                                            <option value="" {{$household->memfipi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memfipi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memfipi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memfipi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memfipi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memfipi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memfipi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memfipi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memfipi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="mems" class="form-control input-sm" type="number" placeholder="" id="mems" value="{{$household->mems}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memsp" class="form-control input-sm" type="text" placeholder="" id="memsp" value="{{$household->memsp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memspi" id="memspi">
                                            <option value="" {{$household->memspi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memspi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memspi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memspi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memspi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memspi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memspi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memspi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memspi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                        <br><br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memse" class="form-control input-sm" type="number" placeholder="" id="memse" value="{{$household->memse}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memsep" class="form-control input-sm" type="text" placeholder="" id="memsep" value="{{$household->memsep}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memsepi" id="memsepi">
                                            <option value="" {{$household->memsepi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memsepi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memsepi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memsepi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memsepi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memsepi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memsepi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memsepi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memsepi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br><br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="meme" class="form-control input-sm" type="number" placeholder="" id="meme" value="{{$household->meme}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memep" class="form-control input-sm" type="text" placeholder="" id="memep" value="{{$household->memep}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memepi" id="memepi">
                                            <option value="" {{$household->memepi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memepi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memepi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memepi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memepi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memepi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memepi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memepi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memepi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br><br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memn" class="form-control input-sm" type="number" placeholder="" id="memn" value="{{$household->memn}}" />
                                        <input name="memnt" class="form-control input-sm" type="number" placeholder="" id="memnt" value="{{$household->memnt}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memnp" class="form-control input-sm" type="text" placeholder="" id="memnp" value="{{$household->memnp}}" />
                                        <input name="memntp" class="form-control input-sm" type="text" placeholder="" id="memntp" value="{{$household->memntp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memnpi" id="memnpi">
                                            <option value="" {{$household->memnpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memnpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memnpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memnpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memnpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memnpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memnpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memnpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memnpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memntpi" id="memntpi">
                                            <option value="" {{$household->memntpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memntpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memntpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memntpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memntpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memntpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memntpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memntpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memntpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memte" class="form-control input-sm" type="number" placeholder="" id="memte" value="{{$household->memte}}" />
                                        <input name="memten" class="form-control input-sm" type="number" placeholder="" id="memten" value="{{$household->memten}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memtep" class="form-control input-sm" type="text" placeholder="" id="memtep" value="{{$household->memtep}}" />
                                        <input name="memtenp" class="form-control input-sm" type="text" placeholder="" id="memtenp" value="{{$household->memtenp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memtepi" id="memtepi">
                                            <option value="" {{$household->memtepi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memtepi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memtepi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memtepi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memtepi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memtepi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memtepi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memtepi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memtepi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memtenpi" id="memtenpi">
                                            <option value="" {{$household->memtenpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memtenpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memtenpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memtenpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memtenpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memtenpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memtenpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memtenpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memtenpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memel" class="form-control input-sm" type="number" placeholder="" id="memel" value="{{$household->memel}}" />
                                        <input name="memele" class="form-control input-sm" type="number" placeholder="" id="memele" value="{{$household->memele}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memelp" class="form-control input-sm" type="text" placeholder="" id="memelp" value="{{$household->memelp}}" />
                                        <input name="memelep" class="form-control input-sm" type="text" placeholder="" id="memelep" value="{{$household->memelep}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memelpi" id="memelpi">
                                            <option value="" {{$household->memelpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memelpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memelpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memelpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memelpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memelpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memelpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memelpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memelpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memelepi" id="memelepi">
                                            <option value="" {{$household->memelepi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memelepi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memelepi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memelepi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memelepi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memelepi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memelepi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memelepi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memelepi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memtwe" class="form-control input-sm" type="number" placeholder="" id="memtwe" value="{{$household->memtwe}}" />
                                        <input name="memtwel" class="form-control input-sm" type="number" placeholder="" id="memtwel" value="{{$household->memtwel}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memtwep" class="form-control input-sm" type="text" placeholder="" id="memtwep" value="{{$household->memtwep}}" />
                                        <input name="memtwelp" class="form-control input-sm" type="text" placeholder="" id="memtwelp" value="{{$household->memtwelp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memtwepi" id="memtwepi">
                                            <option value="" {{$household->memtwepi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memtwepi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memtwepi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memtwepi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memtwepi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memtwepi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memtwepi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memtwepi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memtwepi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memtwelpi" id="memtwelpi">
                                            <option value="" {{$household->memtwelpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memtwelpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memtwelpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memtwelpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memtwelpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memtwelpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memtwelpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memtwelpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memtwelpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memthr" class="form-control input-sm" type="number" placeholder="" id="memthr" value="{{$household->memthr}}" />
                                        <input name="memthri" class="form-control input-sm" type="number" placeholder="" id="memthri" value="{{$household->memthri}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memthrp" class="form-control input-sm" type="text" placeholder="" id="memthrp" value="{{$household->memthrp}}" />
                                        <input name="memthrip" class="form-control input-sm" type="text" placeholder="" id="memthrip" value="{{$household->memthrip}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memthrpi" id="memthrpi">
                                            <option value="" {{$household->memthrpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memthrpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memthrpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memthrpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memthrpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memthrpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memthrpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memthrpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memthrpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memthripi" id="memthripi">
                                            <option value="" {{$household->memthripi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memthripi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memthripi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memthripi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memthripi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memthripi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memthripi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memthripi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memthripi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memfou" class="form-control input-sm" type="number" placeholder="" id="memfou" value="{{$household->memfou}}" />
                                        <input name="memfour" class="form-control input-sm" type="number" placeholder="" id="memfour" value="{{$household->memfour}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memfoup" class="form-control input-sm" type="text" placeholder="" id="memfoup" value="{{$household->memfoup}}" />
                                        <input name="memfourp" class="form-control input-sm" type="text" placeholder="" id="memfourp" value="{{$household->memfourp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memfoupi" id="memfoupi">
                                            <option value="" {{$household->memfoupi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memfoupi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memfoupi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memfoupi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memfoupi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memfoupi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memfoupi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memfoupi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memfoupi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memfourpi" id="memfifpi">
                                            <option value="" {{$household->memfifpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memfifpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memfifpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memfifpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memfifpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memfifpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memfifpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memfifpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memfifpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memfi" class="form-control input-sm" type="number" placeholder="" id="memfi" value="{{$household->memfi}}" />
                                        <input name="memfif" class="form-control input-sm" type="number" placeholder="" id="memfif" value="{{$household->memfif}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memfifp" class="form-control input-sm" type="text" placeholder="" id="memfifp" value="{{$household->memfifp}}" />
                                        <input name="memfiftp" class="form-control input-sm" type="text" placeholder="" id="memfiftp" value="{{$household->memfiftp}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memfifpi" id="memfifpi">
                                            <option value="" {{$household->memfifpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memfifpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memfifpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memfifpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memfifpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memfifpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memfifpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memfifpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memfifpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memfiftpi" id="memfiftpi">
                                            <option value="" {{$household->memfiftpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memfiftpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memfiftpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memfiftpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memfiftpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memfiftpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memfiftpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memfiftpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memfiftpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <br>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="memsix" class="form-control input-sm" type="number" placeholder="" id="memsix" value="{{$household->memsix}}" />
                                        <input name="memsixt" class="form-control input-sm" type="number" placeholder="" id="memsixt" value="{{$household->memsixt}}" />
                                        <input name="memsixte" class="form-control input-sm" type="number" placeholder="" id="memsixte" value="{{$household->memsixte}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="memsixp" class="form-control input-sm" type="text" placeholder="" id="memsixp" value="{{$household->memsixp}}" />
                                        <input name="memsixtp" class="form-control input-sm" type="text" placeholder="" id="memsixtp" value="{{$household->memsixtp}}" />
                                        <input name="memsixtep" class="form-control input-sm" type="text" placeholder="" id="memsixtep" value="{{$household->memsixtep}}" />
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="memsixpi" id="memsixpi">
                                            <option value="" {{$household->memsixpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memsixpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memsixpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memsixpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memsixpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memsixpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memsixpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memsixpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memsixpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memsixtpi" id="memsixtpi">
                                            <option value="" {{$household->memsixtpi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memsixtpi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memsixtpi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memsixtpi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memsixtpi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memsixtpi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memsixtpi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memsixtpi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memsixtpi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                        <select class="form-control" name="memsixtepi" id="memsixtepi">
                                            <option value="" {{$household->memsixtepi == '' ? 'selected':'' }}>Select</option>
                                            <option value="National" {{$household->memsixtepi == 'National' ? 'selected':'' }}>National</option>
                                            <option value="Province" {{$household->memsixtepi == 'Province' ? 'selected':'' }}>Province</option>
                                            <option value="City or Municipality" {{$household->memsixtepi == 'City or Municipality' ? 'selected':'' }}>City/Municipality</option>
                                            <option value="Barangay" {{$household->memsixtepi == 'Barangay' ? 'selected':'' }}>Barangay</option>
                                            <option value="Congress or District" {{$household->memsixtepi == 'Congress or District' ? 'selected':'' }}>Congress/District</option>
                                            <option value="Private Organizations or NGO" {{$household->memsixtepi == 'Private Organizations or NGO' ? 'selected':'' }}>Private Organizations/NGOs</option>
                                            <option value="Dont know" {{$household->memsixtepi == 'Dont know' ? 'selected':'' }}>Don't know</option>
                                            <option value="Others" {{$household->memsixtepi == 'Others' ? 'selected':'' }}>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endforeach