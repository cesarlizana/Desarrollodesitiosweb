<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desarrollo de sitios web - Emagenic</title>
    <meta name="description" content="Desarrollo de sitios web de calidad, auto administrable, en html5 y css3 para el exito de tu negocio en la web">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
    <meta name="keywords" content="desarrollo web, sitios web, paginas web, diseño web, paginas de internet, carro de compras">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/secciones.css" rel="stylesheet">
</head>
<body>
<!-- Desde aca inicia el menu -->
<nav class="navbar-inverse navbar-fixed-top menu">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="inicio">INICIO</a></li>
        <li><a href="inicio#servicios">SERVICIOS</a></li>
        <li><a href="novedades">NOVEDADES</a></li>
        <li><a href="clientes">CLIENTES</a></li>
        <li class="active"><a href="#">CONTACTO</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Hasta aca  el menu -->
<!-- Desde aca inicia el banner -->
<section id="banner_contacto">  
  <figure><img src="imagenes/icono-contacto.png" height="100" width="100"></figure>
  <h1>CONTACTENOS</h1>
  <p>Contactenos y en breves instantes responderemos su requerimienro, tambien puede buscarnos en redes sociales o via telefónica</p>
    <div class="circulo"><img src="imagenes/flecha_blanca.png" height="15"></div>
</section>
<!-- Hasta aca llega el banner -->
<!-- Desde aca inicia el cuadro informacion -->
<section id="informacion">
  <p>Al comenzar con grandes relaciones con nuestros clientes, creamos productos y servicios que transforman sus Empresas.</p>
</section>
<!-- Hasta aca llega el cuadro informacion -->
<!-- Desde aca inicia el cuadro contacto -->
<section id="contacto">
  <h2>CONTACTO</h2>
  <p>Llene completamente el formulario de contacto y pronto responderemos, tambien puede escribirnos a ventas@emagenic.cl</p>
  
   <div class="espacioformulario">
  
  <form action="index.php" method="post" onSubmit="MM_validateForm('Nombre','','R','Mail','','RisEmail','Telefono','','R','consulta','','R');return document.MM_returnValue">
 
  
  
  <div class="row">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <input name="Nombre" type="text" class="input" id="Nombre" placeholder="Nombre"/></div>
  </div>
  <div class="row">
  	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <input name="Telefono" type="text" class="input" id="Telefono" placeholder="Teléfono"/> 
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <input name="Mail" type="text" class="input" id="Mail" placeholder="E-mail"/>
    </div>
  </div>
  <div class="row">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <textarea name="consulta" id="consulta" class="mensaje" placeholder="Mensaje"></textarea>
    </div>
  </div>
  <div class="row">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <input class="enviar" name="Enviar" type="submit" value="Enviar" />
    </div>
  </div>
  
</form>
</div>

</section>
<!-- Hasta aca llega el cuadro contacto -->
<!-- Desde aca inicia el cuadro mapa -->
<section id="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m8!1m3!1d3301.4918192285363!2d-70.74706899076843!3d-34.15934122503021!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e6!4m0!4m3!3m2!1d-34.16121!2d-70.743389!5e0!3m2!1ses!2scl!4v1428497928547" width="100%" height="450" frameborder="0" style="border:0"></iframe>
    
    <div class="bloque" onClick="style.pointerEvents='none'" ></div>
    <article class="bloquedatos">
    	<p class="contactocuadrotexto">NUESTRA UBICACIÓN</p>
        <img src="imagenes/flecha_gris.png" height="15">
        <p><b class="destacado">Teléfonos: </b> +56 72 2532645</p>
        <p><b class="destacado">Mail:</b> ventas@desarrollodesitiosweb.cl</p>
		<p><b class="destacado">Dirección:</b> Italia 746 Rancagua Norte - Chile</p>
    </article>
</section>
<!-- Hasta aca llega el cuadro mapa -->

<!-- Desde aca inicia el cuadro de redes sociales -->
<section id="redessociales_contacto">
  	<a href="https://www.youtube.com/user/emagenicltda" target="new"><div class="youtube"></div></a>
	<a href="http://emagenic.blogspot.com/" target="new"><div class="blogspot"></div></a>
	<a href="https://plus.google.com/+SitiosEmagenic/posts" target="new"><div class="googlemas"></div></a>
    <a href="https://www.linkedin.com/company/emagenic-ltda?trk=company_logo" target="new"><div class="linkedin"></div></a>
    <a href="skype:emagenicltda?call" target="new"><div class="skype"></div></a>
    <a href="https://www.facebook.com/Emagenic?ref=hl" target="new"><div class="facebook"></div></a>
    <a href="https://twitter.com/emagenic" target="new"><div class="twitter"></div></a>
</section>
<!-- Hasta aca llega el cuadro de redes sociales -->

<!-- Desde aca inicia el cuadro de tecnologias -->
<section id="tecnologias">
  	<h2>NUESTRAS TECNOLOGÍAS</h2>
  	<p>Somos una empresa que se dedica al desarrollo y diseño de páginas web en Rancagua para Chile y el mundo.</p>
	<article class="row">
		<figure class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img src="imagenes/laravel.png" width="100" height="100"></figure>
		<figure class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img src="imagenes/html5.png" width="100" height="100"></figure>
        <figure class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img src="imagenes/css3.png" width="100" height="100"></figure>
        <figure class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img src="imagenes/bootstrap.png" width="100" height="100"></figure>
        <figure class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img src="imagenes/cpanel.png" width="100" height="100"></figure>
        <figure class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img src="imagenes/github.png" width="100" height="100"></figure>
  </article>
</section>
<!-- Hasta aca llega el cuadro de tecnologias -->
<footer>
	<p>© 2015 Todos los derechos reservados a Ingenieria y Desarrollo Emagenic Ltda</p>
</footer>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
</body>
</html>