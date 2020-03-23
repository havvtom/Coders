@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>Add New Customer</h3>
		<div class="row">
			<div class="col-md-6">
				<form method="POST" action="/customers/{{$customer->id}}">
					@method('PATCH')
					@include('customers.partials._form')
					<button class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>
@endsection