
<?php
//almacenamos aqui la busqueda y posteriormente nos conectamos ala DB
$busqueda = $_GET["busqueda"];

$conexion = new mysqli ("127.0.0.1", "root", "", "miempresa");
//En el HeidiSql se llama miempresa
$conexion->set_charset("utf8");
//Seleccionamos todos los campos y le ponemos la variable busqueda que es la que estamos poniendo nosotros en el buscador
$sql = "select id, nombre, usuario from usuarios where nombre like '%$busqueda%' UNION select id, nombre, usuario from usuarios where id like '%$busqueda%' UNION select id, nombre, usuario from usuarios where usuario like '%$busqueda%' ";

$instruccion = $conexion->prepare($sql);
$instruccion->execute();
$tabla = $instruccion->get_result();
//Lo pintamos (Hice una peque.. guarrada ya que utilice grid y para no modificar todo de cero replique algo de codigo con echo)
echo"<div style='background-color: #ff7f27; color: white; font-size: 25px; text-align: center; border: solid 3px black;'>LISTADO DE USUARIOS</div>";
echo"<div style='display: grid;grid-template-columns: 50% 1fr ;grid-template-rows:repeat(50% 2fr)'>";
while ($registro = $tabla->fetch_object()) {
    echo "<div style='border: solid 3px black;'><p> ID:" . $registro->id ."</p><p> Nombre:" . $registro->nombre . "</p><p> Usuario:" . $registro->usuario . "</p></div>";
}
echo"</div>";
      
?>