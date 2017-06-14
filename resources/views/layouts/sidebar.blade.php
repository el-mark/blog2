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
@endif