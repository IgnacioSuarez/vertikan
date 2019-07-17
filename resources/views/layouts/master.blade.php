<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('metas')
    <link rel="shortcut icon" href="{{{ asset('assets/favicon.ico') }}}">

    {{ Html::style('assets/css/bootstrap.css')}}
    {{ Html::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
    {{ Html::style('assets/css/theme_vertikan.css')}}

    {{ Html::script('assets/js/bootstrap.js') }}
    {{ Html::script('assets/js/jquery-1.11.2.js') }}

    @yield('scripts')

</head>
<body>
<div class="container-fuid">
    <div class="container skyline-vertikan">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-md-3 col-md-offset-9 social-header">
                <center>
                    <a class="" href="contact-html"><img src="/img/mail.png" /></a>
                    <!--<a class="" href="#" target="_blank"><img src="/img/twitter.png" /></a>-->
                    <a class="" href="https://www.facebook.com/construccionesvertikan?ref=stream" target="_blank"><img src="/img/facebook.png" /></a>
                </center>
            </div>
        </div>
    </div>
    <div class="container container-vertikan">
        <div class="row ">
            <div class="col-md-12">
            
            @include('layouts/header')

            @yield('content')

    
                <div class="row bottom-contact">
                    <div class="col-md-12">
                        <h4>
                            @Lang('text.contact-footer') 
                            <a href="/contact-trabajos-verticales" class="btn btn-primary btn-lg hidden-xs">
                                <i class="glyphicon glyphicon-envelope"></i> 
                                @Lang('text.menu3')
                            </a>
                        </h4>
                        <a href="/contact-trabajos-verticales" class="btn btn-primary btn-lg visible-xs" style="max-width:175px; margin:10px auto;">
                            <i class="glyphicon glyphicon-envelope"></i> 
                            @Lang('text.menu3')
                        </a>                        
                    </div>
                </div>

                <div class="row bottom-info">
                    <div class="col-md-12">
                        <address>
                            C/ Don Pío Coronado, 86. C.P. 35012. (Trasera de Pedro Infinito).
                            <i class="glyphicon glyphicon-earphone"></i> <a href="tel://34928371723">928 371 723</a> |   
                            <i class="glyphicon glyphicon-phone"></i> <a href="tel://34677578652">677 578 652</a> | 
                            <i class="glyphicon glyphicon-envelope"></i> <a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#105;&#110;&#102;&#111;&#064;&#118;&#101;&#114;&#116;&#105;&#107;&#097;&#110;&#046;&#101;&#115;">&#105;&#110;&#102;&#111;&#064;&#118;&#101;&#114;&#116;&#105;&#107;&#097;&#110;&#046;&#101;&#115;</a>
                        </address>
                    </div>
                </div>              

            </div><!--  END COL-MD-12  -->
        </div><!--  ROW  -->
    </div> <!--  END CONTAINER  -->
</div><!--  END CONTAINER-FLUID  -->

{{ Html::script('assets/js/bootstrap.min.js') }}

@include('layouts/footer')
    
</body>
</html>
