@extends ('layouts/master')

@section ('title') Electrikan | Electricidad @stop

@section ('metas')
  <meta name="keywords" content="electrikan, las palmas, gran canaria, canarias, electricidad, electricista, lineas de actividad, instalaciones eléctricas, montaje de baja, media y alta tensión, centros de transformación, acometidas eléctricas, baterías de condensadores, calefacción eléctrica, sistemas de iluminación especiales, climatización, sistema de refrigeración y aire acondicionado, instalación de climatización de viviendas, locales comerciales y naves industriales, telecomunicaciones, líneas de telefonía, instalación de sistemas informáticos y redes, asesoramiento, estudio y análisis técnico de obras, proyectos e instalaciones, estudio para el ahorro energético tanto a nivel usuario como a nivel empresarial," />
  <meta name="description" content="En este departamento nos encargamos del desarrollo de actividades en el campo de instalaciones eléctricas." />
@stop

@section ('scripts')
<!-- Place somewhere in the <head> of your document -->
{{ Html::style('assets/css/flexslider.css')}}
{{ Html::script('assets/js/jquery.flexslider.js') }}

<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
	$(".flexslider").flexslider({
	  slideshowSpeed: 3000,
	  controlNav: false
	});
  });
</script>
@stop

@section('content')

<div class="row article-vertikan">
	<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
		<h3>Electrikan | @Lang('text.item-elctrikan-title')</h3>
		@Lang('text.item-electrikan-all-text')
		<div class="row clients">
			<div class="col-md-12">
				@Lang('text.item-electrikan-all-list')
			</div>
		</div>

		<div class="flexslider hidden-xs">
			<ul class="slides">
			    	@for($i = 0; $i < 6; $i++)
			    		<li>{{ Html::image("/img/electrikan/$i.jpg	", "electricidad y electricistas gran canaria") }}</li>
			    	@endfor
			</ul>
		</div>

	</div>
</div>		

@stop