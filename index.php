<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>$_POST</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
		Login: <input type="text" name="login" value="" />
		Hasło: <input type="password" name="haslo" value="" />
		<input type="submit" value="Zaloguj się" />
	</form>
	<?php
		if(isset($_POST['login']) && isset($_POST['haslo'])){
			if(!empty($_POST['login']) && !empty($_POST['haslo'])){
				$login=filter_var($_POST['login'],FILTER_SANITIZE_STRING);
				$haslo=filter_var($_POST['haslo'],FILTER_SANITIZE_STRING);
				if($login=="admin" && $haslo="admin"){
					echo "Witaj ".$login.".<br />";
					echo "Administracja";
				}
				else echo "Podałeś niepoprawny login lub hasło. Spróbuj ponownie.";
			}
			else echo "Nie podałeś loginu lub hasła. Spróbuj ponownie.";
		}
		
	?>
</body>
</html>
