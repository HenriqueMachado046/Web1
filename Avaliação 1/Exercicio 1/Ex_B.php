<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exercício 1-B</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    
</head>

<body>

    <header id = "id1" class = "jumbotron">
            <h2 class> <b> Exercício 1</b> </h2>
            <p class> <i> Arrays e Tabelas</i> </p>
    </header>

    <nav >
        
      </nav>


      <?php

      $pessoas = array(
          0 => array("nome" => "Fulano", "idade" => 27, "profissao" => "Professor"),
          1 => array("nome" => "Beltrano", "idade" => 29, "profissao" =>"Engenheiro"),
          2 => array("nome" => "Ciclano", "idade" => 15, "profissao" => "Estudante"),
          3 => array("nome" => "Ze", "idade"=> 13, "profissao" => "Estudante"),
          4 => array("nome" => "Ana", "idade" => 21, "profissao" => "Professor"),
          5 => array("nome" => "Teste 1", "idade" => 30, "profissao" => "ProfissaoTeste1"),
          6 => array("nome" => "Teste 2", "idade" => 31, "profissao" => "ProfissaoTeste2"),
          7 => array("nome" => "Teste 3", "idade" => 32, "profissao" => "ProfissaoTeste3"),
          8 => array("nome" => "Teste 4", "idade" => 33, "profissao" => "ProfissaoTeste4")
          );
      ?>
  

          <main class="container">
    
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Profissão</th>
                </tr>

                <h3 class="titulo"> Mostrando os maiores de 18 anos </h3>

      <?php

      $count = 0;
      foreach ($pessoas as $p) {
        if ($p["idade"]>=18){
          
          $nome = $p["nome"];
          $idade = $p["idade"];
          $profissao = $p["profissao"];
          
          echo 
            "<tr>
              <td>$nome</td>
              <td>$idade</td>
              <td>$profissao</td>
            </tr>";

          $count++;

          }
          
        }
        echo "Quantidade total de pessoas maiores:  $count";

        ?>


<main class="container">
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
          <th>Profissão</th>
        </tr>

        <h3 class="titulo"> Mostra os menores de 18 anos </h3>

<?php

$count = 0;
foreach ($pessoas as $p) {
if ($p["idade"]<18){
  
  $nome = $p["nome"];
  $idade = $p["idade"];
  $profissao = $p["profissao"];
  
  echo 
    "<tr>
      <td>$nome</td>
      <td>$idade</td>
      <td>$profissao</td>
    </tr>";

  $count++;

  }
  
}
echo "Quantidade total de pessoas menores:  $count";

?>

                </thead>
              </table>
        
    </main>

    <footer id= "id1" class = "jumbotron">
          <h2>Aspergillus carbonarius</h2>
    </footer>

</body>

</html>