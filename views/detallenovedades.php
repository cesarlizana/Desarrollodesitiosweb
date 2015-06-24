<?php include("Conexion_emagenic.php"); 
	$host= $_SERVER["HTTP_HOST"];
	$urlvalida= $_SERVER["REQUEST_URI"];
	$urlredessociales =$urlvalida;
	$cadena =$urlvalida;
	$subcadena = "&"; 
	$posicionsubcadena = strpos ($cadena, $subcadena); 
	$dominio = substr ($cadena, ($posicionsubcadena+1)); 
	$resturl= $dominio; 
	$resturl = substr($resturl, 0, -2);
	$listado = "select * from noticias_desarrolloweb where id ='$resturl' ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase )){ 
?>
<!doctype html>
 <html lang="es">
    <head>
        <meta charset="UTF-8">
        <!-- Open Graph data -->
        <meta property="og:title" content="Desarrollo de sitios web" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.desarrollodesitiosweb.cl" />
        <meta property="og:image" content="http://www.desarrollodesitiosweb.cl/imagenes/logobanner.png" />
        <meta property="og:description" content="Desarrollamos sitios web a medida para todo tipo de organizaciones que necesiten una solucion web" />
        <meta property="og:site_name" content="Desarrollo de sitio web, i.e. Moz" />
        <meta property="article:published_time" content="2015-05-06T05:59:00+01:00" />
        <meta property="article:modified_time" content="2015-05-06T19:08:47+01:00" />
        <meta property="article:section" content="Desarrollo-web" />
        <meta property="article:tag" content="Article Tag" />
        <meta property="fb:admins" content="180900685293639" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title><?= str_replace("\r\n","<br>",$rs["titulo_destacado"]); ?></title>
   	 	<meta name="description" content="<?= str_replace("\r\n","<br>",$rs["contenido_destacado"]); ?>">
  		<link rel="shortcut icon" href="http://www.desarrollodesitiosweb.cl/imagenes/icon.png">
  		<meta name="AUTHOR" content="Emagenic Ltda">
  		<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen"> 
	    <link href="../css/secciones.css" rel="stylesheet" media="screen">
	    <link href="../animate.css" rel="stylesheet" type="text/css" media="all">
	    <script src="http://www.desarrollodesitiosweb.cl/js/modernizr.custom.js"></script>
	    <script src="http://www.desarrollodesitiosweb.cl/js/snap.svg-min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?30iy4xVkkwOZgOzZ5uk65bzpOFtxqDkw";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe ser dirección de correo.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es obligatorio.\n'; }
    } if (errors) alert('Existen los siguientes errores:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>

   <body>
   		<header>
	   		<div class="container row">
	   			<figure class="logotipo">
					<a href="http://www.desarrollodesitiosweb.cl">
                    <img src="http://www.desarrollodesitiosweb.cl/imagenes/logo.png">
                    </a>
				</figure>
				<div class="menu-wrap">
					<nav class="menu col-xs-12">
						<div class="icon-list row">
							<a href="../">INICIO</a>
							<a href="../#servicios">SERVICIOS</a>
							<a class="activo" href="<?= $urlnovedades; ?>">NOVEDADES</a>
							<a href="informacion">INFORMACIÓN</a>
							<a href="#contacto">CONTACTO</a>
						</div>

					</nav>
					<button class="close-button" id="close-button">Close Menu</button>
					<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
						<svg xmlns="//www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
							<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
						</svg>
					</div>
				</div>
				<button class="menu-button" id="open-button">Open Menu</button>
			</div><!-- /container -->
		</header>

		<div class="top-seccion col-xs-12">
			<div class="opacidad col-xs-12">
				<div class="cont-top row">
					<div class="info col-xs-12">
						<h1 class="titulo col-xs-12"><?= str_replace("\r\n","<br>",$rs["titulo_destacado"]); ?></h1>
						<p><?= str_replace("\r\n","<br>",$rs["contenido_destacado"]); ?></p>
						<a href="#contacto">CONTACTO</a>
					</div>
				</div>
			</div>
		</div>

		<article class="col-xs-12 planes" id="planes">
			<div class="contenido-secciones">
				<div class="info row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">        
    					<h3 class="titulo"><?= str_replace("\r\n","<br>",$rs["titulo_destacado"]); ?></h3>
    					<p class="puntos">...</p>
						<figure>
      						<img src="https://www.emagenic.cl/imagenes/novedadesweb/<?= $rs["id"] ?>.jpg" rel="image_src"  alt="novedades">
    					</figure>
						
                        <p style="text-align:left"><?= str_replace("\r\n","<br>",$rs["contenido_completo"]); ?></p>
						<p style="text-align:left; color:#333"><?php echo date("d/m/Y",strtotime($rs["fecha"])); ?></p>
                        <!-- REDES SOCIALES -->
    					<div class="col-xs-12" style="margin-top:30px;">   
         					<!-- google pluss -->
		  					<div class="col-xs-12 col-md-4 g-plusone" data-size="tall" data-annotation="inline" data-width="300"></div>
	    					<!-- facebook like -->
        					<div class="col-xs-12 col-md-4 fb-like" data-href="http://www.desarrollodesitiosweb.cl<?= $urlredessociales; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" style="vertical-align: top; margin: 0 0 10px 0;">
        					</div>
	    					<!-- twitter -->
        					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.desarrollodesitiosweb.cl<?= $urlredessociales; ?>" data-lang="es" data-size="large" data-hashtags="desarrolloweb" data-dnt="true" style="vertical-align:top;">Twittear</a>  
		  				</div>
						<!-- REDES SOCIALES -->   
    				</div>
    
    				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-novedades">
    					<ul>
							<?php
					        $listadonotice = "select * from noticias_desarrolloweb order by id desc ";
							$sentencianotice = mysql_query($listadonotice,$conn);
							while($rsnotice=mysql_fetch_array($sentencianotice,$mibase )){ 
							$url =str_replace(" ","-",$rsnotice["titulo_destacado"]);
							$url = sanear_string($url);
							$url =$url."-&".$rsnotice["id"]."nw";
							
							?>
					    	<li>
					    		<a href="<?= $url; ?>">
								<?= str_replace("\r\n","<br>",$rsnotice["titulo_destacado"]); ?>
					           	</a>
					        </li>
					        <?php } ?>
        				</ul>
    				</div>
				</div>
			</div>
		</article>
		<?php } ?>

<!-- paratodas las secciones -->
		<article class="col-xs-12 contacto" id="contacto">
			<div class="cont-contacto row">
				<form class="col-xs-12 col-sm-8 col-md-9" method="post" action="http://www.desarrollodesitiosweb.cl/envio" id="myform" name="myform">
					<h3>Contáctenos</h3>
					<p class="puntos">...</p>
					<p>Llene completamente el formulario de contacto y pronto te responderemos<br> también puedes escribirnos a <b>ventas@emagenic.cl</b>
					</p>
      				<fieldset id="form">
  						<div class="row">
  							<div class="col-xs-12">
    							<input type="text" size="30" class="input" placeholder="Nombre" name="fname">
    						</div>
  						</div>
  						<div class="row">
  							<div class="col-xs-12 col-md-6">
    							<input type="text" size="30" class="input" name="fphone" placeholder="Teléfono"> 
    						</div>
    						<div class="col-xs-12 col-md-6">
    							<input type="text" size="30" class="input" name="femail" placeholder="E-mail">
    						</div>
  						</div>
  						<div class="row">
  							<div class="col-xs-12">
    							<textarea name="fcomment" class="mensaje" placeholder="Mensaje"></textarea>
    						</div>
  						</div>
  						<div class="row">
  							<div class="col-xs-12">
								<div id="loading"></div>
								<div id="result"></div>
        						<input name="fasunto" type="hidden" class="input" value="Consulta emagenic.cl" size="30"> 
     							<input type="submit" class="enviar" name="mysubmit" value="Enviar">
    						</div>
    					</div>
    				</fieldset>
    			</form>
    			<div class="info-contacto col-xs-12 col-sm-4 col-md-3">
    				<h3>Nuestra Sucursal</h3>
    				<p class="puntos">...</p>

    				<p>Italia Nº 746 - Rancagua Norte Rancagua - Chile<br></br>
    					Tel: (72) 2 532 645<br>
    					E-mail: ventas@emagenic.cl
    				</p>

    				<h3>Horarios de Atención</h3>
    				<p class="puntos2">...</p>

    				<p>De lunes a Viernes desde 09:00 hrs. a 18:30 hrs.
    				</p>
				</div>
			</div>
		</article>
		<!-- Desde aca inicia el cuadro mapa -->
		<section id="mapa" class="col-xs-12 mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6602.690490576947!2d-70.74405002350338!3d-34.163089732910265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x6d92521a4bedf258!2sEmagenic+Ltda!5e0!3m2!1ses!2scl!4v1431107283111" width="100%" height="450" frameborder="0" style="border:0"></iframe>
		    
		    <div class="bloque" onClick="style.pointerEvents='none'" ></div>
		    
		</section>
		<!-- Hasta aca llega el cuadro mapa -->
		<div class="col-xs-12 tecnologia">
			<div class="row contenido1">
				<p>Somos una empresa que se dedica al desarrollo y diseño<br>
				de páginas web para Chile y el mundo.
				</p>	
			</div>
			<div class="row contenido">
				<figure class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
					<img src="http://www.desarrollodesitiosweb.cl/imagenes/logos/1.png">
				</figure>

				<figure class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
					<img src="http://www.desarrollodesitiosweb.cl/imagenes/logos/2.png">
				</figure>

				<figure class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
					<img src="http://www.desarrollodesitiosweb.cl/imagenes/logos/3.png">
				</figure>

				<figure class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
					<img src="http://www.desarrollodesitiosweb.cl/imagenes/logos/4.png">
				</figure>

				<figure class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
					<img src="http://www.desarrollodesitiosweb.cl/imagenes/logos/5.png">
				</figure>

				<figure class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
					<img src="http://www.desarrollodesitiosweb.cl/imagenes/logos/6.png">
				</figure>
			</div>

		</div>

		<div class="col-xs-12 menu-inf">
			<div class="row cont-menu">
				<div class="cont-botones">
					<h4>Desarrollo Web</h4>
					<a class="col-xs-12" href="#">Planes</a>
					<a class="col-xs-12" href="#">Comparar Planes</a>
					<a class="col-xs-12" href="#">News Letter</a>
					<a class="col-xs-12" href="#">Landing Page</a>
					<a class="col-xs-12" href="#">Servicios Frontend</a>
				</div>

				<div class="cont-botones">
					<h4>Diseño Gráfico</h4>
					<a class="col-xs-12" href="#">Imagen Corporativa</a>
					<a class="col-xs-12" href="#">Diseño</a>
					<a class="col-xs-12" href="#">Impresión</a>
					<a class="col-xs-12" href="#">Vectorización</a>
				</div>

				<div class="cont-botones">
					<h4>Web Hosting</h4>
					<a class="col-xs-12" href="#">Hosting</a>
					<a class="col-xs-12" href="#">Reseller</a>
					<a class="col-xs-12" href="#">VPS</a>
					<a class="col-xs-12" href="#">Cloud</a>
				</div>

				<div class="cont-botones">
					<h4>Marketing Online</h4>
					<a class="col-xs-12" href="#">Campaña SEO</a>
					<a class="col-xs-12" href="#">Campaña SEM</a>
					<a class="col-xs-12" href="#">Social Media</a>
					<a class="col-xs-12" href="#">E-mail Marketing</a>
				</div>

				<div class="cont-botones">
					<h4>Desarrollo Web</h4>
					<a class="col-xs-12" href="#">Carro Compras</a>
					<a class="col-xs-12" href="#">ERP</a>
					<a class="col-xs-12" href="#">Base de Datos</a>
					<a class="col-xs-12" href="#">Sistemas Web</a>
				</div>
			</div>

			<div class="row sociales">
				<a href="https://twitter.com/emagenic" target="new"><img src="http://www.desarrollodesitiosweb.cl/imagenes/social/1.png" alt="Twitter"></a>
				<a href="skype:emagenicltda?call" target="new"><img src="http://www.desarrollodesitiosweb.cl/imagenes/social/2.png" alt="Skype"></a>
				<a href="https://www.linkedin.com/company/emagenic-ltda?trk=company_logo" target="new"><img src="http://www.desarrollodesitiosweb.cl/imagenes/social/3.png" alt="linkedin"></a>
				<a href="https://www.facebook.com/Emagenic?ref=hl" target="new">
                <img src="http://www.desarrollodesitiosweb.cl/imagenes/social/4.png" alt="Facebook">
                </a>
                
				<a href="//emagenicltda.blogspot.com/" target="new">
                <img src="http://www.desarrollodesitiosweb.cl/imagenes/social/5.png" alt="blog">
                </a>
                
				<a href="https://www.emagenic.cl" target="new"><img src="http://www.desarrollodesitiosweb.cl/imagenes/social/6.png"></a>
				<a rel="Publisher" href="https://plus.google.com/+EmagenicLtdaRancagua" target="new">
                <img src="http://www.desarrollodesitiosweb.cl/imagenes/social/7.png" alt="Googleplus">
                </a>
                
				<a href="https://www.youtube.com/user/emagenicltda" target="new">
                <img src="http://www.desarrollodesitiosweb.cl/imagenes/social/8.png" alt="Youtube">
                </a>
			</div>
			<div class="row linea"> 
			</div>
		</div>

		<footer class="col-xs-12">
			<div class="row info-footer">
				<p><img src="http://www.desarrollodesitiosweb.cl/imagenes/logo-xs.png"> © 2015 Todos los derechos reservados a Ingeniería y Desarrollo Emagenic Ltda</p>
			</div>
		</footer>
		<!-- paratodas las secciones -->

		<!-- script mneu desplegable -->
   		<script src="js/classie.js"></script>
		<script src="js/main3.js"></script>
		<!-- fin script mneu desplegable -->
		<!-- REDES SOCIALES -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
  </script>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  </script>

	<!-- google + -->
	<script type="text/javascript">
	  window.___gcfg = {lang: 'es-419'};

	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/platform.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
    </body>

 </html>