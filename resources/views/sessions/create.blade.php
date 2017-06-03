@extends ('layout')

@section ('content')

	<h1>Register</h1>

	<form action="/register" method="POST">
		
		{{ csrf_field() }}

		<div>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" placeholder="name">
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" placeholder="email">
		</div>
		<div>
			<label for="password">Password</label>
			<input type="email" id="password" name="password" placeholder="password">
		</div>
		<button type="submit">Register</button>

	</form>

@endsection