<?
session_start();
if($_SESSION['uname']!=null){
    
    require_once('conexion.php');
    $id=$_GET['IDmuestra'];
    
    $con=new mysqli(servidorbd,usuariobd,psw,nombrebd);
    
    if($con->connect_error)
        echo 'Error'.$con->connect_error;
    
    $sql="DELETE FROM muestra WHERE IDmuestra=$id";
    
    if($con->query($sql)===TRUE){
        echo 'Efemeride eliminada';
    }
    else
        echo 'No es posible eliminar la efemeride';
    
    $con->close();
    
    //header('Location: /efem/mostrarefe.php');
    
}
?>
