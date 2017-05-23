@extends ('layout')

@section ('content')
	<main>
		<p>Create a post</p>
		<form method="POST" action="/posts">
		  <div class="form-group">
		    <label for="title">Email address</label>
		    <input type="text" class="form-control" id="title" name="title">
		  </div>
		  <div class="form-group">
		    <label for="body">Body</label>
			<textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Publish</button>
		</form>
	</main>
@endsection