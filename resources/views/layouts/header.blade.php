<a href="/" style="text-decoration: none"><img src="/img/logo.svg" title="Construciones Vertikan" alt="Construciones Vertikan" class="logo-header">
  <h3 class="logo-title">@Lang('text.header-title')</h3>
  <img src="/img/worker.png" title="Trabajos verticales" alt="Trabajos verticales" class="worker-vertikan hidden-xs hidden-sm"></a>
  <nav class="navbar navbar-default navbar-vertikan">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="">
          <a href="{{URL::to('/')}}">@Lang('text.menu1')</a>
        </li>
        <li class="">
          <a href="{{URL::to('/vertikan-trabajos-verticales-las-palmas')}}">VertiKan</a>
        </li>
        <li class="">
          <a href="{{URL::to('/clientes-trabajos-en-altura-gran-canaria')}}">@Lang('text.menu2')</a>
        </li>
        <li class="">
          <a href="{{URL::to('/grupokan-las-palmas-construccion')}}">@Lang ('text.menu4')</a>
        </li>
        <li class="">
          <a href="{{URL::to('/contact-trabajos-verticales')}}">@Lang('text.menu3')</a>
        </li>
      </ul>
    <ul class="nav navbar-nav navbar-right navbar-lang">
      <li style="z-index:2;"><a href="{{URL::to('lang/es')}}"><img src="/img/es.png"/></a></li>
      <li style="z-index:2;"><a href="{{URL::to('lang/en')}}"><img src="/img/en.png"/></a></li>
    </ul>             
    </div>
  </div>
</nav>  