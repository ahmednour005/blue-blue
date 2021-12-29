     <!-- Topbar Start -->
     <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-end mb-0">
    
               
        
             
        
                <li class="dropdown d-none d-lg-inline-block">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                        <i class="fe-maximize noti-icon"></i>
                    </a>
                </li>
        
                
        
              
               
        
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('dashboard/assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1">
                            {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-1">مرحبأ بك !</h6>
                            <h6 class="text-overflow m-1"> <span class="badge bg-info"> حساب مدير</span></h6>
                        </div>
    
    
                        <!-- item-->
                        <a href="{{ route('myprofile') }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-reactivate"></i>
                            <span>الحساب الشخصي</span>
                        </a>
    
                        <!-- item-->
                        <a href="{{ route('change-password') }}" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>تغيير كلمة المرور</span>
                        </a>
    
                        <!-- item-->
    
    
                        <div class="dropdown-divider"></div>
    
                        <!-- item-->
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="dropdown-item notify-item">
                            <i class="fe-log-out me-1"></i>
                            <span>خروج</span>
                        </a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
    
                    </div>
                </li>
    
        
                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>
        
            </ul>
        
            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{route('home')}}" class="logo logo-dark text-center">
                    <span class="logo-sm">
                        <img src="{{asset('dashboard/assets/images/logo-sm.png')}}" alt="" height="22">
                        <!-- <span class="logo-lg-text-light">UBold</span> -->
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('dashboard/assets/images/logo-dark.png')}}" alt="" height="20">
                        <!-- <span class="logo-lg-text-light">U</span> -->
                    </span>
                </a>
        
                <a href="{{route('home')}}" class="logo logo-light text-center">
                    <span class="logo-sm">
                        <img src="{{asset('dashboard/assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('dashboard/assets/images/logo-light.png')}}" alt="" height="20">
                    </span>
                </a>
            </div>
        
            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>
    
                <li>
                    <!-- Mobile menu toggle (Horizontal Layout)-->
                    <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>   
                
               
        
               
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->