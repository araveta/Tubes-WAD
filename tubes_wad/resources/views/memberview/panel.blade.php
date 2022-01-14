<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>Rent Grapher | <?php echo $judul;?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset ('lte/lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="{{asset('lte/plugins/datatable/jquery.dataTables.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lte/plugins/datatable/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('lte/plugins/datatable/dataTables.bootstrap5.min.css')}}">

  <!-- Select2 -->
	<link rel="stylesheet" href="{{asset('lte/plugins/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/select2/select2-bootstrap4.min.css')}}">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{asset('lte/plugins/ekko-lightbox/ekko-lightbox.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('lte/lte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('lte/lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
  
  @include('memberview/header')

  @include('memberview/sidebar')

  @yield('content')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  @include('memberview/footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset ('lte/lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ('lte/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('lte/plugins/datatable/jquery.dataTables.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('lte/plugins/select2/select2.full.min.js')}}"></script>

<script src="{{asset('lte/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('lte/lte/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('lte/lte/dist/js/pages/dashboard2.js')}}"></script>

<script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>
  
<script>

	$(document).ready( function () {
		$('#myTable').DataTable( {
        "scrollX": true
    	});
	});

  $(document).ready(function() {
    $('#myTable2').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
  } );

    $(function () {
		//Initialize Select2 Elements
    	$('.select2').select2()

		//Initialize Select2 Elements
		$('.select2bs4').select2({
      		theme: 'bootstrap4'
    	})
    });
  </script>

  
    
    
</body>
</html>
