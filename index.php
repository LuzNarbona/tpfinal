<?php
//conexion
$direccion_bd = "localhost";
$nombre_bd = "pruebafinal"; //llama a la base de datos
$usuario_bd = "root";
$contraseña_bd = "";

//formulario
$codigo = $_GET["ID"];
$titulolibro = $_GET["Titulo_del_libro"];
$autores = $_GET["Autor"];
$condicion = $_GET["Estado_del_libro"];
$puntuacion = $_GET["Puntaje_5"];

//primer consulta INSERT INTO 
$conexion = mysqli_connect($direccion_bd, $usuario_bd, $contraseña_bd, $nombre_bd);
$consulta = "INSERT INTO hoja1 (ID,Titulo_del_libro,Autor,Estado_del_libro,Puntaje_5) VALUES 
    ('$codigo','$titulolibro','$autores','$condicion','$puntuacion')"; //pone en la tabla
$resultado = mysqli_query($conexion, $consulta);

if ($resultado == true) {
    header('Location: index.html');
}

?>
