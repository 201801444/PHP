<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    thead{ background-color: yellow }
    body{ background-color: blanchedalmond }
  </style>
</head>
<body>
  <div class="container">
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
          <th>CODIGO DE ARTICULO</th>
          <th>SECCION</th>
          <th>NOMBRE DEL ARTICULO</th>
          <th>PRECIO</th>
          <th>FECHA</th>
          <th>IMPORTADO</th>
          <th>PAIS DE ORIGEN</th>
          </tr>         
        </thead>  
        <tbody>
  <?php foreach($matrizProductos as $fila):?>
          <tr>
            <td><?php echo $fila["CODIGO_ARTICULO"]?></td>
            <td><?php echo $fila["SECCION"]?></td>
            <td><?php echo $fila["NOMBRE_ARTICULO"]?></td>
            <td><?php echo $fila["PRECIO"]?></td>
            <td><?php echo $fila["FECHA"]?></td>
            <td><?php echo $fila["IMPORTADO"]?></td>
            <td><?php echo $fila["PAIS_DE_ORIGEN"]?></td>
          </tr>
  <?php endforeach; ?>
        </tbody>
    </table>
   </div>
</body>
</html>