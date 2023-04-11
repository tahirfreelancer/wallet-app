@extends('admin.admin_master')
@section('content')
<section class="content">			
			<div class="row">
				<div class="col-xl-12 col-12">			
					<div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">My Assets</h4>
							<ul class="box-controls pull-right">
							  <li><a class="box-btn-fullscreen" href="#"></a></li>
							</ul>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table table-bordered no-margin">
								  <thead>	
										<tr class="bg-pale-dark">
										@if ( Auth::user()->name!='admin')	
										<th>email</th>			
										<th>username</th>			
										@endif
										<th>Plan</th>
										<th>Amount</th>
										<th>Gram</th>
										<th>Estimated_profit</th>
										<th>Daily Percentage</th>
										<th>Bonus</th>
										<th>Community Bonus</th>
										<th>Purchased Date</th>
										</tr>
								
								  </thead>
								  <tbody>
									@foreach($details as $detail)
									<tr>
										@if ( Auth::user()->name!='admin')	
											<th>{{$detail->email}}</th>			
											<th>{{$detail->username}}</th>			
										@endif
									  <td>{{$detail->name}}</td>
									  <td>{{$detail->amount}}</td>
									  <td>{{$detail->gram}}</td>
									  <td>{{$detail->estimated_profit}}</td>
									  <td>{{$detail->daily_perecntage}}</td>
									  <td>{{$detail->bonus}}</td>
									  <td>{{$detail->community_bonus}}</td>
									  <td>{{$detail->created_at}}</td>
									</tr>
									@endforeach
								  </tbody>
								</table>
							</div>
						</div>
					  </div>

					</div>			
			</div>
		</section>
@endsection