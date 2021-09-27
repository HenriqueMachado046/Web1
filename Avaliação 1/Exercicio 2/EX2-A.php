<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Web1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

  <header class="jumbotron">
    <h2 class="cinza">Exercício 2</h2>
    <p class="violeta">	</p>
  </header>

	<table width = "95%" border = "1" align = "center">
		
			<tr><td>
			<div class = "titulo1"> Forms </div><br>
				<form name = "formulario" action = "EX2-B.php" method = "post"> 
					
					<b> Nome </b> <input type = "text" name = "nome"><br> 
					<b> E-mail: </b> <input type = "text" name = "email"><br>
					<b> Mensagem: </b><br>
						<textarea name = "mensagem" cols = "30" rows = "10"></textarea>
					<br><hr>  
						
					<b> Escolha as suas cores preferidas: </b><br> 
						<input type = "checkbox" name = "cores[]" value = "Preto"> Preto <br>
						<input type = "checkbox" name = "cores[]" value = "Verde"> Verde <br>
						<input type = "checkbox" name = "cores[]" value = "Vermelho"> Vermelho <br>
						<input type = "checkbox" name = "cores[]" value ="Branco"> Branco <br>
					<hr>
						<input type = "checkbox" name = "news" value = "1">
							<b> Receber Newsletter? </b>
					<br><hr> 
						
					<b> Qual seu sistema operacional? </b><br> 
						<input type = "radio" name = "sistema" value = "Windows"> Windows
						<input type = "radio" name = "sistema" value = "Linux"> Linux 
						<input type = "radio" name = "sistema" value = "Mac"> Mac
					<br><hr> 
					
					<b> Qual a marca de seu monitor? </b><br> 
						<input type = "radio" name = "monitor" value = "Samsung"> Samsung 
						<input type = "radio" name = "monitor" value = "LG"> LG 
						<input type = "radio" name = "monitor" value = "Outro"> Outro
					<br><hr>
						
					<b> Qual seu processador? </b><br>
						<select name = "processador">
							<option value = Pentium> Pentium </option>
							<option value = AMD> AMD </option>
							<option value = Celeron> Celeron </option>
						</select>
					<br><hr> 
					
					</select>
					Campo 1: <input type = "text" name = "campo1"><br> 
					Campo 2: <input type = "text" name = "campo2"><br>
					<br><hr><br>

					<b> Livros que deseja comprar? </b>
					<br> <I>Obs: segure "CTRL" para selecionar mais de um.</I><br>
						<select multiple name = "livros[]">
							<option value = "Biblia do PHP 4"> Biblia do PHP 4 </option>
							<option value = "PHP Professional"> PHP Professional </option>
							<option value = "Iniciando em PHP"> Iniciando em PHP </option>
							<option value = "Novidades do PHP 5"> Novidades do PHP 5 </option>
							<option value = "Biblia do MySQL"> Biblia do MySQL </option>
						</select>
					<br><hr>

				<input type = "submit" value = "ENVIAR">
				<br><hr>
				</form> 
			</td></tr>
		
	</table>

    <footer class = "jumbotron">
    <h3>Renan Gomes Acosta - 11230237</h3>    
    <h6>"Que a força esteja com você!"</h6>
  </footer>

</body>
</html>