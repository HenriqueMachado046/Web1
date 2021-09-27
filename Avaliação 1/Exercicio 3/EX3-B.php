<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Web1</title>
  <meta charset = "utf-8">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel = "stylesheet" href = "style.css">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<header id= "id1" class = "jumbotron">
    <h2>Exercício 3</h2>
</header>
  
  <table border = "2" width = "75%" align = "center">
		
			<tr><td>
                <div class = "titulo" align = "center"> <b> Insira os nomes <b></div>
                    <tr><td>
                    <?php
                        $nome = $_POST["nome"];
                        $numero = $_POST["numero"];
                        $nr = 1;
                        while ($nr <= $numero) {
                            echo
                            "<form action = 'EX3-C.php' method = 'post'>
                                <tr><td> 
                                    <b> Nome </b> <input type = 'text' name = 'nome[]'> <br>
                                </td></tr><br>";
                            echo "<tr>";
                            echo "<td> $nome </td>";
                            echo "</tr>";
                        $nr++;
                        }
                        echo "<tr> <td> <div> <input type = 'submit' value = 'Enviar'> </div> </td> </tr>";
                        echo "</form>";
                    ?>
                    </td></tr>
                </div>
            </td></tr>
        <br><br>
  </table>
    
  <footer id= "id1" class = "jumbotron">    
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
  </footer>

</body>
</html>