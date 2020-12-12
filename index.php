<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Forum</title>

	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

	<div class="wrapper">
		<div class="forum">
			<div class="conteiner">
				<div class="forum__body">
					<!-- Боковое меню -->
					<nav class="menu">
						<?php include "./particles/menu.php"; ?>
					</nav>
					<!-- Весь контент в правой части -->
					<div class="main">
						<!-- Шапка -->
						<header class="header">
							<?php include "./particles/header.php"; ?>
						</header>
						<!-- Контент под шапкой -->
						<div class="content">
							<!-- Список продуктов -->
							<?php include "./particles/products.php"; ?>
							<!-- Рабочая область -->
							<div class="content__workspace">
								<?php include "./particles/ws_person.php"; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>