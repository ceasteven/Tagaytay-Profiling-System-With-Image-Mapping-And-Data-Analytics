<div class="col-md-4 col-sm-8 col-xs-12">
  <!-- small box -->
  <div class="small-box" style="background-color: #fc6c85;">
    <div class="inner">
      <h3 style="color: white;"><strong>{{$users}}</strong> </h3>
      <p style="color: white;">Total Users</p>
    </div>
    <div class="icon">
      <i class="fas fa-user"></i>
    </div>
    <a href="{{route('users.index')}}" class="small-box-footer">View users <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>

<div class="col-md-4 col-sm-8 col-xs-12">
  <!-- small box -->
  <div class="small-box bg-info">
    <div class="inner">
      <h3><strong>{{$resident}}</strong></h3>
      <p>Total Residents</p>
    </div>
    <div class="icon">
      <i class="fas fa-users"></i>
    </div>
    <a href="{{route('residents.index')}}" class="small-box-footer">View residents <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->

<div class="col-md-4 col-sm-8 col-xs-12">
  <!-- small box -->
  <div class="small-box bg-success">
    <div class="inner">
      <h3><strong>{{$hcn}}</strong></h3>
      <p>Total Households</p>
    </div>
    <div class="icon">
      <i class="fas fa-house-user"></i>
    </div>
    <a href="{{route('household.index')}}" class="small-box-footer">View households <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
  