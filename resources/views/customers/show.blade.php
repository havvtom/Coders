@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-6 offset-3">
			<div class="card">
				<div class="card-header">
					<h3>Customer Details</h3>
				</div>
				<div class="card-body">
					<div class="row mb-3">
						<div class="col-md-6">
							<strong>Name</strong>
						</div>
						<div class="col-md-6">
							<p>{{$customer->name}}</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<strong>Email</strong>
						</div>
						<div class="col-md-6">
							<p>{{$customer->email}}</p>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<strong>Company</strong>
						</div>
						<div class="col-md-6">
							<p>{{$customer->company->name}}</p>
						</div>
					</div>
					<div class="row">
						<a href="/customers/{{$customer->id}}/edit" class="btn btn-secondary">Edit Customer</a>
					</div>
				</div>			
			</div>
		</div>
	</div>
@endsection

<!-- <p><strong>Name</strong><span>{{$customer->name}}</span></p>
					</div>
					<p><strong>Email</strong><span class="offset-3 mb-5">{{$customer->email}}</span></p>
					<p><strong>Company</strong><span class="offset-3 mb-5">{{$customer->company->name}}</span></p> -->