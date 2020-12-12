<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Forum</title>

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
								<a class="button full">Sign Up</a>
								<a class="button outline">Login</a>
							</div>
						</header>
						<!-- Контент под шапкой -->
						<div class="content">
							<!-- Рабочая область -->
							<div class="content__workspace">
								<div class="form">
									<div class="form__title">
										<span>Log In</span>
										<hr>
									</div>
									<div class="form__input">
										<form action="#">
											<div class="input">
												<span>Username</span>
												<input type="text" class="input__username">
											</div>
											<div class="input">
												<span>Password</span>
												<input type="password" class="input__password">
											</div>
											<div class="input__buttons">
												<a class="button full" type="submit">Login</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>