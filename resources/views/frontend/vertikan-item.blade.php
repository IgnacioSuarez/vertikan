@extends ('layouts/master')

@section ('title') Vertikan | Trabajos Verticales Las Palmas @stop

@section ('metas')
  <meta name="keywords" content="vertikan, trabajos verticales, trabajos en altura, las palmas, gran canaria, canarias, fachadas, patios, electricidad, fontanería, reformas, cubiertas, piscinas, taludes, plataformas, garajes" />
  <meta name="description" content="En VertiKan realizamos proyectos en fachadas, patios, electricidad, fontanería, reformas, cubiertas, piscinas, taludes, plataformas y garajes. A continuación puede consultar una pequeña representación de los trabajos que vamos realizando en Gran Canaria." />
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
		<h3>VertiKan</h3>
		@Lang('text.item-vertikan-all-text')
		<div class="row clients">
			<div class="col-md-12">
				<h4>@Lang('text.item-vertikan-title-list')</h4>
				<ul>
					@Lang('text.item-vertikan-list')
				</ul>
			</div>
		</div>

		<div class="flexslider hidden-xs">
			<ul class="slides">
			    	@for($i = 0; $i < 30; $i++)
			    		<li>{{ Html::image("/img/vertikan/$i.jpg	", "trabajos verticales en las palmas") }}</li>
			    	@endfor
			</ul>
		</div>

	</div>
</div>		

@stop