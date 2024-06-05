 <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #6699FF;">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
     </ul>
     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <div class="user-panel d-flex">
             <div class="image">
                 <a href="#" class="text-black text-lg" style="text-decoration: none; "> {{ Auth::user()->name }}
                     <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                     <i class="fa-solid fa-person-walking-dashed-line-arrow-right fa-xl" style="color: red; margin-left: 10px;"></i>
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </a>
             </div>
                <div class="info"></div>
         </div>
     </ul>
 </nav>
 <!-- /.navbar -->