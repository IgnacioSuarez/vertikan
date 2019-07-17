@extends ('layouts/master')

@section ('title') Contacto | Vertikan trabajos verticales Las Palmas @stop

@section ('metas')
<meta name="keywords" content="vertikan, trabajos verticales, trabajos en altura, las palmas, gran canaria, canarias, fachadas, patios, electricidad, fontanería, reformas, cubiertas, piscinas, taludes, plataformas, garajes" />
<meta name="description" content="Puede ponerse en contacto con nosotros para pedirnos información sobre todo tipo de trabajos verticales y de altura además de proyectos en fachadas, patios, electricidad, fontanería, reformas, cubiertas, piscinas, taludes, plataformas y garajes." />
@stop

@section ('scripts')
@stop

@section('content')

<div class="row article-vertikan">
	<div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
		<h3>@Lang('text.contact-title')</h3>
		<p>@Lang('text.contact-text')</p>

		{{ Form::open(array('url' => '/sendContact', 'method' => 'POST', 'role' => 'form')) }}
		{{--@include ('errors', array('errors' => $errors))--}}


		<div class="row contact-info" style="margin-bottom:40px; margin-top:40px;">
			<div class="col-md-4 contact-info">
				<img class="img-responsive" src="/img/logo.svg" alt="Vertikan" style="width:100%; max-width:300px; margin-bottom:10px;">
				<h4>@Lang('text.header-title')</h4>
				<address>
					<p><i class="glyphicon glyphicon-envelope"></i></i> <a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#105;&#110;&#102;&#111;&#064;&#118;&#101;&#114;&#116;&#105;&#107;&#097;&#110;&#046;&#101;&#115;">&#105;&#110;&#102;&#111;&#064;&#118;&#101;&#114;&#116;&#105;&#107;&#097;&#110;&#046;&#101;&#115;</a></p>
					<p><i class="glyphicon glyphicon-earphone"></i></i> <a href="tel://34928371723">928 371 723</a> / <a href="tel://34677578652">677 578 652</a></p>
					<p><i class="glyphicon glyphicon-map-marker"></i> C/ Don Pío Coronado, 86.</p>
					<p>Trasera de Pedro Infinito. 35012.</p>
					<p>Las Palmas de Gran Canaria.</p>
				</address>
			</div>
			<div class="col-md-8">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="col-md-4 control-group">
						<div class="form-group controls">
							<label>*@Lang('text.contact-name'):</label>
							<input type="text" class="form-control" name="name" id="name">
						</div>
					</div>
					<div class="col-md-4 control-group">
						<div class="form-group controls">
							<label>*Email:</label>
							<input type="email" class="form-control" name="email" id="email">
						</div>
					</div>
					<div class="col-md-4 control-group">
						<div class="form-group controls">
							<label>@Lang('text.contact-phone'):</label>
							<input type="tel" class="form-control" name="phone" id="phone">
						</div>
					</div>
					<div class="col-md-12 control-group">
						<div class="form-group controls">
							<label>*@Lang('text.contact-mensaje'):</label>
							<textarea rows="5" class="form-control" name="mensaje" id="mensaje"></textarea>
						</div>
					</div>
					<br>
					<div class="col-md-12">
						<div class="form-group">

							<button type="submit" class="btn btn-primary btn-md" style="margin-top:15px;">{{Lang::get('text.contact-send')}}</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14076.90782035771!2d-15.4345022!3d28.109114!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x26fb4467eb2ec5e2!2sVertikan+S.L!5e0!3m2!1ses!2ses!4v1440418026668" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

	</div>
</div>

@stop