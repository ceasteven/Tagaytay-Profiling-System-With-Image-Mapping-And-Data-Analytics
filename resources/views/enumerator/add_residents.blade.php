<div class="modal fade" id="addnew" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Manage New Resident</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="{{ route('residents.store') }}" method="POST">
                    @csrf
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
                                        <input name="zone" class="form-control input-sm" min="0" type="text" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">d. Barangay:</p>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="barangay" required>
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
                                            <option value="Mendez Crossing East">Mendez Crossing East
                                            </option>
                                            <option value="Mendez Crossing West">Mendez Crossing West
                                            </option>
                                            <option value="Neogant">Neogan</option>
                                            <option value="Patutong Malaki North">Patutong Malaki North
                                            </option>
                                            <option value="Patutong Malaki South">Patutong Malaki South
                                            </option>
                                            <option value="Sambong">Sambong</option>
                                            <option value="San Jose">San Jose</option>
                                            <option value="Silang Crossing East">Silang Crossing East
                                            </option>
                                            <option value="Silang Crossing West">Silang Crossing West
                                            </option>
                                            <option value="Sungay East">Sungay East</option>
                                            <option value="Sungay West">Sungay West</option>
                                            <option value="Tolentino East">Tolentino East</option>
                                            <option value="Tolentino West">Tolentino West</option>
                                            <option value="Zambal">Zambal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">e. Purok/Sitio:</p>
                                    <div class="col-sm-6">
                                        <input name="purok" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">f. Street:</p>
                                    <div class="col-sm-6">
                                        <input name="street" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">g. House/Building Number:</p>
                                    <div class="col-sm-6">
                                        <input name="housenum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <p class="col-sm-5 col-form-label">h. Unit Number:</p>
                                    <div class="col-sm-6">
                                        <input name="unitnum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">III. Household Control Number
                                        (HCN):</label>
                                    <div class="col-sm-6">
                                        <input name="housecontrolnum" class="form-control input-sm" min="0" max="99999999999999" type="number" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">IV. Name of Household
                                        Head:</label>
                                    <div class="col-sm-6">
                                        <input name="headname" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">V. Name of Respondent:</label>
                                    <div class="col-sm-6">
                                        <input name="respondentname" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">VI. Start Date of
                                        Interview:</label>
                                    <div class="col-sm-6">
                                        <input name="startdate" class="form-control input-sm" type="date" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">VII. Time Started:</label>
                                    <div class="col-sm-6">
                                        <input name="timestart" class="form-control input-sm" type="time" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">VIII. Name of Enumerator:</label>
                                    <div class="col-sm-6">
                                        <input name="enumname" class="form-control input-sm" type="name" placeholder="" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="height:2px;border-width:0;color:black;background-color:black" />
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong>B. HOUSING AND HOUSEHOLD CHARACTERISTICS</strong></h5><br>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">1. In what type of building does the
                                        household reside?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="housetype" required>
                                            <option value="">Select Building Type</option>
                                            <option value="Single house">Single house</option>
                                            <option value="Duplex">Duplex</option>
                                            <option value="Multi-unit residential">Multi-unit residential</option>
                                            <option value="Commercial Industrial Agricultural building house">Commercial / Industrial / Agricultural building/house </option>
                                            <option value="Institutional living quarters">Institutional living quarters </option>
                                            <option value="Other housing unit">Other housing unit </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">2. How many bedrooms does this
                                        housing unit have?</label>
                                    <div class="col-sm-6">
                                        <input name="bedroomnum" class="form-control input-sm" min="0" type="number" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">3. How many storeys does this housing
                                        unit have?</label>
                                    <div class="col-sm-6">
                                        <input name="storeysnum" class="form-control input-sm" min="0" type="number" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">4. What type of construction
                                        materials are the roof made of?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="rooftype" required>
                                            <option value="">Select Roof Type</option>
                                            <option value="Strong materials">Strong materials (e.g. galvanized iron, aluminum, tile,
                                                concrete, brick, stone, asbestos)</option>
                                            <option value="Light materials">Light materials (e.g. cogon, nipa, anahaw)
                                            </option>
                                            <option value="Salvaged or makeshift materials">Salvaged/makeshift materials (e.g. tarpaulin,
                                                tent) </option>
                                            <option value="Mixed but predominantly strong materials">Mixed but predominantly strong materials</option>
                                            <option value="Mixed but premoninantly light materials">Mixed but premoninantly light materials </option>
                                            <option value="Mixed but predominantly salvaged materials">Mixed but predominantly salvaged materials
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
                                        <select class="form-control" name="walltype" required>
                                            <option value="">Select Wall Type</option>
                                            <option value="Strong materials">Strong materials(e.g. galvanized iron, aluminum, tile,
                                                concrete, brick, stone, asbestos)</option>
                                            <option value="Light Materials">Light Materials (e.g. bamboo, sawali, cogon, nipa, anahaw)
                                            </option>
                                            <option value="Salvaged or makeshift materials">Salvaged/makeshift materials (e.g. tarpaulin,
                                                tent) </option>
                                            <option value="Mixed but predominantly strong materials">Mixed but predominantly strong materials</option>
                                            <option value="Mixed but premoninantly light materials">Mixed but premoninantly light materials</option>
                                            <option value="Mixed but predominantly salvaged materials">Mixed but predominantly salvaged materials
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">6. What type of construction
                                        materials are the floors made of?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="floortype" required>
                                            <option value="">Select Floor Type</option>
                                            <option value="Marble">Marble</option>
                                            <option value="Ceramic tiles">Ceramic tiles </option>
                                            <option value="Cement">Cement</option>
                                            <option value="Vinyl and linoleum">Vinyl, linoleum</option>
                                            <option value="Parquet, polished wood">Parquet, polished wood</option>
                                            <option value="Palm or Bamboo">Palm/Bamboo</option>
                                            <option value="Wood planks">Wood planks</option>
                                            <option value="Natural floor">Natural floor (earth, sand, dung)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">7. How many nuclear families are
                                        there in the household?</label>
                                    <div class="col-sm-6">
                                        <input name="nucfam" class="form-control input-sm" min="0" type="number" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">8. How many members are there in the
                                        household, including OFWs?</label>
                                    <div class="col-sm-6">
                                        <input name="housemembernum" class="form-control input-sm" min="0" type="number" placeholder="" required />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr style="height:2px;border-width:0;color:black;background-color:black" />
                        <div class="row">
                            <div class="col-md-6">
                                <h5><strong> C. DEMOGRAPHY</strong></h5>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">9. Who is the head of household?</label>
                                    <div class="col-sm-6">
                                        <input name="householdhead" class="form-control input-sm" min="0" type="text" placeholder="Surname, First Name Middle Name" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">9. Who are the other of members of the household</label>

                                    <div class="col-sm-6"><input name="householdmembername" class="form-control input-sm" min="0" type="text" placeholder="Surname, First Name Middle Name" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">10. What is the ___'s relationship to head of the household?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="reltohead" onchange='checkvalue(this.value)' required>
                                            <option value="">Select Relationship</option>
                                            <option value="Head">Head</option>
                                            <option value="Spouse">Spouse</option>
                                            <option value="Son">Son</option>
                                            <option value="Daughter">Daughter</option>
                                            <option value="Son-in-law">Son-in-law</option>
                                            <option value="Daughter-in-law">Daughter-in-law</option>
                                            <option value="Grandson">Grandson</option>
                                            <option value="Granddaughter">Granddaughter</option>
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Other relatives">Other relatives</option>
                                            <option value="Housemaid">Housemaid</option>
                                            <option value="Houseboy">Houseboy</option>
                                            <option value="Step-son">Step-son</option>
                                            <option value="Step-daughter">Step-daughter</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">11. In which nuclear family does ____ belong?</label>
                                    <div class="col-sm-6">
                                        <input name="nucfambelong" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">12. Is ___ male or female?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">13. When is ___'s date of birth</label>
                                    <div class="col-sm-6">
                                        <input name="birthdate" class="form-control input-sm" type="date" placeholder="" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">14. Was ___'s birth registered with the civil registry office?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="birthregistered" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <small>(For 10 years old and above)</small>
                                <div class="form-group row">

                                    <label class="col-sm-5 col-form-label">15. What is ___'s marital status (civil status)? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="civilstatus" required>
                                            <option value="">Select</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced or Separated">Divorced/Separated</option>
                                            <option value="Common-law or Live-in">Common-law/Live-in</option>
                                            <option value="Uknown">Uknown</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">16. What is ___'s ethnicity by blood?</label>
                                    <div class="col-sm-6">
                                        <input name="ethnicity" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">17. What is religious affilation?</label>
                                    <div class="col-sm-6">
                                        <input name="religiousaffiliation" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>
                                <small>(For 10 years old and above)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">18. Is ___ an overseas worker?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="ofw" id="ofw" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes (Go to 19)</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <small>(For 10 years old and above)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">19. Where is ___'s country of destination? </label>
                                    <div class="col-sm-6">
                                        <input name="ofwcountry" class="form-control input-sm" type="text" placeholder="" id="ofwcountry" disabled="disabled" required />
                                    </div>
                                </div>
                                <small> (FOR 3 YEARS OLD AND ABOVE)</small>
                                <div class="form-group row">

                                    <label class="col-sm-5 col-form-label">20. Where was___ residing 3 years ago?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="residing" onchange='checkvalue(this.value)' required>
                                            <option value="">Select</option>
                                            <option value="Same address now">Same address now</option>
                                            <option value="Other address">Other address, specify</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label class="col-sm-5 col-form-label">Other address</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="residingo" class="form-control input-sm" name="residingo" disabled="disabled" required />

                                    </div>


                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">33. Did ___ vote in the last election? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="votedlast" id="votedlast" disabled="disabled" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Dont know">Don't know</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                            </div>
                            <div class="col-md-6">
                                <h5><strong>D. EDUCATION AND LITERACY</strong></h5>
                                <small>(FOR 3 YEARS OLD AND ABOVE) </small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">21. Is ___ currently attending school? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="attendschool" id="attendschool" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No (Go to 24)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">22. What grade or year is ___ currently attending?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="yearlevel" id="yearlevel" disabled="disabled" required>
                                            <option value="">Select Grade</option>
                                            <option value="No Grade">No Grade</option>
                                            <option value="Day Care">Day Care</option>
                                            <option value="Kindergarten">Kindergarten</option>
                                            <option value="Grade I">Grade I</option>
                                            <option value="Grade II">Grade II</option>
                                            <option value="Grade III">Grade III</option>
                                            <option value="Grade IV">Grade IV</option>
                                            <option value="Grade V">Grade V</option>
                                            <option value="Grade VI">Grade VI</option>
                                            <option value="Grade 7">Grade 7</option>
                                            <option value="Grade 8">Grade 8</option>
                                            <option value="Grade 9">Grade 9</option>
                                            <option value="Grade 10">Grade 10</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                            <option value="1st Year PS or N-T or TV">1st Year PS/N-T/TV</option>
                                            <option value="2nd Year PS or N-T or TV">2nd Year PS/N-T/TV</option>
                                            <option value="1st Year College">1st Year College</option>
                                            <option value="2nd Year College">2nd Year College</option>
                                            <option value="3rd Year College">3rd Year College</option>
                                            <option value="4th Year College or higher">4th Year College or higher</option>
                                            <option value="ALS Elementary">ALS Elementary</option>
                                            <option value="ALS Secondary">ALS Secondary</option>
                                            <option value="SPED Elementary">SPED Elementary</option>
                                            <option value="SPED Secondary">SPED Secondary</option>
                                            <option value="Post Grad with unit">Post Grad with units</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">23. Where does ___ attend school?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="schooltype" id="schooltype" disabled="disabled" required>
                                            <option value="">Select school type</option>
                                            <option value="Public">Public </option>
                                            <option value="Private">Private </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">24. Why is ___ not attending school?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="notattending" id="notattending" disabled="disabled" required>
                                            <option value="">Select reason</option>
                                            <option value="Schools are very far">Schools are very far </option>
                                            <option value="No school within the barangay">No school within the barangay </option>
                                            <option value="No regular transportation">No regular transportation </option>
                                            <option value="High cost of education or Financial concern">High cost of education/ Financial concern </option>
                                            <option value="Illness or Disability">Illness/Disability </option>
                                            <option value="Housekeeping or Taking care of siblings">Housekeeping/Taking care of siblings </option>
                                            <option value="Marriage or Cohabitation">Marriage/Cohabitation </option>
                                            <option value="Employment or looking for work">Employment/looking for work </option>
                                            <option value="Cannot cope with school work">Cannot cope with school work </option>
                                            <option value="Finished schooling">Finished schooling </option>
                                            <option value="Problem with school record">Problem with school record </option>
                                            <option value="Problem with birth certificate">Problem with birth certificate </option>
                                            <option value="To young to go to school">To young to go to school </option>
                                            <option value="Got pregnant">Got pregnant</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">25. What is the highest educational attainment completed by ___?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="educcompleted" required>
                                            <option value="">Select Educational Attainment Completed</option>
                                            <option value="No Grade">No Grade </option>
                                            <option value="Day Care">Day Care</option>
                                            <option value="Kindergarten">Kindergarten</option>
                                            <option value="Grade I">Grade I</option>
                                            <option value="Grade II">Grade II</option>
                                            <option value="Grade III">Grade III</option>
                                            <option value="Grade IV">Grade IV</option>
                                            <option value="Grade V">Grade V</option>
                                            <option value="Grade VI">Grade VI</option>
                                            <option value="Elementary Graduate">Elementary Graduate</option>
                                            <option value="Grade 7">Grade 7</option>
                                            <option value="Grade 8">Grade 8</option>
                                            <option value="Grade 9">Grade 9</option>
                                            <option value="Grade 10">Grade 10</option>
                                            <option value="Grade 11">Grade 11</option>
                                            <option value="Grade 12">Grade 12</option>
                                            <option value="High school graduate (Old curriculum)">High school graduate (Old curriculum)</option>
                                            <option value="Senior High school graduate (K-12 curriculum)">Senior High school graduate (K-12 curriculum)</option>
                                            <option value="1st Year PS or N-T or TV">1st Year PS/N-T/TV</option>
                                            <option value="2nd Year PS or N-T or TV">2nd Year PS/N-T/TV</option>
                                            <option value="Post secondary graduate">Post secondary graduate</option>
                                            <option value="1st Year College">1st Year College</option>
                                            <option value="2nd Year College">2nd Year College</option>
                                            <option value="3rd Year College">3rd Year College</option>
                                            <option value="4th Year College or higher">4th Year College or higher</option>
                                            <option value="College graduate">College graduate</option>
                                            <option value="ALS Elementary">ALS Elementary</option>
                                            <option value="ALS Secondary">ALS Secondary</option>
                                            <option value="SPED Elementary">SPED Elementary</option>
                                            <option value="SPED Secondary">SPED Secondary</option>
                                            <option value="SPED Graduate">SPED Graduate</option>
                                            <option value="Post Grad with units">Post Grad with units</option>
                                            <option value="Masters/PhD graduate">Masters/PhD graduate</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">26. If senior high school graduate, what is ___'s track/strand?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="shsstrand" required>
                                            <option value="">Select Strand</option>
                                            <option value="Accountancy, Business and Management">Accountancy, Business and Management</option>
                                            <option value="Science, Technology, Engineering, and Mathematics">Science, Technology, Engineering, and Mathematics</option>
                                            <option value="Humanities and Social Sciences">Humanities and Social Sciences</option>
                                            <option value="General Academic">General Academic</option>
                                            <option value="Home Economics">Home Economics</option>
                                            <option value="Agri-Fishery">Agri-Fishery</option>
                                            <option value="Industrial Arts">Industrial Arts</option>
                                            <option value="Information and Communication Technology">Information and Communication Technology or ICT</option>
                                            <option value="Sports">Sports</option>
                                            <option value="Arts and Design">Arts and Design</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">27. If at least college graduate, what is ___'s college course></label>
                                    <div class="col-sm-6">
                                        <input name="collegecourse" class="form-control input-sm" type="text" placeholder="" required />
                                    </div>
                                </div>
                                <small> For 10-64 YEARS OLD ONLY </small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">28. Is ___ currently attending any skills training? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="training" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">29. Have ___ attended any skills training in the past?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="pasttraining" id="pasttraining" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No (Go to 31)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">30. How many skills training have ___ attended including the current one?</label>
                                    <div class="col-sm-6">
                                        <input name="trainnum" class="form-control input-sm" type="number" min="0" disabled="disabled" id="trainnum" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">Training Program</label>
                                    <div class="col-sm-6">
                                        <input name="trainprogram" class="form-control input-sm" type="text" placeholder="" id="trainprogram" disabled="disabled" required />
                                    </div>
                                </div>
                                <small> IF NOT AT LEAST HIGH SCHOOL GRADUATE</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">31. Can ___ read and write a simple message in any language or dialect?</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="literate" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                <h5><strong>E. POLITICAL PARTICIPATION</strong></h5>
                                <small> (FOR 16 YEARS OLD AND ABOVE)</small>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label">32. Is ____ a registered voter? </label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="voter" id="voter" required>
                                            <option value="">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No (GO TO 34)</option>
                                        </select>
                                    </div>
                                </div>


                                <hr style="height:2px;border-width:0;color:black;background-color:black" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><strong>F. ECONOMIC ACTIVITY</strong></h5>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">34. Did ___ do any work for at least 1 hour during the past week?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="job" id="job" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes (Go to 36)</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">35. Although ___ did not work, did ___ have a job or business during the past
                                            week?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="nwork" id="nwork" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No (Go to 45)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small>IF YES IN 34 OR YES IN 35</small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">36. How many work, jobs, or businesses does ___ have?</label>
                                        <div class="col-sm-6">
                                            <input name="jobnum" class="form-control input-sm" type="number" min="0" id="jobnum" disabled="disabled" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">37. What was ___'s primary occupation during the past week?</label>
                                        <div class="col-sm-6">
                                            <input name="occup" class="form-control input-sm" type="text" id="occup" disabled="disabled" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Code </label>
                                        <div class="col-sm-6">
                                            <input name="occupcode" class="form-control input-sm" type="number" min="0" id="occupcode" disabled="disabled" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">38. In what kind of industry did ___ work during the past week?</label>
                                        <div class="col-sm-6">
                                            <input name="industry" class="form-control input-sm" type="text" id="industry" disabled="disabled" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Code</label>
                                        <div class="col-sm-6">
                                            <input name="industrycode" class="form-control input-sm" type="text" min="0" id="industrycode" disabled="disabled" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">39. What is ___'s nature of employment?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="employ" id="employ" disabled="disabled" required>
                                                <option value="">Select nature of employment</option>
                                                <option value="Permanent job or business or unpaid family work">Permanent job/business/unpaid family work</option>
                                                <option value="Short-term or seasonal or casual job or business or unpaid family work">Short-term or seasonal or casual job/business/unpaid family work
                                                </option>
                                                <option value="Worked for different employeers or customers on day-to-day or
                                            week-to-week basi">Worked for different employeers or customers on day-to-day or
                                                    week-to-week basis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">40. What was ___'s normal working number of hours per day during the past week?</label>
                                        <div class="col-sm-6">
                                            <input name="employhrs" class="form-control input-sm" type="number" id="employhrs" disabled="disabled" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">41. What was __'s total number of hours duing the past week?</label>
                                        <div class="col-sm-6">
                                            <input name="employthrs" class="form-control input-sm" type="number" id="employthrs" disabled="disabled" required />
                                        </div>
                                    </div>
                                    <small> FOR 15 YEARS OLD AND ABOVE</small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">42. Did ___ want more hours or work during the past week?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="addhrsworkpast" id="addhrsworkpast" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small> IF YES IN 34 OR YES IN 35</small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">43. Did ___ look for additional work during the past week?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="addextrawork" id="addextrawork" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">44. What is ___'s class of worker?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="classworker" id="classworker" disabled="disabled" required>
                                                <option value="">Select Class of Worker</option>
                                                <option value="Working for private household">Working for private household</option>
                                                <option value="Working for private business or establishment or farm">Working for private business/establishment/farm</option>
                                                <option value="Working for government or government corporation">Working for government/government corporation</option>
                                                <option value="Self-employed with no paid employee">Self-employed with no paid employee</option>
                                                <option value="Employer in own family-operated farm or business">Employer in own family-operated farm or business</option>
                                                <option value="Working with pay on own family-operated farm or business">Working with pay on own family-operated farm or business</option>
                                                <option value="Working without pay on own family-operated farm or business">Working without pay on own family-operated farm or business
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">45. Did ___ look for work or try to establish business during the past week?
                                        </label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="fjobpast" id="fjobpast" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes </option>
                                                <option value="No">No (Go to 49)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                    <h5><strong>G. OTHER CHARACTERISTICS OF HOUSEHOLD MEMBERS</strong></h5>
                                    <small>IF CODE 2 IN (12)</small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">59. Is ___ pregnant?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="pregnant" id="pregnant" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">60. Is ___ a solo parent taking care of a child/children?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="soloparent" id="soloparent" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small> IF YES IN (60)</small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">61. Does ___ have a Solo Parent ID?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="soloparentid" id="soloparentid" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">62. Does ___ have any physical or mental disability?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="disability" id="disability" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No (Go to 65)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small> IF YES IN (62)</small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">63. What type of disability does ___ have?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="disabilitytype" id="disabilitytype" disabled="disabled" required>
                                                <option value="">Select type of Disability</option>
                                                <option value="Mental or Intellectual">Mental/Intellectual</option>
                                                <option value="Hearing Disability">Hearing Disability</option>
                                                <option value="Psychosocial Disability">Psychosocial Disability</option>
                                                <option value="Visual Disability">Visual Disability</option>
                                                <option value="Speech Impairment">Speech Impairment</option>
                                                <option value="Disability due to Chronic illness">Disability due to Chronic illness</option>
                                                <option value="Orthopedic or Musculoskeletal Disability">Orthopedic (Musculoskeletal) Disability</option>
                                                <option value="Multiple Disabilities">Multiple Disabilities</option>
                                                <option value="Learning Disability">Learning Disability</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">64. Does ___ have a PWD ID?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="pwdid" id="pwdid" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small>FOR 60 YEARS OLD AND ABOVE</small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">65. Does ___ have a Senior Citizen's ID?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="seniorcitizenid" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                    <h5><strong>H. CRIME</strong></h5>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">66. Has ___ been a victim of crime in the past 12 months?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="crime" id="crime" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No (Go to 69)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small>IF YES IN (66)</small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">67. What crime/s was/were ___ a victim of?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="crimetype" id="crimetype" disabled="disabled" required>
                                                <option value="">Select Type of Crime</option>
                                                <option value="Theft">Theft</option>
                                                <option value="Robbery">Robbery</option>
                                                <option value="Rape">Rape</option>
                                                <option value="Physical Injury">Physical Injury</option>
                                                <option value="Carnapping">Carnapping</option>
                                                <option value="Cattle rustling">Cattle rustling</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">68. Where did the crime happen?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="crimeloc" id="crimeloc" disabled="disabled" required>
                                                <option value="">Select Crime Location</option>
                                                <option value="Within the barangay">Within the barangay</option>
                                                <option value="Outside the barangay but within municipality or city">Outside the barangay but within municipality/city</option>
                                                <option value="Outside the municipality or city but within province">Outside the municipality/city but within province</option>
                                                <option value="Outside the province">Outside the province</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">46. Was this ___'s first time to look for work or try to establish a
                                            business?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="findwork" id="findwork" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">47. What has ___ been doing to find work?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="rfindwork" id="rfindwork" disabled="disabled" required>
                                                <option value="">Select Reason</option>
                                                <option value="Registered in public employment agency">Registered in public employment agency</option>
                                                <option value="Registered in private employment agency">Registered in private employment agency</option>
                                                <option value="Approached employer directly">Approached employer directly</option>
                                                <option value="Approached relatives or friends">Approached relatives or friends</option>
                                                <option value="Placed or answered advertisements">Placed or answered advertisements</option>
                                                <option value="Search and applied online">Search and applied online</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">48. How many weeks has ___ been looking for work? </label>
                                        <div class="col-sm-6">
                                            <input name="findworknum" class="form-control input-sm" type="number" min="0" placeholder="" id="findworknum" disabled="disabled" required />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">49. Why did ___ not look for work</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="rfnotwork" id="rfnotwork" disabled="disabled" required>
                                                <option value="">Select Reason</option>
                                                <option value="Tired or Believes no work is available">Tired/Believes no work is available</option>
                                                <option value="Awaiting results of previous job application">Awaiting results of previous job application</option>
                                                <option value="Temporary illness or disability">Temporary illness/disability</option>
                                                <option value="Bad weather">Bad weather</option>
                                                <option value="Waiting for retire">Waiting for retire</option>
                                                <option value="Too young or old or retired or permanent disability">Too young/old or retired/permanent disability</option>
                                                <option value="Household, family duties">Household, family duties</option>
                                                <option value="Schooling">Schooling</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">50. When was the last time ___ looked for work?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="lastlookjob" id="lastlookjob" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Within last month">Within last month</option>
                                                <option value="One to six months">One to six months</option>
                                                <option value="More then six months">More then six months</option>
                                                <option value="Never">Never</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">51. Had opportunity for work existed lass week or within two weeks, would ___
                                            been available? </label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="pastwillingwork" id="pastwillingwork" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">52. Was ___ willing to take up work during the past week or within 2
                                            weeks?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="willingtotakeupwork" id="willingtotakeupwork" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <small>DO NOT INCLUDE SALARY OF HOUSEHOLD MEMBERS WHO ARE OFW AND HOUSEMAID/BOYS</small>
                                    <div class="form-group row" class="cashsalary">
                                        <label class="col-sm-5 col-form-label">53. In the past 12 months, how much total salary/wages, did ___ receive? (CASH)</label>
                                        <div class="col-sm-6">
                                            <input name="cashsalary" class="form-control input-sm" type="number" min="0" placeholder="" required />
                                        </div>
                                    </div>
                                    <div class="form-group row" class="kindsalary">
                                        <label class="col-sm-5 col-form-label">53. In the past 12 months, how much total salary/wages, did ___ receive? (KIND)</label>

                                        <div class="col-sm-6">
                                            <input name="kindsalary" class="form-control input-sm" type="number" min="0" placeholder="" required />
                                        </div>
                                    </div>
                                    <small> FOR 18 YEARS OLD AND ABOVE </small>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">54. Is ___ a member of SSS?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="sssmember" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">55. Is ___ a member of GSIS?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="gsismember" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">56. Is ___ a member of PhilHealth?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="philhealthmember" id="philhealthmember" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">57. What is ___'s membership type?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="membertype" id="membertype" disabled="disabled" required>
                                                <option value="">Select Membership Type</option>
                                                <option value="PhilHealth - OFW">PhilHealth - OFW</option>
                                                <option value="PhilHealth - Employed">PhilHealth - Employed</option>
                                                <option value="PhilHealth - Individually-paying">PhilHealth - Individually-paying</option>
                                                <option value="PhilHealth - Sponsored">PhilHealth - Sponsored</option>
                                                <option value="PhilHealth - Lifetime">PhilHealth - Lifetime</option>
                                                <option value="PhilHealth - Senior Citizen">PhilHealth - Senior-Citizen</option>
                                                <option value="PhilHealth - Indigent">PhilHealth - Indigent</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">58. Is a dependendent of a PhilHealth member?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="philhealthdependent" id="philhealthdependent" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br><br>
                                    <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                    <h5><strong> I. HEALTH AND NUTRITION</strong></h5>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">69. What is ___'s blood type?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="bloodtype" id="bloodtype" required>
                                                <option value="">Select Blood Type</option>
                                                <option value="O">O</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="Dont Know">Don't Know</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">70. What is the Rhesus (Rh) factor of ___'s blood type?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="rhtype" id="rhtype" disabled="disabled" required>
                                                <option value="">Select Rh Blood Type</option>
                                                <option value="Positive">Positive</option>
                                                <option value="Negative">Negative</option>
                                                <option value="Dont Know">Don't Know</option>
                                            </select>
                                        </div>
                                    </div>
                                    <p>FOR 5 YEARS OLD AND BELOW</p>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">71. NUTRITIONAL STATUS OF CHILDREN 0-5 YEARS OLD</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="nutritionstatus">
                                                <option value="">Select Nutritional Status</option>
                                                <option value="Overweight">Overweight</option>
                                                <option value="Normal">Normal</option>
                                                <option value="Underweight">Underweight</option>
                                                <option value="Severely underweight">Severely underweight</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">72. DATE OF RECORD OF BARANGAY NUTRITION SCHOLARS</label>
                                        <div class="col-sm-6">
                                            <input name="datebns" class="form-control input-sm" type="date" placeholder="" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">73. During the past 12 months, did you or any member of the household avail of medical treatment for any ilnness?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="treatment" id="treatment" required>
                                                <option value="">Select</option>
                                                <option value="Yes">Yes (Go to 74)</option>
                                                <option value="No">No</option>
                                                <option value="Did not get sick">Did not get sick</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">74. During the last illness of any member of the household, where did you go to
                                            avail medical treatment?</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="treatmentloc" id="treatmentloc" disabled="disabled" required>
                                                <option value="">Select</option>
                                                <option value="Public hospital - National">Public hospital (National)</option>
                                                <option value="Public hosptital - Provincial">Public hosptital (Provincial)</option>
                                                <option value="Public hosptital - Municipal or City">Public hosptital (Municipal/City)</option>
                                                <option value="Public hosptital - District">Public hosptital (District)</option>
                                                <option value="Public hosptital or clinic">Public hosptital or clinic</option>
                                                <option value="Rural health units">Rural health units</option>
                                                <option value="Barangay Health Station">Barangay Health Station</option>
                                                <option value="Non medical, non-trained Hilot or Personnel">Non-medical/non-trained Hilot/Personnel</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr style="height:2px;border-width:0;color:black;background-color:black" />
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">IX. End Date of Interview:</label>
                                        <div class="col-sm-6">
                                            <input name="enddate" class="form-control input-sm" type="date" placeholder="" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">X. Time Ended:</label>
                                        <div class="col-sm-6">
                                            <input name="endtime" class="form-control input-sm" type="time" placeholder="" required />
                                        </div>
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

