<div class="modal  fade text-left" id="addhousehold" tabindex="-2" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Manage New Household</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('household.store') }}" method="POST">
                    @csrf
                    <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">III. Household Control Number
                                        (HCN):</p>
                                    <div class="col-sm-6">
                                        <input name="housecontrolnum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">IV. Name of Household
                                        Head:</p>
                                    <div class="col-sm-6">
                                        <input name="headname" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>

                                <h5><strong>J. WATER AND SANITATION</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">75. What is your household's main source of water supply?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="watersupply" id="watersupply">
                                            <option value="">Select</option>
                                            <option value="Own use faucet, community water system">Own use faucet, community water system (e.g. Maynilad)</option>
                                            <option value="Shared faucet, community water system">Shared faucet, community water system</option>
                                            <option value="Own use tubed/piped deep well">Own use tubed/piped deep well</option>
                                            <option value="Shared tubed/piped deep well">Shared tubed/piped deep well</option>
                                            <option value="Tubed/piped shallow ell">Tubed/piped shallow ell (e.g. Posom Artesian well, etc.)</option>
                                            <option value="Dug well">Dug well (e.g. balon)</option>
                                            <option value="Protected spring">Protected spring</option>
                                            <option value="Unprotected spring">Unprotected spring</option>
                                            <option value=">Lake, river, rain and others">Lake, river, rain and others</option>
                                            <option value="Peddler">Peddler</option>
                                            <option value="Bottled water">Bottled water (purified, distilled, mineral)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">76. How far is this water source from your house? IN METERS</p>
                                    <div class="col-sm-6">
                                        <input name="waternum" class="form-control input-sm" type="number" min="0" placeholder="" id="waternum" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">77. What type of toilet facilty does the household use?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="toilettype">
                                            <option value="">Select</option>
                                            <option value="Water-sealed, sewer septic tank, used exclusively by household">Water-sealed, sewer septic tank, used exclusively by household
                                            </option>
                                            <option value="Water-sealed, sewer septic tank , shared with other households">Water-sealed, sewer septic tank , shared with other households
                                            </option>
                                            <option value="Water-sealed, other depository, used exclusively by household">Water-sealed, other depository, used exclusively by household
                                            </option>
                                            <option value="Water-sealed, other depository, shared with other households">Water-sealed, other depository, shared with other households
                                            </option>
                                            <option value="Tubed or piped shallow well">Tubed/piped shallow well (e.g. Posom Artesian well, etc.)</option>
                                            <option value="Closed pit">Closed pit</option>
                                            <option value="Pail system">Pail system</option>
                                            <option value="None">None (bodies of wate, backyard, public spaces)</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong> K. HOUSING </strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">78. What is the tenure status of the housing unit and lot occupied by your
                                        household?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="tenure" id="tenure">
                                            <option value="">Select</option>
                                            <option value="Own or owner-like-possession of house and lot">Own or owner-like-possession of house and lot</option>
                                            <option value="Rent house/room including lot">Rent house/room including lot</option>
                                            <option value="Own house, rent lot"> Own house, rent lot</option>
                                            <option value="Own house, rent-free lot with consent of owner"> Own house, rent-free lot with consent of owner</option>
                                            <option value="Own house, rent-free lot without conset of owner"> Own house, rent-free lot without conset of owner</option>
                                            <option value="Rent-free house and lot with consent of owner"> Rent-free house and lot with consent of owner</option>
                                            <option value="Rent-free house and lot without consent of owner"> Rent-free house and lot without consent of owner</option>
                                            <option value="Living in a public space with rent"> Living in a public space with rent</option>
                                            <option value="Living in a public space without rent"> Living in a public space without rent</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">79. By your own estimate, how much is the imputed rent per month for the house
                                        and/or lot?</p>
                                    <div class="col-sm-6">
                                        <input name="rentpm" class="form-control input-sm" type="number" min="0" placeholder="" id="rentnpm" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">80. What is the household's main source of cooking fuel?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="fuel" id="disabled">
                                            <option value="">Select</option>
                                            <option value="Electricity">Electricity</option>
                                            <option value="LPG">LPG</option>
                                            <option value="Charcoal/Coal">Charcoal/Coal</option>
                                            <option value="Wood">Wood</option>
                                            <option value="Kerosene">Kerosene</option>
                                            <option value="Agricultural crops residues">Agricultural crops residues (e.g. coconut midribs, coconut shells,
                                                coconut/corn husks, rice hulls, etc.)</option>
                                            <option value="Animal dung">Animal dung</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">81. Is there any electricity in the dwelling place?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="electric" id="electric">
                                            <option value="">Select</option>

                                            <option value="Yes">Yes (GO TO 82)</option>
                                            <option value="No">No (GO TO 83)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">82. What is the source of electricity in the dwelling place?</p>
                                    <p class="col-sm-2 col-form-label">Electric Company</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="electricsrc" id="electricsrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">Generator</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="generator" id="generator" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">Solar</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="solar" id="solar" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">Battery</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="battery" id="battery" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">Others, specify</p>
                                    <div class="col-sm-3">
                                        <input name="electrico" class="form-control input-sm" type="text" placeholder="" id="electrico" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">85. Does any member of the household have access to internet?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="internet">
                                            <option value="">Select</option>
                                            <option value="1">Yes </option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">86. Do you have insurance for the following</p>
                                    <p class="col-sm-5 col-form-label">87. Who is the insurance provider </p>
                                    <p class="col-sm-3 col-form-label">House</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="house" id="house">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="houseinsurance" id="houseinsurance" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Government insurance">Government insurance</option>
                                            <option value="Private insurance company">Private insurance company</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">Motor Vehicle</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="motor" id="motor">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="motorinsurance" id="motorinsurance" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Government insurance">Government insurance</option>
                                            <option value="Private insurance company">Private insurance company</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">Appliance</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="app" id="app">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="appinsurance" id="appinsurance" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Government insurance">Government insurance</option>
                                            <option value="Private insurance company">Private insurance company</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>L. WASTE MANAGEMENT</strong></h5>
                                <p class="col-sm-6 col-form-label">88. What is the system of garbage disposal adopted by the household?</p>
                                <div class="form-group row">
                                    <p class="col-sm-3 col-form-label">1 Garbage collection</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="gcollection" id="gcollection">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">2 Burning</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="burn" id="burn">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">3 Composting</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="compost" id="compost">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">4 Recycling</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="recycle" id="recycle">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">5 Waste segregation</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="waste" id="waste">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">6 Pit with cover</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="pitw" id="pitw">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">7 Pit without cover</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="pitwo" id="pitwo">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">8 Throwing of garbage in river</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="throwing" id="throwing">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">9 Others</p>
                                    <div class="col-sm-3">
                                        <input name="gothers" class="form-control input-sm" type="text" placeholder="" id="gothers" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">89. Who collects the garbage?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="gcollect" id="gcollect" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Municipality or city collector">Municipality/city collector</option>
                                            <option value="Barangay collector">Barangay collector</option>
                                            <option value="Private collector">Private collector</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">90. How often is the garbage collected?</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="gnum" id="gnum" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Once a week">Once a week</option>
                                            <option value="Twice a week">Twice a week</option>
                                            <option value="Thrice a week">Thrice a week</option>
                                            <option value="Daily">Daily</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">83. Do you own any of the following?</p>
                                    <p class="col-sm-5 col-form-label">84. How many were purchased in the past 3 years? </p>
                                    <p class="col-sm-3 col-form-label">1. Land (Agricultural, in parcels)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="landagri" id="landagri">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="landagrinum" class="form-control input-sm" type="number" min="0" placeholder="" id="landagrinum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Land (Residential, in parcels)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="landres" id="landres">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="landresnum" class="form-control input-sm" type="number" min="0" placeholder="" id="landresnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">3. Land (Commercial, in parcels)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="landcom" id="landcom">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="landcomnum" class="form-control input-sm" type="number" min="0" placeholder="" id="landcomnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">4. Car, jeep, van</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="car" id="car">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="carnum" class="form-control input-sm" type="number" min="0" id="carnum" disabled="disabled" placeholder="" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">5. Tricycle, motorcycle, e-bike</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tricycle" id="tricycle">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="trciyclenum" class="form-control input-sm" type="number" min="0" id="trciyclenum" disabled="disabled" placeholder="" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">6. Bicycle</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="bicycle" id="bicycle">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="bicyclenum" class="form-control input-sm" type="number" min="0" id="bicyclenum" disabled="disabled" placeholder="" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">7. Pedicab</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="pedi" id="pedi">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="pedinum" class="form-control input-sm" type="number" min="0" id="pedinum" disabled="disabled" placeholder="" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">8. Television</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tv" id="tv">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="tvnum" class="form-control input-sm" type="number" min="0" id="tvnum" placeholder="" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">9. Radio/Radio casette</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="cassette" id="casette">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="casettenum" class="form-control input-sm" type="number" id="casettenum" disabled="disabled" min="0" placeholder="" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">10. CD/VCD/DVD Player</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="dvd" id="dvd">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="dvdnum" class="form-control input-sm" type="number" min="0" placeholder="" id="dvdnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">11. Component/Stereo/ Karaoke/Videoke</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="karaoke" id="karaoke">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="karaokenum" class="form-control input-sm" type="number" min="0" placeholder="" id="karaokenum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">12. Cellphone</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="cell" id="cell">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="cellnum" class="form-control input-sm" type="number" min="0" placeholder="" id="cellnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">13. Landline telephone</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tel" id="tel">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="telnum" class="form-control input-sm" type="number" min="0" placeholder="" id="telnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">14. Computer/Laptop/Netbook</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="comp" id="comp">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="compnum" class="form-control input-sm" type="number" min="0" placeholder="" id="compnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">15. Electric fan</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="fan" id="fan">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fannum" class="form-control input-sm" type="number" min="0" placeholder="" id="fannum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">16. Airconditioner/air cooler</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="aircon" id="aircon">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="airconum" class="form-control input-sm" type="number" min="0" placeholder="" id="airconum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">17. Electric iron/steamer</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="iron" id="iron">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="ironnum" class="form-control input-sm" type="number" min="0" placeholder="" id="ironnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">18. Washing Machine</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="washing" id="washing">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="washingnum" class="form-control input-sm" type="number" min="0" placeholder="" id="washingnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">19. Refrigerator/Freezer</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="ref" id="ref">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="refnum" class="form-control input-sm" type="number" min="0" placeholder="" id="refnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">20. LPG gas stove/electric stove/range</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="stove" id="stove">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="stovenum" class="form-control input-sm" type="number" min="0" placeholder="" id="stovenum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">21. Rice cooker</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="rice" id="rice">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="ricenum" class="form-control input-sm" type="number" min="0" placeholder="" id="ricenum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">22. Microwave oven</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="oven" id="oven">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="ovennum" class="form-control input-sm" type="number" min="0" placeholder="" id="ovennum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">23. Toaster/Toaster oven</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="toaster" id="toaster">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="toasternum" class="form-control input-sm" type="number" min="0" placeholder="" id="toasternum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">24. Electric water dispenser</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="dispenser" id="dispenser">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="dispensernum" class="form-control input-sm" type="number" min="0" placeholder="" id="dispensernum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">25. Sala/Sofa set</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="sala" id="sala">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="salanum" class="form-control input-sm" type="number" min="0" placeholder="" id="salanum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">26. Sleeping mats (banig)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="mats" id="mats">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="matsnum" class="form-control input-sm" type="number" min="0" placeholder="" id="matsnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">27. Frame without mattress (papag, folding bed)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="folding" id="folding">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="foldingnum" class="form-control input-sm" type="number" min="0" placeholder="" id="foldingnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">28. Mattress (kutson, sofa bed)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="sofa" id="sofa">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="sofanum" class="form-control input-sm" type="number" min="0" placeholder="" id="sofanum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">29. Others, specify</p>
                                    <div class="col-sm-3">
                                        <input name="othersname" class="form-control input-sm" type="text" placeholder="" id="others" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="othersnum" class="form-control input-sm" type="number" min="0" placeholder="" id="othersnum" />
                                    </div>

                                </div>

                                <hr style="height:2px;border-width:0;color:black;background-color:black" />



                            </div>
                        </div>
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
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">92. LIVESTOCK AND POULTRY RAISING .</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestock" id="livestock">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">93. FISHING </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishing" id="fishing">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">94. FORESTRY AND HUNTING
                                    </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="forestry" id="forestry">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">95. WHOLESALE AND RETAIL</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="wholesale" id="wholesale">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">96. MANUFACTURING</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="manufacturing" id="manufacturing">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">97. COMMUNITY, SOCIAL, RECREATIONAL, & PERSONAL SERVICES etc.</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="community" id="community">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">98. STORAGE AND COMMUNICATION SERVICES</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="storage" id="storage">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">99. MINING AND QUARRYING </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="mining" id="mining">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">100.CONSTRUCTION </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="construct" id="construct">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">101. ACTIVITIES NOT ELSEWHERE CLASSIFIED </p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="elsewhere" id="elsewhere">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
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
                                        harvested or livestock and poultry raised by other households</p>
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
                                        <input name="cropcash" class="form-control input-sm" type="number" min="0" placeholder="" id="cropcash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">91B</p>
                                    <div class="col-sm-3">
                                        <input name="cropkind" class="form-control input-sm" type="number" min="0" placeholder="" id="cropkind" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">92A</p>
                                    <div class="col-sm-4">
                                        <input name="livecash" class="form-control input-sm" type="number" min="0" placeholder="" id="livecash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">92B</p>
                                    <div class="col-sm-3">
                                        <input name="livekind" class="form-control input-sm" type="number" min="0" placeholder="" id="livekind" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">93A</p>
                                    <div class="col-sm-4">
                                        <input name="fishcash" class="form-control input-sm" type="number" min="0" placeholder="" id="fishcash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">93B</p>
                                    <div class="col-sm-3">
                                        <input name="fishkind" class="form-control input-sm" type="number" min="0" placeholder="" id="fishkind" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">94A</p>
                                    <div class="col-sm-4">
                                        <input name="forestcash" class="form-control input-sm" type="number" min="0" placeholder="" id="forestcash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">94B</p>
                                    <div class="col-sm-3">
                                        <input name="forestkind" class="form-control input-sm" type="number" min="0" placeholder="" id="forestkind" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">95A</p>
                                    <div class="col-sm-4">
                                        <input name="wholesalecash" class="form-control input-sm" type="number" min="0" placeholder="" id="wholesalecash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">95B</p>
                                    <div class="col-sm-3">
                                        <input name="wholesalekind" class="form-control input-sm" type="number" min="0" placeholder="" id="wholesalekind" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">96A</p>
                                    <div class="col-sm-4">
                                        <input name="manucash" class="form-control input-sm" type="number" min="0" placeholder="" id="manucash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">96B</p>
                                    <div class="col-sm-3">
                                        <input name="manukind" class="form-control input-sm" type="number" min="0" placeholder="" id="manukind" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">97A</p>
                                    <div class="col-sm-4">
                                        <input name="servcash" class="form-control input-sm" type="number" min="0" placeholder="" id="servcash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">97B</p>
                                    <div class="col-sm-3">
                                        <input name="servkind" class="form-control input-sm" type="number" min="0" placeholder="" id="servkind" disabled="disabled" />
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">98A</p>
                                    <div class="col-sm-4">
                                        <input name="transpocash" class="form-control input-sm" type="number" min="0" placeholder="" id="transpocash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">98B</p>
                                    <div class="col-sm-3">
                                        <input name="transpokind" class="form-control input-sm" type="number" min="0" placeholder="" id="transpokind" disabled="disabled" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">99A</p>
                                    <div class="col-sm-4">
                                        <input name="miningcash" class="form-control input-sm" type="number" min="0" placeholder="" id="miningcash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">99B</p>
                                    <div class="col-sm-3">
                                        <input name="miningkind" class="form-control input-sm" type="number" min="0" placeholder="" id="miningkind" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">100A</p>
                                    <div class="col-sm-4">
                                        <input name="constcash" class="form-control input-sm" type="number" min="0" placeholder="" id="constcash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">100B</p>
                                    <div class="col-sm-3">
                                        <input name="constkind" class="form-control input-sm" type="number" min="0" placeholder="" id="constkind" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">101A</p>
                                    <div class="col-sm-4">
                                        <input name="actcash" class="form-control input-sm" type="number" min="0" placeholder="" id="actcash" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">101B</p>
                                    <div class="col-sm-3">
                                        <input name="actkind" class="form-control input-sm" type="number" min="0" placeholder="" id="actkind" disabled="disabled" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">102A</p>
                                    <div class="col-sm-4">
                                        <input name="totalnetincomecash" class="form-control input-sm" type="number" min="0" placeholder="" id="totalnetincomecash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">102B</p>
                                    <div class="col-sm-3">
                                        <input name="totalneticomekind" class="form-control input-sm" type="number" min="0" placeholder="" id="totalnetincomekind" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">103A</p>
                                    <div class="col-sm-4">
                                        <input name="totalsalarykind" class="form-control input-sm" type="number" min="0" placeholder="" id="totalsalarycash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">103B</p>
                                    <div class="col-sm-3">
                                        <input name="totalsalarycash" class="form-control input-sm" type="number" min="0" placeholder="" id="totalsalarykind" />
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">104A</p>
                                    <div class="col-sm-4">
                                        <input name="ofwcash" class="form-control input-sm" type="number" min="0" placeholder="" id="ofwcash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">104B</p>
                                    <div class="col-sm-3">
                                        <input name="ofwkind" class="form-control input-sm" type="number" min="0" placeholder="" id="ofwkind" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">105A</p>
                                    <div class="col-sm-4">
                                        <input name="abroadcash" class="form-control input-sm" type="number" min="0" placeholder="" id="abroadcash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">105B</p>
                                    <div class="col-sm-3">
                                        <input name="abroadkind" class="form-control input-sm" type="number" min="0" placeholder="" id="abroadkind" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">106A</p>
                                    <div class="col-sm-4">
                                        <input name="domesticcash" class="form-control input-sm" type="number" min="0" placeholder="" id="domesticcash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">106B</p>
                                    <div class="col-sm-3">
                                        <input name="domestickind" class="form-control input-sm" type="number" min="0" placeholder="" id="domestickind" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">107A</p>
                                    <div class="col-sm-4">
                                        <input name="pensioncash" class="form-control input-sm" type="number" min="0" placeholder="" id="pensioncash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">107B</p>
                                    <div class="col-sm-3">
                                        <input name="pensionkind" class="form-control input-sm" type="number" min="0" placeholder="" id="pensionkind" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">108A</p>
                                    <div class="col-sm-4">
                                        <input name="netsharecash" class="form-control input-sm" type="number" min="0" placeholder="" id="netsharecash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">108B</p>
                                    <div class="col-sm-3">
                                        <input name="netsharekind" class="form-control input-sm" type="number" min="0" placeholder="" id="netsharekind" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">109A</p>
                                    <div class="col-sm-4">
                                        <input name="rentalscash" class="form-control input-sm" type="number" min="0" placeholder="" id="rentalkscash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">109B</p>
                                    <div class="col-sm-3">
                                        <input name="rentalskind" class="form-control input-sm" type="number" min="0" placeholder="" id="rentalskind" />
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">110A</p>
                                    <div class="col-sm-4">
                                        <input name="interestcash" class="form-control input-sm" type="number" min="0" placeholder="" id="interestcash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">110B</p>
                                    <div class="col-sm-3">
                                        <input name="interestkind" class="form-control input-sm" type="number" min="0" placeholder="" id="interestkind" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">111A</p>
                                    <div class="col-sm-4">
                                        <input name="investcash" class="form-control input-sm" type="number" min="0" placeholder="" id="investcash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">111B</p>
                                    <div class="col-sm-3">
                                        <input name="investkind" class="form-control input-sm" type="number" min="0" placeholder="" id="investkind" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">112A</p>
                                    <div class="col-sm-4">
                                        <input name="sourcecash" class="form-control input-sm" type="number" min="0" placeholder="" id="sourcecash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">112B</p>
                                    <div class="col-sm-3">
                                        <input name="sourcekind" class="form-control input-sm" type="number" min="0" placeholder="" id="sourcekind" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">113A</p>
                                    <div class="col-sm-4">
                                        <input name="totalgrosscash" class="form-control input-sm" type="number" min="0" placeholder="" id="totalgrosscash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">113B</p>
                                    <div class="col-sm-3">
                                        <input name="totalgrosskind" class="form-control input-sm" type="number" min="0" placeholder="" id="totalgrosskind" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">114B</p>
                                    <div class="col-sm-4">
                                        <input name="totalimputed" class="form-control input-sm" type="number" min="0" placeholder="" id="totalimputed" />
                                    </div>
                                    <div class="col-sm-3">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">115A</p>
                                    <div class="col-sm-4">
                                        <input name="totalcash" class="form-control input-sm" type="number" min="0" placeholder="" id="totalcash" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">115B</p>
                                    <div class="col-sm-3">
                                        <input name="totalkind" class="form-control input-sm" type="number" min="0" placeholder="" id="totalkind" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-2 col-form-label">116</p>
                                    <div class="col-sm-4">
                                        <input name="totalincome" class="form-control input-sm" type="number" min="0" placeholder="" id="totalincome" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="height:2px;border-width:0;color:black;background-color:black" />
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>N. AGRICULTURE-LIVESTOCK AND/OR POULTRY RAISING</strong></h5>

                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">117. What is the tenure status of the agriculture land being tilled by the
                                        household?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="tenurestatus" id="tenurestatus">
                                            <option value="">Select</option>
                                            <option value="Fully-owned">Fully-owned</option>
                                            <option value="Owner-like possession">Owner-like possession</option>
                                            <option value="Tenanted or Coal">Tenanted/Coal</option>
                                            <option value="Leased or Rented">Leased/Rented</option>
                                            <option value="Rent Free">Rent Free</option>
                                            <option value="Held under Certificate of Land Transfer or Certificate of
                                                Land Ownership Award">Held under Certificate of Land Transfer (CLT) or Certificate of
                                                Land Ownership Award (CLOA)</option>
                                            <option value="Held under Certificate of Ancestral Domain Title or Certificate of
                                                Ancestral Land Title">Held under Certificate of Ancestral Domain Title/Certificate of
                                                Ancestral Land Title (CADT/CALT)</option>
                                            <option value="Held under Community-Based Forest Management Agreement or Stewardship">Held under Community-Based Forest Management Agreement (CBFMA)/
                                                Stewardship</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <p class="col-sm-6 col-form-label">118. What is the area of the agricultural land? (in hectares)</p>
                                    <div class="col-sm-5">
                                        <input name="agrilandnum" class="form-control input-sm" type="number" min="0" placeholder="" id="agrilandnum" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">119. During the past 12 months, what temporary and permanent crops did your
                                        household harvest?</p>
                                    <p class="col-sm-5 col-form-label">120. During the past 12 months how much did you harvest (in kilograms)? </p>
                                    <div class="col-sm-6">
                                        <input name="tempcrops" class="form-control input-sm" type="text" placeholder="" id="tempcrops" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="tempcropskilo" class="form-control input-sm" type="number" min="0" id="tempcropskilo" placeholder="" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="permacrops" class="form-control input-sm" type="text" placeholder="" id="permacrops" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="permaccropskilo" class="form-control input-sm" type="number" min="0" id="permaccropskilo" disabled="disabled" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="tcrops" class="form-control input-sm" type="text" placeholder="" id="tcrops" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="tcropskilo" class="form-control input-sm" type="number" min="0" id="tcropskilo" disabled="disabled" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="pcrops" class="form-control input-sm" type="text" placeholder="" id="pcrops" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="pcropskilo" class="form-control input-sm" type="number" min="0" id="pcropskilo" placeholder="" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="hcrops" class="form-control input-sm" type="text" placeholder="" id="hcrops" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="hcropskilo" class="form-control input-sm" type="number" min="0" id="hcropskilo" placeholder="" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">121. How many of each of the following agricultural equipment/facilities does the
                                        household use?</p>
                                    <p class="col-sm-6 col-form-label">122. How many agricultural equipment/facilities does the household own? </p>
                                    <p class="col-sm-3 col-form-label">Beast of burden</p>
                                    <div class="col-sm-3">
                                        <input name="beastnum" class="form-control input-sm" type="number" min="0" placeholder="" id="beastnum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="beastown" class="form-control input-sm" type="number" min="0" placeholder="" id="beastown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Plow</p>
                                    <div class="col-sm-3">
                                        <input name="plownum" class="form-control input-sm" type="number" min="0" placeholder="" id="plownum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="plowown" class="form-control input-sm" type="number" min="0" placeholder="" id="plowown" disabled="disabled" />
                                    </div>

                                    <p class="col-sm-3 col-form-label">Harrow</p>
                                    <div class="col-sm-3">
                                        <input name="harrownum" class="form-control input-sm" type="number" min="0" placeholder="" id="harrownum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="harrowown" class="form-control input-sm" type="number" min="0" placeholder="" id="harrowown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Mower</p>
                                    <div class="col-sm-3">
                                        <input name="mowernum" class="form-control input-sm" type="number" min="0" placeholder="" id="mowernum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="mowerown" class="form-control input-sm" type="number" min="0" placeholder="" id="mowerown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Thresher/Corn sheller</p>
                                    <div class="col-sm-3">
                                        <input name="cornnum" class="form-control input-sm" type="number" min="0" placeholder="" id="cornnum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="cornown" class="form-control input-sm" type="number" min="0" placeholder="" id="cornown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Insecticide/Pesticide sprayer</p>
                                    <div class="col-sm-3">
                                        <input name="spraynum" class="form-control input-sm" type="number" min="0" placeholder="" id="spraynum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="sprayown" class="form-control input-sm" type="number" min="0" placeholder="" id="sprayown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Farm Tractor</p>
                                    <div class="col-sm-3">
                                        <input name="tractornum" class="form-control input-sm" type="number" min="0" placeholder="" id="tractornum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="tractorown" class="form-control input-sm" type="number" min="0" placeholder="" id="tractorown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Hand tractor</p>
                                    <div class="col-sm-3">
                                        <input name="htractornum" class="form-control input-sm" type="number" min="0" placeholder="" id="htractornum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="htractorown" class="form-control input-sm" type="number" min="0" placeholder="" id="htractorown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Turtle/Mudboat</p>
                                    <div class="col-sm-3">
                                        <input name="turtlenum" class="form-control input-sm" type="number" min="0" placeholder="" id="turtlenum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="turtleown" class="form-control input-sm" type="number" min="0" placeholder="" id="turtleown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Planter/Transplanter/Dryer</p>
                                    <div class="col-sm-3">
                                        <input name="planternum" class="form-control input-sm" type="number" min="0" placeholder="" id="planternum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="planterown" class="form-control input-sm" type="number" min="0" placeholder="" id="planterown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label"> Mechanical dryer</p>
                                    <div class="col-sm-3">
                                        <input name="dryernum" class="form-control input-sm" type="number" min="0" placeholder="" id="dryernum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="dryeown" class="form-control input-sm" type="number" min="0" placeholder="" id="dryeown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Multipurpose drying pavement</p>
                                    <div class="col-sm-3">
                                        <input name="mdrynum" class="form-control input-sm" type="number" min="0" placeholder="" id="mdrynum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="mdryown" class="form-control input-sm" type="number" min="0" placeholder="" id="mdryown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Rice/corn/feed mill</p>
                                    <div class="col-sm-3">
                                        <input name="millnum" class="form-control input-sm" type="number" min="0" placeholder="" id="millnum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="millown" class="form-control input-sm" type="number" min="0" placeholder="" id="millown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Harvester, any crop</p>
                                    <div class="col-sm-3">
                                        <input name="harvesternum" class="form-control input-sm" type="number" min="0" placeholder="" id="harvesternum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="harvesterown" class="form-control input-sm" type="number" min="0" placeholder="" id="harvesterown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Warehouse granary</p>
                                    <div class="col-sm-3">
                                        <input name="granarynum" class="form-control input-sm" type="number" min="0" placeholder="" id="granarynum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="granaryown" class="form-control input-sm" type="number" min="0" placeholder="" id="granaryown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Farmshed</p>
                                    <div class="col-sm-3">
                                        <input name="shednum" class="form-control input-sm" type="number" min="0" placeholder="" id="shednum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="shedown" class="form-control input-sm" type="number" min="0" placeholder="" id="shedown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Irrigation pump</p>
                                    <div class="col-sm-3">
                                        <input name="pumpnum" class="form-control input-sm" type="number" min="0" placeholder="" id="pumpnum" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="pumpown" class="form-control input-sm" type="number" min="0" placeholder="" id="pumpown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">Others, specify</p>
                                    <div class="col-sm-3">
                                        <input name="agriequip" class="form-control input-sm" type="text" placeholder="" id="agriequip" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="agriequipnum" class="form-control input-sm" type="number" min="0" id="agriequipnum" placeholder="" disabled="disabled" />
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
                                        <select class="form-control" name="animals" id="animals" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Hog/Swine">Hog/Swine</option>
                                            <option value="Goat">Goat</option>
                                            <option value="Carabao">Carabao</option>
                                            <option value="Cattle">Cattle</option>
                                            <option value="Chicken">Chicken</option>
                                            <option value="Duck">Duck</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="animalssold" class="form-control input-sm" type="number" min="0" placeholder="" id="animalssold" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="animalsconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="animalsconsume" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">Meat (weight in kilograms)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="meat" id="meat" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Hog/Swine">Hog/Swine</option>
                                            <option value="Goat">Goat</option>
                                            <option value="Carabao">Carabao</option>
                                            <option value="Cattle">Cattle</option>
                                            <option value="Chicken">Chicken</option>
                                            <option value="Duck">Duck</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="meatsold" class="form-control input-sm" type="number" min="0" placeholder="" id="meatsold" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="meatconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="meatconsume" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">Milk (in liters)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="milk" id="milk" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Hog/Swine">Hog/Swine</option>
                                            <option value="Goat">Goat</option>
                                            <option value="Carabao">Carabao</option>
                                            <option value="Cattle">Cattle</option>
                                            <option value="Chicken">Chicken</option>
                                            <option value="Duck">Duck</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="milksold" class="form-control input-sm" type="number" min="0" placeholder="" id="milksold" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="milkconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="milkconsume" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">Eggs (number)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="eggs" id="eggs" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Hog/Swine">Hog/Swine</option>
                                            <option value="Goat">Goat</option>
                                            <option value="Carabao">Carabao</option>
                                            <option value="Cattle">Cattle</option>
                                            <option value="Chicken">Chicken</option>
                                            <option value="Duck">Duck</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="eggsold" class="form-control input-sm" type="number" min="0" placeholder="" id="eggsold" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="eggconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="eggconsume" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-2 col-form-label">Others</p>
                                    <div class="col-sm-3">
                                        <input name="otherlivestock" class="form-control input-sm" type="text" placeholder="" id="otherlivestock" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="otherlivestocksold" class="form-control input-sm" type="number" min="0" placeholder="" id="otherlivestocksold" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="otherlivestockconsume" class="form-control input-sm" type="number" min="0" placeholder="" id="otherlivestockconsume" disabled="disabled" />
                                    </div>

                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">137. What is the primary reason for the decrease in total harvest?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="harvestpr" id="harvestpr" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Increase in cost of inputs">Increase in cost of inputs such as fertilizer, pesticide, etc.
                                            </option>
                                            <option value="Affected by drought">Affected by drought</option>
                                            <option value="Affected by typhoon">Affected by typhoon</option>
                                            <option value="Affected by flood">Affected by flood</option>
                                            <option value="Affected by pests">Affected by pests</option>
                                            <option value="Decrease in supply of water from the irrigation system">Decrease in supply of water from the irrigation system</option>
                                            <option value="Decrease in land area">Decrease in land area</option>
                                            <option value="Change in primary occupation of member">Change in primary occupation of member</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">138. During the past 3 years , did you do the following in the last planting
                                        season?</p>
                                    <p class="col-sm-5 col-form-label">139. Reasons</p>
                                    <p class="col-sm-3 col-form-label">1. Change the variety of the same crop</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="samecrop" id="samecrop" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="samecropr" id="samecropr" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="The inputs to the former crop are more expensive">The inputs to the former crop are more expensive</option>
                                            <option value="The present crop is more resistant to pests and diseases">The present crop is more resistant to pests and diseases</option>
                                            <option value="The present crop does not require much water">The present crop does not require much water</option>
                                            <option value="The present crop enables the member to earn more profit">The present crop enables the member to earn more profit</option>
                                            <option value="The seedling of the former crop is no longer available">The seedling of the former crop is no longer available</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Change major crop</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="difcrop" id="difcrop" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="difcropr" id="difcropr" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="The inputs to the former crop are more expensive">The inputs to the former crop are more expensive</option>
                                            <option value="The present crop is more resistant to pests and diseases">The present crop is more resistant to pests and diseases</option>
                                            <option value="The present crop does not require much water">The present crop does not require much water</option>
                                            <option value="The present crop enables the member to earn more profit">The present crop enables the member to earn more profit</option>
                                            <option value="The seedling of the former crop is no longer available">The seedling of the former crop is no longer available</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">140. Do you have an insurance for the following:</p>
                                    <p class="col-sm-5 col-form-label">141. Who is the insurance provider?</p>
                                    <p class="col-sm-3 col-form-label">1. Crops</p></br>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="cropi" id="cropi" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="cropiprov" id="cropiprov" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Philippine Crop Insurance Corporation">Philippine Crop Insurance Corporation</option>
                                            <option value="Private Insurance Company">Private Insurance Company</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Agricultural equipment/ facilities</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="agrif" id="agrif" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="agrifprov" id="agrifprov" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Philippine Crop Insurance Corporation">Philippine Crop Insurance Corporation</option>
                                            <option value="Private Insurance Company">Private Insurance Company</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>


                                </div>

                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h5><strong>P. AGRICULTURE-FISHING</strong></h5>

                                <div class="form-group row">


                                    <p class="col-sm-12 col-form-label">125. Is the household engaged in the following?</p>
                                    <p class="col-sm-5 col-form-label">1. Catching /gathering fishes, crabs, shrimps, etc.</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="catching" id="catching" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>

                                    <p class="col-sm-5 col-form-label">2. Culturing fish, seaweeds, etc.</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="culturing" id="culturing" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">126. Where did household/s member/s fish in the past 12 months?</p>

                                    <div class="col-sm-6">
                                        <select class="form-control" name="fishloc" id="fishloc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Marine waters">Marine waters</option>
                                            <option value="Inland waters">Inland waters</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">127. How many of each of the following types of boat/vessels does the household
                                        use in fishing activities? (Number)</p>
                                    <p class="col-sm-5 col-form-label">128. How many boat/vessels does the household own? (Number)</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-3 col-form-label">1. Boat with engine and outrigger</p>
                                    <div class="col-sm-3">
                                        <input name="boatone" class="form-control input-sm" type="number" min="0" placeholder="" id="boatone" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boatoneown" class="form-control input-sm" type="number" min="0" placeholder="" id="boatoneown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Boat with engine but without outrigger</p>
                                    <div class="col-sm-3">
                                        <input name="boattwo" class="form-control input-sm" type="number" min="0" placeholder="" id="boattwo" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boattwoown" class="form-control input-sm" type="number" min="0" placeholder="" id="boattwoown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">3. Boat without engine but with outrigger</p>
                                    <div class="col-sm-3">
                                        <input name="boatthree" class="form-control input-sm" type="number" min="0" placeholder="" id="boatthree" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boathreeown" class="form-control input-sm" type="number" min="0" placeholder="" id="boathreeown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">4. Boat without engine and outrigger</p>
                                    <div class="col-sm-3">
                                        <input name="boatfour" class="form-control input-sm" type="number" min="0" placeholder="" id="boatfour" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boatfourown" class="form-control input-sm" type="number" min="0" placeholder="" id="boatfourown" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">5. Raft</p>
                                    <div class="col-sm-3">
                                        <input name="boatfive" class="form-control input-sm" type="number" min="0" placeholder="" id="boatfive" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="boatfiveown" class="form-control input-sm" type="number" min="0" placeholder="" id="boatfiveown" disabled="disabled" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">129. What kind of gears/accessories/devices was/were used?</p>
                                    <p class="col-sm-5 col-form-label">130. How many does the household own? </p>
                                    <div class="col-sm-6">
                                        <input name="gearone" class="form-control input-sm" type="text" placeholder="" id="gearone" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="gearoneown" class="form-control input-sm" type="number" min="0" placeholder="" id="gearoneown" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="geartwo" class="form-control input-sm" type="text" placeholder="" id="geartwo" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="geartwoown" class="form-control input-sm" type="number" min="0" placeholder="" id="geartwoown" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="gearthree" class="form-control input-sm" type="text" placeholder="" id="gearthree" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="gearthreeown" class="form-control input-sm" type="number" min="0" placeholder="" id="gearthreeown" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="gearfour" class="form-control input-sm" type="text" placeholder="" id="gearfour" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="gearfourown" class="form-control input-sm" type="number" min="0" placeholder="" id="gearfourown" disabled="disabled" />
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <p class="col-sm-12 col-form-label">131. What type of aquafarm did the household operate?</p>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">1. Fishpond</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="pond" id="pond" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">2. Fish pen</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishp" id="fishp" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">3. Fish cage</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishc" id="fishc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">4. Seaweed farm</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="seaweed" id="seaweed" disabled="disabled">

                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">5. Oyster farm</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="oyster" id="oyster" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">6. Mussel farm</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="mussel" id="mussel" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">7. Fish tank</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fisht" id="fisht" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">8. Hatchery</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="hatchery" id="hatchery" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">9. Other, specify</p>
                                    <div class="col-sm-5">
                                        <input name="aquaot" class="form-control input-sm" type="text" placeholder="" id="aquaot" disabled="disabled" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">132. For the past 12 month, what were the fishes or aquatic animals cultured or
                                        caught by your household?</p>
                                    <p class="col-sm-5 col-form-label">133. How much wass the volume of fish harvested/caught in the past 12 months? (in
                                        kilograms)</p>
                                    <div class="col-sm-6">
                                        <input name="fishone" class="form-control input-sm" type="text" placeholder="" id="fishone" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishoneown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishoneown" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="fishtwo" class="form-control input-sm" type="text" placeholder="" id="fishtwo" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishtwoown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishtwoown" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="fishthree" class="form-control input-sm" type="text" placeholder="" id="fishthree" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishthreeown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishthreeown" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="fishfour" class="form-control input-sm" type="text" placeholder="" id="fishfour" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishfourown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishfourown" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="fishfive" class="form-control input-sm" type="text" placeholder="" id="fishfive" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="fishfiveown" class="form-control input-sm" type="number" min="0" placeholder="" id="fishfiveown" disabled="disabled" />
                                    </div>
                                </div>
                                <br><br>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong> Q. CLIMATE CHANGE AND DISASTER RISK MANAGEMENT</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">134. How many years has the household been living in the barangay?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livingnum" id="livingnum">
                                            <option value="">Select</option>
                                            <option value="3 years and above">3 years and above (GO TO 135)</option>
                                            <option value="Not more than 3 years">Not more than 3 years (GO TO 167)</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong> Q.1. CROP FARMING</strong></h5>


                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">135. How many years has the household been engaged in crop farming?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="harvestyrs" id="harvestyrs" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="3 years and above">3 years and above (GO TO 136)</option>
                                            <option value="No more than 3 years">No more than 3 years (GO TO 142)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">136. Compared with 3 years ago, did your harvest___?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="harvestr" id="harvestr" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Decrease">Decrease (GO TO 137)</option>
                                            <option value="Remain the same">Remain the same (GO TO 138)</option>
                                            <option value="Increase">Increase (GO TO 138)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="height:2px;border-width:0;color:black;background-color:black" />
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>Q.2. LIVESTOCK AND POULTRY</strong></h5>
                                <div class="form-group row">

                                    <p class="col-sm-6 col-form-label">142. How many years has the household been engaged in livestock and poultry
                                        raising?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestocknum" id="livestocknum" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="3 years and above">3 years and above (GO TO 143)</option>
                                            <option value="Not more than 3 years">Not more than 3 years (GO TO 145)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">143. Compared with 3 years ago, did the number of your livestock and poultry
                                        ___?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestockc" id="livestockc" disabled="disabled">
                                            <option value="Decrease">Decrease (GO TO 144)</option>
                                            <option value="Remain the same">Remain the same (GO TO 145)</option>
                                            <option value="Increase">Increase (GO TO 145)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">144. What is the primary reason for the decrease in number of livestock and
                                        poultry?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestockr" id="livestockr" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Increase in cost of farm inputs">Increase in cost of farm inputs (feeds, chicks, etc.)</option>
                                            <option value="Stricken with diseases">Stricken with diseases (swine flu, bird flu, foot and mouth
                                                disease, etc.)</option>
                                            <option value="Decrease in land holding">Decrease in land holding</option>
                                            <option value="Affected by typhoon">Affected by typhoon</option>
                                            <option value="Affected by flood">Affected by flood</option>
                                            <option value="Affected by extreme hot weather condition">Affected by extreme hot weather condition</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">145. Do you have livestock and poultry insurance?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestocki" id="livestocki" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 146)</option>
                                            <option value="No">No (GO TO 147)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">146. Who is the insurance provider?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="livestockip" id="livestockip" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Philippine Crop Insurance Corporation">Philippine Crop Insurance Corporation</option>
                                            <option value="Private Insurance Company">Private Insurance Company</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.3. FISHING</strong></h5>
                                <div class="form-group row">

                                    <p class="col-sm-6 col-form-label">147. How many years has the household been engaged in fishing?
                                        </small>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishyrs" id="fishyrs" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="3 years and above">3 years and above (GO TO 148)</option>
                                            <option value="Not more than 3 years">Not more than 3 years (GO TO 152)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">148. Compared with 3 years ago, did your fish catch?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishyrsc" id="fishysrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Decrease">Decrease (GO TO 149)</option>
                                            <option value="Remain the same">Remain the same (GO TO 150)</option>
                                            <option value="Increase">Increase (GO TO 150)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">149. What is the primary reason for the decrease in fish catch?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishr" id="fishr" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Decrease in fishing area due to government restrictions">Decrease in fishing area due to government restrictions</option>
                                            <option value="Decrease in fishing area due to competition">Decrease in fishing area due to competition</option>
                                            <option value="Decrease in fishes">Decrease in fishes</option>
                                            <option value="Occurrence of coral bleaching">Occurrence of coral bleaching</option>
                                            <option value="Occurrence of fishkill">Occurrence of fishkill</option>
                                            <option value="Occurrence of oil spill and other kinds of pollution">Occurrence of oil spill and other kinds of pollution</option>
                                            <option value=">Less frequent fishing because of increase in fuel prices and other
                                                expenses">Less frequent fishing because of increase in fuel prices and other
                                                expenses</option>
                                            <option value="Frequent occurrence of typhoons">Frequent occurrence of typhoons</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">150. Do you have fisheries insurance?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fishi" id="fishi" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 151)</option>
                                            <option value="No">No (GO TO 152)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">151. Who is the insurance provider?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="fiship" id="fiship" disabled="disabled">
                                            <option value="">Select</option>

                                            <option value="Philippine Crop Insurance Corporation">Philippine Crop Insurance Corporation</option>
                                            <option value="Private Insurance Company">Private Insurance Company</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Others">Others</option>
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
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
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
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.6. SEA LEVEL</strong></h5>
                                <div class="form-group row">

                                    <p class="col-sm-6 col-form-label">154. Compared with 3 years ago, did the sea level ___ in your area?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="sealevel" id="sealevel">
                                            <option value="">Select</option>
                                            <option value="Decrease">Decrease</option>
                                            <option value="Remain the same">Remain the same</option>
                                            <option value="Increase">Increase</option>
                                            <option value="Don't know">Don't know</option>
                                            <option value="Not applicable">Not applicable</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.7. WATER SUPPLY</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">155. Compared with 3 years ago, did the water supply ___ in your area?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="water" id="water">
                                            <option value="">Select</option>
                                            <option value="Decrease">Decrease (GO TO 156)</option>
                                            <option value="Remain">Remain the same (GO TO 157)</option>
                                            <option value="Increase">Increase (GO TO 157)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">156. What is the primary reason for the decrease in water supply?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="waterr" id="waterr">
                                            <option value="">Select</option>
                                            <option value="Drought">Drought</option>
                                            <option value="Broken faucet or pump">Broken faucet/pump</option>
                                            <option value="Lower water level in the dam">Lower water level in the dam</option>
                                            <option value="Less frequent delivery of tanker truck or peddler">Less frequent delivery of tanker truck/peddler</option>
                                            <option value="Increase in number of consumers">Increase in number of consumers</option>
                                            <option value="Others">Others</option>
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
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 158)</option>
                                            <option value="No">No (GO TO 160)</option>
                                            <option value="Did not experience flood">Did not experience flood (GO TO 160)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">158. Three years ago, how long did it usually take for the flood to subside?
                                        (Specify the number of hours)</p>
                                    <div class="col-sm-5">
                                        <input name="floodhrs" class="form-control input-sm" type="number" min="0" placeholder="" id="floodhrs" disabled="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">159. During the past 12 months, how long did it usually take for the flood to
                                        subside (Specify the number of hours)?</p>
                                    <div class="col-sm-5">
                                        <input name="floodmnths" class="form-control input-sm" type="number" min="0" placeholder="" id="floodmths" disabled="disabled" />
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.9. DROUGHT</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">160. Compared with 3 years ago, does drought occur more often in your area
                                        now?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="drought" id="drought">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 161)</option>
                                            <option value="No">No (GO TO 162)</option>
                                            <option value="Did not experience drought">Did not experience drought (GO TO 162)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">161. In the past 3 years, how long did the last drought occur IN MONTHS?</p>
                                    <div class="col-sm-5">
                                        <input name="droughtnum" class="form-control input-sm" type="number" min="0" placeholder="" id="droughtnum" disabled="disabled" />
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>Q.10. EVACUATION</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">162. During the past 3 years, did you move out/leave permanently from your
                                        previous dwelling unit?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="moveout" id="moveout">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 163)</option>
                                            <option value="No">No (GO TO 164)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">163. What was your primary reason for moving out/evacuating from your previous
                                        dwelling unit?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="moveoutr" id="moveoutr" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Typhoon">Typhoon</option>
                                            <option value="Flood">Flood</option>
                                            <option value="Drought">Drought</option>
                                            <option value="Earthquake">Earthquake</option>
                                            <option value="Volcanic eruption">Volcanic eruption</option>
                                            <option value="Landslide or mudslide">Landslide or mudslide</option>
                                            <option value="Tsunami">Tsunami</option>
                                            <option value="Fire">Fire</option>
                                            <option value="Forest fire">Forest fire</option>
                                            <option value="Armed conflict">Armed conflict</option>
                                            <option value="Infrastructure development project">Infrastructure development project</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">164. During the past 3 years, did you temporarily evacuate your house because of
                                        any calamity?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="evacuate" id="evacuate" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 165)</option>
                                            <option value="No">No (GO TO 167)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">165. During your last temporary evacuation, where did you stay?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="evacuateloc" id="evacauteloc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="School">School</option>
                                            <option value="Church">Church</option>
                                            <option value="Covered court or gym">Covered court/gym</option>
                                            <option value="Relatives house">Relative's house</option>
                                            <option value="Neighbor or friends house">Neighbor or friend's house</option>
                                            <option value="Barangay or City hall">Barangay/City hall</option>
                                            <option value="Multi-purpose hall">Multi-purpose hall</option>
                                            <option value="Designated evacuation center">Designated evacuation center</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">166. How long did you stay in the evacuation area? (in days)</p>
                                    <div class="col-sm-5">
                                        <input name="evacuatenum" class="form-control input-sm" type="number" min="0" placeholder="" id="evacuatenum" disabled="disabled" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
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
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="typhoonnum" class="form-control input-sm" type="number" id="typhoonnum" disabled="disabled" placeholder="" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="typhoona" id="typhoona" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="typhoonsrc" id="typhoonsrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">2. Flood</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="flood" id="flood">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="floodnum" class="form-control input-sm" type="number" id="floodnum" disabled="disabled" placeholder="" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="flooda" id="flooda" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="floodsrc" id="floodsrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">3. Drought</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="drough" id="drough">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="droughnum" class="form-control input-sm" type="number" placeholder="" id="droughnum" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="droughta" id="droughta" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="droughtsrc" id="droughsrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">4. Earthquake</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="quake" id="quake">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="quakenum" class="form-control input-sm" type="number" placeholder="" id="quakenum" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="quakea" id="quakea" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="quakesrc" id="quakesrc" disabled="quakesrc">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">5 Volcanic Eruption</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="erupt" id="erupt">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="eruptnum" class="form-control input-sm" type="number" id="eruptnum" disabled="disabled" placeholder="" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="erupta" id="erupta" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="eruptsrc" id="eruptsrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">6 Ladnslide/mudslide</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="landslide" id="landslide">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="landslidenum" class="form-control input-sm" type="number" placeholder="" id="landslidenum" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="landslinea" id="landslinea" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="landslinesrc" id="landslinesrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">7. Tsunami</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="tsunami" id="tsunami">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="tsunaminum" class="form-control input-sm" type="number" placeholder="" id="tsunaminum" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="tsunamia" id="tsunamia" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="tsunamisrc" id="tsunamisrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">8. Fire</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="fire" id="fire">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="firenum" class="form-control input-sm" type="number" placeholder="" id="firenum" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="firea" id="firea" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="firesrc" id="firesrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">9. Forest Fire</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="forest" id="forest">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="forestnum" class="form-control input-sm" type="number" placeholder="" id="forestnum" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="foresta" id="foresta" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="forestsrc" id="forestsrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">10. Armed conflicts</p>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="conflict" id="conflict">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="conflictnum" class="form-control input-sm" type="number" placeholder="" id="conflictnum" disabled="disabled" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="conflicta" id="conflicta" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="conflictsrc" id="conflictsrc" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <p class="col-sm-2 col-form-label">11. Others, specify</p>
                                    <div class="col-sm-2">
                                        <input name="osname" class="form-control input-sm" type="text" placeholder="" id="osname" />
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="osnum" class="form-control input-sm" type="number" placeholder="" id="osnum" />
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="osa" id="osa">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="osasrc" id="osasrc">
                                            <option value="">Select</option>
                                            <option value="National government">National government</option>
                                            <option value="Local governmen">Local government</option>
                                            <option value="Non-government organization3">Non-government organization</option>
                                            <option value="International organization">International organization</option>
                                            <option value="Relatives">Relatives</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <h5><strong>Q.12. DISASTER PREPAREDNESS</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">171. Do you have a disaster preparedness kit?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="disasterprepaidnesskit" id="disasterprepaidnesskit">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 172)</option>
                                            <option value="No">No (GO TO 174)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">172. Do you have the following in your disaster preparedness kit?</p>
                                    <p class="col-sm-5 col-form-label">173. How many days will it last?</p>
                                    <p class="col-sm-3 col-form-label">1. Water</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="watery" id="watery" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="waterynum" class="form-control input-sm" type="number" min="0" placeholder="" id="waternum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">2. Food (canned goods, biscuits, bread)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="food" id="food" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="foodnum" class="form-control input-sm" type="number" min="0" placeholder="" id="foodnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">3. Matches/Lighter</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="match" id="match" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="matchnum" class="form-control input-sm" type="number" min="0" placeholder="" id="matchnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">4. Flashlight/Emergency light</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="light" id="light" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="lightnum" class="form-control input-sm" type="number" min="0" placeholder="" id="lightnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">5. Radio/ Transistor (battery-operated)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="radio" id="radio" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="radionum" class="form-control input-sm" type="number" min="0" placeholder="" id="radionum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">6. Candle</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="candle" id="candle" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="candlenum" class="form-control input-sm" type="number" min="0" placeholder="" id="candlenum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">7. Medical kit</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="kit" id="kit" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="kitnum" class="form-control input-sm" type="number" min="0" placeholder="" id="kitnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">8. Whistle</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="whistle" id="whistle" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="whistlenum" class="form-control input-sm" type="number" min="0" placeholder="" id="whistlenum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">9. Clothes</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="clothe" id="clothe" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="clothenum" class="form-control input-sm" type="number" min="0" placeholder="" id="clothenum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">10. Blanket</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="blanket" id="blanket" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="blanketnum" class="form-control input-sm" type="number" min="0" placeholder="" id="blanketnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">11. Battery (cellphone, flashlight, radio)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="batt" id="batt" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="battnum" class="form-control input-sm" type="number" min="0" placeholder="" id="battnum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">12. Important documents (land title, valid ID, birth certificate, etc.)</p>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="docu" id="docu" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="docunum" class="form-control input-sm" type="number" min="0" placeholder="" id="docunum" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">13. Others, specify</p>
                                    <div class="col-sm-3">
                                        <input name="othr" class="form-control input-sm" type="text" min="0" placeholder="" id="othr" />
                                    </div>
                                    <div class="col-sm-5">
                                        <input name="othrnum" class="form-control input-sm" type="number" min="0" placeholder="" id="othrnum" />
                                    </div>

                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>R. HUNGER</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">174. In the last 3 months, did it happen even once that your household
                                        experienced hunger and did not have anything to eat?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="hungerhappen" id="hungerhappen">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 175)</option>
                                            <option value="No">No (GO TO 177)</option>
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
                                        <input name="nhunger" class="form-control input-sm" type="text" placeholder="" id="nhunger" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="mhunger" class="form-control input-sm" type="number" placeholder="" id="mhunger" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">b. Second Month</p>
                                    <div class="col-sm-4">
                                        <input name="nhungers" class="form-control input-sm" type="text" placeholder="" id="nhungers" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="mhungers" class="form-control input-sm" type="number" placeholder="" id="mhungers" disabled="disabled" />
                                    </div>
                                    <p class="col-sm-3 col-form-label">c. Third Month</p>
                                    <div class="col-sm-4">
                                        <input name="nhungert" class="form-control input-sm" type="text" placeholder="" id="nhungert" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="mhungert" class="form-control input-sm" type="number" placeholder="" id="mhungert" disabled="disabled" />
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>S. DEATH</strong></h5>
                                <div class="form-group row">
                                    <p class="col-sm-6 col-form-label">177. Were there any household members who died in the past 12 months?</p>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="deathhousehold" id="deathhousehold">
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (GO TO 178)</option>
                                            <option value="No">No (GO TO 182) </option>
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
                                        <input name="deatho" class="form-control input-sm" type="text" placeholder="" id="deatho" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-2">

                                        <select class="form-control" name="deathosex" id="deathosex" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deathotime" class="form-control input-sm" type="time" placeholder="" id="deathotime" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-3">

                                        <select class="form-control" name="deathocause" id="deathocause" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Diseases of the heart">Diseases of the heart (e.g. heart attack)</option>
                                            <option value="Diseases of the vascular system">Diseases of the vascular system (e.g. stroke)</option>
                                            <option value=">Malignant neoplasms">Malignant neoplasms (e.g. cancer)</option>
                                            <option value="Pneumonia">Pneumonia</option>
                                            <option value=">Road or Vehicular accidents">Road/Vehicular accidents</option>
                                            <option value="Other accidents">Other accidents</option>
                                            <option value="Tuberculosis">Tuberculosis</option>
                                            <option value="Chronic lower respiratory diseases">Chronic lower respiratory diseases (e.g. COPD, bronchitis, asthma)
                                            </option>
                                            <option value="Diabetes mellitus">Diabetes mellitus</option>
                                            <option value="Nephritis, nephrotic syndrome and nephrosis">Nephritis, nephrotic syndrome and nephrosis (e.g inflammation of
                                                kidney)</option>
                                            <option value="Certain conditions originating in the perinatal period">Certain conditions originating in the perinatal period</option>
                                            <option value="Drowned from flood or storm surges or tsunami">Drowned from flood/storm surges/tsunami</option>
                                            <option value="Victim of landslide">Victim of landslide</option>
                                            <option value="Electrocuted during typhoon or storm surge">Electrocuted during typhoon or storm surge</option>
                                            <option value="Murder">Murder</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deatht" class="form-control input-sm" type="text" placeholder="" id="deatht" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-2">

                                        <select class="form-control" name="deathtsex" id="deathtsex" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deathttime" class="form-control input-sm" type="time" placeholder="" id="deathttime" disabled="deathttime" />
                                    </div>
                                    <div class="col-sm-3">

                                        <select class="form-control" name="deathtcause" id="deathtcause" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Diseases of the heart">Diseases of the heart (e.g. heart attack)</option>
                                            <option value="Diseases of the vascular system">Diseases of the vascular system (e.g. stroke)</option>
                                            <option value=">Malignant neoplasms">Malignant neoplasms (e.g. cancer)</option>
                                            <option value="Pneumonia">Pneumonia</option>
                                            <option value=">Road or Vehicular accidents">Road/Vehicular accidents</option>
                                            <option value="Other accidents">Other accidents</option>
                                            <option value="Tuberculosis">Tuberculosis</option>
                                            <option value="Chronic lower respiratory diseases">Chronic lower respiratory diseases (e.g. COPD, bronchitis, asthma)
                                            </option>
                                            <option value="Diabetes mellitus">Diabetes mellitus</option>
                                            <option value="Nephritis, nephrotic syndrome and nephrosis">Nephritis, nephrotic syndrome and nephrosis (e.g inflammation of
                                                kidney)</option>
                                            <option value="Certain conditions originating in the perinatal period">Certain conditions originating in the perinatal period</option>
                                            <option value="Drowned from flood or storm surges or tsunami">Drowned from flood/storm surges/tsunami</option>
                                            <option value="Victim of landslide">Victim of landslide</option>
                                            <option value="Electrocuted during typhoon or storm surge">Electrocuted during typhoon or storm surge</option>
                                            <option value="Murder">Murder</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deathth" class="form-control input-sm" type="text" placeholder="" id="deathth" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-2">

                                        <select class="form-control" name="deaththsex" id="deaththsex" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input name="deaththtime" class="form-control input-sm" type="time" placeholder="" id="deaththtime" disabled="disabled" />
                                    </div>
                                    <div class="col-sm-3">

                                        <select class="form-control" name="deatthcause" id="deaththcause" disabled="disabled">
                                            <option value="">Select</option>
                                            <option value="Diseases of the heart">Diseases of the heart (e.g. heart attack)</option>
                                            <option value="Diseases of the vascular system">Diseases of the vascular system (e.g. stroke)</option>
                                            <option value=">Malignant neoplasms">Malignant neoplasms (e.g. cancer)</option>
                                            <option value="Pneumonia">Pneumonia</option>
                                            <option value=">Road or Vehicular accidents">Road/Vehicular accidents</option>
                                            <option value="Other accidents">Other accidents</option>
                                            <option value="Tuberculosis">Tuberculosis</option>
                                            <option value="Chronic lower respiratory diseases">Chronic lower respiratory diseases (e.g. COPD, bronchitis, asthma)
                                            </option>
                                            <option value="Diabetes mellitus">Diabetes mellitus</option>
                                            <option value="Nephritis, nephrotic syndrome and nephrosis">Nephritis, nephrotic syndrome and nephrosis (e.g inflammation of
                                                kidney)</option>
                                            <option value="Certain conditions originating in the perinatal period">Certain conditions originating in the perinatal period</option>
                                            <option value="Drowned from flood or storm surges or tsunami">Drowned from flood/storm surges/tsunami</option>
                                            <option value="Victim of landslide">Victim of landslide</option>
                                            <option value="Electrocuted during typhoon or storm surge">Electrocuted during typhoon or storm surge</option>
                                            <option value="Murder">Murder</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <hr style="height:2px;border-width:0;color:black;background-color:black" />
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
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="slpname" class="form-control input-sm" type="text" placeholder="" id="slpname" disabled="disabled" />
                                        </div>

                                        <p class="col-sm-4 col-form-label">2. Food for Work</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="ffw" id="ffw">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="ffwname" class="form-control input-sm" type="text" placeholder="" id="ffwname" disabled="disabled" />
                                            <br>
                                        </div>
                                        <p class="col-sm-4 col-form-label">3. Cash for Work</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="cfw" id="cfw">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="cfwname" class="form-control input-sm" type="text" placeholder="" id="cfwname" disabled="disabled" />
                                            <br>
                                        </div>
                                        <p class="col-sm-4 col-form-label">4. Social Pension for the Indigent Senior Citizens</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="pension" id="pension">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="pensionaname" class="form-control input-sm" type="text" placeholder="" id="pensionaname" disabled="disabled" />
                                        </div>
                                        <p class="col-sm-4 col-form-label">5. Pantawid Pamilyang Pilipino Program
                                            (4Ps)</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="ppp" id="ppp">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="pppname" class="form-control input-sm" type="text" placeholder="" id="pppname" disabled="disabled" />
                                        </div>
                                        <p class="col-sm-4 col-form-label">6. Agrarian Reform Community
                                            Development Program (ARCDP)</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="arcdp" id="arcdp">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="arcdpname" class="form-control input-sm" type="text" placeholder="" id="arcdpname" disabled="disabled" />
                                        </div>
                                        <p class="col-sm-4 col-form-label">7. Training for Work Scholarship
                                            Program (TWSP)</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="twsp" id="twsp">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="twspname" class="form-control input-sm" type="text" placeholder="" id="twspnamee" disabled="disabled" />
                                        </div>
                                        <p class="col-sm-4 col-form-label">8. Community-Based Employment
                                            Program (CBEP)</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="cbep" id="cbep">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="cbepname" class="form-control input-sm" type="text" placeholder="" id="cbepname" disabled="disabled" />
                                        </div>
                                        <p class="col-sm-4 col-form-label">9. Other health insurance (Maxicare,
                                            Medicare, Intellicare, etc.)</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="ohi" id="ohi">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="ohiname" class="form-control input-sm" type="text" placeholder="" id="ohiname" disabled="disabled" />
                                            <input name="othi" class="form-control input-sm" type="text" placeholder="" id="othi" disabled="disabled" />
                                        </div>
                                        <p class="col-sm-4 col-form-label">10. Health assistance</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="health" id="health">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="healthname" class="form-control input-sm" type="text" placeholder="" id="healthname" disabled="disabled" />
                                            <input name="namehealth" class="form-control input-sm" type="text" placeholder="" id="namehealth" disabled="disabled" />
                                            <br>
                                        </div>
                                        <p class="col-sm-4 col-form-label">11. Supplemental feeding</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="feeding" id="feeding">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="feedingname" class="form-control input-sm" type="text" placeholder="" id="feedingname" disabled="disabled" />
                                            <input name="namefeeding" class="form-control input-sm" type="text" placeholder="" id="namefeeding" disabled="disabled" />
                                            <br>
                                        </div>
                                        <p class="col-sm-4 col-form-label">12. Education/scholarship program</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="scholar" id="scholar">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="namescholar" class="form-control input-sm" type="text" placeholder="" id="namescholar" disabled="disabled" />
                                            <input name="scholarname" class="form-control input-sm" type="text" placeholder="" id="scholarname" disabled="disabled" />
                                            <br>
                                        </div>
                                        <p class="col-sm-4 col-form-label">13. Skills or livelihood training program</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="sltrp" id="sltrp">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="sltrpname" class="form-control input-sm" type="text" placeholder="" id="sltrpname" disabled="disabled" />
                                            <input name="namesltrp" class="form-control input-sm" type="text" placeholder="" id="namesltrp" disabled="disabled" />
                                            <br>
                                        </div>
                                        <p class="col-sm-4 col-form-label">14. Credit program</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="credit" id="credit">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="namecredit" class="form-control input-sm" type="text" placeholder="" id="namecredit" disabled="disabled" />
                                            <input name="creditname" class="form-control input-sm" type="text" placeholder="" id="creditname" disabled="disabled" />
                                            <br>
                                        </div>
                                        <p class="col-sm-4 col-form-label">15. Housing Program</p>
                                        <div class="col-sm-2">
                                            <select class="form-control" name="housing" id="housing">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="housingname" class="form-control input-sm" type="text" placeholder="" id="housingname" disabled="disabled" />
                                            <input name="namehousing" class="form-control input-sm" type="text" placeholder="" id="namehousing" disabled="disabled" />
                                            <br>
                                        </div>
                                        <p class="col-sm-4 col-form-label">16. Other programs, specify</p>
                                        <div class="col-sm-2">

                                        </div>
                                        <div class="col-sm-5">
                                            <input name="programname" class="form-control input-sm" type="text" placeholder="" id="programname" />
                                            <input name="nameprogram" class="form-control input-sm" type="text" placeholder="" id="nameprogram" />
                                            <input name="programoname" class="form-control input-sm" type="text" placeholder="" id="programoname" />
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

                                            <input name="memo" class="form-control input-sm" type="number" placeholder="" id="memo" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memop" class="form-control input-sm" type="text" placeholder="" id="memop" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memoi" id="memoi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>

                                        <div class="col-sm-3">
                                            <input name="memtw" class="form-control input-sm" type="number" placeholder="" id="memtw" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memtwp" class="form-control input-sm" type="text" placeholder="" id="memtwp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memtwpi" id="memtwpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memth" class="form-control input-sm" type="number" placeholder="" id="memth" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memthp" class="form-control input-sm" type="text" placeholder="" id="memthp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memthpi" id="memthpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memf" class="form-control input-sm" type="number" placeholder="" id="memf" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memfp" class="form-control input-sm" type="text" placeholder="" id="memfp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memfpi" id="memfpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memfiv" class="form-control input-sm" type="number" placeholder="" id="memfiv" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memfip" class="form-control input-sm" type="text" placeholder="" id="memfip" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memfipi" id="memfipi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="mems" class="form-control input-sm" type="number" placeholder="" id="mems" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memsp" class="form-control input-sm" type="text" placeholder="" id="memsp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memspi" id="memspi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                            <br><br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memse" class="form-control input-sm" type="number" placeholder="" id="memse" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memsep" class="form-control input-sm" type="text" placeholder="" id="memsep" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memsepi" id="memsepi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br><br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="meme" class="form-control input-sm" type="number" placeholder="" id="meme" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memep" class="form-control input-sm" type="text" placeholder="" id="memep" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memepi" id="memepi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br><br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memn" class="form-control input-sm" type="number" placeholder="" id="memn" disabled="disabled" />
                                            <input name="memnt" class="form-control input-sm" type="number" placeholder="" id="memnt" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memnp" class="form-control input-sm" type="text" placeholder="" id="memnp" disabled="disabled" />
                                            <input name="memntp" class="form-control input-sm" type="text" placeholder="" id="memntp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memnpi" id="memnpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memntpi" id="memntpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memte" class="form-control input-sm" type="number" placeholder="" id="memte" disabled="disabled" />
                                            <input name="memten" class="form-control input-sm" type="number" placeholder="" id="memten" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memtep" class="form-control input-sm" type="text" placeholder="" id="memtep" disabled="disabled" />
                                            <input name="memtenp" class="form-control input-sm" type="text" placeholder="" id="memtenp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memtepi" id="memtepi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memtenpi" id="memtenpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memel" class="form-control input-sm" type="number" placeholder="" id="memel" disabled="disabled" />
                                            <input name="memele" class="form-control input-sm" type="number" placeholder="" id="memele" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memelp" class="form-control input-sm" type="text" placeholder="" id="memelp" disabled="disabled" />
                                            <input name="memelep" class="form-control input-sm" type="text" placeholder="" id="memelep" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memelpi" id="memelpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memelepi" id="memelepi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memtwe" class="form-control input-sm" type="number" placeholder="" id="memtwe" disabled="disabled" />
                                            <input name="memtwel" class="form-control input-sm" type="number" placeholder="" id="memtwel" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memtwep" class="form-control input-sm" type="text" placeholder="" id="memtwep" disabled="disabled" />
                                            <input name="memtwelp" class="form-control input-sm" type="text" placeholder="" id="memtwelp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memtwepi" id="memtwepi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memtwelpi" id="memtwelpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memthr" class="form-control input-sm" type="number" placeholder="" id="memthr" disabled="disabled" />
                                            <input name="memthri" class="form-control input-sm" type="number" placeholder="" id="memthri" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memthrp" class="form-control input-sm" type="text" placeholder="" id="memthrp" disabled="disabled" />
                                            <input name="memthrip" class="form-control input-sm" type="text" placeholder="" id="memthrip" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memthrpi" id="memthrpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memthripi" id="memthripi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memfou" class="form-control input-sm" type="number" placeholder="" id="memfou" disabled="disabled" />
                                            <input name="memfour" class="form-control input-sm" type="number" placeholder="" id="memfour" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memfoup" class="form-control input-sm" type="text" placeholder="" id="memfoup" disabled="disabled" />
                                            <input name="memfourp" class="form-control input-sm" type="text" placeholder="" id="memfourp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memfoupi" id="memfoupi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memfourpi" id="memfourpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memfi" class="form-control input-sm" type="number" placeholder="" id="memfi" disabled="disabled" />
                                            <input name="memfif" class="form-control input-sm" type="number" placeholder="" id="memfif" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memfifp" class="form-control input-sm" type="text" placeholder="" id="memfifp" disabled="disabled" />
                                            <input name="memfiftp" class="form-control input-sm" type="text" placeholder="" id="memfiftp" disabled="disabled" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memfifpi" id="memfifpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memfiftpi" id="memfiftpi" disabled="disabled">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="memsix" class="form-control input-sm" type="number" placeholder="" id="memsix" />
                                            <input name="memsixt" class="form-control input-sm" type="number" placeholder="" id="memsixt" />
                                            <input name="memsixte" class="form-control input-sm" type="number" placeholder="" id="memsixte" />
                                            </select>
                                        </div>
                                        <div class="col-sm-5">
                                            <input name="memsixp" class="form-control input-sm" type="text" placeholder="" id="memsixp" />
                                            <input name="memsixtp" class="form-control input-sm" type="text" placeholder="" id="memsixtp" />
                                            <input name="memsixtep" class="form-control input-sm" type="text" placeholder="" id="memsixtep" />
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="memsixpi" id="memsixpi">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memsixtpi" id="memsixtpi">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <select class="form-control" name="memsixtepi" id="memsixtepi">
                                                <option value="">Select</option>
                                                <option value="National">National</option>
                                                <option value="Province">Province</option>
                                                <option value="City or Municipality">City/Municipality</option>
                                                <option value="Barangay">Barangay</option>
                                                <option value="Congress or District">Congress/District</option>
                                                <option value="Private Organizations or NGO">Private Organizations/NGOs</option>
                                                <option value="Dont know">Don't know</option>
                                                <option value="Others">Others</option>
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
