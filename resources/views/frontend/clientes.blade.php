@extends ('layouts/master')

@section ('title') Vertikan | Clientes de trabajos verticales Canarias @stop

@section ('metas')
  <meta name="keywords" content="vertikan, trabajos verticales, trabajos en altura, las palmas, gran canaria, canarias, fachadas, patios, electricidad, fontanería, reformas, cubiertas, piscinas, taludes, plataformas, garajes" />
  <meta name="description" content="En VertiKan realizamos proyectos en fachadas, patios, electricidad, fontanería, reformas, cubiertas, piscinas, taludes, plataformas y garajes. A continuación puede consultar una pequeña representación de los trabajos que vamos realizando en Gran Canaria." />
@stop

@section ('scripts')
@stop

@section('content')

<div class="row article-vertikan">
	<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
		<h3>@Lang('text.clientes-title')</h3>
		<p>@Lang('text.clientes-text')</p>
		<div class="row clients">
			<div class="col-sm-4 col-md-4">
				<h4>@Lang('text.clientes-list1')</h4>
				<ul>
				  <li>Fachadas</li>
				  <li>Cubiertas</li>
				  <li>Fontanería</li>
				  <li>Electricidad</li>
				  <li>Cubiertas (Impermeabilización)</li>
				  <li>Albañilería</li>
				</ul>

				<h4>{{Lang::get('text.clientes-list2')}}</h4>
				<ul>
				  <li>Centro Insular de Deportes</li>
				  <li>Estado de Gran Canaria</li>
				  <li>Gran Canaria Arena</li>
				  <li>Martín Freire</li>
				  <li>Cubiertas (Impermeabilización)</li>
				  <li>Albañilería</li>
				  <li>Teatro Cuyás</li>
				  <li>Auditorio</li>
				</ul>

				<h4>{{Lang::get('text.clientes-list3')}}</h4>
				<ul>
				  <li>Claret </li>
				  <li>Heidelberg </li>
				  <li>Dominicas </li>
				  <li>IES Felo Monzón</li> 
				</ul>

				<h4>{{Lang::get('text.clientes-list4')}}</h4>
				<ul>
				  <li>UD. Las Palmas</li>
				  <li>Club Marítimo Varadero</li>
				  <li>Club Baloncesto Gran Canaria</li> 
				</ul>
			</div>
			<div class="col-sm-4 col-md-4">
				<h4>{{Lang::get('text.clientes-list5')}}</h4>
				<ul>
				  <li>Emalsa</li>
				  <li>Unelco</li>
				  <li>Canary Ship Repair</li>
				  <li>Grupo Domingo Alonso</li>
				  <li>Grupo Sebastián Salazar</li>
				  <li>Tirma</li>
				  <li>Beleyma</li>
				  <li>Syocsa </li>
				  <li>Cepros</li>
				  <li>Humiaga</li>
				  <li>Femonial</li>
				  <li>Dragados</li>
				  <li>Geursa </li>
				  <li>Gedetec </li>
				  <li>Carburos Metálicos</li> 
				  <li>SICE </li>
				  <li>Metesa </li>
				  <li>Endesa </li>
				  <li>Samyr </li>
				  <li>Fred. Olsen</li> 
				  <li>Gesplan </li>
				  <li>OTIS </li>
				  <li>Finanzauto</li> 
				  <li>General Electronic</li> 
				  <li>Heidetesa </li>
				  <li>OperCanarios</li>
				  <li>Gerseninox</li>
				  <li>Extractores de Humo (Restauración)</li>
				</ul>
			</div>
			<div class="col-sm-4 col-md-4">
				<h4>{{Lang::get('text.clientes-list6')}}</h4>
				<ul>
				  <li>Grupo Armas</li>
				  <li>Grupo Lopesan</li>
				  <li>Greeen Beach</li>
				  <li>Grupo NH</li>
				  <li>Gloria Palace</li>
				  <li>Hotel Madrid</li>
				  <li>Grupo Princes </li>
				  <li>Hotel Igramar </li>
				  <li>Hotel Tamadaba </li>
				  <li>Hotel Faycan </li>
				  <li>Hotel Helios </li>
				  <li>Grupo Dunas </li>
				  <li>Expomeloneras salón y congresos</li>
				  <li>Adonis </li>
				  <li>Don Carlos </li>
				  <li>Balcón de San Agustín </li>
					<li>Buganvillas</li>
				</ul>
				<h4>{{Lang::get('text.clientes-list7')}}</h4>
				<ul>
				  <li>Oceano Publicidad</li>
				  <li>Publisur</li>
				  <li>CanarySol</li>
				  <li>Silka Publicidad</li>
				  <li>HH Publicidad</li>
				  <li>Los más vendidos</li>
				  <li>Buzoneador Canario</li>
				</ul>
			</div>
		</div>
	</div>
</div>		

@stop