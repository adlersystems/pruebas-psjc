<?php
header("access-control-allow-origin: *");

include("connect.php");

$query2 = "SELECT * FROM avisos WHERE date_format(expiracion, '%Y-%m-%d') >= date_format(now(), '%Y-%m-%d') ORDER BY expiracion";
$result2 = mysqli_query($link, $query2);
$cantAvisos = mysqli_num_rows($result2);

if ($cantAvisos > 0){
	/* print results */
	while($avisos = mysqli_fetch_array($result2)) {
		?>
        <div data-role="collapsible">
          <h4><?php echo $avisos['titulo'] ?></h4>
          <p><strong><?php echo $avisos['expiracion'] ?></strong></p>
          <?php echo $avisos['contenido'] ?>
        </div>
        <?php
	}
}
else {
	echo '<h4><center>No hay avisos por el momento.</center></h4>';
}

mysqli_close($link);
?>
<!-- AS Framework - www.adlersystems.com -->