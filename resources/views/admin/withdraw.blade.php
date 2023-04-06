@extends('admin.admin_master')
@section('content')

		<!-- Main content -->
		<section class="content">
			<div class="row">
			  <div class="col-lg-12 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Latest Transactions</h4>
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table class="table no-margin table-hover">
							  <thead>					
								<tr class="bg-dark">
								  <th>Transaction Hash</th>
								  <th>BTC</th>
								  <th>Time</th>
								  <th>Miner Preference</th>
								  <th>Status</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  7d2c7b06afa0
									</a>
									...
								  </td>
								  <td>1.0126281 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
								  </td>
								  <td>medium</td>
								  <td><span class="label label-success">Confirmed</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  5de67405bfc6
									</a>
									...
								  </td>
								  <td>0.10522881 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
								  </td>
								  <td>high</td>
								  <td><span class="label label-primary">Unconfirmed</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  583de1b0cec
									</a>
									...
								  </td>
								  <td>0.40622033 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:38:01Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
								  </td>
								  <td>high</td>
								  <td><span class="label label-success">Confirmed</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  5493bcfa5f7f
									</a>
									...
								  </td>
								  <td>4.43670578 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
								  </td>
								  <td>high</td>
								  <td><span class="label label-danger">Canceled</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  4d66087926b5
									</a>
									...
								  </td>
								  <td>22.01099978 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
								  </td>
								  <td>high</td>
								  <td><span class="label label-danger">Canceled</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  60935e53c894
									</a>
									...
								  </td>
								  <td>0.0024534 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:38:00Z" title="2018-02-01 13:38 GMT">2 minutes ago</time>
								  </td>
								  <td>high</td>
								  <td><span class="label label-primary">Unconfirmed</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  b1236b76cf5e
									</a>
									...
								  </td>
								  <td>0.00518486 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:37:59Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
								  </td>
								  <td>medium</td>
								  <td><span class="label label-success">Confirmed</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  d0125cb78c078
									</a>
									...
								  </td>
								  <td>0.08039395 BTC</td>

								  <td>
									<time class="timeago" datetime="2018-02-01T13:37:59Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
								  </td>
								  <td>high</td>
								  <td><span class="label label-success">Confirmed</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  b6b591254835c
									</a>
									...
								  </td>
								  <td>55.99698306 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:37:58Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
								  </td>
								  <td>high</td>
								  <td><span class="label label-success">Confirmed</span></td>
								</tr>
								<tr>
								  <td>
									<a href="#" class="text-primary hover-primary">
									  d261fb1d717d
									</a>
									...
								  </td>
								  <td>0.0281818 BTC</td>
								  <td>
									<time class="timeago" datetime="2018-02-01T13:37:58Z" title="2018-02-01 13:37 GMT">2 minutes ago</time>
								  </td>
								  <td>high</td>
								  <td><span class="label label-danger">Canceled</span></td>
								</tr>
							  </tbody>
							</table>
						</div>
					</div>
				  </div>
			  </div>
		  </div>
		</section>
		<!-- /.content -->
@endsection