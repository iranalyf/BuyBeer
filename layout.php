<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $titulo; ?></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="static/css/estilo.css" >
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="static/js/Chart.min.js"></script> 
<script src="static/js/graficoProdutos.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
   <a style="font-size: 20px;margin-left: 60px" href="index.php">Cervejaria Beer</a>
      <ul class="nav navbar-nav navbar-right">
     
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="vendedores/index.php">Vendedores</a></li>
            <li><a href="clientes/index.php">Clientes</a></li>       
            <li><a href="fabricante_cerveja/index.php">Fabricantes </a></li>   
             <li role="separator" class="divider"></li>
            <li><a href="cervejas/index.php">Cervejas</a></li>              
          </ul>

            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="repository/relatorio_todas_cervejas_PDF.php">Relatório de Cervejas Cadastrados PDF</a></li>

          </ul>
        </li>

          <li><a href="#">Sair</a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>


   <div class="container">
     <?php echo $conteudo; ?>

      </div>

</body>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="static/js/jquery-3.1.1.min.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
