<x-header>

</x-header>

  <body>
    <!-- Begin page -->
    <div id="wrapper">
      <!-- Topbar Start -->
        <x-topbarUser>

        </x-topbarUser>
      <!-- end Topbar -->

      <!-- ========== Left Sidebar Start ========== -->

            <x-sidebar>

            </x-sidebar>

      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="content-page">
        <div class="content">
          <!-- Start Content-->

            @yield('content')

        <!-- content -->

        <!-- Footer Start -->
        <x-footer>

        </x-footer>
        <!-- end Footer -->
      </div>

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->


    <!-- Scripts to load js -->
    @yield('scripts')

  </body>
</html>
