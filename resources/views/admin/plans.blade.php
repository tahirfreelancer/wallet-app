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
								<h4 class="box-title">Plans</h4>
							</div>
							<div class="col-md-1">
								<button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#planmodal">
									Add Plan
								</button>
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
								   <th class="text-end">Action</th>
								</tr>
							   </thead>
							   <tbody>
								@foreach($plans as $plan)
									<tr>
									<td class="text-center"> {{ $loop->index + 1 }}</td>
									<td class="text-center">{{$plan->name}}</td>
									<td class="text-end"><span>$</span>{{$plan->amount}}</td>
									<td class="text-end">{{$plan->gram}} <span>Gram</span></td>
									<td class="text-end"><span>$</span> {{$plan->estimated_profit}}</td>
									<td class="text-end">{{$plan->daily_perecntage ?? 0}} <span>%</span></td>
									<td class="text-end"><span>$</span>{{$plan->bonu ?? 0}}</td>
									<td class="text-end"><span>$</span>{{$plan->community_bonus ?? 0}}</td>
									<td class="text-end">
										<button class="btn btn-info btn-sm edit" data-id="{{$plan->id}}"  data-name="{{$plan->name}}"  data-amount="{{$plan->amount}}"  data-gram="{{$plan->gram}}"  data-estimated_profit="{{$plan->estimated_profit}}" data-percentage="{{$plan->daily_perecntage}}" data-bonus="{{$plan->bonus}}" data-community_bonus="{{$plan->community_bonus}}"> Edit </button>
										<a class="btn btn-danger btn-sm" href="{{ route('delete_plan', ['plan_id' => $plan->id]) }}">Delete</a>
									</td>
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
		<div id="planmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="planmodal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="planmodal">Plan Details</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="{{route('SavePlan')}}" novalidate>
							@csrf
							<div class="form-group">
								<h5>Plan Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="plan_name" id="plan_name" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							<div class="form-group">
								<h5>Amount <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="number" name="amount" id="amount" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							<div class="form-group">
								<h5>Grams <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="number" name="grams" id="grams" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							<div class="form-group">
								<h5>Estimated Profit <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="number" name="estimated_profit" id="estimated_profit" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							<div class="form-group">
								<h5>Daily Percentage <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="number" name="percentage" id="percentage" class="form-control" required data-validation-required-message="This field is required"> 
								</div>
							</div>
							<div class="form-group">
								<h5> Bonus </h5>
								<div class="controls">
									<input type="number" name="bonus" id="bonus" class="form-control" > 
								</div>
							</div>
							<div class="form-group">
								<h5>Community Bonus </h5>
								<div class="controls">
									<input type="text" name="community_bonus" id="community_bonus" class="form-control" > 
								</div>
							</div>
							<input type="hidden" name="id" id="id" class="form-control" > 
							<div class="text-xs-right">
								<button type="submit" class="btn btn-info">Submit</button>
							</div>
						</form>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
		<!-- /.modal-dialog -->
	</div>
@endsection
@section('script')
<script>
	$(document).ready(function() {
  // Get the modal
  var modal = $('#planmodal');

  // Get the button that opens the modal
  var btn = $('.edit');

  // Get the <span> elements that close the modal
  var span = $('.close');

  // When the user clicks the button, open the modal
  btn.click(function() {
    // Get the data attributes
    var name = $(this).data('name');
    var amount = $(this).data('amount');
    var grams = $(this).data('gram');
    var estimated_profit = $(this).data('estimated_profit');
    var percentage = $(this).data('percentage');
    var bonus = $(this).data('bonus');
    var community_bonus = $(this).data('community_bonus');
    var id = $(this).data('id');

	console.log(modal);
    // Set the data in the modal
    $('#plan_name').val(name);
    $('#amount').val(amount);
    $('#grams').val(grams);
    $('#estimated_profit').val(estimated_profit);
    $('#percentage').val(percentage);
    $('#bonus').val(bonus);
    $('#community_bonus').val(community_bonus);
    $('#id').val(id);

    // Display the modal
    $('#planmodal').css('display', 'block');
    $('#planmodal').addClass('show');
  });

  // When the user clicks on <span> (x), close the modal
  $('.btn-close').click(function() {
	$('#planmodal').css('display', 'none');
    $('#planmodal').removeClass('show');

  });
});

</script>
@endsection