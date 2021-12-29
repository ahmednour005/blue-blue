<!-- Vendor js -->
<script src="{{asset('dashboard/assets/js/vendor.min.js')}}"></script>
<!-- App js-->
<script src="{{asset('dashboard/assets/js/app.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('dashboard/assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/pages/form-advanced.init.js')}}"></script>
<script>
    $('textarea').val(function(i,v){
    return v.replace(/\s+/g,' ').replace(/>(\s)</g,'>\n<');
});
</script>
@include('sweet::alert')