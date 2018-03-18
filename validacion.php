<?php
require_once 'conexion.php';
$conn = new mysqli(servidorbd, usuariobd, psw, nombrebd);
$nom=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="/".$foto;
copy($ruta,$destino);

$sql="insert into foto (nombre,foto) values('$nom','$destino')";
$result = $conn->query($sql);

echo "<img src='".$result."' border='0' width='300' height='100'>";
header("Location: index.php");

?>
