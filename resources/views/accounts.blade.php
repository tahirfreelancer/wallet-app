@extends('master')
@section('content')
<!---page Title --->
<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url({{asset('front-end/images/front-end-img/background/bg-9.png')}});">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Register & Login</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="{{ url('/')}}" class="text-white-50"><i class="ti-home"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Register & Login</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-12">
					<div class="box box-body">
						<ul class="nav nav-tabs nav-fill" role="tablist">
							<li class="nav-item"> <a class="nav-link active py-10 rounded" data-bs-toggle="tab" href="#login" role="tab">Login</a> </li>
							<li class="nav-item"> <a class="nav-link py-10 rounded" data-bs-toggle="tab" href="#register" role="tab">Register</a> </li>
						</ul>
					</div>
					<div class="box box-body mb-0">
						<div class="tab-content">
							<div class="tab-pane active" id="login" role="tabpanel">
								<div>				
									<div class="content-top-agile pb-0 pt-20">
										<h2 class="text-primary">Let's Get Started</h2>
										<p class="mb-0">Sign in to continue to CryptoCurrency.</p>							
									</div>
									<div class="p-40">
									<form action="{{ route('authenticate') }}" method="POST">
                   							 @csrf
											<div class="form-group">
												<div class="input-group mb-15">
													<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
													<input type="text" class="form-control ps-15 bg-transparent" placeholder="Username">
													@if ($errors->has('name'))
														<span class="text-danger">{{ $errors->first('name') }}</span>
													@endif
												</div>
											</div>
											<div class="form-group">
												<div class="input-group mb-15">
													<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
													<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
													@if ($errors->has('password'))
														<span class="text-danger">{{ $errors->first('password') }}</span>
													@endif
												</div>
											</div>
											  <div class="row">
												<div class="col-6">
												  <div class="checkbox ms-5">
													<input type="checkbox" id="basic_checkbox_1">
													<label for="basic_checkbox_1" class="form-label">Remember Me</label>
												  </div>
												</div>
												<!-- /.col -->
												<div class="col-6">
												 <div class="fog-pwd text-end">
													<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
												  </div>
												</div>
												<!-- /.col -->
												<div class="col-12 text-center">
												  <button type="submit" class="btn btn-info w-p100 mt-15">SIGN IN</button>
												</div>
												<!-- /.col -->
											  </div>
										</form>	
									</div>
								</div>
							</div>
							<div class="tab-pane" id="register" role="tabpanel">
								<div>									
									<div class="content-top-agile pb-0 pt-20">
										<h2 class="text-primary">Get started with Us</h2>
										<p class="mb-0">Register a New Membership</p>							
									</div>
									<div class="p-40">
									<form action="{{ route('store') }}" method="POST">
										@csrf				
											<div class="form-group">
												<div class="input-group mb-15">
													<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
													<input type="text" class="form-control ps-15 bg-transparent" placeholder="Full Name">
													@if ($errors->has('name'))
														<span class="text-danger">{{ $errors->first('name') }}</span>
													@endif
												</div>
											</div>
											<div class="form-group">
												<div class="input-group mb-15">
													<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
													<input type="email" class="form-control ps-15 bg-transparent" placeholder="Email">
													@if ($errors->has('email'))
														<span class="text-danger">{{ $errors->first('email') }}</span>
													@endif
												</div>
											</div>
											<div class="form-group">
												<div class="input-group mb-15">
													<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
													<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
													@if ($errors->has('password'))
														<span class="text-danger">{{ $errors->first('password') }}</span>
													@endif
												</div>
											</div>
											<div class="form-group">
												<div class="input-group mb-15">
													<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
													<input type="password" class="form-control ps-15 bg-transparent" placeholder="Retype Password" id="password_confirmation" name="password_confirmation">
												</div>
											</div>
											  <div class="row">
												<div class="col-12">
												  <div class="checkbox ms-5">
													<input type="checkbox" id="basic_checkbox_22">
													<label for="basic_checkbox_22" class="form-label">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
												  </div>
												</div>
												<!-- /.col -->
												<div class="col-12 text-center">
												  <button type="submit" class="btn btn-info w-p100 mt-15">Register</button>
												</div>
												<!-- /.col -->
											  </div>
										</form>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</section>	
@endsection