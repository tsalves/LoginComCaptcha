<?php
/*Inicia a sessão*/ 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teste Captcha</title>
    </head>
    <body>
		<h1>Cadastrar usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Nome</label>
			<input type="text" name="nome" required><br><br>
			
			<label>E-mail</label>
			<input type="email" name="email" required><br><br>

			<img src="captcha.php" alt="Código captcha"><br>
			
			<label>Digite o código</label>
			<input type="text" name="captcha" required><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>