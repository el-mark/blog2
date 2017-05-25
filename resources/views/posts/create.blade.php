@extends ('layout')

@section ('content')
<main>
	<h1>Create a post</h1>
	<form method="POST" action="/posts">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" name="title">
		</div>
		<div class="form-group">
			<label for="body">Body</label>
			<textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Publish</button>
	</form>
	
	@include ('layouts.errors')

</main>
<p><a href="/">Regresar</a></p>
@endsection