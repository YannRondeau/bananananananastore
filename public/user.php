<?php
session_start();
include "../services/tools.php";


$message = '';

if (isset($_POST["email"]) && isset($_POST["password"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$user = getConnect($email, $password);

	
	if (is_array($user)) {
		$_SESSION['iduser'] = $user['id'];
		$_SESSION['firstname'] = $user['firstname'];
		$_SESSION['lastname'] = $user['lastname'];


		header('Location: shop.php');
		exit;
		// mettre en session le user id
	} else {
		if ($user == 1) {
			$message = "wrong password";
		} else {
			$message = "wrong email";
		}
	}
}



include "../view/header.phtml";
?>
	<div>
		<?= $message ?>
	</div>

	<main>	
		<form action="user.php" method="post">
			<fieldset>
				<legend>Login</legend>
				<input class="center" type="text" name="email" placeholder="Email">
				<input class="center" type="text" name="password" placeholder="password">
				<button class="center" type="submit">Connect</button>
			</fieldset>
		</form>
	</main>
</body>
</html>