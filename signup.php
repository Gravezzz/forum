<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Sign up</title>

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
								<div class="button"><a href="signup.php" class="full">Sign Up</a></div>
								<div class="button"><a href="login.php" class="outline">Login</a></div>
							</div>
						</header>
						<!-- Контент под шапкой -->
						<div class="content">
							<!-- Рабочая область -->
							<div class="content__workspace">
								<div class="form">
									<div class="form__title">
										<span>Sign Up</span>
										<hr>
									</div>
									<div class="form__input">
										<form action="#">
											<div class="input">
												<span>Username<span>*</span></span>
												<input type="text" class="input__username">
											</div>
											<div class="input">
												<span>Email<span>*</span></span>
												<input type="email" class="input__email">
											</div>
											<div class="input">
												<span>Fullname<span>*</span></span>
												<input type="text" class="input__fullname">
											</div>
											<div class="input">
												<span>Password<span>*</span></span>
												<input type="password" class="input__password">
											</div>
											<div class="input">
												<span>Repeat<span>*</span></span>
												<input type="password" class="input__repeat">
											</div>
											<div class="input__buttons">
												<div class="button"><a class="full" type="submit">Login</a></div>
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