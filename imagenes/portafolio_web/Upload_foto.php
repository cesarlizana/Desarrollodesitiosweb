<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<?php 
echo "<form action=upload.php?cadenatexto=".$_GET["id"]." method=post enctype=multipart/form-data> "
?><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000"> 
    <br> 
    <br> 
    <b>Enviar un nuevo archivo: </b> 
    <br> 
    <input name="userfile" type="file"> 
    <br> 
    <input type="submit" value="Grabar"> 
</form> 
</body>
</html>