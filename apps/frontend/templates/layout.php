<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/favicon.ico" />

        <link rel="stylesheet" href="/css/normalize.css"/>
        <link rel="stylesheet" href="/css/bvalidator.css"/>
        <link rel="stylesheet" href="/css/main.css"/>
        <script src="/js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <div id="header" class="span-24">
                <div id="logo" class="span-6 imgcontainer"></div>
                <div id="phone" class="span-8 prepend-10 last">
                    <div id="phoneicon" class="span-2 imgcontainer"></div>
                    <div id="phonenumber" class="span-6 last">0212-312.06.43</div>
                </div>
            </div>
            <?php echo $sf_content ?>
            <div id="block2" class="span-22 append-1 prepend-1 last append-bottom">
                <div id="left" class="span-10">
                    <div class="span-10 last title">Con contactos de calidad</div>
                    <div class="span-10 last text">
                        Nuestra estrategia está diseñada para lograr ponerte en 
                        contacto con potenciales clientes.
                        No queremos curiosos, tus prospectos serán de calidad.
                    </div>
                </div>
                <div id="right" class="span-10 prepend-2 last">
                    <div class="span-10 last title">Ganando tiempo</div>
                    <div class="span-10 last text">
                        Publica y actualiza tus avisos al instante.
                        No debes esperar semanas para realizar
                        una modificación, los cambios se ejecutan inmediatamente.
                    </div>
                </div>
            </div>
            <div id="block3" class="span-24 append-bottom">
                <div id="left" class="span-9 prepend-1 prepend-top">
                    <div class="span-9 last title">Además:</div>
                    <div class="span-9 last text">
                        <ul>
                            <li>No hay límite de fotografías</li>
                            <li>Publica en tres pasos</li>
                            <li>Ten presencia en el portal de mayor crecimento</li>
                            <li>Promociona tu marca con email marketing y búsqueda inteligente</li>
                        </ul>
                    </div>
                </div>
                <div id="right" class="span-14 last imgcontainer"></div>
            </div>
            <div id="block4" class="span-24 append-bottom">
                <div class="span-23 prepend-1 last text">
                    Inmobiliarias que confian en nosotros
                </div>
                <div id="realstate" class="span-22 prepend-1 append-1 last imgcontainer">
                </div>
            </div>
            <div id="block5" class="span-24 append-bottom">
                <div class="span-23 prepend-1 last text">
                    Nuestra presencia en medios
                </div>
                <div id="media" class="span-22 prepend-1 append-1 last imgcontainer">
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="/js/jquery.bvalidator-yc.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            (function(b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function() {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
                }(window, document, 'script', 'ga')
            );
            ga('create', 'UA-XXXXX-X');
            ga('send', 'pageview');
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                function validateregex(str) {
                    var regx = /^[a-zA-ZáéíóúÁÉÍÓÚñÑü'.\s]*$/;
                    return str.match(regx); 
                }
                
                $( '.flash_notice' ).click( function(){
                    $( '.flash_notice' ).hide( "slow" );
                });

                $('#contact-form').bValidator({position:{x:'left', y:'top'},offset:{x:5, y:0},});

                $('.submit').click(function(event) {
                    event.preventDefault();
                    $('input[type="submit"]').attr('disabled', 'disabled');
                    if ($('#contact-form').data('bValidator').validate()) {
                        $('#contact-form').submit();
                    }
                    else {
                        $('input[type="submit"]').removeAttr('disabled');
                        return false;
                    }
                });
            });
        </script>
    </body>
</html>