<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('front-end/assets/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('front-end/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('front-end/assets/css/skin_color.css')}}">
     
  </head>

<body class="theme-warning bg-dark-body">

    @include('includes/header')  
    @yield('content')
	@include('includes/footer')   
        
	
	<!-- Vendor JS -->
	<script src="{{asset('front-end/assets/js/vendors.min.js')}}"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="{{asset('front-end/assets/corenav-master/coreNavigation-1.1.3.js')}}"></script>
    <script src="{{asset('front-end/assets/js/nav.js')}}"></script>
	<script src="{{asset('front-end/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js')}}"></script>
	<script src="{{asset('front-end/assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	<script src="{{asset('front-end/assets/js/particles.js')}}"></script>
	<script src="{{asset('front-end/assets/js/app.js')}}"></script>
	
	<!-- CryptoCurrency front end -->
	<script src="{{asset('front-end/assets/js/template.js')}}"></script>
	@yield('script')
	
</body>
</html>
