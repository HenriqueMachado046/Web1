<!DOCTYPE html>
<html lang = "pt-br">

<head>
  <title> Web1 </title>
  <meta charset = "utf-8">
  <meta name = "viewport" content = "width=device-width, initial-scale=1">
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel = "stylesheet" href ="style.css">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <header class = "jumbotron">
    <h2 class = "cinza"> Exercício 3 </h2>
    <p class = "violeta">	</p>
  </header>

  <table width = "60%" border = "1" align = "center">
    
			<tr> <td>
        <div class = "titulo" align = "center"> <b> TABELA DE NOMES <b></div>
          <tr><td>
            <?php
              $nom = $_POST["nome"];

             

              foreach($nom as $name){
               {
                  echo "<tr>";
                  echo "<td> $name </td>";
                  echo "</tr>";
                
                } 
              }
            ?>
      <tr><td>
    
  </table>

    <br><hr>
      

    <footer class = "jumbotron">
    <h3>Renan Gomes Acosta - 11230237</h3>    
    <h6>"Que a força esteja com você!"</h6>
  </footer>

</body>
</html>