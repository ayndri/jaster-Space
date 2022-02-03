<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}" ></script>
<!-- scrollbar js-->
<script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/config.js')}}"></script>
<script src="{{ asset('js/iziToast.js') }}"></script>
<!-- Plugins JS start-->
<script id="menu" src="{{asset('assets/js/sidebar-menu.js')}}"></script>
@yield('script')



<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>

<script>
    
    function validate(evt) {
 var theEvent = evt || window.event;
 
 // Handle paste
 if (theEvent.type === 'paste') {
 key = event.clipboardData.getData('text/plain');
 } else {
 // Handle key press
 var key = theEvent.keyCode || theEvent.which;
 key = String.fromCharCode(key);
 }
 var regex = /[0-9]|\./;
 if( !regex.test(key) ) {
 theEvent.returnValue = false;
 if(theEvent.preventDefault) theEvent.preventDefault();
 }
 }
 </script>