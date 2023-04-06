@extends('master')
@section('content')
@include('includes/breadcrumb')
	<!--Page content -->	
	<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<a href="#" class="pull-up">
						<div class="p-10">
							<span class="fs-40 icon-Compiling"><span class="path1"></span><span class="path2"></span></span>
							<h3 class="my-15">Our Philosophy</h3>
							<div class="text-fade fs-16 mb-10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="#" class="pull-up">
						<div class="p-10">
							<span class="fs-40 icon-Position1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
							<h3 class="my-15">Our Mission</h3>
							<div class="text-fade fs-16 mb-10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="#" class="pull-up">
						<div class="p-10">
							<span class="fs-40 icon-Book-open"><span class="path1"></span><span class="path2"></span></span>
							<h3 class="my-15">Our Vission</h3>
							<div class="text-fade fs-16 mb-10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="#" class="pull-up">
						<div class="p-10">
							<span class="fs-40 icon-Road-Cone"><span class="path1"></span><span class="path2"></span></span>
							<h3 class="my-15">Key Of Success</h3>
							<div class="text-fade fs-16 mb-10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod..</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="py-50 bg-white">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-12">
					<h2 class="mb-10">Why Us</h2>
					<h4 class="fw-400">It is a long established fact that a reade.</h4>
					<p class="fs-16">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br><br> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					<a href="#" class="btn btn-primary">Contact Us</a>
				</div>
				<div class="col-lg-6 col-12 position-relative">
					<div class="popup-vdo mt-30 mt-md-0">
						<img src="{{asset('front-end/images/front-end-img/b-3.png')}}" class="img-fluid rounded" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="py-30 bg-img countnm-bx" data-jarallax='{"speed": 0.4}' style="background-image: url(../images/front-end-img/background/bg-1.jpg)" data-overlay="5">
		<div class="container">			
			<div class="box box-body bg-transparent mb-0">
				<div class="row">
					<div class="col-lg-3 col-6">
						<div class="text-center mb-30 mb-lg-0">
							<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
								<span class="text-white fs-40 icon-User"><span class="path1"></span><span class="path2"></span></span>
							</div>
							<h1 class="countnm my-10 text-white">5428</h1>
							<div class="text-uppercase text-white">CONSUMERS</div>
						</div>
					</div>	
					<div class="col-lg-3 col-6">
						<div class="text-center mb-30 mb-lg-0">
							<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
								<span class="text-white fs-40 icon-Book"></span>
							</div>
							<h1 class="countnm my-10 text-white">120</h1>
							<div class="text-uppercase text-white">COUNTRIES</div>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="text-center">
							<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
								<span class="text-white fs-40 icon-Group"><span class="path1"></span><span class="path2"></span></span>
							</div>
							<h1 class="countnm my-10 text-white">7485</h1>
							<div class="text-uppercase text-white">INDUSTRIES</div>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="text-center">
							<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
								<span class="text-white fs-40 icon-Globe"><span class="path1"></span><span class="path2"></span></span>
							</div>
							<h1 class="countnm my-10 text-white">100</h1>
							<div class="text-uppercase text-white">BRANDS</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</section>
	<section class="py-50 text-white">
		<div class="container">		
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel owl-theme owl-btn-1" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
						<div class="item">
							<div class="text-center">
								<div class="bg-primary-light w-50 mx-auto rounded-circle overflow-hidden">
									<img src="../images/front-end-img/avatar/4.jpg" class="avatar-lg w-auto" alt="">
								</div>
								<div class="max-w-750 mx-auto">									
									<div class="testimonial-info">
										<h4 class="name mb-0 mt-10">Peter Packer</h4>
										<p>-Art Director</p>
									</div>
									<div class="testimonial-content">
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<p class="fs-16">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word...</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="text-center">
								<div class="bg-primary-light w-50 mx-auto rounded-circle overflow-hidden">
									<img src="../images/front-end-img/avatar/5.jpg" class="avatar-lg w-auto" alt="">
								</div>
								<div class="max-w-750 mx-auto">									
									<div class="testimonial-info">
										<h4 class="name mb-0 mt-10">Peter Packer</h4>
										<p>-Art Director</p>
									</div>
									<div class="testimonial-content">
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<p class="fs-16">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word...</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="text-center">
								<div class="bg-primary-light w-50 mx-auto rounded-circle overflow-hidden">
									<img src="../images/front-end-img/avatar/9.jpg" class="avatar-lg w-auto" alt="">
								</div>
								<div class="max-w-750 mx-auto">									
									<div class="testimonial-info">
										<h4 class="name mb-0 mt-10">Peter Packer</h4>
										<p>-Art Director</p>
									</div>
									<div class="testimonial-content">
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<p class="fs-16">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word...</p>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<section class="py-100" data-jarallax='{"speed": 0.4}' style="background-image: url({{asset('front-end/images/front-end-img/background/bg-3.png')}});" data-overlay="5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-12">				
					<div class="text-center text-white">
						<h2 class="mb-15 fw-600 fs-40">Bitcoin Widgets / Crypto Price Widgets</h2>
						<h4>Live Treding Facility</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<div class="mt-5"><a href="#" class="btn btn-primary">Enrol Now!</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection