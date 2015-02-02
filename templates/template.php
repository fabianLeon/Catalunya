<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Prueba Página</title>

        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../js/modernizr.custom.js"></script>

    </head>

    <body background="../img/green_cup.png">

        <div class="container" >
            <div class="content">
                <section>
                    <p></p>
                    <div class="tabs tabs-style-flip">
                        <nav>
                            <ul>
                                <li><a href="#section-flip-5" ><span>Inicio</span></a></li>
                                <li><a href="#section-flip-4" ><span>Productos</span></a></li>
                                <li><a href="#section-flip-2" ><span>Nosotros</span></a></li>
                                <li><a href="#section-flip-3" ><span>Iniciar Sesión</span></a></li>
                                <li><a href="#section-flip-5" ><span>Registrarse</span></a></li>
                                <li><a href="#section-flip-5" ><span>Contacto</span></a></li>
                            </ul>
                        </nav>
                        <div class="content-wrap">
                            <section id="section-flip-1"><p></p>           
                            </section>
                            <section id="section-flip-2"><p></p></section>
                            <section id="section-flip-3"><p></p></section>
                            <section id="section-flip-4"><p></p></section>
                            <section id="section-flip-5"><p></p></section>
                            <section id="section-flip-5"><p></p></section>
                        </div><!-- /content wrap -->
                    </div><!-- /tabs -->        
                </section>
            </div> <!-- end div "content" -->
        </div> <!-- end div "container" -->

        <script src="../js/cbpFWTabs.js"></script>
        <script>
            (function () {

                [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
                    new CBPFWTabs(el);
                });

            })();
        </script>
    </body>
</html>
