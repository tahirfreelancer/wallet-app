<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="o">

    <title> {{$title}} </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('admin/assets/css/vendors_css.css')}}">
	<!--amcharts -->
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('admin/assets/css/export.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/skin_color.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">
     
  </head>

<body class="hold-transition dark-skin theme-primary sidebar-mini fixed">
	
<div class="wrapper">
	<div id="loader"></div>
    @include('admin.includes/header')
    @include('admin.includes/aside')
    <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Content Header (Page header) -->	  
				<div class="content-header">
					<div class="d-flex align-items-center">
						<div class="me-auto">
							<h4 class="page-title">{{$title}}</h4>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Dashboard</li>
										<li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>

				<!-- Main content -->
				
				@yield('content')
				@include('admin.includes/footer')
				
				<!-- /.content -->
			
			</div>
		</div>
  <!-- /.content-wrapper -->
 
</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="{{asset('admin/assets/js/vendors.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('admin/assets/icons/feather-icons/feather.min.js')}}"></script>
	
	<script src="{{asset('admin/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/Flot/jquery.flot.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/Flot/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/Flot/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/Flot/jquery.flot.categories.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.15/amcharts.js" integrity="sha512-PEzmoGmMqKKBVwfe025/Qs9fx7FHwfUzuAqUIwad/t10LOMkY/9ULED7/w8rzZ7FhhEDhmPKr1qs08sEB3bZoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{asset('admin/assets/js/patterns.js')}}"></script>
	<script src="{{asset('admin/assets/js/gauge.js')}}"></script>
	<script src="{{asset('admin/assets/js/serial.js')}}"></script>
	<script src="{{asset('admin/assets/js/amstock.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.15/plugins/dataloader/dataloader.min.js" integrity="sha512-KbH4UpNBSE0YTDPGvFyD7EEVGNadBtNzdTBO/kUBVnz+lHAgPY5noZNx5Wqz7+7HNE9tB8SIFacyNl+i3sviOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.15/plugins/animate/animate.min.js" integrity="sha512-HnCb5OSSzK8rDYWjieZT3wLwqaBkRI5FMxdTIQelCt4VKJzSAHhWuDgU0io45PRMP+8faNZ14U6LtHUaehm0aA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.15/plugins/export/export.min.js" integrity="sha512-VqM/gOsUoEugch+KWO8vXLU6JO747XxopC9dabT46kWz1Me0TR9wU6TRX+g4Qof2mbrPlAPiTTKSu8zXsFC/AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{asset('admin/assets/js/vendors.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/pie.js')}}"></script>
	<script src="{{asset('admin/assets/js/light.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js')}}"></script>
	
	<!-- Crypto Admin App -->
	<script src="{{asset('admin/assets/js/template.js')}}"></script>
	<script src="{{asset('admin/assets/js/pages/dashboard32.js')}}"></script>
	<script src="{{asset('admin/assets/js/pages/dashboard32-chart.js')}}"></script>
	<script src="{{asset('admin/assets/js/pages/widget-flot-charts.js')}}"></script>
	
</body>
</html>
