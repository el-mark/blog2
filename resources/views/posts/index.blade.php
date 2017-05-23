@extends ('layout')

@section ('content')
	<main>
		<ul>
			@foreach ($posts as $post)
			<li>
				<a href="posts/{{ $post->id }}">{{ $post->title }}</a>
				<p>{{ $post->body }}</p>
			</li>
			@endforeach
		</ul>
	</main>
@endsection