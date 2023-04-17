@extends('backend.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sambong Residents</h1>
        </div>
        <div class="col-sm-6 text-sm">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}" style="color:#444;"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Sambong Residents</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <hr  />
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div id="test">
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
        
                  <th>Name</th>
                    <th>Gender</th>
                   
                    <th>Age</th>
              
                </thead>
                <tbody>
                @foreach ($all as $resident)
                  <tr>
                 
                  <td>{{$resident->householdmembername}}</td>
                  <td>{{$resident->gender}}</td>
                    <td>{{$resident->age}}</td>
  
                  </tr>
                  @endforeach


                </tbody>

              </table>

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

@endsection