<?php
  $fechaForm = $_POST['date'];
  $fechaConvert = strtotime($fechaForm);
  $fecha = date('Y-m-d',$fechaConvert);
  
  $contenido = $_POST['content'];
  
  $servername = "localhost";
  $username = "sjc_app";
  $password = "Carmelitas_1";
  $dbname = "sjc_app";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO palabra (id, fecha, contenido)
  VALUES (NULL, '$fecha', '$contenido')";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="http://parroquiasjc.org/app/js/jquery-2.1.3.min.js"></script>
  <script src="http://parroquiasjc.org/app/js/jquery.mobile-1.4.5.min.js"></script>
  <script src="http://parroquiasjc.org/app/js/jquery-ui.js"></script>
  
  <link rel="stylesheet" href="http://parroquiasjc.org/app/css/jquery.mobile-1.4.5.min.css" />
  <link rel="stylesheet" href="http://parroquiasjc.org/app/css/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://parroquiasjc.org/app/css/themes/psjc.min.css" />
  <link rel="stylesheet" href="http://parroquiasjc.org/app/css/icon-pack-custom.css"/>
  <link rel="stylesheet" href="http://parroquiasjc.org/app/css/jquery-ui.min.css"/>
  <link rel="stylesheet" href="http://parroquiasjc.org/app/css/jquery-ui.theme.min.css"/>
  
  <link rel="stylesheet" href="http://parroquiasjc.org/app/css/styles.css" />
  
  <title>Parroquia San Juan de la Cruz</title>
  
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://parroquiasjc.org/app/img/assets/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://parroquiasjc.org/app/img/assets/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://parroquiasjc.org/app/img/assets/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="http://parroquiasjc.org/app/img/assets/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="http://parroquiasjc.org/app/img/assets/favicon.png">
  
</head>

<body>
  <!-- Home -->
  <div data-role="page" id="home" data-theme="e">
    <!-- header -->
	<div data-role="header">
      <h1>Parroquia<br />San Juan de la Cruz</h1>
	</div>
	<!-- /header -->
	
	<!-- content -->
	<div role="main" class="ui-content">
	  <?php
	  if ($conn->query($sql) === TRUE) {
		  echo '<div style="text-align:right"><a href="index.php?logout" data-ajax="false">Logout</a></div>';
		  echo '<h3>Lecturas insertadas con éxito.</h3>';
		  echo '<p><a href="index.php" data-ajax="false">¿Insertar más?</a></p>';
	  } else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
	  }
	  
	  $conn->close();
	  ?>
	</div>
	<!-- /content -->
	
	<!-- footer -->
	<div data-role="footer">
	  <h4>2015 &copy; PSJC.<br />Creado por <a href="http://www.adlersystems.com" target="_blank">Adler Systems</a>.</h4>
	</div>
	<!-- /footer -->
  </div>
  <!-- /Home -->
</body>
</html>