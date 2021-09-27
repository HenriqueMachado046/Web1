<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Web1 Semana 02 Trabalho 01</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <header class = "jumbotron">
    <h2 class = "cinza"> Exercício 2 </h2>
    <p class = "violeta"> TABELA </p>
  </header>

  <table border = "1" width = "100%" align = "center">
    <tr>
      <th> NOME </th>
      <th> E-MAIL </th>
      <th> MENSAGEM </th>
      <th> CORES </th>
      <th> NEWSLETTER </th>
      <th> SISTEMA OPERACIONAL </th>
      <th> MONITOR </th>
      <th> PROCESSADOR </th>
      <th> LIVRO </th>
      <th> CAMPO 1 </th>
      <th> CAMPO 2 </th>
    </tr>

    <?php
    	$dados = array( array("nome", "email", "mensagem", "cores[]", "news", "sistema", "monitor", "processador", "livros[]", "campo1", "campo2"),
        );
    
    foreach($dados as $d){

      $nome = $_POST["nome"];
        echo "<tr>";
        echo "<td> $_POST[nome] </td>";

      $email = $_POST["email"];
        echo "<td> $_POST[email] </td>";

      $mensagem = $_POST["mensagem"];
        echo "<td> $_POST[mensagem] </td>";

      if (isset($_POST["cores"])) {
        echo "<td>";
        foreach($_POST["cores"] as $cor) {
            echo "" . $cor . "<br>";
        }
        echo "</td>";
      }
      else {
        echo "<td> null </td>";
      }

      $news = $_POST["news"];
        if($news = true) { 
          echo "<td> true </td>"; 
        } 
        else { 
          echo "<td> false </td>"; 
        }

      $sistema = $_POST["sistema"];
        echo "<td>$_POST[sistema]</td>"; 

      $monitor = $_POST["monitor"];
        echo "<td>$_POST[monitor]</td>";

	    $processador = $_POST["processador"];
        echo "<td>$_POST[processador]</td>";

      if (isset($_POST["livros"])) {
        echo "<td>";
        foreach($_POST["livros"] as $livro) {
            echo "" . $livro . "<br>";
        }
        echo "</td>";
      }
      else {
        echo "<td> null </td>";
      }

      $campo1 = $_POST["campo1"];
        echo "<td>$_POST[campo1]</td>";
	    $campo2 = $_POST["campo2"];
        echo "<td>$_POST[campo2]</td>";
        echo "</tr>";
    }
    ?>
  </table>

    <br><hr>
      

      <footer class = "jumbotron">
    <h3>Renan Gomes Acosta - 11230237</h3>    
    <h6>"Que a força esteja com você!"</h6>
  </footer>

</body>
</html>