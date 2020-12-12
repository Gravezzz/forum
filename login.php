<?php
include "configs/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Login</title>

	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/login.css">

</head>

<body>

	<div class="wrapper">
		<div class="forum">
			<div class="conteiner">
				<div class="forum__body">
					<!-- Боковое меню -->
					<nav class="menu">
						<!-- Логотип -->
						<a href="/">
							<div class="menu__logo">
								<img src="assets/img/logo.svg" alt="The logo">
							</div>
						</a>
						<hr>
					</nav>
					<!-- Весь контент в правой части -->
					<div class="main">
						<!-- Шапка -->
						<header class="header">
							<span>Forum</span>
							<div class="header__buttons">
								<div class="button signup"><a href="#" id="signup" class="outline">Sign Up</a></div>
								<div class="button login"><a href="#" id="login" class="full">Login</a></div>
							</div>
						</header>
						<!-- Контент под шапкой -->
						<div class="content">
							<!-- Рабочая область -->
							<div class="content__workspace">
								<?php
									include "particles/login.php";
								?>

								<?php
									include "particles/signup.php";
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="assets/js/script.js"></script>

</body>

</html>