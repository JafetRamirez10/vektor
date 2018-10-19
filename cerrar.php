<?php 
 session_start();
session_destroy();
echo '<script> location.href="index.php?cerrar=true"</script>';

 ?>