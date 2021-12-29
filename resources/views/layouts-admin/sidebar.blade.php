<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

      <!-- User box -->
      <div class="user-box text-center">
        <img src="{{asset('dashboard/assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme"
            class="rounded-circle avatar-md">
        <div class="dropdown">
            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                data-bs-toggle="dropdown">{{auth()->user()->name}}</a>
            <div class="dropdown-menu user-pro-dropdown">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user me-1"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings me-1"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock me-1"></i>
                    <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="dropdown-item notify-item">
                    <i class="fe-log-out me-1"></i>
                    <span>خروج</span>
                </a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </div>
        </div>
        <p class="text-muted">{{auth()->user()->email}}</p>
    </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">


                <li class="{{active_link('admin/dashboard')}}">
                    <a href="{{route('dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span>   اعدادات عامة</span>
                    </a>
                </li>

                <li class="{{active_link('admin/print/categories')}}">
                    <a href="{{route('category-print.index')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span>   تصنيفات  للطباعة</span>
                    </a>
                </li>

                <li class="{{active_link('category-print/create')}}">
                    <a href="{{route('category-print.create')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span>   اضافة تصنيف   للطباعة</span>
                    </a>
                </li>

                <li class="{{active_link('admin/translation/categories')}}">
                    <a href="{{route('category-translation.index')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span>   لغات   الترجمة</span>
                    </a>
                </li>


                <li class="{{active_link('category-translation/create')}}">
                    <a href="{{route('category-translation.create')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span>   اضافة لغة   ترجمة</span>
                    </a>
                </li>
                <li class="{{active_link('contact/create')}}">
                    <a href="{{route('contacts.index')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> رسائل العملاء</span>
                    </a>
                </li>

      
                <li class="{{active_link('testmonial/all')}}">
                    <a href="{{route('testmonial.index')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span>كل اراء العملاء</span>
                    </a>
                </li>
                <li class="{{active_link('testmonial/create')}}">
                    <a href="{{route('testmonial.create')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span>أضافة اراء العملاء</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
