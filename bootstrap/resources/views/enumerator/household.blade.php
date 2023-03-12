@extends('backend.app')
@section('content')


<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Household</h1>
            </div>
            <div class="col-sm-6 text-sm">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
                  <li class="breadcrumb-item active">Household</li>
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
                  <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)">
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
                        <li class="nav-item text-sm">
                           <a class="nav-link active" href="#tab-table1" data-toggle="tab">WATER AND SANITATION</a>
                        </li>
                        <li class="nav-item text-sm">
                           <a class="nav-link" href="#tab-table2" data-toggle="tab">SOURCES OF INCOME</a>
                        </li>
                        <li class="nav-item text-sm">
                           <a class="nav-link" href="#tab-table3" data-toggle="tab">AGRICULTURE-FARMING</a>
                        </li>
                        <li class="nav-item text-sm">
                           <a class="nav-link" href="#tab-table4" data-toggle="tab">LIVESTOCK AND POULTRY</a>
                        </li>
                        <li class="nav-item text-sm">
                           <a class="nav-link" href="#tab-table5" data-toggle="tab">CALAMITY</a>
                        </li>
                        <li class="nav-item text-sm">
                           <a class="nav-link" href="#tab-table6" data-toggle="tab">PROGRAMS</a>
                        </li>

                     </ul>
                     <hr>
                     @if (request() ->has('view_deleted'))
                     <a href="{{route('household.index')}} " class="btn btn-info btn-sm"><i class="fas fa-solid fa-eye"></i> View Household</a>
                     <a href="{{ route('households.restoreAll') }}" class="btn btn-success btn-sm"><i class="fas fa-arrows-rotate"></i> Restore All</a>
                     @else

                     @if (auth()->user()->role=='Enumerator')
                     <button class="btn btn-success btn-sm" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#addhousehold"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Household</button>
                     <a href="{{ route('household.index', ['view_deleted' => 'ArchivedUsers']) }}" class="btn btn-info btn-sm"><i class="fas fa-solid fa-eye"></i> View Archive</a>
                     <button class="btn btn-success btn-sm" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#imports"><i class="fa-solid fa-upload"></i> Import</button>
                     <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i> 
                        Export
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('households.export') }}">Excel</a>
                        <a class="dropdown-item" href="{{ route('households.csvexport') }}">CSV</a>

                     </div>
                     @elseif (auth()->user()->role=='System Admin')
                     <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="float:right"><i class="fa-solid fa-download"></i>
                        Export
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('households.export') }}">Excel</a>
                        <a class="dropdown-item" href="{{ route('households.csvexport') }}">CSV</a>

                     </div>
                     @endif
                     @endif

                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">

                     <div>

                        <div class="tab-content">
                           <div class="tab-pane active" id="tab-table1">
                              <table id="example10" class="table table-bordered table-striped table-hover dataTable nowrap " width="100%">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>House Control Number</th>
                                       <th>Household Head Name</th>
                                       <th>Water Supply</th>
                                       <th>Water Supply Number</th>
                                       <th>Tenure Status</th>
                                       <th>Rent</th>
                                       <th>Street</th>
                                       <th>Cooking Fuel</th>
                                       <th>Electricity</th>
                                       <th>Electric</th>
                                       <th>Generator</th>
                                       <th>Battery</th>
                                       <th>Others</th>
                                       <th>Land (Agricultural)</th>
                                       <th>Number</th>
                                       <th>Land (Residential)</th>
                                       <th>Number</th>
                                       <th>Car jeep, van</th>
                                       <th>Number</th>
                                       <th>Bicycle</th>
                                       <th>Number</th>
                                       <th>Pedicab</th>
                                       <th>Number</th>
                                       <th>Television</th>
                                       <th>Number</th>
                                       <th>Radio/Radio casette</th>
                                       <th>Number</th>
                                       <th>CD/VCD/DVD player</th>
                                       <th>Number</th>
                                       <th>Tricycle, motorcycle, e-bike</th>
                                       <th>Number</th>
                                       <th>Component/Stereo/Karaoke/Videoke</th>
                                       <th>Number</th>
                                       <th>Cellphone</th>
                                       <th>Number</th>
                                       <th>Landline telephone </th>
                                       <th>Number</th>
                                       <th>Computer/Laptop/Netbook</th>
                                       <th>Number</th>
                                       <th>Electric fan</th>
                                       <th>Number</th>
                                       <th>Electric iron/steamer/th>
                                       <th>Number</th>
                                       <th>Washing machine</th>
                                       <th>Number</th>
                                       <th>Refrigerator/Freezer</th>
                                       <th>Number</th>
                                       <th>LPG gas stove/electric stove/range</th>
                                       <th>Number</th>
                                       <th>Rice cooker</th>
                                       <th>Number</th>
                                       <th>Microwave oven</th>
                                       <th>Number</th>
                                       <th>Toaster/Toaster oven</th>
                                       <th>Number</th>
                                       <th>Electric water dispenser</th>
                                       <th>Number</th>
                                       <th>Sala/Sofa set</th>
                                       <th>Number</th>
                                       <th>Sleeping mats</th>
                                       <th>Number</th>
                                       <th>Frame without mattress</th>
                                       <th>Number</th>
                                       <th>Mattress</th>
                                       <th>Number</th>
                                       <th>Others</th>
                                       <th>Number</th>
                                       <th>Internet</th>
                                       <th>Number</th>
                                       <th>Others</th>
                                       <th>Number</th>
                                       <th>House</th>
                                       <th>Insurance Provider</th>
                                       <th>House</th>
                                       <th>Motor Vehicle</th>
                                       <th>Appliances</th>
                                       <th>Insurance Provider</th>
                                       <th>Garbage collection</th>
                                       <th>Burning</th>
                                       <th>Composting</th>
                                       <th>Recycling</th>
                                       <th>Pit with cover</th>
                                       <th>Pit without cover</th>
                                       <th>Throwing of garbage in river</th>
                                       <th>Other Systen of Garbage Disposal</th>
                                       <th>Others</th>
                                       <th>Garbage Collector</th>
                                       <th>Garbage Collected</th>
                                       @if (auth()->user()->role=='Enumerator')
                                       <th data-orderable="false">Action</th>
                                       @endif
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($all as $household)
                                    <tr>
                                       <td>{{$household->id}}</td>
                                       <td>{{$household->housecontrolnum}}</td>
                                       <td>{{$household->headname}}</td>
                                       <td>{{$household->watersupply}}</td>
                                       <td>{{$household->waternum}}</td>
                                       <td>{{$household->toilettype}}</td>
                                       <td>{{$household->tenure}}</td>
                                       <td>{{$household->rentpm}}</td>
                                       <td>{{$household->fuel}}</td>
                                       <td>{{$household->electric}}</td>
                                       <td>{{$household->electricsrc}}</td>
                                       <td>{{$household->generator}}</td>
                                       <td>{{$household->solar}}</td>
                                       <td>{{$household->battery}}</td>
                                       <td>{{$household->electrico}}</td>
                                       <td>{{$household->landagri}}</td>
                                       <td>{{$household->landagrinum}}</td>
                                       <td>{{$household->landres}}</td>
                                       <td>{{$household->landresum}}</td>
                                       <td>{{$household->car}}</td>
                                       <td>{{$household->carnum}}</td>
                                       <td>{{$household->tricycle}}</td>
                                       <td>{{$household->trciyclenum}}</td>
                                       <td>{{$household->bicycle}}</td>
                                       <td>{{$household->bicyclenum}}</td>
                                       <td>{{$household->pedi}}</td>
                                       <td>{{$household->pedinum}}</td>
                                       <td>{{$household->tv}}</td>
                                       <td>{{$household->tvnum}}</td>
                                       <td>{{$household->dvd}}</td>
                                       <td>{{$household->dvdnum}}</td>
                                       <td>{{$household->casette}}</td>
                                       <td>{{$household->casettenum}}</td>
                                       <td>{{$household->karaoke}}</td>
                                       <td>{{$household->karaokenum}}</td>
                                       <td>{{$household->cell}}</td>
                                       <td>{{$household->cellnum}}</td>
                                       <td>{{$household->tel}}</td>
                                       <td>{{$household->telnum}}</td>
                                       <td>{{$household->comp}}</td>
                                       <td>{{$household->compnum}}</td>
                                       <td>{{$household->fan}}</td>
                                       <td>{{$household->fannum}}</td>
                                       <td>{{$household->aircon}}</td>
                                       <td>{{$household->airconum}}</td>
                                       <td>{{$household->iron}}</td>
                                       <td>{{$household->ironnum}}</td>
                                       <td>{{$household->washing}}</td>
                                       <td>{{$household->washingnum}}</td>
                                       <td>{{$household->ref}}</td>
                                       <td>{{$household->refnum}}</td>
                                       <td>{{$household->stove}}</td>
                                       <td>{{$household->stovenum}}</td>
                                       <td>{{$household->rice}}</td>
                                       <td>{{$household->ricenum}}</td>
                                       <td>{{$household->oven}}</td>
                                       <td>{{$household->ovennum}}</td>
                                       <td>{{$household->toaster}}</td>
                                       <td>{{$household->toasternum}}</td>
                                       <td>{{$household->dispenser}}</td>
                                       <td>{{$household->dispensernum}}</td>
                                       <td>{{$household->sala}}</td>
                                       <td>{{$household->salanum}}</td>
                                       <td>{{$household->mats}}</td>
                                       <td>{{$household->matsnum}}</td>
                                       <td>{{$household->folding}}</td>
                                       <td>{{$household->foldingnum}}</td>
                                       <td>{{$household->sofa}}</td>
                                       <td>{{$household->sofanum}}</td>
                                       <td>{{$household->othersname}}</td>
                                       <td>{{$household->othersnum}}</td>
                                       <td>{{$household->internet}}</td>
                                       <td>{{$household->house}}</td>
                                       <td>{{$household->houseinsurance}}</td>
                                       <td>{{$household->motor}}</td>
                                       <td>{{$household->motorinsurance}}</td>
                                       <td>{{$household->app}}</td>
                                       <td>{{$household->appinsurance}}</td>
                                       <td>{{$household->gcollection}}</td>
                                       <td>{{$household->burn}}</td>
                                       <td>{{$household->compost}}</td>
                                       <td>{{$household->recycle}}</td>
                                       <td>{{$household->waste}}</td>
                                       <td>{{$household->pitw}}</td>
                                       <td>{{$household->pitwo}}</td>
                                       <td>{{$household->throwing}}</td>
                                       <td>{{$household->gothers}}</td>
                                       <td>{{$household->gcollect}}</td>
                                       <td>{{$household->gnum}}</td>
                                       @if (auth()->user()->role=='Enumerator')
                                       <td>
                                          @if(request()->has('view_deleted'))
                                          <a href="{{ route('households.restore', $household->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                                          @else
                                          <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#edit1" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                                          {!! Form::open(['method' => 'DELETE','route' => ['household.destroy', $household->id],'style'=>'display:inline']) !!}
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
                              <table id="example11" class="table table-bordered table-striped table-hover dataTable nowrap" width="100%">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Crop Farming</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Poultry</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Fishing</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Foresty</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Wholesale</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Manufacturing</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Community Services</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Transportation</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Mining</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Construction</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Activities</th>
                                       <th>Cash</th>
                                       <th>Kind</th>
                                       <th>Total Net Cash</th>
                                       <th>Total Net Kind</th>
                                       <th>Remittance Cash</th>
                                       <th>Remittance Kind</th>
                                       <th>Total Salaries Cash</th>
                                       <th>Total Salaries Kind</th>
                                       <th>Remittance Cash</th>
                                       <th>Remittance Kind</th>
                                       <th>Abroad Cash</th>
                                       <th>Abroad Kind</th>
                                       <th>Domestic Cash</th>
                                       <th>Domestic Kind</th>
                                       <th>Pension Cash</th>
                                       <th>Pension Kind</th>
                                       <th>Net share Cash</th>
                                       <th>Net share Kind</th>
                                       <th>Rentals Cash</th>
                                       <th>Rentals Kind</th>
                                       <th>Interest Cash</th>
                                       <th>Interest Kind</th>
                                       <th>Dividends Cash</th>
                                       <th>Dividends Kind</th>
                                       <th>Other sources Cash</th>
                                       <th>Other sources Kind</th>
                                       <th>Total Income Other Cash</th>
                                       <th>Total Income Kind</th>
                                       <th>Total Imputed Cash</th>
                                       <th>Total Income Cash</th>
                                       <th>Total Income Kind</th>

                                       @if (auth()->user()->role=='Enumerator')
                                       <th data-orderable="false">Action</th>
                                       @endif
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($all as $household)
                                    <tr>
                                       <td>{{$household->id}}</td>

                                       <td>{{$household->crop}}</td>
                                       <td>{{$household->cropkind}}</td>
                                       <td>{{$household->cropcash}}</td>
                                       <td>{{$household->livestock}}</td>
                                       <td>{{$household->fishing}}</td>
                                       <td>{{$household->forestry}}</td>
                                       <td>{{$household->wholesale}}</td>
                                       <td>{{$household->manufacturing}}</td>
                                       <td>{{$household->community}}</td>
                                       <td>{{$household->storage}}</td>
                                       <td>{{$household->mining}}</td>
                                       <td>{{$household->construct}}</td>
                                       <td>{{$household->elsewhere}}</td>
                                       <td>{{$household->cropkind}}</td>
                                       <td>{{$household->livecash}}</td>
                                       <td>{{$household->livekind}}</td>
                                       <td>{{$household->fishcash}}</td>
                                       <td>{{$household->fishkind}}</td>
                                       <td>{{$household->forestycash}}</td>
                                       <td>{{$household->forestykind}}</td>
                                       <td>{{$household->wholesalecash}}</td>
                                       <td>{{$household->wholesalekind}}</td>
                                       <td>{{$household->manucash}}</td>
                                       <td>{{$household->manukind}}</td>
                                       <td>{{$household->servcash}}</td>
                                       <td>{{$household->servkind}}</td>
                                       <td>{{$household->transpocash}}</td>
                                       <td>{{$household->transpokind}}</td>
                                       <td>{{$household->miningcash}}</td>
                                       <td>{{$household->miningkind}}</td>
                                       <td>{{$household->constcash}}</td>
                                       <td>{{$household->constkind}}</td>
                                       <td>{{$household->actcash}}</td>
                                       <td>{{$household->actkind}}</td>
                                       <td>{{$household->totalnetincomecash}}</td>
                                       <td>{{$household->totalneticomekind}}</td>
                                       <td>{{$household->totalsalarykind}}</td>
                                       <td>{{$household->totalsalarycash}}</td>
                                       <td>{{$household->ofwcash}}</td>
                                       <td>{{$household->ofwkind}}</td>
                                       <td>{{$household->abroadcash}}</td>
                                       <td>{{$household->abroadkind}}</td>
                                       <td>{{$household->domesticcash}}</td>
                                       <td>{{$household->domestickind}}</td>
                                       <td>{{$household->pensioncash}}</td>
                                       <td>{{$household->pensionkind}}</td>
                                       <td>{{$household->netsharecash}}</td>
                                       <td>{{$household->netsharekind}}</td>
                                       <td>{{$household->rentalscash}}</td>
                                       <td>{{$household->rentalskind}}</td>
                                       <td>{{$household->interestcash}}</td>
                                       <td>{{$household->interestkind}}</td>
                                       <td>{{$household->investcash}}</td>
                                       <td>{{$household->investkind}}</td>
                                       <td>{{$household->sourcecash}}</td>
                                       <td>{{$household->sourcekind}}</td>
                                       <td>{{$household->totalgrosscash}}</td>
                                       <td>{{$household->totalgrosskind}}</td>
                                       <td>{{$household->totalimputed}}</td>
                                       <td>{{$household->totalcash}}</td>
                                       <td>{{$household->totalkind}}</td>
                                       <td>{{$household->totalincome}}</td>
                                       @if (auth()->user()->role=='Enumerator')
                                       <td>
                                          @if(request()->has('view_deleted'))
                                          <a href="{{ route('households.restore', $household->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                                          @else
                                          <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#edit2" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                                          {!! Form::open(['method' => 'DELETE','route' => ['household.destroy', $household->id],'style'=>'display:inline']) !!}
                                          {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                                          {!! Form::close() !!}
                                          @endif
                                       </td>
                                       @endif
                                    </tr>
                                    @endforeach
                              </table>
                           </div>
                           <div class="tab-pane" id="tab-table3">
                              <table id="example12" class="table table-bordered table-striped table-hover dataTable nowrap " width="100%">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Agricultural Land Tenure Status</th>
                                       <th>Area of Agricultural Land</th>
                                       <th>Temporary Crops</th>
                                       <th>Number</th>
                                       <th>Temporary Crops</th>
                                       <th>Number</th>
                                       <th>Temporary Crops</th>
                                       <th>Number</th>
                                       <th>Temporary Crops</th>
                                       <th>Number</th>
                                       <th>Temporary Crops</th>
                                       <th>Number</th>
                                       <th>Beast of burden Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Plow Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Harrow Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Mower Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Thresher/Corn sheller Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Insecticide/Pesticide sprayer Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Farm tractor Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Hand tractor Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Turtle/Mudboat Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Planter/Transplanter/Dryer Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Mechanical dryer Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Multipurpose drying pavement Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Rice/corn/feed mill Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Harvester Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Warehouse Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Farmshed Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Irrigation Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Others Number</th>
                                       <th>Agricultural Equipment Own Number</th>
                                       <th>Live animals</th>
                                       <th>Production sold</th>
                                       <th>Production cosume</th>
                                       <th>Meat</th>
                                       <th>Production sold</th>
                                       <th>Production cosume</th>
                                       <th>Milk</th>
                                       <th>Production sold</th>
                                       <th>Production cosume</th>
                                       <th>Eggs</th>
                                       <th>Production sold</th>
                                       <th>Production cosume</th>
                                       <th>Others</th>
                                       <th>Production sold</th>
                                       <th>Production cosume</th>
                                       <th>Catching Fish</th>
                                       <th>Culturing Fish</th>
                                       <th>Fishing Location</th>
                                       <th>Boat with engine and outrigger</th>
                                       <th>Number</th>
                                       <th>Boat with engine but without outrigger</th>
                                       <th>Number</th>
                                       <th>Boat without engine but with outrigger</th>
                                       <th>Number</th>
                                       <th>Boat without engine and outrigger</th>
                                       <th>Number</th>
                                       <th>Raft</th>
                                       <th>Number</th>
                                       <th>Gears</th>
                                       <th>Number</th>
                                       <th>Gears</th>
                                       <th>Number</th>
                                       <th>Gears</th>
                                       <th>Number</th>
                                       <th>Gears</th>
                                       <th>Number</th>
                                       <th>Fishpond</th>
                                       <th>Fish pen</th>
                                       <th>Fish cage</th>
                                       <th>Seaweed farm</th>
                                       <th>Oyster farm</th>
                                       <th>Mussel farm</th>
                                       <th>Fish tank</th>
                                       <th>Hatchery</th>
                                       <th>Others</th>
                                       <th>Fishes Caught</th>
                                       <th>Number</th>
                                       <th>Fishes Caught</th>
                                       <th>Number</th>
                                       <th>Fishes Caught</th>
                                       <th>Number</th>
                                       <th>Fishes Caught</th>
                                       <th>Number</th>
                                       <th>Fishes Caught</th>
                                       <th>Number</th>
                                       <th>Living years</th>
                                       <th>Crop Farming years</th>
                                       <th>Harvest (3 years ago)</th>
                                       <th>Decrease Reason</th>
                                       <th>Changed the variety of the same crop</th>
                                       <th>Reason</th>
                                       <th>Changed major crop</th>
                                       <th>Reason</th>

                                       <th>Crops</th>
                                       <th>Insurance Provider</th>
                                       <th>Agricultural equipment/facilities</th>
                                       <th>Insurance Provider</th>

                                       @if (auth()->user()->role=='Enumerator')
                                       <th data-orderable="false">Action</th>
                                       @endif
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($all as $household)
                                    <tr>
                                       <td>{{$household->id}}</td>
                                       <td>{{$household->tenurestatus}}</td>
                                       <td>{{$household->agrilandnum}}</td>
                                       <td>{{$household->tempcrops}}</td>
                                       <td>{{$household->tempcropskilo}}</td>
                                       <td>{{$household->permacrops}}</td>
                                       <td>{{$household->permaccropskilo}}</td>
                                       <td>{{$household->tcrops}}</td>
                                       <td>{{$household->tcropskilo}}</td>
                                       <td>{{$household->pcrops}}</td>
                                       <td>{{$household->pcropskilo}}</td>
                                       <td>{{$household->hcrops}}</td>
                                       <td>{{$household->hcropskilo}}</td>
                                       <td>{{$household->beastnum}}</td>
                                       <td>{{$household->beastown}}</td>
                                       <td>{{$household->plownum}}</td>
                                       <td>{{$household->plowown}}</td>
                                       <td>{{$household->harrownum}}</td>
                                       <td>{{$household->harrowown}}</td>
                                       <td>{{$household->mowernum}}</td>
                                       <td>{{$household->mowerown}}</td>
                                       <td>{{$household->cornnum}}</td>
                                       <td>{{$household->cornown}}</td>
                                       <td>{{$household->spraynum}}</td>
                                       <td>{{$household->sprayown}}</td>
                                       <td>{{$household->tractornum}}</td>
                                       <td>{{$household->tractorown}}</td>
                                       <td>{{$household->htractornum}}</td>
                                       <td>{{$household->htractorown}}</td>
                                       <td>{{$household->turtlenum}}</td>
                                       <td>{{$household->turtleown}}</td>
                                       <td>{{$household->planternum}}</td>
                                       <td>{{$household->planterown}}</td>
                                       <td>{{$household->dryernum}}</td>
                                       <td>{{$household->dryeown}}</td>
                                       <td>{{$household->mdrynum}}</td>
                                       <td>{{$household->mdryown}}</td>
                                       <td>{{$household->millnum}}</td>
                                       <td>{{$household->millown}}</td>
                                       <td>{{$household->harvesternum}}</td>
                                       <td>{{$household->harvesterown}}</td>
                                       <td>{{$household->granarynum}}</td>
                                       <td>{{$household->granaryown}}</td>
                                       <td>{{$household->shednum}}</td>
                                       <td>{{$household->shedown}}</td>
                                       <td>{{$household->pumpnum}}</td>
                                       <td>{{$household->pumpown}}</td>
                                       <td>{{$household->agriequip}}</td>
                                       <td>{{$household->agriequipnum}}</td>
                                       <td>{{$household->animals}}</td>
                                       <td>{{$household->animalssold}}</td>
                                       <td>{{$household->animalsconsume}}</td>
                                       <td>{{$household->meat}}</td>
                                       <td>{{$household->meatsold}}</td>
                                       <td>{{$household->meatconsume}}</td>
                                       <td>{{$household->milk}}</td>
                                       <td>{{$household->milksold}}</td>
                                       <td>{{$household->milkconsume}}</td>
                                       <td>{{$household->eggs}}</td>
                                       <td>{{$household->eggsold}}</td>
                                       <td>{{$household->eggconsume}}</td>
                                       <td>{{$household->otherlivestock}}</td>
                                       <td>{{$household->otherlivestocksold}}</td>
                                       <td>{{$household->otherlivestockconsume}}</td>
                                       <td>{{$household->catching}}</td>
                                       <td>{{$household->culturing}}</td>
                                       <td>{{$household->fishloc}}</td>
                                       <td>{{$household->boatone}}</td>
                                       <td>{{$household->boatoneown}}</td>
                                       <td>{{$household->boattwo}}</td>
                                       <td>{{$household->boattwoown}}</td>
                                       <td>{{$household->boatthree}}</td>
                                       <td>{{$household->boathreeown}}</td>
                                       <td>{{$household->boatfour}}</td>
                                       <td>{{$household->boatfourown}}</td>
                                       <td>{{$household->boatfive}}</td>
                                       <td>{{$household->boatfiveown}}</td>
                                       <td>{{$household->gearone}}</td>
                                       <td>{{$household->gearoneown}}</td>
                                       <td>{{$household->geartwo}}</td>
                                       <td>{{$household->geartwoown}}</td>
                                       <td>{{$household->gearthree}}</td>
                                       <td>{{$household->gearthreeown}}</td>
                                       <td>{{$household->gearfour}}</td>
                                       <td>{{$household->gearfourown}}</td>
                                       <td>{{$household->pond}}</td>
                                       <td>{{$household->fishp}}</td>
                                       <td>{{$household->fishc}}</td>
                                       <td>{{$household->seaweed}}</td>
                                       <td>{{$household->oyster}}</td>
                                       <td>{{$household->mussel}}</td>
                                       <td>{{$household->fisht}}</td>
                                       <td>{{$household->hatchery}}</td>
                                       <td>{{$household->aquaot}}</td>
                                       <td>{{$household->fishone}}</td>
                                       <td>{{$household->fishoneown}}</td>
                                       <td>{{$household->fishtwo}}</td>
                                       <td>{{$household->fishtwoown}}</td>
                                       <td>{{$household->fishthree}}</td>
                                       <td>{{$household->fishthreeown}}</td>
                                       <td>{{$household->fishfour}}</td>
                                       <td>{{$household->fishfourown}}</td>
                                       <td>{{$household->fishfive}}</td>
                                       <td>{{$household->fishfiveown}}</td>

                                       <td>{{$household->livingnum}}</td>
                                       <td>{{$household->harvestyrs}}</td>
                                       <td>{{$household->harvestr}}</td>
                                       <td>{{$household->harvestpr}}</td>
                                       <td>{{$household->samecrop}}</td>
                                       <td>{{$household->samecropr}}</td>
                                       <td>{{$household->difcrop}}</td>
                                       <td>{{$household->difcropr}}</td>
                                       <td>{{$household->cropi}}</td>
                                       <td>{{$household->cropiprov}}</td>
                                       <td>{{$household->agrif}}</td>
                                       <td>{{$household->agrifprov}}</td>
                                       @if (auth()->user()->role=='Enumerator')
                                       <td>
                                          @if(request()->has('view_deleted'))
                                          <a href="{{ route('households.restore', $household->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                                          @else
                                          <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#edit3" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                                          {!! Form::open(['method' => 'DELETE','route' => ['household.destroy', $household->id],'style'=>'display:inline']) !!}
                                          {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                                          {!! Form::close() !!}
                                          @endif
                                       </td>
                                       @endif
                                    </tr>
                                    @endforeach
                              </table>

                           </div>
                           <div class="tab-pane" id="tab-table4">
                              <table id="example13" class="table table-bordered table-striped table-hover dataTable nowrap " width="100%">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Poultry Years</th>
                                       <th>Poultry (3 years ago) </th>
                                       <th>Decrease Reason</th>
                                       <th>Insurance</th>
                                       <th>Insurance Provider</th>
                                       <th>Fishing Years</th>
                                       <th>Fishing (3 years ago) </th>
                                       <th>Decrease Reason</th>
                                       <th>Fish insurance</th>
                                       <th>Insurance Provider</th>
                                       <th>Temperature</th>
                                       <th>Electricity</th>
                                       <th>Sea Level</th>
                                       <th>Water Supply (3 years ago)</th>
                                       <th>Decrease Reason</th>
                                       <th>Flooding (3 years ago)</th>
                                       <th>Subside hours (3 years ago)</th>
                                       <th>Subside hours (12 months ago)</th>
                                       <th>Drought(3 years ago)</th>
                                       <th>Move Out</th>
                                       <th>Reason</th>
                                       <th>Evacuation (3 years ago)</th>
                                       <th>Reason</th>
                                       <th>Temporarily (3 years ago)</th>
                                       <th>Evacuation</th>
                                       @if (auth()->user()->role=='Enumerator')
                                       <th data-orderable="false">Action</th>
                                       @endif
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($all as $household)
                                    <tr>
                                       <td>{{$household->id}}</td>
                                       <td>{{$household->livestocknum}}</td>
                                       <td>{{$household->livestockc}}</td>
                                       <td>{{$household->livestockr}}</td>
                                       <td>{{$household->livestocki}}</td>
                                       <td>{{$household->livestockip}}</td>
                                       <td>{{$household->fishyrs}}</td>
                                       <td>{{$household->fishyrsc}}</td>
                                       <td>{{$household->fishr}}</td>
                                       <td>{{$household->fishi}}</td>
                                       <td>{{$household->fiship}}</td>
                                       <td>{{$household->temp}}</td>
                                       <td>{{$household->brownout}}</td>
                                       <td>{{$household->sealevel}}</td>
                                       <td>{{$household->water}}</td>
                                       <td>{{$household->waterr}}</td>
                                       <td>{{$household->floodt}}</td>
                                       <td>{{$household->floodhrs}}</td>
                                       <td>{{$household->floodmnths}}</td>
                                       <td>{{$household->drought}}</td>
                                       <td>{{$household->droughtnum}}</td>
                                       <td>{{$household->moveout}}</td>
                                       <td>{{$household->moveoutr}}</td>
                                       <td>{{$household->evacuate}}</td>
                                       <td>{{$household->evacuateloc}}</td>
                                       <td>{{$household->evacuatenum}}</td>
                                       @if (auth()->user()->role=='Enumerator')
                                       <td>
                                          @if(request()->has('view_deleted'))
                                          <a href="{{ route('households.restore', $household->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                                          @else
                                          <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#edit4" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                                          {!! Form::open(['method' => 'DELETE','route' => ['household.destroy', $household->id],'style'=>'display:inline']) !!}
                                          {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                                          {!! Form::close() !!}
                                          @endif
                                       </td>
                                       @endif
                                    </tr>
                                    @endforeach
                              </table>
                           </div>
                           <div class="tab-pane" id="tab-table5">
                              <table id="example14" class="table table-bordered table-striped table-hover dataTable nowrap " width="100%">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Typhoon</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Flood</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Drought</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Earthquake</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Volcanic eruption</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Landsline/mudslide</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Tsunami</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Fire</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Forest fire</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Armed conflict</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Others</th>
                                       <th>Number</th>
                                       <th>Assistance</th>
                                       <th>Assistance Provider</th>
                                       <th>Disaster Preparedness Kit</th>
                                       <th>Water</th>
                                       <th>Number (days will last)</th>
                                       <th>Food</th>
                                       <th>Number (days will last)</th>
                                       <th>Matches/lighter</th>
                                       <th>Number (days will last)</th>
                                       <th>Flaslight/Emergency light</th>
                                       <th>Number (days will last)</th>
                                       <th>Radio/Transistor</th>
                                       <th>Number (days will last)</th>
                                       <th>Candle</th>
                                       <th>Number (days will last)</th>
                                       <th>Medical Kit</th>
                                       <th>Number (days will last)</th>
                                       <th>Whistle</th>
                                       <th>Number (days will last)</th>
                                       <th>Clothes</th>
                                       <th>Number (days will last)</th>
                                       <th>Blanket</th>
                                       <th>Number (days will last)</th>
                                       <th>Battery</th>
                                       <th>Number (days will last)</th>
                                       <th>Important Documents</th>
                                       <th>Number (days will last)</th>
                                       <th>Others</th>
                                       <th>Number (days will last)</th>
                                       <th>Hunger</th>
                                       <th>1st Month Name</th>
                                       <th>Number of Days</th>
                                       <th>2nd Month Name</th>
                                       <th>Number of Days</th>
                                       <th>3rd Month Name</th>
                                       <th>Number of Days</th>
                                       <th>Death</th>
                                       <th>Death Name</th>
                                       <th>Gender</th>
                                       <th>Age</th>
                                       <th>Cause</th>

                                       <th>Death Name</th>
                                       <th>Gender</th>
                                       <th>Age</th>
                                       <th>Cause</th>

                                       <th>Death Name</th>
                                       <th>Gender</th>
                                       <th>Age</th>
                                       <th>Cause</th>

                                       @if (auth()->user()->role=='Enumerator')
                                       <th data-orderable="false">Action</th>
                                       @endif
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($all as $household)
                                    <tr>
                                       <td>{{$household->id}}</td>
                                       <td>{{$household->typhoon}}</td>
                                       <td>{{$household->typhoonnum}}</td>
                                       <td>{{$household->typhoona}}</td>
                                       <td>{{$household->typhoonsrc}}</td>
                                       <td>{{$household->flood}}</td>
                                       <td>{{$household->floodnum}}</td>
                                       <td>{{$household->flooda}}</td>
                                       <td>{{$household->floodsrc}}</td>
                                       <td>{{$household->drough}}</td>
                                       <td>{{$household->droughnum}}</td>
                                       <td>{{$household->droughta}}</td>
                                       <td>{{$household->droughtsrc}}</td>
                                       <td>{{$household->quake}}</td>
                                       <td>{{$household->quakenum}}</td>
                                       <td>{{$household->quakea}}</td>
                                       <td>{{$household->quakesrc}}</td>
                                       <td>{{$household->erupt}}</td>
                                       <td>{{$household->eruptnum}}</td>
                                       <td>{{$household->erupta}}</td>
                                       <td>{{$household->eruptsrc}}</td>
                                       <td>{{$household->landslide}}</td>
                                       <td>{{$household->landslidenum}}</td>
                                       <td>{{$household->landslinea}}</td>
                                       <td>{{$household->landslinesrc}}</td>
                                       <td>{{$household->tsunami}}</td>
                                       <td>{{$household->tsunaminum}}</td>
                                       <td>{{$household->tsunamia}}</td>
                                       <td>{{$household->tsunamisrc}}</td>
                                       <td>{{$household->fire}}</td>
                                       <td>{{$household->firenum}}</td>
                                       <td>{{$household->firea}}</td>
                                       <td>{{$household->firesrc}}</td>
                                       <td>{{$household->forest}}</td>
                                       <td>{{$household->forestnum}}</td>
                                       <td>{{$household->foresta}}</td>
                                       <td>{{$household->forestsrc}}</td>
                                       <td>{{$household->conflict}}</td>
                                       <td>{{$household->conflictnum}}</td>
                                       <td>{{$household->conflicta}}</td>
                                       <td>{{$household->conflictsrc}}</td>
                                       <td>{{$household->osname}}</td>
                                       <td>{{$household->osnum}}</td>
                                       <td>{{$household->osa}}</td>
                                       <td>{{$household->osasrc}}</td>
                                       <td>{{$household->disasterprepaidnesskit}}</td>
                                       <td>{{$household->watery}}</td>
                                       <td>{{$household->waterynum}}</td>
                                       <td>{{$household->food}}</td>
                                       <td>{{$household->foodnum}}</td>
                                       <td>{{$household->match}}</td>
                                       <td>{{$household->matchnum}}</td>
                                       <td>{{$household->light}}</td>
                                       <td>{{$household->lightnum}}</td>
                                       <td>{{$household->radio}}</td>
                                       <td>{{$household->radionum}}</td>
                                       <td>{{$household->candle}}</td>
                                       <td>{{$household->candlenum}}</td>
                                       <td>{{$household->kit}}</td>
                                       <td>{{$household->kitnum}}</td>
                                       <td>{{$household->whistle}}</td>
                                       <td>{{$household->whistlenum}}</td>
                                       <td>{{$household->clothe}}</td>
                                       <td>{{$household->clothenum}}</td>
                                       <td>{{$household->blanket}}</td>
                                       <td>{{$household->blanketnum}}</td>
                                       <td>{{$household->batt}}</td>
                                       <td>{{$household->battnum}}</td>
                                       <td>{{$household->docu}}</td>
                                       <td>{{$household->docunum}}</td>
                                       <td>{{$household->othr}}</td>
                                       <td>{{$household->othrnum}}</td>
                                       <td>{{$household->hungerhappen}}</td>
                                       <td>{{$household->nhunger}}</td>
                                       <td>{{$household->mhunger}}</td>
                                       <td>{{$household->nhungers}}</td>
                                       <td>{{$household->mhungers}}</td>
                                       <td>{{$household->nhungert}}</td>
                                       <td>{{$household->mhungert}}</td>
                                       <td>{{$household->deathhousehold}}</td>
                                       <td>{{$household->deatho}}</td>
                                       <td>{{$household->deathosex}}</td>
                                       <td>{{$household->deathotime}}</td>
                                       <td>{{$household->deathocause}}</td>
                                       <td>{{$household->deatht}}</td>
                                       <td>{{$household->deathtsex}}</td>
                                       <td>{{$household->deathttime}}</td>
                                       <td>{{$household->deathtcause}}</td>
                                       <td>{{$household->deathth}}</td>
                                       <td>{{$household->deaththsex}}</td>
                                       <td>{{$household->deaththtime}}</td>
                                       <td>{{$household->deatthcause}}</td>
                                       @if (auth()->user()->role=='Enumerator')
                                       <td>
                                          @if(request()->has('view_deleted'))
                                          <a href="{{ route('households.restore', $household->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                                          @else
                                          <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#edit5" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                                          {!! Form::open(['method' => 'DELETE','route' => ['household.destroy', $household->id],'style'=>'display:inline']) !!}
                                          {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                                          {!! Form::close() !!}
                                          @endif
                                       </td>
                                       @endif
                                    </tr>
                                    @endforeach
                              </table>
                           </div>
                           <div class="tab-pane" id="tab-table6">
                              <table id="example15" class="table table-bordered table-striped table-hover dataTable nowrap" width="100%">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <th>Sustainable Livelihood Program</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Food for Work</th>
                                       <th>Program Name</th>
                                       <th>Household Member Covmber Name</th>
                                       <th>Implemener Number</th>
                                       <th>Household Metor</th>
                                       <th>Cash for Work</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Social Pension for the Indigent Senior Citizens</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Pantawid Pamilyang Pilipino Program </th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Agrarian Reform Community
                                          Development Program</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Training for Work Scholarship
                                          Program</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Community-Based Employment
                                          Program</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Other health insurance</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Health assistance</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Supplemental feeding</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Education/scholarship program </th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Skills or livelihood training Program</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Credit Program</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Housing Program</th>
                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       <th>Other Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Other Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>
                                       <th>Other Program Name</th>
                                       <th>Household Member Cover Number</th>
                                       <th>Household Member Name</th>
                                       <th>Implementor</th>

                                       @if (auth()->user()->role=='Enumerator')
                                       <th data-orderable="false">Action</th>
                                       @endif
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($all as $household)
                                    <tr>
                                       <td>{{$household->id}}</td>
                                       <td>{{$household->slp}}</td>
                                       <td>{{$household->slpname}}</td>
                                       <td>{{$household->memo}}</td>
                                       <td>{{$household->memop}}</td>
                                       <td>{{$household->memoi}}</td>


                                       <td>{{$household->ffw}}</td>
                                       <td>{{$household->ffwname}}</td>
                                       <td>{{$household->memtw}}</td>
                                       <td>{{$household->memtwp}}</td>
                                       <td>{{$household->memtwpi}}</td>

                                       <td>{{$household->cfw}}</td>
                                       <td>{{$household->cfwname}}</td>
                                       <td>{{$household->memth}}</td>
                                       <td>{{$household->memthp}}</td>
                                       <td>{{$household->memthpi}}</td>

                                       <td>{{$household->pension}}</td>
                                       <td>{{$household->pensionaname}}</td>
                                       <td>{{$household->memf}}</td>
                                       <td>{{$household->memfp}}</td>
                                       <td>{{$household->memfpi}}</td>

                                       <td>{{$household->ppp}}</td>
                                       <td>{{$household->pppname}}</td>
                                       <td>{{$household->memfiv}}</td>
                                       <td>{{$household->memfip}}</td>
                                       <td>{{$household->memfipi}}</td>

                                       <td>{{$household->arcdp}}</td>
                                       <td>{{$household->arcdpname}}</td>
                                       <td>{{$household->mems}}</td>
                                       <td>{{$household->memsp}}</td>
                                       <td>{{$household->memspi}}</td>





                                       <td>{{$household->twsp}}</td>
                                       <td>{{$household->twspname}}</td>
                                       <td>{{$household->memse}}</td>
                                       <td>{{$household->memsep}}</td>
                                       <td>{{$household->memsepi}}</td>



                                       <td>{{$household->cbep}}</td>
                                       <td>{{$household->cbepname}}</td>
                                       <td>{{$household->meme}}</td>
                                       <td>{{$household->memep}}</td>
                                       <td>{{$household->memepi}}</td>



                                       <td>{{$household->ohi}}</td>
                                       <td>{{$household->ohiname}}</td>
                                       <td>{{$household->memn}}</td>
                                       <td>{{$household->memnp}}</td>
                                       <td>{{$household->memnpi}}</td>

                                       <td>{{$household->othi}}</td>
                                       <td>{{$household->memnt}}</td>
                                       <td>{{$household->memntp}}</td>
                                       <td>{{$household->memntpi}}</td>



                                       <td>{{$household->health}}</td>
                                       <td>{{$household->healthname}}</td>
                                       <td>{{$household->memte}}</td>
                                       <td>{{$household->memtep}}</td>
                                       <td>{{$household->memtepi}}</td>


                                       <td>{{$household->namehealth}}</td>
                                       <td>{{$household->memten}}</td>
                                       <td>{{$household->memtenp}}</td>
                                       <td>{{$household->memtenpi}}</td>



                                       <td>{{$household->feeding}}</td>
                                       <td>{{$household->feedingname}}</td>
                                       <td>{{$household->memel}}</td>
                                       <td>{{$household->memelp}}</td>
                                       <td>{{$household->memelpi}}</td>


                                       <td>{{$household->namefeeding}}</td>
                                       <td>{{$household->memele}}</td>
                                       <td>{{$household->memelep}}</td>
                                       <td>{{$household->memelepi}}</td>



                                       <td>{{$household->scholar}}</td>
                                       <td>{{$household->namescholar}}</td>
                                       <td>{{$household->memtwe}}</td>
                                       <td>{{$household->memtwep}}</td>
                                       <td>{{$household->memtwepi}}</td>

                                       <td>{{$household->scholarname}}</td>
                                       <td>{{$household->memtwel}}</td>
                                       <td>{{$household->memtwelp}}</td>
                                       <td>{{$household->memtwelpi}}</td>

                                       <td>{{$household->sltrp}}</td>
                                       <td>{{$household->sltrpname}}</td>
                                       <td>{{$household->memthr}}</td>
                                       <td>{{$household->memthrp}}</td>
                                       <td>{{$household->memthrpi}}</td>

                                       <td>{{$household->namesltrp}}</td>
                                       <td>{{$household->memthri}}</td>
                                       <td>{{$household->memthrip}}</td>
                                       <td>{{$household->memthripi}}</td>

                                       <td>{{$household->credit}}</td>
                                       <td>{{$household->namecredit}}</td>
                                       <td>{{$household->memfou}}</td>
                                       <td>{{$household->memfoup}}</td>
                                       <td>{{$household->memfoupi}}</td>

                                       <td>{{$household->creditname}}</td>
                                       <td>{{$household->memfour}}</td>
                                       <td>{{$household->memfourp}}</td>
                                       <td>{{$household->memfourpi}}</td>

                                       <td>{{$household->housing}}</td>
                                       <td>{{$household->housingname}}</td>
                                       <td>{{$household->memfi}}</td>
                                       <td>{{$household->memfifp}}</td>
                                       <td>{{$household->memfifpi}}</td>


                                       <td>{{$household->namehousing}}</td>
                                       <td>{{$household->memfif}}</td>
                                       <td>{{$household->memfiftp}}</td>
                                       <td>{{$household->memfiftpi}}</td>

                                       <td>{{$household->programname}}</td>
                                       <td>{{$household->memsix}}</td>
                                       <td>{{$household->memsixp}}</td>
                                       <td>{{$household->memsixpi}}</td>

                                       <td>{{$household->nameprogram}}</td>
                                       <td>{{$household->memsixt}}</td>
                                       <td>{{$household->memsixtp}}</td>
                                       <td>{{$household->memsixtpi}}</td>

                                       <td>{{$household->programoname}}</td>
                                       <td>{{$household->memsixte}}</td>
                                       <td>{{$household->memsixtep}}</td>
                                       <td>{{$household->memsixtepi}}</td>


                                       @if (auth()->user()->role=='Enumerator')
                                       <td>
                                          @if(request()->has('view_deleted'))
                                          <a href="{{ route('households.restore', $household->id) }}" class="btn btn-success btn-sm"><i class="fas fa-rotate-left"></i></a>
                                          @else
                                          <a href="#" button class="btn btn-sm btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#edit6" title="Edit"><i class="fa-solid fa-pen-to-square"></i> </button></a>
                                          {!! Form::open(['method' => 'DELETE','route' => ['household.destroy', $household->id],'style'=>'display:inline']) !!}
                                          {!! Form::button('<i class="fas fa-solid fa-box-archive" aria-hidden="true"></i>', ['class' => 'btn btn-warning btn-sm' ,'type' =>'submit']) !!}
                                          {!! Form::close() !!}
                                          @endif
                                       </td>
                                       @endif
                                    </tr>
                                    @endforeach
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
</div>
@include('enumerator.add_household')
@include('enumerator.edit_households')
@include('enumerator.import')
<script src="{{asset('plugins/residents/household.js')}}"></script>
@endsection