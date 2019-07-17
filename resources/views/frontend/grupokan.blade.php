@extends ('layouts/master')

@section ('title') GrupoKan |  Trabajos verticales, reformas, construcción, fontanería y electricidad @stop

@section ('metas')
  <meta name="keywords" content="vertikan, trabajos verticales, las palmas, gran canaria, canarias, contrucción, grupokan, fontanería, electicidad, reformas, Fachadas, Cubiertas, Fontanería, Electricidad, Cubiertas (Impermeabilización), Albañilería" />
  <meta name="description" content="VertiKan forma parte de GrupoKan, grupo de empresas para todo tipo de soluciones en trabajos verticales en Las Palmas de Gran Canaria. VertiKan especialistas en trabajos verticales, ReforKan nuestro departamento de reformas integrales y construcción, ElectriKan especialistas en instalaciones eléctricas y HidroKan nuestro departamento de fontanería." />
@stop

@section ('scripts')
@stop

@section('content')

<div class="row article-vertikan">
	<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
	<h1>Nuestros trabajos</h1>
	@Lang('text.grupokan-all-text')
		<div class="row">

			<a href="{{URL::to('/grupokan/vertikan-trabajos-verticales')}}">
			<div class="col-md-6" style="margin-top:25px; padding:15px;">
				<div class="grupokan-vertikan" style="width:100%;"></div>
				<div class="grupokan-name">
					<h2>Trabajos Verticales</h2>	
				</div>
			</div>
			</a>

			<a href="{{URL::to('/grupokan/reforkan-reformas-construccion')}}">
			<div class="col-md-6" style="margin-top:25px; padding:15px;">
				<div class="grupokan-reforkan" style="width:100%;"></div>
				<div class="grupokan-name">
					<h2>Reformas</h2>	
				</div>
			</div>
			</a>
		
			<a href="{{URL::to('/grupokan/redes-seguridad')}}">
			<div class="col-md-6" style="margin-top:25px; padding:15px;">
				<div class="grupokan-redes-seguridad" style="width:100%;"></div>
				<div class="grupokan-name">
					<h2>Redes de Seguridad</h2>	
				</div>
			</div>
			</a>

			<a href="{{URL::to('/grupokan/taludes')}}">
			<div class="col-md-6" style="margin-top:25px; padding:15px;">
				<div class="grupokan-taludes" style="width:100%;"></div>
				<div class="grupokan-name">
					<h2>Taludes</h2>	
				</div>
			</div>
			</a>
		</div>


		<!-- <div class="row" style="margin-top:15px;">

			<a href="{{URL::to('/grupokan/electrikan-electricidad')}}">
			<div class="col-md-6" style="margin-top:25px; padding:15px;">
				<div class="grupokan-electrikan" style="width:100%;"></div>
				<div class="grupokan-name">
					<h2>ElectriKan</h2>	
				</div>
			</div>
			</a>

			<a href="{{URL::to('/grupokan/hidrokan-fontaneria')}}">	
			<div class="col-md-6" style="margin-top:25px; padding:15px;">
				<div class="grupokan-hidrokan" style="width:100%;"></div>
				<div class="grupokan-name">
					<h2>Hidrokan</h2>	
				</div>
			</div>
			</a>
		
		</div> -->

	</div>
</div>	

@stop