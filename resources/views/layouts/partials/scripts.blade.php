<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<!-- plugins:js -->
<script src="{{ asset('/') }}backend/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('/') }}backend/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
<script src="{{ asset('/') }}backend/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('/') }}backend/vendors/raphael/raphael.min.js"></script>
<script src="{{ asset('/') }}backend/vendors/morris.js/morris.min.js"></script>
<script src="{{ asset('/') }}backend/vendors/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('/') }}backend/js/off-canvas.js"></script>
<script src="{{ asset('/') }}backend/js/hoverable-collapse.js"></script>
<script src="{{ asset('/') }}backend/js/misc.js"></script>
<script src="{{ asset('/') }}backend/js/settings.js"></script>
<script src="{{ asset('/') }}backend/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('/') }}backend/js/dashboard.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}');
        @endforeach
    @endif
</script>


{!! Toastr::message() !!}

@stack('scripts')
<!-- End custom js for this page-->
</body>

</html>
