@extends('admin.admin_master')
@section('content')
<!-- Main content -->
<section class="content">
			<div class="row">
				<div class="col-12">
				  <div class="box">
					<div class="box-header with-border">
						<div class="row">
							<div class="col-md-11">
								<h4 class="box-title">Users</h4>
							</div>
						</div>
					</div>
					<div class="box-body">
						@if(session('success'))
						<div class="alert alert-success alert-dismissible fade show">
							<strong>Success!</strong> {{ session('success') }}
						</div>
						@endif
						<div class="table-responsive">
							<table class="table table-striped table-bordered mb-0">
							  <thead>
								<tr>
								   <th class="text-center">#</th>
								   <th class="text-end">Name</th>
								   <th class="text-end">Amount</th>
								   <th class="text-end">Gram</th>
								   <th class="text-end">Estimate Profit</th>
								   <th class="text-end">Daily Percentage</th>
								   <th class="text-end">Bonus</th>
								   <th class="text-end">Community Bonus</th>
								   <th class="text-end">Actions</th>
								</tr>
							   </thead>
							   <tbody>
								@foreach($users as $user)
									<tr>
									<td class="text-center"> {{ $loop->index + 1 }}</td>
									<td class="text-center">{{$user->name}}</td>
									<td class="text-end"><span>$</span>{{$user->amount}}</td>
									<td class="text-end">{{$user->gram}} <span>Gram</span></td>
									<td class="text-end"><span>$</span> {{$user->estimated_profit}}</td>
									<td class="text-end">{{$user->percentage ?? 0}} <span>%</span></td>
									<td class="text-end"><span>$</span>{{$user->bonu ?? 0}}</td>
									<td class="text-end"><span>$</span>{{$user->community_bonus ?? 0}}</td>
									<td class="text-end"><a class="btn btn-danger" href="{{ route('delete_user', ['user_id' => $user->id]) }}">Delete</a></td>
									</tr>
								@endforeach
								
							   </tbody>
							</table>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
			  </div>
		</section>
		<!-- /.content -->
		
@endsection
