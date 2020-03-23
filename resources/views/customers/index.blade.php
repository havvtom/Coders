@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h3>Customers</h3>
			</div>
			<div class="card-body">
				<div class="row">						
							<div class="col-md-2">
								<h5>ID</h5>
							</div>
							<div class="col-md-4">
								<h5>Customer Name</h5>
							</div>	
							<div class="col-md-4">
								<h5>Company Name</h5>
							</div>
							<div class="col-md-2">
								<h5>Active</h5>
							</div>					
					</div>
					<hr>
				@foreach($customers as $customer)
					<div class="row">						
							<div class="col-md-2">
								<p>{{$customer->id}}</p>
							</div>
							<div class="col-md-4">
								<p><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></p>
							</div>	
							<div class="col-md-4">
								<p>{{$customer->company->name}}</p>
							</div>
							<div class="col-md-2">
								<p>{{$customer->active}}</p>								
							</div>					
					</div>
				@endforeach
			</div>
			<div class="card-footer">
				<a href="{{route('customers.create')}}" class="btn btn-secondary">Add New Customer</a>
			</div>
		</div>
	</div>
@endsection