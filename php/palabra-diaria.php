<?php
header("access-control-allow-origin: *");

include("connect.php");

$query = "SELECT * FROM palabra WHERE date_format(fecha, '%Y-%m-%d') = date_format(now(), '%Y-%m-%d')";
$result = mysqli_query($link, $query);
$cantPalabra = mysqli_num_rows($result);

if($cantPalabra > 0){
	$palabra = mysqli_fetch_array($result, MYSQLI_BOTH);
	
	echo $palabra["contenido"];
}
else {
	echo '<h4><center>No hay lecturas ingresadas por el momento.</center></h4>';
}

mysqli_close($link);
?>
<!-- AS Framework - www.adlersystems.com -->