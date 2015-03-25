<?php
  header("access-control-allow-origin: *");
  
  /*$phoneAppVersion = trim($_POST['appVersion']);
  
  $xml=simplexml_load_file("config.xml");
  $newVersion = trim($xml->version);
  
  echo $phoneAppVersion ."<br />";
  echo $newVersion ."<br /><br />";
  
  if($phoneAppVersion != $newVersion and $phoneAppVersion != ''){
	  echo '<a href="http://www.parroquiasjc.org/app/update.html" class="ui-btn ui-mini ui-corner-all ui-btn-inline ui-icon-recycle ui-btn-icon-left ui-btn-f">Actualizaci&oacute;n disponible</a>';
  }*/
  
  // -----------------------------------------------------------------
  
  $updateAndroid = '../apk/PSJCApp-debug.apk';
  $updateWindows = '../apk/app.xap';
  
  if (file_exists($updateAndroid) and file_exists($updateWindows)) {
	  echo '<a href="http://www.parroquiasjc.org/app/update.html" class="ui-btn ui-mini ui-corner-all ui-btn-inline ui-icon-recycle ui-btn-icon-left ui-btn-f">Actualizaci&oacute;n disponible</a>';
  }
?>