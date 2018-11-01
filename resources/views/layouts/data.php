<?php 
$conexion=mysqli_connect('localhost','root','','soft2');

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$regiones=$_POST['regiones'];

	$sql="SELECT id,
			 nombre,
			 id_region 
		from comunas 
		where id_region='$regiones'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>SELECT 2 (paises)</label> 
			<select id='comunas' name='comunas'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>