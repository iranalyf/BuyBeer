<?php ob_start(); ?>

<!DOCTYPE html>
<html>

<head>
	
</head>
<body>


</body>
</html>

<?php 
 
  $conteudo = ob_get_contents();
  $titulo = "Página Incial";
  ob_end_clean();
  include "layout.php";
?>