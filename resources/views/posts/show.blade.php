@extends ('layout')

@section ('content')

	<h1>{{ $post->title }}</h1>
	<p>{{ $post->body }}</p>
	<p><a href="/">Regresar</a></p>
	<p><a href="/posts/{{ $post->id }}/edit">editar</a></p>

@endsection