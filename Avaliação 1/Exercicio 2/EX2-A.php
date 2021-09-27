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

  <footer id= "id1" class = "jumbotron">
    <h2>Exercício 2</h2>
  </header>

	<table width = "95%" border = "1" align = "center">
		
			<tr><td>
			<div class = "titulo1"> Forms </div><br>
				<form name = "formulario" action = "EX2-B.php" method = "post"> 
					
					<b> Insira seu nome </b> <input type = "text" name = "nome"><br> 
					<b> Seu e-mail: </b> <input type = "text" name = "email"><br>
					<b> Envie uma mensagem para nós: </b><br>
						<textarea name = "mensagem" cols = "25" rows = "15"></textarea>
					<br><hr>  
						
					<b> Escolha as suas cores preferidas: </b><br> 
						<input type = "checkbox" name = "cores[]" value = "Preto"> Preto <br>
						<input type = "checkbox" name = "cores[]" value = "Azul"> Azul <br>
						<input type = "checkbox" name = "cores[]" value = "Vermelho"> Vermelho <br>
						<input type = "checkbox" name = "cores[]" value ="Rosa"> Rosa <br>
					<hr>
						<input type = "checkbox" name = "news" value = "1">
							<b> Receber notícias no seu email? </b>
					<br><hr> 
						
					<b> Qual seu sistema operacional? </b><br> 
						<input type = "radio" name = "sistema" value = "Windows"> Windows
						<input type = "radio" name = "sistema" value = "Linux"> Linux 
						<input type = "radio" name = "sistema" value = "Android"> Android
					<br><hr> 
					
					<b> Qual a marca de seu monitor? </b><br> 
						<input type = "radio" name = "monitor" value = "Samsung"> Samsung 
						<input type = "radio" name = "monitor" value = "LG"> LG 
						<input type = "radio" name = "monitor" value = "Philco"> Philco
						<input type = "radio" name = "monitor" value = "Outro"> Outro
					<br><hr>
						
					<b> Qual seu processador? </b><br>
						<select name = "processador">
							<option value = Pentium> Pentium </option>
							<option value = Ryzen> Ryzen </option>
							<option value = Celeron> Celeron III </option>
							<option value = Series I> Series I </option>
						</select>
					<br><hr> 
					
					</select>
					Campo de texto teste 1: <input type = "text" name = "campo1"><br> 
					Campo de texto teste 2: <input type = "text" name = "campo2"><br>
					<br><hr><br>

					<b> Livros que deseja comprar? </b>
					<br> Sgure "CTRL" para selecionar mais de um:</I><br>
						<select multiple name = "livros[]">
							<option value = "Padrões de Projeto"> Padrões de Projeto </option>
							<option value = "Harry Potter e o Prisioneiro de Azkaban"> Harry Potter e o Prisioneiro de Azkaban </option>
							<option value = "Senhor dos Aneis 1"> Senhor dos Aneis 1 </option>
							<option value = "Grande Sertão Veredas"> Grande Sertão Veredas </option>
							<option value = "Dicionário Houaiss"> Dicionário Houaiss </option>
						</select>
					<br><hr>

				<input type = "submit" value = "Enviar">
				<br><hr>
				</form> 
			</td></tr>
		
	</table>

    <footer id= "id1" class = "jumbotron">    
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
  </footer>

</body>
</html>