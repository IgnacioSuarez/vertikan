@extends ('layouts/master')

@section ('title') Hidrokan | Fontanería @stop

@section ('metas')
  <meta name="keywords" content="Hidrokan, las palmas, gran canaria, canarias, fontanería, fontaneros, Instalaciones de fontanería para suministro de agua, Instalaciones de agua caliente sanitaria, Instalaciones de abastecimiento y saneamiento, Redes de distribución, Instalación de grupos de presión, Sistemas de Bombeo de agua," />
  <meta name="description" content="El departamento de fontanería realiza trabajos en ascendente (abastecimiento) o descendente (saneamiento), mediante la retirada y sustitución hasta el cuadro de contadores, todo ello realizado por los técnicos especialistas en trabajos verticales y en altura." />
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
		<h3>Hidrokan | @Lang('text.item-hidrokan-title')</h3>
		@Lang('text.item-hidrokan-all-text')
		<div class="row clients">
			<div class="col-md-12">
				<h4>@Lang('text.item-hidrokan-title-list')</h4>
				<ul>
					@Lang('text.item-hidrokan-list')
				</ul>

			</div>
		</div>

		<div class="flexslider hidden-xs">
			<ul class="slides">
			    	@for($i = 0; $i < 11; $i++)
			    		<li>{{ Html::image("/img/hidrokan/$i.jpg	", "fontanería y fontaneros las palmas") }}</li>
			    	@endfor
			</ul>
		</div>

	</div>
</div>		

@stop