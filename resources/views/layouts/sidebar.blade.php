@if ($archives)
	<div>
	<h3>Archive</h3>
		<ol>
			@foreach ($archives as $stats)
				<li>
					<a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
						{{ $stats['month'] . ' ' . $stats['year'] }}
					</a>
				</li>
			@endforeach
		</ol>
	</div>
	<div>
	<h3>Tags</h3>
		<ol>
			@foreach ($tags as $tag)
				<li>
					<a href="/posts/tags/{{$tag}}">
						{{$tag}}
					</a>
				</li>
			@endforeach
		</ol>
	</div>
@endif