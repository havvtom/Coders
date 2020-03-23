@csrf
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="John Doe" value="{{old('name') ?: $customer->name}}" required>
		@error('name')
		    <div class="text-danger">{{ $message }}</div>
		@enderror						
	</div>
	<div class="form-group">
		<label for="company">Company</label>
		<select class="form-control @error('company_id') ? is-invalid : ''@enderror" name="company_id">
			<option disabled selected>Select Company</option>
			@foreach($companies as $company)
				<option value="{{$company->id}}" {{old('company_id') == $company->id ? 'selected' : ''}}>{{$company->name}}</option>
			@endforeach
		</select>
		@error('company_id')
			<div class="text-danger"> {{ $message }} </div>
		@enderror
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$customer->email ?: old('email')}}" required="">
		@error('email')
		<div class="text-danger">{{ $message }}</div>
		@enderror
	</div>
	<div class="form-group">
		<label>Status</label>
		<select class="form-control @error('active') is-invalid @enderror" name="active">
			<option disabled selected>Select Status</option>
			@foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
				<option value={{$activeOptionKey}} {{old('active') ==  $activeOptionKey ? 'selected': '' }}>{{$activeOptionValue}}</option>
			@endforeach
		</select>
		@error('active')
			<div class="text-danger">{{ $message }}</div>
		@enderror
	</div>