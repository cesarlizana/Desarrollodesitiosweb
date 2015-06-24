<?php 
$conn=mysql_connect("localhost","emagenic_externo",",=57igQi?mae"); // ESTABLECER CONEXION
if(!$conn){
	die("error al conectarse al motor");
}
$mibase = mysql_select_db("emagenic_sistema",$conn); //SELECCION BD
if(!$mibase){
	die("error al selecionar la base de datos");
}
$ip = $_SERVER['REMOTE_ADDR'];
$fecha= date('Y-m-d');
$listado = "SELECT count(*) as total from consultas where ip ='$ip' and fecha ='$fecha' ";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
	$contadordepreguntas = $rs["total"];
} 


if ($contadordepreguntas < 9){
	if ($_POST['fname']==""){
		echo "<script> alert('Error, debe escribir un nombre'); </script>";
	} elseif ($_POST['femail']==""){
		echo "<script> alert('Error, debe escribir un email'); </script>";	
	} elseif ($_POST['fphone']==""){
		echo "<script> alert('Error, debe escribir un teléfono'); </script>";
	} elseif ($_POST['fcomment']==""){	
		echo "<script> alert('Error, debe escribir un comentario'); </script>";
	} else{
		if(filter_var($_POST['femail'], FILTER_VALIDATE_EMAIL)){
			$mensaje="La consulta es la siguiente:". "\n\n";
			$mensaje.="Nombre: ".$_POST['fname']."\n";
			$mensaje.="E-mail: ".$_POST['femail']."\n";
			$mensaje.="Telefono: ".$_POST['fphone']."\n";
			$mensaje.="Comentario: ".$_POST['fcomment']."\n";
			$email_destiny="ventas@emagenic.cl";
			echo "<script> alert('Gracias por escribirnos, pronto responderemos'); </script>";
		}else{
			echo "<script> alert('Error, debe escribir una direccion de correo correcta'); </script>";
		}
	}
} else {
        echo "<script> alert('Solo puede hacer 10 consultas diarias via web o al telefono +56 72 2532645'); </script>";
}
	
?>