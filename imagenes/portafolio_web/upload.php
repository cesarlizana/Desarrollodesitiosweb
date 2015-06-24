<? 
//tomo el valor de un elemento de tipo texto del formulario 
$cadenatexto = "sitio-web-".$_GET["cadenatexto"].".jpg"; 
 

//datos del arhivo 
$nombre_archivo = $cadenatexto;
$tipo_archivo = $HTTP_POST_FILES['userfile']['type']; 
$tamano_archivo = $HTTP_POST_FILES['userfile']['size']; 
//compruebo si las características del archivo son las que deseo 

    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
	$ruta_imagen = $nombre_archivo;
		$miniatura_ancho_maximo = 500;
		$miniatura_alto_maximo = 500;
		$info_imagen = getimagesize($ruta_imagen);
		$imagen_ancho = $info_imagen[0];
		$imagen_alto = $info_imagen[1];
		$imagen_tipo = $info_imagen['mime'];
		$proporcion_imagen = $imagen_ancho / $imagen_alto;
		$proporcion_miniatura = $miniatura_ancho_maximo / $miniatura_alto_maximo;
		if ( $proporcion_imagen > $proporcion_miniatura ){
  			$miniatura_ancho = $miniatura_alto_maximo * $proporcion_imagen;
  			$miniatura_alto = $miniatura_alto_maximo;
		} else if ( $proporcion_imagen < $proporcion_miniatura ){
  			$miniatura_ancho = $miniatura_ancho_maximo;
  			$miniatura_alto = $miniatura_ancho_maximo / $proporcion_imagen;
		} else {
  			$miniatura_ancho = $miniatura_ancho_maximo;
  			$miniatura_alto = $miniatura_alto_maximo;
		}
		$x = ( $miniatura_ancho - $miniatura_ancho_maximo ) / 2;
		$y = ( $miniatura_alto - $miniatura_alto_maximo ) / 2;
 		$imagen = imagecreatefromjpeg( $ruta_imagen );
		$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );
		$lienzo_temporal = imagecreatetruecolor( $miniatura_ancho, $miniatura_alto );
		imagecopyresampled($lienzo_temporal, $imagen, 0, 0, 0, 0, $miniatura_ancho, $miniatura_alto, $imagen_ancho, $imagen_alto);
		imagecopy($lienzo, $lienzo_temporal, 0,0, $x, $y, $miniatura_ancho_maximo, $miniatura_alto_maximo);
		imagejpeg($lienzo, $nombre_archivo, 80);
	
	
       echo "<div align=center>El archivo ha sido cargado correctamente.</div><div align=center>"; 
	  
		  echo "<a href=../../vender/vender/contenido/sitiosweb.php>"; 
	   
	   
	   
	   
	   
	   
	   echo "VOLVER</a></div>";
    }else{ 
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
    } 

?> 