<?php
include "configs/db.php";

if(
	isset($_POST["username"]) && isset($_POST["password"])
	&& $_POST["username"] != "" && $_POST["password"] != ""
	&& $_POST["fullname"] != "" && $_POST["email"] != ""
) {
	// Добавить пользователя в БД
	$sql = "INSERT INTO `users` (`username`, `password`, `fullname`, `email`) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "', '" . $_POST["fullname"] . "', '" . $_POST["email"] . "')";
	// Если форма отправлена
	if (mysqli_query($connect, $sql)) {
		// Если данные введены коректно создаем куки пользователя и переходим на страницу форума
		if ($_POST["password"] == $_POST["repeat"]) {
			echo "<script> alert ('Пользователь добавлен!'); </script>";
			$sql = "SELECT * FROM `users` WHERE `username` LIKE '". $_POST["username"] ."' AND `password` LIKE '". $_POST["password"] ."'";
			//Проверка наличия данного пользователя в БД
			$result = mysqli_query($connect, $sql);
			$qty_users = mysqli_num_rows($result);
			if($qty_users == 1){
				$person = mysqli_fetch_assoc($result);
				//Создаем cookie для хранения данных пользователя
				setcookie("person_id", $person["id"], time() + 3600);
				header("Location: /");
			}
		} else {
			echo "<script> alert ('Пароль введён неправильно!'); </script>";
		}
	} else {
		echo "<script> alert ('Произошла ошибка!'); </script>" . mysqli_error($connect);
	}
}

?>


<div class="form" id="signup-form" style="display: none;">
	<div class="form__title">
		<span>Sign Up</span>
		<hr>
	</div>
	<div class="form__input">
		<form action="#" method="POST">
			<div class="input">
				<span>Username<span>*</span></span>
				<input type="text" class="input__username" name="username">
			</div>
			<div class="input">
				<span>Email<span>*</span></span>
				<input type="email" class="input__email" name="email">
			</div>
			<div class="input">
				<span>Fullname<span>*</span></span>
				<input type="text" class="input__fullname" name="fullname">
			</div>
			<div class="input">
				<span>Password<span>*</span></span>
				<input type="password" class="input__password" name="password">
			</div>
			<div class="input">
				<span>Repeat<span>*</span></span>
				<input type="password" class="input__repeat" name="repeat">
			</div>
			<div class="input__buttons">
				<button type="submit" class="button full">Sign Up</button>
			</div>
		</form>
	</div>
</div>