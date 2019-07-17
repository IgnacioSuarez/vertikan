@extends ('layouts/master')

@section ('title') Construciones Vertikan | Trabajos Verticales @stop

@section ('metas')
<meta name="keywords" content="vertikan, trabajos verticales, las palmas, canarias, contrucción, grupokan, fontanería, electicidad, reformas, Fachadas, Cubiertas, Fontanería, Electricidad, Cubiertas (Impermeabilización), Albañilería" />
<meta name="description" content="En VeriKan realizamos todo tipo de trabajos verticales y servicios integrales de fachadas, patios, impermeabilizaciones, reformas en general, electricidad, fontanería ( ascendentes y descendentes), taludes, redes de seguridad, mallas triple torsión, lonas publicidad, limpieza cristales en fachadas, aplicación de cotegran, etc." />
@stop

@section ('scripts')
<!-- Place somewhere in the <head> of your document -->
{{ Html::style('assets/css/flexslider.css')}}
{{ Html::script('assets/js/jquery.flexslider.js') }}

<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
	$(window).load(function() {
		$(".flexslider").flexslider({
			slideshowSpeed: 3000
		});
	});
</script>
@stop

@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	<h4> {{ Session::get('success') }} </h4>
</div>
@endif

<div class="flexslider hidden-xs">
	<ul class="slides">
		<li><img src="img/slider/1.jpg" /></li>
		<li><img src="img/slider/2.jpg" /></li>
		<li><img src="img/slider/3.jpg" /></li>
		<li><img src="img/slider/4.jpg" /></li>
		<li><img src="img/slider/5.jpg" /></li>
	</ul>
</div>

<div class="flexslider visible-xs">
	<ul class="slides">
		<li><img src="img/slider/small/1.jpg" /></li>
		<li><img src="img/slider/small/2.jpg" /></li>
		<li><img src="img/slider/small/3.jpg" /></li>
		<li><img src="img/slider/small/4.jpg" /></li>
		<li><img src="img/slider/small/5.jpg" /></li>
	</ul>
</div>

<div class="row text-center p-0">
	<div class="col-lg-12">
		<h1>Construciones</h1>
	</div>
</div>

<div class="row services">
	<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
		<div class="row">
			<div class="col-sm-4 col-md-4 item-services">
				<a href="\vertikan-trabajos-verticales-las-palmas" style="text-decoration: none">
					<img src="img/nosotros.jpg" style="width:100%; display:block; margin:10px auto;">
					<h3>@Lang('text.home-title-services-1')</h3>
					<p class="text-justify">@Lang('text.home-text-services-1')</p>
				</a>
			</div>
			<div class="col-sm-4 col-md-4 item-services item-services-center">
				<a href="\grupokan-las-palmas-construccion" style="text-decoration: none">
					<img src="img/grupokan.jpg" style="width:100%; display:block; margin:10px auto;">
					<h3>@Lang('text.menu4')</h3>
					<p class="text-justify">@Lang('text.home-text-services-2')</p>
				</a>
			</div>
			<div class="col-sm-4 col-md-4 item-services">
				<a href="\contact-trabajos-verticales" style="text-decoration: none">
					<img src="img/contact.jpg" style="width:100%; display:block; margin:10px auto;">
					<h3>@Lang('text.home-title-services-3')</h3>
					<p class="text-justify">@Lang('text.home-text-services-3')</p>
				</a>
			</div>
		</div>
	</div>
</div>

@stop