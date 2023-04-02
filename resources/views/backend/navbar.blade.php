 <!-- Navbar -->
 
 <nav class="main-header navbar navbar-expand navbar-light" style="background-color: #30819C;">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     <li class="nav-item">
       <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="color:black">
       <i class="fas fa-regular fa-expand"></i>
       </a>
     </li>
     <li class="dropdown user user-menu">
       <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black">
         <i class="fa fa-user"></i>
         <span><i class="caret"></i></span>
       </a>
       <!-- <img src="{{asset('dist/img/123.jpg')}}" class="user-image" style="max-height:120px;margin:0 auto;" alt="User Image"> -->
       </a>
       <ul class="dropdown-menu">
         <li class="user-header" style="background-color: #30819C;">
           <img src="{{asset('dist/img/default.jpg')}}" class="img-circle" alt="User Image">
           <p>
            @auth
             <a style="color:#fff;"> {{auth()->user()->name}}</a>
             @endauth
           </p>
         </li>

         <li class="user-body">
         <div class="float-left">
             <!-- <a href="{{route('change_password')}}" class="btn btn-default btn-flat">Change Password</a> -->
           </div>
           <div class="float-right">
             <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat"><i class="fas fa-sign-out-alt"></i> Log out</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST">
               @csrf

             </form>
           </div>
         </li>
       </ul>
     </li>


   </ul>
 </nav>
 <!-- /.navbar -->