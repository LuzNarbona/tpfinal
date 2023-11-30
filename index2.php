<?php
$conexion=mysqli_connect ("localhost", "root", "", "pruebafinal");
$buscar=$_GET['buscar'];

$consulta="SELECT * FROM hoja1 where Titulo_del_libro='$buscar'";

$resultado =mysqli_query ($conexion, $consulta);


while ($datos=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    echo "<table><tr><td>"; 
    echo $datos['Titulo_del_libro']. "</td><td>";
    echo $datos['Estado_del_libro']. "</td><td>";
    echo $datos['Puntaje_5']. "</td><td>";
    
}
?>