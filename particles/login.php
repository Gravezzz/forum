<?php
include "configs/db.php";
setcookie("person_id", "", 0);

if(
	isset($_POST["log-username"]) && isset($_POST["log-password"])
	&& $_POST["log-username"] != "" && $_POST["log-password"] != ""
) {
	$sql = "SELECT * FROM `users` WHERE `username` LIKE '". $_POST["log-username"] ."' AND `password` LIKE '". $_POST["log-password"] ."'";

	//Проверка наличия данного пользователя в БД
	$result = mysqli_query($connect, $sql);
	$qty_users = mysqli_num_rows($result);
	if($qty_users == 1){
		$person = mysqli_fetch_assoc($result);
		//Создаем cookie для хранения данных пользователя
		setcookie("person_id", $person["id"], time() + 3600);
		header("Location: /");
	} else {
		echo "<script> alert ('Логин или пароль введены не верно!'); </script>";
	}
}

?>


<div class="form" id="login-form">
	<div class="form__title">
		<span>Log In</span>
		<hr>
	</div>
	<div class="form__input">
		<form action="#" method="POST">
			<div class="input">
				<span>Username</span>
				<input type="text" class="input__username" name="log-username">
			</div>
			<div class="input">
				<span>Password</span>
				<input type="password" class="input__password" name="log-password">
			</div>
			<div class="input__buttons">
				<button type="submit" class="button full">Login</button>
			</div>
		</form>
	</div>
</div>