<!DOCTYPE html>
<html lang="ar">
    <head>
        
        @include('layouts-admin.style')

        @yield('css')

    </head>

    
    <!-- body start -->
    <body class="loading" data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('layouts-admin.menu')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts-admin.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    @yield('content') 
                    <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts-admin.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- setting Sidebar -->
        @include('layouts-admin.setting')
        <!-- /setting-bar -->

       
        @include('layouts-admin.script')
        

        @yield('js') 

        
        
    </body>
</html>