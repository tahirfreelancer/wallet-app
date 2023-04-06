@extends('admin.admin_master')
@section('content')
<section class="content">			
			<div class="row">
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Reminders</h4>
							<ul class="box-controls pull-right">	
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body p-0">
						  <div class="media-list media-list-hover media-list-divided">
							<a class="media media-single p-10" href="#">
							  <span class="avatar avatar-sm bg-primary-light">48</span>
							  <span class="title">Clients to Bill</span>
							</a>

							<a class="media media-single p-10" href="#">
							  <span class="avatar avatar-sm bg-success-light">16</span>
							  <span class="title">Expense Reports to Approve</span>
							</a>

							<a class="media media-single p-10" href="#">
							  <span class="avatar avatar-sm bg-danger-light">39</span>
							  <span class="title">Time records to approve</span>
							</a>

							<a class="media media-single p-10" href="#">
							  <span class="avatar avatar-sm bg-primary-light">01</span>
							  <span class="title">Purchase Request to approve</span>
							</a>

							<a class="media media-single p-10" href="#">
							  <span class="avatar avatar-sm bg-warning-light">129</span>
							  <span class="title">Opportunities to close</span>
							</a>

							<a class="media media-single p-10" href="#">
							  <span class="avatar avatar-sm bg-info-light">36</span>
							  <span class="title">Purchase Order to Bill</span>
							</a>
						  </div>
					  </div>
					</div>

					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Actual Time by Employee</h4>
							<ul class="box-controls pull-right">	
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body">					  
							<div class="chart">
								<div id="chartdiv31" class="h-300"></div>
							</div>
						</div>
					</div>

					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Inventory trend analysis</h4>
							<ul class="box-controls pull-right">	
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body">					  
							<div class="chart">
								<div id="chartdiv32" class="h-450"></div>
							</div>
						</div>
					</div>				

					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Revenue Distribution</h4>
							<ul class="box-controls pull-right">	
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body">					  
							<div class="chart">
								<canvas id="chart_6" class="h-250"></canvas>
							</div>
						</div>
					</div>				

					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Average Income</h4>
							<ul class="box-controls pull-right">
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body">					  
							<div class="chart">
								<div class="ct-chart-10 h-450"></div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-xl-8 col-12">			

					<div class="row">
						<div class="col-md-3 col-6">
							<div class="box box-body pull-up bg-warning bg-deathstar-white">
							  <div class="flexbox">
								<span class="fa fa-money fs-40"></span>
								<span class="fw-200 fs-26">$250.00</span>
							  </div>
							  <div class="text-end">Charges on hold</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="box box-body pull-up bg-danger bg-deathstar-white">
							  <div class="flexbox">
								<span class="fa fa-clock-o fs-40"></span>
								<span class="fw-200 fs-26">592.50</span>
							  </div>
							  <div class="text-end">Hours to approve</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="box box-body pull-up bg-success bg-deathstar-white">
							  <div class="flexbox">
								<span class="fa fa-trophy fs-40"></span>
								<span class="fw-200 fs-26">48.00</span>
							  </div>
							  <div class="text-end">Milestones due</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="box box-body pull-up bg-info bg-deathstar-white">
							  <div class="flexbox">
								<span class="fa fa-users fs-40"></span>
								<span class="fw-200 fs-26">126.00</span>
							  </div>
							  <div class="text-end">Resources on staff</div>
							</div>
						</div>
					</div>

					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Key Performance Indicators</h4>
							<ul class="box-controls pull-right">
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body">
							  <ul class="flexbox flex-justified text-center my-20">
								<li class="be-1">
								  <div class="fs-18">Income</div>
								  <h2 class="text-success"><i class="fa fa-caret-up"></i> 7.1%</h2>
								</li>

								<li class="be-1">
								  <div class="fs-18">Expenses</div>
								  <h2 class="text-danger"><i class="fa fa-caret-down"></i> -14.1%</h2>
								</li>

								<li class="be-1">
								  <div class="fs-18">Receivablies</div>
								  <h2 class="text-success"><i class="fa fa-caret-up"></i> 2.8%</h2>
								</li>

								<li>
								  <div class="fs-18">Project Billing</div>
								  <h2 class="text-success"><i class="fa fa-caret-up"></i> 97.1%</h2>
								</li>
							  </ul>

							<div class="table-responsive">
								<table class="table table-bordered no-margin">
								  <thead>					
									<tr class="bg-pale-dark">
									  <th>Indicator</th>
									  <th>Time Slab</th>
									  <th>Current</th>
									  <th>Previous</th>
									  <th>Change</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td>
										<a href="#" class="hover-primary">
										  Piping Project
										</a>
									  </td>
									  <td>190 Days</td>
									  <td>$12,485,213</td>
									  <td>$11,485,213</td>
									  <td><span class="label label-success"><i class="fa fa-caret-up"></i> 9.99%</span></td>
									</tr>
									<tr>
									  <td>
										<a href="#" class="hover-primary">
										  Roofing Project
										</a>
									  </td>
									  <td>1500 Days</td>
									  <td>$125,485,213</td>
									  <td>$100,485,213</td>
									  <td><span class="label label-success"><i class="fa fa-caret-up"></i> 10.99%</span></td>
									</tr>
									<tr>
									  <td>
										<a href="#" class="hover-primary">
										  Floring Project
										</a>
									  </td>
									  <td>250 Days</td>
									  <td>$11,485,213</td>
									  <td>$15,485,213</td>
									  <td><span class="label label-danger"><i class="fa fa-caret-down"></i> -2.99%</span></td>
									</tr>
									<tr>
									  <td>
										<a href="#" class="hover-primary">
										  Building Project
										</a>
									  </td>
									  <td>480 Days</td>
									  <td>$95,485,213</td>
									  <td>$75,485,213</td>
									  <td><span class="label label-success"><i class="fa fa-caret-up"></i> 15.99%</span></td>
									</tr>
									<tr>
									  <td>
										<a href="#" class="hover-primary">
										  Office Project
										</a>
									  </td>
									  <td>250 Days</td>
									  <td>$48,485,213</td>
									  <td>$50,485,213</td>
									  <td><span class="label label-danger"><i class="fa fa-caret-down"></i> -1.99%</span></td>
									</tr>

								  </tbody>
								</table>
							</div>
						</div>
					  </div>

					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">On Going Projects</h4>
							<ul class="box-controls pull-right">	
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body">						
							<div class="table-responsive project-table">
							  <table id="project-table" class="table table-bordered table-striped display nowrap mt-10">
								<thead>
									<tr>
										<th></th>
										<th>Projects</th>
										<th>EST.</th>
										<th>Cont.</th>
										<th>Status</th>
										<th>Starts</th>
										<th>Ends</th>
										<th>Track</th>
									</tr>
								</thead>
							  </table>
							</div>
						</div>
						<!-- /.box-body -->
					  </div>

					<div class="box">
					  <div class="card-body bg-img py-70" style="background-image: url(../images/gallery/thumb/12.jpg)" data-overlay="5">
						<blockquote class="blockquote blockquote-inverse no-border no-margin">
						  <p class="fs-22">Some quick example text to build blockquote content long enough.</p>
						  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
						</blockquote>
					  </div>

					  <div class="box-body">
						<h4><a href="#">Awesome Quote Blog Post</a></h4>
						<p><span>October 16, 2017</span></p>

						<p>Holisticly maximize team building ROI via next-generation resources. Enthusiastically promote team driven customer service and error-free solutions. Dynamically myocardinate vertical leadership for synergistic "outside the box" thinking. Efficiently extend global.</p>

						<div class="flexbox align-items-center mt-3">
						  <a class="btn btn-round btn-bold btn-primary" href="#">Read more</a>

						  <div class="gap-items-4">
							<a class="text-muted" href="#">
							  <i class="fa fa-heart me-1"></i> 12
							</a>
							<a class="text-muted" href="#">
							  <i class="fa fa-comment me-1"></i> 3
							</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-12">
						  <div class="box">
							<div class="box-body">
							  <div class="chart">
								<div id="chartdiv3" class="h-190"></div>	
							  </div>
							</div>
						  </div>			
						</div>
						<div class="col-lg-3 col-12">
						  <a class="box box-link-pop text-center" href="javascript:void(0)">
							<div class="box-body">
								<p class="fs-30 text-danger">
									<i class="fa fa-money text-muted me-5 mb-20"></i><br>
									<strong>987€</strong>
								</p>
							</div>
							<div class="box-body py-25 bg-light">
								<h3 class="fw-600 mt-0">
									Balance
								</h3>
							</div>
						 </a>			
						</div>
						<div class="col-lg-6 col-12">
						  <div class="box">
							<div class="box-body">
							  <div class="chart">
								<div id="chartdiv4" class="h-190"></div>	
							  </div>
							</div>
						  </div>			
						</div>		
					</div>			
				</div>			
			</div>
		</section>
@endsection