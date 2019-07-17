@extends ('layouts/master')

@section ('title') Reforkan | Reformas y Construcción @stop

@section ('metas')
  <meta name="keywords" content="reforkan, las palmas, gran canaria, canarias, albañilería, alicatados, aislamientos térmicos, aislamientos de fachadas por el exterior, escayolista, enfoscados proyectados, fachadas, trabajos en altura, trabajos verticales," />
  <meta name="description" content="El departamento de Reformas Integrales está cualificado para realizar todo tipo de trabajos específicos incluidos los de OBRA MAYOR (albañilería, fontanería, carpintería, electricidad)." />
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
		<h3>Vertikan | @Lang('text.item-reforkan-title')</h3>
		@Lang('text.item-reforkan-all-text')
		<div class="row clients">
			<div class="col-md-12">
				<h4>@Lang('text.item-reforkan-title-list')</h4>
				<ul>
				@Lang('text.item-reforkan-list')
				</ul>
			</div>
		</div>

		<div class="flexslider hidden-xs">
			<ul class="slides">
			    	@for($i = 0; $i < 21; $i++)
			    		<li>{{ Html::image("/img/reforkan/$i.jpg	", "reformas y construcción gran canaria") }}</li>
			    	@endfor
			</ul>
		</div>

	</div>
</div>		

@stop