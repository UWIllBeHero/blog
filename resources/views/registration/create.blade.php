@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8">
		<h1>Registration</h1>
		<hr>
		<form method="POST" action="/register">
			{!! csrf_field() !!}

			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
			</div>
		
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="password_confirmation">Confirm Password:</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
			</div>
		
			<div class="form-group">
				<button type="submit" class="btn btn-default">Register</button>
			</div>

			@include ('layouts.errors')
		</form>
	</div>
@endsection
