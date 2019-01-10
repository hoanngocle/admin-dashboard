    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('plugins/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('js/theme/default.min.js') }}"></script>
    <script src="{{ asset('js/apps.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
    <script src="{{ asset('plugins/nvd3/build/nv.d3.js') }}"></script>
    <script src="{{ asset('plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
    <script src="{{ asset('plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('js/admin/dashboard-v2.min.js') }}"></script>

    <!-- ================== END BASE JS ================== -->
    <script>
        $(document).ready(function() {
            App.init();
            DashboardV2.init();
        });
    </script>
