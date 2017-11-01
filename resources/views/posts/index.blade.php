@extends ('layout')

@section ('content')
	<main>
		<p><a href="/posts/create">crear un nuevo post</a></p>
		<ul>
			@foreach ($posts as $post)
			<li>
				<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
				<p>
					{{ $post->user->name }} on
					{{ $post->created_at->toFormattedDateString() }}
				</p>
			</li>
			@endforeach
		</ul>

	</main>
@endsection