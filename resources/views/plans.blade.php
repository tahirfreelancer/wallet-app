@extends('master')
@section('content')
<!---page Title --->
@include('includes/breadcrumb')
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h2 class="text-uppercase mb-15 fw-600 text-white">Our Treding Plan<br> <span class="fw-400 fs-24"> Choose the best</span></h2>
					<p class="text-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-md-4 col-12">
					<div class="price-table bg-gray-100">
						<div class="price-top bg-white">
							<div class="price-title">
								<h3 class="mb-15">Basic</h3>
								<p>In this package dolor sit amet occaecat cupidatat non proident</p>
							</div>
							<div class="price-prize">
								<h2>$49 /<span> month</span> </h2>
							</div>
							<div class="price-button">
								<a class="btn btn-primary" href="#">Get It Now</a>
							</div>
						</div>
						<div class="price-content">
							<div class="price-table-list">
								<ul class="list-unstyled">
									<li> <i class="fa fa-check"></i> 25 Analytics Campaign <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span></li>
									<li><i class="fa fa-times"></i> Branded Reports <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li><i class="fa fa-check"></i> 1,900 Keywords <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li> <i class="fa fa-times"></i> 4 Social Account <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li> <i class="fa fa-times"></i> Phone &amp; Email Support <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="price-table active bg-gray-100 pull-up">
						<div class="price-top bg-white">
							<div class="price-title">
								<h3 class="mb-15">Standard </h3>
								<p>Suitable for medium sit amet officia deserunt mollit anim id est laborum</p>
							</div>
							<div class="price-prize">
								<h2>$129 /<span> month</span> </h2>
							</div>
							<div class="price-button">
								<a class="btn btn-primary" href="#">Get It Now</a>
							</div>
						</div>
						<div class="price-content">
							<div class="price-table-list">
								<ul class="list-unstyled">
									<li> <i class="fa fa-check"></i> 25 Analytics Campaign <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span></li>
									<li><i class="fa fa-check"></i> Branded Reports <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li><i class="fa fa-check"></i> 1,900 Keywords <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li> <i class="fa fa-check"></i> 4 Social Account <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li> <i class="fa fa-check"></i> Phone &amp; Email Support <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<div class="price-table bg-gray-100">
						<div class="price-top bg-white">
							<div class="price-title">
								<h3 class="mb-15">Premium</h3>
								<p>Best for unlimited tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div class="price-prize">
								<h2>$599 /<span> month</span> </h2>
							</div>
							<div class="price-button">
								<a class="btn btn-primary" href="#">Get It Now</a>
							</div>
						</div>
						<div class="price-content">
							<div class="price-table-list">
								<ul class="list-unstyled">
									<li> <i class="fa fa-check"></i> 25 Analytics Campaign <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span></li>
									<li><i class="fa fa-times"></i> Branded Reports <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li><i class="fa fa-check"></i> 1,900 Keywords <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li> <i class="fa fa-times"></i> 4 Social Account <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
									<li> <i class="fa fa-check"></i> Phone &amp; Email Support <span class="tooltip-content float-end" data-placement="top" data-bs-toggle="tooltip" data-original-title="Lorem ipsum dolor sit amet"><i class="fa fa-info"></i></span> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	<section class="py-50 cust-accordion" data-jarallax='{"speed": 0.4}' style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h2 class="text-uppercase mb-15 text-white fw-600">Why Select <span class="fw-400"> Us</span></h2>
					<p class="text-white">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				</div>
			</div>
			<div class="row mt-30 justify-content-center">
				<div class="col-lg-8 col-12">
					<div class="tab-wrapper v1">
						<div class="list">
							<div class="item">
								<div class="tab-btn">
									<a href="#">What is the meaning of Lorem ipsum?<em class="mdi mdi-plus"></em></a>
								</div>
								<div class="tab-content">
									<p>Literally it does not mean anything. It is a sequence of words without a sense of Latin derivation that make up a text also known as filler text, fictitious, blind or placeholder</p>
								</div>
							</div>
							<div class="item">
								<div class="tab-btn"><a href="#">Why is Lorem Ipsum Dolor used? <em class="mdi mdi-plus"></em></a> </div>
								<div class="tab-content">
								<p>The Lorem Ipsum text is used to fill spaces designated to host texts that have not yet been published. They use programmers, graphic designers, typographers to get a real impression of the digital / advertising / editorial product they are working on.</p>
								</div>
							</div>
							<div class="item">
								<div class="tab-btn"><a href="#"> What is the most used version? <em class="mdi mdi-plus"></em></a></div>
								<div class="tab-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
							<div class="item">
								<div class="tab-btn"><a href="#"> What are the origins of Lorem Ipsum Dolor Sit? <em class="mdi mdi-plus"></em></a></div>
								<div class="tab-content">
									<p>Its origins date back to 45 BC. In fact, his words were randomly extracted from the De finibus bonorum et malorum , a classic of Latin literature written by Cicero over 2000 years ago.</p>
								</div>
							</div>
							<div class="item">
								<div class="tab-btn"><a href="#"> What is the original text of Lorem Ipsum Dolor Sit Amet? <em class="mdi mdi-plus"></em></a></div>
								<div class="tab-content">
									<p>The original Latin text<br>Dal De finibus bonorum et malorum sections 1.10.32 and 1.10.33 - Marco Tullio Cicerone<br>
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. </p>
								</div>
							</div>
							<div class="item">
								<div class="tab-btn">
									<a href="#">Can I reserve a magazine via Phone or E-mail?<em class="mdi mdi-plus"></em></a>
								</div>
								<div class="tab-content">
									<p>No, this isn’t possible. We want all of our magazines to be available for all customers. So you have to order the magazine.</p>
								</div>
							</div>
							<div class="item">
								<div class="tab-btn"><a href="#">Where on your website can I open a customer account?<em class="mdi mdi-plus"></em></a> </div>
								<div class="tab-content">
								<p>You can create a new account at the end of the order process or on the following page: Create new account. You can view all of your orders and subscriptions in your customer account. You can also change your addresses and your password.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection