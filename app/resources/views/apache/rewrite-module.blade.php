<?php
  if(!function_exists('apache_get_modules') ) {
    phpinfo();
    exit;
  }
  $res = 'Module Unavailable';
  if(in_array('mod_rewrite',apache_get_modules())) {
    $res = 'Module Available';
  }
?>
<html>
  <head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>A mod_rewrite availability check !</title>
    
  </head>
  <body>
    <p>
      <?php
        echo apache_get_version(),"</p><p>mod_rewrite $res";
      ?>
    </p>
  </body>
</html>