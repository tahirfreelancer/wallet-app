<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/auth_lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Apr 2023 12:33:17 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>{{$title}} </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('admin/assets/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/css/skin_color.css')}}">	

</head>
<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('admin/images/auth-bg/bg-lock.jpg')}})">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20">
								<img src="{{asset('admin/images/avatar/2.jpg')}}" alt="User Image" class="rounded-circle">
								<h3 class="mb-0">Admin</h3>								
							</div>
							<div class="p-40">
								<form action="{{ route('authenticate') }}" method="post">
									@csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="hidden" name="username" value="admin">
											<input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password" required>
										</div>
									</div>
									  <div class="row">
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info mt-10">SIGN IN</button>
										</div>
										<div class="col-12">
											@if ($errors->has('username'))
												<span class="text-danger">{{ $errors->first('username') }}</span>
											@endif
										</div>
										<!-- /.col -->
									  </div>
								</form>	

								<div class="text-center">
									<p class="mt-15 mb-0">Or <a href="{{url('/')}}" class="text-warning"><b>Sign In</b></a> as a Different User</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
						
		</div>
	</div>	


	<!-- Vendor JS -->
	<script src="{{asset('admin/assets/js/vendors.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('admin/assets/icons/feather-icons/feather.min.js')}}"></script>	
	
	
</body>

</html>
