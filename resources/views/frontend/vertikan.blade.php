@extends ('layouts/master')

@section ('title') Vertikan | Trabajos Verticales Las Palmas @stop

@section ('metas')
  <meta name="keywords" content="gran canaria, comunidades de vecinos, mantenimiento de edificios, Obras de Reformas, Portales, locales, interiores, garajes, fontanería, electricidad,  Fachadas, Trabajos en altura, Trabajos Verticales, Reformas, Rehabilitación de Fachadas, Impermeabilizaciones, Cubiertas, Techos, Azoteas, Garajes, mantenimiento de la comunidad, mantenimiento de comunidades, impermeabilización de cubiertas, rehabilitación de fachadas, rehabilitación de patios, las palmas, Trabajos Verticales, Rehabilitación de fachadas, Vigas estructurales, Pintura de fachadas, Impermeabilización de cubiertas" />
  <meta name="description" content="VERTIKAN es una empresa consolidada en la sociedad gran canaria, que realiza trabajos para comunidades de vecinos, mantenimiento de edificios, contratos anuales con constructoras, y con expansión en el sur de la isla." />
@stop

@section ('scripts')
@stop

@section('content')

<div class="row article-vertikan">
	<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
		<img src="img/slider/3.jpg" style="display:block; margin: 50px auto; width:100%;" class="hidden-xs">
		<img src="img/slider/small/3.jpg" style="display:block; margin: 50px auto; width:100%;" class="visible-xs">
		@Lang('text.vertikan-all-text')
	</div>
</div>

<div class="row vertikan-info">
	<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
		<div class="row">
			<div class="col-sm-4 col-md-4 vertikan-image-team"></div>
			<div class="col-sm-8 col-md-8 vertikan-info-item text-justify">
				<h3>@Lang('text.vertikan-service-title1')</h3>
				@Lang('text.vertikan-service-text1')
			</div>
		</div>
		<div class="row vertikan-info-center">
			<div class="col-sm-4 col-md-4 vertikan-image-personal"></div>
			<div class="col-sm-8 col-md-8 vertikan-info-item text-justify">
				<h3>@Lang('text.vertikan-service-title2')</h3>
				@Lang('text.vertikan-service-text2')
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-4 col-md-4 vertikan-image-energy"></div>
			<div class="col-sm-8 col-md-8 vertikan-info-item text-justify">
				<h3>@Lang('text.vertikan-service-title3')</h3>
				@Lang('text.vertikan-service-text3')
			</div>
		</div>	
	</div>
</div>	

@stop