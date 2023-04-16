<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="{{asset('dist/img/seal.png')}}" alt="Tagaytay Seal" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light "><small>Tagaytay Profiling System</small></span>
  </a>
  <div class="sidebar">
    <!-- Sidebar -->
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('dist/img/default.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="info">
        @auth
        <a class="d-block">Hello, <b> {{auth()->user()->username}}!</b></a>
        @endauth
      </div>
    </div>
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-fw fa-search"></i>
          </button>
        </div>
      </div>
      <div class="sidebar-search-results">
        <div class="list-group">
          <a href="#" class="list-group-item">
            <div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div>
            <div class="search-path">

            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-collapse-hide-child nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        @auth
        @if(auth()->user()->role=='System Admin')

        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Users
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        
        <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('users.create')}}" class="nav-link ">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Add User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('users.index')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>View Users</p>
              </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
          <a href="{{route('residents.index')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Residents
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-house-chimney"></i>
            <p>
              Barangays
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('asisan')}}" class="nav-link ">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Asisan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('bagongtubig')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Bagong Tubig</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('calabuso')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Calabuso</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('dapdap_east')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Dapdap East</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('dapdap_west')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Dapdap West</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('francisco')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Francisco</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('guinhawa_north')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Guinhawa North</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('guinhawa_south')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Guinhawa South</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('iruhin_central')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Iruhin Central</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('iruhin_east')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Iruhin East</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('iruhin_west')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Iruhin West</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('kaybagal_central')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Kaybagal Central</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('kaybagal_north')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Kaybagal North</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('kaybagal_south')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Kaybagal South</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('magasawang_ilat')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Mag-asawang Ilat</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('maharlika_east')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Maharalika East</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('maharlika_west')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Maharlika West</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('maitim_central')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Maitim II Central</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('maitim_east')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Maitim II East</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('maitim_west')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Maitim II West</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('mendezcrossing_east')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Mendez Crossing East</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('mendezcrossing_west')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Mendez Crossing West</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('neogan')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Neogan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('patutongmalaki_north')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Patutong Malaki North</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('patutongmalaki_south')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Patutong Malaki South</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('sambong')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Sambong</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('sanjose')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>San Jose</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('silangcrossing_east')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Silang Crossing East</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('silangcrossing_west')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Silang Crossing West</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('sungay_east')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Sungay East</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('sungay_west')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Sungay West</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('tolentino_east')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Tolentino East</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('tolentino_west')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Tolentino West</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('zambal')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Zambal</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{route('household.index')}}" class="nav-link">
            <i class="nav-icon fas fa-house-user"></i>
            <p>
              Households
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('reports')}}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Reports
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('activityLog')}}" class="nav-link">
            <i class="nav-icon fa fa-history"></i>
            <p>
              Logs
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('backup.backups')}}" class="nav-link">
            <i class="nav-icon fa fa-database"></i>
            <p>
              Backups
            </p>
          </a>
        </li>
        @else

        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Residents
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
      
        
        <ul class="nav nav-treeview">
        <li class="nav-item">
              <a href="{{route('residents.index')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>View Residents</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('residents.index', ['view_deleted' => 'ArchivedResidents']) }}" class="nav-link ">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Archive</p>
              </a>
            </li>
            
        </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-house-user"></i>
            <p>
              Households
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
        <li class="nav-item">
              <a href="{{route('household.index')}}" class="nav-link">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>View Households</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('household.index', ['view_deleted' => 'ArchivedHouseholds']) }}" class="nav-link ">
                <i class="fas fa-angle-right nav-icon"></i>
                <p>Archive</p>
              </a>
            </li>
            
        </ul>
        </li>


        @endif
        @endauth
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
  </div>
</aside>
<script>

</script>