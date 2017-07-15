@extends ('layout')

@section ('content')

	<h1>{{ $post->title }}</h1>

	@if (count($post->tags))
		<ul>
			@foreach($post->tags as $tag)
				<li>
					<a href="/posts/tags/{{$tag->name}}">
						{{$tag->name}}
					</a>
				</li>
			@endforeach
		</ul>
	@endif

	<p>{{ $post->body }}</p>
	<div class="comments">
		<p>Comments:</p>
		<ul>
			@foreach ($post->comments as $comment)
				<li>
					<strong>{{ $comment->created_at->diffForHumans() }}: </strong>
					{{ $comment->body }}
				</li>
			@endforeach
		</ul>
		<form method="POST" action="/posts/{{ $post->id }}/comments">
			{{ csrf_field() }}
			<div>
				<textarea name="body" placeholder="Your comment here." cols="30" rows="3" required></textarea>
			</div>
			<button type="submit" >Add Comment</button>
		</form>
		@include ('layouts.errors')
	</div>
	<p><a href="/">Regresar</a></p>
	<p><a href="/posts/{{ $post->id }}/edit">editar</a></p>

@endsection