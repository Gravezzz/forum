<?php
include "configs/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Create</title>

	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/create.css">

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
								<div class="workspace__create">
									<textarea placeholder="Create new try story."></textarea>
								</div>
								<div class="workspace__publish">
									<div class="publish__file">
										<a href="#">
											<div class="icon"><img src="assets/img/clip.svg" alt=""></div>
										</a>
										<ul class="file__img"></ul>
									</div>
									<div class="publish__button">
										<div class="button"><a class="full" type="submit">Publish</a></div>
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