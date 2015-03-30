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
  
  <script>
  $(function() {
	$( ".datepicker" ).datepicker();
  });
  </script>
</head>

<body>
  <!-- Home -->
  <div data-role="page" data-theme="e">
    <!-- header -->
	<div data-role="header">
      <h1>Parroquia<br />San Juan de la Cruz</h1>
	</div>
	<!-- /header -->
	
	<!-- content -->
	<div role="main" class="ui-content">
      <div style="text-align:right">Logged in as: <span style="color:#099";><?php echo $_SESSION['user_name']; ?></span>. <a href="index.php?logout" data-ajax="false">Logout</a></div>
      
      <!-- Lectures Form Box -->
      <h2>Insertar Lecturas</h2>
      <form method="post" action="lecturas.php" name="lectures" data-ajax="false">
        <div class="ui-grid-a ui-responsive">
          <div class="ui-block-a">
            <input class="datepicker" id="datepicker" type="text" name="date" placeholder="Fecha" required />
        
            <textarea id="content2" type="text" name="content" cols="40" rows="15" placeholder="Conenido" required ></textarea>
          </div>
          
          <div class="ui-block-b">
            <input type="submit"  name="insert" value="Insertar" />
          </div>
        </div>
      </form>
      <!-- /Lectures Form Box -->
      <br />
      
      <hr />
      
      <!-- News Form Box -->
      <h2>Insertar Aviso</h2>
      <form method="post" action="avisos.php" name="avisos" data-ajax="false">
        <div class="ui-grid-a ui-responsive">
          <div class="ui-block-a">
            <input class="datepicker" id="datepicker2" type="text" name="fechaInicio" placeholder="Fecha inicial" required />
            
            <input class="datepicker" id="datepicker3" type="text" name="fechaFin" placeholder="Fecha final" required />
            
            <input id="titulo" type="text" name="titulo" placeholder="Título" required="required" />
        
            <textarea id="content2" type="text" name="content2" cols="40" rows="15" placeholder="Conenido" required ></textarea>
          </div>
          
          <div class="ui-block-b">
            <input type="submit"  name="insert" value="Insertar" />
          </div>
        </div>
      </form>
      <!-- /News Form Box -->
	</div>
	<!-- /content -->
	
	<!-- footer -->
	<div data-role="footer">
	  <h4><?php date('Y') ?> &copy; PSJC.<br />Creado por <a href="http://www.adlersystems.com" target="_blank">Adler Systems</a>.</h4>
	</div>
	<!-- /footer -->
  </div>
  <!-- /Home -->
</body>
</html>