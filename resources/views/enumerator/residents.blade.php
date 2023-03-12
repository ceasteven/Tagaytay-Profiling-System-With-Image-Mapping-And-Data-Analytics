@extends('backend.app')
@section('content')


<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Residents</h1>
        </div>
        <div class="col-sm-6 text-sm">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Residents</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <hr>
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
        <strong>Success!</strong> {{ session('success') }}
    </div>
    
            @elseif (Session::has('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error!</strong> {{ session('error') }}
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
              <ul class="nav nav-pills " role="tablist">
                <li class="nav-item text-sm" >
                  <a class="nav-link active" href="#tab-table1" data-toggle="tab">IDENTIFICATION</a>
                </li>
                <li class="nav-item text-sm">
                  <a class="nav-link" href="#tab-table2" data-toggle="tab">HOUSING & HOUSEHOLD CHARACTERISTICS</a>
                </li>
                <li class="nav-item text-sm">
                  <a class="nav-link" href="#tab-table3" data-toggle="tab">DEMOGRAPHY</a>
                  <li class="nav-item text-sm">
                  <a class="nav-link" href="#tab-table4" data-toggle="tab">EDUCATION & LITERACY</a>
                </li>
                </li>
                <li class="nav-item text-sm">
                  <a class="nav-link" href="#tab-table5" data-toggle="tab">ECONOMIC ACTIVITY</a>
                </li>
                <li class="nav-item text-sm">
                  <a class="nav-link" href="#tab-table6" data-toggle="tab">OTHER CHARACTERISTICS OF HOUSEHOLD MEMBERS</a>
                </li>

              </ul>
              <hr>
              @if (request()->has('view_deleted'))
              <a href="{{route('residents.index')}}" class="btn btn-info btn-sm"><i class="fas fa-solid fa-eye"></i> View Residents</a>
              <a href="{{route('residents.allrestore')}}" class="btn btn-success btn-sm"><i class="fas fa-arrows-rotate"></i> Restore All</a>
              @else

              @if (auth()->user()->role=='Enumerator')
              <button class="btn btn-success btn-sm" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#addnew"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Resident</button>
              <a href="{{ route('residents.index', ['view_deleted' => 'ArchivedUsers']) }}" class="btn btn-info btn-sm"><i class="fas fa-solid fa-eye"></i> View Archive</a>
             
              <button class="btn btn-success btn-sm" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#import"><i class="fa-solid fa-upload"></i> Import</button>
              
          
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i> Export
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ route('residents.export') }}">Excel</a>
    <a class="dropdown-item" href="{{ route('residents.exportcsv') }}">CSV</a>



</div>
              
              @elseif (auth()->user()->role=='System Admin')
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="float:right"><i class="fa-solid fa-download"></i>
   Export
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ route('residents.export') }}">Excel</a>
    <a class="dropdown-item" href="{{ route('residents.exportcsv') }}">CSV</a>

</div>
              @endif
              @endif
             
              
            
              
            </div>

            <!-- /.card-header -->
            <div class="card-body">

              <div>

                <div class="tab-content">
                  <div class="tab-pane active" id="tab-table1">
                    
                    <table id="example4" class="table table-bordered table-striped table-hover dataTable nowrap " width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Region</th>
                          <th>Province</th>
                          <th>City</th>
                          <th>Zone</th>
                          <th>Barangay</th>
                          <th>Purok</th>
                          <th>Street</th>
                          <th>House Number</th>
                          <th>Unit Number</th>
                          <th>Household Head Name</th>
                          <th>Respondent Name</th>
                          <th>Start Date of Interview</th>
                          <th>Time Started</th>
                          <th>Enumerator Name</th>
                      
                         
                          <th>House Control Number</th>
                          @if (auth()->user()->role=='Enumerator')
                          <th data-orderable="false">Action</th>
                          @endif
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($all as $resident)
                        <tr>
                        <td>{{$resident->id}}</td>
                          <td>{{$resident->region}}</td>
                          <td>{{$resident->province}}</td>
                          <td>{{$resident->city}}</td>
                          <td>{{$resident->zone}}</td>
                          <td>{{$resident->barangay}}</td>
                          <td>{{$resident->purok}}</td>
                          <td>{{$resident->street}}</td>
                          <td>{{$resident->housenum}}</td>
                          <td>{{$resident->unitnum}}</td>
                          <td>{{$resident->headname}}</td>
                          <td>{{$resident->respondentname}}</td>
                          <td>{{$resident->startdate}}</td>
                          <td>{{$resident->timestart}}</td>
                          <td>{{$resident->enumname}}</td>
                       
                         
                          <td>{{$resident->housecontrolnum}}</td>
                          @if (auth()->user()->role=='Enumerator')
                          <td>
                           
                           @if(request()->has('view_deleted'))
                        <a href="{{ route('residents.repair', $resident->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                        @else
                        <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#editmodal1{{$resident->id}}" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['residents.destroy', $resident->id],'style'=>'display:inline']) !!}
                        {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                        {!! Form::close() !!}
                        @endif
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>




                    </table>

                  </div>
                  <div class="tab-pane" id="tab-table2">
                    <table id="example5" class="table table-bordered table-striped table-hover dataTable nowrap" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Building Type</th>
                          <th>Bedrooms Number</th>
                          <th>Storeys Number</th>
                          <th>Roof Type</th>
                          <th>Wall Type</th>
                          <th>Floor Type</th>
                          <th>Nuclear Families Number</th>
                          <th>Household Members Numbers</th>
                          @if (auth()->user()->role=='Enumerator')
                          <th data-orderable="false">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($all as $resident)
                        <tr>
                        <td>{{$resident->id}}</td>
                          <td>{{$resident->housetype}}</td>
                          <td>{{$resident->bedroomnum}}</td>
                          <td>{{$resident->storeysnum}}</td>
                          <td>{{$resident->rooftype}}</td>
                          <td>{{$resident->walltype}}</td>
                          <td>{{$resident->floortype}}</td>
                          <td>{{$resident->nucfam}}</td>
                          <td>{{$resident->housemembernum}}</td>
                          @if (auth()->user()->role=='Enumerator')
                          <td>
                          @if(request()->has('view_deleted'))
                        <a href="{{ route('residents.repair', $resident->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                        @else
                        <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#editmodal2{{$resident->id}}" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['residents.destroy', $resident->id],'style'=>'display:inline']) !!}
                        {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                        {!! Form::close() !!}
                        @endif
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>


                    </table>
                  </div>
                  <div class="tab-pane" id="tab-table3">
                    <table id="example6" class="table table-bordered table-striped table-hover dataTable nowrap " width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Household Head Name</th>
                          <th>Household Member Name</th>
                          <th>Relationship to the Household Head</th>
                          <th>Nuclear Family Belong To</th>
                          <th>Gender</th>
                          <th>Date of Birth</th>
                          <th>Age</th>
                          <th>Birth Registered</th>
                          <th>Civil Status</th>
                          <th>Ethnicity by Blood</th>
                          <th>Religious Affiliation</th>
                          <th>Overseas Worker</th>
                          <th>Country of Destination</th>
                          <th>Residing (3 years ago)</th>
                          <th>Address</th>
                         
                          @if (auth()->user()->role=='Enumerator')
                          <th data-orderable="false">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($all as $resident)
                        <tr>
                        <td>{{$resident->id}}</td>
                          <td>{{$resident->householdhead}}</td>
                          <td>{{$resident->householdmembername}}</td>
                          <td>{{$resident->nucfambelong}}</td>
                          <td>{{$resident->reltohead}}</td>
                          <td>{{$resident->gender}}</td>
                          <td>{{$resident->birthdate}}</td>
                          <td>{{$resident->age}}</td>
                          <td>{{$resident->birthregistered}}</td>
                          <td>{{$resident->civilstatus}}</td>
                          <td>{{$resident->ethnicity}}</td>
                          <td>{{$resident->religiousaffiliation}}</td>
                          <td>{{$resident->ofw}}</td>
                          <td>{{$resident->ofwcountry}}</td>
                          <td>{{$resident->residing}}</td>
                          <td>{{$resident->residingo}}</td>
                          @if (auth()->user()->role=='Enumerator')
                          <td>
                          @if(request()->has('view_deleted'))
                        <a href="{{ route('residents.repair', $resident->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                        @else
                        <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#editmodal3{{$resident->id}}" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['residents.destroy', $resident->id],'style'=>'display:inline']) !!}
                        {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                        {!! Form::close() !!}
                        @endif
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>


                   <div class="tab-pane" id="tab-table4">
                    <table id="example7" class="table table-bordered table-striped table-hover dataTable nowrap " width="100%">
                      <thead>
                        <th>No</th>
                          <th>Currenty Attending School</th>
                          <th>Grade or Year</th>
                          <th>School Type</th>
                          <th>Not Attending School Reason</th>
                          <th>Highest Educational Attainment</th>
                          <th>SHS Strand</th>
                          <th>College Course</th>
                          <th>Current Skills Training</th>
                          <th>Past Skills Training</th>
                          <th>Training Program</th>
                          <th>Training Program Number</th>
                          <th>Literate</th>
                          <th>Registered Voter</th>
                          <th>Last election</th>
                          @if (auth()->user()->role=='Enumerator')
                          <th data-orderable="false">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($all as $resident)
                        <tr>
                        <td>{{$resident->id}}</td>
                          <td>{{$resident->attendschool}}</td>
                          <td>{{$resident->yearlevel}}</td>
                          <td>{{$resident->schooltype}}</td>
                          <td>{{$resident->notattending}}</td>
                          <td>{{$resident->educcompleted}}</td>
                          <td>{{$resident->shstrand}}</td>
                          <td>{{$resident->collegecourse}}</td>
                          <td>{{$resident->training}}</td>
                          <td>{{$resident->pasttraining}}</td>
                          <td>{{$resident->trainnum}}</td>
                          <td>{{$resident->trainprogram}}</td>
                          <td>{{$resident->literate}}</td>
                          <td>{{$resident->voter}}</td>
                          <td>{{$resident->votedlast}}</td>
                          @if (auth()->user()->role=='Enumerator')
                          <td>
                          @if(request()->has('view_deleted'))
                        <a href="{{ route('residents.repair', $resident->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                        @else
                        <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#editmodal4{{$resident->id}}" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['residents.destroy', $resident->id],'style'=>'display:inline']) !!}
                        {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                        {!! Form::close() !!}
                        @endif
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                  <div class="tab-pane" id="tab-table5">
                    <table id="example8" class="table table-bordered table-striped table-hover dataTable nowrap " width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Work in the past week</th>
                          <th>Past week Work </th>
                          <th>Work Number</th>
                          <th>Primary Job</th>
                          <th>Primary Job Code</th>
                          <th>Business/Industry</th>
                          <th>Business/Industry Code</th>
                          <th>Nature of Employment</th>
                          <th>Working hours</th>
                          <th>Total Working hours</th>
                          <th>Additional Hours of Work</th>
                          <th>Look for additional work</th>
                          <th>Class of Worker</th>
                          <th>Try to work</th>
                          <th>First time to Look for Work</th>
                          <th>Job searched Method</th>
                          <th>Job searched weeks</th>
                          <th>Reason for not working</th>
                          <th>Last time to look for work</th>
                          <th>Opportunity to work</th>
                          <th>Willing to take up work</th>
                          <th>Salary in Cash</th>
                          <th>Salary in Kind</th>
                          <th>SSS member</th>
                          <th>GSIS member</th>
                          <th>PhilHealth member</th>
                          <th>Membership Type</th>
                          <th>Philhealth member dependent</th>
                          @if (auth()->user()->role=='Enumerator')
                          <th data-orderable="false">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($all as $resident)
                        <tr>
                        <td>{{$resident->id}}</td>
                          <td>{{$resident->job}}</td>
                          <td>{{$resident->nwork}}</td>
                          <td>{{$resident->jobnum}}</td>
                          <td>{{$resident->occup}}</td>
                          <td>{{$resident->occupcode}}</td>
                          <td>{{$resident->industry}}</td>
                          <td>{{$resident->industrycode}}</td>
                          <td>{{$resident->employ}}</td>
                          <td>{{$resident->employhrs}}</td>
                          <td>{{$resident->employthrs}}</td>
                          <td>{{$resident->addhrsworkpast}}</td>
                          <td>{{$resident->addextrawork}}</td>
                          <td>{{$resident->classworker}}</td>
                          <td>{{$resident->fjobpast}}</td>
                          <td>{{$resident->findwork}}</td>
                          <td>{{$resident->rfindwork}}</td>
                          <td>{{$resident->findworknum}}</td>
                          <td>{{$resident->rfnotwork}}</td>
                          <td>{{$resident->lastlookjob}}</td>
                          <td>{{$resident->pastwillingwork}}</td>
                          <td>{{$resident->willingtotakeupwork}}</td>
                          <td>{{$resident->cashsalary}}</td>
                          <td>{{$resident->kindsalary}}</td>
                          <td>{{$resident->sssmember}}</td>
                          <td>{{$resident->gsismember}}</td>
                          <td>{{$resident->philhealthmember}}</td>
                          <td>{{$resident->membertype}}</td>
                          <td>{{$resident->philhealthdependent}}</td>
                          @if (auth()->user()->role=='Enumerator')
                          <td>
                          @if(request()->has('view_deleted'))
                        <a href="{{ route('residents.repair', $resident->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                        @else
                        <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#editmodal5{{$resident->id}}" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['residents.destroy', $resident->id],'style'=>'display:inline']) !!}
                        {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                        {!! Form::close() !!}
                        @endif
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="tab-table6">
                    <table id="example9" class="table table-bordered table-striped table-hover dataTable nowrap" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Pregnant</th>
                          <th>Solo Parent</th>
                          <th>Solo Parent ID</th>
                          <th>Disability</th>
                          <th>Disability Type</th>
                          <th>PWD ID</th>
                          <th>Senior Citizen ID</th>
                          <th>Victim</th>
                          <th>Crime Type</th>
                          <th>Crime Location</th>
                          <th>Blood Type</th>
                          <th>Rh blood type</th>
                          <th>Nutritional Status</th>
                          <th>Date of Record of BNS</th>
                          <th>Treatment</th>
                          <th>Treatment Location</th>
                          <th>End Date of Interview</th>
                          <th>Time Ended</th>
                          @if (auth()->user()->role=='Enumerator')
                          <th data-orderable="false">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($all as $resident)
                        <tr>
                        <td>{{$resident->id}}</td>
                          <td>{{$resident->pregnant}}</td>
                          <td>{{$resident->soloparent}}</td>
                          <td>{{$resident->soloparentid}}</td>
                          <td>{{$resident->disability}}</td>
                          <td>{{$resident->disabilitytype}}</td>
                          <td>{{$resident->pwdid}}</td>
                          <td>{{$resident->seniorcitizenid}}</td>
                          <td>{{$resident->crime}}</td>
                          <td>{{$resident->crimetype}}</td>
                          <td>{{$resident->crimeloc}}</td>
                          <td>{{$resident->bloodtype}}</td>
                          <td>{{$resident->rhtype}}</td>
                          <td>{{$resident->nutritionstatus}}</td>
                          <td>{{$resident->datebns}}</td>
                          <td>{{$resident->treatment}}</td>
                          <td>{{$resident->treatmentloc}}</td>
                          <td>{{$resident->enddate}}</td>
                          <td>{{$resident->endtime}}</td>
                          @if (auth()->user()->role=='Enumerator')
                          <td>
                          @if(request()->has('view_deleted'))
                        <a href="{{ route('residents.repair', $resident->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                        @else
                        <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#editmodal6{{$resident->id}}" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['residents.destroy', $resident->id],'style'=>'display:inline']) !!}
                        {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                        {!! Form::close() !!}
                        @endif
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
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

@include('enumerator.add_residents')
@include('enumerator.importr')
<script src="{{asset('plugins/residents/residents.js')}}"></script>
@endsection