<p class="logo">{{ Session::get('site') }}</p>

<ul class="nav">

	@foreach ($menus as $menu)

	@if ($menu->publication == 1)

		@if ($menu->nom_sys == Request::segment(2))
		<li class ="dropdown active">
		@else
		<li class="dropdown">
		@endif

			<a href={{ URL::to($menu->route) }} > {{ $menu->etiquette }} </a>

			@if(!$menu->children->isEmpty())
			<ul class="dropdown-menu">
				@foreach ($menu->children as $children)
				@if($children->publication == 1)
				<li>
					<a href={{ URL::to($children->route) }} >
						{{ $children->etiquette }}
					</a>
				</li>
				@endif
				@endforeach
			</ul>
			@endif
		</li>
	@endif
	@endforeach
</ul>