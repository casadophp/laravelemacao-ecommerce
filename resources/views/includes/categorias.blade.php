<div class="header_bottom_left">
	<div class="categories">
		<ul>
			<h3>{{trans('portal.categories')}}</h3>
			@foreach ($categorias as $categoria)
				<li><a href="departamento/{{$categoria['nm_rota']}}">{{$categoria['nm_categoria']}}</a></li>
			@endforeach
		</ul>
	</div>
</div>